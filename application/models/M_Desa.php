<?php
class M_Desa extends CI_Model{
    function lihat_desa()
    {
        $query=$this->db->query("SELECT * FROM `desa` left join kecamatan on kecamatan.id_kecamatan=desa.id_kecamatan left join kabupaten on kabupaten.id_kabupaten=kecamatan.id_kabupaten");
        return $query->result();
    }

    function desa_kec($id)
    {
        $query=$this->db->query("SELECT * FROM `desa`where id_kecamatan='$id'");
        return $query->result();
    }
    function tambah_desa()
    {
      $nama_desa = $this->input->post('nama_desa');
      $id_kabupaten = $this->input->post('id_kabupaten');
      $id_kecamatan = $this->input->post('id_kecamatan');

      $data = array(
          'nama_desa'=>$nama_desa,
          'id_kecamatan'=>$id_kecamatan
      );
      $cek=$this->db->insert('desa',$data);
      return $cek;
    }

    function ubah_desa($id)
    {
      $nama_desa = $this->input->post('nama_desa');
      $data = array(
          'nama_desa'=>$nama_desa
      );
      $this->db->where('id_desa',$id);
      $cek=$this->db->update('desa',$data);
      return $cek;
    }

    function edit_provinsi()
    {
        $query=$this->db->query("");
        return $query->result();
    }

    function proses_hapus_desa($id)
    {
      $query=$this->db->where('id_desa', $id);
      $cek=$this->db->delete('Kabupaten');
      return $cek;
    }
}
