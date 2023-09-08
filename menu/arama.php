<?php
$page = 'Arama Sonuçları';
require_once "../baglan.php";
$kelime = $_POST["kelime"];
$sayi_err = "";
if (empty($kelime)) {
  header("location:/index.php");
} else {
  $sorgu = $conn->query("SELECT * FROM mainbase  WHERE baslik LIKE '%$kelime%'");
  $sayi = mysqli_num_rows($sorgu);
  if ($sayi > 0) {
    $sayi_err = $sayi . " " . "Sonuç Bulundu.";
  } else {
    $sayi_err = "Sonuç Bulunamadı.";
  }
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <link rel="icon" href="../images/logos.png" type="image/x-icon" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo 'Sonuçlar' . ' - ' . $row['baslik']; ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/ara.css">
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/arama.css">

  <script src="https://kit.fontawesome.com/6abbd6417f.js" crossorigin="anonymous"></script>
  <style>
  </style>
</head>

<body>


  <!------------------ PRELOADER ------------------------>
  <div class="preloader" id="preloader">
    <img src="../images/loading.gif" alt="">
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
  </div>
  <?php require_once '../inc/navbar.php';
  require_once "../inc/menu_head.php"; ?>
  <div class="container mt-5" id="ara_m">
    <div class="row">
      <div class="col-lg-3">
        <p class="sayi_text"><?php echo $sayi_err; ?></p>
      </div>
      <div class="col-lg-9">
        <form action="arama.php" method="post">
          <div class="wrapper" id="ara-b">
            <div class="search-input">
              <input type="text" name="kelime" value="<?php echo $_POST["kelime"] ?>" placeholder="Arama Yapın">
              <div class="autocom-box">
                <li>asasdasdsd</li>
                <li>asasdasdsd</li>
                <li>asasdasdsd</li>
                <li>asasdasdsd</li>
                <li>asasdasdsd</li>
                <li>asasdasdsd</li>
              </div>
              <div class="icon">
                <button type="submit" style="background:transparent; color:#222; opacity:80%;border:0;"><i class="fa-solid fa-magnifying-glass"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container mt-3 mb-3">
    <div class="satirim">
          <?php
          while ($listele = mysqli_fetch_array($sorgu)) {
            $sf_id = $listele["sf_id"];
            $metin = $listele["baslik"];
            $metin2 = $listele["text"];
            $parca2 = substr($metin2, 0, 150); // 0 dan 150 e kadar max 150 karakter
            $img = $listele["img"];
            $tarih = $listele["tarih"];
            $haber_id = $listele["haber_id"];
          ?>
            <div class="colonum">
              <a href="../icerik/detaypage.php?sf_id=<?php echo $sf_id ?>">
              <div class="ara-icerik">
                <div class="ara-img">
                  <img src="../images/<?php echo $img ?>" alt="">
                </div>
                <div class="ara-text">
                  <div class="title-d">
                  <span class="title"><?php echo $metin ?></span>
                  </div>
                  <div class="text-d">
                  <span class="text"><?php echo $parca2 ?></span>
                  </div>
                  <div class="tarih-d">
                  <span class="tarih"><?php echo timeConvert($tarih) ?></span>
                </div>
                </div>
              </div>
              </a>
            </div>
          <? } ?>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="../Js/ana.js"></script>
  <?php
  require_once "../inc/genelfooter.php"; ?>

</body>

</html>