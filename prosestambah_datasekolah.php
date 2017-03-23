<?php
  $host   = "localhost"; // nama server
  $userdb = "root"; // user database
  $passdb = ""; //password database
  $namadb = "datasekolah"; // nama database

  // koneksi ke MySQL
  $konek = mysql_connect($host, $userdb, $passdb);
  if(!$konek) die("Gagal dalam Koneksi ke MySQL");
  else {
    // memilih database
    mysql_select_db($namadb, $konek)
    
    //jika database tidak ditemukan
    or die("Database tidak ditemukan");
  }
    $query = "SELECT * FROM pmd";
    $sql = mysql_query($query, $konek);
    $jumlah_baris = mysql_num_rows($sql);

	$nama=$_POST['nama'];
	$nps=$_POST['nps'];
	$bp=$_POST['bp'];
	$status=$_POST['status'];
	
	$query=mysql_query("insert into pmd (nama,nps,bp,status) 
		values('$nama','$nps','$bp','$status')");
	echo "<script>
			alert('Berhasil menambahkan data sekolah');
			window.location.assign('data_sekolah.php');
		</script>";
?>