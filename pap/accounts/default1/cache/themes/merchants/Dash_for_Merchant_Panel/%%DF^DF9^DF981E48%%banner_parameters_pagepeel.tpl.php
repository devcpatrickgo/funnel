<?php /* Smarty version 2.6.18, created on 2016-07-05 14:12:58
         compiled from banner_parameters_pagepeel.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'localize', 'banner_parameters_pagepeel.tpl', 7, false),)), $this); ?>
<!-- banner_parameters_pagepeel -->

<div class="BannerParametersPagePeel">
    <?php echo "<div id=\"data1\"></div>"; ?>
    <?php echo "<div id=\"data2\"></div>"; ?>
    
    <div class="FormFieldsetSectionTitle"><?php echo smarty_function_localize(array('str' => 'Closed banner settings'), $this);?>
</div>
        <?php echo smarty_function_localize(array('str' => 'By default is Page Pell Banner closed. In following section you can define, how will look banner in closed state.'), $this);?>

        <?php echo "<div id=\"data7\"></div>"; ?>
        <?php echo "<div id=\"data3\"></div>"; ?>
        <?php echo "<div id=\"data4\"></div>"; ?>
    
    <div class="FormFieldsetSectionTitle"><?php echo smarty_function_localize(array('str' => 'Opened banner settings'), $this);?>
</div>
        <?php echo smarty_function_localize(array('str' => 'Peel Banner is opened on mouse over event. In following section you can define, how will look banner, when visitor will go with mouse over and banner will be opened.'), $this);?>

        <?php echo "<div id=\"data6\"></div>"; ?>
        <?php echo "<div id=\"data5\"></div>"; ?>
        
    <div class="FormFieldsetSectionTitle"><?php echo smarty_function_localize(array('str' => 'Preview'), $this);?>
</div>
        <?php echo smarty_function_localize(array('str' => 'Preview is generated using saved values. If you made changes, please push Save button before previewing of banner.'), $this);?>

        <br/>
        <?php echo "<div id=\"preview\"></div>"; ?>
</div>