<?php 
include "baglan.php";
 
session_start();
if($_SESSION["kullaniciadi"])
{
  include "./inc/userdatamain.php";
}
else
{
    require_once "./inc/bosekran.php";
}
?>

