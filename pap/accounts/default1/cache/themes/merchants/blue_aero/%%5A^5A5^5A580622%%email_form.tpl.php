<?php /* Smarty version 2.6.18, created on 2016-07-06 14:14:09
         compiled from email_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'localize', 'email_form.tpl', 4, false),)), $this); ?>
<!-- email_form -->
<div class="EmailForm">
<div class="Description">
<?php echo smarty_function_localize(array('str' => 'Text enclosed by \#\# is considered a language constant and can be translated to various languages.'), $this);?>

<a href="<?php echo $this->_tpl_vars['knowledgebaseUrl']; ?>
542010-Using-language-constants-in-the-templates" target="_blank"><?php echo smarty_function_localize(array('str' => 'Read more details in our knowledgebase:'), $this);?>
</a>
</div> 
<fieldset>
<legend><?php echo smarty_function_localize(array('str' => 'Mail'), $this);?>
</legend>
    <?php echo "<div id=\"subject\"></div>"; ?>

	<?php echo "<div id=\"body_html\"></div>"; ?>
	<?php echo "<div id=\"body_text\"></div>"; ?>
	<?php echo "<div id=\"customTextBodyControl\" class=\"EmailFormControlTextBody\"></div>"; ?>
</fieldset>

<?php echo "<div id=\"uploadPanel\"></div>"; ?>
</div>
<?php echo "<div id=\"clearButton\"></div>"; ?>
<?php echo "<div id=\"loadTemplateButton\"></div>"; ?>