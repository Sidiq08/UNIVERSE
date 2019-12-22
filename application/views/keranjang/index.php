<div class="bg-light y-3 my-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="<?= base_url();?>/Home" class="text-success">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>
</div> 

<div class="container">
  <div class="row justify-content-between" style="margin-bottom: 100px;">
    <div class="col-12">
     <h2>Daftar Belanja</h2>
        <form action="<?php echo base_url()?>keranjang/ubah_cart" method="post" name="frmShopping" id="frmShopping" class="form-horizontal" enctype="multipart/form-data">
<?php
	if ($cart = $this->cart->contents())
		{
 ?>

<table class="table">
  <tr id= "main_heading">
    <td width="2%">No</td>
    <td width="10%">Gambar</td>
    <td width="33%">Item</td>
    <td width="17%">Harga</td>
    <td width="10%">Qty</td>
    <td width="20%">Jumlah</td>
    <td width="8%">Hapus</td>
  </tr>
<?php
// Create form and send all values in "shopping/update_cart" function.
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
      <td><img class="img-responsive" src="<?= $item['gambar']; ?>"/></td>
      <td><?php echo $item['name']; ?></td>
      <td><?php echo number_format($item['price'], 0,",","."); ?></td>
      <td><input type="text" class="form-control input-sm" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" /></td>
      <td><?php echo number_format($item['subtotal'], 0,",",".") ?></td>
      <td><a href="<?php echo base_url()?>keranjang/hapus/<?php echo $item['rowid'];?>" class="btn btn-sm btn-danger tombol-hapus"><i class="fas fa-minus-circle"></i></a></td>
<?php endforeach; ?>
    </tr>
    <tr>
      <td colspan="3"><b>Order Total: Rp <?php echo number_format($grand_total, 0,",","."); ?></b></td>
      <td colspan="4" align="right">
      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal">
      Hapus semua keranjang
      </button>
      <button class='btn btn-sm btn-success'  type="submit">Update Cart</button>
      <a href="<?php echo base_url()?>shopping/check_out"  class ='btn btn-sm btn-primary'>Check Out</a>
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
  <!-- Modal Hapus Semua Keranjang -->

 
  <!--End Modal-->

  <!-- <div class="row mb-2"></div> -->
  <div class="col-lg-5">
          <div class="card rounded-0 checkout-detail">
            <div class="card-body">
              <h5 class="card-title">Subs Total</h5>
              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Celana Cotton</h6>
                  <small style="color: #B7B7B7;">3 Items</small>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">$147</h6>
                </div>
              </div>
              

              <hr>

              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Courier</h6>
                  <small style="color: #B7B7B7;">JNT Express</small>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">$10</h6>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Tax</h6>
                  <small style="color: #B7B7B7;">Country 20%</small>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">$20</h6>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Total</h6>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-primary">$128</h6>
                </div>
              </div>
          </div>
</div>
</div>
<div class="row">
  <div class="col-12">
  <h4 class="mt-4 mr-3">Your Address</h4>
            
            <form>
          <div class="form-row">
            <div class="col-6 mb-3">
              <label for="validationServer01">First name</label>
              <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationServer02">Last name</label>
              <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-12 mb-3">
            <label for="validationServer03">Address</label>
              <input type="text" class="form-control is-invalid" id="validationServer03" required>
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-6 mb-3">
              <label for="validationServer03">City</label>
              <input type="text" class="form-control is-invalid" id="validationServer03" required>
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>
            <div class="col-6 mb-3">
              <label for="validationServer04">State</label>
              <select class="custom-select is-invalid" id="validationServer04" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
              <label class="form-check-label" for="invalidCheck3">
                Agree to terms and conditions
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
  </div>
</div>
</div>


  
  <!-- ss -->

  
  

   <!-- <div class="site-section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr class="text-center text-bold">
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="<?= base_url();?>assets/img/celana1.jpg" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      Celana Kurang keceh
                    </td>
                    <td>$49.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 155px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>$49.00</td>
                    <td><a href="#" class="btn btn-primary height-auto btn-sm ml-3">X</a></td>
                  </tr>

                  <tr>
                    <td class="product-thumbnail">
                      <img src="<?= base_url();?>assets/img/celana1.jpg" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Celana Keceeeh</h2>
                    </td>
                    <td>$49.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>$49.00</td>
                    <td><a href="#" class="btn btn-primary height-auto btn-sm ml-3">X</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-5">
          <h4 class="mb-3" style="">Your Address</h4>

<form>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Alamat lengkap">
  </div>
  <div class="form-group">
    <label for="address2">Address II</label>
    <input type="text" class="form-control" id="address2" placeholder="Alamat tambahan">
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <select class="custom-select">
      <option selected>Select City</option>
      <option value="1">Bandung</option>
      <option value="2">Jakarta</option>
      <option value="3">Surabaya</option>
    </select>
  </div>
  <div class="form-group">
    <label for="country">Country</label>
    <select class="custom-select">
      <option selected>Select Country</option>
      <option value="1">Indonesia</option>
      <option value="2">Malaysia</option>
      <option value="3">Singapore</option>
    </select>
  </div>
</form>
</div>
        </div>
        </div>

        <div class="row">
        <div class="col-5">
          dwojao
        </div>
        </div>

        

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-sm btn-block">Update Cart</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</button>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div> -->
              <!-- <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-sm px-4">Apply Coupon</button>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 my-3">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>