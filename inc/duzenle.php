<?php
if(isset ($_POST["update"], $_POST["username"],$_POST["usersurname"],$_POST["TC"],$_POST["mail"],$_POST["telefon"])){
$id = $_GET["id"];
$username = $_POST["username"];
$usersurname = $_POST["usersurname"];
$TC = $_POST["TC"];
$mail = $_POST["mail"];
$telefon = $_POST["telefon"];

if (empty($username) || empty($usersurname) || empty($TC)|| empty($mail) || empty($telefon))  {
  $form_err = "LÜTFEN BÜTÜN ALANLARI DOLDURUP TEKRAR DENEYİNİZ";
}
if(isset($username) && isset($usersurname) && isset($TC) && isset($mail) && isset($telefon)){
$sorgu = $conn->prepare("UPDATE userbase SET username = '$username', usersurname = '$usersurname', TC = '$TC', mail = '$mail', telefon ='$telefon'  WHERE id = $id");
$sorgu->bind_param("ssi", $username, $usersurname, $TC, $mail, $telefon, $id);
$sorgu->execute();
if ($sorgu->affected_rows > 0) {
    echo $sorgu->affected_rows . " KAYIT BAŞARILI BİR ŞEKİLDE GÜNCELLENDİ.";
    header('location:userdata.php');
} else {
    echo " TC KULLANIMDA OLABİLİR";
}
}
}
if(isset($_GET['id']) && ctype_digit($_GET['id'])){
  //detay
  $isFullList = false;
    $id = intval($_GET['id']);

    $strSQL = "SELECT * FROM userbase WHERE id=?";
    $prepared = $conn->prepare($strSQL);
    $prepared->bind_param("i", $id);
    $prepared->execute();
}
$result=$prepared->get_result();
$user=$result->fetch_assoc();
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
    <title> ÜYE DÜZENLEME SAYFASI </title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="genel_main">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                <p class="baslik"> ÜYE DÜZENLEME FORMU </p>
             <div class="cizgi"></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6"><a href="userdata.php">GERİ DÖNMEK İÇİN TIKLAYIN</a></div></div>
                <div class="formMain">
                  <p style="color:red;"><?php echo $form_err?></p>  
            <form action="" method="POST">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">

        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" value="<?php echo $user["username"]?>">
  <label for="floatingInput">Ad</label>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="usersurname"value="<?php echo $user["usersurname"]?>">
  <label for="floatingInput">Soyad</label>
</div>
</div>
</div>
        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="TC" value="<?php echo $user["TC"]?>">
  <label for="floatingInput">TC</label>
</div>
        <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="mail" value="<?php echo $user["mail"]?>">
  <label for="floatingInput">Mail</label>
</div>
        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="telefon" value="<?php echo $user["telefon"]?>">
  <label for="floatingInput">Telefon</label>
</div>
    <input type="submit" class="ekle_btn" name="update" value="Kaydet" />
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
