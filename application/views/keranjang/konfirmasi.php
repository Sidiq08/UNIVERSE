<div class="bg-light y-3 my-3">
      <div class="container">
<<<<<<< HEAD
            <div class="row">
                  <div class="col-md-12 mb-0">
                        <hr>
                        <hr>
                        <hr>
                        <hr><a href="<?= base_url(); ?>/Home" class="text-success">Home</a> <span class="mx-2 mb-0">/</span>
                        <a href="<?= base_url(); ?>/keranjang" class="text-success">Keranjang</a><span class="mx-2 mb-0">/</span>
                        <strong class="text-black">Check-Out</strong>

                  </div>
            </div>
=======
        <div class="row">
          <div class="col-md-12 mb-0"><a href="<?= base_url();?>/Home" class="text-success">Home</a> <span class="mx-2 mb-0">/</span>
          <a href="<?= base_url();?>/keranjang" class="text-success">Keranjang</a><span class="mx-2 mb-0">/</span>
          <strong class="text-black">Check-Out</strong>
          
        </div>
        </div>
>>>>>>> 840bc560db42e5f702710d657a60fe2550ebbdba
      </div>
</div>
</div>
<div class="container">
      <div class="row justify-content-between text-center">
            <div class="col-12">
                  <h2>Konfirmasi Check Out</h2>
                  <hr>
            </div>
      </div>
<<<<<<< HEAD
      <div class="container">
            <div class="row justify-content-between text-center">
                  <div class="col-12">
                        <?php
                        $grand_total = 0;
                        if ($cart = $this->cart->contents()) {
                              foreach ($cart as $item) {
                                    $grand_total = $grand_total + $item['subtotal'];
                                    $baju = $item['name'];
                              }
                              echo "<h4><small>Total Belanja: Rp." . number_format($grand_total, 0, ",", ".") . "</small></h4>";
                              echo "<h4><small>Nama Produk : - " . $baju . "</small></h4>";

                        ?>
                        <?php
                        } else {
                              echo "<h5>Keranjang masih kosong</h5>";
                        }
                        ?>
                  </div>
            </div>
=======
<div class="container">
      <div class="row justify-content-between text-center">
            <div class="col-12">
            
</<div class="container">
  <div class="row justify-content-between" style="margin-bottom: 100px;">
    <div class="col-12">
     <h2>Daftar Belanja</h2>
     <!-- Buat form dan mengirim semua value ke function "keranjang/ubah_cart". -->
        <form action="<?php echo base_url()?>keranjang/ubah_cart" method="post" name="frmShopping" id="frmShopping" class="form-horizontal" enctype="multipart/form-data">
<?php
	if ($cart = $this->cart->contents())
		{
 ?>

<table class="table">
  <tr id= "main_heading">
    <td width="2%">No</td>
    <td width="10%">Gambar</td>
    <td width="33%">Nama Barang</td>
    <td width="17%">Harga</td>
    <td width="10%">Qty</td>
    <td width="20%">Total Harga</td>
  </tr>
<?php

    $grand_total = 0;
    $i = 1;

foreach ($cart as $item):
    $grand_total = $grand_total + $item['subtotal'];
?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><img class="img-fluid" src="<?= base_url() . 'assets/img/model/' . $item['gambar']; ?>"/></td>
        <td><?php echo $item['name']; ?></td>
        <td><?php echo number_format($item['price'], 0,",","."); ?></td>
        <td>
        <!-- <input type="text" class="form-control input-sm" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" /> -->
        <!-- <input type="text" class="form-control input-sm" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" > -->
        <?php echo $item['qty'] ?>
        </td>
        <td><?php echo number_format($item['subtotal'], 0,",",".") ?></td>
        <?php endforeach; ?>
      </tr>
    <tr>
      <td colspan="3"><b>Order Total: Rp <?php echo number_format($grand_total, 0,",","."); ?></b></td>
      <td colspan="4" align="right">
      <!-- <form method="post" action="<?php echo base_url()?>keranjang/hapus/all">
      
    </form> -->
    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal">Kosongkan Cart</button>
        <button class='btn btn-sm btn-success'  type="submit">Update Cart</button>
        <a href="<?php echo base_url()?>keranjang/check_out"  class ='btn btn-sm btn-primary'>Check Out</a>
    </tr>

</table>
<?php
		}
	else
		{
			echo "<h3>Keranjang Belanja masih kosong</h3>";	
		}	
?>
        </form>
>>>>>>> 840bc560db42e5f702710d657a60fe2550ebbdba
      </div>
  </div>
  <!-- end detail keranjang -->
  
</div>
</div>