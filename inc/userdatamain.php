<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/user.css">
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
  <div class="container">

    <div class="row">
      <div class="col-lg-4">asd</div>
      <div class="col-lg-8">
        <a href="ekle.php" class="ekle"><i class="fa-solid fa-user-plus"></i> Yeni Üye Ekle</a> <a href="../icerik/cikis.php"> Oturumu Kapat </a>
        <table class="userbase">
          <thead>
            <tr>
              <th scope="col">İd</th>
              <th scope="col">Ad</th>
              <th scope="col">Soyad</th>
              <th scope="col">TC</th>
              <th scope="col">Telefon No</th>
              <th scope="col">Mail Adress</th>
              <th scope="col">Kayıt Tarihi</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sorgu = $conn->query("SELECT * FROM userbase");

            while ($info_sl = $sorgu->fetch_array()) {
            ?>
              <tr>
                <th scope="row"><?php echo $info_sl["id"] ?></th>
                <td><?php echo $info_sl["username"] ?></td>
                <td><?php echo $info_sl["usersurname"] ?></td>
                <td><?php echo $info_sl["TC"] ?></td>
                <td><?php echo $info_sl["telefon"] ?></td>
                <td><?php echo $info_sl["mail"] ?></td>
                <td><?php echo $info_sl["tarih"] ?></td>
                <td><a href="düzenle.php?id=<?php echo $info_sl["id"] ?>"><i class="fa-solid fa-user-pen"></i> Düzenle</a></td>
                <td><a href="kaldir.php?id=<?php echo $info_sl["id"] ?>">Kaldır</a></td>
              </tr>
            <? } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
  <script src="https://kit.fontawesome.com/6abbd6417f.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>