<?php 
require_once "../inc/p-info-h.php";
?>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 kapak">
          <?php
          $sql = "SELECT * from pasolig_info";
          $results = $conn->query($sql);
          while ($ps_info = $results->fetch_assoc()) {
          ?>
            <a href="pasolig-info.php?info_id=<?php echo $ps_info["link"]; ?>" class="linkler">
              <i></i><span><?php echo $ps_info['baslik']; ?></span>
            </a>
          <?php
          }
          ?>
        </div>
        <div class="col-lg-8">
          <div class="container" id="info_main">
            <div class="row">
              <div class="info_baslik">
                <p><?php echo $baslik ?></p>
              </div>
                     <!------ İÇERİK 1 ------->
              <?php
$strSQL3 = "SELECT * FROM info_icerik WHERE link=?";
$prepared = $conn->prepare($strSQL3);
$prepared->bind_param("i", $info_id);

$prepared->execute();

$result=$prepared->get_result();
if ($info_sl=$result->fetch_assoc()){
        ?>
              <div class="alt_baslik">
              <p><?php echo $info_sl["alt_baslik"]; ?></p>
              </div>
              <? }
              else{

              } ?>
              <?php
$strSQL3 = "SELECT * FROM info_icerik WHERE link=?";
$prepared = $conn->prepare($strSQL3);
$prepared->bind_param("i", $info_id);

$prepared->execute();

$result=$prepared->get_result();
if ($info_sl=$result->fetch_assoc()){
        ?>
              <div class="text">
              <p><?php echo $info_sl["text1"]; ?></p>
              </div>
              <? }
              else{
                
              }
              ?>
              <?php
$strSQL3 = "SELECT * FROM info_icerik WHERE link=?";
$prepared = $conn->prepare($strSQL3);
$prepared->bind_param("i", $info_id);

$prepared->execute();

$result=$prepared->get_result();
if ($info_sl=$result->fetch_assoc()){
        ?>
              <div class="text">
              <p><?php echo $info_sl["text2"]; ?></p>
              </div>
              <? }
              else{
                
              }
              ?>
              <?php
$strSQL3 = "SELECT * FROM info_icerik WHERE link=?";
$prepared = $conn->prepare($strSQL3);
$prepared->bind_param("i", $info_id);

$prepared->execute();

$result=$prepared->get_result();
if ($info_sl=$result->fetch_assoc()){
        ?>
              <div class="big_img">
              <img src="../images/<?php echo $info_sl["big_img"];?>" class="img-fluid" alt="">
              </div>
              <? }
              else{
  
              }
              ?>
              <?php
$strSQL3 = "SELECT * FROM info_icerik WHERE link=?";
$prepared = $conn->prepare($strSQL3);
$prepared->bind_param("i", $info_id);

$prepared->execute();

$result=$prepared->get_result();
if ($info_sl=$result->fetch_assoc()){
        ?>
              <div class="text">
              <p><?php echo $info_sl["text3"]; ?></p>
              </div>
              <? }
              else{
                
              }
              ?>
              <?php
$strSQL3 = "SELECT * FROM info_icerik WHERE link=?";
$prepared = $conn->prepare($strSQL3);
$prepared->bind_param("i", $info_id);

$prepared->execute();

$result=$prepared->get_result();
if ($info_sl=$result->fetch_assoc()){
        ?>
              <div class="text">
              <p><?php echo $info_sl["text4"]; ?></p>
              </div>
              <? }
              else{
                
              }
              ?>
              <?php
$strSQL3 = "SELECT * FROM info_icerik WHERE link=?";
$prepared = $conn->prepare($strSQL3);
$prepared->bind_param("i", $info_id);

$prepared->execute();

$result=$prepared->get_result();
if ($info_sl=$result->fetch_assoc()){
        ?>
              <div class="text">
              <p><?php echo $info_sl["text5"]; ?></p>
              </div>
              <div class="col-12">
              <div class="row">
                  <div class="col-6">
              <div class="button">
                <p>PasoLig başvurmak için;</p>
                <a href="https://www.passolig.com.tr/">Hemen Oluştur</a>
              </div>              
              </div>
              <div class="col-6"> 
              <div class="button2">
              <p>PasoLig uygulama aracılığı ile başvurmak için;</p>
                <a href="https://www.passolig.com.tr/">Hemen İndir</a>
              </div>     
              </div>
              </div>
              </div> 
              <? }
              else{
                
              }
              ?>

       <!------ İÇERİK 2 ------->
                           <?php
$strSQL3 = "SELECT * FROM info_icerik2 WHERE link=?";
$prepared = $conn->prepare($strSQL3);
$prepared->bind_param("i", $info_id);

$prepared->execute();

$result=$prepared->get_result();
if ($info_sl2=$result->fetch_assoc()){
        ?>
              <div class="text">
              <p><?php echo $info_sl2["al"]; ?></p>
              </div>
<? }
              else{
                
              }
              ?>
                           <?php
$strSQL2 = "SELECT * FROM info_icerik2 WHERE link=?";
$prepared = $conn->prepare($strSQL2);
$prepared->bind_param("i", $info_id);

$prepared->execute();

$result=$prepared->get_result();
if ($info_sl2=$result->fetch_assoc()){
        ?>
              <div class="alt_baslik">
              <p><?php echo $info_sl2["alt_baslik"]; ?></p>
              </div>
              <p class="kalin_text"><?php echo $info_sl2["kalin_text"]?></p>
              <div class="d-flex">
              <p class="text"><?php echo $info_sl2["text1"]?></p>
              <img src="../images/<?php echo $info_sl2["small_img"];?>" class="img-fluid" alt="">
              </div>
              <p class="kalin_text"><?php echo $info_sl2["kalin_text2"]?></p>

              <div class="konu">
                <img src="https://img.icons8.com/fluency/48/000000/right.png" height="30px" width="30px"  alt=""><p><?php echo $info_sl2["konu1"]?></p>
            </div>
              <div class="konu">
                <img src="https://img.icons8.com/fluency/48/000000/right.png" height="30px" width="30px" alt=""><p><?php echo $info_sl2["konu2"]?></p>
            </div>
              <div class="konu">
                <img src="https://img.icons8.com/fluency/48/000000/right.png" height="30px" width="30px"  alt=""><p><?php echo $info_sl2["konu3"]?></p>
              </div>                
              <div class="konu">
                <img src="https://img.icons8.com/fluency/48/000000/right.png" height="30px" width="30px"  alt=""><p><?php echo $info_sl2["konu4"]?></p>
              </div>                
              <div class="konu">
                <img src="https://img.icons8.com/fluency/48/000000/right.png" height="30px" width="30px"  alt=""><p><?php echo $info_sl2["konu5"]?></p>
              </div> 
              <div class="col-12">
                <div class="row">
                  <div class="col-6">
              <div class="button">
                <p>PasoLig başvurmak için;</p>
                <a href="https://www.passolig.com.tr/">Hemen Oluştur</a>
              </div>              
              </div>
              <div class="col-6"> 
              <div class="button2">
              <p>PasoLig uygulama aracılığı ile başvurmak için;</p>
                <a href="https://www.passolig.com.tr/">Hemen İndir</a>
              </div>     
              </div>
              </div>
              </div>          
            <? }
              else{
                
              }
              ?>

              <!---- İCERİK 3 --->
              <?php
$strSQL3 = "SELECT * FROM info_icerik3 WHERE link=?";
$prepared = $conn->prepare($strSQL3);
$prepared->bind_param("i", $info_id);

$prepared->execute();

$result=$prepared->get_result();
if ($info_sl3=$result->fetch_assoc()){
        ?>
        <div class="row">
        <div class="col-2">
<img src="../images/<?php echo $info_sl3["cart_img"]?>" class="img-fluid" alt="">
</div>
<div class="col-6"></div>
<div class="col-4">
  <img src="../images/<?php echo $info_sl3["card_img"]?>" class="img-fluid" alt="">
</div>
</div>
<div class="row">
  <p class="kat_baslik"><?php echo $info_sl3["baslik"]?></p>
  <p class="kat_text"><span class="kat_say">1 - </span><?php echo $info_sl3["kat1"]?></p>
  <p class="kat_text"><span class="kat_say">2 - </span><?php echo $info_sl3["kat2"]?></p>
  <p class="kat_text"><span class="kat_say">3 - </span><?php echo $info_sl3["kat3"]?></p>
  <p class="kat_text"><span class="kat_say">4 - </span><?php echo $info_sl3["kat4"]?></p>
  <p class="kat_text"><span class="kat_say">5 - </span><?php echo $info_sl3["kat5"]?></p>
  <p class="kat_text"><span class="kat_say">6 - </span><?php echo $info_sl3["kat6"]?></p>
</div>
<div class="row mt-5 mb-5"><div class="col-8"></div>
<div class="col-4"> 
              <div class="button3">
                <a href="https://www.passolig.com.tr/">Hemen İndir</a>
              </div>     
              </div>
              </div>
              <div class="row mt-5">
                <p class="kat_baslik"><?php echo $info_sl3["alt_baslik"];?></p>
                <p class="kat_text"><span class="kat_say">1 - </span><?php echo $info_sl3["kat7"]?></p>
  <p class="kat_text"><span class="kat_say">2 - </span><?php echo $info_sl3["kat8"]?></p>
  <p class="kat_text"><span class="kat_say">3 - </span><?php echo $info_sl3["kat9"]?></p>
  <p class="kat_text"><span class="kat_say">4 - </span><?php echo $info_sl3["kat10"]?></p>
  <p class="kat_text"><span class="kat_say">5 - </span><?php echo $info_sl3["kat11"]?></p>
  <p class="kat_text"><span class="kat_say">6 - </span><?php echo $info_sl3["kat12"]?></p>
              </div>
              <div class="row mt-5 mb-5"><div class="col-8"></div>
<div class="col-4"> 
              <div class="button3">
                <a href="https://www.passolig.com.tr/">Hemen AL</a>
              </div>     
              </div>
              </div>
<? }
              else{
                
              }
              ?>
       <!---- İCERİK 4 --->
       <?php
$strSQL4 = "SELECT * FROM info_icerik4 WHERE link=?";
$prepared = $conn->prepare($strSQL4);
$prepared->bind_param("i", $info_id);

$prepared->execute();

$result=$prepared->get_result();
if ($info_sl4=$result->fetch_assoc()){
        ?>        
        <div class="row mb-5"><h1 class="ilk_h1"><?php echo $info_sl4["text1"]?></h1></div>
        <div class="row mt-5">
          <div class="col-8"><p class="text"><?php echo $info_sl4["text2"]?></p><p class="text"><?php echo $info_sl4["text3"]?></p></div>
          <div class="col-4"><img src="../images/<?php echo $info_sl4["card_img"]?>" class="img-fluid" alt=""></div>
        </div>
        <div class="row mt-3">
          <p class="text"><?php echo $info_sl4["text4"]?></p>
          <p class="text"><?php echo $info_sl4["text5"]?></p>
          <p class="text"><?php echo $info_sl4["text6"]?></p>
          <p class="text"><?php echo $info_sl4["text7"]?></p>
          <p class="text"><?php echo $info_sl4["text8"]?></p>
          <p class="text"><?php echo $info_sl4["text9"]?></p>
          <p class="text"><?php echo $info_sl4["text10"]?></p>
        </div>
        <div class="row mt-5"><div class="col-8"></div>
<div class="col-4"> 
              <div class="button3">
                <a href="https://www.passolig.com.tr/">Hemen AL</a>
              </div>     
              </div>
              </div>
        <? }
              else{
                
              }
              ?>
               <!---- İCERİK 5 --->
       <?php
$strSQL5 = "SELECT * FROM info_icerik5 WHERE link=?";
$prepared = $conn->prepare($strSQL5);
$prepared->bind_param("i", $info_id);

$prepared->execute();

$result=$prepared->get_result();
if ($info_sl5=$result->fetch_assoc()){
        ?>   
 <div class="row">  
  <div class="col-10"><p class="text"><?php echo $info_sl5["text1"]?></p>
<p class="text mt-4"><?php echo $info_sl5["text2"]?></p></div>
  <div class="col-2"><img src="../images/<?php echo $info_sl5["info_img"]?>" alt=""></div>
</div>
<div class="row"><p class="alt_baslik"><?php echo $info_sl5["alt_baslik"]?></p></div>
<div class="row">
  <p class="text"><?php echo$info_sl5["text3"]?></p>
  <p class="text"><?php echo$info_sl5["text4"]?></p>
  <p class="text"><?php echo$info_sl5["text5"]?></p>
  <p class="text"><?php echo$info_sl5["text6"]?></p>
  <p class="alt_baslik"><?php echo$info_sl5["alt_baslik2"]?></p>
  <p class="text"><?php echo$info_sl5["text7"]?></p>
  <p class="alt_baslik"><?php echo$info_sl5["alt_baslik3"]?></p>
  <p class="text"><?php echo$info_sl5["text8"]?></p>  
  <p class="alt_baslik"><?php echo$info_sl5["alt_baslik4"]?></p>
  <p class="text"><?php echo$info_sl5["text9"]?></p>  
</div>


<? }
              else{
                
              }
              ?>
                <!---- İCERİK 6 --->
       <?php
$strSQL5 = "SELECT * FROM sss WHERE link=?";
$prepared = $conn->prepare($strSQL5);
$prepared->bind_param("i", $info_id);

$prepared->execute();

$result=$prepared->get_result();
if ($info_sl6=$result->fetch_assoc()){
        ?>   
<div class="accordion" id="accordionExample">
<?php
$strSQL5 = "SELECT * FROM sss WHERE link=?";
$prepared = $conn->prepare($strSQL5);
$prepared->bind_param("i", $info_id);

$prepared->execute();

$result=$prepared->get_result();
while ($info_sl6=$result->fetch_assoc()){
        ?>   
  <div class="accordion-item <?php echo $info_sl6["id"]?>">
    <h2 class="accordion-header" id="heading<?php echo$info_sl6["acar_sayi"]?>">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo$info_sl6["acar_sayi"]?>" aria-expanded="true" aria-controls="collapseOne">
     <img src="../images/add.png" class="iconcak" alt=""> <?php echo $info_sl6["icerik_baslik1"]; ?>
      </button>
    </h2>
    <div id="collapse<?php echo$info_sl6["acar_sayi"]?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo$info_sl6["acar_sayi"]?>" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong><?php echo$info_sl6["icerik1"]?><?php echo $info_sl6["icerik_kalin1"]; ?></strong> <p><?php echo $info_sl6["icerik_text1"]; ?></p><p><?php echo $info_sl6["icerik_text2"]; ?></p>
      </div>
    </div>
  </div>
  <? } ?>

</div>
        
<? }
              else{
                
              }
              ?>
      </div>
        </div>
        </div>
      </div>
    </div>
    <script src="../Js/ana.js"></script>
    <?php 
    require_once "../inc/genelfooter.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


  </body>

</html>