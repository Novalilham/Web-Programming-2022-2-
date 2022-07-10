<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEO</title>
    <link rel="shortcut icon" href="<?=base_url()?>dist/img/geo.png" type="image/png">
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url()?>plugins/fontawesome-free/css/all.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url()?>dist/css/adminlte.min.css">
    <link href="<?=base_url()?>assets/src/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/src/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        section{
            border-style: solid;
            margin: 2%;
        }
        h4{
            margin-left: 2%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-toggleable-lg navbar-fixed-top navbar-light bg-dark">
				 
				 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				   <span class="navbar-toggler-icon"></span>
				 </button>
				 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				   <ul class="navbar-nav">
					 <li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url('home') ?>" style="color: white;">Home <span class="sr-only">(current)</span></a>
					 </li>
					
				   </ul>
				   <ul class="navbar-nav ml-md-auto">
				   <li class="nav-item">
					<form class="form-inline">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<i class="fa fa-search"></i>
					</form>
                    </li>
				   </ul>
				 </div>
			   </nav>
    <section>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="media">
            <img class="mr-3" alt="Bootstrap Media Preview" style="margin-top:2%; margin-bottom:2%;" src="<?=base_url()?>assets/images/poster.webp" width="250px" height="300px" />
				<div class="media-body" style="margin-top:2%;">
                <h5 class="mt-0" >
						 <a href="<?php echo base_url('home/detailevent') ?>" style="color:black;">Bali Spirit Festival</a>
					</h5>
					<i class="fas fa-bookmark"style="margin-right:2%;"></i>Festival
					<br>
					<i class="fas fa-calendar"style="margin-right:2%;"></i>19-22 Mei 2022 
					<br>
					<i class="fas fa-clock"style="margin-right:2%;"></i> 09.00 - Selesai
					<br>
					<i class="fas fa-map"style="margin-right:2%;"></i>Puri Padi, Ubud - Bali
				</div>
			</div>
		</div>
	</div>
    </section>
    <section  style="width:50%;">
    <h4>Daftar</h4>
    <?php echo form_open('daftar/daftar') ?>
        <div style="margin-left:5%; margin-top:2%; margin-right:2%;">
     <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Kategori Peserta</label> 
    <div class="col-8">
      <select id="kategori_peserta_id" name="kategori_peserta_id" class="custom-select">
        <option value="nama">Pelajar</option>
        <option value="nama">Mahasiswa</option>
        <option value="nama">Karyawan Swasta</option>
        <option value="nama">Guru/Dosen</option>
        <option value="nama">Umum</option>
        <option value="nama">ASN</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label" >Alasan Daftar</label> 
    <div class="col-8">
      <textarea id="alasan" name="alasan" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div> 
  <div class="form-group row"> 
    <div class="col-8">
      <input id="users_id" name="users_id" type="hidden" class="form-control">
      <input id="tanggal_daftar" name="tanggal_daftar" type="hidden" value="<?php echo date("Y-m-d H:i:s") ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-8">
      <input id="kegiatan_id" name="kegiatan_id" type="hidden" class="form-control">
    </div>
  </div> 
  <div class="form-group row"> 
    <div class="col-8">
      <input id="nosertifikat" name="nosertifikat" type="hidden" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </div>
  <?php echo form_close() ?>
</div>
</section>
</body>
<script src="<?=base_url()?>assets/src/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/src/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/src/js/scripts.js"></script>
</html>