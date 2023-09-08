<?php

require_once "../inc/galerihead.php";
?>




<!-- Header -->
<div class="header1" id="myHeader">
  <h1>PHOTO GALERY</h1>
  <p>Butana Tıklayarak Farklı Fonksiyonlarda Görebilirsin</p>
  <button class="btn" onclick="one()">1</button>
  <button class="btn active" onclick="two()">2</button>
  <button class="btn" onclick="four()">4</button>
</div>

<!-- Photo Grid -->
<div class="com">
  <div class="column">
    <img src="../images/footbal.jpg" style="width:100%">
    <img src="../images/10kasım.jpg" style="width:100%">
    <img src="../images/59.png" style="width:100%">
    <img src="../images/ata.jpg" style="width:100%">
    <img src="../images/footbal.jpg" style="width:100%">
    <img src="../images/footbal.jpg" style="width:100%">
    <img src="../images/footbal.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="../images/footbal.jpg" style="width:100%">
    <img src="../images/footbal.jpg" style="width:100%">
    <img src="../images/footbal.jpg" style="width:100%">
    <img src="../images/footbal.jpg" style="width:100%">
    <img src="../images/footbal.jpg" style="width:100%">
    <img src="../images/footbal.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="../images/footbal.jpg" style="width:100%">
    <img src="../images/footbal.jpg" style="width:100%">
    <img src="../images/footbal.jpg" style="width:100%">
    <img src="../images/footbal.jpg" style="width:100%">
    <img src="../images/footbal.jpg" style="width:100%">
    <img src="../images/ style=" width:100%">
    <img src="../images/footbal.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="../images/footbal.jpg" style="width:100%">
    <img src="../images/footbal.jpg" style="width:100%">
    <img src="../images/footbal.jpg" style="width:100%">
    <img src="../images/footbal.jpg" style="width:100%">
    <img src="../images/footbal.jpg" style="width:100%">
  </div>
</div>

<script>
  // Get the elements with class="column"
  var elements = document.getElementsByClassName("column");

  // Declare a loop variable
  var i;

  // Full-width images
  function one() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "100%"; // IE10
      elements[i].style.flex = "100%";
    }
  }

  // Two images side by side
  function two() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "50%"; // IE10
      elements[i].style.flex = "50%";
    }
  }

  // Four images side by side
  function four() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.msFlex = "25%"; // IE10
      elements[i].style.flex = "25%";
    }
  }

  // Add active class to the current button (highlight it)
  var header = document.getElementById("myHeader");
  var btns = header.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
</script>
<script src="../Js/ana.js"></script>

<?php
require_once "../inc/genelfooter.php";
?>
</div>
</div>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<!------------------ FOOTHER BİTİŞ ------------------------>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>