<?php
$conn = new mysqli("localhost","root","","database_persewaan_buku");

if($conn->connect_error){
  echo "Connection database failed : ".$conn->connect_error;
}
?>
