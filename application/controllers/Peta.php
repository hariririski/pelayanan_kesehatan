
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Peta extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Pelayanan_kesehatan');
         $this->load->model('M_Layer');
         $this->load->model('M_Jenis_pelayanan');
         $this->load->model('M_Kabupaten');


  	  }


      public function index(){
        $data['lihat'] = $this->M_Pelayanan_kesehatan->lihat_pelayanan_kesehatan();
        $data['layer'] = $this->M_Layer->lihat_layer();
        $data['jenis'] = $this->M_Jenis_pelayanan->lihat_jenis_pelayanan();
        $data['kabupaten'] = $this->M_Kabupaten->Lihat_kabupaten();
       	$this->load->view('maps/peta',$data);
      }
      public function persebaran(){
        $data['lihat'] = $this->M_Pelayanan_kesehatan->lihat_pelayanan_kesehatan();
        $data['layer'] = $this->M_Layer->lihat_layer();
        $data['jenis'] = $this->M_Jenis_pelayanan->lihat_jenis_pelayanan();
        $data['kabupaten'] = $this->M_Kabupaten->Lihat_kabupaten();
       	$this->load->view('maps/persebaran',$data);
      }

      public function popup(){
        $id=$_GET['id'];
        $data['lihat'] = $this->M_Pelayanan_kesehatan->pelayanan_kesehatan($id);
      	$this->load->view('maps/popup',$data);
      }




   }
?>
