<?php
$form_err = "";
if (isset($_POST['userN'], $_POST['userS'], $_POST['TC'], $_POST['mail'], $_POST['telefon'], $_POST['userpassword'], $_POST['userpasswordtkr'])) {

    $userN = $_POST['userN'];
    $userS = $_POST['userS'];
    $TC = $_POST['TC'];
    $mail =$_POST['mail'];
    $telefon = $_POST['telefon'];
    $userpassword = $_POST['userpassword'];
    $userpasswordtkr = $_POST['userpasswordtkr'];
    if (empty($userN) || empty($userS) || empty($TC)|| empty($mail) || empty($telefon) || empty($userpassword) || empty($userpasswordtkr))  {
        $form_err = "LÜTFEN BÜTÜN ALANLARI DOLDURUP TEKRAR DENEYİNİZ";
    }

if(isset($userN) && isset($userS) && isset($TC) && isset($mail) && isset($telefon) && isset($userpassword) && isset($userpasswordtkr)){

    $userpassword = password_hash($_POST["userpassword"], PASSWORD_DEFAULT);
    $userpasswordtkr = password_hash($_POST["userpasswordtkr"], PASSWORD_DEFAULT);
    $sorgu = ("INSERT INTO userbase (username, usersurname, TC, mail, telefon, userpassword, userpassword_tkr) VALUES('$userN', '$userS', '$TC', '$mail', '$telefon', '$userpassword', '$userpasswordtkr')");
    $calistirekle = mysqli_query($conn, $sorgu);
  if($calistirekle){
    echo "<p>Bilgiler başarılı bir şekilde kaydedildi.</p>";
    header('location:userdata.php');
  }
  
else
{
    echo "<p>Bilgiler kaydedilemedi.</p>";
}
  /*  if ($conn->errno > 0) {
        die("<b>Sorgu Hatası:</b> " . $conn->error);
    }
    
*/ 
}
else
{
    echo "<p>Bilgiler kaydedilemedi.</p>";
}
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
    <title> ÜYE EKLEME SAYFASI </title>
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
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="userN">
  <label for="floatingInput">Ad</label>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="userS">
  <label for="floatingInput">Soyad</label>
</div>
</div>
</div>
        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="TC">
  <label for="floatingInput">TC</label>
</div>
        <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="mail">
  <label for="floatingInput">Mail</label>
</div>
        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="telefon">
  <label for="floatingInput">Telefon</label>
</div>
        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="userpassword">
  <label for="floatingInput">Parola</label>
</div>
        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="userpasswordtkr">
  <label for="floatingInput">Parola Tekrar</label>
</div>
    <input type="submit" class="ekle_btn" name="ekle" value="Kaydet" />
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
