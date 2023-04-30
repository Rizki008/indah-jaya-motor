<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

	public function katalog()
	{
		if ($this->session->userdata('member') == '') {
			$data['menu'] = $this->db->query("SELECT * FROM `produk` JOIN diskon ON produk.id_produk = diskon.id_produk WHERE diskon.member='3' AND tipe='1'")->result();
		} else {
			$data['menu'] = $this->db->query("SELECT * FROM `produk` JOIN diskon ON produk.id_produk = diskon.id_produk WHERE tipe='1' AND diskon.member='" . $this->session->userdata('member') . "'")->result();
		}
		return $data;
	}

	public function produk_kategori()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
		$this->db->join('diskon', 'diskon.id_produk = produk.id_produk', 'left');
		$this->db->limit('4');
		return $this->db->get()->result();
	}

	public function kategori_produk($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('id_kategori', $id_kategori);
		return $this->db->get()->row();
	}

	public function produk_kategori_all($id_kategori)
	{
		if ($this->session->userdata('member') == '') {
			$data['menu'] = $this->db->query("SELECT * FROM `produk` JOIN diskon ON produk.id_produk = diskon.id_produk WHERE diskon.member='3' AND tipe='1' AND produk.id_kategori='" . $id_kategori . "'")->result();
		} else {
			$data['menu'] = $this->db->query("SELECT * FROM `produk` JOIN diskon ON produk.id_produk = diskon.id_produk WHERE tipe='1' AND produk.id_kategori='" . $id_kategori . " AND diskon.member='" . $this->session->userdata('member') . "'")->result();
		}
		return $data;
	}

	public function best_produk()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('detail_transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi', 'left');
		$this->db->join('diskon', 'diskon.id_diskon = detail_transaksi.id_diskon', 'left');
		$this->db->join('produk', 'produk.id_produk = diskon.id_produk', 'left');
		$this->db->group_by('detail_transaksi.id_diskon');
		$this->db->order_by('detail_transaksi.id_detail', 'desc');
		return $this->db->get()->result();
	}

	public function produk_all()
	{
		$this->db->select('*');
		$this->db->from('produk');
		return $this->db->get()->result();
	}
	public function kategori()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->order_by('id_kategori', 'desc');
		return $this->db->get()->result();
	}

	public function detail_produk($id)
	{
		$data['size'] = $this->db->query("SELECT * FROM produk JOIN kategori ON produk.id_kategori=kategori.id_kategori JOIN diskon ON produk.id_produk=diskon.id_produk WHERE produk.id_produk='" . $id . "'")->result();
		$data['produk'] = $this->db->query("SELECT * FROM produk JOIN kategori ON produk.id_kategori=kategori.id_kategori JOIN diskon ON produk.id_produk=diskon.id_produk WHERE produk.id_produk='" . $id . "'")->row();
		return $data;
	}

	public function related_produk($id)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
		$this->db->join('diskon', 'produk.id_produk = diskon.id_produk', 'left');
		$this->db->where(array('produk.id_produk !='), $id);
		$this->db->limit(4);
		return $this->db->get()->result();
	}
}
