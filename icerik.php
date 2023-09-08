<div class="container-fluid">

    <div class="ana">
      <div class="row">
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $degisken = 5;
  
        $sql = "SELECT * FROM mainbase ORDER BY tarih DESC LIMIT $degisken";
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
                    <div class="haber_item" style="background-image:url('../images/<?php echo $img ?>')">
                      <div class="haber_efekt"></div>
                    </div>
                    <div class="p-4">
                      <p class="zaman"><i class="fa-regular fa-newspaper"></i> <?php echo timeConvert($tarih) ?></p>
                      <div class="baslik_k"><a href="../icerik/detaypage.php?sf_id=<?php echo $sf_id; ?>" class="stretched-link"></a>
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
                  <div class="haber_item2" style="background-image:url('../images/<?php echo $img; ?>')">
                    <div class="haber_anahtar2">
                      <div class="kasa">
                        <p class="zaman"><i class="fa-regular fa-newspaper"></i> <?php echo timeConvert($tarih) ?></p>
                        <div class="baslik_k"><a href="../icerik/detaypage.php?sf_id=<?php echo $sf_id; ?>" class="stretched-link"></a>
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
  </div>