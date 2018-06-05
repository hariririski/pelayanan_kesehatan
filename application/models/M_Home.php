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




}
