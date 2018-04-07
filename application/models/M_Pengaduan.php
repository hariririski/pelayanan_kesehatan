<?php
class M_Pengaduan extends CI_Model{
    function lihat_pengaduan()
    {
        $query=$this->db->query("SELECT * FROM `pengaduan` LEFT JOIN kabupaten ON kabupaten.id_kabupaten=pengaduan.id_kabupaten LEFT JOIN kecamatan ON kecamatan.id_kecamatan=pengaduan.id_kecamatan order by tanggal_create DESC");
        return $query->result();
    }
    function lihat_pengaduan_umum()
    {
        $query=$this->db->query("SELECT * FROM `pengaduan` LEFT JOIN kabupaten ON kabupaten.id_kabupaten=pengaduan.id_kabupaten LEFT JOIN kecamatan ON kecamatan.id_kecamatan=pengaduan.id_kecamatan where pengaduan.status='0' or pengaduan.status='1' order by tanggal_create DESC");
        return $query->result();
    }

    function pengaduan($id)
    {
        $query=$this->db->query("SELECT * FROM `pengaduan` LEFT JOIN kabupaten ON kabupaten.id_kabupaten=pengaduan.id_kabupaten LEFT JOIN kecamatan ON kecamatan.id_kecamatan=pengaduan.id_kecamatan where pengaduan.kode_pengaduan='$id'");
        return $query->result();
    }

    function proses_pengaduan($id)
    {
      $status=1;
      $data = array(
          'status'=>$status
      );
      $this->db->where('kode_pengaduan',$id);
      $cek=$this->db->update('pengaduan',$data);
      return $cek;
    }
    function verifikasi_pengaduan($id)
    {
      $status=2;
      $data = array(
          'status'=>$status
      );
      $this->db->where('kode_pengaduan',$id);
      $cek=$this->db->update('pengaduan',$data);
      return $cek;
    }

    function palsu_pengaduan($id)
    {
      $status=3;
      $data = array(
          'status'=>$status
      );
      $this->db->where('kode_pengaduan',$id);
      $cek=$this->db->update('pengaduan',$data);
      return $cek;
    }
    function reset_pengaduan($id)
    {
      $status=0;
      $data = array(
          'status'=>$status
      );
      $this->db->where('kode_pengaduan',$id);
      $cek=$this->db->update('pengaduan',$data);
      return $cek;
    }

    function hapus_pengaduan($id)
    {
      $query=$this->db->where('kode_pengaduan', $id);
      $cek=$this->db->delete('pengaduan');
      return $cek;
    }



    function tambah_pengaduan($new_name)
    {
      $photo= $new_name;
      $dokument=str_replace(" ","_",$photo);
      $jalan_rusak = array(
          'no_ktp_pelapor'   =>$this->input->post('no_ktp'),
          'nama_pelapor'     =>$this->input->post('nama'),
          'alamat_pelapor'   =>$this->input->post('alamat'),
          'no_hp_pelapor'   =>$this->input->post('no_hp'),
          'id_kabupaten'     =>$this->input->post('id_kabupaten'),
          'id_kecamatan'     =>$this->input->post('id_kecamatan'),
          'desa'             =>$this->input->post('desa'),
          'keterangan'       =>$this->input->post('keterangan'),
          'nama_jalan'       =>$this->input->post('nama_jalan'),
          'kondisi'          =>$this->input->post('kondisi'),
          'luas_jalan'       =>$this->input->post('luas_jalan'),
          'lat'              =>$this->input->post('lat'),
          'lon'              =>$this->input->post('lon'),
          'photo'            =>$photo
      );
      $cek=$this->db->insert('pengaduan',$jalan_rusak);
      return $cek;
    }

      function edit_pengaduan($photo,$kode_pengaduan)
      {
        $jalan_rusak = array(
            'id_kabupaten'     =>$this->input->post('id_kabupaten'),
            'id_kecamatan'     =>$this->input->post('id_kecamatan'),
            'desa'             =>$this->input->post('desa'),
            'keterangan'       =>$this->input->post('keterangan'),
            'nama_jalan'       =>$this->input->post('nama_jalan'),
            'kondisi'          =>$this->input->post('kondisi'),
            'luas_jalan'       =>$this->input->post('luas_jalan'),
            'lat'              =>$this->input->post('lat'),
            'lon'              =>$this->input->post('lon'),
            'photo'            =>$photo
        );

        $this->db->where('kode_pengaduan',$kode_pengaduan);
        $cek=$this->db->update('pengaduan',$jalan_rusak);
        return $cek;
    }


}
