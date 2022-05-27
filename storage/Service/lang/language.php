<?
include('../antibots.php');
$lang=substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
if		($lang=='fr')	{include 'fr.php';}
//if		($lang=='es')	{include 'lang/es.php';}
else	{include 'en.php';}
?>