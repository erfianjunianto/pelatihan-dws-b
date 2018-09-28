<?php
class Lingkaran_model extends CI_Model {
	//mendefinisikan konstanta untuk nilai PI
	const PI = 3.14;

	//atribut model
	private $jarijari;

	//metode untuk menentukan nilai $jarijari
	public function set_jarijari($r){
$this->jarijari = $r;
	}

	//metode untuk mengambil nilai $jarijari
	public function get_jarijari(){
		return $this->jarijari;
	}

	//metode untuk menghitung luas lingkaran
	public function hitung_luas(){
		return self::PI * $this->jarijari * $this->jarijari;
	}

	//metode untuk menghitung keliling lingkaran
	public function hitung_keliling(){
		return 2 * self::PI * $this->jarijari;
	}
}
