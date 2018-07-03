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
         $this->load->model('M_Home');
  			 $this->load->database();
  			 }


         public function index()
       	{
          $data['jumlah_rs'] = $this->M_Home->jumlah_rs();
          $data['jumlah_puskesmas'] = $this->M_Home->jumlah_puskesmas();
          $data['jumlah_apotek'] = $this->M_Home->jumlah_apotek();
       		$this->load->view('Home',$data);
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
         $this->load->view('peta_pelayanan');
       }
        public function persebaran()
       {
         $this->load->view('persebaran');
       }
        public function grafik()
       {
         $this->load->view('grafik_kab');
       }
        public function data_grafik()
       {

          $data['lihat'] = $this->M_Home->data_grafik();

        	$this->load->view('data/data',$data);
       }


   }
?>
