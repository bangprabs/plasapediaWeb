<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo base_url();?>assets/dist/img/user.png" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?php echo $this->session->userdata("username"); ?></p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li>
				<a href="<?php echo base_url();?>admin/banner/">
					<i class="fa fa-dashboard" name="kriteria"></i> <span>Isi Slider</span>

				</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>admin/inputgambar/">
					<i class="fa fa-upload" name="kriteria"></i> <span>Upload Slider</span>

				</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>admin/isitenant/">
					<i class="fa fa-dashboard" name="kriteria"></i> <span>Isi Tenant</span>

				</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>admin/inputtenant/">
					<i class="fa fa-upload" name="kriteria"></i> <span>Upload Tenant</span>

				</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>admin/kotakmasuk">
					<i class="fa fa-inbox" name="kriteria"></i> <span>Lihat Email Masuk</span>

				</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>admin/email">
					<i class="fa fa-paper-plane" name="kriteria"></i> <span>Send Mail</span>

				</a>
			</li>
			<li>
				<a href="<?php echo base_url();?>dashboard/" target="_blank">
					<i class="fa fa-files-o" name="kriteria"></i> <span>Lihat Web</span>

				</a>
			</li>
			<li class="treeview">
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url();?>assets/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
					<li><a href="<?php echo base_url();?>assets/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
					<li><a href="<?php echo base_url();?>assets/pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
					<li><a href="<?php echo base_url();?>assets/pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
				</ul>
			</li>
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>

    <!-- Content Wrapper. Contains page content -->