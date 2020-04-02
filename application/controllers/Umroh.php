<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umroh extends CI_Controller {

	public function paket9()
	{
		$this->load->view('umroh/paket9');
	}

	public function paket12()
	{
		$this->load->view('umroh/paket12');
	}

	public function turki()
	{
		$this->load->view('umroh/turki');
	}

	public function thoif()
	{
		$this->load->view('umroh/thoif');
	}

	public function ramadhan()
	{
		$this->load->view('umroh/ramadhan');
	}

	public function akhir_tahun()
	{
		$this->load->view('umroh/akhirtahun');
	}

	public function dokumentasi()
	{
		$result_foto = $this->db->order_by('tgl_update', 'desc')->where('album_id','2')->get('foto')->result();
		$data['foto'] = array();
		$index = 0;
		foreach ($result_foto as $key => $value) {
			$data['foto'][$index] = $value;
			$index++;
		}
		// print_r($data);
		$this->load->view('haji/dokumentasi', $data);
	}
}
