<?php

class Ukuran_model extends CI_Model
{

    public function getAllUkuran()
    {
        $this->db->select('*');
        $this->db->from('ukuran');

        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    // public function getKategori($limit, $start, $keyword = null){
    //     // if ($keyword) {
    //     //     $this->db->like('kategoriBaju',$keyword);
    //     // }
    //     $query = "SELECT `kategori`.*, `jeniskelamin`.* FROM `kategori` JOIN `jeniskelamin` ON `kategori`.`idJenisKelamin`=`jeniskelamin`.`idJenisKelamin`";
    //     return $this->db->query($query)->result_array();
    // }


    public function countAllUkuran()
    {
        return $this->db->get('warna')->num_rows();
    }

    public function tambahDataUkuran()
    {
        $data = [
            'ukuranBaju' => $this->input->post('ukuranBaju', true)
        ];
        $this->db->insert('ukuran', $data);
    }

    public function ubahDataWarna()
    {
        $data = [
            'ukuranBaju' => $this->input->post('ukuranBaju', true)
        ];
        $this->db->where('idUkuran', $this->input->post('idUkuran'));
        $this->db->update('ukuran', $data);
    }

    public function ubahDataKategori()
    {
        $data = [
            'idJenisKelamin' => $this->input->post('idJenisKelamin', true),
            'kategoriBaju' => $this->input->post('kategoriBaju', true)
        ];

        $this->db->where('idKategoriBaju', $this->input->post('idKategoriBaju'));
        $qq = $this->db->update('kategori', $data);
        var_dump("return model  =" . $qq);
    }

    public function hapusDataUkuran($idUkuran)
    {
        $this->db->delete('warna', ['idWarnaBaju' => $idWarnaBaju]);
    }

    public function getUkuranById($idUkuran)
    {
        return $this->db->get_where('ukuran', ['idUkuran' => $idUkuran])->row_array();
    }


    // public function cariDataKategori(){
    //     $keyword = $this->input->post('keyword',true);
    //     $this->db->like('name', $keyword);
    //     $this->db->or_like('address', $keyword);
    //     $this->db->or_like('email', $keyword);
    //     return $this->db->get('kategori')->result_array();
    // }
}
