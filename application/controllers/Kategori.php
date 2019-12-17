<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['judul'] = 'List of Kategori';
        $this->load->model('Kategori_model', 'kategori');
        
        $this->load->library('pagination');
        
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        }else{
            $data['keyword'] = $this->session->userdata('keyword');
        }
        
        $this->db->like('kategoriBaju', $data['keyword']);
        $this->db->from('kategori');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 8;
        
        $this->pagination->initialize($config);
        
        $data['start'] = $this->uri->segment(3);
        $data['kategori'] = $this->kategori->getKategori($config['per_page'], $data['start'], $data['keyword']);
        $data['jeniskelamin'] = $this->db->get('jeniskelamin')->num_rows();
        $data['jeniskelamin'] = $this->kategori->getAllJenisKelamin();
        $data['jeniskelaminL'] = $this->kategori->countJenisLaki2();
        $data['jeniskelaminP'] = $this->kategori->countJenisPerempuan();
        // $data['kategori'] = $this->kategori->getAllKategori();
        // $data['kategori'] = $this->kategori->getKategoriById($idKategoriBaju);
        
        // Tambah Data
        $this->form_validation->set_rules('idJenisKelamin', 'IdJenisKelamin' , 'required');
        $this->form_validation->set_rules('kategoriBaju', 'KategoriBaju' , 'required');
        
                if ($this->form_validation->run() == FALSE) {
                    $this->load->view('template/header_admin' );
                    $this->load->view('template/sidebar_admin' );
                    $this->load->view('kategori/index', $data);
                    $this->load->view('template/footer_admin' );
                }else{
                    $this->Kategori_model->tambahDataKategori();
                    // $this->Kategori_model->ubahDataKategori();
                    $this->session->set_flashdata('flash', 'Ditambahkan Diubah');
                    redirect('kategori');
                }
        // akhir tambah
    }

    public function logout(){
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
                redirect('auth');
    }

    public function hapus($idKategoriBaju){
        $this->Kategori_model->hapusDataKategori($idKategoriBaju);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kategori');
    }

    public function ubah($idKategoriBaju){
        $data['judul'] = 'Form Ubah Data kategori';
        $data['kategori'] = $this->Kategori_model->getkategoriById($idKategoriBaju);
       

        $this->form_validation->set_rules('idJenisKelamin', 'IdJenisKelamin' , 'required');
        $this->form_validation->set_rules('kategoriBaju', 'KategoriBaju' , 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header_admin' );
            $this->load->view('template/sidebar_admin' );
            $this->load->view('kategori/ubah', $data);
            $this->load->view('template/footer_admin' );
        }else{
            $this->Kategori_model->ubahDataKategori();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kategori');
        }
    }
}
