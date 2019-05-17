<?php 
include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<link rel="stylesheet" type="text/css" href="asset/style.css">
<body>
<nav>
	<ul class="kiri">
		<li><a href="">Tiketin Aja</a></li>
	</ul>
	<ul class="kanan">
		<li><a href="">Halo Admin</a></li>
		<div style="clear:both"></div>
	</ul>
</nav>
<div class="sidebar">
		<ul>
			<li><a href="home.php">Dashboard</a></li>
			<li><a href="tiket.php">Data Tiket</a></li>
			<li><a href="pelanggan.php">Data Pelanggan</a></li>
		</ul>
	</div>
<div class="main">
	<div class="isimain">
		<span class="span">Form Input Data Tiket</span>
			<form method="POST">
				<input type="text" name="nama_maskapai" placeholder="Masukan Nama Maskapai"><br>
				<input type="text" name="kelas_tiket" placeholder="Kelas Tiket"><br>
				<input type="text" name="tujuan" placeholder="Masukkan Tujuan"><br>
				<input type="text" name="harga" placeholder="Masukkan Harga"><br>
				
				
				<input type="submit" value="Simpan Data" name="save">
			</form>

			<?php
			 if (isset($_POST['save']))
			{
				
				$koneksi->query("INSERT INTO tiket (nama_maskapai,kelas_tiket,tujuan,harga)
				VALUES('$_POST[nama_maskapai]','$_POST[kelas_tiket]','$_POST[tujuan]','$_POST[harga]')");
						
				?>
				<script>
					alert("Data Tiket Berhasil Disimpan");
					window.location.href='tiket.php';

				</script>
				<?php 
			}

	?>
	</div>
</div>
</body>
</html>
