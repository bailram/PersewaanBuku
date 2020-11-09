<?php
include 'connection.php';

// fungsi untuk mendapatkan semua data buku
function show_all_book() {
  $sql = "SELECT * FROM buku";
  $res = $GLOBALS['conn']->query($sql);
  return $res;
}

function show_kodebuku_and_judul(){
  $sql = "SELECT kodebuku, judulbuku FROM buku";
  $res = $GLOBALS['conn']->query($sql);
  return $res;
}

function show_sewa(){
  $sql = "SELECT * FROM sewa";
  $res = $GLOBALS['conn']->query($sql);
  return $res;
}

function show_harga_sewa_by_id($id){
  $sql = "SELECT hargasewa FROM buku where kodebuku='$id'";
  $res = $GLOBALS['conn']->query($sql);
  return $res;
}

// fungsi untuk menambahkan buku baru
function add_book($kodebuku, $judulbuku, $penerbit, $pengarang, $harga){
  // cek dulu apakah kodebuku telah terdaftar
  $sqlVer = "SELECT kodebuku from buku where kodebuku='$kodebuku'";
  $res = $GLOBALS['conn']->query($sqlVer);
  if(res){
    $kodebukures = "";
    foreach ($res as $data) {
        $kodebukures = $data['kodebuku'];
    }
    if ($kodebuku == $kodebukures) {
      header("Location: book.php?m=2");
    }else{
      $sql = "INSERT INTO `buku` (`kodebuku`, `judulbuku`, `penerbit`, `pengarang`, `hargasewa`) "
        ."VALUES ('$kodebuku', '$judulbuku', '$penerbit', '$pengarang', '$harga')";
      if ($GLOBALS['conn']->query($sql) === TRUE) {
        header("Location: book.php?m=1"); // kode pesan berhasil menambahkan data buku
      } else {
        header("Location: book.php?m=0");
      }
    }
  } else {
    header("Location: book.php?m=0");
  }
}

function add_sewa($nomorfaktur, $tanggal, $nama, $kodebuku, $jumlah, $hargasewa, $hargatotal){
  // cek dulu apakah nomor faktur sudah terpakai
  $sqlVer = "SELECT nomorfaktur from sewa where nomorfaktur='$nomorfaktur'";
  $res = $GLOBALS['conn']->query($sqlVer);
  if (res) {
    $nomorfakturres = "";
    foreach ($res as $data) {
      $nomorfakturres = $data['nomorfaktur'];
    }
    if ($nomorfaktur == $nomorfakturres) {
      header("Location: index.php?m=2"); // kode pesan nomor faktur telah terpakai
    } else {
      $sql = "INSERT INTO `sewa` (`nomorfaktur`, `tanggalfaktur`, `namakonsumen`, `kodebuku`, `jumlah`, `hargasewa`, `hargatotal`) VALUES ('$nomorfaktur', '$tanggal', '$nama', '$kodebuku', '$jumlah', '$hargasewa', '$hargatotal')";
      if ($GLOBALS['conn']->query($sql) === TRUE) {
        header("Location: index.php?m=1"); // kode pesan berhasil menambahkan data sewa
      } else {
        header("Location: index.php?m=0");
      }
    }    
  }else{
    header("Location: index.php?m=0");
  }

}

function edit_book($kodebuku, $judulbuku, $penerbit, $pengarang, $harga){
  $sql = "UPDATE `buku` SET `judulbuku` = '$judulbuku', `penerbit` = '$penerbit', `pengarang` = '$pengarang', `hargasewa` = '$harga' WHERE `buku`.`kodebuku` = '$kodebuku'";
  if ($GLOBALS['conn']->query($sql) === TRUE) {
    header("Location: book.php?m=5"); // kode pesan berhasil edit data buku
  } else {
    header("Location: book.php?m=0");
  }
}

function delete_book($kodebuku){
  $sql = "DELETE FROM `buku` WHERE `buku`.`kodebuku` = '$kodebuku'";
  if ($GLOBALS['conn']->query($sql) === TRUE) {
    header("Location: book.php?m=4"); // kode pesan berhasil delete data buku
  } else {
    header("Location: book.php?m=0");
  }
}
?>
