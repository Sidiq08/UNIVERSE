<!DOCTYPE html>
<html>

<head>
	<title>Universe</title>
	<style>
		.badge {
			margin-left: 3px;
		}

		.body {
			color: #212529;
		}
	</style>
	<link href="<?= base_url(); ?>assets/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/sb-admin-2.min.css">
	<!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/css/spectre.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/spectre-icons.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/spectre-exp.min.css"> -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/docs.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

	<!-- ftco_navbar ftco-navbar-dark -->
	<!-- nav terbaru -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light " id="ftco-navbar">
		<div class="container">
			<div class="row m-auto">
				<div class="col-12 w-100 text-center">
					<a href=""><img class=" mr-2" src="<?= base_url(); ?>assets/img/logofix.png" width="100" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="oi oi-menu">
							::before
						</span>
						" Menu
						"
					</button>

				</div>
				<div class="col w-120 text-center">
					<div class="collapse navbar-collapse" id="ftco-nav">
						<ul class="navbar-nav m-auto">
							<li class="nav-item active">
								<a href="<?= base_url(); ?>home/index" class="nav-link text-dark">Home</a>
							</li>
							<li class="nav-item active">
								<a href="" class="nav-link text-dark">New Arrival</a>
							</li>
							<li class="nav-item active">
								<a href="<?= base_url(); ?>home/men" class="nav-link text-dark">Men</a>
							</li>
							<li class="nav-item active">
								<a href="<?= base_url(); ?>home/woman" class="nav-link text-dark">Woman</a>
							</li>
							<li class="nav-item active">
								<a href="<?= base_url(); ?>auth/login" class="nav-link text-primary">Masuk / Daftar</a>
							</li>
							<li class="nav-item active">
								<a href="<?= base_url(); ?>Keranjang" class="nav-link text-secondary"><i class="fas fa-shopping-cart"></i> (<span><?php $keranjang = $this->cart->total_items();
																																					echo ($keranjang) ?></span>)</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<br>
	<br>
	<br>
	<br>