<?php
class M_Dosen extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM `dosen`");
        return $query->result();
    }



    function tambah()
    {
      $data = array(
          'nip'=>$this->input->post('nip'),
          'nama'=>$this->input->post('nama')

      );
      $cek=$this->db->insert('dosen',$data);
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
