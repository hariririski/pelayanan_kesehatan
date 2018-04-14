<?php
class M_Poli extends CI_Model{
    function lihat_poli()
    {
        $query=$this->db->query("SELECT * FROM `poli`");
        return $query->result();
    }
    function poli($id)
    {
        $query=$this->db->query("SELECT * FROM `pelkes_poli` left join poli on poli.id_poli=pelkes_poli.id_poli left join pelayanan_kesehatan on pelayanan_kesehatan.id_pelayanan_kesehatan=pelkes_poli.id_pelayanan_kesehatan where pelkes_poli.id_pelayanan_kesehatan='$id'");
        return $query->result();
    }


    function tambah_poli()
    {
      $nama_poli = $this->input->post('nama_poli');
      $data = array(
          'nama_poli'=>$nama_poli
      );
      $cek=$this->db->insert('poli',$data);
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
