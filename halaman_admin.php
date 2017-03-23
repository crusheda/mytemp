<?php
session_start();
if (isset($_SESSION['username'])) 
	{
		include "koneksi.php";
		$query = "SELECT * FROM pengunjung";
		$sql = mysql_query($query, $koneksi);
		$jumlah_baris = mysql_num_rows($sql);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
<link rel="icon" href="foto/home.ico" type="image/x-icon">
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

  <script type="dist/semantic.min.js">$('.autumn.leaf').transition('fade');
  </script>

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
      <a href="halaman_admin.php" class="header item">
         <img src="foto/logo.png" style="margin-right: 5px" class="image">
          <?php echo "Data ".$_SESSION['username'];?><br>
          (Administrator)
      </a>

      <div class="ui simple dropdown item">
        Edit <i class="dropdown icon"></i>
        <div class="menu" style="background-color: lightgray">
          <a href="tambah.html" class="item">Tambah Data</a>
          <a class="item">Update Profile<br><sub>(coming soon)</sub></a>
          <a href="data_sekolah.php" class="item">Data Sekolah</a>         
        </div>
      </div>
      <div class="ui right header" style="color: white;margin-left: 350px;"><h4><?php echo "Jumlah Data : ".$jumlah_baris;?></h4></div>
    </div>
    <a href="logout.php" class="ui right header item">LOGOUT</a>
  </div>

<!-- Tabel Data -->
<br><br>
<table class="ui selectable celled table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Agama</th>
      <th>Umur</th>
      <th>Status</th>
      <th>Username</th>
      <th>Password</th>
      <th>Email</th>
      <th>Hak Akses</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>

  <?php if($jumlah_baris==0): ?>
	<tr><td colspan=3>Tidak ada Pesan</td></tr>
	<?php else: ?>
  <?php while($data = mysql_fetch_object($sql)): ?>
	<tr>	
		<td><?php echo $data->id;?></td>
		<td><?php echo $data->nama;?></td>
		<td><?php echo $data->alamat;?></td>
		<td><?php echo $data->agama;?></td>
		<td><?php echo $data->umur;?></td>
		<td><?php echo $data->status;?></td>
		<td><?php echo $data->username;?></td>
		<td><?php echo $data->password;?></td>
		<td><?php echo $data->email;?></td>
		<td><?php echo $data->hakakses;?></td>
		<td>	
			<center><button class="ui icon button" onclick="window.location.href='hapus.php?id= <?php echo $data->id;?>'">
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
<?php
	}else
		{
			?>
      <script>alert('Login dulu');
      window.location.assign('login.html');
      </script>
      <?php
		}
?>