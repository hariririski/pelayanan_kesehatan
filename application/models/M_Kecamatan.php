<?php
class M_Kecamatan extends CI_Model{
    function lihat_kecamatan()
    {
        $query=$this->db->query("SELECT * FROM `kecamatan` left join kabupaten on kecamatan.id_kabupaten=kabupaten.id_kabupaten");
        return $query->result();
    }

    function kecamatan($id)
    {
        $query=$this->db->query("SELECT * FROM `kecamatan` left join kabupaten on kecamatan.id_kabupaten=kabupaten.id_kabupaten where kecamatan.id_kecamatan='$id'");
        return $query->result();
    }

    function kecamatan_kab($id)
    {
        $query=$this->db->query("SELECT * FROM `kecamatan` left join kabupaten on kecamatan.id_kabupaten=kabupaten.id_kabupaten where kecamatan.id_kabupaten='$id'");
        return $query->result();
    }

    function tambah_kecamatan()
    {
      $nama_kecamatan = $this->input->post('nama_kecamatan');
      $id_kabupaten = $this->input->post('id_kabupaten');
      $data = array(
          'id_kabupaten'=>$id_kabupaten,
          'nama_kecamatan'=>$nama_kecamatan
      );
      $cek=$this->db->insert('kecamatan',$data);
      return $cek;
    }

    function ubah_kecamatan($id)
    {
      $nama_kecamatan = $this->input->post('nama_kecamatan');
      $id_kabupaten = $this->input->post('id_kabupaten');
      $data = array(
          'id_kabupaten'=>$id_kabupaten,
          'nama_kecamatan'=>$nama_kecamatan
      );
      $this->db->where('id_kecamatan',$id);
      $cek=$this->db->update('kecamatan',$data);
      return $cek;
    }

    function edit_kecamatan()
    {
        $query=$this->db->query("");
        return $query->result();
    }

    function proses_hapus_kecamatan($id)
    {
      $query=$this->db->where('id_kecamatan', $id);
      $cek=$this->db->delete('kecamatan');
      return $cek;
    }
}
