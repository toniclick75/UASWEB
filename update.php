<?php 
 
include 'koneksi1.php';
$id = $_POST['id'];
$jeniszakat = $_POST['jeniszakat'];
$nominal = $_POST['nominal'];
$namalengkap = $_POST['namalengkap'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$namabank = $_POST['namabank'];
$nomorrekening = $_POST['nomorrekening'];
 
mysql_query("UPDATE user SET jeniszakat='$jeniszakat', nominal='$nominal', namalengkap='$namalengkap', nohp='$nohp', email='$email', namabank='$namabank', nomorrekening= '$nomorrekening' WHERE id='$id'");
 
header("location:index.php?pesan=update");
 
?>