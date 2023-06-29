<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
		<div class="sidebar-brand-icon">
			<i class="fas fa-chart-line"></i>
		</div>
		<div class="sidebar-brand-text mx-3">SB Admin</div>
	</a>
	<!-- Divider -->
	<hr class="sidebar-divider my-0">
	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="<?php echo base_url('index.php/gap_controller/login/index') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>
	<!-- Divider -->
	<hr class="sidebar-divider">
	<!-- Heading -->
	<div class="sidebar-heading">
		Menu
	</div>
	<!-- Nav Item - Data Kriteria -->
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('index.php/gap_controller/data_kriteria/index') ?>">
			<i class="fas fa-fw fa-pencil-alt"></i>
			<span>Data Kriteria</span></a>
	</li>
	<!-- Nav Item - Data SubKriteria -->
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('index.php/gap_controller/data_subkriteria/index') ?>">
			<i class="fas fa-fw fa-pencil-alt"></i>
			<span>Data SubKriteria</span></a>
	</li>
	<!-- Nav Item - Data Parameter -->
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('index.php/gap_controller/data_parameter/index') ?>">
			<i class="fas fa-fw fa-pencil-alt"></i>
			<span>Data Parameter</span></a>
	</li>
	<!-- Nav Item - Data Pembobotan -->
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('index.php/gap_controller/data_bobot/index') ?>">
			<i class="fas fa-fw fa-pencil-alt"></i>
			<span>Data Pembobotan</span></a>
	</li>
	<!-- Nav Item - Data Alternatif -->
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('index.php/data_alternatif1/index') ?>">
			<i class="fas fa-fw fa-users"></i>
			<span>Data Alternatif</span></a>
	</li>
	<!-- Nav Item - Data Nilai -->
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('index.php/data_nilai1/index') ?>">
			<i class="fas fa-fw fa-pencil-alt"></i>
			<span>Data Nilai</span></a>
	</li>
	<!-- Nav Item - Proses Nilai -->
	<li class="nav-item">
		<a class="nav-link"
			href="<?php echo base_url('index.php/gap_controller/profile_admin/validasi_proses?validasi') ?>">
			<i class="fas fa-fw fa-calculator"></i>
			<span>Proses Nilai</span></a>
	</li>
	<!-- Nav Item - Logout -->
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('index.php/gap_controller/login/logout') ?>">
			<i class="fas fa-fw fa-sign-out-alt"></i>
			<span>Logout</span></a>
	</li>
	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">
</ul>