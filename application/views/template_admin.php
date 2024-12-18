<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $judul_halaman?></title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?= base_url('assets/skydash') ?>/vendors/feather/feather.css">
	<link rel="stylesheet" href="<?= base_url('assets/skydash') ?>/vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('assets/skydash') ?>/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet"
		href="<?= base_url('assets/skydash') ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="<?= base_url('assets/skydash') ?>/vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/skydash') ?>/js/select.dataTables.min.css">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url('assets/skydash') ?>/css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= base_url('assets/skydash') ?>/images/favicon.png" />
</head>

<body>

	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
				<a href="<?= base_url();?>" class="navbar-brand brand-logo mr-5"><img
						src="<?= base_url('assets/skydash') ?>/images/logo.svg" class="mr-2" alt="logo" /></a>
				<a class="navbar-brand brand-logo-mini" href="index.html"><img
						src="<?= base_url('assets/skydash') ?>/images/logo-mini.svg" alt="logo" /></a>
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
				<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
				</button>
				<ul class="navbar-nav navbar-nav-right">
					<li class="nav-item dropdown">
						<a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
							data-toggle="dropdown">
							<?= $judul_halaman ?>
						</a>
					<li class="nav-item nav-profile dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
							<img src="<?= base_url('assets/skydash') ?>/images/labubu.jpg" alt="profile" />
						</a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown"
							aria-labelledby="profileDropdown">
							<a class="dropdown-item">
								<i class="ti-user text-primary"></i>
								<?= $this->session->userdata('nama') ?>
								<i class="text-muted"></i>
								<?= $this->session->userdata('level') ?></small>
							</a>
							<a class="dropdown-item">
								<i class="ti-settings text-primary"></i>
								Password
							</a>
							<a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
								<i class="ti-power-off text-primary"></i>
								Logout
							</a>
						</div>
					</li>
				</ul>
				<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
					data-toggle="offcanvas">
					<span class="icon-menu"></span>
				</button>
			</div>
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial -->
			<!-- partial:partials/_sidebar.html -->
			<nav class="sidebar sidebar-offcanvas" id="sidebar">
				<?php $menu = $this->uri->segment(2); ?>
				<ul class="nav">
					<li class="nav-item <?php if($menu== 'dashboard'){ echo "active"; } ?>">
						<a class="nav-link" href="<?= site_url('admin/home')?>">
							<i class="icon-grid menu-icon"></i>
							<span class="menu-title">Dashboard</span>
						</a>
					</li>
					<li class="nav-item <?php if($menu== 'caraousel'){ echo "active"; } ?>">
						<a class="nav-link" href="<?= site_url('admin/caraousel')?>">
							<i class="icon-bar-graph menu-icon"></i>
							<span class="menu-title">Caraousel</span>
						</a>
					</li>
          <?php if($this->session->userdata('level')=='Admin'){ ?>
					<li class="nav-item <?php if($menu== 'user'){ echo "active"; } ?>">
						<a class="nav-link" href="<?= site_url('admin/user')?>">
							<i class="icon-head menu-icon"></i>
							<span class="menu-title">User</span>
						</a>
					</li>
          <?php } ?>
					<li class="nav-item <?php if($menu== 'konten'){ echo "active"; } ?>">
						<a class="nav-link" href="<?= site_url('admin/konten')?>">
							<i class="icon-cog menu-icon"></i>
							<span class="menu-title">Konten</span>
						</a>
					</li>
					<li class="nav-item <?php if($menu== 'kategori'){ echo "active"; } ?>">
						<a class="nav-link" href="<?= site_url('admin/kategori')?>">
							<i class="icon-grid-2 menu-icon"></i>
							<span class="menu-title">Kategori Konten</span>
						</a>
					</li>
          <?php if($this->session->userdata('level')=='Admin'){ ?>
					<li class="nav-item <?php if($menu== 'konfigurasi'){ echo "active"; } ?>">
						<a class="nav-link" href="<?= site_url('admin/konfigurasi')?>">
							<i class="icon-paper menu-icon"></i>
							<span class="menu-title">Konfigurasi</span>
						</a>
					</li>
          <?php } ?>
				</ul>
			</nav>
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						<div class="col-md-12 grid-margin">
							<div class="row">
								<div class="container-xxl flex-grow-1 container-p-y">
								<?= $contents; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
				<div class="d-sm-flex justify-content-center justify-content-sm-between">
					<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a
							href="https://www.themewagon.com/" target="_blank">AMELL</a></span>
				</div>
				</footer>
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->

	<!-- plugins:js -->
	<script src="<?= base_url('assets/skydash') ?>/vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="<?= base_url('assets/skydash') ?>/vendors/chart.js/Chart.min.js"></script>
	<script src="<?= base_url('assets/skydash') ?>/vendors/datatables.net/jquery.dataTables.js"></script>
	<script src="<?= base_url('assets/skydash') ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
	<script src="<?= base_url('assets/skydash') ?>/js/dataTables.select.min.js"></script>

	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?= base_url('assets/skydash') ?>/js/off-canvas.js"></script>
	<script src="<?= base_url('assets/skydash') ?>/js/hoverable-collapse.js"></script>
	<script src="<?= base_url('assets/skydash') ?>/js/template.js"></script>
	<script src="<?= base_url('assets/skydash') ?>/js/settings.js"></script>
	<script src="<?= base_url('assets/skydash') ?>/js/todolist.js"></script>
	<!-- endinject -->
	<!-- Custom js for this page-->
	<script src="<?= base_url('assets/skydash') ?>/js/dashboard.js"></script>
	<script src="<?= base_url('assets/skydash') ?>/js/Chart.roundedBarCharts.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- End custom js for this page-->
	<script>
		$('#menghilang').delay('slow').slideDown('slow').delay(10000).slideUp(600);

	</script>
</body>

</html>