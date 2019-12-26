<?php

class Produk_model extends CI_Model
{
	public function get_produk_all()
	{
		return $query = $this->db->get('produk')->result_array();
	}

	public function get_produk_id($id)
	{
		return $this->db->get_where('produk', ['idBaju' => $id]);
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

	public function getAllProduk()
	{
		$this->db->select('*');
		$this->db->from('produk a');
		$this->db->join('warna b', 'b.idWarnaBaju=a.idWarna', 'left');
		$query = $this->db->get();
		if ($query->num_rows() != 0) {
			return $query->result_array();
		} else {
			return false;
		}
	}

	// public function getAllKategori()
	// {
	// 	return $this->db->get('ketegori')->result_array();
	// }
	public function getAllWarna()
	{
		return $this->db->get('warna')->result_array();
	}
	// public function getAllUkuran()
	// {
	// 	return $this->db->get('ukuran')->result_array();
	// }

	// public function countAllkategori()
	// {
	// 	return $this->db->get('kategori')->num_rows();
	// }
	public function countAllWarna()
	{
		return $this->db->get('warna')->num_rows();
	}
	// public function countAllUkuran()
	// {
	// 	return $this->db->get('ukuran')->num_rows();
	// }


	public function tambahDataProduk()
	{
		$data = [
			'namaBaju' => $this->input->post('namaBaju', true),
			'idUkuran' => $this->input->post('idUkuran', true),
			'idWarna' => $this->input->post('idWarna', true),
			'idKategori' => $this->input->post('idKategori', true),
			'hargaBaju' => $this->input->post('hargaBaju', true),
			'stokBaju' => $this->input->post('stokBaju', true),
			'gambarBaju' => $this->input->post('gambarBaju', true),
			'deskripsiBaju' => $this->input->post('deskripsiBaju', true)
		];
		$this->db->insert('produk', $data);
	}

	public function ubahDataProduk()
	{
		$data = [
			'namaBaju' => $this->input->post('namaBaju', true),
			'idUkuran' => $this->input->post('idUkuran', true),
			'idWarna' => $this->input->post('idWarna', true),
			'idKategori' => $this->input->post('idKategori', true),
			'hargaBaju' => $this->input->post('hargaBaju', true),
			'stokBaju' => $this->input->post('stokBaju', true),
			'gambarBaju' => $this->input->post('gambarBaju', true),
			'deskripsiBaju' => $this->input->post('deskripsiBaju', true)
		];

		$this->db->where('idBaju', $this->input->post('idBaju'));
		$this->db->update('produk', $data);
	}

	public function hapusDataProduk($idBaju)
	{
		$this->db->delete('produk', ['idBaju' => $idBaju]);
	}

	public function getProdukById($idBaju)
	{
		$query = $this->db->query("SELECT * FROM produk a JOIN warna b ON a.idWarna=b.idWarnaBaju WHERE a.idBaju =" . $idBaju);
		if ($query->num_rows() != 0) {
			return $query->row_array();
		} else {
			return false;
		}
	}
}
