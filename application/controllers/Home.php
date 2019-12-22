<?php

class Home extends CI_Controller{
        public function __construct()
	{	
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('produk_model');
	}


        public function index(){
                $data['judul'] = 'Halaman Home';
                $data['produk'] = $this->Produk_model->get_produk_all()->result();
                $this->load->view('template/header', $data);
                $this->load->view('home/index', $data);
                $this->load->view('template/footer');
            
    }

        public function tambah_ke_keranjang($id){
        $produk = $this->Produk_model->find($id);

        $data = array(
            'id'      => $produk->id_baju,
            'qty'     => 1,
            'price'   => $produk->harga_baju,
            'name'    => $produk->nama_baju
        //     'options' => array('image' => $produk->nama_baju)
            
            
    );
    
    $this->cart->insert($data);
    redirect('home');
    }

    public function detail_keranjang(){
       
            $this->load->view('template/header');
            $this->load->view('cart/index');
            $this->load->view('template/footer');
    }
}