<?php
class Warna extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('warna_model');
    }
    function index()
    {

        $this->load->view('warna_view');
    }

    function warna_data()
    {
        $data = $this->warna_model->warna_list();
        echo json_encode($data);
    }

    function save()
    {
        $data = $this->warna_model->save_warna();
        echo json_encode($data);
    }

    function update()
    {
        $data = $this->warna_model->update_warna();
        echo json_encode($data);
    }

    function delete()
    {
        $data = $this->warna_model->delete_warna();
        echo json_encode($data);
    }
}
