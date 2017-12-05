<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Dosen extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $admin=$this->session->userdata('level');
         $this->load->model('M_Dosen');

         if(empty($level)==0){
            redirect("login/logout");
           }
  			 }


         public function index()
       	{
          $data['lihat'] = $this->M_Dosen->lihat();
       		$this->load->view('Dosen',$data);
       	}

        public function proses_tambah()
       {
         $cek= $this->M_Dosen->tambah();
         if($cek){
           $this->tambah_berhasil();
           redirect('Dosen');
         }else{
           $this->tambah_gagal();
           redirect('Dosen');
         }

       }



              function tambah_berhasil(){
               $this->session->set_flashdata('pesan', '
                       <div class="alert alert-success fade in">
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       <strong>Berhasil!</strong> Data Berhasil Di Tambahkan!.
                       </div>');
             }
             function tambah_gagal(){
               $this->session->set_flashdata('pesan', '
                       <div class="alert alert-danger fade in">
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       <strong>Gagal!</strong> Data Gagal ditambahkan!.
                       </div>');
             }
             function edit_berhasil(){
               $this->session->set_flashdata('pesan', '
                       <div class="alert alert-success fade in">
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       <strong>Berhasil!</strong> Data Berhasil Di Perbaharui!.
                       </div>');
             }
             function edit_gagal(){
               $this->session->set_flashdata('pesan', '
                       <div class="alert alert-danger fade in">
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       <strong>Gagal!</strong> Data Gagal Di Perbaharui!.
                       </div>');
             }
             function hapus_berhasil(){
               $this->session->set_flashdata('pesan', '
                       <div class="alert alert-success fade in">
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       <strong>Berhasil!</strong> Data Berhasil Dihapus!.
                       </div>');
             }
             function hapus_gagal(){
               $this->session->set_flashdata('pesan', '
                       <div class="alert alert-danger fade in">
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       <strong>Gagal!</strong> Data Gagal Di Hapus!.
                       </div>');
             }
              function upload(){
               $this->session->set_flashdata('pesan', '
                       <div class="alert alert-danger fade in">
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       <strong>Gagal!</strong> File Upload Tidak Sesuai!.
                       </div>');
             }




   }
?>
