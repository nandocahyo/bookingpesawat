<?php 
include 'koneksi.php';
 ?>

 <?php

		$koneksi->query("INSERT INTO pelanggan JOIN tiket (nama_pelanggan,nama_maskapai,tujuan,harga)
		VALUES('$_POST[nama_pelanggan]','$_POST[nama_maskapai]','$_POST[tujuan]','$_POST[harga]')");
						
				{ ?>
				<script>
					alert("Data Pelanggan Berhasil Disimpan");
					window.location.href='booking.php';

				</script>
				<?php } ?>