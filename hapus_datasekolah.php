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

$kunci=$_GET['id'];
$query=mysql_query("delete from datasekolah where id=".$kunci);
echo "<script>
		alert('Berhasil delete data');
		window.location.assign('data_sekolah.php');
	</script>";
?>