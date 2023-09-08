<?php 
require_once "../baglan.php";
$isFullList = true;

if(isset($_GET['ay_id']) && ctype_digit($_GET['ay_id'])){
  //detay
  $isFullList = false;
    $ay_id = intval($_GET['ay_id']);

    $strSQL = "SELECT * FROM superlig_aylar WHERE ay_id=?";
    $prepared = $conn->prepare($strSQL);
    $prepared->bind_param("i", $ay_id);
    //mysqli_stmt_bind_param($prepared,"i", $pf_id);
    $prepared->execute();
}
$result=$prepared->get_result();
$row=$result->fetch_assoc();
require_once "../inc/fiksturhead.php";
?>
        
         <!------------------ HERO BİTİŞ ------------------------>
<div class="content mt-4">
<div class="container">
    <div class="row">
      <div class="col-lg-9 text-center mb-5 mt-3 fw-bold" style="font-size: 22px;"><img src="../images/logolar/kslogo.png" alt=""><p class="txt">Yukatel</p><p class="txt">Kayserispor</p>
      <div class="col-lg-2"></div>        
      <div class="col-lg-12">
            <ul class="nav nav-tabs" style="
            font-size: 17px;
        ">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Spor Toto Süper Lig</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Spor Toto Süper Lig</a></li>
          
                </ul>
              </li>
              <?php
        $sql = "SELECT * from superlig_aylar";
        $results = $conn->query($sql);
        while ($aylar = $results->fetch_assoc()) {
        ?>
                <li class="nav-item">
                  <a class="nav-link" style="background-color:#111; color:#fff; border:0;" aria-current="page" href="fikstur.php?ay_id=<?php echo$aylar["ay_id"]?>"><?php echo$aylar["ay"]?></a>
                </li>
  <?php 
  }
  ?>              

              </ul>
        </div>
        
      <div class="bas">
         <?php echo$row["ay"]?> 2022</div>
         <hr style="color:white;">
         <table class="table table-borderless table-hover" id="tablocuk">
          <tbody>
          <?php

$strSQL1 = "SELECT * FROM macs WHERE ay_id=?";
$prepared = $conn->prepare($strSQL1);
$prepared->bind_param("i", $ay_id);
$prepared->execute();

$result=$prepared->get_result();
while ($maclar=$result->fetch_assoc()){
        ?>
            <tr class="position-relative" >
              <th scope="row" class="tarih" ><a class="stretched-link" href="\maclar/macs.php?mc_id=<?php echo$maclar["mc_id"]?>"><?php echo$maclar["zaman"]?></a> </th>
              <td class="Lig"><?php echo$maclar["lig"]?></td>
              <td class="takim1" ><?php echo$maclar["takim1"]?> <img src="../images/logolar/<?php echo$maclar["takim1_img"]?>"></td>
              <td class="tre" >-</td>
              <td class="takim2"><img src="../images/logolar/<?php echo$maclar["takim2_img"]?>"> <?php echo$maclar["takim2"]?></td>
            </tr>
            <?}?>
          </tbody>
        </table>
       <p style="text-align:center; opacity: 22%; font-size: 22px;">By Kyf</p> 
        <hr>
      </div>
      <div class="col-lg-3">
        <div class="col-lg-12 d-flex" id="puan">
          
<iframe frameborder="0" width="500" height="500" src="https://www.trtspor.com.tr/puandurumu-ekle/?lig=1&renk=a&baslik=1&resimler=1&a=2"></iframe>
              </div>
              </div>
    
         </div>
         
</div>
</div> <!------------------ BOOTSTRAP SCRİPT ------------------------>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="../Js/ana.js"></script>
 <?php
require_once "../inc/genelfooter.php";
?>
</body>
</html>