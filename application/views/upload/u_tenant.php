<?php $this->load->view('include/head') ?>
<?php $this->load->view('include/header') ?>
<?php $this->load->view('include/sidebar') ?>
<?php $this->load->view('include/breadcrumb') ?>


<form action="<?php echo base_url("admin/prosesupdate/".$data_setting['id']); ?>" method="post">
	<div class="form-group" style="border-right: 30px;">
		<h2 style="text-align: center;"><label for="isitenant">Isi Tenant</label></h2>
		<div class="container-fluid">
			<textarea class="form-control" rows="20" id="tenant" name="tenant" style="margin-bottom: 20px;"><?php echo $data_setting['isi_tenant'] ?></textarea>
		</div>
		<center><input type="submit" value="Ubah" name="submit" style="margin-bottom: 30px;"></center>
	</div>
</form>




<?php $this->load->view('include/footer') ?>
<?php $this->load->view('include/foot') ?>