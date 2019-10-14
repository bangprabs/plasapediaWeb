<?php include 'include/head.php';?>

<?php include 'include/header.php';?>
<?php include 'include/sidebar.php';?>

<?php include 'include/breadcrumb.php'; ?>

<!-- Main content -->
<style type="text/css">
	#pagination a, #pagination strong {
		background: #3C8DBC;
		padding: 4px 7px;
		text-decoration: none;
		border: 1px solid #cac9c9;
		color: #292929;
		font-size: 13px;
		margin: 5px;
	}
</style>
<section class="content">
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>No. </th>
				<th>Nama</th>
				<th>Email</th>
				<th>Subject</th>
				<th>Pesan</th>
				<th>Action</th>
			</tr>

			<?php foreach ($records->result() as $key => $ms) { ?>
			<tr>
				<td><?=$key + $paging + 1 ?></td>
				<td><?=$ms->nama ?></td>
				<td><?=$ms->email ?></td>
				<td><?=$ms->subject ?></td>
				<td><?=$ms->pesan ?></td>
				<td><a href="<?php echo base_url(); ?>admin/hapus/<?php echo $ms->id; ?>"><i class="fa fa-trash" aria-hidden="true" style="border: 1px solid; border-radius: 10px; padding: 8px; color: #fff; background-color: #E74C3C ;"></i></a></td>
			</tr>
		</tr>
		<?php } ?>
	</table>
	</div>
	<br>
	 <?php echo $this->pagination->create_links(); ?>
	 
</section>
<!-- /.content ->

<?php include 'include/foo-ter.php';?>
<?php include 'include/foot.php';?>

