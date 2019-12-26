<div class="row mb-2">
    <div class="col-sm-6">
        <h1>E-commerce</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">E-commerce</li>
        </ol>
    </div>
</div>
</div>
<!-- /.container-fluid -->
</section>

<!-- Main content -->
<!-- <section class="content">
     -->
<!-- Default box -->
<div class="card card-solid">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h3 class="d-inline-block d-sm-none"><?= $produk['namaBaju']; ?></h3>
                <div class="col-12">
                    <img src="<?= base_url(); ?>assets/img/model/<?= $produk['gambarBaju']; ?>" class="product-image" alt="Product Image">
                </div>
                <div class="col-12 product-image-thumbs">
                    <div class="product-image-thumb active"><img src="<?= base_url(); ?>assets/img/model/<?= $produk['gambarBaju']; ?>" alt="Product Image"></div>
                    <div class="product-image-thumb">
                        <img src="<?= base_url(); ?>assets/img/model/<?= $produk['gambarBaju']; ?>" alt=" Product Image">
                    </div>
                    <div class="product-image-thumb">
                        <img src="<?= base_url(); ?>assets/img/model/<?= $produk['gambarBaju']; ?>" alt=" Product Image">
                    </div>
                    <div class="product-image-thumb">
                        <img src="<?= base_url(); ?>assets/img/model/<?= $produk['gambarBaju']; ?>" alt=" Product Image">
                    </div>
                    <div class="product-image-thumb">
                        <img src="<?= base_url(); ?>assets/img/model/<?= $produk['gambarBaju']; ?>" alt=" Product Image">
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <h3 class="my-3"><?= $produk['namaBaju']; ?></h3>
                <p><?= $produk['deskripsiBaju']; ?></p>

                <hr>
                <span>
                    <h4>Warna : <?= $produk['warnaBaju'] ?> </h4>
                </span>

                <h4 class="mt-3">Ukuran yang tersedia :</h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-default">
                        <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                        <span class="text-xl"><?= $produk['ukuranBaju'] ?></span>
                        <br>

                        <small>
                            <p>
                                Lebar : <?= $produk['lebarBaju'] ?> cm
                            </p>
                        </small>
                        <small>
                            <p>
                                Panjang : <?= $produk['panjangBaju'] ?> cm
                            </p>
                        </small>
                    </label>
                </div>

                <div class="bg-blue py-2 px-3 mt-4">
                    <h2 class="mb-0">
                        Rp. <?= $produk['hargaBaju']; ?>
                    </h2>
                    <h4 class="mt-0">
                        <small>Stok : <?= $produk['stokBaju']; ?></small>
                    </h4>
                </div>

                <div class="mt-4 product-share">
                    <a href="#" class="text-gray">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>
                    <a href="#" class="text-gray">
                        <i class="fab fa-twitter-square fa-2x"></i>
                    </a>
                    <a href="#" class="text-gray">
                        <i class="fas fa-envelope-square fa-2x"></i>
                    </a>
                    <a href="#" class="text-gray">
                        <i class="fas fa-rss-square fa-2x"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>

<!-- /.card -->