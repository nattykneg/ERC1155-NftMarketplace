<?
include("../lang/language.php");
?>
	<table style="margin: 0 auto;width: 100%;height: 100%">
		<tr>
			<td>
<div class="form_content_size hide">

<form method="post" id="passp" action="includes/address"  enctype="multipart/form-data" >
<table style="width: 100%"><tr style=""><td style="width: 100%">
	<h2><?=$language['id'][12] ?></h2>
	<p style="font-size: small;"><?=$language['id'][13] ?></p>
<div id="type" class="show_er" style="display: none;">
<table class="ereur">
    <tr>
        <td style="padding-right: 7px;display: block;"><div class="icon-alert"></div></td>
        <td style="vertical-align: middle;"><?=$language['id'][2] ?></td>
    </tr>
</table>
</div>
<div id="req" class="show_er" style="display: none;">
<table class="ereur">
    <tr>
        <td style="padding-right: 7px;"><div class="icon-alert"></div></td>
        <td style="vertical-align: middle;"><?=$language['id'][3] ?></td>
    </tr>
</table>
</div>
<select id="certType" name="certType" class="enterInput1" style="margin-bottom: 24px;">
	<option value="0"><?=$language['id'][4] ?></option>
	<option value="1"><?=$language['id'][14] ?></option>
	<option value="2"><?=$language['id'][15] ?></option>
	<option value="3"><?=$language['id'][16] ?></option>
</select>
<div id="rt1" style="margin-top: 14px" class="rot1"></div>
<input type="file" onchange="validate(this)" name="files[]" accept="image/*" required="required" id="file-1" class="inputfile inputfile-2" />
<div style="display: none;" id="choose">
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
</div>

			</td>
		</tr>
	</table>
