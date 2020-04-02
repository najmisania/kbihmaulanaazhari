<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['produk_haji'] = $this->db->order_by('tanggal_kegiatan', 'desc')->get_where('agenda', 'kategori_id="1"')->result();
		$data['produk_umroh'] = $this->db->order_by('tanggal_kegiatan', 'desc')->get_where('agenda', 'kategori_id="2"')->result();
		// echo "<pre>";
		// print_r($data);
		// exit;
		$this->load->view('home/index', $data);
	}

	public function detail_produk($id){
		$data["bulan"] = unserialize(BULAN);
		$data['detail'] = $this->db->where('id', $id)->get('agenda')->row();
		$data['detail']->arrDate = explode("-", $data['detail']->tanggal_kegiatan);
		// echo "<pre>";
		// print_r($data);
		$this->load->view('detail_produk', $data);
	}
}
