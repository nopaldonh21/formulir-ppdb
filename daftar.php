<?php

	include "config/koneksi.php";

	if(isset($_POST['submit'])){

		$getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(no_pendaftaran, 5)) AS id FROM tb_pendaftaran");
		$d = mysqli_fetch_object($getMaxId);
		$generateNoP = 'P'.date('Y').sprintf("%05s", $d->id + 1);
		$generateNoT = 'T'.sprintf("%05s", $d->id + 1);
		
		$hub_saud = "";

		if ($_POST['tinggal_dengan'] == "Saudara") {
			$hub_saud = ": ".$_POST['hub_saud'];
		}

		// proses insert
		$insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES(
				'".$generateNoP."',
				'".$generateNoT."',
				'".$_POST['jp']."',
				'".$_POST['nama_lkp']."',
				'".$_POST['nama_pgl']."',
				'".$_POST['jk']."',
				'".$_POST['tmp_lahir'].", ".$_POST['tgl_lahir']."',
				'".$_POST['agama']."',
				'".$_POST['ctct']."',
				'".$_POST['hobi']."',
				'".$_POST['anak_ke']."',
				'"."Kandung: ".$_POST['jum_saud_kandung'].", Tiri: ".$_POST['jum_saud_tiri'].", Angkat: ".$_POST['jum_saud_angkat']."',
				'".$_POST['bb']." kg"."',
				'".$_POST['tb']." cm"."',
				'".$_POST['goldar']."',
				'".$_POST['alamat'].", RT. ".$_POST['rtrw'].", Kelurahan ".$_POST['kel'].", Kecamatan ".$_POST['kec'].", ".$_POST['kotkab'].", ".$_POST['prop'].", ".$_POST['kodepos']."',
				'".$_POST['notelp']."',
				'".$_POST['email']."',
				'".$_POST['tinggal_dengan'].$hub_saud."',
				'".$_POST['nama_ayah']." (".$_POST['status_ayah'].")"."',
				'".$_POST['tmp_lahir_ayah'].", ".$_POST['tgl_lahir_ayah']."',
				'".$_POST['pekerjaan_ayah']."',
				'".$_POST['pend_terakhir_ayah']."',
				'".$_POST['warganegara_ayah']." / ".$_POST['agama_ayah']."',
				'".$_POST['nohp_ayah']." / ".$_POST['nowa_ayah']."',
				'".$_POST['nama_ibu']." (".$_POST['status_ibu'].")"."',
				'".$_POST['tmp_lahir_ibu'].", ".$_POST['tgl_lahir_ibu']."',
				'".$_POST['pekerjaan_ibu']."',
				'".$_POST['pend_terakhir_ibu']."',
				'".$_POST['warganegara_ibu']." / ".$_POST['agama_ibu']."',
				'".$_POST['nohp_ibu']." / ".$_POST['nowa_ibu']."'
			)");

		if($insert){
			echo '<script>window.location="berhasil.php?id='.$generateNoP.'"</script>';
		}else{
			echo 'Gagal'.mysqli_error($conn);
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



	<!-- bagian box formulir -->
	<section class="box-formulir">

		<div class="box">

			<div class="box-back-home">
				<a class="btn-back-home" href="index.html">Back</a>
			</div>

			<table border="0" class="form-header">
				<tr>
					<td rowspan="3">
						<img class="logo-header" src="img/logo-wkgarut.png">	
					</td>
					<td><h2 class="teks-header1">YAYASAN PRAWITAMA</h2></td>
				</tr>
				<tr>
					<td><h2 class="teks-header2">SEKOLAH MENENGAH KEJURUAN <br> WIKRAMA 1 GARUT</h2></td>
				</tr>
				<tr>
					<td><h2 class="teks-header3">STATUS : TERAKREDITASI  ??? A ??? <br> SK. BADAN AKREDITASI PROVINSI SEKOLAH NO. 02.00/141/BAP-SM/XII/2012</h2></td>
				</tr>
			</table>

			<h2 class="teks-judul">FORMULIR PENDAFTARAN PESERTA DIDIK BARU <br> TAHUN 2021-2022</h2>

		<!-- bagian form -->
		<form action="" method="post">
			
			<table border="0" class="form-header">
				<tr>
					<td>No. Pendaftaran</td>
					<td>:</td>
					<td>
						<input type="text" name="nodaftar" class="input-control" readonly="readonly" placeholder=" diisi panitia" value="">
					</td>
					<td>No. Test</td>
					<td>:</td>
					<td>
						<input type="text" name="notest" class="input-control" readonly="readonly" placeholder="diisi panitia" value="">
					</td>
				</tr>
				<tr>
					<td colspan="6"><hr></td>
				</tr>
			</table>
			<table border="0" class="table-form">
				<tr>
					<td><h2>Jalur Penerimaan</h2></td>
					<td>:</td>
					<td>
						<label for="jp1">
							<input type="radio" name="jp" id="jp1" class="input-control" value="Reguler"> <h2>Reguler</h2> &emsp;/ &nbsp;&nbsp;&nbsp;
						</label>
						<label for="jp2">
							<input type="radio" name="jp" id="jp2" class="input-control" value="Beasiswa"> <h2>Beasiswa</h2>
						</label>
					</td>
				</tr>
			</table>

			

			<h3>I. DATA CALON MURID</h3>

			<table border="0" class="table-form">
				<tr>
					<td colspan="8"><hr></td>
				</tr>
				<tr>
					<td>1. Nama Lengkap</td>
					<td>:</td>
					<td colspan="6">
						<input type="text" name="nama_lkp" class="input-control" value="">
					</td>
				</tr>
				<tr>
					<td>2. Nama Panggilan</td>
					<td>:</td>
					<td colspan="6"><input type="text" name="nama_pgl" class="input-control" value=""></td>
				</tr>
				<tr>
					<td>3. Jenis Kelamin</td>
					<td>:</td>
					<td colspan="6">
						<label for="jk1">
							<input type="radio" name="jk" id="jk1" class="input-control" value="Laki-laki"> Laki-laki &nbsp;&nbsp;&nbsp;
						</label>
						<label for="jk2">
							<input type="radio" name="jk" id="jk2" class="input-control" value="Perempuan"> Perempuan
						</label>												
					</td>
				</tr>
				<tr>
					<td>4. Tempat, tanggal lahir</td>
					<td>:</td>
					<td colspan="6">
						<input type="text" name="tmp_lahir" class="input-control" placeholder="Tempat lahir" value="">
						<input type="date" name="tgl_lahir" class="input-control">
					</td>
				</tr>
				<tr>
					<td>5. Agama</td>
					<td>:</td>
					<td colspan="6">
						<select name="agama" class="input-control">
							<option value="" selected="" disabled="">-- Pilih --</option>
							<option value="Islam">Islam</option>
							<option value="Protestan">Protestan</option>
							<option value="Katolik">Katolik</option>
							<option value="Hindu">Hindu</option>
							<option value="Buddha">Buddha</option>
							<option value="Konghucu">Konghucu</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>6. Cita-cita</td>
					<td>:</td>
					<td colspan="6"><input type="text" name="ctct" class="input-control" value=""></td>
				</tr>
				<tr>
					<td>7. Hobi</td>
					<td>:</td>
					<td colspan="6"><input type="text" name="hobi" class="input-control" value=""></td>
				</tr>
				<tr>
					<td>8. Anak ke</td>
					<td>:</td>
					<td colspan="6"><input type="number" min="1" name="anak_ke" class="input-control" value=""></td>
				</tr>
				<tr>
					<td>9. Jumlah saudara</td>
					<td>:</td>
					<td>&nbsp;Kandung :</td>
					<td><input type="number" min="0" name="jum_saud_kandung" class="input-jumsaud-control" value=""></td>
					<td>Tiri :</td>
					<td><input type="number" min="0" name="jum_saud_tiri" class="input-jumsaud-control" value=""></td>
					<td>Angkat :</td>
					<td><input type="number" min="0" name="jum_saud_angkat" class="input-jumsaud-control" value=""></td>
				</tr>
				<tr>
					<td>10. Berat badan</td>
					<td>:</td>
					<td colspan="6"><input type="number" min="0" name="bb" class="input-control" placeholder="dalam kg" value=""></td>
				</tr>
				<tr>
					<td>11. Tinggi badan</td>
					<td>:</td>
					<td colspan="6"><input type="number" min="0" name="tb" class="input-control" placeholder="dalam cm" value=""></td>
				</tr>
				<tr>
					<td>12. Golongan darah</td>
					<td>:</td>
					<td colspan="6">
						<select name="goldar" class="input-control">
							<option value="" selected="" disabled="">--Pilih--</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="AB">AB</option>
							<option value="O">O</option>
						</select>
					</td>
				</tr>					
			</table>

			<h3>II. KETERANGAN TEMPAT TINGGAL</h3>

			<table border="0" class="table-form">
				<tr>
					<td colspan="6"><hr></td>
				</tr>
				<tr>
					<td>1. Alamat Rumah</td>
					<td>:</td>
					<td>
						<input type="textarea" name="alamat" class="input-control" value="">
					</td>
					<td>RT/RW</td>
					<td>:</td>
					<td><input type="text" name="rtrw" class="input-control2" placeholder=" --- / --- "></td>
				</tr>
				<tr>
					<td>&emsp;&emsp;Kelurahan</td>
					<td>:</td>
					<td colspan="4"><input type="text" name="kel" class="input-control" value=""></td>
				</tr>
				<tr>
					<td>&emsp;&emsp;Kecamatan</td>
					<td>:</td>
					<td colspan="4"><input type="text" name="kec" class="input-control" value=""></td>
				</tr>
				<tr>
					<td>&emsp;&emsp;Kota/Kabupaten</td>
					<td>:</td>
					<td colspan="4"><input type="text" name="kotkab" class="input-control" value=""></td>
				</tr>
				<tr>
					<td>&emsp;&emsp;Propinsi</td>
					<td>:</td>
					<td><input type="text" name="prop" class="input-control" value=""></td>
					<td>Kode Pos</td>
					<td>:</td>
					<td><input type="number" class="input-control2" name="kodepos"></td>
				</tr>
				<tr>
					<td>&emsp;&emsp;No. Telepon Rumah</td>
					<td>:</td>
					<td colspan="4"><input type="text" name="notelp" class="input-control" placeholder="Strip(-) jika tidak ada"	 value=""></td>
				</tr>
				<tr>
					<td>&emsp;&emsp;E-mail</td>
					<td>:</td>
					<td colspan="4"><input type="text" name="email" class="input-control" placeholder="Example@gmail.com" value=""></td>
				</tr>
				<tr>
					<td>2. Tinggal dengan</td>
					<td>:</td>
					<td colspan="4">
						<label for="td1">
							<input type="radio" name="tinggal_dengan" id="td1" class="input-control" value="Orang Tua"> Orang Tua &emsp;&nbsp;&nbsp;
						</label>
						<label for="td2">
							<input type="radio" name="tinggal_dengan" id="td2" class="input-control" value="Asrama"> Asrama &emsp;&nbsp;&nbsp;
						</label>
						<label for="td3">
							<input type="radio" name="tinggal_dengan" id="td3" class="input-control" value="Saudara"> Saudara
						</label>						
						<input type="text" name="hub_saud" class="input-control2" placeholder="..................">&nbsp;*

					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td colspan="4">
						<i>*Jika memilih Saudara, silahkan isi hubangan kekerabatan yang terjalin</i>
					</td>
				</tr>
			</table>

			<h3>IV. DATA ORANG TUA/WALI</h3>
			<h3>A. Ayah</h3>

			<table border="0" class="table-form">
				<tr>
					<td colspan="4"><hr></td>
				</tr>
				<tr>
					<td>1. Nama Ayah</td>
					<td>:</td>
					<td><input type="text" name="nama_ayah" class="input-control" placeholder="Nama ayah" value=""></td>
					<td>
						<select name="status_ayah" class="input-control">
							<option value="" selected="" disabled="">-- Status --</option>
							<option value="Masih Ada">Masih Ada</option>
							<option value="Almarhum">Almarhum</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>2. Tempat, tanggal lahir</td>
					<td>:</td>
					<td>
						<input type="text" name="tmp_lahir_ayah" class="input-control" placeholder="Tempat lahir" value="">
					</td>
					<td>
						<input type="date" name="tgl_lahir_ayah" class="input-control">
					</td>
				</tr>
				<tr>
					<td>3. Pekerjaan</td>
					<td>:</td>
					<td colspan="2">
						<input type="text" name="pekerjaan_ayah" class="input-control" placeholder="Pekerjaan ayah" value="">
					</td>
				</tr>
				<tr>
					<td>4. Pendidikan Terakhir</td>
					<td>:</td>
					<td colspan="2">
						<select name="pend_terakhir_ayah" class="input-control">
							<option value="" selected="" disabled="">-- Pilih --</option>
							<option value="Tidak/Belum Sekolah">1. Tidak/Belum Sekolah</option>
							<option value="Tidak Tamat SD/Sederajat">2. Tidak Tamat SD/Sederajat</option>
							<option value="Tamat SD/Sederajat">3. Tamat SD/Sederajat</option>
							<option value="SLTP/Sederajat">4. SLTP/Sederajat</option>
							<option value="SLTA/Sederjat">5. SLTA/Sederjat</option>
							<option value="Diploma I/II">6. Diploma I/II</option>
							<option value="Akademi/Diploma III/S. Muda">7. Akademi/Diploma III/S. Muda</option>
							<option value="DilpomaIV/Strata I">8. DilpomaIV/Strata I</option>
							<option value="Strata II">9. Strata II</option>
							<option value="Strata III">10. Strata III</option>
						</select>
					</td>					 
  
   
				</tr>
				<tr>
					<td>5. Kewarganegaraan/Agama</td>
					<td>:</td>
					<td>
						<input type="text" name="warganegara_ayah" class="input-control" placeholder="Kewarganegaraan" value=""> &nbsp;/
					</td>
					<td>
						<select name="agama_ayah" class="input-control">
							<option value="" selected="" disabled="">Agama</option>
							<option value="Islam">Islam</option>
							<option value="Protestan">Protestan</option>
							<option value="Katolik">Katolik</option>
							<option value="Hindu">Hindu</option>
							<option value="Buddha">Buddha</option>
							<option value="Konghucu">Konghucu</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>6. No. HP/WA</td>
					<td>:</td>
					<td>
						<input type="text" name="nohp_ayah" class="input-control" placeholder="Strip(-) jika tidak ada" value=""> &nbsp;/
					</td>
					<td>
						<input type="text" name="nowa_ayah" class="input-control" placeholder="Strip(-) jika tidak ada" value="">
					</td>
				</tr>
			</table>

			<h3>B. Ibu</h3>

			<table border="0" class="table-form">
				<tr>
					<td colspan="4"><hr></td>
				</tr>
				<tr>
					<td>1. Nama Ibu</td>
					<td>:</td>
					<td>
						<input type="text" name="nama_ibu" class="input-control" placeholder="Nama ibu" value="">
					</td>
					<td>
						<select name="status_ibu" class="input-control">
							<option value="" selected="" disabled="">-- Status --</option>
							<option value="Masih Ada">Masih Ada</option>
							<option value="Almarhum">Almarhum</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>2. Tempat, tanggal lahir</td>
					<td>:</td>
					<td>
						<input type="text" name="tmp_lahir_ibu" class="input-control" placeholder="Tempat lahir" value="">
					</td>
					<td>
						<input type="date" name="tgl_lahir_ibu" class="input-control">
					</td>
				</tr>
				<tr>
					<td>3. Pekerjaan</td>
					<td>:</td>
					<td colspan="2">
						<input type="text" name="pekerjaan_ibu" class="input-control" placeholder="Pekerjaan ibu" value="">
					</td>
				</tr>
				<tr>
					<td>4. Pendidikan Terakhir</td>
					<td>:</td>
					<td colspan="2">
						<select name="pend_terakhir_ibu" class="input-control">
							<option value="" selected="" disabled="">-- Pilih --</option>
							<option value="Tidak/Belum Sekolah">1. Tidak/Belum Sekolah</option>
							<option value="Tidak Tamat SD/Sederajat">2. Tidak Tamat SD/Sederajat</option>
							<option value="Tamat SD/Sederajat">3. Tamat SD/Sederajat</option>
							<option value="SLTP/Sederajat">4. SLTP/Sederajat</option>
							<option value="SLTA/Sederjat">5. SLTA/Sederjat</option>
							<option value="Diploma I/II">6. Diploma I/II</option>
							<option value="Akademi/Diploma III/S. Muda">7. Akademi/Diploma III/S. Muda</option>
							<option value="DilpomaIV/Strata I">8. DilpomaIV/Strata I</option>
							<option value="Strata II">9. Strata II</option>
							<option value="Strata III">10. Strata III</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>5. Kewarganegaraan/Agama</td>
					<td>:</td>
					<td>
						<input type="text" name="warganegara_ibu" class="input-control" placeholder="Kewarganegaraan" value=""> &nbsp;/
					</td>
					<td>
						<select name="agama_ibu" class="input-control">
							<option value="" selected="" disabled="">Agama</option>
							<option value="Islam">Islam</option>
							<option value="Protestan">Protestan</option>
							<option value="Katolik">Katolik</option>
							<option value="Hindu">Hindu</option>
							<option value="Buddha">Buddha</option>
							<option value="Konghucu">Konghucu</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>6. No. HP/WA</td>
					<td>:</td>
					<td>
						<input type="text" name="nohp_ibu" class="input-control" placeholder="Strip(-) jika tidak ada" value=""> &nbsp;/
					</td>
					<td>
						<input type="text" name="nowa_ibu" class="input-control" placeholder="Strip(-) jika tidak ada" value="">
					</td>
				</tr>
			</table>

			<table border="0" class="table-form-submit">
				<tr>
					<td>
						<h3><i>*Pastikan data sudah terisi dengan benar</i></h3>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
					</td>
				</tr>
			</table>

		</div>

		</form>

	</section>

</body>
</html>