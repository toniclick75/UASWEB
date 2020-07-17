<?php
   session_start();
   if(isset($_SESSION['username']))
   require_once("koneksi1.php");
?>

<title>ZakatOnline.com</title>
<head>
  <link rel="stylesheet" type="text/css" href="style1.css">
<div align='center'>
  <form action="proseslogin.php" method="post">
  <h1>WWW.ZAKATONLINE.COM</h1>
  <h2>Cara mudah untuk berzakat | ZakatOnline.com</h2>
  <h3>Tidak ada alasan untuk berzakat</h3>
  <table>
  <tbody>
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>
</head>