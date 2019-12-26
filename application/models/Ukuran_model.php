<?php

class Warna_model extends CI_Model
{

    public function getAllWarna()
    {
        $this->db->select('*');
        $this->db->from('warna');

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


    public function countAllWarna()
    {
        return $this->db->get('warna')->num_rows();
    }

    public function tambahDataWarna()
    {
        $data = [
            'warnaBaju' => $this->input->post('warnaBaju', true)
        ];
        $this->db->insert('warna', $data);
    }

    public function ubahDataWarna()
    {
        $data = [
            'warnaBaju' => $this->input->post('warnaBaju', true)
        ];
        $this->db->where('idWarnaBaju', $this->input->post('idWarnaBaju'));
        $this->db->update('warna', $data);
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

    public function hapusDataWarna($idWarnaBaju)
    {
        $this->db->delete('warna', ['idWarnaBaju' => $idWarnaBaju]);
    }

    public function getWarnaById($idWarnaBaju)
    {
        return $this->db->get_where('warna', ['idWarnaBaju' => $idWarnaBaju])->row_array();
    }


    // public function cariDataKategori(){
    //     $keyword = $this->input->post('keyword',true);
    //     $this->db->like('name', $keyword);
    //     $this->db->or_like('address', $keyword);
    //     $this->db->or_like('email', $keyword);
    //     return $this->db->get('kategori')->result_array();
    // }
}
