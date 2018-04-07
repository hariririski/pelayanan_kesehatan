<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


   function __construct() {
       parent::__construct();
			 $this->load->helper('url');
			 $this->load->library('session');
			 $this->load->database();
			 $this->load->model('M_Login');
			 $admin=$this->session->userdata('admin');


   }

	public function index()
	{
		if( empty($admin)==0 ){

		 redirect("home");
		}
		$this->load->view('login');
	}

	public function logout() {
		$this->session->unset_userdata('admin');
		$this->session->unset_userdata('super_admin');
		$this->session->sess_destroy();
		redirect('login');
	}

	public function proses_login() {
		$cek=$this->M_Login->login();
		if($cek==true){
			$username= $cek[0]->username;
			session_save_path();
			$this->session->set_userdata('admin',$username);
			$data="document.getElementById('exampleTopFullWidth').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('home');

		}else{
			$data="document.getElementById('exampleTopFullWidth').click();";
			$this->session->set_flashdata('pesan', 'onload="'.$data.'"');
			redirect('login');
		}
	}

}
