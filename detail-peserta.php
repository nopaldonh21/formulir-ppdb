<?php
	session_start();
	include 'config/koneksi.php';
	if($_SESSION['stat_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}

	$peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE no_pendaftaran = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($peserta);
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
		<h2>Detail Peserta</h2>
		<div class="box">

			<h3>I. DATA CALON MURID</h3>

			<table border="0" class="table-data">
				<tr>
					<td>No. Pendaftaran</td>
					<td>:</td>
					<td><?php echo $p->no_pendaftaran ?></td>
				</tr>
				<tr>
					<td>No. Test</td>
					<td>:</td>
					<td><?php echo $p->no_test ?></td>
				</tr>
				<tr>
				 	<td>Jalur Penerimaan</td>
					<td>:</td>
					<td><?php echo $p->jalur_penerimaan ?></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><?php echo $p->nama_lengkap ?></td>
				</tr>
				<tr>
					<td>Nama Panggilan</td>
					<td>:</td>
					<td><?php echo $p->nama_panggilan ?></td>
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
				</tr><tr>
					<td>Cita-cita</td>
					<td>:</td>
					<td><?php echo $p->cita_cita ?></td>
				</tr>
				<tr>
					<td>Hobi</td>
					<td>:</td>
					<td><?php echo $p->hobi ?></td>
				</tr>
				<tr>
					<td>Anak Ke</td>
					<td>:</td>
					<td><?php echo $p->anak_ke ?></td>
				</tr>
				<tr>
					<td>Jumlah Saudara</td>
					<td>:</td>
					<td><?php echo $p->jumlah_saudara ?></td>
				</tr>
				<tr>
					<td>Berat Badan</td>
					<td>:</td>
					<td><?php echo $p->berat_badan ?></td>
				</tr>
				<tr>
					<td>Tinggi Badan</td>
					<td>:</td>
					<td><?php echo $p->tinggi_badan ?></td>
				</tr>
				<tr>
					<td>Golongan Darah</td>
					<td>:</td>
					<td><?php echo $p->gol_darah ?></td>
				</tr>				
			</table>

			<h3>II. KETERANGAN TEMPAT TINGGAL</h3>

			<table border="0" class="table-data">
				<tr>
					<td>Alamat Rumah</td>
					<td>:</td>
					<td><?php echo $p->alamat_rumah ?></td>
				</tr>
				<tr>
					<td>No. Telpon Rumah</td>
					<td>:</td>
					<td><?php echo $p->no_telp_rumah ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><?php echo $p->email ?></td>
				</tr>
			</table>

			<h3>IV. DATA ORANG TUA/WALI</h3>
			<h3>A. Ayah</h3>

			<table border="0" class="table-data">
				<tr>
					<td>Nama Ayah</td>
					<td>:</td>
					<td><?php echo $p->nama_ayah ?></td>
				</tr>
				<tr>
					<td>Tempat, Tanggal Lahir</td>
					<td>:</td>
					<td><?php echo $p->tmp_tgl_lahir_ayah ?></td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td>:</td>
					<td><?php echo $p->pekerjaan_ayah ?></td>
				</tr>
				<tr>
					<td>Pendidikan Terakhir</td>
					<td>:</td>
					<td><?php echo $p->penddkn_terakhir_ayah ?></td>
				</tr>
				<tr>
					<td>Kewarganegaran/Agama</td>
					<td>:</td>
					<td><?php echo $p->kewarganegaraan_agama_ayah ?></td>
				</tr>
				<tr>
					<td>No.HP/WA</td>
					<td>:</td>
					<td><?php echo $p->no_hp_wa_ayah ?></td>
				</tr>
			</table>

			<h3>B. Ibu</h3>

			<table border="0" class="table-data">
				<tr>
					<td>Nama Ibu</td>
					<td>:</td>
					<td><?php echo $p->nama_ibu ?></td>
				</tr>
				<tr>
					<td>Tempat, Tanggal Lahir</td>
					<td>:</td>
					<td><?php echo $p->tmp_tgl_lahir_ibu ?></td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td>:</td>
					<td><?php echo $p->pekerjaan_ibu ?></td>
				</tr>
				<tr>
					<td>Pendidikan Terakhir</td>
					<td>:</td>
					<td><?php echo $p->penddkn_terakhir_ibu ?></td>
				</tr>
				<tr>
					<td>Kewarganegaran/Agama</td>
					<td>:</td>
					<td><?php echo $p->kewarganegaraan_agama_ibu ?></td>
				</tr>
				<tr>
					<td>No.HP/WA</td>
					<td>:</td>
					<td><?php echo $p->no_hp_wa_ibu ?></td>
				</tr>
			</table>	
		</div>
	</section>

</body>
</html>