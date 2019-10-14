<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/styles/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/normalize.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
</head>
<title>Login with CI</title>
<center>
	<form action="<?=base_url();?>login/proseslogin" method="post">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="text-center">Halo !</h1>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="Username"/>
				</div>

				<div class="form-group">
					<input type="password" class="form-control input-lg" placeholder="Password"/>
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-block btn-lg btn-primary" value="Login"/>
					<?php if(isset($error)) echo "<b><span style='color:white;'>$error</span></b>";
					if(isset($logout)) echo "<b><span style='color:white;'>$logout</span></b>"; ?>
				</div>
			</div>
		</div>
	</div>
</form>
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>


