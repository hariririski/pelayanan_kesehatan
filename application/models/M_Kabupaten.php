<?php
class M_Kabupaten extends CI_Model{
    function lihat_kabupaten()
    {
        $query=$this->db->query("SELECT * FROM `kabupaten`");
        return $query->result();
    }

    function kabupaten($id)
    {
        $query=$this->db->query("SELECT * FROM `kabupaten`where id_kabupaten='$id'");
        return $query->result();
    }
    function tambah_kabupaten()
    {
      $nama_kabupaten = $this->input->post('nama_kabupaten');
      $data = array(
          'nama_kabupaten'=>$nama_kabupaten
      );
      $cek=$this->db->insert('kabupaten',$data);
      return $cek;
    }

    function ubah_kabupaten($id)
    {
      $nama_kabupaten = $this->input->post('nama_kabupaten');
      $data = array(
          'nama_kabupaten'=>$nama_kabupaten
      );
      $this->db->where('id_kabupaten',$id);
      $cek=$this->db->update('kabupaten',$data);
      return $cek;
    }

    function edit_provinsi()
    {
        $query=$this->db->query("");
        return $query->result();
    }

    function proses_hapus_kabupaten($id)
    {
      $query=$this->db->where('id_kabupaten', $id);
      $cek=$this->db->delete('Kabupaten');
      return $cek;
    }
}
