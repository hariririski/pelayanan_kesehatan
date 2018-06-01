<?php
class M_Jenis_pelayanan extends CI_Model{
    function lihat_jenis_pelayanan()
    {
        $query=$this->db->query("SELECT * FROM `jenis_pelayanan`");
        return $query->result();
    }


    function tambah_jenis_pelayanan($icon)
    {
      $nama_jenis_pelayanan = $this->input->post('nama_jenis_pelayanan');
      $data = array(
          'nama_jenis_pelayanan'=>$nama_jenis_pelayanan,
          'icon'=>$icon
      );
      $cek=$this->db->insert('jenis_pelayanan',$data);
      return $cek;
    }

    function edit_kabupaten($id)
    {
      $nama_kabupaten = $this->input->post('nama_kabupaten');
      $data = array(
          'nama_kabupaten'=>$nama_kabupaten
      );
      $this->db->where('id_kabupaten',$id);
      $cek=$this->db->update('kabupaten',$data);
      return $cek;
    }


    function proses_hapus_kabupaten($id)
    {
      $query=$this->db->where('id_kabupaten', $id);
      $cek=$this->db->delete('Kabupaten');
      return $cek;
    }
}
