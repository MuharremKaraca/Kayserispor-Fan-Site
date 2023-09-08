<?php
require_once "../baglan.php"; 
session_start();
if($_SESSION["kullaniciadi"])
{
  require_once "../inc/ad_p_syf_main.php";
}
else
{
    header("location:bosekran.php");
}


