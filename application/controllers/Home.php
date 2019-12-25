<?php

class Home extends CI_Controller{
        public function __construct()
	{	
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('produk_model');
	}


        public function index(){
                $this->load->model('Produk_model');
                $data['judul'] = 'Halaman Home';
                $data['produk'] = $this->Produk_model->get_produk_all();
                $this->load->view('template/header', $data);
                $this->load->view('home/index', $data);
                $this->load->view('template/footer');
            
    }

        

    public function detail_keranjang(){
        $data['produk'] = $this->Produk_model->get_produk_all();
            $this->load->view('template/header', $data);
            $this->load->view('keranjang/index', $data);
            $this->load->view('template/footer');
    }

    public function detail_produk()
	{
		$id=($this->uri->segment(3));
		$data['produk'] = $this->Produk_model->get_produk_all();
		$data['detail'] = $this->Produk_model->get_produk_id($id)->row_array();
		$this->load->view('template/header', $data);
                $this->load->view('home/detail', $data);
                $this->load->view('template/footer');
        }
        
       
        
        
}