<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warna extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Warna_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'List of warna';
        $this->load->model('Warna_model', 'warna');

        $data['warna'] = $this->warna->getAllWarna();
        $data['JumlahWarna'] = $this->warna->countAllWarna();
        // $data['kategori'] = $this->kategori->getAllKategori();
        // $data['kategori'] = $this->kategori->getKategoriById($idKategoriBaju);
        // Tambah Data
        $this->form_validation->set_rules('warnaBaju', 'WarnaBaju', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header_admin');
            $this->load->view('template/sidebar_admin');
            $this->load->view('warna/index_warna', $data);
            $this->load->view('template/footer_admin');
        } else {
            $this->warna->tambahDataWarna();
            $this->session->set_flashdata('flash', 'Ditambahkan Diubah');
            redirect('warna');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }

    public function hapus($idWarnaBaju)
    {
        $this->Warna_model->hapusDataWarna($idWarnaBaju);
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

    public function ubah($idWarnaBaju)
    {
        $data['warna'] = $this->Warna_model->getWarnaById($idWarnaBaju);

        // $idWarnaBaju = $this->input->post('idWarnaBaju');
        // $warnaBaju = $this->input->post('warnaBaju');
        // $data['JumlahWarna'] = $this->warna_model->countAllWarna();
        // $data['warna'] = $this->warna_model->getAllWarna();

        $this->form_validation->set_rules('warnaBaju', 'WarnaBaju', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header_admin');
            $this->load->view('template/sidebar_admin');
            $this->load->view('warna/ubah_warna', $data);
            $this->load->view('template/footer_admin');
        } else {
            $data = $this->Warna_model->ubahDataWarna();
            // var_dump($data);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('warna');
            // echo json_encode($data);
        }
    }
}
