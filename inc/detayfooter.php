<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     
     <script src="../Js/lightbox-plus-jquery.min.js"></script>
<div class="foother float-end p-5 text-white" style="text-align:start">
<section class="spon" id="sponsormain" style=" margin-top: 100px; margin-bottom: 0px;">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 text-center">
          <img src="../images/erciyesholding.png" alt="" class="sponsor">
        </div>
        <?php
        $sql = "SELECT * FROM sponsor";
        $results = $conn->query($sql);
        while ($sponsor = $results->fetch_assoc()) {
        ?>
          <div class="col-lg-3 text-center">
            <img src="../images/<?php echo $sponsor["img"] ?>" alt="" class="sponsor">
          </div>
        <? } ?>

      </div>
    </div>


  </section>
<div class="row">
  <div class="col-6">

  </div>
  </div>
  <div class="row">
<a href="\index.php" id="logon"> <img src="../images/logos.png" id="ft_img" class="rounded d-block"></a>
</div>
<div class="row">
  <div class="col-12 text-center mt-4">
<p id="haklari_saklidir_text">Copyright by <a href="https://www.instagram.com/krc.muharrem/" target="_blank" style="text-decoration: none;">Muharrem</a> © 2022 Tüm Hakları Saklıdır.</p></div>
</div>
</div>