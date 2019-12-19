<?php

class Kategori_model extends CI_Model{
    
    public function getAllKategori(){
        $this->db->select('*');
        $this->db->from('kategori a'); 
        $this->db->join('jeniskelamin b', 'b.idJenisKelamin=a.idJenisKelamin', 'left');       
        $query = $this->db->get(); 
        if($query->num_rows() != 0)
        {
            return $query->result_array();
        }
        else
        {
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


    public function getAllJenisKelamin(){
        return $this->db->get('jeniskelamin')->result_array();
    }

    public function countAllkategori(){
        return $this->db->get('kategori')->num_rows();
    }
    public function countJenisLaki2(){
        $query = "SELECT `kategori`.* FROM `kategori` WHERE `idJenisKelamin` = 1";
        return $this->db->query($query)->num_rows();
    }
    public function countJenisPerempuan(){
        $query = "SELECT `kategori`.* FROM `kategori` WHERE `idJenisKelamin` = 2";
        return $this->db->query($query)->num_rows();
    }

    public function tambahDataKategori(){
        $data= [
            'idJenisKelamin' => $this->input->post('idJenisKelamin',true),
            'kategoriBaju' => $this->input->post('kategoriBaju',true)
        ];
        $this->db->insert('kategori',$data);
    }
    
    public function ubahDataKategori(){
        $data= [
            'idJenisKelamin' => $this->input->post('idJenisKelamin',true),
            'kategoriBaju' => $this->input->post('kategoriBaju',true)
        ];

        $this->db->where('idKategoriBaju', $this->input->post('idKategoriBaju'));
        $qq = $this->db->update('kategori',$data);
        var_dump("return model  =" . $qq);
    }

    public function hapusDataKategori($idKategoriBaju){
        $this->db->delete('kategori', ['idKategoriBaju' => $idKategoriBaju]);
    }

    public function getKategoriById($idKategoriBaju){
        return $this->db->get_where('kategori', ['idKategoriBaju' => $idKategoriBaju ])->row_array();
    }


    // public function cariDataKategori(){
    //     $keyword = $this->input->post('keyword',true);
    //     $this->db->like('name', $keyword);
    //     $this->db->or_like('address', $keyword);
    //     $this->db->or_like('email', $keyword);
    //     return $this->db->get('kategori')->result_array();
    // }
}