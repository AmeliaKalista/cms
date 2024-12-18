<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $judul?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="<?= base_url('assets/hotel')?>/img/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
		rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= base_url('assets/hotel')?>/lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/hotel')?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/hotel')?>/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
		rel="stylesheet" />

	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('assets/hotel')?>/css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= base_url('assets/hotel')?>/css/style.css" rel="stylesheet">
</head>

<body>
	<div class="container-xxl bg-white p-0">
		<!-- Spinner Start -->
		<div id="spinner"
			class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
			<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		<!-- Spinner End -->

		<!-- Header Start -->
		<div class="container-fluid bg-dark px-0">
			<div class="row gx-0">
				<div class="col-lg-3 bg-dark d-none d-lg-block">
					<a href="index.html"
						class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
						<h1 class="m-0 text-primary text-uppercase">Mellskin</h1>
					</a>
				</div>
				<div class="col-lg-9">
					
					<nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
						<a href="index.html" class="navbar-brand d-block d-lg-none">
							<h1 class="m-0 text-primary text-uppercase">Mellskin</h1>
						</a>
						<button type="button" class="navbar-toggler" data-bs-toggle="collapse"
							data-bs-target="#navbarCollapse">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
							<div class="navbar-nav mr-auto py-0">
								<a href="<?= base_url()?>" class="nav-item nav-link active">Home</a>
								<?php foreach ($kategori as $kate) { ?>
								<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"
									class="nav-item nav-link">
									<?= $kate['nama_kategori'] ?>
									<?php } ?>
								</a>
					</nav>
				</div>
			</div>
		</div>
		<!-- Header End -->


		<!-- Room Start -->
		<div class="container-xxl py-5">
			<div class="container">
				<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
					<h6 class="section-title text-center text-primary text-uppercase">Rekomendasi</h6>
					<h1 class="mb-5"><?= $nama_kategori; ?><span class="text-primary text-uppercase"></span></h1>
				</div>
				<div class="row g-4">
					<?php foreach ($konten as $uu){ ?>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="room-item shadow rounded overflow-hidden">
							<div class="position-relative">
								<img class="img-fluid" src="<?= base_url('assets/skydash/upload/konten/'.$uu['foto']) ?>"/>
							</div>
							<div class="p-4 mt-2">
								<div class="d-flex justify-content-between mb-3">
									<h5 class="mb-0"><?= $uu['judul'] ?></h5>
								</div>
								<div class="d-flex mb-3">
									<small class="border-end me-3 pe-3"><i class="fa fa-user text-primary me-2"></i><?= $uu['nama'] ?></small>
									<small class="border-end me-3 pe-3"><i class="fa fa-folder text-primary me-2"></i><?= $uu['nama_kategori'] ?></small>	
								</div>
								<div class="d-flex justify-content-between">
									<a class="btn btn-sm btn-primary rounded py-2 px-4" href="<?= base_url('home/artikel/'.$uu['id_konten'].'/'.$uu['slug']) ?>">Pelajari Selengkapnya</a>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- Room End -->


		<!-- Testimonial Start -->
		<div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">

		</div>
		<!-- Testimonial End -->


		<!-- Footer Start -->
		<div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
			<div class="container pb-5">
				<div class="row g-5">
					<div class="col-md-6 col-lg-4">
						<div class="bg-primary rounded p-4">
							<a href="index.html">
								<h1 class="text-white text-uppercase mb-3">Mellskin</h1>
							</a>
							<p class="text-white mb-0">
								<a class="text-dark fw-medium"
									href=""></a>
									Website Ini Adalah Solusi Yang Tepat Untuk Kamu Menemukan Rekomendasi Perawatan Wajah 
								    Khususnya Untuk Kamu Yang Memiliki Permasalahan Kulit Berjerawat.
							</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
						<p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?= $konfig->alamat; ?></p>
						<p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?= $konfig->no_wa; ?></p>
						<p class="mb-2"><i class="fa fa-envelope me-3"></i><?= $konfig->email; ?></p>
						<div class="d-flex pt-2">
							<a class="btn btn-outline-light btn-social" href="<?= $konfig->instagram; ?>"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
					<div class="col-lg-5 col-md-12">
						<div class="row gy-5 g-4">
							<div class="col-md-6">
								<h6 class="section-title text-start text-primary text-uppercase mb-4">Kategori</h6>
								<a class="btn btn-link" href="<?= base_url() ?>">Home</a>
								<?php foreach ($kategori as $kate) { ?>	
									<a class="btn btn-link" href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
									<?php } ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="copyright">
					<div class="row">
						<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
							&copy; <a class="border-bottom" href="#">Kalista Metna Ameliani	</a>, All Right Reserved.
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer End -->
	</div>

	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/hotel')?>/lib/wow/wow.min.js"></script>
	<script src="<?= base_url('assets/hotel')?>/lib/easing/easing.min.js"></script>
	<script src="<?= base_url('assets/hotel')?>/lib/waypoints/waypoints.min.js"></script>
	<script src="<?= base_url('assets/hotel')?>/lib/counterup/counterup.min.js"></script>
	<script src="<?= base_url('assets/hotel')?>/lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/hotel')?>/lib/tempusdominus/js/moment.min.js"></script>
	<script src="<?= base_url('assets/hotel')?>/lib/tempusdominus/js/moment-timezone.min.js"></script>
	<script src="<?= base_url('assets/hotel')?>/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Template Javascript -->
	<script src="<?= base_url('assets/hotel')?>/js/main.js"></script>
</body>

</html>
