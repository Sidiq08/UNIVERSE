<div class="bg-light y-3 my-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><hr><hr><hr><hr><a href="<?= base_url();?>/Home" class="text-success">Home</a> <span class="mx-2 mb-0">/</span>
          <a href="<?= base_url();?>/keranjang" class="text-success">Keranjang</a><span class="mx-2 mb-0">/</span>
          <strong class="text-black">Check-Out</strong>
          
        </div>
        </div>
      </div>
    </div>
</div>
<div class="container">
      <div class="row justify-content-between text-center">
            <div class="col-12">
            <h2>Konfirmasi Check Out</h2> <hr>
            </div>
      </div>
<div class="container">
      <div class="row justify-content-between text-center">
            <div class="col-12">
            <?php
$grand_total = 0;
if ($cart = $this->cart->contents())
	{
		foreach ($cart as $item)
			{
        $grand_total = $grand_total + $item['subtotal'];
        $baju = $item['name'];
			}
            echo "<h4><small>Total Belanja: Rp.".number_format($grand_total,0,",",".")."</small></h4>";
            echo "<h4><small>Nama Produk : - ".$baju."</small></h4>";
            
?>
    <?php
	}
	else
		{
			echo "<h5>Keranjang masih kosong</h5>";	
		}
      ?>
            </div>
      </div>
</div>
</div>
</div>
