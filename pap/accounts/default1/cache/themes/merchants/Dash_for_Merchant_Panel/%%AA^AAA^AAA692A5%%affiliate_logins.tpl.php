<?php /* Smarty version 2.6.18, created on 2016-07-05 14:12:46
         compiled from affiliate_logins.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'localize', 'affiliate_logins.tpl', 3, false),)), $this); ?>
<!-- affiliate_logins -->
<?php echo "<div id=\"loginsHeader\"></div>"; ?>
<p><?php echo smarty_function_localize(array('str' => 'Following logins history will help you to identify possible fraudulent affiliates. Suspicious could be, if affiliate logs in with multiple IP addresses coming from different countries in short time.'), $this);?>
</p>
<?php echo "<div id=\"LoginsMap\"></div>"; ?>
<?php echo "<div id=\"AffiliateLoginsGrid\"></div>"; ?>