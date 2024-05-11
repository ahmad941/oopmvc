<?php
$link = new PDO("mysql:host=localhost;dbname=db_oopmvc", "root", ""); // Koneksi database menggunakan PDO (PHP data Object)
$result = $link->query("SELECT *from anggota"); // Memanggil tabel anggota

$anggota = array();
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $anggota[]=$row;
}

$link = null;
require "view/anggota/list.php";
?>

