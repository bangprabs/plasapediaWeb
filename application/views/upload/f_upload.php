<?php $this->load->view('include/head') ?>

<?php $this->load->view('include/header') ?>
<?php $this->load->view('include/sidebar') ?>

<?php $this->load->view('include/breadcrumb') ?>

<form action="<?php echo base_url("admin/simpangambar"); ?>" method="post" enctype="multipart/form-data">
	<h2 style="text-align: center; margin-top: 30px;">Select image to upload:</h2>
		<input type="text" name="nama" placeholder="Title" style="margin-left: 30px; margin-bottom: 20px;">
		<input type="image" name="gambar" id="gambar" style="margin-left: 30px; margin-bottom: 20px;">
		<input type="date" name="created_at" style="margin-left: 30px; margin-bottom: 20px;">
		<input type="submit" value="Upload Image" name="submit">
</form>

<?php $this->load->view('include/footer') ?>
<?php $this->load->view('include/foot') ?>




