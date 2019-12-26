<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warna extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('warna_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'List of warna';
        $this->load->model('warna_model', 'warna');

        $data['warna'] = $this->warna->getAllWarna();
        $data['jeniskelamin'] = $this->db->get('jeniskelamin')->num_rows();
        $data['jeniskelamin'] = $this->warna->getAllJenisKelamin();
        $data['jeniskelaminL'] = $this->warna->countJenisLaki2();
        $data['jeniskelaminP'] = $this->warna->countJenisPerempuan();
        // $data['kategori'] = $this->kategori->getAllKategori();
        // $data['kategori'] = $this->kategori->getKategoriById($idKategoriBaju);
        // Tambah Data
        $data['judul'] = 'Tambah of warna';
        $this->form_validation->set_rules('idJenisKelamin', 'IdJenisKelamin', 'required');
        $this->form_validation->set_rules('WarnaBaju', 'WarnBaju', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header_admin');
            $this->load->view('template/sidebar_admin');
            $this->load->view('admin/index_warna', $data);
            $this->load->view('template/footer_admin');
        } else {
            $this->warna_model->tambahDataWarna();
            $this->session->set_flashdata('flash', 'Ditambahkan Diubah');
            redirect('warna');
        }
        // akhir tambah
        // $this->load->view('template/header_admin');
        // $this->load->view('template/sidebar_admin');
        // $this->load->view('kategori/index', $data);
        // $this->load->view('template/footer_admin');
    }

    public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }

    public function hapus($idKategoriwarna)
    {
        $this->warna_model->hapusDatawarna($idwarnaBaju);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('warna');
    }

    public function getData()
    {
        $id = $this->input->get('id');
        $data = $this->warna_model->getWarnaById($id);

        echo json_encode(['status' => 202, 'list' => $data]);
        return true;
    }

    public function ubah()
    {
        // $data['kategori'] = $this->Kategori_model->getkategoriById();

        $id = $this->input->post('idWarnaBaju');
        $jenisKelamin = $this->input->post('idJenisKelamin');
        $warnaBaju = $this->input->post('warnaBaju');

        $this->form_validation->set_rules('idJenisKelamin', 'IdJenisKelamin', 'required');
        $this->form_validation->set_rules('warnaBaju', 'warnaBaju', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header_admin');
            $this->load->view('template/sidebar_admin');
            $this->load->view('admin/index_kategori');
            $this->load->view('template/footer_admin');
        } else {
            $data = $this->warna_model->ubahDataWarna();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('admin/index_warna');
            // echo json_encode($data);
        }
    }
}
