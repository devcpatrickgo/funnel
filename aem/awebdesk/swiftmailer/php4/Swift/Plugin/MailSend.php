<?php

/**
 * Swift Mailer mail() sending plugin
 * Please read the LICENSE file
 * @author Chris Corbyn <chris@w3style.co.uk>
 * @package Swift_Connection
 * @license GNU Lesser General Public License
 */

require_once dirname(__FILE__) . "/../ClassLoader.php";
Swift_ClassLoader::load("Swift_Events_Listener");

/**
 * Swift mail() send plugin
 * Sends the message using mail() when a SendEvent is fired.  Using the NativeMail connection provides stub responses to allow this to happen cleanly.
 * @package Swift_Connection
 * @author Chris Corbyn <chris@w3style.co.uk>
 */
class Swift_Plugin_MailSend extends Swift_Events_Listener
{
  /**
   * The operating system of the server
   * @var string
   */
  var $OS = null;
  /**
   * The return path in use here
   * @var string
   */
  var $returnPath = null;
  /**
   * The line ending before we intrusively change it
   * @var string
   */
  var $oldLE = "\r\n";
  /**
   * 5th parameter in mail().
   * @var string
   */
  var $additionalParams;
  
  /**
   * Constructor.
   * @param string 5th mail() function parameter as a sprintf() formatted string where %s is the sender.
   */
  function Swift_Plugin_MailSend($params="-oi -f %s")
  {
    $this->setAdditionalParams($params);
    $this->setOS(PHP_OS);
  }
  /**
   * Set the 5th mail() function parameter as a sprintf() formatted string where %s is the sender.
   * @param string
   */
  function setAdditionalParams($params)
  {
    $this->additionalParams = $params;
  }
  /**
   * Get the 5th mail() function parameter as a sprintf() string.
   * @return string
   */
  function getAdditionalParams()
  {
    return $this->additionalParams;
  }
  /**
   * Set the operating system string (changes behaviour with LE)
   * @param string The operating system
   */
  function setOS($os)
  {
    $this->OS = $os;
  }
  /**
   * Get the operating system string
   * @return string
   */
  function getOS()
  {
    return $this->OS;
  }
  /**
   * Check if this is windows or not
   * @return boolean
   */
  function isWindows()
  {
    return (substr($this->getOS(), 0, 3) == "WIN");
  }
  /**
   * Swift's BeforeSendEvent listener.
   * Invoked just before Swift sends a message
   * @param Swift_Events_SendEvent The event information
   */
  function beforeSendPerformed(&$e)
  {
    $message =& $e->getMessage();
    $message->uncacheAll();
    $this->oldLE = $message->getLE();
    if (!$this->isWindows() && $this->oldLE != "\n") $message->setLE("\n");
  }
  /**
   * Swift's SendEvent listener.
   * Invoked when Swift sends a message
   * @param Swift_Events_SendEvent The event information
   * @throws Swift_ConnectionException If mail() returns false
   */
  function sendPerformed(&$e)
  {
    $message =& $e->getMessage();
    $recipients =& $e->getRecipients();
    
    $to = array();
    foreach ($recipients->getTo() as $addr)
    {
      if ($this->isWindows()) $to[] = substr($addr->build(true), 1, -1);
      else $to[] = $addr->build();
    }
    $to = implode(", ", $to);
    
    $bcc_orig = $message->headers->has("Bcc") ? $message->headers->get("Bcc") : null;
    $subject_orig = $message->headers->has("Subject") ? $message->headers->get("Subject") : null;
    $to_orig = $message->headers->has("To") ? $message->headers->get("To") : null;
    
    $bcc = array();
    foreach ($recipients->getBcc() as $addr) $bcc[] = $addr->build();
    if (!empty($bcc)) $message->headers->set("Bcc", $bcc);
    $bcc = null;
    
    $body_data =& $message->buildData();
    $message_body = $body_data->readFull();
    
    $subject_enc = $message->headers->has("Subject") ? $message->headers->getEncoded("Subject") : "";
    
    $message->headers->set("To", null);
    $message->headers->set("Subject", null);
    
    $sender =& $e->getSender();
    $this->returnPath = $sender->build();
    if ($message->headers->has("Return-Path")) $this->returnPath = $message->headers->get("Return-Path");
    if (preg_match("~<([^>]+)>[^>]*\$~", $this->returnPath, $matches)) $this->returnPath = $matches[1];
    
    $this->doMail($to, $subject_enc, $message_body, $message->headers, sprintf($this->getAdditionalParams(), $this->returnPath));
    $message->setLE($this->oldLE);
    $message->headers->set("To", $to_orig);
    $message->headers->set("Subject", $subject_orig);
    $message->headers->set("Bcc", $bcc_orig);
  }
  
  function doMail($to, $subject, $message, $headers, $params)
  {
    $original_from = @ini_get("sendmail_from");
    @ini_set("sendmail_from", $this->returnPath);
    
    $headers = $headers->build();
    if (!ini_get("safe_mode")) $success = mail($to, $subject, $message, $headers, $params);
    else $success = mail($to, $subject, $message, $headers);
    
    if (!$success)
    {
      @ini_set("sendmail_from", $original_from);
      $descript  = '(' . ( !ini_get("safe_mode") ? "Params: $params" : 'safe mode ON');
      $descript .= ").\nTo: $to\nSubject: $subject\n$headers";
      Swift_Errors::trigger(new Swift_ConnectionException(
        "Sending failed using mail() as PHP's default mail() function returned boolean FALSE $descript"));
      return;
    }
    @ini_set("sendmail_from", $original_from);
  }
}
