<?php /* Smarty version 2.6.18, created on 2016-07-05 14:12:58
         compiled from commissions_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'localize', 'commissions_edit.tpl', 8, false),)), $this); ?>
<!-- commissions_edit -->
<div class="CommissionEditTopExtensionPanel">
    <?php echo "<div id=\"FeatureTopExtensionFormPanel\"></div>"; ?>
</div>

<div class="FormFieldset">
	<div class="FormFieldsetHeader">
		<div class="FormFieldsetHeaderTitle"><?php echo smarty_function_localize(array('str' => 'Commission type settings'), $this);?>
</div>
		<div class="FormFieldsetHeaderDescription"></div>
	</div>
  <?php echo "<div id=\"code\"></div>"; ?>
  <?php echo "<div id=\"name\"></div>"; ?>
  <?php echo "<div id=\"approval\" class=\"Approval\"></div>"; ?>
  <?php echo "<div id=\"zeroorderscommission\" class=\"ZeroOrdersCommissions\"></div>"; ?>
  <?php echo "<div id=\"savezerocommission\" class=\"ZeroOrdersCommissions\"></div>"; ?>
  <?php echo "<div id=\"onlyUnique\"></div>"; ?>
</div>

<div class="FormFieldset">
	<div class="FormFieldsetHeader">
		<div class="FormFieldsetHeaderTitle"><?php echo smarty_function_localize(array('str' => 'Commissions'), $this);?>
</div>
		<div class="FormFieldsetHeaderDescription"></div>
	</div>
	<?php echo "<div id=\"resetCommission\"></div>"; ?>
	<?php echo "<div id=\"NormalCommissionValues\"></div>"; ?>
</div>

<?php echo "<div id=\"FeatureExtensionFormPanel\"></div>"; ?>

<?php echo "<div id=\"PluginExtensionFormPanel\"></div>"; ?>

<?php echo "<div id=\"FormMessage\"></div>"; ?>
<?php echo "<div id=\"SaveButton\"></div>"; ?> <?php echo "<div id=\"CloseButton\"></div>"; ?>