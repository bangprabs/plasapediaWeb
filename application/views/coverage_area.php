<!DOCTYPE html>
<html>
<head>
	<title>Coverage Area</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/icon.png" type="image/png">
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/styles/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<style type="text/css">
		div[class*="list"]{
			display: none;
		}
	</style>
	<body onload="hideloader()">
		<div id="loading">
		</div>
		<nav class="navbar navbar-default navbar-fixed-top animated flipInX">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="logo" href="<?php echo base_url('index.php/dashboard');?>""><img src="<?php echo base_url();?>assets/img/yogs.gif"></a>
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
		<div class="col-md-12 warna">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="container-area animated rotateInDownRight"><strong>Coverage Area</strong></p>
						<p class="animated zoomInDown" style="margin-top: -10px; padding:50px; text-align: center; font-size: 20px;">Area yang tercover Plasapedia yaitu radius 1 Kilometer dari lokasi Mall atau pusat perbelanjaan yang terdaftar. Jangan takut ketinggalan promo, kan ada Plasapedia!</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<img style="width: 100%; height: 100%; margin-bottom: 40px;" src="<?php echo base_url();?>assets/img/area.gif">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p style="color: #20a1ae; text-align: left; font-size: 25px;"><strong>Data mall yang Terdaftar</strong></p>
						<p style="margin-bottom:10px; font-size: 40x;"><strong>Pilih Kota</strong></p>
						<select style="border-radius:20px;  width: 200px; margin-bottom: 40px;" name="sebab" class="form-control" id="myselect">
							<option value="jakarta" data-target="#list">Jakarta</option>
							<option value="bandung" data-target="#list2">Bandung</option>
							<option value="lampung" data-target="#list3">Lampung</option>
						</select>
						<div class="col-md-4 small listjkt">
							<ul class ="list" style="list-style-type:none; text-shadow: 10px;">
								<li>CityWalk Sudirman</li>
								<li>Gajah Mada Plaza</li>
								<li>ITC Cempaka Mas</li>
								<li>Menteng Plaza</li>
								<li>Plaza Indonesia</li>
								<li>Mall of Indonesia</li>
								<li>Emporium Pluit</li>
								<li>La Piazza</li>
								<li>Mangga Dua Square</li>
								<li>Koja Trade Mall</li>
								<li>WTC Mangga Dua</li>
								<li>Sports Mall Kelapa Gading</li>
								<li>Pluit Village</li>
								<li>Pluit Junction</li>
								<li>Pasar Pagi Mangga Dua</li>
								<li>Mall Sunter</li>
							</ul>
						</div>
						<div class="col-md-4 small listjkt">
							<ul class ="list" style="list-style-type:none;">
								<li>EX Plaza Indonesia</li>
								<li>Sarinah Plaza</li>
								<li>Grand Indonesia Shopping Town</li>
								<li>Plaza Atrium</li>
								<li>Lifestyle x'nter</li>
								<li>WTC Mangga Dua</li>
								<li>Pluit Junction</li>
								<li>Mall Artha Gading</li>
								<li>Sports Mall Kelapa Gading</li>
								<li>Kelapa Gading Trade Center</li>
								<li>Baywalk Pluit</li>
								<li>Emporium Pluit</li>
								<li>ITC Mangga Dua</li>
								<li>Kelapa Gading Trade Center</li>
								<li>Kramat Jati Indah Plaza</li>
							</ul>
						</div>
						<div class="col-md-4 small listjkt">
							<ul class ="list" style="list-style-type:none;">
								<li>Senayan City</li>
								<li>Plaza Senayan</li>
								<li>Mangga Dua Pasar Pagi</li>
								<li>Cipinang Indah Mall</li>
								<li>Kramat Jati Indah Plaza</li>
								<li>Sunter Mall</li>
								<li>Pluit Village</li>
								<li>Baywalk Pluit</li>
								<li>PIK Avenue Mall</li>
								<li>Pasar Pagi Mangga Dua</li>
								<li>Setiabudi One</li>
								<li>Pondok Indah Mall I & II</li>
								<li>Plaza Semanggi</li>
								<li>Pacific Place</li>
								<li>Cilandak Town Square</li>
							</ul>
						</div>
						<div class="col-md-4 small listbdg">
							<ul class ="list2" style="list-style-type:none;">
								<li>TRANS STUDIO MALL</li>
								<li>PARIS VAN JAVA MALL</li>
								<li>Cihampelas Walk ( Ciwalk )</li>
								<li>Festival Citylink Bandung</li>
								<li>Dago Plaza Mall</li>
							</ul>
						</div>
						<div class="col-md-4 small listbdg">
							<ul class ="list2" style="list-style-type:none;">
								<li>Braga City Walk</li>
								<li>Istana Plaza Mall</li>
								<li>YOGYA Riau Junction</li>
								<li>Yogya Plaza Cimahi</li>
								<li>YOGYA Dept Store</li>
							</ul>
						</div>
						<div class="col-md-4 small listbdg">
							<ul class ="list2" style="list-style-type:none;">
								<li>Plaza Pajajaran</li>
								<li>Yogya Koneksitas</li>
								<li>Sunda Mall</li>
								<li>Stock Centre</li>
								<li>Setrasari Mall</li>
							</ul>
						</div>
						<div class="col-md-4 small listlamp">
							<ul class ="list3" style="list-style-type:none;">
								<li>Mal Boemi Kedaton</li>
								<li>Mal Lampung</li>
								<li>Central Plaza</li>
								<li>Mal Kartini</li>
								<li>Chandra Departement Store Lampung</li>
								<li>Bandar Jaya Plaza</li>
								<li>Chandra Superstore Bandar Jaya</li>
								<li>Chandra Superstore Metro</li>
								<li>Metro Mega Mal</li>
							</ul>
						</div>
						<div class="col-md-4 small listlamp">
							<ul class ="list3" style="list-style-type:none;">
								<li>Simpur Center</li>
								<li>Plaza Lotus</li>
								<li>Simpur Center</li>
								<li>Bambu Kuning Square</li>
								<li>Bambu Kuning Trade Center</li>
								<li>Chandra Superstore Kota Agung</li>
								<li>Plaza Tanggamus</li>
								<li>Chandra Superstore Pringsewu</li>
							</ul>
						</div>
						<div class="col-md-4 small listlamp">
							<ul class ="list3" style="list-style-type:none;">
								<li>Lampung Super Mall</li>
								<li>Gelael Swalayan</li>
								<li>Giant Ekspres Labuhan Ratu</li>
								<li>Giant Hypermarket Antasari</li>
								<li>Giant Ekspres Kemiling</li>
								<li>Giant Ekspres Kedamaian</li>
								<li>Sogo Departement store Lampung</li>
								<li>Plaza Millennium Natar</li>
							</ul>
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
					$("div[class*='listjkt']").css('display','block');
					$("#myselect").on('change', function(){
						var selectedVal = $(this).find('option:selected').val();
						if(selectedVal==='jakarta'){
							$("div[class*=listjkt]").css('display','block');
							$("div[class*=listbdg]").css('display','none');
							$("div[class*=listlamp]").css('display','none');
						}else if(selectedVal === 'bandung'){
							$("div[class*=listjkt]").css('display','none');
							$("div[class*=listbdg]").css('display','block');
							$("div[class*=listlamp]").css('display','none');
						}else {
							$("div[class*=listjkt]").css('display','none');
							$("div[class*=listbdg]").css('display','none');
							$("div[class*=listlamp]").css('display','block');
						}
					})
				});
			</script>
		</body>
		</html>