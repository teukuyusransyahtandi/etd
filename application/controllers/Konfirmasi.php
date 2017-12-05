<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Konfirmasi extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $admin=$this->session->userdata('level');
         $this->load->model('M_Judul');
         $this->load->model('M_konfirmasi');

          if($admin!=1){
             redirect("login/logout");
            }
  			 }


         public function index()
       	{
          $prodi=$this->session->userdata('prodi');
          $data['lihat'] = $this->M_Judul->konfirmasi($prodi);
       		$this->load->view('Konfirmasi',$data);
       	}

        public function setuju()
       {
         $id=$_GET ['id'];
             	$cek= $this->M_konfirmasi->setuju($id);
               if($cek){
                 $this->konfirmasi_berhasil();
                 redirect("detail_judul_admin?id=$id");
               }else{
                 $this->batalkan();
               redirect("detail_judul_admin?id=$id");
               }

       }
       public function batalkan()
      {
              $id=$_GET ['id'];
              $file=$_GET ['file'];
              unlink("./uploads/$file");
              $cek= $this->M_konfirmasi->batalkan($id);
              if($cek){
                $this->batalkan_berhasil();
                redirect("konfirmasi");
              }else{
                $this->batalkan_gagal();
              redirect("konfirmasi");
              }

      }


   function tambah_berhasil(){
    $this->session->set_flashdata('pesan', '
            <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Berhasil!</strong> Data Berhasil Di Tambahkan!.
            </div>');
  }
  function konfirmasi_berhasil(){
   $this->session->set_flashdata('pesan', '
           <div class="alert alert-success fade in">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <strong>Berhasil!</strong> Berhasil Di konfirmasi!.
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
  function batalkan_berhasil(){
    $this->session->set_flashdata('pesan', '
            <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Berhasil!</strong> Data Dibatalkan!.
            </div>');
  }
            function batalkan_gagal(){
              $this->session->set_flashdata('pesan', '
                      <div class="alert alert-danger fade in">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Gagal!</strong> Gagal Dibatalkan!.
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
