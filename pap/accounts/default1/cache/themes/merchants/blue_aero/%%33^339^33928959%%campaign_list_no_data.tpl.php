<?php /* Smarty version 2.6.18, created on 2016-07-06 14:13:36
         compiled from campaign_list_no_data.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'localize', 'campaign_list_no_data.tpl', 2, false),)), $this); ?>
<!-- campaign_list_no_data -->
<div class="noDataHeader"><?php echo smarty_function_localize(array('str' => 'No data or nothing matches your search'), $this);?>
</div>
<div class="noDataText"><?php echo smarty_function_localize(array('str' => 'Real list should look like this:'), $this);?>
</div>
<div class="campListNoData">&nbsp;</div>