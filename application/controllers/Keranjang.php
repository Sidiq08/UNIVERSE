<?php 

class Keranjang extends CI_Controller{
      public function index(){
              $data['title'] = 'Cart Universe';
              $this->load->view('template/header', $data);
              $this->load->view('keranjang/index', $data);
              $this->load->view('template/footer');
              
      }


      public function tambah_ke_keranjang(){
        $data_produk= array('id' => $this->input->post('id'),
        'name' => $this->input->post('nama'),
        'price' => $this->input->post('harga'),
        'gambar' => $this->input->post('gambar'),
        'qty' =>$this->input->post('qty')
       );
        $this->cart->insert($data_produk);
        redirect('home');
}

      public function ubah_cart()
      {
              $cart_info = $_POST['cart'] ;
              foreach( $cart_info as $id => $cart)
              {
                      $rowid = $cart['rowid'];
                      $price = $cart['price'];
                      $gambar = $cart['gambar'];
                      $amount = $price * $cart['qty'];
                      $qty = $cart['qty'];
                      $data = array('rowid' => $rowid,
                                                      'price' => $price,
                                                      'gambar' => $gambar,
                                                      'amount' => $amount,
                                                      'qty' => $qty);
                      $this->cart->update($data);
              }
              redirect('keranjang');
      }

      public function hapus($rowid) 
	{
		// if ($rowid =="all")
		// 	{
		// 		$this->cart->destroy();
		// 	}
		// else
			
				$data = array('rowid' => $rowid,
			  				  'qty' =>0);
				$this->cart->update($data);
			
		redirect('keranjang');
        }

        public function hapus_all()
        {
                $this->cart->destroy();
                redirect('keranjang');
        }
        
        
        public function check_out()
	{
	        $data['title'] = 'Check Out Universe';
              $this->load->view('template/header', $data);
              $this->load->view('keranjang/check_out', $data);
              $this->load->view('template/footer');
	}
      
     
      
  }



?>