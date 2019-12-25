<div class="bg-light y-3 my-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><hr><hr><hr><hr><a href="<?= base_url();?>/Home" class="text-success">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>
</div>

<!-- Detail Keranjang  -->
<div class="container">
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
    <td width="8%">Hapus</td>
  </tr>
<?php

    $grand_total = 0;
    $i = 1;

foreach ($cart as $item):
    $grand_total = $grand_total + $item['subtotal'];
?>
    <input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
    <input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
    <input type="hidden" name="cart[<?php echo $item['id'];?>][name]" value="<?php echo $item['name'];?>" />
    <input type="hidden" name="cart[<?php echo $item['id'];?>][price]" value="<?php echo $item['price'];?>" />
    <input type="hidden" name="cart[<?php echo $item['id'];?>][gambar]" value="<?php echo $item['gambar'];?>" />
    <input type="hidden" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" />
      <tr>
        <td><?php echo $i++; ?></td>
        <td><img class="img-fluid" src="<?= base_url() . 'assets/img/model/' . $item['gambar']; ?>"/></td>
        <td><?php echo $item['name']; ?></td>
        <td><?php echo number_format($item['price'], 0,",","."); ?></td>
        <td>
        <!-- <input type="text" class="form-control input-sm" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" /> -->
        <input type="text" class="form-control input-sm" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" >
        </td>
        <td><?php echo number_format($item['subtotal'], 0,",",".") ?></td>
        <td><a href="<?php echo base_url()?>keranjang/hapus/<?php echo $item['rowid'];?>" class="btn btn-sm btn-danger tombol-hapus">
        <i class="fas fa-minus-circle"></i></a></td>
<?php endforeach; ?>
      </tr>
    <tr>
      <td colspan="3"><b>Order Total: Rp <?php echo number_format($grand_total, 0,",","."); ?></b></td>
      <td colspan="4" align="right">
      <form method="post" action="<?php echo base_url()?>keranjang/hapus/all">
      <!-- <a data-toggle="modal" data-target="#myModal"  class ='btn btn-sm btn-danger'>Kosongkan Cart</a> -->
      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal">Kosongkan Cart</button>
      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Launch static backdrop modal
</button> -->
      <!-- <button type="post" class="btn btn-sm btn-danger" action="<?php echo base_url()?>keranjang/hapus_all">Kosongkan Cart</button> -->
      <!-- <a href="<?php echo base_url()?>keranjang/hapus_all"  class ='btn btn-sm btn-danger'>Kosongkan Keranjang</a> -->
    </form>
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
      </div>
  </div>
  <!-- end detail keranjang -->
  
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <!-- Modal content-->
      <div class="modal-content">
      	<form method="post" action="<?php echo base_url()?>keranjang/hapus_all">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kosongkan Keranjang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
			Apakah anda yakin akan mengosongkan keranjang anda ?
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="button" class="btn btn-primary">Ya</button>
          
        </div>
        
        </form>
      </div>
      
    </div>
  </div>
  <!--End Modal-->