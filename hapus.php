<?php
include "koneksi.php";
$kunci=$_GET['id'];
$query=mysql_query("delete from pengunjung where id=".$kunci);
echo "<script>
		alert('Berhasil delete data');
		window.location.assign('halaman_admin.php');
	</script>";
?>