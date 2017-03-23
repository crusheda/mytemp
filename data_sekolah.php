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
?>
  <!DOCTYPE html>
  <html>
  <head>
  <link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
  <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous">

    </script>
  <script src="dist/semantic.min.js"></script>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Admin</title>

    <link rel="stylesheet" type="text/css" href="dist/components/reset.css">
    <link rel="stylesheet" type="text/css" href="dist/components/site.css">

    <link rel="stylesheet" type="text/css" href="dist/components/container.css">
    <link rel="stylesheet" type="text/css" href="dist/components/grid.css">
    <link rel="stylesheet" type="text/css" href="dist/components/header.css">
    <link rel="stylesheet" type="text/css" href="dist/components/image.css">
    <link rel="stylesheet" type="text/css" href="dist/components/menu.css">

    <link rel="stylesheet" type="text/css" href="dist/components/divider.css">
    <link rel="stylesheet" type="text/css" href="dist/components/list.css">
    <link rel="stylesheet" type="text/css" href="dist/components/segment.css">
    <link rel="stylesheet" type="text/css" href="dist/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="dist/components/icon.css">

    <style type="text/css">
    body {
      background-color: #FFFFFF;
    }
    .ui.menu .item img.logo {
      margin-right: 1.5em;
    }
    .main.container {
      margin-top: 7em;
    }
    .wireframe {
      margin-top: 2em;
    }
    .ui.footer.segment {
      margin: 5em 0em 0em;
      padding: 5em 0em;
    }
    </style>

  </head>
  <body>
    <div class="ui fixed inverted menu">
      <div class="ui container">
        <a href="data_sekolah.php" class="header item">
           <img src="foto/logo.png" style="margin-right: 5px" class="image">
            Data Sekolah<br>
        </a>
        <a href="tambah_datasekolah.php" class="item">Tambah Data</a>
        <div class="ui right header" style="color: white;margin-left: 350px;"><h4><?php echo "Jumlah Data : ".$jumlah_baris;?></h4></div>
      </div>
      <a href="halaman_admin.php" class="ui right header item">KEMBALI</a>
    </div>

  <!-- Tabel Data -->
  <br><br>
  <table class="ui selectable celled table">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Nps</th>
        <th>Bp</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>

    <?php if($jumlah_baris==0): ?>
    <tr><td colspan=3>Tidak ada Pesan</td></tr>
    <?php else: ?>
    <?php while($data = mysql_fetch_object($sql)): ?>
    <tr>  
      <td><?php echo $data->nama;?></td>
      <td><?php echo $data->nps;?></td>
      <td><?php echo $data->bp;?></td>
      <td><?php echo $data->status;?></td>
      <td>  
        <center><button class="ui icon button" onclick="window.location.href='hapus_datasekolah.php?id= <?php echo $data->id;?>'">
          <i class="trash icon" ></i>
        </button></center>
      </td> 
    </tr>
      <?php endwhile;?>
      <?php endif; ?>
    </tbody>
  </table>
  </body>
  </html>
