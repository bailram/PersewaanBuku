<?php
include 'model.php';

$nomorfaktur = $_POST['nomorfaktur'];
$tanggal = $_POST['tanggalfaktur'];
$nama = $_POST['namakonsumen'];
$kodebuku = $_POST['kodebuku'];
$jumlah = $_POST['jumlah'];
$hargasewa = 0;
$res = show_harga_sewa_by_id($kodebuku);
if($res){
  foreach ($res as $data) {
      $hargasewa = $data['hargasewa'];
  }
}
$hargatotal = $hargasewa*$jumlah;

// echo $nomorfaktur;
// echo $tanggal;
// echo $nama;
// echo $kodebuku;
// echo $jumlah;

add_sewa($nomorfaktur, $tanggal, $nama, $kodebuku, $jumlah, $hargasewa, $hargatotal)
?>
