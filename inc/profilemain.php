<?php
include "../inc/profilehead.php";

?>
<div class="container">
  <div class="row mt-5">
    <div class="col-lg-1 col-1"></div>
    <div class="col-lg-10 col-10">
      <div class="formBx">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <h1 class="p-baslik">Hoş Geldin <?php echo $_SESSION["username"] ?></h1>
            <div class="profil_photo">
              <img src="../images/pflogo.jpg" class="profil_img" alt="...">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <h1 class="p-baslik">Kişisel Verilerin</h1>
            <form action="\icerik/profile.php" method="POST">
              <div class="user_nick">
                <div class="inputBox">
                  <div class="form-floating">
                    <input type="text" \n class="form-control" id="userpassword" placeholder="12345678901" value="<?php echo $_SESSION["username"] ?>" name="username">
                    <label for="floatingInputInvalid">Ad</label>
                    <div id="validationServer03Feedback" class="invalid-feedback"></div>
                  </div>
                </div>
              </div>
              <div class="user_nick">
                <div class="inputBox">
                  <div class="form-floating">
                    <input type="text" \n class="form-control" id="usersurname" placeholder="12345678901" value="<?php echo $_SESSION["usersurname"] ?>" name="usersurname">
                    <label for="floatingInputInvalid">Soyad</label>
                    <div id="validationServer03Feedback" class="invalid-feedback"></div>
                  </div>
                </div>
              </div>
              <div class="user_nick">
                <div class="inputBox">
                  <div class="form-floating">
                    <input type="text" \n class="form-control" id="TC" placeholder="12345678901" value="<?php echo $_SESSION["TC"] ?>" name="TC">
                    <label for="floatingInputInvalid">TC</label>
                    <div id="validationServer03Feedback" class="invalid-feedback"></div>
                  </div>
                </div>
              </div>
              <div class="user_nick">
                <div class="inputBox">
                  <div class="form-floating">
                    <input type="text" \n class="form-control" id="mail" placeholder="12345678901" value="<?php echo $_SESSION["mail"] ?>" name="mail">
                    <label for="floatingInputInvalid">Mail Adresi</label>
                    <div id="validationServer03Feedback" class="invalid-feedback"></div>
                  </div>
                </div>
              </div>
              <div class="user_nick">
                <div class="inputBox">
                  <div class="form-floating">
                    <input type="text" \n class="form-control" id="telefon" placeholder="12345678901" value="<?php echo $_SESSION["telefon"] ?>" name="telefon">
                    <label for="floatingInputInvalid">Telefon Numarası</label>
                    <div id="validationServer03Feedback" class="invalid-feedback"></div>
                  </div>
                </div>
              </div>
              <button class="submit" name="bilgi_degis">Kaydet</button>
            </form>
            <br>
            <div class="user_nick">
              Oturumu Kapatmak İçin :
              <a class="dropdown-togglem" href="../icerik/cikis.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php
                echo " Tıkla  ";
                echo '<i class="fa-solid fa-user-secret"></i>';
                ?>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <h1 class="p-baslik">Katıldığın Maçlar</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include("../inc/profilefooter.php");
?>
</body>

</html>