<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/icon.png" type="image/png">
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/styles/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/normalize.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
</head>
	<title>Login Dashboard</title>
	<body onload="hideloader()">
		<div id="loading">
		</div>
		<form action="<?=base_url();?>login/proseslogin" method="post">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="text-center"><img src="<?php echo base_url();?>assets/img/icon.png"><b><span style="color: #009f95; margin-top: 20px; font-family: 'Poiret One', cursive;"> Admin</span></b> <b><span style="color: #009f95; margin-top: 20px; font-family: 'Poiret One', cursive;">Plasapedia</span></b></h3>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<input type="text" class="form-control input-lg" name="username" placeholder="Username"/>
						</div>

						<div class="form-group">
							<input type="password" class="form-control input-lg" name="password" placeholder="Password"/>
						</div>

						<div class="form-group">
							<input type="submit" class="btn btn-block btn-lg btn-primary" value="Login"/>
							<center><h3><?php if(isset($error)) echo "<script>
								alert('Password Salah Harap Periksa Kembali');
								window.location = 'http://magang.novatama.com/cei/login';
							</script>";
							if(isset($logout)) echo "<b><span style='color:cornflowerblue;'>$logout</span></b>"; ?></h3></center>
						</div>
					</div>
				</div>
			</div>
		</form>
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?=base_url() ?>assets/js/load.js"></script>
	</body>
	</html>

