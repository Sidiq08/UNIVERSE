<!DOCTYPE html>
<html>
<head>
	<title>Universe</title>
	<style>
		.badge{
			margin-left : 3px;
		}

		.body {
			color: #212529;
		}
	</style>
	<link href="<?= base_url();?>assets/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/sb-admin-2.min.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/spectre.min.css">
    	<link rel="stylesheet" href="<?= base_url();?>assets/css/spectre-icons.min.css">
    	<link rel="stylesheet" href="<?= base_url();?>assets/css/spectre-exp.min.css">
    	<link rel="stylesheet" href="<?= base_url();?>assets/css/docs.min.css">
	    <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
</head>
<body>
		<!-- </div>
</div>
</div> -->

<!-- nav nav -->
<div class="container">
<header class="navbar">
	<section class="navbar-section">
			<!-- <form class="form-inline">
				<input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
				<a href="#" class="btn btn-sm btn-outline-secondary">Search</a>
			</form> -->
	</section>
	<section class="navbar-center">
			<a href="#" class="logo"><img class=" mr-2" src="<?= base_url();?>assets/img/logofix.png" width="100" alt=""></a>
	</section>
	<section class="navbar-section">
		
		<a href="<?= base_url();?>Cart" class="nav-link"><i class="fas fa-shopping-cart"></i> (<span><?php $keranjang = $this->cart->total_items();
		echo anchor('Home/detail_keranjang',$keranjang)?></span>)</a>
	</section>
</header>
</div>

<!-- navbar baru -->
<header role="banner">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<div class="container">
				<a href="" class="navbar-brand"><img class=" mr-2" src="<?= base_url();?>assets/img/logofix.png" width="100" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarExample05">
					<ul class="navbar-nav ml-auto pl-lg-5 pl-0">
						<li class="nav-item">
							<a href="" class="nav-link">Sale</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link">New Arrival</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link">Man</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link">Woman</a>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto pl-lg-5 pl-0">
						<li class="nav-item">
						<button type="button" class="btn btn-primary">Masuk / Daftar</button>
						<!-- <a href="" class="nav-link">Masuk / Daftar </a> -->
						</li>
					</ul>
					
				</div>
			</div>
		</nav>
</header>

<!-- awal -->
	<!-- <header class="navbar">
		<section class="navbar-section">
			<img class=" mr-2" src="<?= base_url();?>assets/img/logofix.png" width="100" alt="">
			<a href="#" class="nav-item nav-link">New Arrival</a>
			<a href="#" class="nav-item nav-link">Man</a>
			<a href="#" class="nav-item nav-link">Woman</a>
		</section>
		<section class="navbar-center">
			<form class="form-inline">
				<input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
				<a href="#" class="btn btn-sm btn-outline-secondary">Search</a>
			</form>
		</section>
		<section class="navbar-section">
			<div class="col-4-d-flex justify-content-end align-items-center mr-2">
					<a href="<?= base_url();?>Auth" class="">Masuk / Daftar</a>
			</div>
			<a href="<?= base_url();?>Cart" class="nav-link"><i class="fas fa-shopping-cart"></i> (<span><?php $keranjang = $this->cart->total_items();
			echo anchor('Home/detail_keranjang',$keranjang)?></span>)</a>
		</section>
	</header> -->

