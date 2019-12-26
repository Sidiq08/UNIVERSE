<?php

class Pembeli_model extends CI_Model
{

    public function getAllPembeli()
    {
        $this->db->select('*');
        $this->db->from('kategori');
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

    public function countPembeli()
    {
        $query = "SELECT `pembeli`.* FROM `pembeli` WHERE `id_Pembeli` = 2";
        return $this->db->query($query)->num_rows();
    }

    public function tambahDataKategori()
    {
        $data = [
            'idJenisKelamin' => $this->input->post('idJenisKelamin', true),
            'kategoriBaju' => $this->input->post('kategoriBaju', true)
        ];
        $this->db->insert('kategori', $data);
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

    public function hapusDataKategori($idKategoriBaju)
    {
        $this->db->delete('kategori', ['idKategoriBaju' => $idKategoriBaju]);
    }

    public function getKategoriById($idKategoriBaju)
    {
        return $this->db->get_where('kategori', ['idKategoriBaju' => $idKategoriBaju])->row_array();
    }


    // public function cariDataKategori(){
    //     $keyword = $this->input->post('keyword',true);
    //     $this->db->like('name', $keyword);
    //     $this->db->or_like('address', $keyword);
    //     $this->db->or_like('email', $keyword);
    //     return $this->db->get('kategori')->result_array();
    // }
}
