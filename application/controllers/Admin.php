<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  Admin extends CI_Controller{
        public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');

    }

    public function index(){
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();

        $this->load->view('template/header_admin',$data);
        $this->load->view('template/sidebar_admin',$data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer_admin');
    }


    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
                redirect('auth');
    }


 public function Ubah()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        if ($this->form_validation->run() == false) 
        {
        $this->load->view('template/header_admin',$data);
        $this->load->view('template/sidebar_admin',$data);
        $this->load->view('admin/ubah', $data);
        $this->load->view('template/footer_admin');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];
          if ($upload_image)
          {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) 
                {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                    } else {
                    echo $this->upload->display_errors();
                } 
            }
            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('admin');
        }
    }



}