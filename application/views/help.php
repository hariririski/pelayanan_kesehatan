<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Help</title>
  <?php echo $this->load->view('common/head', '', TRUE);?>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/css/bootstrap-extend.min.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/assets/css/site.min.css">
<!-- Plugins -->
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/vendor/animsition/animsition.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/vendor/asscrollable/asScrollable.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/vendor/switchery/switchery.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/vendor/intro-js/introjs.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/vendor/slidepanel/slidePanel.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/vendor/flag-icon-css/flag-icon.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/vendor/waves/waves.css">
<!-- Fonts -->
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/fonts/material-design/material-design.min.css">
<link rel="stylesheet" href="<?php echo site_url(); ?>/assets/global/fonts/brand-icons/brand-icons.min.css">
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
<!--[if lt IE 9]>
  <script src="<?php echo site_url(); ?>/assets/global/vendor/html5shiv/html5shiv.min.js"></script>
  <![endif]-->
<!--[if lt IE 10]>
  <script src="<?php echo site_url(); ?>/assets/global/vendor/media-match/media.match.min.js"></script>
  <script src="<?php echo site_url(); ?>/assets/global/vendor/respond/respond.min.js"></script>
  <![endif]-->
<!-- Scripts -->
<script src="<?php echo site_url(); ?>/assets/global/vendor/modernizr/modernizr.js"></script>
<script src="<?php echo site_url(); ?>/assets/global/vendor/breakpoints/breakpoints.js"></script>
<script>
Breakpoints();
</script>
</head>
<body class="site-navbar-small page-faq">

  <?php echo $this->load->view('common/menu', '', TRUE);?>

  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Help</h1>
    </div>
    <div class="page-content container-fluid">
      <div class="row">
        <div class="col-lg-3 col-sm-4">
          <!-- Panel -->
          <div class="panel">
            <div class="panel-body">
              <div class="list-group" data-plugin="nav-tabs" role="tablist">
                <a class="list-group-item active" data-toggle="tab" href="#category-1" aria-controls="category-1"
                role="tab">Umum</a>
                <a class="list-group-item" data-toggle="tab" href="#category-2" aria-controls="category-2"
                role="tab">Pengaduan</a>
              </div>
            </div>
          </div>
          <!-- End Panel -->
        </div>
        <div class="col-lg-9 col-sm-8">
          <!-- Panel -->
          <div class="panel">
            <div class="panel-body">
              <div class="tab-content">
                <!-- Categroy 1 -->
                <div class=" tab-pane animation-fade active" id="category-1" role="tabpanel">
                  <div class="panel-group panel-group-simple panel-group-continuous" id="accordion2"
                  aria-multiselectable="true" role="tablist">
                    <!-- Question 1 -->
                    <div class="panel">
                      <div class="panel-heading" id="question-1" role="tab">
                        <a class="panel-title" aria-controls="answer-1" aria-expanded="true" data-toggle="collapse"
                        href="#answer-1" data-parent="#accordion2">
                      Apa Itu Sistem Informasi Geografis Jalan Provinsi Aceh ?
                      </a>
                      </div>
                      <div class="panel-collapse collapse in" id="answer-1" aria-labelledby="question-1"
                      role="tabpanel">
                        <div class="panel-body">
                          Sistem Informasi Geografis Jalan Provinsi Aceh adalah Website Yang Menampilkan data Jalan dan Kondisi Jalan Provinsi Aceh Dengan Menggunakan Peta.
                        </div>
                      </div>
                    </div>
                    <!-- End Question 1 -->
                    <!-- Question 2 -->
                    <div class="panel">
                      <div class="panel-heading" id="question-2" role="tab">
                        <a class="panel-title" aria-controls="answer-2" aria-expanded="false" data-toggle="collapse"
                        href="#answer-2" data-parent="#accordion2">
                        Apa saja yang dapat dilihat di web Ini ?
                      </a>
                      </div>
                      <div class="panel-collapse collapse" id="answer-2" aria-labelledby="question-2"
                      role="tabpanel">
                        <div class="panel-body">
                          Website ini Memberikan Informasi Jalan Provinsi serta kondisi jalan provinsi Aceh. Terdapat Fitur Pengaduan Yang Memungkinkan Masyarakat Melakukan Pengaduan Terhadap Kondisi Jalan Provinsi Aceh.
                        </div>
                      </div>
                    </div>
                    <!-- End Question 2 -->
                    <!-- Question 3 -->
                    <div class="panel">
                      <div class="panel-heading" id="question-3" role="tab">
                        <a class="panel-title" aria-controls="answer-3" aria-expanded="false" data-toggle="collapse"
                        href="#answer-3" data-parent="#accordion2">
                        Bagaimana jika ingin Menghubungi Dinas Bina Marga ?
                      </a>
                      </div>
                      <div class="panel-collapse collapse" id="answer-3" aria-labelledby="question-3"
                      role="tabpanel">
                        <div class="panel-body">
                          Dapat Mendatangi DINAS BINA MARGA PROVINSI ACEH Di  Jl. Jendral Sudirman No.1 Kota Banda Aceh
                          Telp. 0651 - 46694, Fax. 0651 - 47009 Atau Dapat Mengirim Email Ke
                          Email: pengelola[at]acehprov.go.id
                        </div>
                      </div>
                    </div>
                    <!-- End Question 3 -->
                    <!-- Question 4 -->

                  </div>
                </div>
                <!-- End Categroy 1 -->
                <!-- Categroy 2 -->
                <div class="tab-pane animation-fade" id="category-2" role="tabpanel">
                  <div class="panel-group panel-group-simple panel-group-continuous" id="accordion"
                  aria-multiselectable="true" role="tablist">
                    <!-- Question 5 -->
                    <div class="panel">
                      <div class="panel-heading" id="question-5" role="tab">
                        <a class="panel-title" aria-controls="answer-5" aria-expanded="true" data-toggle="collapse"
                        href="#answer-5" data-parent="#accordion">
                      Apa itu Pengaduan ?
                      </a>
                      </div>
                      <div class="panel-collapse collapse in" id="answer-5" aria-labelledby="question-5"
                      role="tabpanel">
                        <div class="panel-body">
                          Pengaduan Adalah Pemberitahuan disertai permintaan oleh pihak yang berkepentingan kepada pejabat berwenang untuk menindak lanjuti Permasalahan Yang di Hadapai
                          Dalam Website ini Dapat Dilakukan Pengaduan Jalan Rusak Terhadap Jalan Provinsi  di Provinsi Aceh.
                        </div>
                      </div>
                    </div>
                    <!-- End Question 5 -->
                    <!-- Question 6 -->
                    <div class="panel">
                      <div class="panel-heading" id="question-6" role="tab">
                        <a class="panel-title" aria-controls="answer-6" aria-expanded="false" data-toggle="collapse"
                        href="#answer-6" data-parent="#accordion">
                          Bagamana Pengetahui Pengaduan telah Masuk/Diproses ?
                      </a>
                      </div>
                      <div class="panel-collapse collapse" id="answer-6" aria-labelledby="question-6"
                      role="tabpanel">
                        <div class="panel-body">
                          Hasil Pengaduan Dpaat dilihat Pada Menu Pengaduan Masyarakat -> Lihat Pengaduan.
                        </div>
                      </div>
                    </div>
                    <!-- End Question 6 -->
                    <!-- Question 7 -->
                    
                    <!-- End Question 7 -->
                  </div>
                </div>
                <!-- End Categroy 2 -->
                <!-- Categroy 3 -->

              </div>
            </div>
          </div>
          <!-- End Panel -->
        </div>
      </div>
    </div>
  </div>
    <?php echo $this->load->view('common/footer', '', TRUE);?>
  <!-- Core  -->
  <script src="<?php echo site_url(); ?>/assets/global/vendor/jquery/jquery.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/bootstrap/bootstrap.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/animsition/animsition.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/asscroll/jquery-asScroll.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/mousewheel/jquery.mousewheel.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/asscrollable/jquery.asScrollable.all.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/waves/waves.js"></script>
   <!-- Plugins -->
   <script src="<?php echo site_url(); ?>/assets/global/vendor/switchery/switchery.min.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/intro-js/intro.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/screenfull/screenfull.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/vendor/slidepanel/jquery-slidePanel.js"></script>
   <!-- Scripts -->
   <script src="<?php echo site_url(); ?>/assets/global/js/core.js"></script>
   <script src="<?php echo site_url(); ?>/assets/assets/js/site.js"></script>
   <script src="<?php echo site_url(); ?>/assets/assets/js/sections/menu.js"></script>
   <script src="<?php echo site_url(); ?>/assets/assets/js/sections/menubar.js"></script>
   <script src="<?php echo site_url(); ?>/assets/assets/js/sections/sidebar.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/js/configs/config-colors.js"></script>
   <script src="<?php echo site_url(); ?>/assets/assets/js/configs/config-tour.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/js/components/asscrollable.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/js/components/animsition.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/js/components/slidepanel.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/js/components/switchery.js"></script>
   <script src="<?php echo site_url(); ?>/assets/global/js/components/tabs.js"></script>
   <script src="<?php echo site_url(); ?>/assets/assets/examples/js/pages/faq.js"></script>
</body>
</html>
