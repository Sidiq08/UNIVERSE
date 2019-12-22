<?php
class Warna_model extends CI_Model
{

    function warna_list()
    {
        $hasil = $this->db->get('warna_baju_produk');
        return $hasil->result();
    }

    function save_warna()
    {
        $data = array(
            'id_warna_baju' => $this->input->post('id_warna_baju'),
            'warna_baju'     => $this->input->post('warna_baju'),
        );
        $result = $this->db->insert('warna_baju_produk', $data);
        return $result;
    }

    function update_warna()
    {
        $id_warna_baju = $this->input->post('id_warna_baju');
        $warna_baju = $this->input->post('warna_baju');

        $this->db->set('warna_baju', $warna_baju);
        $this->db->where('id_warna_baju', $id_warna_baju);
        $result = $this->db->update('warna_baju_produk');
        return $result;
    }

    function delete_warna()
    {
        $id_warna_baju = $this->input->post('id_warna_baju');
        $this->db->where('id_warna_baju', $id_warna_baju);
        $result = $this->db->delete('warna_baju_produk');
        return $result;
    }
}
