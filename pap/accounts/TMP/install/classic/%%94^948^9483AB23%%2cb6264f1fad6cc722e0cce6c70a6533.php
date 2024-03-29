<?php /* Smarty version 2.6.18, created on 2016-06-29 11:48:56
         compiled from text://2cb6264f1fad6cc722e0cce6c70a6533 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'localize', 'text://2cb6264f1fad6cc722e0cce6c70a6533', 1, false),array('modifier', 'escape', 'text://2cb6264f1fad6cc722e0cce6c70a6533', 1, false),array('modifier', 'number', 'text://2cb6264f1fad6cc722e0cce6c70a6533', 8, false),array('modifier', 'currency', 'text://2cb6264f1fad6cc722e0cce6c70a6533', 12, false),)), $this); ?>
<?php echo smarty_function_localize(array('str' => 'Dear'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['firstname'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['lastname'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
,<br>
<br>
<?php echo smarty_function_localize(array('str' => 'new weekly report was generated.'), $this);?>
<br>
<br>
<?php echo smarty_function_localize(array('str' => 'Now is'), $this);?>
 <?php echo $this->_tpl_vars['date']; ?>
 <?php echo $this->_tpl_vars['time']; ?>
<br>
<?php echo smarty_function_localize(array('str' => 'Weekly report is generated for:'), $this);?>
 <span style="font-weight: bold;"><?php echo $this->_tpl_vars['dateFrom']; ?>
 </span>- <span style="font-weight: bold;"><?php echo $this->_tpl_vars['dateTo']; ?>
</span><br>
<br>
<?php echo smarty_function_localize(array('str' => 'Impressions:'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['impressions']->count->all)) ? $this->_run_mod_handler('number', true, $_tmp) : smarty_modifier_number($_tmp)); ?>
<br>
<?php echo smarty_function_localize(array('str' => 'Clicks:'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['clicks']->count->all)) ? $this->_run_mod_handler('number', true, $_tmp) : smarty_modifier_number($_tmp)); ?>
<br>
<br>
<?php echo smarty_function_localize(array('str' => 'Number of Sales:'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['sales']->count->all)) ? $this->_run_mod_handler('number', true, $_tmp) : smarty_modifier_number($_tmp)); ?>
<br>
<?php echo smarty_function_localize(array('str' => 'Commissions per Sales:'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['sales']->commission->all)) ? $this->_run_mod_handler('currency', true, $_tmp) : smarty_modifier_currency($_tmp)); ?>
<br>
<?php echo smarty_function_localize(array('str' => 'Totalcost of Sales:'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['sales']->totalCost->all)) ? $this->_run_mod_handler('currency', true, $_tmp) : smarty_modifier_currency($_tmp)); ?>
<br>
<br>
<?php echo smarty_function_localize(array('str' => 'Number of Actions:'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['actions']->count->all)) ? $this->_run_mod_handler('number', true, $_tmp) : smarty_modifier_number($_tmp)); ?>
<br>
<?php echo smarty_function_localize(array('str' => 'Commissions per Actions:'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['actions']->commission->all)) ? $this->_run_mod_handler('currency', true, $_tmp) : smarty_modifier_currency($_tmp)); ?>
<br>
<?php echo smarty_function_localize(array('str' => 'Total cost of Actions:'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['actions']->totalCost->all)) ? $this->_run_mod_handler('currency', true, $_tmp) : smarty_modifier_currency($_tmp)); ?>
<br>
<br>
<?php echo smarty_function_localize(array('str' => 'All Commissions:'), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['transactions']->commission->all)) ? $this->_run_mod_handler('currency', true, $_tmp) : smarty_modifier_currency($_tmp)); ?>
<br>
-----------------------------------<br>
<br>
<?php echo $this->_tpl_vars['commissionsList']->list; ?>
<br /><br />
<?php echo smarty_function_localize(array('str' => 'To disable these notifications, please follow the link below:'), $this);?>

<br />
<a href="<?php echo $this->_tpl_vars['unsubscribeLink']; ?>
"><?php echo $this->_tpl_vars['unsubscribeLink']; ?>
</a>