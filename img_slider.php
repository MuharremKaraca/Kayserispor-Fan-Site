
<?php
include "baglan.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="./css/style.css">
<style>

</style>
</head>
<body>
    <!------------------ HABER ------------------------>
    <div class="container mt-5" id="haber_con">

<p class="haber_b">KAYSERİSPOR İLE İLGİLİ SON GELİŞMELER</p>
<div class="haber_main">
  <div class="row">
  <?php
        $sorgu = $conn->prepare("SELECT * FROM mainbase ORDER BY haber_id = 2 DESC LIMIT 3");
        $sorgu->bind_param("i", $sira);
        $sorgu->execute();
        $sonuc = $sorgu->get_result();
        while ($haber2 = $sonuc->fetch_array()) {
          $img = $haber2["img"];
          $baslik = $haber2["baslik"];
          $tarih = $haber2["tarih"];
          $sf_id = $haber2["sf_id"];
        ?>
          <div class="col-lg-4">
            <div class="haber2">
              <div class="haber_item2" style="background-image:url('../images/<?php echo $img ?>')">
                <div class="haber_anahtar2">
                  <div class="kasa">
                    <p class="zaman"><i class="fa-regular fa-newspaper"></i> <?php echo timeConvert("$tarih"); ?></p>
                    <div class="baslik_k"><a href="./icerik/detaypage.php?sf_id=<?php echo $sf_id ?>" class="stretched-link"></a>
                      <p class="baslik"><?php echo $baslik ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <? } ?>

  </div>
</div>
<div class="daha_btn">
<button>Daha fazla</button>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
</body>
</html>
