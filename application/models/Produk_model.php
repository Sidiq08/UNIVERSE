<?php 

class Produk_model extends CI_Model {
      public function get_produk_all(){
           return $query = $this->db->get('produk-baju')->result_array();
           
      }

      public function get_produk_id($id)
      {
            return $this->db->get_where('produk-baju', ['id_baju' => $id]);
      }	
     
}
?>