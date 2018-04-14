<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Umum extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Kabupaten');
         $this->load->model('M_Kecamatan');
         $this->load->model('M_Pelayanan_kesehatan');
         $this->load->model('M_Poli');
         $this->load->model('M_Jenis_pelayanan');



       }

         public function index()
       	{
          $data['lihat'] = $this->M_Pelayanan_kesehatan->lihat_pelayanan_kesehatan();
       		$this->load->view('lihat_pelayanan_kesehatan_umum',$data);
       	}
        public function detail()
       {
         $id=$_GET['id'];
         $data['lihat'] = $this->M_Pelayanan_kesehatan->pelayanan_kesehatan($id);
         $data['kabupaten'] = $this->M_Kabupaten->lihat_kabupaten();
         $data['kecamatan'] = $this->M_Kecamatan->lihat_kecamatan();
         $data['poli'] = $this->M_Poli->poli($id);
         $data['layanan_kesehatan'] = $this->M_Pelayanan_kesehatan->layanan_kesehatan($id);
         $this->load->view('detail_pelayanan_kesehatan_umum',$data);
       }


   }
?>
