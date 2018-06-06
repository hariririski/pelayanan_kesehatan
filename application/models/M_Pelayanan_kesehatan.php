<?php
class M_Pelayanan_kesehatan extends CI_Model{
    function lihat_pelayanan_kesehatan()
    {
        $query=$this->db->query("SELECT * From pelayanan_kesehatan LEFT join kabupaten on pelayanan_kesehatan.id_kabupaten=kabupaten.id_kabupaten left join kecamatan on pelayanan_kesehatan.id_kecamatan=kecamatan.id_kecamatan left join desa on pelayanan_kesehatan.id_desa=desa.id_desa left join jenis_pelayanan on pelayanan_kesehatan.id_jenis_pelayanan=jenis_pelayanan.id_jenis_pelayanan ");
        return $query->result();
    }
    function pelayanan_kesehatan($id)
    {
        $query=$this->db->query("SELECT * From pelayanan_kesehatan LEFT join kabupaten on pelayanan_kesehatan.id_kabupaten=kabupaten.id_kabupaten left join kecamatan on pelayanan_kesehatan.id_kecamatan=kecamatan.id_kecamatan left join desa on pelayanan_kesehatan.id_desa=desa.id_desa left join jenis_pelayanan on pelayanan_kesehatan.id_jenis_pelayanan=jenis_pelayanan.id_jenis_pelayanan where pelayanan_kesehatan.id_pelayanan_kesehatan='$id'");
        return $query->result();
    }
    function layanan_kesehatan($id)
    {
        $query=$this->db->query("SELECT * from layanan_kesehatan where id_pelayanan_kesehatan='$id'");
        return $query->result();
    }



    function Tambah_pelayanan_kesehatan($new_name)
    {

      $jalan = array(
          'nama_pelayanan_kesehatan'     =>$this->input->post('nama_pelayanan_kesehatan'),
          'id_jenis_pelayanan'     =>$this->input->post('id_jenis_pelayanan'),
          'id_kabupaten'     =>$this->input->post('id_kabupaten'),
          'id_kecamatan'     =>$this->input->post('id_kecamatan'),
          'id_desa'     =>$this->input->post('id_desa'),
          'alamat'     =>$this->input->post('alamat'),
          'email'     =>$this->input->post('email'),
          'status_akreditasi'     =>$this->input->post('status_akreditasi'),
          'web'     =>$this->input->post('web'),
          'lon'     =>$this->input->post('lon'),
          'lat'     =>$this->input->post('lat'),
          'no_tlp'     =>$this->input->post('no_tlp'),
          'foto'      =>$new_name
      );

      $cek=$this->db->insert('pelayanan_kesehatan',$jalan);
      return $cek;
    }
    function tambah_layanan_kesehatan($id)
    {

      $jalan = array(
          'nama_layanan'     =>$this->input->post('nama_layanan_kesehatan'),
          'id_pelayanan_kesehatan'     =>$id,

      );

      $cek=$this->db->insert('layanan_kesehatan',$jalan);
      return $cek;
    }

    function hapus($id)
    {

        $query=$this->db->query("DELETE from pelayanan_kesehatan where id_pelayanan_kesehatan='$id'");
        $query=$this->db->query("DELETE from layanan_kesehatan where id_pelayanan_kesehatan='$id'");
        $query=$this->db->query("DELETE from pelkes_poli where id_pelayanan_kesehatan='$id'");
        return $query;
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




}
