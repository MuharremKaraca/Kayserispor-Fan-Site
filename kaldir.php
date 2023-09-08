<?php 
include "baglan.php";
 
session_start();
if($_SESSION["kullaniciadi"])
{
  include "./inc/kaldirmain.php";
}
else
{
    require_once "./inc/bosekran.php";
}
?>


