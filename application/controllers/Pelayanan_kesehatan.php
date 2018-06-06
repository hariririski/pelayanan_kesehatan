<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Pelayanan_kesehatan extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $admin=$this->session->userdata('admin');
         $this->load->model('M_Kabupaten');
         $this->load->model('M_Kecamatan');
         $this->load->model('M_Pelayanan_kesehatan');
         $this->load->model('M_Poli');
         $this->load->model('M_Jenis_pelayanan');
         if(empty($admin)==1){
            redirect("login/logout");
           }
  			 }


         public function index()
       	{
          $data['lihat'] = $this->M_Pelayanan_kesehatan->lihat_pelayanan_kesehatan();
       		$this->load->view('lihat_pelayanan_kesehatan',$data);
       	}
         public function layanan_kesehatan()
       	{
          $id=$_GET ['id'];
          $cek= $this->M_Pelayanan_kesehatan->tambah_layanan_kesehatan($id);
          if($cek){
            $this->tambah_berhasil();
            redirect("pelayanan_kesehatan/detail_pelayanan_kesehatan?id=$id");
          }else{
            $this->tambah_gagal();
            redirect("pelayanan_kesehatan/detail_pelayanan_kesehatan?id=$id");
          }
       	}
         public function umum()
       	{
          $data['lihat'] = $this->M_Pelayanan_kesehatan->lihat_pelayanan_kesehatan();
       		$this->load->view('lihat_pelayanan_kesehatan_umum',$data);
       	}

        function kecamatan($id) {
    			$data1=null;
    			$this->load->model('M_Kecamatan');
    			$data=$this->M_Kecamatan->kecamatan_kab($id);

          $data1.='<option value="">Pilih Kecamatan</option>';
    			foreach($data as $data2){
    			$data1.='<option value="'.$data2->id_kecamatan.'">'.$data2->nama_kecamatan.'</option>';
    			}
    			echo $data1;
    		}
        function desa($id) {
    			$data1=null;
    			$this->load->model('M_Desa');
    			$data=$this->M_Desa->desa_kec($id);

          $data1.='<option value="">Pilih Desa</option>';
    			foreach($data as $data2){
    			$data1.='<option value="'.$data2->id_desa.'">'.$data2->nama_desa.'</option>';
    			}
    			echo $data1;
    		}

        public function tambah()
       {
         $data['kabupaten'] = $this->M_Kabupaten->lihat_kabupaten();
         $data['kecamatan'] = $this->M_Kecamatan->lihat_kecamatan();
         $data['jenis_pelayanan'] = $this->M_Jenis_pelayanan->lihat_jenis_pelayanan();
         $this->load->view('Tambah_pelayanan_kesehatan',$data);
       }


       function proses_tambah_pelayanan_kesehatan(){
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'jpg|png|JPG|PNG|jpeg|JPEG';
        $config['max_size']      = 99999999;
        $new_name=$this->random_name(10);
        $config['file_name']=$new_name;
        $this->load->library('upload', $config);
        $filename = $_FILES['document']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $new_name=$new_name.".".$ext;
        if ( ! $this->upload->do_upload('document')) {

                $this->upload();
                $this->tambah_gagal();
                redirect('pelayanan_kesehatan/tambah');
        }else {
              $cek=$this->M_Pelayanan_kesehatan->Tambah_pelayanan_kesehatan($new_name);
              if($cek){
                $this->tambah_berhasil();
                redirect('pelayanan_kesehatan/tambah');
              }else{
                $this->tambah_gagal();
                redirect('pelayanan_kesehatan/tambah');
              }
        }
      }

      function random_name($length) {
					 $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
					 $password = substr( str_shuffle( $chars ), 0, $length );
					 return $password;
				 }

         public function hapus_pelayanan_kesehatan(){
             $id=$_GET ['id'];
             $cek= $this->M_Pelayanan_kesehatan->hapus($id);
             if($cek){
               $this->tambah_berhasil();
               redirect('pelayanan_kesehatan');
             }else{
               $this->tambah_gagal();
               redirect("pelayanan_kesehatan");
             }
         }
         public function hapus_layanan_kesehatan(){
             $id=$_GET ['id'];
             $id1=$_GET ['id1'];
             $cek= $this->M_Pelayanan_kesehatan->hapus_layanan($id);
             if($cek){
               $this->tambah_berhasil();
               redirect( site_url().'pelayanan_kesehatan/detail_pelayanan_kesehatan?id='.$id1);
             }else{
               $this->tambah_gagal();
                redirect( site_url().'pelayanan_kesehatan/detail_pelayanan_kesehatan?id='.$id1);
             }
         }



      public function detail_pelayanan_kesehatan()
     {
       $id=$_GET['id'];
       $data['lihat'] = $this->M_Pelayanan_kesehatan->pelayanan_kesehatan($id);
       $data['kabupaten'] = $this->M_Kabupaten->lihat_kabupaten();
       $data['kecamatan'] = $this->M_Kecamatan->lihat_kecamatan();
       $data['poli'] = $this->M_Poli->poli($id);
       $data['poli2'] = $this->M_Poli->lihat_poli();
       $data['layanan_kesehatan'] = $this->M_Pelayanan_kesehatan->layanan_kesehatan($id);
       $this->load->view('detail_pelayanan_kesehatan',$data);
     }
      public function detail_pelayanan_kesehatan_umum()
     {
       $id=$_GET['id'];
       $data['lihat'] = $this->M_Pelayanan_kesehatan->pelayanan_kesehatan($id);
       $data['kabupaten'] = $this->M_Kabupaten->lihat_kabupaten();
       $data['kecamatan'] = $this->M_Kecamatan->lihat_kecamatan();
       $data['poli'] = $this->M_Poli->poli($id);

       $data['layanan_kesehatan'] = $this->M_Pelayanan_kesehatan->layanan_kesehatan($id);
       $this->load->view('detail_pelayanan_kesehatan_',$data);
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
