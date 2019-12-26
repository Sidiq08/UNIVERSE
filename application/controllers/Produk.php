<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'List of Produk';
        $this->load->model('Produk_model', 'produk');

        $data['produk'] = $this->produk->getAllProduk();
        $data['jumlahWarna'] = $this->db->get('warna')->num_rows();
        $data['warna'] = $this->produk->getAllWarna();
        // $data['kategori'] = $this->produk->getAllKategori();
        // $data['ukuran'] = $this->produk->getAllUkuran();

        // $data['kategori'] = $this->db->get('kategori');
        // $data['warna'] = $this->db->get('warna');
        // $data['ukuran'] = $this->db->get('ukuran')->num_rows();
        // Tambah Data
        $this->form_validation->set_rules('namaBaju', 'NamaBaju', 'required');
        $this->form_validation->set_rules('idUkuran', 'Id-ukuran', 'required');
        $this->form_validation->set_rules('idWarna', 'IdWarna', 'required');
        $this->form_validation->set_rules('idKategori', 'IdKategori', 'required');
        $this->form_validation->set_rules('hargaBaju', 'HargaBaju', 'required');
        $this->form_validation->set_rules('stokBaju', 'StokBaju', 'required');
        $this->form_validation->set_rules('gambarBaju', 'GambarBaju', 'required');
        $this->form_validation->set_rules('deskripsiBaju', 'DeskripsiBaju', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header_admin');
            $this->load->view('template/sidebar_admin');
            $this->load->view('produk/index', $data);
            $this->load->view('template/footer_admin');
        } else {
            $this->Produk_model->tambahDataProduk();
            $this->session->set_flashdata('flash', 'Ditambahkan Diubah');
            redirect('produk');
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

    public function hapus($idBaju)
    {
        $this->Produk_model->hapusDataProduk($idBaju);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('produk');
    }

    public function getData()
    {
        $idBaju = $this->input->get('idBaju');
        $data = $this->Produk_model->getProdukById($idBaju);

        echo json_encode(['status' => 202, 'list' => $data]);
        return true;
    }

    public function ubah()
    {
        // $data['kategori'] = $this->Produk_model->getkategoriById();

        // $id = $this->input->post('idBaju');
        // $jenisKelamin = $this->input->post('idJenisKelamin');
        // $kategoriBaju = $this->input->post('kategoriBaju');
        // $namaBaju = $this->input->post('namaBaju', true);
        // $idUkuran = $this->input->post('idUkuran', true);
        // $idWarna = $this->input->post('idWarna', true);
        // $idKategori = $this->input->post('idKategori', true);
        // $hargaBaju = $this->input->post('hargaBaju', true);
        // $stokBaju = $this->input->post('stokBaju', true);
        // $gambarBaju = $this->input->post('gambarBaju', true);
        // $deskripsiBaju = $this->input->post('deskripsiBaju', true);


        $this->form_validation->set_rules('namaBaju', 'NamaBaju', 'required');
        $this->form_validation->set_rules('idUkuran', 'IdUkuran', 'required');
        $this->form_validation->set_rules('idWarna', 'IdWarna', 'required');
        $this->form_validation->set_rules('idKategori', 'IdKategori', 'required');
        $this->form_validation->set_rules('hargaBaju', 'HargaBaju', 'required');
        $this->form_validation->set_rules('stokBaju', 'StokBaju', 'required');
        $this->form_validation->set_rules('gambarBaju', 'GambarBaju', 'required');
        $this->form_validation->set_rules('deskripsiBaju', 'DeskripsiBaju', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header_admin');
            $this->load->view('template/sidebar_admin');
            $this->load->view('index_produk');
            $this->load->view('template/footer_admin');
        } else {
            $data = $this->Produk_model->ubahDataProduk();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('index_produk');
            // echo json_encode($data);
        }
    }

    public function detail($idBaju)
    {

        $data['judul'] = 'Detail Data Mahasiswa';
        $data['produk'] = $this->Produk_model->getProdukById($idBaju);
        // $data['produka'] = $this->Produk_model->getAllProduk();
        $data['warna'] = $this->Produk_model->getAllWarna();
        $this->load->view('template/header_admin');
        $this->load->view('template/sidebar_admin');
        $this->load->view('produk/detail_produk', $data);
        $this->load->view('template/footer_admin');
    }
}
