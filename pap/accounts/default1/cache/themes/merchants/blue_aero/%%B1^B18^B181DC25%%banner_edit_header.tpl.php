<?php /* Smarty version 2.6.18, created on 2016-07-06 14:13:24
         compiled from banner_edit_header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'localize', 'banner_edit_header.tpl', 7, false),)), $this); ?>
<!-- banner_edit_header -->
<div class="ScreenHeader ScreenHeader-withRefresh">
	<div class="BigIcon"><?php echo "<div id=\"labelIcon\"></div>"; ?></div>
	<?php echo "<div id=\"RefreshButton\"></div>"; ?>
	<div class="ScreenTitle"><?php echo "<div id=\"name\"></div>"; ?></div>
	<div class="ScreenDescription">
        <div><div class="FloatLeft"><?php echo smarty_function_localize(array('str' => 'Banner Id'), $this);?>
:&nbsp;</div><div class="FloatLeft"><b><?php echo "<div id=\"bannerid\"></div>"; ?></b></div></div>
        <br/>
        <div><div class="FloatLeft"><?php echo smarty_function_localize(array('str' => 'Campaign:'), $this);?>
&nbsp;</div><div class="FloatLeft"><b><?php echo "<div id=\"campaign\"></div>"; ?></b></div></div>
    </div>
    <div class="clear"/>
</div>