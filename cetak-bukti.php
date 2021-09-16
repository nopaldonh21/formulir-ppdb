<?php
	include "config/koneksi.php";

	$peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE no_pendaftaran ='".$_GET['id']."' ");
	$p = mysqli_fetch_object($peserta);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PPDB Wikrama Garut</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script>
		window.print();
	</script>
</head>
<body>

	<div class="box-cetak">

	<h2>Bukti Pendaftaran</h2>

	<table border="0" class="table-data">
		<tr>
			<td>No. Pendaftaran</td>
			<td>:</td>
			<td><?php echo $p->no_pendaftaran ?></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><?php echo $p->nama_lengkap ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $p->jk ?></td>
		</tr>
		<tr>
			<td>Tempat, Tanggal Lahir</td>
			<td>:</td>
			<td><?php echo $p->tmp_tgl_lahir ?></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td><?php echo $p->agama ?></td>
		</tr>
		<tr>
			<td>Alamat Rumah</td>
			<td>:</td>
			<td><?php echo $p->alamat_rumah ?></td>
		</tr>		
	</table>

	</div>

</body>
</html>