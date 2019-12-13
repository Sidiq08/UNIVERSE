<?php 

class Cart extends CI_Controller{
      public function index(){
              $data['title'] = 'Cart Universe';
              $this->load->view('template/header', $data);
              $this->load->view('cart/index', $data);
              $this->load->view('template/footer');
              
      }
  }



?>