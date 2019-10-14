<?php include 'include/head.php';?>

<?php include 'include/header.php';?>
<?php include 'include/sidebar.php';?>

<?php include 'include/breadcrumb.php'; ?>

<!-- Main content -->
<section class="content">

	<table class="table table-striped">
		<tr>
			<th>No.</th>
			<th>Name</th>
			<th>Gambar</th>
			<th>Created At</th>
			<th>Action</th>
		</tr>
		<?php foreach ($banner->result() as $key => $bn) { ?>
		<tr>
			<td><?=$key + 1 ?></td>
			<td><?=$bn->name ?></td>
			<td style="width: 50%;" ><img src="<?=base_url('gambar/'.$bn->gambar) ?>" style="width: 100%;"></td>
			<td><?=$bn->created_at ?></td>
			<td><a href="<?php echo base_url(); ?>admin/delete/<?php echo $bn->id; ?>"><i class="fa fa-trash" aria-hidden="true" style="border: 1px solid; border-radius: 10px; padding: 8px; color: #fff; background-color: #E74C3C ;"></i></a></td>
		</tr>
	</tr>
	<?php } ?>

</table>

</section>
<!-- /.content -->

<?php include 'include/footer.php';?>
<?php include 'include/foot.php';?>
