<?php /* Smarty version 2.6.18, created on 2016-07-06 14:15:20
         compiled from start_error.tpl */ ?>
<!-- start_error -->
<style media="all" type="text/css">
<?php echo '
	*,html,body {margin:0px; padding:0px;}
	.clear {clear:both;}
	.MainContainer {background:#FFFFFF url(\'../../../../GwtPhp/server/themes/default/img/login.background.png\') repeat-x; position:relative;}
	#Container {width:900px; text-align:left; margin:0 auto; position:relative;}
	#Content {min-height:500px; _height:500px;}
	#Header {position:relative; height:75px;}
	#Footer {background:url(\'../../../../GwtPhp/server/themes/default/img/footer.background.jpg\') repeat-x; height:46px; clear:both; color:#606060;}
	#FooterMenuItems {margin:8px 0px 0px 0px; float:left;}
	#FooterMenuItems li{display:inline; float:left;}
	.FooterMenuItem {color:#606060; margin-left:20px;}
	.FooterMenuItem:hover {color:#305478; text-decoration:none;}
	.FooterLink {color:#606060;}
	.FooterLink:hover {color:#305478; text-decoration:none;}
	#Copyright {color:#606060; font-size:10px; margin-left:20px; padding-top:5px;}
	
	.ErrorMessageTop,
	.ErrorMessageTopLeft,
	.ErrorMessageTopRight,
	.ErrorMessageBottom,
	.ErrorMessageBottomLeft,
	.ErrorMessageBottomRight {padding:0px; line-height:1px; font-size:1px; margin:0px; position:relative;}	
	
	.ErrorMessageTop {height:5px; margin:0px 5px;}
    .ErrorMessageTopLeft {height:5px;}
    .ErrorMessageTopRight {height:5px;}
    .ErrorMessageBottom {height:5px; margin:0px 5px;}
    .ErrorMessageBottomLeft {height:5px;}
    .ErrorMessageBottomRight {height:5px;}
    .ErrorMessageLeft {}
    .ErrorMessageRight {}
    
    .ErrorMessageContainer {width:535px; margin:30px auto;}
    .ErrorMessageBox {margin:0px 5px; border:5px solid #c0c0c0; padding:20px 20px 20px 80px; font-size: 11px; font-family:Arial,Tahoma;
            min-height:60px; _height:60px;}
	
'; ?>

</style>
<div class="MainContainer">
	<div id="Container">
    	<div id="Content">
    		<div class="ErrorMessageContainer">
    			<div class="ErrorMessageTopLeft"><div class="ErrorMessageTopRight"><div class="ErrorMessageTop"></div></div></div>
				<div class="ErrorMessageLeft"><div class="ErrorMessageRight"><div class="ErrorMessageCenter">
					<div class="ErrorMessageBox">
						<?php echo $this->_tpl_vars['errorMessage']; ?>
<br/>
					</div>
				</div></div></div>
				<div class="ErrorMessageBottomLeft"><div class="ErrorMessageBottomRight"><div class="ErrorMessageBottom"></div></div></div>
			</div>
    	</div>  
	</div>
</div>