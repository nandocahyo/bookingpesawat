<?php 
include 'koneksi.php';
 ?>

<?php
$ambil=$koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

 <html>
<head>
	<title>Halaman Admin</title>
<link rel="stylesheet" type="text/css" href="asset/style.css">
</head>
<body>
	<nav>
		<ul class="kiri">
		<li><a href="home.php">Tiketin Aja</a></li>
	</ul>
<ul class="kanan">
</ul><div style="clear:both"></div>
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
			<span class="span">Form Edit Data Pelanggan</span>
					
					<form method="POST">
						<input type="hidden" name="nama_pelanggan" value="<?php echo $pecah['nama_pelanggan']; ?>"><br>
						<input type="text" name="alamat_pelanggan" value="<?php echo $pecah['alamat_pelanggan'];?>"><br>
						<input type="text" name="email_pelanggan" value="<?php echo $pecah['email_pelanggan'];?>"><br>
						<input type="text" name="telepon_pelanggan" value="<?php echo $pecah['telepon_pelanggan'];?>"><br>
						
						<input type='submit' name="ubah" value="Edit Data Pelanggan">
					</form>

					<?php
				 if (isset($_POST['ubah']))
					{
					
					$koneksi->query("UPDATE pelanggan SET nama_pelanggan='$_POST[nama_pelanggan]',alamat_pelanggan='$_POST[alamat_pelanggan]',email_pelanggan='$_POST[email_pelanggan]',telepon_pelanggan='$_POST[telepon_pelanggan]' WHERE id_pelanggan='$_GET[id]'");
							
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

