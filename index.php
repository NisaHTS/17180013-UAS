<!DOCTYPE html>
<html>
<head>
<a class href="form_input.php">+ Add Data</a>
	<title>DATA SISWA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>List Data Siswa</h1>
	</div>
	<br/>
	<br/>
	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Hoby</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM tabel_siswa")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $data['nama_siswa']; ?></td>
			<td><?php echo $data['jenis_kelamin']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
      <td><?php echo $data['hoby']; ?></td>

			<td>
				<a class href="form_input.php">Edit</a><a class href="proses_hapus.php">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>