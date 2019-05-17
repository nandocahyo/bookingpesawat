<?php 
include 'koneksi.php';
 ?>

<?php
$ambil=$koneksi->query("SELECT * FROM tiket WHERE id='$_GET[id]'");
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
			<span class="span">Form Edit Data Tiket</span>
					
					<form method="POST">
						<input type="hidden" name="nama_maskapai" value="<?php echo $pecah['nama_maskapai']; ?>"><br>
						<input type="text" name="kelas_tiket" value="<?php echo $pecah['kelas_tiket'];?>"><br>
						<input type="text" name="tujuan" value="<?php echo $pecah['tujuan'];?>"><br>
						<input type="text" name="harga" value="<?php echo $pecah['harga'];?>"><br>
						
						<input type='submit' name="edit" value="Edit Data Tiket">
					</form>

					<?php
				 if (isset($_POST['edit']))
					{
					
					$koneksi->query("UPDATE tiket SET nama_maskapai='$_POST[nama_maskapai]',kelas_tiket='$_POST[kelas_tiket]',tujuan='$_POST[tujuan]',harga='$_POST[harga]' WHERE id='$_GET[id]'");
							
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

