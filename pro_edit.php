<?php 
include 'koneksi.php'; ?>

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


 ?>