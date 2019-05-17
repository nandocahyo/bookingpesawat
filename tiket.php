<?php 
include 'koneksi.php';
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
<style type="text/css">
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}
</style>
<div class="main">
	<div class="isimain">
		<h1>Data Tiket</h1>
		<table>
			<a href="tambahtiket.php"><input type="submit" value="Tambah Data Tiket"></a>
			<tr>
				<th>No</th>
				<th>Nama Maskapai</th>
				<th>Kelas Tiket</th>
				<th>Tujuan</th>
				<th>Harga</th>
				<th>Action</th>
			</tr>
				<?php $nomor=1; ?>
				<?php $ambil = $koneksi->query("SELECT * FROM tiket"); ?>
				<?php while ($pecah = $ambil->fetch_assoc()) { ?>
				
			 <tr>
			 	<td><?php echo $nomor; ?></td>
			 	<td><?php echo $pecah['nama_maskapai']; ?></td>
			 	<td><?php echo $pecah['kelas_tiket']; ?></td>
			 	<td><?php echo $pecah['tujuan']; ?></td>
			 	<td><?php echo number_format($pecah['harga']); ?></td>
			 	<td><a href='ubahtiket.php?id=<?php echo $pecah['id'];?>'>Edit</a>
			 		<a href='hapustiket.php?id=<?php echo $pecah['id'];?>'>Hapus</a>
			 	</td>
			 </tr>
			 <?php $nomor++; ?>
			 <?php } ?>

		</table>	
	</div>
</div>
</body>
</html>