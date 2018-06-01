<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Jenis_pelayanan extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Jenis_pelayanan');
         $admin=$this->session->userdata('admin');
         if(empty($admin)==1){
            redirect("login/logout");
           }
  			 }


         public function index()
       	{
          $data['lihat'] = $this->M_Jenis_pelayanan->lihat_jenis_pelayanan();
       		$this->load->view('lihat_jenis_pelayanan',$data);
       	}

        // public function proses_tambah_jenis_pelayanan(){
        //   $cek= $this->M_Jenis_pelayanan->tambah_jenis_pelayanan();
        //   if($cek){
        //     $this->tambah_berhasil();
        //     redirect('jenis_pelayanan');
        //   }else{
        //     $this->tambah_gagal();
        //     redirect('jenis_pelayanan');
        //   }
        // }

        function proses_tambah_jenis_pelayanan(){
         $config['upload_path']   = './uploads/';
         $config['allowed_types'] = 'jpg|png';
         $config['max_size']      = 99999999;
         $new_name=$this->random_name(10);
         $config['file_name']=$new_name;
         $this->load->library('upload', $config);
         $filename = $_FILES['icon']['name'];
         $ext = pathinfo($filename, PATHINFO_EXTENSION);
         $new_name=$new_name.".".$ext;
         if ( ! $this->upload->do_upload('icon')) {
                 $this->upload();
                 $this->tambah_gagal();
              //  redirect('jenis_pelayanan');
         }else {
               $cek=$this->M_Jenis_pelayanan->tambah_jenis_pelayanan($new_name);
               if($cek){
                 $this->tambah_berhasil();
                 redirect('jenis_pelayanan');
               }else{
                 $this->tambah_gagal();
              redirect('jenis_pelayanan');
               }
         }
       }
       function random_name($length) {
 					 $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
 					 $password = substr( str_shuffle( $chars ), 0, $length );
 					 return $password;
 				 }

        public function proses_hapus_kabupaten(){
          	$id=$_GET ['id'];
          	$cek= $this->M_Kabupaten->proses_hapus_kabupaten($id);
            if($cek){
              $this->hapus_berhasil();
              redirect('kabupaten');
            }else{
              $this->hapus_gagal();
              redirect('kabupaten');
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
