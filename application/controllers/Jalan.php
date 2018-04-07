<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Jalan extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $admin=$this->session->userdata('admin');
         $this->load->model('M_Kabupaten');
         $this->load->model('M_Kecamatan');
         $this->load->model('M_Jalan');
         if(empty($admin)==1){
            redirect("login/logout");
           }
  			 }


         public function index()
       	{
          $data['lihat'] = $this->M_Jalan->lihat_jalan();
       		$this->load->view('Lihat_jalan',$data);
       	}

        function kecamatan($id) {
    			$data1=null;
    			$this->load->model('M_Kecamatan');
    			$data=$this->M_Kecamatan->kecamatan_kab($id);

    			foreach($data as $data2){
    			$data1.='<option value="'.$data2->id_kecamatan.'">'.$data2->nama_kecamatan.'</option>';
    			}
    			echo $data1;
    		}

        public function tambah_jalan()
       {
         $data['kabupaten'] = $this->M_Kabupaten->lihat_kabupaten();
         $data['kecamatan'] = $this->M_Kecamatan->lihat_kecamatan();
         $this->load->view('tambah_jalan',$data);
       }


       function proses_tambah_jalan(){
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'pdf|rar|zip|docx|doc|xlsx|xls';
        $config['max_size']      = 99999999;
        //$config['max_width']     = 10240;
        //$config['max_height']    = 7680;
        $new_name ="JALAN".time().$_FILES["document"] ['name'];
        $new_name=str_replace(" ","_",$new_name);
        $config['file_name']=$new_name;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('document')) {

                $this->upload();
                $this->tambah_gagal();
                redirect('tambah_jalan');
        }else {
              $cek=$this->M_Jalan->tambah_jalan($new_name);
              if($cek){
                $this->tambah_berhasil();
                redirect('tambah_jalan');
              }else{
                $this->tambah_gagal();
                redirect('tambah_jalan');
              }
        }
      }

      function proses_edit_jalan($document_lama){
        $kode_ruas=$this->input->post('kode_ruas');
        $document_baru=$_FILES["document"] ['name'];

        if(!empty($document_baru)){

         $config['upload_path']   = './uploads/';
         $config['allowed_types'] = 'pdf|rar|zip|docx|doc|xlsx|xls';
         $config['max_size']      = 99999999;
         //$config['max_width']     = 10240;
         //$config['max_height']    = 7680;
         $new_name ="JALAN".time().$_FILES["document"] ['name'];
         $new_name=str_replace(" ","_",$new_name);
         $config['file_name']=$new_name;
         $this->load->library('upload', $config);

         if ( ! $this->upload->do_upload('document')) {

                 $this->upload();
                 $this->tambah_gagal();
                 redirect('detail_jalan?id='.$kode_ruas);
         }else {
               $link= FCPATH."uploads/".$document_lama;
               unlink($link);
               $cek=$this->M_Jalan->edit_jalan($kode_ruas,$new_name);
         }

       }else {
         $cek=$this->M_Jalan->edit_jalan($kode_ruas,$document_lama);
       }

       if($cek){
         $this->edit_berhasil();
         redirect('detail_jalan?id='.$kode_ruas);
       }else{
         $this->edit_gagal();
         redirect('detail_jalan?id='.$kode_ruas);
       }
     }

      public function proses_hapus_jalan(){
          $id=$_GET ['id'];
          $cek= $this->M_Jalan->proses_hapus_jalan($id);
          if($cek){
            $this->tambah_berhasil();
            redirect('jalan');
          }else{
            $this->tambah_gagal();
            redirect("jalan");
          }
      }

      public function detail_jalan()
     {
       $id=$_GET['id'];
       $data['lihat'] = $this->M_Jalan->jalan($id);
       $data['kabupaten'] = $this->M_Kabupaten->lihat_kabupaten();
       $data['kecamatan'] = $this->M_Kecamatan->lihat_kecamatan();
       $this->load->view('detail_jalan',$data);
     }
     public function edit_jalan()
    {
      $id=$_GET['id'];
      $data['lihat'] = $this->M_Jalan->jalan($id);
      $data['kabupaten'] = $this->M_Kabupaten->lihat_kabupaten();
      $data['kecamatan'] = $this->M_Kecamatan->lihat_kecamatan();
      $this->load->view('edit_jalan',$data);
    }

      function tambah_berhasil(){
  			$this->session->set_flashdata('pesan', '
  							<div class="alert alert-success fade in">
  							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  							<strong>Berhasil!</strong> Data Berhasil Di Tambahkan!.
  							</div>');
  		}
  		function tambah_gagal(){
  			$this->session->set_flashdata('pesan', '
  							<div class="alert alert-danger fade in">
  							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  							<strong>Gagal!</strong> Data Gagal ditambahkan!.
  							</div>');
  		}
  		function edit_berhasil(){
  			$this->session->set_flashdata('pesan', '
  							<div class="alert alert-success fade in">
  							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  							<strong>Berhasil!</strong> Data Berhasil Di Perbaharui!.
  							</div>');
  		}
  		function edit_gagal(){
  			$this->session->set_flashdata('pesan', '
  							<div class="alert alert-danger fade in">
  							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  							<strong>Gagal!</strong> Data Gagal Di Perbaharui!.
  							</div>');
  		}
  		function hapus_berhasil(){
  			$this->session->set_flashdata('pesan', '
  							<div class="alert alert-success fade in">
  							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  							<strong>Berhasil!</strong> Data Berhasil Dihapus!.
  							</div>');
  		}
  		function hapus_gagal(){
  			$this->session->set_flashdata('pesan', '
  							<div class="alert alert-danger fade in">
  							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  							<strong>Gagal!</strong> Data Gagal Di Hapus!.
  							</div>');
  		}
      function upload(){
  			$this->session->set_flashdata('pesan', '
  							<div class="alert alert-danger fade in">
  							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  							<strong>Gagal!</strong> File Upload Tidak Sesuai!.
  							</div>');
  		}


   }
?>
