<?php
$page = 'Futbolcularımız';
require_once "../baglan.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="../images/logos.png" type="image/x-icon" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!------------------ TİTLE ------------------------>
  <title><? echo $page_?></title>
  <!------------------ TİTLE ------------------------>
  <!------------------ BOOTSTRAP CSS ------------------------>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!------------------ BOOTSTRAP CSS BİTİŞ ------------------------>
  <!------------------ STYLE.CSS ------------------------>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/ara.css">
  <link rel="stylesheet" href="../css/menu.css">
  <!------------------ STYLE.CSS BİTİŞ ------------------------>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Source+Sans+Pro:wght@300&display=swap');
  </style>
</head>

<body>

  <?php require_once "preloader.php"; require_once 'navbar.php'; require_once "menu_head.php" ?>