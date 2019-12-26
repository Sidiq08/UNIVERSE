<?php 

class Keranjang extends CI_Controller{

        public function __construct()
	{	
		parent::__construct();
		
		$this->load->model('produk_model');
        }
        
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
        $this->session->set_flashdata('flash',' Ditambahkan');
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

        public function konfirmasi()
	{
	        $data['title'] = 'Konfirmasi Universe';
              $this->load->view('template/header', $data);
              $this->load->view('keranjang/konfirmasi', $data);
              $this->load->view('template/footer');
        }
        
        public function proses_order()
	{

                $this->form_validation->set_rules('nama','nama','required');
                $this->form_validation->set_rules('alamat','alamat','required');
                $this->form_validation->set_rules('email','email','required|valid_email');
                $this->form_validation->set_rules('telpon','telpon','required');

                if ($this->form_validation->run() == FALSE) {
                        $this->load->view('template/header');
                        $this->load->view('keranjang/check_out');
                        $this->load->view('template/footer');      
                  }else {
                        //-------------------------Input data pembeli--------------------------
		$data_pembeli = array('nama' => $this->input->post('nama'),
							'email' => $this->input->post('email'),
							'alamat' => $this->input->post('alamat'),
							'telpon' => $this->input->post('telpon'));
                $id_pembeli = $this->produk_model->tambah_pembeli($data_pembeli);
                
		//-------------------------Input data transaksi------------------------------
		$data_order = array('tanggal_transaksi' => date('Y-m-d'),
					   		'pembeli' => $id_pembeli);
                $id_order = $this->produk_model->tambah_order($data_order);
                
		//-------------------------Input data detail transaksi-----------------------		
		if ($cart = $this->cart->contents())
			{
				foreach ($cart as $item)
					{
					$data_detail = array('id' =>$id_order,
									'id_produk' => $item['id'],
									'qty' => $item['qty'],
									'harga' => $item['price']);			
					$proses = $this->produk_model->tambah_detail_order($data_detail);
					}
                        }
                        
		//-------------------------Hapus keranjang otomatis setelah berhasil order--------------------------		
		$this->cart->destroy();
		$data['produk'] = $this->produk_model->get_produk_all();
		$this->load->view('template/header', $data);
                $this->load->view('home/index', $data);
                $this->load->view('template/footer');
                  }

		
	}
      
     
      
  }



?>