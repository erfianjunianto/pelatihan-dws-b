<?php
defined('BASEPATH') or exit ('no Direct Script Access Allowed');

class My_Kontroler extends CI_Controller{
	public function openPage($konten, $data = null){
		$data['nav'] = $this->load->view('nav', $data, TRUE);
		$data['konten'] = $this->load->view($konten, $data, TRUE);

		$this->load->view('dashboard', $data);
	}
}