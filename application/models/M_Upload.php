<?php
class M_Upload extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM `Prodi`");
        return $query->result();
    }





    function tambah($pdf,$username)
    {
      $upload = array(
          'judul'=>$this->input->post('judul'),
          'abstrak'=>$this->input->post('abstrak'),
          'verifikasi'=>0,
          'publikasi'=>$this->input->post('publikasi'),
          'sampai'=>$this->input->post('sampai'),
          'npm'=>$username,
          'pdf'=>$pdf

      );
      print_r($upload);
      $mhs = array(
          'id_bidang_minat'=>$this->input->post('bidang_minat')
      );

      $dosen1 = array(
          'npm'=>$username,
          'nip'=>$this->input->post('dosen1'),
          'pembimbing'=>1
      );

      $dosen2 = array(
          'npm'=>$username,
          'nip'=>$this->input->post('dosen2'),
          'pembimbing'=>2
      );
      $C1=$this->db->insert('ta',$upload);
          $this->db->where('npm',$username);
      $C2=$this->db->update('mahasiswa',$mhs);
      $C3=$this->db->insert('bimbing',$dosen1);
      $C4=$this->db->insert('bimbing',$dosen2);

      if($C1 && $C2 && $C3 && $C4){
        return true;
      }
      else{
          return false;
        }

    }

    function Edit($id,$admin)
    {
      $nama_lengkap = $this->input->post('nama_lengkap');
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));
      $data = array(
          'nama_lengkap'=>$nama_lengkap,
          'username'=>$username

      );
      if($password==$admin){
          $this->db->where('username',$id);
          $cek=$this->db->update('admin',$data);
          return $cek;
      }else{
        return false;
      }
    }



    function hapus($id)
    {
      $query=$this->db->where('username', $id);
      $cek=$this->db->delete('admin');
      return $cek;
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
}
?>
