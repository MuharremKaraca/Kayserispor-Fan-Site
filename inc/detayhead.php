<!doctype html>
<html lang="en">

<head>
  <link rel="icon" href="../images/logos.png" type="image/x-icon" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $row["baslik"] ?></title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!------------------ BOOTSTRAP FONT-AWESOME ------------------------>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!------------------  YAZI FONTU ------------------------>
  <link rel="stylesheet" href="../fonts/Abril_Fatface/AbrilFatface-Regular.ttf">

  <!------------------ FONTAWESOME KİT ------------------------>
  <script src="https://kit.fontawesome.com/6abbd6417f.js" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="../css/detay.css">
  <link rel="stylesheet" href="../css/lightbox.min.css">
  <link rel="stylesheet" href="../css/ara.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
          
<?php require_once "preloader.php"; require_once 'd-navbar.php'; ?>
  <!------------------ SAYFA HEADER ------------------------>
  <div class="container-fluid" id="sayfa_header" style="background-image:url(../images/<?php echo $row["img"]?>)">
    <div class="header_bg">
    <div class="top">
    <p class="zaman"><?php echo $haber_value; ?> <?php echo timeConvert($row["tarih"]) ?></p>
    <p class="baslik"><?php echo $row["baslik"]?></p>
    </div>
    </div>
  </div>