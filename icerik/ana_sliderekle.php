<?php 
require_once "../baglan.php";
 
session_start();
if($_SESSION["kullaniciadi"])
{
    require_once "../inc/ana_slidermain.php";
}
else
{
    header("location:bosekran.php");
}
?>
