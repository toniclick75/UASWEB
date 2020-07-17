<!DOCTYPE html>
<html>
<head>
	<title>ZakatOnline.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Tidak Ada Alasan Untuk Tidak Berzakat</h1>
		<h2>Ayo Berzakat...</h2>
		<h3>www.zakatonline.com</h3>
		<script language="JavaScript">
    	var tanggallengkap = new String();
    	var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
    	namabulan = namabulan.split(" ");
    	var tgl = new Date();
    	var tanggal = tgl.getDate();
    	var bulan = tgl.getMonth();
    	var tahun = tgl.getFullYear();
    	tanggallengkap = tanggal + " " + namabulan[bulan] + " " + tahun;
 		</script>
 		<script language='JavaScript'>document.write(tgl);</script></font></p>
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi1.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM user WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
				<form>
				<td>Jenis Zakat </td>
					<td><select name="jeniszakat">
					<option>--- jenis zakat ---</option>
					<?php
					mysql_connect("localhost", "root", "");
					mysql_select_db("zakatonline");
					$sql = mysql_query("SELECT * FROM jeniszakat ORDER BY jeniszakat ASC");
					if(mysql_num_rows($sql) != 0){
					while($row = mysql_fetch_assoc($sql)){
					echo '<option>'.$row['jeniszakat'].'</option>';}
					}
					?>
					</select></td>
				</form>					
			</tr>	
			<tr>
				<td>Nominal</td>
				<td><input type="text" name="nominal" value="<?php echo $data['nominal'] ?>"></td>					
			</tr>	
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="namalengkap" value="<?php echo $data['namalengkap'] ?>"></td>					
			</tr>	
			<tr>
				<td>No.Hp</td>
				<td><input type="text" name="nohp" value="<?php echo $data['nohp'] ?>"></td>					
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>					
			</tr>
			<tr>
				<td>Nama Bank</td>
				<td><input type="text" name="namabank" value="<?php echo $data['namabank'] ?>"></td>					
			</tr>
			<tr>
				<td>Nomor Rekening</td>
				<td><input type="text" name="nomorrekening" value="<?php echo $data['nomorrekening'] ?>"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>