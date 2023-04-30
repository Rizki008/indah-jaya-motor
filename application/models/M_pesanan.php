<?php



defined('BASEPATH') or exit('No direct script access allowed');

class M_pesanan extends CI_Model
{

	// List all your items
	public function masuk()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan', 'left');
		$this->db->where('status_order=0');
		$this->db->where('type_order=1');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	public function konfirmasi()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan', 'left');
		$this->db->where('status_order=1');
		$this->db->where('type_order=1');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	public function proses()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan', 'left');
		$this->db->where('status_order=2');
		$this->db->where('type_order=1');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}
	public function kirim()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan', 'left');
		$this->db->where('status_order=3');
		$this->db->where('type_order=1');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	public function selesai()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan', 'left');
		$this->db->where('status_order=4');
		$this->db->where('type_order=1');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	public function batal()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan', 'left');
		$this->db->where('status_order=5');
		$this->db->where('type_order=1');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	public function detail_transaksi($id_transaksi)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('detail_transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi', 'left');
		$this->db->join('diskon', 'detail_transaksi.id_diskon = diskon.id_diskon', 'left');
		$this->db->join('produk', 'produk.id_produk = diskon.id_produk', 'left');
		$this->db->where('transaksi.id_transaksi', $id_transaksi);
		return $this->db->get()->result();
	}
	public function detail_pesanan($id)
	{
		$data['pesanan'] = $this->db->query("SELECT * FROM detail_transaksi JOIN transaksi ON detail_transaksi.id_transaksi=transaksi.id_transaksi JOIN diskon ON detail_transaksi.id_diskon=diskon.id_diskon JOIN produk ON diskon.id_produk=produk.id_produk WHERE transaksi.id_transaksi='" . $id . "';")->result();
		$data['transaksi'] = $this->db->query("SELECT * FROM `transaksi` JOIN pengiriman ON transaksi.id_transaksi = pengiriman.id_transaksi JOIN pelanggan ON pelanggan.id_pelanggan=transaksi.id_pelanggan JOIN kecamatan ON kecamatan.id_kecamatan = pengiriman.id_kecamatan WHERE transaksi.id_transaksi='" . $id . "';")->row();
		return $data;
	}

	public function kecamatan($id)
	{
		$this->db->select('*');
		$this->db->from('kecamatan');
		$this->db->where('kode', $id);
		return $this->db->get()->result();
	}

	public function pelanggan($id)
	{
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->where('id_pelanggan', $id);
		return $this->db->get()->row();
	}

	public function update_point($id, $data)
	{
		$this->db->where('id_pelanggan', $id);
		$this->db->update('pelanggan', $data);
	}
}

/* End of file M_pesanan.php */
