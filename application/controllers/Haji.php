<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Haji extends CI_Controller {

	public function regular()
	{
		$this->load->view('haji/reguler');
	}

	public function dokumentasi()
	{
		$result_foto = $this->db->order_by('tgl_update', 'desc')->where('album_id','1')->get('foto')->result();
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
