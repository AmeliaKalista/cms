<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Skydash Admin</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?= site_url('assets/skydash/')?>vendors/feather/feather.css">
	<link rel="stylesheet" href="<?= site_url('assets/skydash/')?>vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?= site_url('assets/skydash/')?>vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= site_url('assets/skydash/')?>css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= site_url('assets/skydash/')?>images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth px-0">
				<div class="row w-100 mx-0">
					<div class="col-lg-4 mx-auto">
						<div class="auth-form-light text-left py-5 px-4 px-sm-5">
							<div class="brand-logo">
								<img src="<?= site_url('assets/skydash/')?>images/logo.svg" alt="logo">
							</div>
							<h4>Hello! Wellcome To CMS</h4>
							<form class="mb=3" action="<?= base_url('Auth/Login') ?>" method="POST">
								<form class="pt-3">
									<div class="form-group">
										<input type="" name="username" class="form-control form-control-lg"
											id="exampleInputEmail1" placeholder="Username">
									</div>
									<div class="form-group">
										<input type="password" name="password" class="form-control form-control-lg"
											placeholder="Password">
									</div>
									<div class="mt-3">
										<button
											class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
											type="submit">LOGIN</button>
									</div>
									<div class="text-center mt-4 font-weight-light">
										Belum Punya Akun? <a href="<?= base_url('registrasi') ?>"
											class="text-primary">Registrasi</a>
									</div>
									<div id="menghilang">
										<?= $this->session->flashdata('alert') ?>
									</div>
								</form>
						</div>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="<?= site_url('assets/skydash/')?>vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?= site_url('assets/skydash/')?>js/off-canvas.js"></script>
	<script src="<?= site_url('assets/skydash/')?>js/hoverable-collapse.js"></script>
	<script src="<?= site_url('assets/skydash/')?>js/template.js"></script>
	<script src="<?= site_url('assets/skydash/')?>js/settings.js"></script>
	<script src="<?= site_url('assets/skydash/')?>js/todolist.js"></script>
	<!-- endinject -->
</body>

</html>
