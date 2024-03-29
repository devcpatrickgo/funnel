<?php /* Smarty version 2.6.18, created on 2016-07-05 14:13:09
         compiled from import_language.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'localize', 'import_language.tpl', 6, false),)), $this); ?>
<!-- import_language -->

<div class="SystemLanguages">
  <div class="FormFieldset">
  	<div class="FormFieldsetHeader">
  		<div class="FormFieldsetHeaderTitle"><?php echo smarty_function_localize(array('str' => 'Available languages'), $this);?>
</div>
  		<div class="FormFieldsetHeaderDescription"><?php echo smarty_function_localize(array('str' => 'To make it easier for you, some languages are already included in the distribution'), $this);?>
<br/>
<?php echo smarty_function_localize(array('str' => 'To import new language to the system, click on "Import" icon next to language that you would like to import.'), $this);?>
<br/>
<?php echo smarty_function_localize(array('str' => 'Warning: If language with the same language code (e.g. [en-US]) already exists, translations and language metadata will be overwritten with the values loaded from imported language!!.'), $this);?>
</div>
  	</div>
  	<?php echo "<div id=\"SystemLanguagesGrid\"></div>"; ?>
  </div>

  <div class="FormFieldset">
  	<div class="FormFieldsetHeader">
  		<div class="FormFieldsetHeaderTitle"><?php echo smarty_function_localize(array('str' => 'Upload custom language'), $this);?>
</div>
  		<div class="FormFieldsetHeaderDescription"><?php echo smarty_function_localize(array('str' => 'Warning: If language with the same language code (e.g. [en-US]) already exists, translations and language metadata will be overwritten with the values from the uploaded language!'), $this);?>
</div>
  	</div>
  	<?php echo "<div id=\"CustomLanguageUpload\"></div>"; ?>
    <?php echo "<div id=\"uploadedLanguageFileForm\"></div>"; ?>
  </div>
</div>

<?php echo "<div id=\"CloseButton\"></div>"; ?>