<?php



defined('BASEPATH') or exit('No direct script access allowed');

class M_ongkir extends CI_Model
{


	// List all your items
	public function kecamatan()
	{
		$this->db->select('*');
		$this->db->from('kecamatan');
		$this->db->order_by('id_kecamatan', 'desc');
		return $this->db->get()->result();
	}

	// Add a new item
	public function add($data)
	{
		$this->db->insert('kecamatan', $data);
	}

	//Update one item
	public function update($data)
	{
		$this->db->where('id_kecamatan', $data['id_kecamatan']);
		$this->db->update('kecamatan', $data);
	}
	public function detail_kecamatan($id_kecamatan = null)
	{
		$this->db->select('*');
		$this->db->from('kecamatan');
		$this->db->where('id_kecamatan', $id_kecamatan);
		return $this->db->get()->row();
	}

	//Delete one item
	public function delete($data)
	{
		$this->db->where('id_kecamatan', $data['id_kecamatan']);
		$this->db->delete('kecamatan', $data);
	}
}

/* End of file M_ongkir.php */
