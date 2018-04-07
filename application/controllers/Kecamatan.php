<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Kecamatan extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Kabupaten');
         $this->load->model('M_Kecamatan');
         $admin=$this->session->userdata('admin');
         if(empty($admin)==1){
            redirect("login/logout");
           }
  			 }


         public function index()
       	{
          $data['select'] = $this->M_Kabupaten->lihat_kabupaten();
          $data['lihat'] = $this->M_Kecamatan->lihat_kecamatan();
       		$this->load->view('lihat_Kecamatan',$data);
       	}

        public function proses_tambah_kecamatan(){
          $cek= $this->M_Kecamatan->tambah_kecamatan();
          if($cek){
            $this->tambah_berhasil();
            redirect('kecamatan');
          }else{
            $this->tambah_gagal();
            redirect('kecamatan');
          }
        }

        public function proses_hapus_kecamatan(){
          	$id=$_GET ['id'];
          	$cek= $this->M_Kecamatan->proses_hapus_kecamatan($id);
            if($cek){
              $this->hapus_berhasil();
              redirect('kecamatan');
            }else{
              $this->hapus_gagal();
              redirect('kecamatan');
            }
        }

        public function ubah_kecamatan()
       {
         $id=$_GET['id'];
         $data['select'] = $this->M_Kabupaten->lihat_kabupaten();
         $data['lihat'] = $this->M_Kecamatan->kecamatan($id);
         $this->load->view('edit_kecamatan',$data);
       }

       public function proses_ubah_kecamatan($id){
         $cek= $this->M_Kecamatan->ubah_kecamatan($id);
         if($cek){
           $this->edit_berhasil();
           redirect('kecamatan');
         }else{
           $this->edit_gagal();
           redirect('kecamatan');
         }
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
