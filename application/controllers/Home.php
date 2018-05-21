<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Home extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
         $this->load->model('M_Pelayanan_kesehatan');
         $this->load->model('M_Jenis_pelayanan');
         $this->load->model('M_Kabupaten');
  			 $this->load->database();
  			 }


         public function index()
       	{

       		$this->load->view('Home');
       	}
         public function slider()
       	{

       		$this->load->view('slider');
       	}
         public function data()
       	{
          $data['lihat'] = $this->M_Pelayanan_kesehatan->lihat_pelayanan_kesehatan();
          $data['jenis'] = $this->M_Jenis_pelayanan->lihat_jenis_pelayanan();
          $data['kabupaten'] = $this->M_Kabupaten->Lihat_kabupaten();
       		$this->load->view('data',$data);
       	}

        public function help()
       {
         $this->load->view('Help');
       }
        public function peta()
       {
         $this->load->view('peta_pelayanan.php');
       }


   }
?>
