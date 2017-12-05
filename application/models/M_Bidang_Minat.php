<?php
class M_Bidang_Minat extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM `bidang_minat` left join prodi on prodi.id_prodi=bidang_minat.id_prodi");
        return $query->result();
    }

    function lihat_prodi($prodi)
    {
        $query=$this->db->query("SELECT * FROM `bidang_minat` left join prodi on prodi.id_prodi=bidang_minat.id_prodi where bidang_minat.id_prodi='$prodi'");
        return $query->result();
    }



    function tambah()
    {
      $data = array(
          'nama_bidang_minat'=>$this->input->post('bidang_minat'),
          'id_prodi'=>$this->input->post('prodi')

      );
      $cek=$this->db->insert('bidang_minat',$data);
      return $cek;
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


}
