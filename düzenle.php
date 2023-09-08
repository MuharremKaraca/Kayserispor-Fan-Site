<?php 
include "baglan.php";
 
session_start();
if($_SESSION["kullaniciadi"])
{
  include "./inc/duzenle.php";
}
else
{
    require_once "./inc/bosekran.php";
}
?>
