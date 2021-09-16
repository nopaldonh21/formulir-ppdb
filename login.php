<?php
	session_start();
	include 'config/koneksi.php';

	if(isset($_POST['login'])){

		// cek akun ada atau tidak
		$cek = mysqli_query($conn, "SELECT * FROM tb_admin 
			WHERE username = '".htmlspecialchars($_POST['user'])."' AND password = '".MD5(htmlspecialchars($_POST['pass']))."' ");

		if(mysqli_num_rows($cek) > 0){
			$a = mysqli_fetch_object($cek);

			$_SESSION['stat_login'] = true;
			$_SESSION['id'] = $a->id_admin;
			$_SESSION['nama'] = $a->nama_admin;
			echo '<script>window.location="beranda.php"</script>';
		}else{
			echo '<script>alert("Gagal, Username atau Password salah")</script>';
		}
	}
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

	<!-- bagian main login -->
	<section class="main-login">

		<div class="box-login">

			<div class="box-back-home">
				<a class="btn-back-home" href="index.html">Back</a>
			</div>

			<h2 class="judul-login">Login Admin</h2>

			<!-- bagian form login -->
			<form action="" method="post">
				
				<div class="box-table-login">
					<table>
						<tr>
							<td>Username</td>
							<td>:</td>
							<td>
								<input type="text" name="user" class="input-control">
							</td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td>
								<input type="password" name="pass" class="input-control">
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								<input type="submit" name="login" value="Login" class="btn-login">
							</td>
						</tr>
					</table>
				</div>
			</form>
		</div>

	</section>

</body>
</html>