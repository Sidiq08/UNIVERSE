<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ukuran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ukuran_model');
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['judul'] = 'List of Ukuran';
        $this->load->model('Ukuran_model', 'ukuran');

        $data['ukuran'] = $this->ukuran->getAllUkuran();
        $data['JumlahUkuran'] = $this->ukuran->countAllUkuran();
        // $data['kategori'] = $this->kategori->getAllKategori();
        // $data['kategori'] = $this->kategori->getKategoriById($idKategoriBaju);
        // Tambah Data
        $this->form_validation->set_rules('UkuranBaju', 'UkuranBaju', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header_admin');
            $this->load->view('template/sidebar_admin');
            $this->load->view('ukuran/index_ukuran', $data);
            $this->load->view('template/footer_admin');
        } else {
            $this->Ukuran->tambahDataUkuran();
            $this->session->set_flashdata('flash', 'Ditambahkan Ukuran');
            redirect('ukuran');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }

    public function hapus($idUkuran)
    {
        $this->Ukuran_model->hapusDataUkuran($idUkuran);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('ukuran');
    }

    public function getData()
    {
        $id = $this->input->get('id');
        $data = $this->ukuran_model->getUkuraById($id);

        echo json_encode(['status' => 202, 'list' => $data]);
        return true;
    }

    public function ubah($idWarnaBaju)
    {
        $data['ukuran'] = $this->Ukuran_model->getUkuranById($idWarnaBaju);

        // $idWarnaBaju = $this->input->post('idWarnaBaju');
        // $warnaBaju = $this->input->post('warnaBaju');
        // $data['JumlahWarna'] = $this->warna_model->countAllWarna();
        // $data['warna'] = $this->warna_model->getAllWarna();

        $this->form_validation->set_rules('UkuranBaju', 'UkuranBaju', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header_admin');
            $this->load->view('template/sidebar_admin');
            $this->load->view('ukuran/ubah_ukuran', $data);
            $this->load->view('template/footer_admin');
        } else {
            $data = $this->Warna_model->ubahDataWarna();
            // var_dump($data);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('ukuran');
            // echo json_encode($data);
        }
    }
}
