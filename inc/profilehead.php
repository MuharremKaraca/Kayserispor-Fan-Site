

<!doctype html>
<html lang="en">
  <head>
  <link rel="icon"href="../images/logos.png"type="image/x-icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $_SESSION["username"].' - '.'Profil Sayfası'?></title> 


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!------------------ BOOTSTRAP FONT-AWESOME ------------------------>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <!------------------ BOOOTSTRAP FONT-AWESOME BİTİŞ ------------------------>
          <!------------------ STYLE.CSS ------------------------>

     <!------------------ STYLE.CSS BİTİŞ ------------------------>
      <!------------------  YAZI FONTU ------------------------>
<link rel="stylesheet" href="../fonts/Abril_Fatface/AbrilFatface-Regular.ttf">
 <!------------------ YAZI FONTU BİTİŞ ------------------------>
  <!------------------ FONTAWESOME KİT ------------------------>
    <script src="https://kit.fontawesome.com/6abbd6417f.js" crossorigin="anonymous"></script>
     <!------------------ FPMTAWESOME KİT BİTİŞ ------------------------>

    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/ara.css">
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php 
require_once "preloader.php";require_once "navbar.php";require_once "menu_head.php";?>
<div class="container-fluid">
    <ust>
      <nav class="navbar navbar-expand-lg navbar navbar-dark " id="navbar">
        <div class="navbar-brand"><a href="\index.php">
            <img src="../images/logos.png" height="90px" width="80px" style="margin-top: 10px; margin-left: 30px;" alt=""></a></div>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="toggler-icon top-bar"></span>
          <span class="toggler-icon middle-bar"></span>
          <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

          <ul class="navbar-nav justify-content-center d-flex  sakir">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="\index.php">AnaSayfa
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../menu/hakkinda.php"> Hakkımızda</a>
            </li>
            </li>
            <li class="dropdown-menu-static dropdown-menu-animated dropdown">
              <a class="nav-link dropdown-toggle takim" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kupalar
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="../menu/uefaintertotokupasi.php">UEFA İNTERTOTO KUPASI <br>
                    (2006-2007)</a></li>
                <li><a class="dropdown-item" href="../menu/türkiyekupasi.php">TÜRKİYE KUPASI <br> (2007-2008)</a></li>
              </ul>
            </li>
            <li class="dropdown-menu-static dropdown-menu-animated dropdown">
              <a class="nav-link dropdown-toggle takim" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 0;">
                Takim
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="../menu/futbolcular.php">FUTBOLCULAR</a></li>
                <li><a class="dropdown-item" href="../menu/fikstur.php?ay_id=1">FIKSTÜR</a></li>
                <li><a class="dropdown-item" href="../menu/kadro.php">KADRO</a></li>
                <li><a class="dropdown-item" href="../menu/galeri.php">GALERİ</a></li>
              </ul>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../menu/pasolig-info.php?info_id=1"> PasoLİG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../menu/pasoligupdate.php">UPDATE</a>
            </li>
            <form action="arama.php" method="post">
              <div class="wrapper">
                <div class="search-input">
                  <input type="text" name="kelime" placeholder="Arama Yapın">
                  <div class="autocom-box">
                    <li>Sütun - 1</li>
                    <li>Sütun - 2</li>
                    <li>Sütun - 3</li>
                    <li>Sütun - 4</li>
                    <li>Sütun - 5</li>
                    <li>Sütun - 6</li>
                  </div>
                  <div class="icon">
                    <button type="submit" style="background:transparent; color:#fff; opacity:80%;margin-top:5px;margin-right: 10px; border:0;"><i class="fa-solid fa-magnifying-glass"></i></button>
                  </div>
                </div>
              </div>
            </form>
          </ul>

        </div>

      </nav>
      </ust>
    </div>