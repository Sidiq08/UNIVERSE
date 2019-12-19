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
    
        $data['kategori'] = $this->kategori->getAllKategori();
        $data['jeniskelamin'] = $this->db->get('jeniskelamin')->num_rows();
        $data['jeniskelamin'] = $this->kategori->getAllJenisKelamin();
        $data['jeniskelaminL'] = $this->kategori->countJenisLaki2();
        $data['jeniskelaminP'] = $this->kategori->countJenisPerempuan();
        // $data['kategori'] = $this->kategori->getAllKategori();
        // $data['kategori'] = $this->kategori->getKategoriById($idKategoriBaju);
                    $this->load->view('template/header_admin' );
                    $this->load->view('template/sidebar_admin' );
                    $this->load->view('kategori/index', $data);
                    $this->load->view('template/footer_admin' );
    }

    public function logout(){
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
                redirect('auth');
    }

    public function tambah(){
        // Tambah Data
        $data['judul'] = 'Tambah of Kategori';
        $this->form_validation->set_rules('idJenisKelamin', 'IdJenisKelamin' , 'required');
        $this->form_validation->set_rules('kategoriBaju', 'KategoriBaju' , 'required');
        
                if ($this->form_validation->run() == FALSE) {
                    $this->load->view('template/header_admin' );
                    $this->load->view('template/sidebar_admin' );
                    $this->load->view('kategori/tambah', $data);
                    $this->load->view('template/footer_admin' );
                }else{
                    $this->Kategori_model->tambahDataKategori();
                    $this->session->set_flashdata('flash', 'Ditambahkan Diubah');
                    redirect('kategori');
                }
        // akhir tambah
    }

    public function hapus($idKategoriBaju){
        $this->Kategori_model->hapusDataKategori($idKategoriBaju);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kategori');
    }

    public function getData(){
        $id = $this->input->get('id');
        $data = $this->Kategori_model->getkategoriById($id);

        echo json_encode(['status' => 202, 'list'=>$data]);
        return true;
    }

    public function ubah($idKategoriBaju){
        $data['kategori'] = $this->Kategori_model->getkategoriById($idKategoriBaju);

        $this->form_validation->set_rules('idJenisKelamin', 'IdJenisKelamin' , 'required');
        $this->form_validation->set_rules('kategoriBaju', 'KategoriBaju' , 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header_admin' );
            $this->load->view('template/sidebar_admin' );
            $this->load->view('kategori/ubah', $data);
            $this->load->view('template/footer_admin' );
        }else{
            $aa = $this->Kategori_model->ubahDataKategori();
            // var_dump("return con + ".$aa);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kategori');
        }

}
}