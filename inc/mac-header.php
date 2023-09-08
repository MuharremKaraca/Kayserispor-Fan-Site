

<?php
require_once "../baglan.php";
$isFullList = true;

if(isset($_GET['mc_id']) && ctype_digit($_GET['mc_id'])){
  //detay
  $isFullList = false;
    $mc_id = intval($_GET['mc_id']);

    $strSQL = "SELECT * FROM macs WHERE mc_id=?";
    $prepared = $conn->prepare($strSQL);
    $prepared->bind_param("i", $mc_id);
    //mysqli_stmt_bind_param($prepared,"i", $pf_id);
    $prepared->execute();
}else{
  header("location:\inc/bosekran.php");
}
$result=$prepared->get_result();
$row=$result->fetch_assoc();
$page = $row["takim1"]." ".$row["takim2"];
?>

<!DOCTYPE html>

<html lang="en">

<head>
    
    <link rel="icon"href="../images/logolar/kslogo.png"type="image/x-icon" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo$row["takim1"]. " "."-"." ".$row["takim2"]?></title>
<link rel="stylesheet" href="../css/fikstür.css">
     <!------------------ BOOTSTRAP FONT-AWESOME ------------------------>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
         
          <!------------------ STYLE.CSS ------------------------>
    <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="../css/macs.css">
     <link rel="stylesheet" href="../css/ara.css">
     <link rel="stylesheet" href="../css/menu.css">
    <script src="https://kit.fontawesome.com/6abbd6417f.js" crossorigin="anonymous"></script>
<style>
 

  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Source+Sans+Pro:wght@300&display=swap');
  </style>
  </head>
<body>
 <?php require_once "preloader.php"; require_once "navbar.php"; require_once "menu_head.php"; ?>