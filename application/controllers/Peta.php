
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Peta extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Jalan_rusak');
         $this->load->model('M_Jalan');

  	  }


      public function index(){
        $data['jalan'] = $this->M_Jalan->lihat_jalan();
        $data['lihat'] = $this->M_Jalan_rusak->lihat_jalan_rusak_aktif();
       	$this->load->view('maps/peta_jalan_rusak',$data);
      }

      public function popup(){
        $data['lihat'] = $this->M_Jalan_rusak->jalan_rusak($_GET['id']);
      	$this->load->view('maps/popup',$data);
      }




   }
?>
