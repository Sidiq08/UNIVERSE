<!DOCTYPE html>
<html>
<head>
	<title>Halaman <?php echo $judul; ?></title>
	<style>
		.badge{
			margin-left : 3px;
		}
	</style>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
	  <a class="navbar-brand" href="#">
		<img src="<?= base_url();?>assets/img/logo.png" width="100" alt="">
	</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link text-light" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link text-light" href="<?= base_url(); ?>/mahasiswa">Shop</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link text-light" href="<?= base_url(); ?>/peoples">ORANG</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link text-light" href="#">About</a>
		  </li>
		  <li class="nav-item">
		  <a class="nav-link text-light" href="#"><img src="<?= base_url();?>assets/img/log.png" width="30" alt="" class="mr-2">Login</a>
		  </li>
		  <li class="nav-item">
		  <a class="nav-link text-light" href="#"><img src="<?= base_url();?>assets/img/cart.png" width="25" alt=""></a>
	      </li>
		</ul>
  	</div>
  </div>
</nav>