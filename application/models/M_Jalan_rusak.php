<?php
class M_Jalan_rusak extends CI_Model{
    function lihat_jalan_rusak()
    {
        $query=$this->db->query("SELECT * FROM jalan_rusak LEFT JOIN jalan on jalan.kode_ruas=jalan_rusak.kode_ruas LEFT JOIN kabupaten on kabupaten.id_kabupaten=jalan_rusak.id_kabupaten LEFT JOIN kecamatan on kecamatan.id_kecamatan=jalan_rusak.id_kecamatan");
        return $query->result();
    }

    function lihat_jalan_rusak_aktif()
    {
        $query=$this->db->query("SELECT * FROM jalan_rusak LEFT JOIN jalan on jalan.kode_ruas=jalan_rusak.kode_ruas LEFT JOIN kabupaten on kabupaten.id_kabupaten=jalan_rusak.id_kabupaten LEFT JOIN kecamatan on kecamatan.id_kecamatan=jalan_rusak.id_kecamatan where jalan_rusak.perbaikan is null");
        return $query->result();
    }
    function jalan_rusak($id)
    {
        $query=$this->db->query("SELECT * FROM jalan_rusak LEFT JOIN jalan on jalan.kode_ruas=jalan_rusak.kode_ruas LEFT JOIN kabupaten on kabupaten.id_kabupaten=jalan_rusak.id_kabupaten LEFT JOIN kecamatan on kecamatan.id_kecamatan=jalan_rusak.id_kecamatan where jalan_rusak.kode_jalan_rusak='$id'");
        return $query->result();
    }

    function tambah_jalan_rusak($new_name)
    {
      $photo= $new_name;
      $dokument=str_replace(" ","_",$photo);
      $jalan_rusak = array(
          'id_kabupaten'     =>$this->input->post('id_kabupaten'),
          'id_kecamatan'     =>$this->input->post('id_kecamatan'),
          'desa'             =>$this->input->post('desa'),
          'keterangan'       =>$this->input->post('keterangan'),
          'kode_ruas'        =>$this->input->post('kode_ruas'),
          'kondisi'          =>$this->input->post('kondisi'),
          'luas_jalan'       =>$this->input->post('luas_jalan'),
          'lat'              =>$this->input->post('lat'),
          'lon'              =>$this->input->post('lon'),
          'photo'            =>$photo
      );

      $cek=$this->db->insert('jalan_rusak',$jalan_rusak);
      return $cek;
    }

    function edit_jalan_rusak($photo,$kode_jalan_rusak)
    {
      $jalan_rusak = array(
          'id_kabupaten'     =>$this->input->post('id_kabupaten'),
          'id_kecamatan'     =>$this->input->post('id_kecamatan'),
          'desa'             =>$this->input->post('desa'),
          'keterangan'       =>$this->input->post('keterangan'),
          'kode_ruas'        =>$this->input->post('kode_ruas'),
          'kondisi'          =>$this->input->post('kondisi'),
          'luas_jalan'       =>$this->input->post('luas_jalan'),
          'lat'              =>$this->input->post('lat'),
          'lon'              =>$this->input->post('lon'),
          'photo'            =>$photo
      );

      $this->db->where('kode_jalan_rusak',$kode_jalan_rusak);
      $cek=$this->db->update('jalan_rusak',$jalan_rusak);
      return $cek;
    }

    function jumlah_ringan()
    {
        $query=$this->db->query("SELECT COUNT(kode_jalan_rusak) AS jumlah_ringan FROM `jalan_rusak` WHERE perbaikan IS NULL and kondisi='1'");
        return $query->result();
    }

    function jumlah_berat()
    {
        $query=$this->db->query("SELECT COUNT(kode_jalan_rusak) AS jumlah_berat FROM `jalan_rusak` WHERE perbaikan IS NULL and kondisi='2'");
        return $query->result();
    }

    function jumlah_belum_tembus()
    {
        $query=$this->db->query("SELECT COUNT(kode_jalan_rusak) AS jumlah_belum_tembus FROM `jalan_rusak` WHERE perbaikan IS NULL and kondisi='3'");
        return $query->result();
    }


    function proses_hapus_jalan_rusak($id)
    {
        $query=$this->db->where('kode_jalan_rusak', $id);
        $cek=$this->db->delete('jalan_rusak');
        return $cek;
    }

    function perbaikan_jalan_rusak($id)
    {
      $perbaikan=1;
      $data = array(
          'perbaikan'=>$perbaikan
      );
      $this->db->where('kode_jalan_rusak',$id);
      $cek=$this->db->update('jalan_rusak',$data);
      return $cek;
    }

    function reset_perbaikan_jalan_rusak($id)
    {
      $perbaikan=null;
      $data = array(
          'perbaikan'=>$perbaikan
      );
      $this->db->where('kode_jalan_rusak',$id);
      $cek=$this->db->update('jalan_rusak',$data);
      return $cek;
    }
}
