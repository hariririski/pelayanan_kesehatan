<?php
class M_Layer extends CI_Model{
    function lihat_layer()
    {
        $query=$this->db->query("SELECT * FROM `layer`");
        return $query->result();
    }


    function tambah_layer()
    {
      $nama_layer = $this->input->post('nama_layer');
      $url = $this->input->post('url');
      $data = array(
          'nama_layer'=>$nama_layer,
          'url'=>$url
      );
      $cek=$this->db->insert('layer',$data);
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


    function hapus_layer($id)
    {
      $query=$this->db->where('id_layer', $id);
      $cek=$this->db->delete('layer');
      return $cek;
    }
}
