
<?php require_once "../inc/mac-header.php" ?>
        
         <!------------------ HERO BİTİŞ ------------------------>
<div class="container">
    <div class="match">
      <div class="match-header">
        <div class="match-status"><?php echo$row["mac_durumu"]?></div>
        <div class="match-tournament"><img src="../images/sportotopng.png" alt=""></div>
      
      </div>
      <div class="match-content">
        <div class="column">
          <div class="team team--home">
            <div class="team-logo">
              <img src="../images/logolar/<?php echo$row["takim1d_img"]?>" alt="">
            </div>
            <h2 class="team-name"><?php echo$row["takim1"]?></h2>
          </div>
        </div>
        <div class="column">
          <div class="match-details">
            <div class="match-date">
             6 Ağustos saat <strong>21:45</strong> 
            </div>
            <div class="match-score">
              <span class="match-score-number match-score-number--leading"><?php echo$row["takim1_skor"]?></span>
              <span class="match-score-divider">:</span>
              <span class="match-score-number"><?php echo$row["takim2_skor"]?></span>
            </div>
            <div class="match-time-lapsed">
              56'
            </div>
            <div class="match-hakem">
              Hakem: <strong><?php echo$row["hakem"]?></strong>
            </div>
            <div class="match-bet-options">
              <button class="match-bet-option">0</button>
              <button class="match-bet-option">0</button>
              <button class="match-bet-option">0</button>
            </div>
            <button class="match-bet-place">Sence kim alir ?</button>
          </div>
        </div>
        <div class="column">
          <div class="team team--away">
            <div class="team-logo">
              <img src="../images/logolar/<?php echo$row["takim2d_img"]?>" alt="">
            </div>
            <h2 class="team-name"><?php echo$row["takim2"]?></h2>
          </div>
        </div>
      </div>
    </div>
       <p style="text-align:center; opacity: 22%; font-size: 22px; margin-top: 50px;">By Kyf</p> 
        <hr>
        </div>
</div>
 <!------------------ FOOTHER ------------------------>
 
  <!------------------ BOOTSTRAP SCRİPT ------------------------>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <script src="../js/ana.js"></script>
 <?php 
require_once "../inc/genelfooter.php";
?>


</body>
</html>