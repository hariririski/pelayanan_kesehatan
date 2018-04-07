<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Home extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
         $this->load->model('M_Jalan_rusak');
  			 $this->load->database();
  			 }


         public function index()
       	{
          $data['ringan'] = $this->M_Jalan_rusak->jumlah_ringan();
          $data['berat'] = $this->M_Jalan_rusak->jumlah_berat();
          $data['belum_tembus'] = $this->M_Jalan_rusak->jumlah_belum_tembus();
       		$this->load->view('Home',$data);
       	}

        public function help()
       {
         $this->load->view('Help');
       }


   }
?>
