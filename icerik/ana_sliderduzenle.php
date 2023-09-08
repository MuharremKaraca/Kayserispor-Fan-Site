<?php 
include "../baglan.php";
 
session_start();
if($_SESSION["kullaniciadi"])
{
  include "../inc/ana_sliderd_main.php";
}
else
{
    require_once "../inc/bosekran.php";
}
?>
