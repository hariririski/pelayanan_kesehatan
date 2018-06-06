<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Desa extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Kabupaten');
         $this->load->model('M_Kecamatan');
         $this->load->model('M_Desa');
         $admin=$this->session->userdata('admin');
         if(empty($admin)==1){
            redirect("login/logout");
           }
  			 }


         public function index()
       	{
          $data['kabupaten'] = $this->M_Kabupaten->lihat_kabupaten();
          $data['kecamatan'] = $this->M_Kecamatan->lihat_kecamatan();
          $data['lihat'] = $this->M_Desa->lihat_desa();
       		$this->load->view('lihat_desa',$data);
       	}

        public function proses_tambah_desa(){
          $cek= $this->M_Desa->tambah_desa();
          if($cek){
            $this->tambah_berhasil();
            redirect('desa');
          }else{
            $this->tambah_gagal();
            redirect('desa');
          }
        }

        public function proses_hapus_desa(){
          	$id=$_GET ['id'];
          	$cek= $this->M_Desa->proses_hapus_desa($id);
            if($cek){
              $this->hapus_berhasil();
              redirect('desa');
            }else{
              $this->hapus_gagal();
              redirect('desa');
            }
        }
        public function proses_ubah_desa(){
          	$id=$_GET ['id'];
          	$cek= $this->M_Desa->proses_ubah_desa($id);
            if($cek){
              $this->hapus_berhasil();
              redirect('desa');
            }else{
              $this->hapus_gagal();
              redirect('desa');
            }
        }

        public function ubah_desa()
       {
         $id=$_GET['id'];
         $data['kabupaten'] = $this->M_Kabupaten->lihat_kabupaten();
         $data['kecamatan'] = $this->M_Kecamatan->lihat_kecamatan();
         $data['lihat'] = $this->M_Desa->lihat($id);
         $this->load->view('edit_desa',$data);
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
