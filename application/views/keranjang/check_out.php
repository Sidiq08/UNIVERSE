<div class="bg-light y-3 my-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="<?= base_url(); ?>/Home" class="text-success">Home</a> <span class="mx-2 mb-0">/</span>
        <a href="<?= base_url(); ?>/keranjang" class="text-success">Keranjang</a><span class="mx-2 mb-0">/</span>
        <strong class="text-black">Check-Out</strong>

      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="container">
  <div class="row justify-content-between text-center">
    <div class="col-12">
      <h2>Informasi Penerima</h2>
      <hr>
    </div>
  </div>

  <?php
  $grand_total = 0;
  if ($cart = $this->cart->contents()) {
    foreach ($cart as $item) {
      $grand_total = $grand_total + $item['subtotal'];
      $baju = $item['name'];
    }
    echo "<h4><small>Total Belanja: Rp." . number_format($grand_total, 0, ",", ".") . "</small></h4>";
    // echo "<h4><small>Total Belanja: Rp.".$baju."</small></h4>";

  ?>
    <div class="row justify-content-between">
      <div class="col-8 mb-3">
        <form class="form-horizontal" action="<?php echo base_url() ?>keranjang/proses_order" method="post" name="frmCO" id="frmCO">
          <div class="form-group  has-success has-feedback">
            <label class="control-label" for="inputEmail">Email :</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            <small class="form-text text-danger"><?= form_error('email'); ?></small>
          </div>
          <div class="form-group  has-success has-feedback">
            <label class="control-label" for="firstName">Nama :</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
          </div>
          <div class="form-group  has-success has-feedback">
            <label class="control-label" for="lastName">Alamat :</label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
          </div>
          <div class="form-group  has-success has-feedback">
            <label class="control-label" for="phoneNumber">Telp :</label>
            <input type="tel" class="form-control" name="telpon" id="telpon" placeholder="No Telp">
            <small class="form-text text-danger"><?= form_error('telpon'); ?></small>
          </div>
          <div class="form-group  has-success has-feedback">

            <div class="col mt-3">
              <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#checkoutModal">Proses Order</button>
              <!-- <a class="btn btn-sm btn-warning" href="<?php echo base_url() ?>keranjang/konfirmasi">Lanjutkan</a>
                <button type="button" class="btn btn-warning btn-block text-white" data-toggle="modal"
                data-target="#checkoutModal">Checkout</button> -->
            </div>

          </div>
        </form>
      <?php
    } else {
      echo "<h5>Keranjang masih kosong</h5>";
    }
      ?>
      </div>
    </div>
</div>


<!-- Modal -->

<div class="modal fade checkout-modal-success" id="checkoutModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
        <img src="<?= base_url(); ?>assets/img/checkout.png" class="mb-3">
        <h3>Checkout Berhasil</h3>
        <button type="button" class="btn btn-sm">Home</button>
      </div>
    </div>
  </div>
</div>