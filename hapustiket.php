<?php 
include 'koneksi.php';
 ?>
<?php 
$ambil = $koneksi->query("SELECT * FROM tiket WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM tiket WHERE id='$_GET[id]'");
{?> 
<script type="text/javascript">
	alert("Data Terhapus");
	window.location.href="tiket.php";
</script>

<?php } ?>
