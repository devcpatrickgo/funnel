<?php /* Smarty version 2.6.18, created on 2016-07-05 14:13:09
         compiled from mailoutbox_filter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'localize', 'mailoutbox_filter.tpl', 4, false),)), $this); ?>
<!-- mailoutbox_filter -->
<div class="MailOutBoxFilter">
	<div class="FilterRow">
		<div class="FilterLegend"><?php echo smarty_function_localize(array('str' => 'Status'), $this);?>
</div>
            <?php echo "<div id=\"status\"></div>"; ?>
		<div class="clear"></div>
	</div>

	<div class="FilterRow">
		<div class="FilterLegend"><?php echo smarty_function_localize(array('str' => 'Scheduled at'), $this);?>
</div>
            <?php echo "<div id=\"scheduled_at\"></div>"; ?>
		<div class="clear"></div>
	</div>

    <div class="FilterRow">
         <div class="FilterLegend"><?php echo smarty_function_localize(array('str' => 'Custom'), $this);?>
</div>
            <?php echo "<div id=\"custom\"></div>"; ?>
         <div class="clear"></div>
    </div>
</div>

<div style="clear: both;"></div>
   