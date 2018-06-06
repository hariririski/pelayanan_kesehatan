<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Detail Pelayanan Kesehatan</title>
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
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/select2/select2.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/bootstrap-select/bootstrap-select.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/icheck/icheck.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/switchery/switchery.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/asrange/asRange.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/asspinner/asSpinner.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/clockpicker/clockpicker.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/ascolorpicker/asColorPicker.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/bootstrap-touchspin/bootstrap-touchspin.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/card/card.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/jquery-labelauty/jquery-labelauty.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/bootstrap-maxlength/bootstrap-maxlength.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/jt-timepicker/jquery-timepicker.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/jquery-strength/jquery-strength.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/multi-select/multi-select.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/typeahead-js/typeahead.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/assets/examples/css/forms/advanced.css">
   <!-- Fonts -->
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/material-design/material-design.min.css">
   <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/fonts/brand-icons/brand-icons.min.css">
   <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <script src="<?php echo site_url(); ?>assets/global/vendor/modernizr/modernizr.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/breakpoints/breakpoints.js"></script>
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/global/vendor/toastr/toastr.css">

  <script>
  Breakpoints();
  </script>
  <style type="text/css">
     #map {
       margin: 10px;

       width: 100%;
       height: 400px;

       padding: 10px;
     }

 </style>
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
 <script src=" https://maps.googleapis.com/maps/api/js?key=AIzaSyAC5P_tZTLf8yk8O56lho1wqV6cYxvLa5o&origins&callback=initMap"> </script>

</head>
<body class="site-navbar-small ">


<?php echo $this->load->view('common/menu', '', TRUE);?>

<?php
   foreach($lihat as $data_pelayanan_kesehatan){
 ?>
  <div class="page animsition">
    <div class="page-header">
      <?php echo $this->session->flashdata('pesan')?>
      <h1 class="page-title"><?php echo $data_pelayanan_kesehatan->nama_pelayanan_kesehatan?></h1>


    </div>
    <div class="page-content">
      <div class="panel">

          <div class="panel-body">
            <form   action="pelayanan_kesehatan/proses_tambah_pelayanan_kesehatan" method="post" enctype="multipart/form-data" class="fv-form fv-form-bootstrap">

              <div class="row row-lg">
                <div class="col-lg-6 form-horizontal">

                  <div class="form-group form-material ">

                <div class=" col-lg-12 col-sm-12">
                  <div id="map"></div>
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Lokasi Koodinat
                    </label>
                    <div class=" col-lg-9 col-sm-9">
                      <br>
                      <div class=" col-lg-4 col-sm-3">
                        <label class="col-lg-4 col-sm-1 control-label">Lat
                        </label>
                      </div>
                      <div class=" col-lg-5 col-sm-3">
                        <input type="text"  class="col-lg-5 col-sm-3 form-control" id="latitude"  name="lat" placeholder="Latitude" required="" >
                      </div>

                      <div class=" col-lg-4 col-sm-3">
                        <label class="col-lg-4 col-sm-1 control-label">Lon
                        </label>
                      </div>
                      <div class=" col-lg-5 col-sm-3">
                        <input type="text"  class="col-lg-5 col-sm-3 form-control" id="longitude"  name="lon" placeholder="Longitude" required="" >
                      </div>
                  </div>
                </div>
                    <script type="text/javascript">
                      //* Fungsi untuk mendapatkan nilai latitude longitude
                      function updateMarkerPosition(latLng) {
                          document.getElementById('latitude').value = [latLng.lat()]
                          document.getElementById('longitude').value = [latLng.lng()]
                        }

                  var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 13,
                  center: new google.maps.LatLng(<?php echo $data_pelayanan_kesehatan->lat?>,<?php echo $data_pelayanan_kesehatan->lon?>),
                   mapTypeId: google.maps.MapTypeId.ROADMAP
                    });

                  var latLng = new google.maps.LatLng(<?php echo $data_pelayanan_kesehatan->lat?>,<?php echo $data_pelayanan_kesehatan->lon?>);

                  /* buat marker yang bisa di drag lalu
                    panggil fungsi updateMarkerPosition(latLng)
                   dan letakan posisi terakhir di id=latitude dan id=longitude
                   */
                  var marker = new google.maps.Marker({
                      position : latLng,
                      title : 'lokasi',
                      map : map,
                      draggable : true
                    });

                  updateMarkerPosition(latLng);
                  google.maps.event.addListener(marker, 'drag', function() {
                      updateMarkerPosition(marker.getPosition());
                    });
                  </script>
              </div>

              </div>

                </div>

                <div class="col-lg-6 form-horizontal">
                  <div class="form-group form-material ">

                      <div class="col-12 col-md-12">
                          <div class="example">
                            <div class="card">
                              <center><img class="img-fluid w-full " width="70%" src="<?php echo site_url(); ?>uploads/<?php echo $data_pelayanan_kesehatan->foto?>" alt="..."></center>
                            </div>
                          </div>
                      </div>



                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-5 col-sm-5 control-label">Kode Pelayanan Kesehatan
                      <span class="required"></span>
                    </label>
                    <div class=" col-lg-7 col-sm-7">
                      <input type="text" class="form-control" value="<?php echo $data_pelayanan_kesehatan->id_pelayanan_kesehatan?>" readonly name="id_pelayan_kesehatan" placeholder="Kode Ruas" required=""  >
                    </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-5 col-sm-5 control-label">Nama Pelayanan Kesehatan
                      <span class="required"></span>
                    </label>
                    <div class=" col-lg-7 col-sm-7">
                      <input type="text" class="form-control" value="<?php echo $data_pelayanan_kesehatan->nama_pelayanan_kesehatan?>" readonly name="id_pelayan_kesehatan" placeholder="Kode Ruas" required=""  >
                    </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-5 col-sm-5 control-label">Jenis Pelayanan Kesehatan
                      <span class="required"></span>
                    </label>
                    <div class=" col-lg-7 col-sm-7">
                    <input type="text" class="form-control" name="alamat"  value="<?php echo $data_pelayanan_kesehatan->nama_jenis_pelayanan?>"  required="" >
                    </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-5 col-sm-5 control-label">Alamat
                      <span class="required"></span>
                    </label>
                    <div class=" col-lg-7 col-sm-7">
                    <input type="text" class="form-control" name="alamat"  value="<?php echo $data_pelayanan_kesehatan->alamat?>"  required="" >
                    </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-5 col-sm-5 control-label">Kabupaten
                      <span class="required"></span>
                    </label>
                    <div class=" col-lg-7 col-sm-7">
                    <input type="text" class="form-control" name="alamat"  value="<?php echo $data_pelayanan_kesehatan->nama_kabupaten?>"  required="" >
                    </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-5 col-sm-5 control-label">Kecamatan
                      <span class="required"></span>
                    </label>
                    <div class=" col-lg-7 col-sm-7">
                    <input type="text" class="form-control" name="alamat"   value="<?php echo $data_pelayanan_kesehatan->nama_kecamatan?>" required="" >
                    </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-5 col-sm-5 control-label">Desa
                      <span class="required"></span>
                    </label>
                    <div class=" col-lg-7 col-sm-7">
                    <input type="text" class="form-control" name="alamat"  required=""  value="<?php echo $data_pelayanan_kesehatan->nama_desa?>" >
                    </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-5 col-sm-5 control-label">No Telepon
                      <span class="required"></span>
                    </label>
                    <div class=" col-lg-7 col-sm-7">
                      <input type="text" class="form-control" name="no_tlp" placeholder="NO Telepon" required=""  value="<?php echo $data_pelayanan_kesehatan->no_tlp?>">
                    </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-5 col-sm-5 control-label">Email
                      <span class="required"></span>
                    </label>
                    <div class=" col-lg-7 col-sm-7">
                      <input type="email" class="form-control" name="email"  value="<?php echo $data_pelayanan_kesehatan->email?>" required="" >
                    </div>
                  </div>

                  <div class="form-group form-material ">
                    <label class="col-lg-5 col-sm-5 control-label">Halaman Web
                      <span class="required"></span>
                    </label>
                    <div class=" col-lg-7 col-sm-7">
                      <input type="text" class="form-control" name="web"  value="<?php echo $data_pelayanan_kesehatan->web?>" required="" >

                  </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-5 col-sm-5 control-label">Akreditasi
                      <span class="required"></span>
                    </label>
                    <div class=" col-lg-7 col-sm-7">
                      <input type="text" class="form-control" name="status_akreditasi"  value="<?php echo $data_pelayanan_kesehatan->status_akreditasi?>" required="" >
                    </div>
                  </div>



                </div>

                <div class="form-group form-material col-lg-12 text-right padding-top-m">
                  <?php echo"
                  <center>
                  <a href='". site_url()."pelayanan_kesehatan/edit_pelayanan_kesehatan?id=$data_pelayanan_kesehatan->id_pelayanan_kesehatan' onclick=\"return confirm('Apakah Anda Yakin Untuk Mengubah Data ?')
                      \" title='Hapus'><button type='button' class='btn btn-warning'>Perubahan Data</button></a>
                  <center>
                    ";?>
                </div>
              </div>
            </form>
          </div>
        </div>
      <div class="panel">

          <div class="panel-body">


              <div class="row row-lg">
                <div class="col-lg-6 form-horizontal">

                    <h3 align="center">Layanan Kesehatan</h3>
                    <div class="">
                      <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Poli</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>No</th>
                            <th>Nama Layanan Kesehatan</th>
                            <th>Edit</th>
                            <th>Hapus</th>

                          </tr>
                        </tfoot>
                        <tbody>


                          <?php
                             $i=0;
                             $id=$_GET['id'];
                             foreach($layanan_kesehatan as $layanan_kesehatan){
                             $i++;
                           ?>
                            <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $layanan_kesehatan->nama_layanan; ?></td>

                              <?php
                              echo"<td class='center' width='10%'><a href='". site_url()."pelayanan_kesehatan/ubah_layanan_kesehatan?id=$layanan_kesehatan->id_layanan&&id1=$id' onclick=\"return confirm('Apakah Anda Yakin Memperbaharui ?')
                                \" title='Hapus'><button type='button' class='btn btn-warning'>Edit</button></a>
                                </td>";
                              ?>
                              <?php
                              echo"<td class='center' width='10%'><a href='". site_url()."pelayanan_kesehatan/hapus_layanan_kesehatan?id=$layanan_kesehatan->id_layanan&&id1=$id' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?')
                                \" title='Hapus'><button type='button' class='btn btn-danger'>Hapus</button></a>
                                </td>";
                              ?>
                            </tr>
                          <?php
                          }
                           ?>

                        </tbody>
                      </table>
                    </div>
                    <hr>
                    <div class="form-group form-material col-lg-12 text-right padding-top-m">
                      <form action="layanan_kesehatan?id=<?php echo$_GET['id']?>" method="post">
                      <div class="form-group form-material ">
                        <label class="col-lg-3 col-sm-5 control-label">Nama Layanan Kesehatan
                          <span class="required"></span>
                        </label>
                        <div class=" col-lg-7 col-sm-7">
                          <input type="text" class="form-control" name="nama_layanan_kesehatan"   required="" >
                        </div>
                        <div class=" col-lg-2 col-sm-7">
                          <button type='submit' class='btn btn-warning'>Tambah</button>
                        </div>
                      </form>
                      </div>






                  </div>
                </div>

                <div class="col-lg-6 form-horizontal">
                  <h3 align="center">Poli</h3>
                  <div class="">
                    <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Poli</th>
                          <th>Edit</th>
                          <th>Hapus</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>No</th>
                          <th>Nama Layanan Kesehatan</th>
                          <th>Edit</th>
                          <th>Hapus</th>

                        </tr>
                      </tfoot>
                      <tbody>


                        <?php
                           $i=0;
                           foreach($poli as $data_poli){
                           $i++;
                         ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $data_poli->nama_poli; ?></td>

                            <?php
                            echo"<td class='center' width='10%'><a href='". site_url()."pelayanan_kesehatan/ubah_poli_pelkes?id=$data_poli->id_pelkes_poli&&id1=$id' onclick=\"return confirm('Apakah Anda Yakin Memperbaharui?')
                              \" title='Hapus'><button type='button' class='btn btn-warning'>Edit</button></a>
                              </td>";
                            ?>
                            <?php
                            echo"<td class='center' width='10%'><a href='". site_url()."poli/hapus_poli_pelkes?id=$data_poli->id_pelkes_poli&&id1=$id' onclick=\"return confirm('Apakah Anda Yakin Menghapus ?')
                              \" title='Hapus'><button type='button' class='btn btn-danger'>Hapus</button></a>
                              </td>";
                            ?>
                          </tr>
                        <?php
                         }
                         ?>

                      </tbody>
                    </table>
                  </div>
                  <hr>
                  <div class="form-group form-material col-lg-12 text-right padding-top-m">
                    <form action="<?php echo site_url(); ?>poli/proses_tambah_pelkes?id=<?php echo$_GET['id']?>" method="post">
                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-5 control-label">Nama Poli
                        <span class="required"></span>
                      </label>
                      <div class=" col-lg-7 col-sm-7">
                        <select class="form-control select2-hidden-accessible" name="id_poli" data-plugin="select2" data-placeholder="Pilih Poli" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                            <option value="">Pilih</option>
                          <?php
                             $i=0;
                             foreach($poli2 as $data_poli){
                             $i++;
                           ?>
                          <option value="<?php echo $data_poli->id_poli; ?>"><?php echo $data_poli->nama_poli; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class=" col-lg-2 col-sm-7">
                        <button type='submit' class='btn btn-warning'>Tambah</button>
                      </div>
                    </form>
                    </div>
                </div>



              </div>

          </div>
        </div>
    </div>
  </div>
  <?php
}
   ?>
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
  <script src="<?php echo site_url(); ?>assets/global/vendor/select2/select2.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootstrap-select/bootstrap-select.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/icheck/icheck.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/switchery/switchery.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asrange/jquery-asRange.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asspinner/jquery-asSpinner.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/clockpicker/bootstrap-clockpicker.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/ascolor/jquery-asColor.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/asgradient/jquery-asGradient.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/ascolorpicker/jquery-asColorPicker.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/jquery-knob/jquery.knob.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/card/jquery.card.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/jquery-labelauty/jquery-labelauty.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/jt-timepicker/jquery.timepicker.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datepair-js/datepair.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/datepair-js/jquery.datepair.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/jquery-strength/jquery-strength.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/multi-select/jquery.multi-select.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/typeahead-js/bloodhound.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/typeahead-js/typeahead.jquery.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
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
  <script src="<?php echo site_url(); ?>assets/global/js/components/select2.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/bootstrap-tokenfield.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/bootstrap-tagsinput.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/bootstrap-select.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/icheck.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/switchery.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/asrange.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/asspinner.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/clockpicker.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/ascolorpicker.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/bootstrap-maxlength.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/jquery-knob.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/bootstrap-touchspin.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/card.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/jquery-labelauty.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/bootstrap-datepicker.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/jt-timepicker.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/datepair-js.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/jquery-strength.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/multi-select.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/jquery-placeholder.js"></script>
  <script src="<?php echo site_url(); ?>assets/assets/examples/js/forms/advanced.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/vendor/toastr/toastr.js"></script>
  <script src="<?php echo site_url(); ?>assets/global/js/components/toastr.js"></script>
</body>
</html>
