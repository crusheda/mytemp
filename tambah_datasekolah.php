<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA</title>
	<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
  <link rel="icon" href="foto/home.ico" type="image/x-icon">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="dist/semantic.min.js"></script>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <link rel="stylesheet" type="text/css" href="dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="dist/components/form.css">
  <link rel="stylesheet" type="text/css" href="dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="dist/components/message.css">
  <link rel="stylesheet" type="text/css" href="dist/components/icon.css">

  <script src="dist/components/form.js"></script>
  <script src="dist/components/transition.js"></script>

  <style type="text/css">
    body {
      background-image: url('foto/background.jpg');
      background-size: 100% auto;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.dropdown').dropdown();
      $('.ui.form')
        .form({
          fields: {
            nama: {
              identifier  : 'nama',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Isikan Nama Sekolah Anda'
                }
              ]
            },
            nps: {
              identifier  : 'nps',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Isikan Nomor Pokok Sekolah'
                }
              ]
            },
            bp: {
              identifier  : 'bp',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Isikan BP'
                }
              ]
            },       
            status: {
              identifier  : 'status',
              rules :[
                {
                  type    : 'empty',
                  prompt  : 'Pilih Salah Satu Status'
                }
              ]
            }            
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>
<div class="container">
</div>
<div class="ui aligned center aligned grid" style="margin-top: -100px">
  <div class="column">
    <h2 class="ui teal image header">
    <br><br>
    <br><br>
      <img src="foto/logo.png" class="image">
      <div class="content" style="color: white">
        Tambah Data Sekolah
      </div>
    </h2>
    <form class="ui large form" action="prosestambah_datasekolah.php" method="post" >
      <div class="ui stacked segment" style="opacity: 0.8">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="nama" placeholder="Nama Sekolah">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="home icon"></i>
            <input type="text" name="nps" placeholder="Nomor Pokok Sekolah (NPS)">
          </div>
        </div>
        <div class="ui selection dropdown" style="min-width: 28em; margin-bottom: 14px">
          <input type="hidden" name="bp">
          <i class="dropdown icon"></i>
          <div class="default text">B.P</div>
          <div class="menu">
            <a class="item" >SD</a>
            <a class="item" >SMP</a>
            <a class="item" >SMA</a>
            <a class="item" >SMK</a>            
          </div>
        </div>        
        <div class="ui selection dropdown" style="min-width: 28em">
          <input type="hidden" name="status">
          <i class="dropdown icon"></i>
          <div class="default text">Status</div>
          <div class="menu">
            <div class="item">Negeri</div>
            <div class="item">Swasta</div>
          </div>
        </div>
        <br>
        <br>

        <div class="ui fluid large teal submit button" style="background-color: #697192">
          <a style="color: white">Tambah Data</a>
        </div>
          <br>
        <button class="ui button" style="background-color: #439986" >
          <a style="color: white" href="data_sekolah.php">Kembali</a>
        </button>
      </div>
      <div class="ui error message"></div>
    </form>
  </div>
</div>
</body>
</html>