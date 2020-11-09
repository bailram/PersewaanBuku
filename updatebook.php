<?php
include 'model.php';

$kodebuku = $_POST['kodebuku'];
$judulbuku = $_POST['judulbuku'];
$penerbit = $_POST['penerbit'];
$pengarang = $_POST['pengarang'];
$harga = $_POST['hargasewa'];

// debug
// echo $kodebuku."<br>";
// echo $judulbuku."<br>";
// echo $penerbit."<br>";
// echo $pengarang."<br>";
// echo $harga."<br>";

edit_book($kodebuku, $judulbuku, $penerbit, $pengarang, $harga);
?>
