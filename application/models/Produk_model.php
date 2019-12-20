<?php 

class Produk_model extends CI_Model {
      public function get_produk_all(){
            $query = $this->db->get('produk-baju');
		return $query;
      }

//       public  function get_produk_id($id)
// 	{
// 		$this->db->select('produk-baju.*');
// 		$this->db->from('produk-baju');
//    		$this->db->where('id_produk',$id);
//         return $this->db->get();
//     }	
      public function find($id) {
            $result = $this->db->where('id_baju', $id)
                              ->limit(1)
                              ->get('produk-baju');
            if ($result->num_rows() > 0) {
                  return $result->row();
            }else{
                  return array();
            }
      }
}
?>