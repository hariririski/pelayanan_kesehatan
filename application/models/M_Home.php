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




}
