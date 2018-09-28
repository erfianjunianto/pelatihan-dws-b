<?php
defined('BASEPATH') or exit ('No Direct Script Access Allowed');

class M_data extends CI_Model{

	function ambilData(){
		return $this->db->get('buku');
	}
}