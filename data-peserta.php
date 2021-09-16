<?php
	session_start();
	include 'config/koneksi.php';
	if($_SESSION['stat_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PPDB Wikrama Garut | Administrator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<!-- bagian header-->
	<header>
		<h1><a href="beranda.php" class="menu-header-logo">Admin PPDB</a></h1>
		<ul>
			<li><a href="beranda.php" class="menu-header">Beranda</a></li>
			<li><a href="data-peserta.php" class="menu-header">Data Peserta</a></li>
			<li><a href="keluar.php" class="menu-header">Keluar</a></li>
		</ul>
	</header>

	<!-- bagian header-->
	<section class="content">
		<h2>Data Peserta</h2>
		<div class="box">
			<a href="cetak-peserta.php" target="_blank" class="btn-cetak">Print</a>
			<table class="table" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>No. Pendaftaran</th>
						<th>Nama Lengkap</th>
						<th>Jenis Kelamin</th>
						<th>Aksi</th>
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
						<td><?php echo $row['nama_lengkap'] ?></td>
						<td><?php echo $row['jk'] ?></td>
						<td>
							<a href="detail-peserta.php?id=<?php echo $row['no_pendaftaran']  ?>">Detail</a> || 
							<a href="hapus-peserta.php?id=<?php echo $row['no_pendaftaran']  ?>" onclick="return confirm('Yakin hapus data ini?' )">Hapus</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			
		</div>
	</section>

</body>
</html>