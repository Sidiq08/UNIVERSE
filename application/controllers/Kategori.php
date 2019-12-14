<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller{
    public function index(){
        $data['title'] = 'Dashboard | Kategori';
        $data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();

        
        $this->load->view('template/header_admin' );
        $this->load->view('template/sidebar_admin' );
        $this->load->view('kategori/index', $data);
        $this->load->view('template/footer_admin' );
        
    }

    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
                redirect('auth');
    }
}
