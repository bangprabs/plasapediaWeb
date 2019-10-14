<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/styles/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/normalize.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<title>Sign Up Dashboard</title>
<body>
	<center>
		<form action="<?=base_url();?>login/p_daftar" method="post">
			<div class="login">
				<h2>Daftar</h2>
				<fieldset>
					<input type="text" name="username" placeholder="Enter Email">
					<input type="password" name="password" placeholder="Enter Password">
				</fieldset>
				<input type="submit" value="Daftar !" data-toggle="modal" data-target="#myModal" />
				<!-- Modal -->
				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Halo</h4>
							</div>
							<div class="modal-body">
								<p>Terima Kasih Karena Sudah Mendaftar</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	</body>
	</html>
