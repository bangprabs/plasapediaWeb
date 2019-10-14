<!DOCTYPE html>
<html>
<head>
	<title>Kontak Kami</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/icon.png" type="image/png">
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/styles/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace|Roboto" rel="stylesheet">
</head>
<body onload="hideloader()">
	<div id="loading">
	</div>
	<nav class="navbar navbar-default navbar-fixed-top  flipInX">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="logo" href=<?php echo base_url('dashboard/'); ?>><img src="<?php echo base_url();?>assets/img/yogs.gif"></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class=" wow  fadeInLeft data-wow-duration='0,1s' data-wow-delay='0,1s'"><a style="" href="<?php echo base_url('dashboard/content');?>"><i class="fa fa-question-circle" aria-hidden="true"><strong style="font-family: 'Quicksand', sans-serif;"> Apa itu Plasapedia?</strong></i></a></li>
					<li class=" wow  fadeInRight data-wow-duration='0,1s' data-wow-delay='0,1s'"><a style="" href="<?php echo base_url('dashboard/coverage');?>"><i class="fa fa-map" aria-hidden="true"><strong style="font-family: 'Quicksand', sans-serif"> Coverage Area</strong></i></a></li>
					<li class=" wow  fadeInLeft data-wow-duration='0,1s' data-wow-delay='0,1s'"><a style="" href="<?php echo base_url('dashboard/tenant');?>"><i class="fa fa-compress" aria-hidden="true"><strong style="font-family: 'Quicksand', sans-serif"> Menjadi Tenant</strong></i></a></li>
					<li class=" wow  fadeInRight data-wow-duration='0,1s' data-wow-delay='0,1s'"><a style="" href="<?php echo base_url('dashboard/contact_us');?>"><i class="fa fa-book" aria-hidden="true"><strong style="font-family: 'Quicksand', sans-serif"> Kontak Kami</strong></i></a></li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<br>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="kon"><strong>"Kontak Kami"</strong></p>
				<p><strong>Silahkan isi form dibawah ini :</strong></p>
				<p class="frm"><strong>Form Kontak kami</strong></p>
				<div class="col-md-6">
					<div class="login-box1">
						<form role="form" method="POST" action="<?php echo site_url('dashboard/tambah_aksi');?> ">
							<div class="form-group wow animated fadeInRight data-wow-duration='0,1s' data-wow-delay='0,1s'">
								<label class="text-center">Nama</label>
								<input type="text" value="" style="border-radius: 20px;" name="nama" class="form-control" placeholder="">
							</div>
							<div class="form-group wow animated fadeInLeft data-wow-duration='0,1s' data-wow-delay='0,1s'">
								<label class="text-center">Email</label>
								<div class="inner-addon right-addon">
									<input type="text" name="email" style="border-radius: 20px;" class="form-control" placeholder="">
								</div>
							</div>
							<div class="wow animated fadeInRight data-wow-duration='0,1s' data-wow-delay='0,1s'">
								<label class="text-center">Subject</label>
								<select name="subjek" style="border-radius: 20px;" class="form-control">
									<option value="Pemberitahuan">Pemberitahuan</option>
									<option value="Undangan">Undangan</option>
									<option value="Lainnya">Lainnya...</option>
								</select>
							</div>
							<br>
							<div class="form-group wow animated fadeInLeft data-wow-duration='0,1s' data-wow-delay='0,1s'">
								<header><strong>Kirim Pesan</strong></header>
								<textarea rows="4" name="pesan" cols="50" style="border-radius: 20px; height: 200px; width: 100%;">
								</textarea>
							</div>
							<br>	
							<div class="col-md-3">			
								<button class="wow animated bounce data-wow-duration='0,1s' data-wow-delay='0,1s'" data-toggle="modal" data-target="#myModal" type="submit" style="border: 1px solid; padding: 7px; margin-bottom: 40px; background-color: #009f95; border-radius: 20px; color: #fff; width: 150px;">Kirim Pesan</button>
								<div class="modal fade" id="myModal" role="dialog">
									<div class="modal-dialog modal-md">
										<div style="background-color: #009f95; " class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 style="text-align: center;" class="modal-title">Halo!!!</h4>
											</div>
											<div class="modal-body">
												<p style="text-align: center;">Terima Kasih Data Yang Anda Masukkan Sudah Kami Terima</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 ">
						<p style="text-align:center; color:  #009f95; font-size: 30px;"><strong>Our Address</strong></p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8089508433695!2d106.91653771476952!3d-6.288824495448335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d517ae3e4a3%3A0x633bb59d35fc33a7!2sNovatama+Infomedia!5e0!3m2!1sid!2sid!4v1477368915647" width="100%" height="400" frameborder="0" style="border-radius: 20px; margin-bottom: 40px;" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<footer><div class="container  slideInDown">
	<center><div class="row">
		<div style="margin-top: 50px;" class="col-md-3 bawah">
			<center><a href="http://magang.novatama.com/cei/index.php/dashboard"><img src="<?php echo base_url();?>assets/img/icon.png" style="margin-top: -10px;"></a><span style=""><strong style="color: #009f95; font-size: 24px; margin-top: 30px;">  PLASA</strong></span><span style="color: #009f95; font-size: 24px;">PEDIA</span></a></center>
		</div>
		<div class="col-md-3 bawah">
			<div style="color:white;">
				<h5><strong style="">KONTAK</h5></strong>
				<div class="">
					<h6>Komplek Ardhini 1, Jalan lilium 2 No. 47, </h6>
					<h6>Jatirahayu, Pondok Melati - </h6>
					<h6>Bekasi 17413</h6>
					<h6>Phone: (021) 84999886</h6>
					<h6 style="color: #fff;">Email:  <a style="color: #fff;" href="email/">info@novatama.co.id</a></h6>
				</div>
			</div>
		</div>
		<div class="col-md-3 bawah">
			<div style="color:white;">
				<h5><strong>MENU</h5></strong>
				<div class="">
					<h6><a style="color: #fff;" href="<?php echo base_url('dashboard/content');?>">Apa itu Plasapedia?</a></a></h6>
					<h6><a style="color: #fff;" href="<?php echo base_url('dashboard/coverage');?>">Coverage Area</a></h6>
					<h6><a style="color: #fff;" href="<?php echo base_url('dashboard/tenant');?>">Menjadi Tenant</a></h6>
					<h6><a style="color: #fff;" href="<?php echo base_url('dashboard/contact_us');?>">Kontak Kami</a></h6>
				</div>
			</div>
		</div>
		<div class="col-md-3 bawah">
			<div style="color:white;">
				<div class="">
					<center><h5 style="color: #fff;"><strong>FIND ME ON</strong></h5></center>
					<center><div class="container-icon" style="display: table-row;">
						<h1 style="display: table-cell;"><a href="https://twitter.com/login?lang=id" target="_blank"><i class="fa fa-twitter" aria-hidden="true" style="padding: 10px; margin-right: 10px;"></i></a></h2>
							<h1 style="display: table-cell;"><a href="https://www.facebook.com/?stype=lo&jlou=Afc_HpKfE39do7VHKTPAd4H9z2Kt1ZKljO8Yg9xvxzLHJ1Qc8DqZs_trdrwxlHJRLG1J-OCgAjF8Z8UDxTB2ruKDB_AylsFMCHXi3XnkUlH-FQ&smuh=58404&lh=Ac8yLzUB-Dbgl2GO" target="_blank"><i class="fa fa-facebook" aria-hidden="true" style="padding: 10px; margin-right: 10px; color:#33589E; "></i></a></h1>
							<h1 style="display: table-cell;"><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="padding: 10px; margin-right: 10px; color: #6A453C;"></i></a></h1>
							<h1 style="display: table-cell;"><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true" style="padding: 10px; margin-right: 10px; color: #DC4A38;"></i></a></1>
							</div></center>
							<br>
							<center>Powered By &copy <a href="http://novatama.co.id/" target="_blank"><strong style="color: brown;">Novatama Infomedia</strong> </a></center>
						</div>
					</div>
				</div>
			</div>
		</center>
	</footer>	
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
	<script src="<?=base_url() ?>assets/js/load.js"></script>
	<script>
		$(function(){
			new WOW().init();
		});
	</script>
</body>
</html>  


