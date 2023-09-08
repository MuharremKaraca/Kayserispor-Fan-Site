
<div class="container-fluid">
<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
<div class="detay_kutu">
<div class="detay_main">
        <div class="detay_text">
                    <p class="text"><?php echo$text?></p>
                </div>
        <div class="detay_img">
                    <img src="../images/<?php echo$img?>" alt="">
                </div>
                <?php //TEXT 1
                if (!empty($baslik2)) {
                ?>
                <div class="detay_altbaslik">
                    <p class="altbaslik"><?php echo$baslik2?></p>
                </div>
                                
              <? } ?>
              <?php //TEXT 2
                if (!empty($text2)) {
                ?>
               <div class="detay_text">
                    <p class="text"><?php echo$text2?></p>
                </div>
                                
              <? } ?>
              <?php //TEXT 3
                if (!empty($text3)) {

                ?>
               <div class="detay_text">
                    <p class="text"><?php echo$text3?></p>
                </div>
                                
              <? } ?>
                    <div class="row">
                    <div class="detay_icerik">
          <?php //İCERİK MAİN SQL
          $strSQL1 = "SELECT * FROM syf_icerik WHERE sf_id=?";
          $prepared = $conn->prepare($strSQL1);
          $prepared->bind_param("i", $sf_id);
          //mysqli_stmt_bind_param($prepared,"i", $pid);
          $prepared->execute();
          
          $result=$prepared->get_result();
          $icerik=$result->fetch_assoc();
     $icerik1 = $icerik["icerik1"];
     $icerik2 = $icerik["icerik2"];
     $icerik3 = $icerik["icerik3"];
     $icerik4 = $icerik["icerik4"];
     ?>
     <?php //İCERİK 1 
     if(!empty($icerik1)){
     ?>
     <div style="max-width:1000px;text-align:center;">
   <? echo$icerik1?>
   </div>
   <? } ?>
   <?php //İCERİK 2
     if(!empty($icerik2)){
     ?>
     <div style="max-width:1000px;text-align:center;">
   <? echo$icerik2?>
   </div>
   <? } ?>
   <?php //İCERİK 3
     if(!empty($icerik3)){
     ?>
   <p><? echo$icerik3?></p>
   <? } ?>
   <?php //İCERİK 4
     if(!empty($icerik4)){
     ?>
   <p><? echo$icerik4?></p>
   <? } ?>
   <div class="detay_altbaslik">
                    <p class="etiket_b">ETİKETLER</p>
                </div>
                    <p class="etiket_t" style="float:left;    width: 100px;
    height: auto;"><? echo$etiket?></p>

                <div class="sag_b">
                    <p class="text"><?php echo $hit.' '.'Kişi Okudu';?></p>
                </div>
    </div>
<div class="row">
  
          <?php
$strSQL1 = "SELECT * FROM syf_galery WHERE sf_id=?";
$prepared = $conn->prepare($strSQL1);
$prepared->bind_param("i", $sf_id);
//mysqli_stmt_bind_param($prepared,"i", $pid);
$prepared->execute();

$result=$prepared->get_result();
while ($galery=$result->fetch_assoc()){
        ?>

                <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                    <portre>
                   <a class="example-image-link" href="../images/<?php echo$galery["galery"]?>" data-lightbox="image-1">
                    <img src="../images/<?php echo$galery["galery"]?>" alt="">
                    </a>
                   </portre>
                   </div>

                   <?php }?>
            </div>
            </div>
</div>
</div>
</div>
</div>
  <div class="col-lg-2"></div>
</div>
<?php 

?>
 <?php 
 include "../inc/detayfooter.php";
 ?>
</body>
</html>