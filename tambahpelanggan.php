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
		<span class="span">Form Input Data Pelanggan</span>
			<form method="POST">
				<input type="text" name="nama_pelanggan" placeholder="Nama Pelanggan"><br>
				<input type="text" name="alamat_pelanggan" placeholder="Alamat Pelanggan"><br>
				<input type="text" name="email_pelanggan" placeholder="E-mail Pelanggan"><br>
				<input type="text" name="telepon_pelanggan" placeholder="Telepon Pelanggan"><br>
				
				
				<input type="submit" value="Simpan Data" name="simpan">
			</form>

			<?php
			 if (isset($_POST['simpan']))
			{
				
				$koneksi->query("INSERT INTO pelanggan (nama_pelanggan,alamat_pelanggan,email_pelanggan,telepon_pelanggan)
				VALUES('$_POST[nama_pelanggan]','$_POST[alamat_pelanggan]','$_POST[email_pelanggan]','$_POST[telepon_pelanggan]')");
						
				?>
				<script>
					alert("Data Pelanggan Berhasil Disimpan");
					window.location.href='pelanggan.php';

				</script>
				<?php 
			}

	?>
	</div>
</div>
</body>
</html>
