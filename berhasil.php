<?php
	include "config/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PPDB Wikrama Garut</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<!-- bagian box formulir -->
	<section class="box-formulir">

		<div class="box-cetak">
		
		<h2>Pendaftaran Berhasil</h2>

		<div class="box">
			<br><br>
			<h4>Kode pendaftaran Anda adalah <?php echo $_GET['id'] ?></h4>
			<a href="cetak-bukti.php?id=<?php echo $_GET['id'] ?>" target="_blank" class="btn-cetak">Cetak Bukti Daftar</a>
		</div>

		</div>

	</section>

</body>
</html>