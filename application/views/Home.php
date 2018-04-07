<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Home</title>
  <?php echo $this->load->view('common/head', '', TRUE);?>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/assets/css/site.min.css">
  <!-- Plugins -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/waves/waves.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/chartist-js/chartist.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/assets/examples/css/dashboard/v1.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/material-design/material-design.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
    <script src="<?php echo site_url(); ?>assets/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="<?php echo site_url(); ?>assets/global/vendor/media-match/media.match.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="<?php echo site_url(); ?>assets/global/vendor/modernizr/modernizr.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/breakpoints/breakpoints.js"></script>
  <script>
  Breakpoints();
  </script>
</head>
<body class="site-navbar-small dashboard">

  <?php echo $this->load->view('common/menu', '', TRUE);?>

  <div class="page animsition">
    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <div class="col-lg-12 col-sm-12">
          <!-- Widget Linearea One-->
          <div class="widget widget-shadow" id="widgetLineareaOne">
            <div class="widget-content">
              <div class="padding-1 padding-top-1">
                <center><h3>Peta Jalan Rusak</h3></center>
                <iframe  src="<?php echo site_url(); ?>/peta" width="100%" height="750px" scrolling="no" frameborder="0"></iframe>

              </div>
            </div>
          </div>
          <!-- End Widget Linearea One -->
        </div>
        <div class="col-lg-4 col-sm-12">
          <!-- Widget Linearea One-->
          <div class="widget widget-shadow" id="widgetLineareaOne">
            <div class="widget-content">
              <div class="padding-20 padding-top-10">
                <div class="clearfix">
                  <div class="grey-800 pull-left padding-vertical-10">
                    <i class="icon md-account grey-600 font-size-24 vertical-align-bottom margin-right-5"></i>Total Jalan Rusak Ringan
                  </div>
                    <span class=" pull-right grey-700 font-size-30">
                      <?php
                         foreach($ringan as $ringan){
                           echo $ringan->jumlah_ringan;
                         }
                       ?>
                    </span>
                </div>
                <div class="margin-bottom-20 grey-500">
                  <center>  <img src="<?php echo site_url(); ?>assets/image/rusak_ringan.png"><center>
                </div>

              </div>
            </div>
          </div>
          <!-- End Widget Linearea One -->
        </div>
        <div class="col-lg-4 col-sm-12">
          <!-- Widget Linearea One-->
          <div class="widget widget-shadow" id="widgetLineareaOne">
            <div class="widget-content">
              <div class="padding-20 padding-top-10">
                <div class="clearfix">
                  <div class="grey-800 pull-left padding-vertical-10">
                    <i class="icon md-account grey-600 font-size-24 vertical-align-bottom margin-right-5"></i>Total Jalan Rusak Berat
                  </div>
                    <span class=" pull-right grey-700 font-size-30">
                      <?php
                         foreach($berat as $berat){
                           echo $berat->jumlah_berat;
                         }
                       ?>
                    </span>
                </div>
                <div class="margin-bottom-20 grey-500">
              <center>  <img src="<?php echo site_url(); ?>assets/image/rusak_berat.png"><center>
                </div>

              </div>
            </div>
          </div>
          <!-- End Widget Linearea One -->
        </div>

        <div class="col-lg-4 col-sm-12">
          <!-- Widget Linearea One-->
          <div class="widget widget-shadow" id="widgetLineareaOne">
            <div class="widget-content">
              <div class="padding-20 padding-top-10">
                <div class="clearfix">
                  <div class="grey-800 pull-left padding-vertical-10">
                    <i class="icon md-account grey-600 font-size-24 vertical-align-bottom margin-right-5"></i>Total Jalan Belum Tembus
                  </div>
                  <span class=" pull-right grey-700 font-size-30">
                    <?php
                       foreach($belum_tembus as $belum_tembus){
                         echo $belum_tembus->jumlah_belum_tembus;
                       }
                     ?>
                  </span>
                </div>
                <div class="margin-bottom-20 grey-500">
                  <center>  <img src="<?php echo site_url(); ?>assets/image/belum_tembus.png"><center>
                </div>

              </div>
            </div>
          </div>
          <!-- End Widget Linearea One -->
        </div>


      </div>
    </div>
  </div>
  <!-- End Page -->
  <!-- Footer -->
    <?php echo $this->load->view('common/footer', '', TRUE);?>
  <!-- Core  -->
  <script src="<?php echo site_url(); ?>assets/global/vendor/jquery/jquery.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/animsition/animsition.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/waves/waves.js"></script>
  <!-- Plugins -->
  <script src="<?php echo site_url(); ?>assets/global/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/intro-js/intro.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/screenfull/screenfull.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/slidepanel/jquery-slidePanel.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/chartist-js/chartist.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/matchheight/jquery.matchHeight-min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/peity/jquery.peity.min.js"></script>
  <!-- Scripts -->
  <script src="<?php echo site_url(); ?>assets/global/js/core.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/site.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/sections/menu.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/sections/menubar.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/sections/sidebar.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/configs/config-colors.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/js/configs/config-tour.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/asscrollable.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/animsition.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/slidepanel.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/switchery.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/tabs.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/matchheight.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/jvectormap.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/peity.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/examples/js/dashboard/v1.js"></script>
</body>
</html>
