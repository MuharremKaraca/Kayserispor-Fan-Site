<?php 

require_once "baglan.php";

$form_err = "";
if (isset($_POST["kullaniciadi"])) {
    //Boş olup olmadığını sorgulama
    if (empty($_POST["kullaniciadi"]) || empty($_POST["password"])){
      $form_err = "Boş yer olmadığından emin ol.";
    }

    $kullaniciadi = $_POST['kullaniciadi'];
    $password = $_POST['password'];
    if (isset($kullaniciadi) && isset($password)) {
      $secim = "SELECT * FROM admin_account WHERE kullaniciadi ='$kullaniciadi'";
      $calistir = mysqli_query($conn, $secim);
      $kayitsayisi = mysqli_num_rows($calistir); // ya sıfır ya birdir 1-0
  
      if ($kayitsayisi > 0) {
        $ilgilikayit = mysqli_fetch_assoc($calistir);
          //Oturum Süresi
$timeout = 2000;

//en fazla ne kadar kalıcağı
ini_set( "session.gc_maxlifetime", $timeout );


//en fazla ne kadar kalıcağı
ini_set( "session.cookie_lifetime", $timeout );
          session_start();
          //Varsayılan oturum açma adı ayarlandı
          $s_name = session_name();

          if(isset ($_COOKIE[ $s_name])) {
            setcookie( $s_name, $_COOKIE[ $s_name], time() + $timeout, '/');  


              $_SESSION["ad"] = $ilgilikayit["ad"];
              $_SESSION["kullaniciadi"] = $ilgilikayit["kullaniciadi"];
              $_SESSION["password"] = $ilgilikayit["password"];
              $_SESSION["mail"] = $ilgilikayit["mail"];
              $_SESSION["tarih"] = $ilgilikayit["tarih"];
          header("location:admin_panel.php");
        }
        } else {
            echo "1";
        }
      } 
      else {
        echo '
        <div class="alert alert-warning alert-dismissible fade show text-dark" role="alert">
  <strong>LOGİN ERORR!</strong> Dostum bu bilgileri kullanan bir admin bulunmamakta.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Kapat"></button>
</div>';
      }
  
    }
    else
    {
        echo "3";
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/user.css">
    <title> Admin - Login </title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="genel_main">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                <p class="baslik"> ADMİN GİRİŞ FORMU </p>
             <div class="cizgi"></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6"><a href="index.php">ANA SAYFAYA GİTMEK İÇİN</a></div></div>
                <div class="formMain">
                  <p style="color:red;"><?php echo $form_err?></p>  
            <form action="" method="POST">
        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="kullaniciadi">
  <label for="floatingInput">Kullanıcı Adı</label>
</div>
        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="password">
  <label for="floatingInput">Parola</label>
</div>

    <input type="submit" class="ekle_btn" name="update" value="Giriş Yap" />
</form>
            </div>
            </div>

        </div>
        <div class="col-lg-2"></div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
