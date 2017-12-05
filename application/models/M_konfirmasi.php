<?php
class M_Konfirmasi extends CI_Model{

    function setuju($id)
    {
      $data = array(
          'verifikasi'=>1

      );
          $this->db->where('npm',$id);
          $cek=$this->db->update('ta',$data);
          return $cek;

    }



    function batalkan($id)
    {
      $query=$this->db->where('npm', $id);
      $cek=$this->db->delete('ta');
      return $cek;
    }


}
