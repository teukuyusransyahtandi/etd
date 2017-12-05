<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Prodi extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();

         $this->load->model('M_Prodi');
         $this->load->model('M_Bidang_Minat');

  	  }


      public function index(){
        $admin=$this->session->userdata('level');
        $data['lihat'] = $this->M_Prodi->lihat_prodi();

        if($admin!=2){
           redirect("login/logout");
          }

       	$this->load->view('Prodi',$data);
      }

      public function proses_tambah_prodi(){
    		$cek= $this->M_Admin->tambah_admin();
        if($cek){
          $this->tambah_berhasil();
          redirect('admin');
        }else{
          $this->tambah_gagal();
          redirect('admin');
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
