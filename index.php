<?php
$page = 'anasayfa';
require_once "baglan.php";
        
$degisken = 3;
if ($_POST["girdi"]) {
  $degisken = $_POST["girdi"];
  $btn_deger = $_POST["deger"];
}
$deger = 'block';

$ip=$_SERVER["REMOTE_ADDR"];

$veri_ekle="INSERT INTO ziyaretciler(ip) VALUES ('$ip')";
mysqli_query($conn,$veri_ekle);

$hesapla="SELECT COUNT(id) FROM ziyaretciler";
$kod=mysqli_query($conn,$hesapla);

$yaz=mysqli_fetch_all($kod);
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <link rel="icon" href="./images/logos.png" type="image/x-icon" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ana Sayfa</title>

  <!------------------ BOOTSTRAP FONT-AWESOME ------------------------>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!------------------ BOOOTSTRAP FONT-AWESOME BİTİŞ ------------------------>
  <!------------------ BOOTSTRAP.CSS ------------------------>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!------------------ BOOTSTRAP.CSS BİTİŞ ------------------------>
  <!------------------ STYLE.CSS ------------------------>
  <link rel="stylesheet" href="./css/marquee.css">
  <link rel="stylesheet" href="./css/ana-slider.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/ara.css">
  <!------------------ STYLE.CSS BİTİŞ ------------------------>
  <!------------------  YAZI FONTU ------------------------>
  <link rel="stylesheet" href="./fonts/Abril_Fatface/AbrilFatface-Regular.ttf">
  <!------------------ YAZI FONTU BİTİŞ ------------------------>
  <!------------------ FONTAWESOME KİT ------------------------>
  <script src="https://kit.fontawesome.com/6abbd6417f.js" crossorigin="anonymous"></script>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

  <style>


    a:hover {
      color: #fff;
    }

    .swiper.formaSwiper {
      width: 100%;
      height: 500px;
    }

    .formaSwiper .swiper-slide {
      text-align: center;
      font-size: 18px;
      background-color: transparent;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .formaSwiper .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      background: none;
      object-fit: contain;
    }

    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Source+Sans+Pro:wght@300&display=swap');
  </style>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script>
    //   ScrollReveal({
    //   reset: true
    //});
  </script>
  <script type="text/javascript">
        
        var baslik = document.title;
        var yeniBaslik = "Takımının sana ihtiyacı var :(";
    
        window.onblur = function(){
            document.title = yeniBaslik;
        }
    
        window.onfocus = function()
        {
            document.title = baslik;
        }
            
    </script>
</head>

<body>
  <!------------------ PRELOADER ------------------------>
   <!--  <div class="preloader" id="preloader">
    <img src="../images/pre.gif" alt="">
 <h1>
      <span class="let1">y</span>
      <span class="let2">ü</span>
      <span class="let3">k</span>
      <span class="let4">l</span>
      <span class="let5">e</span>
      <span class="let6">n</span>
      <span class="let7">i</span>
      <span class="let8">y</span>
      <span class="let9">o</span>
      <span class="let10">r</span>
    </h1>
  </div>--->
  <!------------------ NAVBAR ------------------------>
  <div class="container-fluid">
    <ust>
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar navbar-dark " id="navbar">
          <div class="nav_logo">
            <a class="navbar-brand" href="/index.php">
              <img src="./images/logos.png" width="70px" height="70px" class="d-inline-block align-top" alt="">
            </a>
          </div>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mr-auto" id="menu-nav">
              <li class="nav-item">
                <a class="nav-link " href="./menu/hakkinda.php"> Hakkımızda</a>
              </li>
              </li>
              <li class="dropdown-menu-static dropdown-menu-animated dropdown">
                <a class="nav-link dropdown-toggle takim" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kupalar
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item drop" href="./menu/uefaintertotokupasi.php">UEFA İNTERTOTO KUPASI <br>
                      (2006-2007)</a></li>
                  <li><a class="dropdown-item drop" href="./menu/türkiyekupasi.php">TÜRKİYE KUPASI <br> (2007-2008)</a></li>
                </ul>
              </li>
              <li class="dropdown-menu-static dropdown-menu-animated dropdown">
                <a class="nav-link dropdown-toggle takim" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 0;">
                  Takım
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item drop" href="./menu/futbolcular.php">FUTBOLCULAR</a></li>
                  <li><a class="dropdown-item drop" href="./menu/fikstur.php?ay_id=1">FIKSTÜR</a></li>
                  <li><a class="dropdown-item drop" href="./menu/kadro.php">KADRO</a></li>
                  <li><a class="dropdown-item drop" href="./menu/galeri.php">GALERİ</a></li>
                </ul>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="./menu/pasolig-info.php?info_id=1"> Pasolig</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="./menu/pasoligupdate.php">Update</a>
              </li>
            </ul>
            <ul class="navbar-nav" id="ara-nav">
              <form action="./menu/arama.php" id="ara-form" method="post">
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
      </div>
    </ust>

  </div>
  <!------------------ ANA SLİDER ------------------------>
  <div class="container-fluid" id="slider_container">
    <div class="row">

      <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">

          <?php
          $sorgu = $conn->query("SELECT * FROM mainbase ORDER BY tarih DESC LIMIT 5");

          while ($cikti = $sorgu->fetch_array()) {
            $alt_baslik = $cikti["alt_baslik"];
            $tarih = $cikti["tarih"];
            $text = $cikti["text"];
            $sf_id = $cikti["sf_id"];
            $baslik = $cikti["baslik"];
            $img = $cikti["img"];
            $parca1 = substr($baslik, 0, 100); // 0 dan 100 e kadar max 100 karakter
            $text = $cikti["text"];
            $parca2 = substr($text, 0, 90); // 0 dan 100 e kadar max 100 karakter
            $haber_id = $cikti["haber_id"];
            if ($haber_id == 1) {
              $haber_value = '<i class="fa-regular fa-newspaper"></i>';
            }
            if ($haber_id == 2) {
              $haber_value = '<i class="fa-regular fa-newspaper"></i>';
            }
          ?>

            <div class="swiper-slide">

              <img src="./images/<?php echo $img ?>" alt="">


              <div class="slide_box">
                <div class="zaman">
                  <p class="zaman" namespace="item"><?php echo $haber_value; ?> <?php echo timeConvert($tarih) ?></p>
                </div>
                <div class="title" data-swiper-parallax="-300"><?php echo $parca1 ?></div>
                <div class="subtitle" data-swiper-parallax="-200"><?php echo $alt_baslik ?></div>
                <div class="text" data-swiper-parallax="-100">
                  <p>
                    <?php echo $parca2 . '...' ?>
                  </p>
                </div>
                <div class="slider_button"><a href="./icerik/detaypage.php?sf_id=<?php echo $sf_id ?>" class="stretched-link">Haber Detayı <i class="fa-solid arrow-next fa-arrow-right"></i></a></div>
              </div>
            </div>

          <? } ?>

        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
  <!------------------ MAÇ TARİH ------------------------>
 <!---------- <div class="container" id="mac_tarih">
    <div class="row">
      <div class="mac_tarih">

        <div class="row">
        <div class="col-lg-4">
            <div class="mac_tarih_main">
              <div class="tarih_detay_main d-flex">
                <p class="mac_tarih_detay">Son Sonuç - 13:00, Per 8 Aralık</p>
                <p class="mac_tarih_detay ms-auto">EV</p>

              </div>
              <div class="img_box">
                  <img src="./images/acıbadem.png" alt="">
                </div>
              <div class="row">

                <div class="col-lg-4 col-md-4 logo_box text-center">
                  <img src="./images/logolar/adanademirlogo.png" class="logo" alt="">
                  <div style="display:inline-block" style="margin-left:auto;">
                  <p class="text3">2 | Kayserispor</p>
                  <p class="text4">2 | AdanaDemirspor</p>
                </div>
                </div>
              </div>
            </div>
            <div class="row">
              <button class="button1"><i class="fa-solid fa-ticket"></i> Bilet Satın Alın</button>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="mac_tarih_main">
              <div class="tarih_detay_main d-flex">
                <p class="mac_tarih_detay">Son Sonuç - 13:00, Per 8 Aralık</p>
                <p class="mac_tarih_detay ms-auto">EV</p>

              </div>
              <div class="img_box">
                  <img src="./images/acıbadem.png" alt="">
                </div>
              <div class="row">

                <div class="col-lg-4 col-md-4 logo_box text-center">
                  <img src="./images/logolar/adanademirlogo.png" class="logo" alt="">
                  <div style="display:inline-block" style="margin-left:auto;">
                  <p class="text3">2 | Kayserispor</p>
                  <p class="text4">2 | AdanaDemirspor</p>
                </div>
                </div>
              </div>
            </div>
            <div class="row">
              <button class="button1"><i class="fa-solid fa-ticket"></i> Maç Raporu</button>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="mac_tarih_main">
              <div class="tarih_detay_main d-flex">
                <p class="mac_tarih_detay">Son Sonuç - 13:00, Per 8 Aralık</p>
                <p class="mac_tarih_detay ms-auto">EV</p>

              </div>
              <div class="img_box">
                  <img src="./images/acıbadem.png" alt="">
                </div>
              <div class="row">

                <div class="col-lg-4 col-md-4 logo_box text-center">
                  <img src="./images/logolar/adanademirlogo.png" class="logo" alt="">
                  <div style="display:inline-block" style="margin-left:auto;">
                  <p class="text3">2 | Kayserispor</p>
                  <p class="text4">2 | AdanaDemirspor</p>
                </div>
                </div>
              </div>
            </div>
            <div class="row">
              <button class="button2"><i class="fa-solid fa-ticket"></i> Maç Tekrarı</button>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="big_box">
        <div class="col-12">

          <div class="row">
            <?php
            /*$sql = "SELECT * FROM gunun_sozu";
            $results = $conn->query($sql);
            while ($gunun_sozu = $results->fetch_assoc()) {
            ?>
              <div class="col-3">
                <div class="small_box">
                  <img src="./images/<?php echo $gunun_sozu["img"] ?>" style="width:100%;" alt="">
                  <p><?php echo $gunun_sozu["text"] ?></p>
                </div>
              </div>
            <? } */ ?>
            <div class="col-3"></div>
          </div>
        </div>
      </div>
    </div>-->
  </div>
  <!------------------ HABER ------------------------>
  <div class="container mt-5" id="haber_con">

    <p class="haber_b" id="item">KAYSERİSPOR İLE İLGİLİ SON GELİŞMELER</p>
    <div class="haber_main" id="haber_main">
      <div class="row">
        <?php

        $sql = "SELECT * FROM mainbase ORDER BY sf_id DESC LIMIT $degisken";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // her bir satırı döker
          while ($sonuc = $result->fetch_assoc()) {
            $sf_id = $sonuc["sf_id"];
            $baslik = $sonuc["baslik"];
            $img = $sonuc["img"];
            $tarih = $sonuc["tarih"];
 
            if ($sf_id % 2 == 0) {
        ?>
              <div class="col-lg-4 col-md-6 mt-2">
                <div class="haber_container">
                  <div class="haber">
                    <div class="haber_item skeleton" style="background-image:url('./images/<?php echo $img ?>')">
                      <div class="haber_efekt"></div>
                    </div>
                    <div class="p-4">
                      <p class="zaman"><?php echo $haber_value; ?> <?php echo timeConvert($tarih) ?></p>
                      <div class="baslik_k"><a href="./icerik/detaypage.php?sf_id=<?php echo $sf_id; ?>" class="stretched-link"></a>
                        <p class="baslik"><?php echo $baslik; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            } else {
            ?>
              <div class="col-lg-4 col-md-6 mt-2">
                <div class="haber2">
                  <div class="haber_item2 skeleton" style="background-image:url('./images/<?php echo $img; ?>')">
                    <div class="haber_anahtar2">
                      <div class="kasa">
                        <p class="zaman"><i class="fa-regular fa-newspaper"></i> <?php echo timeConvert($tarih) ?></p>
                        <div class="baslik_k"><a href="./icerik/detaypage.php?sf_id=<?php echo $sf_id; ?>" class="stretched-link"></a>
                          <p class="baslik"><?php echo $baslik; ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        <?php
            }
          }
        }
        ?>
      </div>
    </div>
    <form method="POST" action="index.php">
      <input type="text" name="girdi" value="12" style="display:none;" />
      <input type="text" name="deger" value="none" style="display:none;" />
      <div class="daha_btn" onclick="hb_show()">
        <button type="submit" style="display:<?php echo $btn_deger; ?>;">Daha fazla</button>
      </div>
    </form>
  </div>
  <div class="container">
    <div class="row">

    </div>
  </div>
  <div class="container-fluid" id="ft_ust"></div>
  <script>
    ScrollReveal().reveal('#kutular', {
      distance: '50px'
    });
    ScrollReveal().reveal('#mac_tarih', {
      distance: '50px'
    });
    ScrollReveal().reveal('#haber_con', {
      distance: '50px'
    });
    ScrollReveal().reveal('.haber_container', {
      scale: 0.85
    });
    ScrollReveal().reveal('.haber2', {
      scale: 0.85
    });
    ScrollReveal().reveal('#istatik_box', {
      distance: '50px'
    });
    ScrollReveal().reveal('.spon', {
      distance: '50px'
    });
  </script>
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    //KART SWİPER 
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
      },
      autoplay: {
        delay: 4000,
      },
    });
    var swiper = new Swiper(".formaSwiper", {
      loop:true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="./Js/change_image.js"></script>
  <script src="../Js/ana.js"></script>

 


    
  <div class="foother float-end p-5 text-white" style="text-align:start">
<section class="spon" id="sponsormain" style=" margin-top: 100px; margin-bottom: 0px;">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 text-center">
          <img src="../images/erciyesholding.png" alt="" class="sponsor">
        </div>
        <?php
        $sql = "SELECT * FROM sponsor";
        $results = $conn->query($sql);
        while ($sponsor = $results->fetch_assoc()) {
        ?>
          <div class="col-lg-3 col-md-4 col-sm-6 col-12 text-center">
            <img src="../images/<?php echo $sponsor["img"] ?>" alt="" class="sponsor">
          </div>
        <? } ?>

      </div>
    </div>


  </section>
<div class="row">
  <div class="col-6">

  </div>
  </div>
  <div class="row">
<a href="index.php" id="logon"> <img src="./images/logos.png" id="ft_img" class="rounded d-block"></a>
</div>
<div class="row">
  <div class="col-12 text-center mt-4">
<p id="haklari_saklidir_text">Copyright by <a href="https://www.instagram.com/krc.muharrem/" target="_blank" style="text-decoration: none;">Muharrem</a> © 2022 Tüm Hakları Saklıdır.</p></div>
</div>
</div>



  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>

</html>