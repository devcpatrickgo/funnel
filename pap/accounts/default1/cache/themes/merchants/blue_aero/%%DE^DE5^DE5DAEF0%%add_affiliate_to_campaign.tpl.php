<?php /* Smarty version 2.6.18, created on 2016-07-06 14:13:02
         compiled from add_affiliate_to_campaign.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'localize', 'add_affiliate_to_campaign.tpl', 5, false),)), $this); ?>
<!--    add_affiliate_to_campaign  -->

<div class="ScreenHeader CommissionGroupViewHeader">
    <div class="ScreenTitle">
        <?php echo smarty_function_localize(array('str' => 'Add affiliate to campaign'), $this);?>

    </div>
    <div class="ScreenDescription">
    </div>
    <div class="clear"/>
</div>

<div class="AddAffiliateToGroup">
    <fieldset>
        <legend><?php echo smarty_function_localize(array('str' => 'Affiliate'), $this);?>
</legend>
        <?php echo "<div id=\"campaignid\"></div>"; ?>
        <?php echo "<div id=\"userid\"></div>"; ?>
        <?php echo "<div id=\"rstatus\"></div>"; ?>
        <?php echo "<div id=\"sendNotification\"></div>"; ?>
        <?php echo "<div id=\"note\" class=\"AddAffiliateToGroupNote\"></div>"; ?>
    </fieldset>
</div>
<?php echo "<div id=\"addButton\"></div>"; ?>