<?php
class Belajar extends CI_Controller{
  function __construct(){
    parent::__construct();
  }

  public function index(){
    echo "ini method index pada controller belajar | cara membuat controller pada codeigniter";
  }

  public function halo(){
    $data['nama_web'] = 'Codeigniter.com';
    $this->load->view('view_belajar', $data);
  }

  function pemrograman(){
    echo 'Menghilangkan index.php pada codeigniter | RentalBuku';
  }
}
