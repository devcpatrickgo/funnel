<?php /* Smarty version 2.6.18, created on 2016-07-06 14:14:35
         compiled from logs_no_data.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'localize', 'logs_no_data.tpl', 2, false),)), $this); ?>
<!-- logs_no_data -->
<div class="noDataHeader"><?php echo smarty_function_localize(array('str' => 'No data or nothing matches your search'), $this);?>
</div>
<div class="noDataText"><?php echo smarty_function_localize(array('str' => 'Real list should look like this:'), $this);?>
</div>
<div class="logsNoData">&nbsp;</div>