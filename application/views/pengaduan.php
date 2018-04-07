<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Pegaduan</title>
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
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/datatables-bootstrap/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/datatables-fixedheader/dataTables.fixedHeader.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/datatables-responsive/dataTables.responsive.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/assets/examples/css/tables/datatable.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/font-awesome/font-awesome.css">
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
<body class="site-navbar-small ">


<?php echo $this->load->view('common/menu', '', TRUE);?>


  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Data Pengaduan Jalan Rusak</h1>

    </div>
    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>

        </header>
        <div class="panel-body">
          <br>
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>NO</th>
                <th>Tanggal</th>
                <th>Nama Jalan</th>
                <th>Kabupaten</th>
                <th>Kecamatan</th>
                <th>Kondisi</th>
                <th>Status</th>
                <th>Pelapor</th>
                <?php
                $admin=$this->session->userdata('admin');
                 if(empty($admin)==0){
                ?>

                <th>Detail</th>
                <?php } ?>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>NO</th>
                <th>Tanggal</th>
                <th>Nama Jalan</th>
                <th>Kabupaten</th>
                <th>Kecamatan</th>
                <th>Kondisi</th>
                <th>Status</th>
                <th>Pelapor</th>
                <?php
                $admin=$this->session->userdata('admin');
                 if(empty($admin)==0){
                ?>

                <th>Detail</th>
                <?php } ?>
              </tr>
            </tfoot>
            <tbody>
              <?php
                 $i=0;
                 $admin=$this->session->userdata('admin');
                  if(empty($admin)==0){
                 foreach($lihat as $data_jalan){
                  $i++;
               ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $data_jalan->tanggal_create; ?></td>
                  <td><?php echo $data_jalan->nama_jalan; ?></td>
                  <td><?php echo $data_jalan->nama_kabupaten; ?></td>
                  <td><?php echo $data_jalan->nama_kecamatan; ?></td>

                  <td>
                    <?php
                    if($data_jalan->kondisi==1){
                      echo '<span class="label label-round label-warning">Rusak Ringan</span>';
                    }else if($data_jalan->kondisi==2){
                      echo '<span class="label label-round label-danger">Rusak Parah</span>';
                    }else if($data_jalan->kondisi==3){
                      echo '<span class="label label-round label-primary">Belum Tembus</span>';
                    }


                    ?>
                  </td>
                  <td>
                    <?php
                    if($data_jalan->status==0){
                      echo '<span class="label label-round label-primary">Belum Diperoses</span>';
                    }else if($data_jalan->status==1){
                      echo '<span class="label label-round label-warning">Sedang Diperoses</span>';
                    }else if($data_jalan->status==2){
                      echo '<span class="label label-round label-success">Terverifikasi</span>';
                    }else if($data_jalan->status==3){
                      echo '<span class="label label-round label-danger">Pengaduan Palsu</span>';
                    }


                    ?>

                  <td><?php echo $data_jalan->nama_pelapor; ?></td>
                  <?php
                  $admin=$this->session->userdata('admin');
                   if(empty($admin)==0){
                  ?>
                  <?php
                  echo"<td class='center' width='10%'><a href='". site_url()."detail_pengaduan?id=".$data_jalan->kode_pengaduan."'>
                  <button type='button' class='btn btn-success'>Detail</button></a>
                    </td>";
                  ?>
                  <?php
                    }
                  ?>
                </tr>
              <?php
               }
               ?>
               <?php
             }else{
                ?>
                <?php
                   $i=0;

                   foreach($umum as $data_jalan){
                    $i++;
                 ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $data_jalan->tanggal_create; ?></td>
                    <td><?php echo $data_jalan->nama_jalan; ?></td>
                    <td><?php echo $data_jalan->nama_kabupaten; ?></td>
                    <td><?php echo $data_jalan->nama_kecamatan; ?></td>

                    <td>
                      <?php
                      if($data_jalan->kondisi==1){
                        echo '<span class="label label-round label-warning">Rusak Ringan</span>';
                      }else if($data_jalan->kondisi==2){
                        echo '<span class="label label-round label-danger">Rusak Parah</span>';
                      }else if($data_jalan->kondisi==3){
                        echo '<span class="label label-round label-primary">Belum Tembus</span>';
                      }


                      ?>
                    </td>
                    <td>
                      <?php
                      if($data_jalan->status==0){
                        echo '<span class="label label-round label-warning">Belum Diperoses</span>';
                      }else if($data_jalan->status==1){
                        echo '<span class="label label-round label-danger">Sedang Diperoses</span>';
                      }


                      ?>

                    <td><?php echo $data_jalan->nama_pelapor; ?></td>

                  </tr>
                <?php
                 }
                 ?>
                <?php
                 }
                 ?>
            </tbody>
          </table>
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
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-responsive/dataTables.responsive.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datatables-tabletools/dataTables.tableTools.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asrange/jquery-asRange.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootbox/bootbox.js"></script>
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
  <script src="<?php echo site_url(); ?>assets/global/js/components/datatables.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/examples/js/tables/datatable.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/examples/js/uikit/icon.js"></script>
</body>
</html>
