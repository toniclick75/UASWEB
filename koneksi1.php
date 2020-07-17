<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "zakatonline";
   $db = mysql_connect($hostname, $username, $password) or die ('Koneksi Gagal! ');
   mysql_select_db($dbname);
?>