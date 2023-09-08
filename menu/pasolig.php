<?php


require_once "../baglan.php";
$page = "PASOLİG GİRİŞ";
require_once "../inc/pasolighead.php";


?>



<div class="container-fluid">
    <div class="row">
        <div class="ps-header">
            <div class="head-logo">
                <a class="navbar-brand" href="\index.php">
                    <img src="../images/logos.png" height="52px" width="50px" class="d-inline-block align-top" alt="">
                </a>
            </div>
            <p class="f-bas">Pasolig Hesap</p>
        </div>
    </div>
    <header class="headerim"></header>
    <div class="ps-intro">
        <p class="f2-bas">Kayserispor Pasolig Dijital Hesap İçin Kaydolun</p>
        <p class="p-t">Enter your details below to create your Aston Villa Digital Account.</p>
        <p class="p-t">Once signed up, you’ll be able to purchase tickets and get exclusive access to Aston Villa content as well as a host of other benefits. This is a one-time registration required with your email.</p>
    </div>

    <div class="loyout wrap">
        <form action="">
            <div class="sat">
                <div class="colon-6">
                <div class="forming-box">
            <input class="forming-input" id="forming-Input" value="" type="text" id="name" placeholder="Name">
            <label class="forming-ct" for="forming-Input" >Ad</label></div>
                </div>
                <div class="colon-6">
                <div class="forming-box">
            <input class="forming-input"  id="forming-Input2" value="" type="text" id="name" placeholder="Name">
            <label class="forming-ct"  for="forming-Input2" >Soyad</label></div>
                </div>
                </div>
            <div class="sat">
                <div class="colon-12">
            <div class="forming-box">
            <input class="forming-input"  id="forming-Input3" value="" type="email" id="name" placeholder="Name">
            <label class="forming-ct"  for="forming-Input3">Mail</label></div>
                </div>
                </div>
            <div class="sat">
            <div class="colon-12">
            <div class="forming-box">
            <input class="forming-input"  id="forming-Input4" value="" type="password" id="name" placeholder="Name">
            <label class="forming-ct" for="forming-Input4" >Parola</label></div>
                </div>
                </div>
            <div class="sat">
            <div class="colon-12">
                <input type="submit" value="Kayıt Ol">
            </div>
            </div>
        </form>
    </div>
</div>
<script>

function myFunction(event) { 
    document.getElementById("forming-Input");
    
}

</script>
<script src="../js/giris.js"></script>
<script src="../js/ana.js"></script>
<!------------ Kullanici Giriş Alani  ---------------------->

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>