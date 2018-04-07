<?php
class M_Jalan extends CI_Model{
    function lihat_jalan()
    {
        $query=$this->db->query("SELECT * FROM `jalan` INNER JOIN fungsi on jalan.kode_ruas=fungsi.kode_ruas LEFT JOIN kabupaten on kabupaten.id_kabupaten=jalan.id_kabupaten LEFT JOIN kecamatan on kecamatan.id_kecamatan=jalan.id_kecamatan");
        return $query->result();
    }

    function jalan($id)
    {
        $query=$this->db->query("SELECT * FROM `jalan` INNER JOIN fungsi on jalan.kode_ruas=fungsi.kode_ruas LEFT JOIN kabupaten on kabupaten.id_kabupaten=jalan.id_kabupaten LEFT JOIN kecamatan on kecamatan.id_kecamatan=jalan.id_kecamatan WHERE jalan.kode_ruas='$id'");
        return $query->result();
    }

    function tambah_jalan($new_name)
    {
      $document= $new_name;
      $dokument=str_replace(" ","_",$document);
      $jalan = array(
          'kode_ruas'     =>$this->input->post('kode_ruas'),
          'no_ruas'       =>$this->input->post('no_ruas'),
          'status'        =>$this->input->post('status'),
          'nama_jalan'    =>$this->input->post('nama_jalan'),
          'panjang_km'    =>$this->input->post('panjang_km'),
          'dari'          =>$this->input->post('dari'),
          'ke'            =>$this->input->post('ke'),
          'id_kabupaten'  =>$this->input->post('id_kabupaten'),
          'id_kecamatan'  =>$this->input->post('id_kecamatan'),
          'baik'          =>$this->input->post('baik'),
          'rusak_sedang'  =>$this->input->post('sedang'),
          'rusak_ringan'  =>$this->input->post('rusak_ringan'),
          'rusak_berat'   =>$this->input->post('rusak_berat'),
          'belum_tembus'  =>$this->input->post('belum_tembus'),
          'peta'  =>$this->input->post('peta'),
          'dokument'      =>$document
      );
      $fungsi = array(
          'kode_ruas'     =>$this->input->post('kode_ruas'),
          'kode_fungsi'     =>$this->input->post('kode_ruas'),
          'nama_kjp'      =>$this->input->post('nama_kjp'),
          'no_kjp'        =>$this->input->post('no_kjp'),
          'keterangan'    =>$this->input->post('keterangan')
      );
      $cek=$this->db->insert('jalan',$jalan);
      $cek2=$this->db->insert('fungsi',$fungsi);
      return $cek;
    }

    function edit_jalan($id,$document)
    {
      $jalan = array(
          'no_ruas'       =>$this->input->post('no_ruas'),
          'status'        =>$this->input->post('status'),
          'nama_jalan'    =>$this->input->post('nama_jalan'),
          'panjang_km'    =>$this->input->post('panjang_km'),
          'dari'          =>$this->input->post('dari'),
          'ke'            =>$this->input->post('ke'),
          'id_kabupaten'  =>$this->input->post('id_kabupaten'),
          'id_kecamatan'  =>$this->input->post('id_kecamatan'),
          'baik'          =>$this->input->post('baik'),
          'rusak_sedang'  =>$this->input->post('sedang'),
          'rusak_ringan'  =>$this->input->post('rusak_ringan'),
          'rusak_berat'   =>$this->input->post('rusak_berat'),
          'belum_tembus'  =>$this->input->post('belum_tembus'),
          'peta'          =>$this->input->post('peta'),
          'dokument'      =>$document

      );
      $fungsi = array(
          'nama_kjp'      =>$this->input->post('nama_kjp'),
          'no_kjp'        =>$this->input->post('no_kjp'),
          'keterangan'    =>$this->input->post('keterangan')
      );
      $this->db->where('kode_ruas',$id);
      $cek=$this->db->update('jalan',$jalan);
      $cek1=$this->db->update('fungsi',$fungsi);
      return $cek1;
    }

    function proses_hapus_jalan($id)
    {

        $query=$this->db->query("DELETE jalan.*, fungsi.* from jalan, fungsi WHERE jalan.kode_ruas='$id' and fungsi.kode_ruas='$id'");
        return $query;
    }

    function detail_jalan()
    {
        $query=$this->db->query("");
        return $query->result();
    }
}
