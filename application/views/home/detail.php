<div class="contanier-fluid">
      <div class="row text-center m-4">
            <div class="col-lg-4 col-md-6 mb-4">
                  <h2><?php echo $detail['namaBaju']; ?></h2>
                  <form method="post" action="<?php echo base_url(); ?>keranjang/tambah_ke_keranjang">
                        <div class="kotak2">
                              <img class="img-responsive" src="<?php echo base_url() . 'assets/img/model/' . $detail['gambarBaju']; ?>" />
                              <h5>Harga: Rp. <?php echo number_format($detail['hargaBaju'], 0, ",", "."); ?></h5>
                              <p class="card-text">
                                    <strong> <u>Deskripsi</u></strong><br>
                                    <?php echo $detail['deskripsiBaju']; ?></p>
                              <input type="hidden" name="id" value="<?php echo $detail['idBaju']; ?>" />
                              <input type="hidden" name="nama" value="<?php echo $detail['namaBaju']; ?>" />
                              <input type="hidden" name="harga" value="<?php echo $detail['hargaBaju']; ?>" />
                              <input type="hidden" name="gambar" value="<?php echo $detail['gambarBaju']; ?>" />
                              <input type="hidden" name="qty" value="1" />
                              <button class="btn btn-sm btn-success" type="submit"><i class="fas fa-shopping-cart"></i> Beli Produk Ini</button>
                        </div>
                  </form>
            </div>
      </div>
</div>