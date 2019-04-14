<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/ckeditor/contents.css" type="text/css">
    <script type="text/javascript" src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>
    <title>Fuzzy Tahani</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/starter-template.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap-datetimepicker.css">
    <script src="<?php echo base_url()?>assets/js/ckeditor.js"></script>
  <script src="<?php echo base_url()?>assets/js/sample.js"></script>
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/samples.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/moment.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.min.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">KLASIFIKASI PENERIMA BEASISWA PPA - FUZZY TAHANI</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class=""></span>&nbsp;&nbsp;Data <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url('') ?>">Data Mahasiswa</a></li>
              <li><a href="<?php echo site_url('')?>">Daftar Penerima Beasiswa</a></li>
            </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class=""></span>&nbsp;&nbsp;Fuzzifikasi <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url('') ?>">IPK</a></li>
              <li><a href="<?php echo site_url('')?>">Total SKS</a></li>
              <li><a href="<?php echo site_url('')?>">Penghasilan Orang Tua</a></li>
              <li><a href="<?php echo site_url('')?>">Pekerjaan Orang Tua</a></li>
              <li><a href="<?php echo site_url('')?>">Jumlah Tanggunan</a></li>
            </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class=""></span>&nbsp;&nbsp;Materi <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url('') ?>">Algoritma Fuzzy Tahani</a></li>
              
            </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url('admin/c_admin') ?>">Beranda</a></li>
                <li><a href="<?php echo site_url('')?>">Pengaturan</a></li>
              <li><a href="<?php echo site_url('auth/logout')?>">Logout</a></li>
              
            </ul>
            </li>
        </ul>
        </div>
    </nav>
    <br/><br />
    <div class="starter-template">
    </div>
    
