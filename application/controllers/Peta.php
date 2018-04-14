
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Peta extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Pelayanan_kesehatan');


  	  }


      public function index(){
      //  $data['jalan'] = $this->M_Pelayanan_kesehatan->lihat_jalan();
       	$this->load->view('maps/peta_jalan_rusak');
      }

      public function popup(){
      //  $data['lihat'] = $this->M_Pelayanan_kesehatan->jalan_rusak($_GET['id']);
      	$this->load->view('maps/popup');
      }




   }
?>
