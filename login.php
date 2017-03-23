<?php 
session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=md5($_POST['password']);
$sql=mysql_query("select * from pengunjung where username='$username' and password='$password'");
$data=mysql_fetch_object($sql);
if ($data) { 
	# code...
	$_SESSION['username']=$username;
	if ($data->hakakses=='pengunjung') {
		# code...
		echo "<script> 
			alert('Anda Berhasil login Sebagai Pengunjung');
			window.location.assign('halaman_pengunjung.php');
			</script>";
	}
	elseif ($data->hakakses=='administrator') {
		# code...
		echo "<script> 
			alert('Anda Berhasil login Sebagai Administrator');
			window.location.assign('halaman_admin.php');
			</script>";
	}			
	?> 
	<?php
}
else{
	?>
	<?php
	echo "<script>
		alert('Anda belum terdaftar');
		window.location.assign('login.html');
	</script>";
}?>