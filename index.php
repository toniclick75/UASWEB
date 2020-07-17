<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>
<div align='center'>
   Selamat Datang, <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a>
</div>
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
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
 
	<h3>Data Pembayaran Zakat</h3>

	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Jenis Zakat</th>
			<th>Nominal</th>
			<th>Nama Lengkap</th>
			<th>No.Hp</th>
			<th>Email</th>
			<th>Nama Bank</th>
			<th>No.Rek</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi1.php";
		$query_mysql = mysql_query("SELECT * FROM user")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['jeniszakat']; ?></td>
			<td><?php echo $data['nominal']; ?></td>
			<td><?php echo $data['namalengkap']; ?></td>
			<td><?php echo $data['nohp']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><?php echo $data['namabank']; ?></td>
			<td><?php echo $data['nomorrekening']; ?></td>

			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a> |
				<a class="cetak" href="cetak.php?id=<?php echo $data['id']; ?>">cetak</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
