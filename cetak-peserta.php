<?php
	include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak Peserta</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script>
		window.print();
	</script>
</head>
<body>

	<div class="box-cetak">

	<h2>Laporan Data Calon Murid</h2><br><br>
	<table class="table" border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>No. Pendaftaran</th>
				<th>No. Test</th>
				<th>Nama Lengkap</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Tanggal Lahir</th>
				<th>Agama</th>
				<th>Alamat Rumah</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$no = 1;
				$list_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
				while($row = mysqli_fetch_array($list_peserta)){
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $row['no_pendaftaran'] ?></td>
				<td><?php echo $row['no_test'] ?></td>
				<td><?php echo $row['nama_lengkap'] ?></td>
				<td><?php echo $row['jk'] ?></td>
				<td><?php echo $row['tmp_tgl_lahir']?></td>
				<td><?php echo $row['agama'] ?></td>
				<td><?php echo $row['alamat_rumah'] ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

	</div>

</body>
</html>