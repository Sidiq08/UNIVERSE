
<div class="bg-light y-3 my-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><hr><hr><hr><hr><a href="<?= base_url();?>/Home" class="text-success">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Check-Out</strong></div>
        </div>
      </div>
    </div>
</div>
<div class="container">
      <div class="row justify-content-between text-center">
            <div class="col">
            <h2>Konfirmasi Check Out</h2> <hr>
            </div>
      </div>

<?php
$grand_total = 0;
if ($cart = $this->cart->contents())
	{
		foreach ($cart as $item)
			{
				$grand_total = $grand_total + $item['subtotal'];
			}
            echo "<h4><small>Total Belanja: Rp.".number_format($grand_total,0,",",".")."</small></h4>";
            
?>
<div class="row justify-content-between">
      <div class="col-8 mb-3">
<form class="form-horizontal" action="<?php echo base_url()?>keranjang/proses_order" method="post" name="frmCO" id="frmCO">
        <div class="form-group  has-success has-feedback">
            <label class="control-label" for="inputEmail">Email :</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label" for="firstName">Nama :</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label" for="lastName">Alamat :</label>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label" for="phoneNumber">Telp :</label>
                <input type="tel" class="form-control" name="telpon" id="telpon" placeholder="No Telp">
        </div>
        <div class="form-group  has-success has-feedback">
              
            <div class="col mt-3">
                <button type="submit" class="btn btn-primary">Proses Order</button>
            </div>
    
        </div>
    </form>
    <?php
	}
	else
		{
			echo "<h5>Shopping Cart masih kosong</h5>";	
		}
      ?>
      </div>
      </div>
</div>
</div>