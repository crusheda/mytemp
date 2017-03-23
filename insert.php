<?php
include "koneksi.php";
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$agama=$_POST['agama'];
$umur=$_POST['umur'];
$status=$_POST['status'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$hakakses=$_POST['hakakses'];
$query=mysql_query("insert into pengunjung (nama,alamat,agama,umur,status,username,password,email,hakakses) 
	values('$nama','$alamat','$agama','$umur','$status','$username',md5('$password'),'$email','$hakakses')");
echo "<script>
		alert('Berhasil menambahkan data');
		window.location.assign('login.html');
	</script>";
?>