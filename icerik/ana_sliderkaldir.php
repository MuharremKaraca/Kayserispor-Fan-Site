<?php 
include "../baglan.php";
 
session_start();
if($_SESSION["kullaniciadi"])
{
  include "../inc/ana_sliderkaldirmain.php";
}
else
{
  header("location:bosekran.php");
}
?>
