<?php


$id = $_GET["id"];
$sorgu = $conn->prepare("DELETE FROM userbase WHERE id = ?");
$sorgu->bind_param("i", $id);
$sorgu->execute();

if ($sorgu->affected_rows > 0) {
    echo $sorgu->affected_rows . " kayıt silindi.";
    header("location:userdata.php");
} else {
    echo "Herhangi bir kayıt silinemedi.";
}
?>