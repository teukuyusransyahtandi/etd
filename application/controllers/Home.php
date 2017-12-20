<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->model('M_Judul');
    $this->load->model('M_Prodi');
    $this->load->database();
  }


  public function index()
  {
    $data['judul100'] = $this->M_Judul->judul100();
    $data['prodi'] = $this->M_Prodi->lihat();
    $this->load->view('Home',$data);
  }

  public function judul_prodi()
  {
    $id=$_GET['prodi'];
    $data['prodi'] = $this->M_Prodi->lihat();
    $data['judul100'] = $this->M_Judul->judul100_prodi($id);
    $this->load->view('Prodi',$data);
  }

  public function baru()
  {
    $data['judul100'] = $this->M_Judul->judul100();
    $data['prodi']    = $this->M_Prodi->lihat();
    $data['content']  = 'home/new';
    $this->load->view('home/index', $data);
  }

  public function populer()
  {
    $data['content']  = 'home/populer';
    $this->load->view('home/index', $data);
  }

  public function help()
  {
    $data['content']  = 'home/help';
    $this->load->view('home/index', $data);
  }

  public function setting()
  {
    $data['content']  = 'home/setting';
    $this->load->view('home/index', $data);
  }

}
