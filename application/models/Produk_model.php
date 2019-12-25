<?php 

class Produk_model extends CI_Model {
      public function get_produk_all(){
           return $query = $this->db->get('produk-baju')->result_array();
           
      }

      public function get_produk_id($id)
      {
            return $this->db->get_where('produk-baju', ['id_baju' => $id]);
      }
      
      public function tambah_pembeli($data)
	{
		$this->db->insert('tbl_pembeli', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	public function tambah_order($data)
	{
		$this->db->insert('tbl_transaksi', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	public function tambah_detail_order($data)
	{
		$this->db->insert('tbl_detail_transaksi', $data);
	}
     
}
?>