<html>
<head>
	<title>CETAK PRINT DATA PEMBAYARAN ZAKAT</title>
</head>
<body>
 
	<center>
 
		<h2>DATA PEMBAYARAN ZAKAT</h2>
		<h4>WWW.ZAKATONLINE.COM</h4>
 
	</center>
 
	<?php 
	include 'koneksi1.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">no</th>
			<th>Jenis Barang</th>
			<th>Nominal</th>
			<th>Nama Lengkap</th>
			<th>No.Hp</th>
			<th>Email</th>
			<th>Nama Bank</th>
			<th>Nomor Rekening</th>
		</tr>
		<?php 
		$id = $_GET['id'];
		$query_mysql = mysql_query("SELECT * FROM user WHERE id='$id'")or die(mysql_error());
	    $nomor = 1;
	    while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $id++; ?></td>
			<td><?php echo $data['jeniszakat']; ?></td>
			<td><?php echo $data['nominal']; ?></td>
			<td><?php echo $data['namalengkap']; ?></td>
			<td><?php echo $data['nohp']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><?php echo $data['namabank']; ?></td>
			<td><?php echo $data['nomorrekening']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>