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
		<h1>Data Pelanggan</h1>
		<table>
			<a href="tambahpelanggan.php"><input type="submit" value="Tambah Data Pelanggan"></a>
			<tr>
				<th>No</th>
				<th>Nama Pelanggan</th>
				<th>Alamat Pelanggan</th>
				<th>E-mail Pelanggan</th>
				<th>Telepon Pelanggan</th>
				<th>Action</th>
			</tr>
				<?php $nomor=1; ?>
				<?php $ambil = $koneksi->query("SELECT * FROM pelanggan"); ?>
				<?php while ($pecah = $ambil->fetch_assoc()) { ?>
				
			 <tr>
			 	<td><?php echo $nomor; ?></td>
			 	<td><?php echo $pecah['nama_pelanggan']; ?></td>
			 	<td><?php echo $pecah['alamat_pelanggan']; ?></td>
			 	<td><?php echo $pecah['email_pelanggan']; ?></td>
			 	<td><?php echo $pecah['telepon_pelanggan']; ?></td>
			 	<td><a href='ubahpelanggan.php?id=<?php echo $pecah['id_pelanggan'];?>'>Edit</a>
			 		<a href='hapuspelanggan.php?id=<?php echo $pecah['id_pelanggan'];?>'>Hapus</a>
			 	</td>
			 </tr>
			 <?php $nomor++; ?>
			 <?php } ?>

		</table>	
	</div>
</div>
</body>
</html>