

<?php

require_once "../baglan.php";

$isFullList = true;

if (isset($_GET['sf_id']) && ctype_digit($_GET['sf_id'])) {
  //detay
  $isFullList = false;
  $sf_id = intval($_GET['sf_id']);
  $sorguM = $conn->query("UPDATE mainbase SET hit=hit+1 WHERE sf_id='$sf_id'");


  $strSQL = "SELECT * FROM mainbase WHERE sf_id=?";
  
  
  
  $prepared = $conn->prepare($strSQL);
  $prepared->bind_param("i", $sf_id);
  //mysqli_stmt_bind_param($prepared,"i", $pf_id);
  $prepared->execute();


} else {
  header("location:bosekran.php");
}



$result = $prepared->get_result();
$row = $result->fetch_assoc();
$tarih = $row["tarih"];
$baslik = $row["baslik"];
$baslik2 = $row["baslik2"];
$text = $row["text"];
$text2 = $row["text2"];
$text3 = $row["text3"];
$img = $row["img"];
$haber_id = $row["haber_id"];
$etiket = $row["etiket"];

$hit = $row["hit"];
if (empty($baslik)) {
  header("location:bosekran.php");
}
if ($haber_id == 1) {
  $haber_value = '<i class="fa-regular fa-newspaper"></i>';
}
if ($haber_id == 2) {
  $haber_value = '<i class="fa-regular fa-newspaper"></i>';
}

require_once "../inc/detayhead.php";
require_once "../inc/detaymain.php";
require_once "../inc/detayfooter.php";

?>