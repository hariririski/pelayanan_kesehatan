<?php
class M_Home extends CI_Model{
    function Peta()
    {
        $query=$this->db->query("");
        return $query->result();
    }




}
