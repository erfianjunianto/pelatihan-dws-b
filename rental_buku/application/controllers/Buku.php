<?php
defined('BASEPATH') or exit ('No Direct Script Access Allowed');

class Buku extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

	function dataBuku(){
		$data['buku'] = $this->m_data->ambilData()->result();
		$this->load->view('v_buku', $data);
	}
}