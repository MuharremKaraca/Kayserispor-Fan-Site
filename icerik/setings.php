

<!doctype html>
<html lang="en">
  <head>
  <link rel="icon"href="../images/logos.png"type="image/x-icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo$row["baslik"]?></title> 


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!------------------ BOOTSTRAP FONT-AWESOME ------------------------>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
      <!------------------  YAZI FONTU ------------------------>
<link rel="stylesheet" href="../fonts/Abril_Fatface/AbrilFatface-Regular.ttf">
 <!------------------ YAZI FONTU BİTİŞ ------------------------>
    <script src="https://kit.fontawesome.com/6abbd6417f.js" crossorigin="anonymous"></script>
     <!------------------ FPMTAWESOME KİT BİTİŞ ------------------------>
     <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/sidebar.css">
<style>
.devasa_kutu {
    width: 100%;
    height: 100vh;
    padding: 50px;
    padding-top: 50vh;
    text-align: center;
    justify-content: center;
    align-items: center;
}
.devasa_kutu p
{
    font-family: 'Poppins-regular';
    color: #222;
    font-size: 50px;
}
</style>
</head>
<body>
        <?php 
        require_once "../inc/preloader.php";?>
        <?php
require_once "../inc/a_sidebar.php";
?>



<div class="devasa_kutu">
    <p>AYARLAR SAYFASI</p>
</div>




<script src="../js/ana.js"></script>
<script src="../js/sidebar.js"></script>
</body>
</html>