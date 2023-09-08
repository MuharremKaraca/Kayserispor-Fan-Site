<?php 
include "../baglan.php";
session_start();
if($_SESSION["eposta"])
{
  include "../inc/profilemain.php";
}
else
{
  header("location:bosekran.php");
}
?>