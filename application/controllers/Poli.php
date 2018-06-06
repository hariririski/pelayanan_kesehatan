<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Poli extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Poli');
         $admin=$this->session->userdata('admin');
         if(empty($admin)==1){
            redirect("login/logout");
           }
  			 }


         public function index()
       	{
          $data['lihat'] = $this->M_Poli->lihat_poli();
       		$this->load->view('lihat_poli',$data);
       	}

        public function proses_tambah_poli(){
          $cek= $this->M_Poli->tambah_poli();
          if($cek){
            $this->tambah_berhasil();
            redirect('poli');
          }else{
            $this->tambah_gagal();
            redirect('poli');
          }
        }
        public function proses_tambah_pelkes(){
          $id=$_GET ['id'];
          $cek= $this->M_Poli->tambah_pelkes($id);
          if($cek){
            $this->tambah_berhasil();
            redirect("pelayanan_kesehatan/detail_pelayanan_kesehatan?id=$id");
          }else{
            $this->tambah_gagal();
            redirect("pelayanan_kesehatan/detail_pelayanan_kesehatan?id=$id");
          }
        }

        public function hapus_poli(){
          	$id=$_GET ['id'];
          	$cek= $this->M_Poli->hapus_poli($id);
            if($cek){
              $this->hapus_berhasil();
              redirect('poli');
            }else{
              $this->hapus_gagal();
              redirect('poli');
            }
        }

        public function proses_ubah_kabupaten($id){
          $cek= $this->M_Kabupaten->ubah_kabupaten($id);
          if($cek){
            $this->edit_berhasil();
            redirect('kabupaten');
          }else{
            $this->edit_gagal();
            redirect('kabupaten');
          }
        }

        public function ubah_kabupaten()
       {
         $id=$_GET['id'];
         $data['lihat'] = $this->M_Kabupaten->kabupaten($id);
         $this->load->view('edit_kabupaten',$data);
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
