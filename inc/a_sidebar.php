<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Admin Panel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="path/to/custom-styles.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Yan Menü -->
      <div class="col-md-3 bg-dark sidebar">
        <div class="logo text-center py-4">
          <h4 class="text-white">Admin Paneli</h4>
        </div>
        <ul class="nav flex-column mt-4">
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="bi bi-house-fill me-2"></i>Ana Sayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="bi bi-people-fill me-2"></i>Kullanıcılar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="bi bi-gear-fill me-2"></i>Ayarlar</a>
          </li>
        </ul>
      </div>

      <!-- Ana İçerik -->
      <div class="col-md-9">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#">Bildirimler <span class="badge bg-primary">4</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Profil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Çıkış</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="content mt-4">
          <h1>Hoş Geldiniz!</h1>
          <p>Modern admin panel tasarımına hoş geldiniz.</p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
