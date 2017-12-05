<?php
class M_Judul extends CI_Model{
    function lihat()
    {
        $query=$this->db->query("SELECT * FROM ta INNER JOIN mahasiswa on mahasiswa.npm=ta.npm left JOIN prodi on mahasiswa.id_prodi=prodi.id_prodi LEFT JOIN bidang_minat on bidang_minat.id_bidang_minat=mahasiswa.id_bidang_minat where ta.verifikasi='1'");
        return $query->result();
    }
    function lihat_prodi($id_prodi)
    {
        $query=$this->db->query("SELECT * FROM ta INNER JOIN mahasiswa on mahasiswa.npm=ta.npm left JOIN prodi on mahasiswa.id_prodi=prodi.id_prodi LEFT JOIN bidang_minat on bidang_minat.id_bidang_minat=mahasiswa.id_bidang_minat where ta.verifikasi='1' and prodi.id_prodi='$id_prodi'");
        return $query->result();
    }
    function cek_upload($npm)
    {
        $query=$this->db->query("SELECT * FROM ta INNER JOIN mahasiswa on mahasiswa.npm=ta.npm left JOIN prodi on mahasiswa.id_prodi=prodi.id_prodi LEFT JOIN bidang_minat on bidang_minat.id_bidang_minat=mahasiswa.id_bidang_minat where mahasiswa.npm='$npm'");
        return $query->result();
    }
    function konfirmasi($prodi)
    {
      $query=$this->db->query("SELECT *, mahasiswa.nama as nama_mahasiswa, mahasiswa.npm as npm_mahasiswa FROM mahasiswa LEFT JOIN ta on ta.npm=mahasiswa.npm  left join prodi on prodi.id_prodi=mahasiswa.id_prodi left join bidang_minat on bidang_minat.id_bidang_minat=mahasiswa.id_bidang_minat where ta.verifikasi='0'and prodi.id_prodi='$prodi' ORDER by ta.tgl_upload");
      return $query->result();
    }
    function judul100()
    {
        $query=$this->db->query("SELECT *, mahasiswa.nama as nama_mahasiswa, mahasiswa.npm as npm_mahasiswa FROM mahasiswa LEFT JOIN ta on ta.npm=mahasiswa.npm left join prodi on prodi.id_prodi=mahasiswa.id_prodi left join bidang_minat on bidang_minat.id_bidang_minat=mahasiswa.id_bidang_minat where ta.verifikasi='1' and ta.sampai is null or ta.sampai<= now() ORDER by ta.tgl_upload DESC LIMIT 100");
        return $query->result();
    }
    function judul100_prodi($id)
    {
        $query=$this->db->query("SELECT *, mahasiswa.nama as nama_mahasiswa, mahasiswa.npm as npm_mahasiswa FROM mahasiswa LEFT JOIN ta on ta.npm=mahasiswa.npm  left join prodi on prodi.id_prodi=mahasiswa.id_prodi left join bidang_minat on bidang_minat.id_bidang_minat=mahasiswa.id_bidang_minat where ta.verifikasi='1'and mahasiswa.id_prodi='$id' and ta.sampai is null or ta.sampai<= now() ORDER by ta.tgl_upload DESC LIMIT 100");
        return $query->result();
    }

    function detail_judul($id)
    {
        $query=$this->db->query("SELECT *, mahasiswa.nama as nama_mahasiswa, mahasiswa.npm as npm_mahasiswa FROM mahasiswa LEFT JOIN ta on ta.npm=mahasiswa.npm left join prodi on prodi.id_prodi=mahasiswa.id_prodi left join bidang_minat on bidang_minat.id_bidang_minat=mahasiswa.id_bidang_minat where  mahasiswa.npm='$id'");
        return $query->result();
    }
    function dosen($npm)
    {
        $query=$this->db->query("SELECT DISTINCT dosen.nip, dosen.nama, bimbing.pembimbing FROM `bimbing` left join dosen on dosen.nip=bimbing.nip where bimbing.npm='$npm'");
        return $query->result();
    }

    function cari_prodi($id,$prodi)
    {
        if($prodi==0){
          $query=$this->db->query("SELECT *, mahasiswa.nama as nama_mahasiswa, mahasiswa.npm as npm_mahasiswa FROM mahasiswa LEFT JOIN ta on ta.npm=mahasiswa.npm left join prodi on prodi.id_prodi=mahasiswa.id_prodi left join bidang_minat on bidang_minat.id_bidang_minat=mahasiswa.id_bidang_minat where ta.verifikasi='1' and ta.sampai is null or ta.sampai<= now()and  (lower(mahasiswa.nama) LIKE lower('%$id%') or lower(prodi.nama_prodi) LIKE lower('%$id%') OR lower(ta.judul) like lower('%$id%') or lower(bidang_minat.nama_bidang_minat) like lower('%$id%') or lower(ta.Abstrak) like lower('%$id%'))");
        }else{
          $var="SELECT *, mahasiswa.nama as nama_mahasiswa, mahasiswa.npm as npm_mahasiswa FROM mahasiswa LEFT JOIN ta on ta.npm=mahasiswa.npm  left join prodi on prodi.id_prodi=mahasiswa.id_prodi left join bidang_minat on bidang_minat.id_bidang_minat=mahasiswa.id_bidang_minat where ta.verifikasi='1'and prodi.id_prodi='$prodi'and (ta.sampai is null or ta.sampai<= now()) and (lower(mahasiswa.nama) LIKE lower('%$id%')  OR lower(ta.judul) like lower('%$id%') or lower(bidang_minat.nama_bidang_minat) like lower('%$id%') or lower(ta.Abstrak) like lower('%$id%'))";
          $query=$this->db->query($var);

        }
        return $query->result();
    }







}
