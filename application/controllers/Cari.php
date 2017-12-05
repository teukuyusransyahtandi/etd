<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Cari extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Judul');
         $this->load->model('M_Prodi');
  			 }




        public function cari_prodi()
       {
         $id=$_GET['id'];
         $prodi=$_GET['prodi'];
         $data['cari'] = $this->M_Judul->cari_prodi($id,$prodi);
         $data['prodi'] = $this->M_Prodi->lihat();
         $data['prodi0'] = $this->M_Prodi->lihat();
         $data['prodi1'] = $this->M_Prodi->lihat();
         //print_r($data['cari']);
         $this->load->view('Cari',$data);
       }




   }
?>
