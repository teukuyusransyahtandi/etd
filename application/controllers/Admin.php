<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Admin extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Admin');
         $this->load->model('M_Prodi');
         $this->load->model('M_Bidang_Minat');

  	  }


      public function index(){
        $admin=$this->session->userdata('level');
        $data['lihat'] = $this->M_Admin->lihat_admin();
        $data['prodi'] = $this->M_Prodi->lihat_prodi();
        if($admin!=2){
           redirect("login/logout");
          }

       	$this->load->view('Admin',$data);
      }

      public function proses_tambah_admin(){
    		$cek= $this->M_Admin->tambah_admin();
        if($cek){
          $this->tambah_berhasil();
          redirect('admin');
        }else{
          $this->tambah_gagal();
          redirect('admin');
        }
    	}
     //
    //   public function proses_hapus_admin(){
    //     	$id=$_GET ['id'];
    //     	$cek= $this->M_Admin->proses_hapus_admin($id);
    //       if($cek){
    //         $this->hapus_berhasil();
    //         redirect('admin');
    //       }else{
    //         $this->hapus_gagal();
    //         redirect('admin');
    //       }
    //   }
     //
      public function ubah_profil(){
        	$id=$_GET ['id'];
          $data['lihat'] = $this->M_Admin->profil($id);
          $data['prodi'] = $this->M_Prodi->lihat();
          $data['bidang_minat'] = $this->M_Bidang_Minat->lihat();
         	//$this->load->view('edit_profil',$data);
          $data['content']  = 'home/edit_profil';
          $this->load->view('home/index', $data);
      }
      public function ubah_password(){
          $id=$_GET ['id'];
          $data['lihat'] = $this->M_Admin->admin($id);
          $this->load->view('edit_password',$data);
      }
     //
    //   public function proses_ubah_profil($id){
    //     $admin=md5($this->session->userdata('admin'));
    // 		$cek= $this->M_Admin->ubah_profil($id,$admin);
    //     if($cek){
    //       $this->edit_berhasil();
    //       redirect('logout');
    //     }else{
    //       $this->edit_gagal();
    //       redirect('admin');
    //     }
    // 	}
     //
    //   public function proses_ubah_password($id){
    //     $admin=md5($this->session->userdata('admin'));
    //     $cek= $this->M_Admin->ubah_password($id,$admin);
    //     if($cek){
    //       $this->edit_berhasil();
    //       redirect('logout');
    //     }else{
    //       $this->edit_gagal();
    //       redirect('admin');
    //     }
    //   }

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
