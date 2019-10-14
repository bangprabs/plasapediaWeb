<?php include 'include/head.php';?>

<?php include 'include/header.php';?>
<?php include 'include/sidebar.php';?>

<?php include 'include/breadcrumb.php'; ?>

<!-- Main content -->
<section class="content">

	<table class="table table-striped">
		<tr>
			<th>No.</th>
			<th style="width: 80%;">Isi Tenant</th>
			<th>Action</th>
		</tr>
		<?php foreach ($setting->result() as $key => $ite) { ?>
		<tr>
			<td><?=$key + 1 ?></td>
			<td><?=$ite->isi_tenant ?></td>
			<td><a href="<?php echo base_url(); ?>admin/deletepost/<?php echo $ite->id; ?>"><i class="fa fa-trash" aria-hidden="true" style="border: 1px solid; border-radius: 10px; padding: 8px; color: #fff; background-color: #E74C3C ;"></i></a>
			<a href="<?php echo base_url(); ?>admin/edittenant/<?php echo $ite->id; ?>"><i class="fa fa-pencil" aria-hidden="true" style="border: 1px solid; border-radius: 10px; padding: 8px; color: #fff; background-color: #0275D8;"></a></td>
		</tr>
	</tr>
	<?php } ?>

</table>

</section>
<!-- /.content -->

<?php include 'include/footer.php';?>
<?php include 'include/foot.php';?>
