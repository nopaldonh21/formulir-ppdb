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
		<h2>Beranda</h2>
		<div class="box">
			<h3><?php echo $_SESSION['nama'] ?>, Selamat Datang di Admin PPDB Wikrama Garut</h3>
			
		</div>
	</section>

</body>
</html>