<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="./css/style.css">
</head>

<body>
	<?php
	require_once "baglan.php";
	$sql = "SELECT * FROM mainbase";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// her bir satırı döker
	    while($sonuc = $result->fetch_assoc()) {
	    	$sf_id=$sonuc["sf_id"];
	    	$baslik=$sonuc["baslik"];
	    	$img=$sonuc["img"];
            $tarih =$sonuc["tarih"];
	        if($sf_id % 2==0)
			{
				?>
          <div class="col-lg-4">
            <div class="haber_container">
              <div class="haber">
                <div class="haber_item" style="background-image:url('../images/<?php echo $img ?>')">
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
			}
			else
			{
				?>
			<div class="col-lg-4">
              <div class="haber2">
                <div class="haber_item2" style="background-image:url('../images/<?php echo $img; ?>')">
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
</body>
</html>