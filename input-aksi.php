<?php 
include 'koneksi1.php';
$jeniszakat = $_POST['jeniszakat'];
$nominal = $_POST['nominal'];
$namalengkap = $_POST['namalengkap'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$namabank = $_POST['namabank'];
$nomorrekening = $_POST['nomorrekening']; 
mysql_query("INSERT INTO user VALUES('','$jeniszakat','$nominal','$namalengkap','$nohp','$email','$namabank','$nomorrekening')");
 
header("location:index.php?pesan=input");
?>