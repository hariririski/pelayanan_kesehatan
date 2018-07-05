<?php
class M_Home extends CI_Model{
    function jumlah_rs()
    {
        $query=$this->db->query("SELECT COUNT(id_pelayanan_kesehatan) as jumlah FROM `pelayanan_kesehatan` WHERE id_jenis_pelayanan='1'");
        return $query->result();
    }

    function jumlah_puskesmas()
    {
        $query=$this->db->query("SELECT COUNT(id_pelayanan_kesehatan) as jumlah  FROM `pelayanan_kesehatan` WHERE id_jenis_pelayanan='2'");
        return $query->result();
    }

    function jumlah_apotek()
    {
        $query=$this->db->query("SELECT COUNT(id_pelayanan_kesehatan) as jumlah FROM `pelayanan_kesehatan` WHERE id_jenis_pelayanan='5'");
        return $query->result();
    }
    function data_grafik()
    {
        $query=$this->db->query("SELECT kabupaten.nama_kabupaten, COUNT(kabupaten.id_kabupaten) as jumlah FROM pelayanan_kesehatan INNER JOIN kabupaten on kabupaten.id_kabupaten=pelayanan_kesehatan.id_kabupaten GROUP BY kabupaten.id_kabupaten");
        return $query->result();
    }
    function data_grafik_pelkes($id)
    {
        $query=$this->db->query("SELECT jenis_pelayanan.nama_jenis_pelayanan, COUNT(jenis_pelayanan.id_jenis_pelayanan) as jumlah from pelayanan_kesehatan INNER JOIN jenis_pelayanan on jenis_pelayanan.id_jenis_pelayanan=pelayanan_kesehatan.id_jenis_pelayanan where pelayanan_kesehatan.id_kabupaten='$id' GROUP by jenis_pelayanan.id_jenis_pelayanan");
        return $query->result();
    }
    function data_grafik_kec($id)
    {
        $query=$this->db->query("SELECT kecamatan.nama_kecamatan, count(pelayanan_kesehatan.id_kecamatan)as jumlah from pelayanan_kesehatan INNER JOIN kabupaten on kabupaten.id_kabupaten=pelayanan_kesehatan.id_kabupaten INNER JOIN kecamatan on kecamatan.id_kecamatan=pelayanan_kesehatan.id_kecamatan where kabupaten.id_kabupaten='$id' GROUP by kecamatan.id_kecamatan");
        return $query->result();
    }




}
