<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warna extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Warna_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['judul'] = 'List of warna';
        $this->load->model('Warna_model', 'warna');
        
        $this->load->library('pagination');
        
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        }else{
            $data['keyword'] = $this->session->userdata('keyword');
        }
        
        $this->db->like('warnaBaju', $data['keyword']);
        $this->db->from('warna');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 8;
        
        $this->pagination->initialize($config);
        
        $data['start'] = $this->uri->segment(3);
        $data['warna'] = $this->warna->getwarna($config['per_page'], $data['start'], $data['keyword']);
        // $data['warna'] = $this->warna->getAllwarna();
        // $data['warna'] = $this->warna->getwarnaById($idwarnaBaju);
        
        // Tambah Data
        $this->form_validation->set_rules('idWarnaBaju', 'idWarnaBaju' , 'required');
        $this->form_validation->set_rules('warnaBaju', 'warnaBaju' , 'required');
        
                if ($this->form_validation->run() == FALSE) {
                    $this->load->view('template/header_admin' );
                    $this->load->view('template/sidebar_admin' );
                    $this->load->view('warna/index', $data);
                    $this->load->view('template/footer_admin' );
                }else{
                    $this->warna_model->tambahDataWarna();
                    // $this->warna_model->ubahDatawarna();
                    $this->session->set_flashdata('flash', 'Ditambahkan Diubah');
                    redirect('warna');
                }
        // akhir tambah
    }

    public function logout(){
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
                redirect('auth');
    }

    public function hapus($idWarnaBaju){
        $this->warna_model->hapusDataWarna($idWarnaBaju);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('warna');
    }

    public function ubah($idWarnaBaju){
        $data['judul'] = 'Form Ubah Data warna';
        $data['warna'] = $this->warna_model->getWarnaById($idWarnaBaju);
       

        $this->form_validation->set_rules('idWarnaBaju', 'idWarnaBaju' , 'required');
        $this->form_validation->set_rules('warnaBaju', 'warnaBaju' , 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header_admin' );
            $this->load->view('template/sidebar_admin' );
            $this->load->view('warna/ubah', $data);
            $this->load->view('template/footer_admin' );
        }else{
            $this->warna_model->ubahDataWarna();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('warna');
        }
    }
}
