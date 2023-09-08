  <!------------------ NAVBAR ------------------------>
  <div class="container-fluid">
    <ust>
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar navbar-dark " id="navbar">
          <div class="nav_logo">
            <a class="navbar-brand" href="..\index.php">
              <img src="../images/logos.png" width="70px" height="70px" class="d-inline-block align-top" alt="">
            </a>
          </div>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mr-auto" id="menu-nav">
              <li class="nav-item">
                <a class="nav-link " href="../menu/hakkinda.php"> Hakkımızda</a>
              </li>
              </li>
              <li class="dropdown-menu-static dropdown-menu-animated dropdown">
                <a class="nav-link dropdown-toggle takim" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kupalar
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item drop" href="../menu/uefaintertotokupasi.php">UEFA İNTERTOTO KUPASI <br>
                      (2006-2007)</a></li>
                  <li><a class="dropdown-item drop" href="../menu/türkiyekupasi.php">TÜRKİYE KUPASI <br> (2007-2008)</a></li>
                </ul>
              </li>
              <li class="dropdown-menu-static dropdown-menu-animated dropdown">
                <a class="nav-link dropdown-toggle takim" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 0;">
                  Takım
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item drop" href="../menu/futbolcular.php">FUTBOLCULAR</a></li>
                  <li><a class="dropdown-item drop" href="../menu/fikstur.php?ay_id=1">FIKSTÜR</a></li>
                  <li><a class="dropdown-item drop" href="../menu/kadro.php">KADRO</a></li>
                  <li><a class="dropdown-item drop" href="../menu/galeri.php">GALERİ</a></li>
                </ul>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="../menu/pasolig-info.php?info_id=1"> Pasolig</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="../menu/pasoligupdate.php">Update</a>
              </li>
            </ul>
            <ul class="navbar-nav" id="ara-nav">
              <form action="../menu/arama.php" id="ara-form" method="post">
                <div class="wrapper">
                  <div class="search-input">
                    <input type="text" name="kelime" placeholder="Arama Yapın">
                    <div class="autocom-box">
                      <li>Sütun - 1</li>
                      <li>Sütun - 2</li>
                      <li>Sütun - 3</li>
                      <li>Sütun - 4</li>
                      <li>Sütun - 5</li>
                      <li>Sütun - 6</li>
                    </div>
                    <div class="icon">
                      <button type="submit" style="background:transparent; color:#fff; opacity:80%;margin-top:5px;margin-right: 10px; border:0;"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                  </div>
                </div>
              </form>
            </ul>
          </div>

        </nav>
      </div>
    </ust>

  </div>