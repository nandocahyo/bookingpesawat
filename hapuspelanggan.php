<?php 
include 'koneksi.php';
 ?>
<?php 
$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM pelanggan WHERE id_pelanggan='$_GET[id]'");
{?> 
<script type="text/javascript">
	alert("Data Pelanggan Terhapus");
	window.location.href="pelanggan.php";
</script>

<?php } ?>
