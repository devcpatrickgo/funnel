<?php /* Smarty version 2.6.18, created on 2016-07-05 14:12:46
         compiled from api_integration.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'localize', 'api_integration.tpl', 3, false),)), $this); ?>
<!-- api_integration -->
<div class="FormFieldset">
	<h4><?php echo smarty_function_localize(array('str' => 'Documentation'), $this);?>
</h4>
	<?php echo smarty_function_localize(array('str' => 'API integration documentation can be found in our knowledgebase.'), $this);?>

	<?php echo "<div id=\"readMoreInKBAPIIntegration\"></div>"; ?>
	<br/><br/>
	<h4><?php echo smarty_function_localize(array('str' => 'Download of PapApi.class.php file'), $this);?>
</h4>
	<?php echo smarty_function_localize(array('str' => 'PapApi.class.php is bundled to each distribution of'), $this);?>
 <?php echo $this->_tpl_vars['postAffiliatePro']; ?>
.
	<?php echo smarty_function_localize(array('str' => 'Because of this you should update your PapApi.class.php file each time you update your'), $this);?>
 <?php echo $this->_tpl_vars['postAffiliatePro']; ?>
.
	<?php echo "<div id=\"APIDownloadLink\"></div>"; ?>
</div>