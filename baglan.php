  <?php

$kullanıcı="-----";
$password="------";
$sunucu="localhost";
$database="------";

/*try{
  $conn = new PDO("mysql:host=$sunucu;dbname=u0631974_muharre", $username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo 'Connected Succesfully';
}catch(PDOException $e){
  echo 'Connection Failed: ' . $e->getMessage();
}
*/
$conn = mysqli_connect($sunucu, $kullanıcı, $password, $database);
$conn->query("SET CHARACTER SET utf8");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{

//echo "Bağlantı Sağlandı.";
}

// 5 saat önce, 3 dakika önce, 1 yıl önce

function timeConvert ( $zaman ){
 $zaman =  strtotime($zaman);
 $zaman_farki = time() - $zaman;
 $saniye = $zaman_farki;
 $dakika = round($zaman_farki/60);
 $saat = round($zaman_farki/3600);
 $gun = round($zaman_farki/86400);
 $hafta = round($zaman_farki/604800);
 $ay = round($zaman_farki/2419200);
 $yil = round($zaman_farki/29030400);
 if( $saniye < 60 ){
  if ($saniye == 0){
   return "az önce";
  } else {
   return 'Az Önce';
  }
 } else if ( $dakika < 60 ){
  return $dakika .' dakika önce';
 } else if ( $saat < 24 ){
  return $saat.' saat önce';
 } else if ( $gun < 7 ){
  return $gun .' gün önce';
 } else if ( $hafta < 4 ){
  return $hafta.' hafta önce';
 } else if ( $ay < 12 ){
  return $ay .' ay önce';
 } else {
  return $yil.' yıl önce';
 }
}
//echo time(); 1671018336
?>
