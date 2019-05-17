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
			<li><a href="booking.php">Data Booking</a></li>
		</ul>
	</div>

<style type="text/css">
td,th{border:1px solid #ccc;padding:10px;}
table{border-collapse:collapse;}

</style>
<div class="main">
	<div class="isimain">
		<h1>Data Pelanggan</h1>

		<form method="POST">
		<select><?php 
		$ambil = mysqli_query($koneksi,"SELECT * FROM pelanggan");
		while ($pecah=mysqli_fetch_array($ambil))
		{
		?>	
			<option><?php echo $pecah["nama_pelanggan"]; ?></option>

		<?php
		}

		?>
		</select>
		<br>
	


		
		<select><?php 
		$ambil = mysqli_query($koneksi,"SELECT * FROM tiket");
		while ($pecah=mysqli_fetch_array($ambil))
		{
		?>	
			<option><?php echo $pecah["nama_maskapai"]; ?></option>

		<?php
		}
		?>
		</select>

		<select><?php 
		$ambil = mysqli_query($koneksi,"SELECT * FROM tiket");
		while ($pecah=mysqli_fetch_array($ambil))
		{
		?>	
			<option><?php echo $pecah["tujuan"]; ?></option>

		<?php
		}
		?>
		</select>

		<select><?php 
		$ambil = mysqli_query($koneksi,"SELECT * FROM tiket");
		while ($pecah=mysqli_fetch_array($ambil))
		{
		?>	
			<option><?php echo $pecah["harga"]; ?></option>

		<?php
		}
		?>
		</select>
		</form>
		<a href="tambahbooking.php"><input type="submit" value="Tambah Data Booking"></a>



		<table>
			<tr>
				<th>No</th>
				<th>Nama Pelanggan</th>
				<th>Maskapai</th>
				<th>Harga</th>
				<th>Tujuan</th>
				<th>Action</th>
			</tr>
				<?php $nomor=1; ?>
				<?php $ambil = $koneksi->query("SELECT * FROM tiket JOIN pelanggan ON pelanggan.id_pelanggan=tiket.id WHERE pelanggan.nama_pelanggan");
				$pecah = $ambil->fetch_assoc() ?>
				
			 <tr>
			 	<td><?php echo $nomor; ?></td>
			 	<td><?php echo $pecah['nama_pelanggan']; ?></td>
			 	<td><?php echo $pecah['nama_maskapai']; ?></td>
			 	<td><?php echo $pecah['tujuan']; ?></td>
			 	<td><?php echo number_format($pecah['harga']); ?></td>
			 	<td><a href='ubahtiket.php?id=<?php echo $pecah['id'];?>'>Edit</a>
			 		<a href='hapustiket.php?id=<?php echo $pecah['id'];?>'>Hapus</a>
			 	</td>
			 </tr>
			 <?php $nomor++; ?>
			

		</table>
		

		



	
	</div>
</div>
</body>
</html>