<?php

class Warna_model extends CI_Model{
    
    public function getAllWarna(){
        $this->db->select('*');
        $this->db->from('warna');   
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

    public function getwarna($limit, $start, $keyword = null){
        if ($keyword) {
            $this->db->like('warnaBaju',$keyword);
        }
        $query = "SELECT `warna`.* FROM `warna`";
        return $this->db->query($query)->result_array();
    }


    public function getAllJenisKelamin(){
        return $this->db->get('jeniskelamin')->result_array();
    }

    public function countAllwarna(){
        return $this->db->get('warna')->num_rows();
    }
    public function countJenisLaki2(){
        $query = "SELECT `warna`.* FROM `warna` WHERE `idJenisKelamin` = 1";
        return $this->db->query($query)->num_rows();
    }
    public function countJenisPerempuan(){
        $query = "SELECT `warna`.* FROM `warna` WHERE `idJenisKelamin` = 2";
        return $this->db->query($query)->num_rows();
    }

    public function tambahDatawarna(){
        $data= [
            'idJenisKelamin' => $this->input->post('idJenisKelamin',true),
            'warnaBaju' => $this->input->post('warnaBaju',true)
        ];
        $this->db->insert('warna',$data);
    }

    public function hapusDatawarna($idwarnaBaju){
        $this->db->delete('warna', ['idwarnaBaju' => $idwarnaBaju]);
    }

    public function getwarnaById($idwarnaBaju){
        return $this->db->get_where('warna', ['idwarnaBaju' => $idwarnaBaju ])->row_array();
    }

    public function ubahDatawarna(){
        $data= [
            'idJenisKelamin' => $this->input->post('idJenisKelamin',true),
            'warnaBaju' => $this->input->post('warnaBaju',true)
        ];

        $this->db->where('idwarnaBaju', $this->input->post('idwarnaBaju'));
        $this->db->update('warna',$data);
    }

    // public function cariDatawarna(){
    //     $keyword = $this->input->post('keyword',true);
    //     $this->db->like('name', $keyword);
    //     $this->db->or_like('address', $keyword);
    //     $this->db->or_like('email', $keyword);
    //     return $this->db->get('warna')->result_array();
    // }
}