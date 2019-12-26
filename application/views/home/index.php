<!-- slide bergerak -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url(); ?>assets/img/foto1.jpg" class="" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url(); ?>assets/img/foto2.jpg" class="d-block w-60 h-60" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url(); ?>assets/img/foto3.jpg" class="d-block w-60 h-60" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon-dark" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- mengapa belanja di universe -->
<section class="belanjadiuniverse" id="belanjadiuniverse">
  <div class="container">
    <div class="row mt-5">
      <div class="col-sm-12">
        <h4 class="text-center">Mengapa belanja di Universe</h4>
        <hr>
      </div>
      <div class="card-deck mt-4">
        <div class="card" style="width: 50rem; heigth: 100rem;">
          <img src="<?= base_url(); ?>assets/img/baju1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-center">Personalisasi produk yang sesuai gaya kamu</p>
          </div>
        </div>
        <div class="card">
          <img src="<?= base_url(); ?>assets/img/baju2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-center">Garansi produk original dan berkualitas</p>
          </div>
        </div>
        <div class="card">
          <img src="<?= base_url(); ?>assets/img/mobil.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-center">Free Delivery* dan garansi 14 hari penukaran</p>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- latest produk -->
<div class="container">
  <div class="row mb-5 justify-content-center">
    <div class="col-md-8 text-center mt-5">
      <h4 class="section-title mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay>Latests Product</h4>
      <p class="lead aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">" Dengan menggunakan bahan terbaik Universe mengeluarkan product terbaru yang akan membuat gaya anda semakin masa kini "</p>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay>
      <figure class="circle-bg">
        <img src="<?= base_url(); ?>assets/img/baju4.jpg" alt="Free Website Template By Universe.com" class="img-fluid">
      </figure>
    </div>
    <div class="col-lg-5 ml-auto aos-init aos-animate mt-5" data-aos="fade-up" data-aos-delay="100">
      <h3 class="text-black mb-4">Pungky Piss</h3>
      <p>Bahan : cotton combat</p>
      <p>Ukuran : S, M, L, XL, XXL, XXXL</p>
      <h4>Rp. 175.000</h4>
      <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-shopping-cart"></i> Beli Produk ini</button>
    </div>
  </div>
</div>

<<<<<<< HEAD
<!-- Icons Grid -->

<!-- Halaman Utama -->

<div class="contanier-fluid">
  <div class="row text-center m-4">
    <?php foreach ($produk as $prd) : ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="kotak">
          <form method="post" action="<?php echo base_url(); ?>keranjang/tambah_ke_keranjang" method="post" accept-charset="utf-8">
            <a href="#"><img class="img-thumbnail img" src="<?php echo base_url() . 'assets/img/model/' . $prd['gambar_baju']; ?>" /></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#"><?php echo $prd['nama_baju']; ?></a>
              </h4>
              <h5>Rp. <?php echo number_format($prd['harga_baju'], 0, ",", "."); ?></h5>
              <p class="card-text"><?php echo $prd['deskripsi_baju']; ?></p>
=======
  <!-- Icons Grid -->

  <!-- Halaman Utama -->

  <div class="contanier-fluid">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="row text-center m-4">
    <?php  foreach ($produk as $prd) : ?>
        <div class="col-lg-4 col-md-6 mb-4">
              <div class="kotak">
              <form method="post" action="<?php echo base_url();?>keranjang/tambah_ke_keranjang" method="post" accept-charset="utf-8">
                <a href="#"><img class="img-thumbnail img" src="<?php echo base_url() . 'assets/img/model/'.$prd['gambarBaju']; ?>"/></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $prd['namaBaju'];?></a>
                  </h4>
                  <h5>Rp. <?php echo number_format($prd['hargaBaju'],0,",",".");?></h5>
                  <p class="card-text"><?php echo $prd['deskripsiBaju'];?></p>
                </div>
                <div class="card-footer">
                  <a href="<?php echo base_url();?>home/detail_produk/<?php echo $prd['idBaju'];?>" class="btn btn-sm btn-default"><i class="fas fa-shopping-search"></i> Detail</a> 
                  
                  <input type="hidden" name="id" value="<?php echo $prd['idBaju']; ?>" />
                  <input type="hidden" name="nama" value="<?php echo $prd['namaBaju']; ?>" />
                  <input type="hidden" name="harga" value="<?php echo $prd['hargaBaju']; ?>" />
                  <input type="hidden" name="gambar" value="<?php echo $prd['gambarBaju']; ?>" />
                  <input type="hidden" name="qty" value="1" />
                  <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-shopping-cart"></i>Beli Produk ini</button>
                </div>
                </form>
              </div>
>>>>>>> 48a535ff8f7f6a276c46202701a0a83c53f41023
            </div>
            <div class="card-footer">
              <a href="<?php echo base_url(); ?>home/detail_produk/<?php echo $prd['id_baju']; ?>" class="btn btn-sm btn-default"><i class="fas fa-shopping-search"></i> Detail</a>

              <input type="hidden" name="id" value="<?php echo $prd['id_baju']; ?>" />
              <input type="hidden" name="nama" value="<?php echo $prd['nama_baju']; ?>" />
              <input type="hidden" name="harga" value="<?php echo $prd['harga_baju']; ?>" />
              <input type="hidden" name="gambar" value="<?php echo $prd['gambar_baju']; ?>" />
              <input type="hidden" name="qty" value="1" />
              <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-shopping-cart"></i>Beli Produk ini</button>
            </div>
          </form>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
</div>



<!-- jumbotronn -->


<!-- Image Showcases -->
<section class="showcase">
  <div class="container-fluid p-0">
    <div class="row no-gutters">

      <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
      <div class="col-lg-6 order-lg-1 my-auto showcase-text">
        <h2>Fully Responsive Design</h2>
        <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
      <div class="col-lg-6 my-auto showcase-text">
        <h2>Updated For Bootstrap 4</h2>
        <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
      <div class="col-lg-6 order-lg-1 my-auto showcase-text">
        <h2>Easy to Use &amp; Customize</h2>
        <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="testimonials text-center bg-light">
  <div class="container">
    <h2 class="mb-5">What people are saying...</h2>
    <div class="row">
      <div class="col-lg-4">
        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
          <h5>Margaret E.</h5>
          <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
          <h5>Fred S.</h5>
          <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
          <h5>Sarah W.</h5>
          <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="call-to-action text-white text-center">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <h2 class="mb-4">Ready to get started? Sign up now!</h2>
      </div>
      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form>
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
            </div>
            <div class="col-12 col-md-3">
              <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
        <ul class="list-inline mb-2">
          <li class="list-inline-item">
            <a href="#">About</a>
          </li>
          <li class="list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="#">Contact</a>
          </li>
          <li class="list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="#">Terms of Use</a>
          </li>
          <li class="list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="#">Privacy Policy</a>
          </li>
        </ul>
        <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
      </div>
      <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
        <ul class="list-inline mb-0">
          <li class="list-inline-item mr-3">
            <a href="#">
              <i class="fab fa-facebook fa-2x fa-fw"></i>
            </a>
          </li>
          <li class="list-inline-item mr-3">
            <a href="#">
              <i class="fab fa-twitter-square fa-2x fa-fw"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#">
              <i class="fab fa-instagram fa-2x fa-fw"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
<<<<<<< HEAD
  </div>
</footer>
=======
  </footer>
  
>>>>>>> 48a535ff8f7f6a276c46202701a0a83c53f41023
