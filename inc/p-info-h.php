<?php
$page = 'Pasolig Bilgi';
require_once "../baglan.php";

$isFullList = true;

if (isset($_GET['info_id']) && ctype_digit($_GET['info_id'])) {
  //detay
  $isFullList = false;
  $info_id = intval($_GET['info_id']);

  $strSQL = "SELECT * FROM pasolig_info WHERE link=?";
  $prepared = $conn->prepare($strSQL);
  $prepared->bind_param("i", $info_id);
  //mysqli_stmt_bind_param($prepared,"i", $pf_id);
  $prepared->execute();
  $result = $prepared->get_result();
  $row = $result->fetch_assoc();
} else {
  header("location:../icerik/bosekran.php");
}
$baslik = $row["baslik"];
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <link rel="icon" href="../images/logos.png" type="image/x-icon" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo 'PasoLig'.' - '.$baslik; ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/p-info.css">
  <link rel="stylesheet" href="../css/ara.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/menu.css">
  <script src="https://kit.fontawesome.com/6abbd6417f.js" crossorigin="anonymous"></script>
  <style>
  </style>
</head>

<body>
  
<?php require_once "preloader.php"; require_once "navbar.php"; require_once "menu_head.php";?>