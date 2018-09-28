<?php
defined('BASEPATH') or exit ('No Direct Script Access Allowed');

class Form extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('v_form');
	}

	public function aksi(){
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('konfirm_email','Konfirmasi Email','required');

		if($this->form_validation->run() != false){
			echo "Form Validation Oke";
		}else{
			$this->load->view('v_form');
		}
	}
}