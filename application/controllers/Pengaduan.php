<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Pengaduan extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_Kabupaten');
         $this->load->model('M_Kecamatan');
         $this->load->model('M_Pengaduan');
         $this->load->model('M_Jalan');
  			 }


         public function index()
       	{
          $data['lihat'] = $this->M_Pengaduan->lihat_pengaduan();
          $data['umum'] = $this->M_Pengaduan->lihat_pengaduan_umum();
       		$this->load->view('Pengaduan',$data);
       	}

        public function tambah_pengaduan()
       {
         $data['kabupaten'] = $this->M_Kabupaten->lihat_kabupaten();
         $data['kecamatan'] = $this->M_Kecamatan->lihat_kecamatan();
         $this->load->view('Tambah_pengaduan',$data);
       }

       function proses_tambah_pengaduan(){
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'png|PNG|JPG|jpg|jpeg|JPE|gif|bmp';
        $config['max_size']      = 99999999;
        //$config['max_width']     = 10240;
        //$config['max_height']    = 7680;
        $new_name ="PENGADUAN".time().$_FILES["gambar"] ['name'];
        $new_name=str_replace(" ","_",$new_name);
        $config['file_name']=$new_name;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar')) {

                $this->session->set_flashdata('pesan', '
                <div class="alert alert-danger fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Gagal!</strong> Gambar Terlalu Besar.
                </div>');
                echo "filenya";
                //redirect('tambah_jalan');
        }else {
              $cek=$this->M_Pengaduan->tambah_pengaduan($new_name);
              if($cek){
                $this->tambah_berhasil();
                redirect('tambah_pengaduan');
              }else{
                $this->tambah_gagal();
                redirect('tambah_pengaduan');
              }
        }
      }

      public function detail_pengaduan()
     {
       $id=$_GET['id'];
       $data['lihat'] = $this->M_Pengaduan->pengaduan($id);
       $data['kabupaten'] = $this->M_Kabupaten->lihat_kabupaten();
       $data['kecamatan'] = $this->M_Kecamatan->lihat_kecamatan();
       $this->load->view('detail_pengaduan',$data);
     }
     public function verifikasi_pengaduan()
    {
      $id=$_GET['id'];
      $data['lihat'] = $this->M_Pengaduan->pengaduan($id);
      $data['kabupaten'] = $this->M_Kabupaten->lihat_kabupaten();
      $data['kecamatan'] = $this->M_Kecamatan->lihat_kecamatan();
      $data['jalan'] = $this->M_Jalan->lihat_jalan();
      $this->load->view('verifikasi_pengaduan',$data);
    }
    public function proses_pengaduan(){
      $id=$_GET['id'];
      $cek= $this->M_Pengaduan->proses_pengaduan($id);
      if($cek){
        $this->proses_pengaduan_berhasil();
        redirect("pengaduan");
      }else{
        $this->proses_pengaduan_gagal();
        redirect("pengaduan");
      }
    }

    public function proses_verifikasi_pengaduan(){
      $id=$_GET['id'];
      $cek= $this->M_Pengaduan->verifikasi_pengaduan($id);
      if($cek){
        $this->proses_verifikasi_pengaduan_berhasil();
        redirect("detail_pengaduan?id=".$id);
      }else{
        $this->proses_verifikasi_pengaduan_gagal();
        redirect("detail_pengaduan?id=".$id);
      }
    }
    public function reset_pengaduan(){
      $id=$_GET['id'];
      $cek= $this->M_Pengaduan->reset_pengaduan($id);
      if($cek){
        $this->reset_pengaduan_berhasil();
        redirect("detail_pengaduan?id=".$id);
      }else{
        $this->reset_pengaduan_gagal();
        redirect("detail_pengaduan?id=".$id);
      }
    }

    public function Palsu_pengaduan(){
      $id=$_GET['id'];
      $cek= $this->M_Pengaduan->Palsu_pengaduan($id);
      if($cek){
        $this->proses_pengaduan_palsu_berhasil();
          redirect("pengaduan");
      }else{
        $this->proses_pengaduan_palsu_gagal();
        redirect("pengaduan");
      }
    }

    public function hapus_pengaduan(){
      $id=$_GET['id'];
      $cek= $this->M_Pengaduan->hapus_pengaduan($id);
      if($cek){
        $this->hapus_berhasil();
          redirect("pengaduan");
      }else{
        $this->hapus_gagal();
          redirect("pengaduan");
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
                <strong>Berhasil !</strong> Data Berhasil Dihapus!.
                </div>');
      }
      function hapus_gagal(){
        $this->session->set_flashdata('pesan', '
                <div class="alert alert-danger fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Gagal!</strong> Data Gagal Di Hapus!.
                </div>');
      }

      function proses_pengaduan_berhasil(){
       $this->session->set_flashdata('pesan', '
               <div class="alert alert-success fade in">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Berhasil!</strong> Pengaduan Berhasil Diproses !.
               </div>');
     }
     function proses_pengaduan_gagal(){
       $this->session->set_flashdata('pesan', '
               <div class="alert alert-danger fade in">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>Gagal!</strong> Pengaduan Gagal Diproses!.
               </div>');
     }

     function proses_verifikasi_pengaduan_berhasil(){
      $this->session->set_flashdata('pesan', '
              <div class="alert alert-success fade in">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Berhasil!</strong> Pengaduan Berhasil Di Verifikasi !.
              </div>');
    }
    function proses_verifikasi_pengaduan_gagal(){
      $this->session->set_flashdata('pesan', '
              <div class="alert alert-danger fade in">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Gagal!</strong> Pengaduan Gagal Di Verifikasi!.
              </div>');
    }

    function proses_pengaduan_palsu_berhasil(){
     $this->session->set_flashdata('pesan', '
             <div class="alert alert-success fade in">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Berhasil!</strong> Menetapkan Pengaduan sebagai Pengaduan Palsu !.
             </div>');
   }
   function proses_pengaduan_palsu_gagal(){
     $this->session->set_flashdata('pesan', '
             <div class="alert alert-danger fade in">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Gagal!</strong> Menetapkan Pengaduan sebagai Pengaduan Palsu!.
             </div>');
   }

   function reset_pengaduan_berhasil(){
    $this->session->set_flashdata('pesan', '
            <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Berhasil!</strong> Berhasil Mereset Pengaduan !.
            </div>');
  }
  function reset_pengaduan_gagal(){
    $this->session->set_flashdata('pesan', '
            <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Gagal!</strong> Gagal Mereset Pengaduan!.
            </div>');
  }




   }
?>
