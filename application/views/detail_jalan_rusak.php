<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Detail Jalan</title>
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
	<script src=" https://maps.googleapis.com/maps/api/js?key=AIzaSyBJEyzwKXH2n9SpdmUoRQqWbtvOVSLukyw&origins&callback=initMap"> </script>

</head>
<body class="site-navbar-small ">
<?php echo $this->session->flashdata('pesan')?>

<?php echo $this->load->view('common/menu', '', TRUE);?>

<?php
   foreach($lihat as $data_jalan_rusak){
 ?>
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title"><?php echo $data_jalan_rusak->nama_jalan?></h1>
      <?php
      if($data_jalan_rusak->kondisi==1){
        echo '<span class="label label-round label-warning">Rusak Ringan</span>';
      }else if($data_jalan_rusak->kondisi==2){
        echo '<span class="label label-round label-danger">Rusak Parah</span>';
      }else if($data_jalan_rusak->kondisi==3){
        echo '<span class="label label-round label-primary">Belum Tembus</span>';
      }

      ?>


    </div>
    <div class="page-content">
      <div class="panel">

          <div class="panel-body">
            <form   action="jalan_rusak/proses_tambah_jalan_rusak" method="post" enctype="multipart/form-data" class="fv-form fv-form-bootstrap">

              <div class="row row-lg">
                <div class="col-lg-6 form-horizontal">
                    <h3 class="panel-title">Jalan</h3>

                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">Kabupaten
                        <span class="required">*</span>
                      </label>
                      <div class="col-lg-9 col-sm-9">
                        <select class="form-control select2-hidden-accessible" name="id_kabupaten" required data-plugin="select2" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                            <option value=""><?php echo $data_jalan_rusak->nama_kabupaten?></option>
                          <?php

                             foreach($kabupaten as $kabupaten){
                              if($data_jalan_rusak->id_kabupaten!=$kabupaten->id_kabupaten){
                           ?>
                          <option value="<?php echo $kabupaten->id_kabupaten; ?>"><?php echo $kabupaten->nama_kabupaten; ?></option>
                          <?php } } ?>
                        </select>
                      <small class="help-block" data-fv-validator="notEmpty" name="id_kecamatan" data-fv-for="company" data-fv-result="INVALID" style="">Pilih Kabupaten</small></div>
                    </div>
                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">Kecamatan
                        <span class="required">*</span>
                      </label>
                      <div class="col-lg-9 col-sm-9">
                        <select class="form-control select2-hidden-accessible" name="id_kecamatan" required data-plugin="select2"  data-allow-clear="true" tabindex="-1" aria-hidden="true">
                          <option value=""><?php echo $data_jalan_rusak->nama_kecamatan?></option>
                          <?php

                             foreach($kecamatan as $kecamatan){
                              if($data_jalan_rusak->id_kecamatan!=$kecamatan->id_kecamatan){
                           ?>
                          <option value="<?php echo $kecamatan->id_kecamatan; ?>"><?php echo $kecamatan->nama_kecamatan; ?></option>
                          <?php } } ?>
                          </optgroup>
                        </select>
                      <small class="help-block" data-fv-validator="notEmpty" data-fv-for="company" data-fv-result="INVALID" style="">Plilh Kecataman</small></div>
                    </div>
                  <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">Desa
                        <span class="required">*</span>
                      </label>
                      <div class=" col-lg-9 col-sm-9">
                        <input type="text" class="form-control" name="desa" value="<?php echo $data_jalan_rusak->desa?>" readonly placeholder="Desa" required="" >
                      </div>
                    </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Keterangan Lokasi jalan Lainnya
                    </label>
                    <div class=" col-lg-9 col-sm-9">
                      <input type="text" class="form-control" name="keterangan" value="<?php echo $data_jalan_rusak->keterangan?>" readonly placeholder="Keterangan" >
                    </div>
                  </div>

                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Jalan
                      <span class="required">*</span>
                    </label>
                    <div class="col-lg-9 col-sm-9">
                      <select class="form-control select2-hidden-accessible"  name="kode_ruas" data-plugin="select2"  data-allow-clear="true" tabindex="-1" aria-hidden="true">
                        <option value=""><?php echo $data_jalan_rusak->nama_jalan?></option>
                        <?php

                           foreach($jalan as $jalan){
                            if($data_jalan->kode_ruas!=$jalan->kode_ruas){
                         ?>
                        <option value="<?php echo $jalan->kode_ruas; ?>"><?php echo $jalan->nama_jalan; ?></option>
                        <?php } } ?>
                      </select>
                    <small class="help-block" data-fv-validator="notEmpty" data-fv-for="company" data-fv-result="INVALID" style="">Plilh Kecataman</small></div>
                  </div>

                </div>

                <div class="col-lg-6 form-horizontal">
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Kondisi Jalan
                      <span class="required">*</span>
                    </label>
                    <div class="col-lg-9 col-sm-9 ">
                      <div class="input-group" required>

                        <div>
                          <div class="radio-custom radio-primary">
                            <input type="radio" id="inputAwesome" <?php if($data_jalan_rusak->kondisi==1){echo"checked"; } ?>  name="kondisi" value="1" required="" data-fv-field="porto_is">
                            <label for="inputAwesome">Rusak Ringan</label>
                          </div>
                        </div>
                        <div>
                          <div class="radio-custom radio-primary">
                            <input type="radio" id="inputVeryAwesome" name="kondisi" <?php if($data_jalan_rusak->kondisi==2){echo"checked"; } ?> value="2" data-fv-field="porto_is">
                            <label for="inputVeryAwesome">Rusak Berat</label>
                          </div>
                        </div>
                        <div>
                          <div class="radio-custom radio-primary">
                            <input type="radio" id="inputUltraAwesome" name="kondisi" <?php if($data_jalan_rusak->kondisi==3){echo"checked"; } ?> value="3" data-fv-field="porto_is">
                            <label for="inputUltraAwesome">Belum Tembus</label>
                          </div>
                        </div>
                      </div>
                    <small class="help-block" data-fv-validator="notEmpty" data-fv-for="porto_is" data-fv-result="VALID" style="display: none;">Please specify at least one</small></div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Luas Jalan Rusak
                      <span class="required">*</span>
                    </label>
                    <div class=" col-lg-9 col-sm-9">
                      <input type="text" class="form-control" name="luas_jalan" value="<?php echo $data_jalan_rusak->luas_jalan?>" readonly placeholder="Luas Jalan Rusak" required="" >
                    </div>
                  </div>
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
                      zoom: 7,
                      center: new google.maps.LatLng(4.569069, 96.674661),
                       mapTypeId: google.maps.MapTypeId.ROADMAP
                      	});

                      var latLng = new google.maps.LatLng(<?php echo $data_jalan_rusak->lat?>,<?php echo $data_jalan_rusak->lon?>);

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
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Uploas Gambar
                      <span class="required">*</span>
                    </label>
                    <div class=" col-lg-9 col-sm-9">
                      <div class="input-group input-group-file">
                        <input type="text" class="form-control" value="<?php echo $data_jalan_rusak->photo?>" readonly>
                        <span class="input-group-btn">
                          <span class="btn btn-primary btn-file waves-effect waves-light">
                            <i class="icon md-upload" aria-hidden="true"></i>
                            <input type="file" name="gambar" multiple="">
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <center><img src="<?php echo site_url(); ?>uploads/<?php echo $data_jalan_rusak->photo?>" width="50%"><br>
                  <a href="<?php echo site_url(); ?>uploads/<?php echo $data_jalan_rusak->photo?>"><button type="button" class="btn btn-primary waves-effect waves-light icon md-download" > Download</button></a><center>


                </div>

              </div>
                <br>
                <?php
                $admin=$this->session->userdata('admin');
                 if(empty($admin)==0){
                ?>
                <?php
                if( $data_jalan_rusak->perbaikan==null){

                echo"
                <center>
                <a href='". site_url()."Jalan_rusak/perbaikan_jalan_rusak?id=$data_jalan_rusak->kode_jalan_rusak' onclick=\"return confirm('Apakah Anda Yakin Untuk Merubah Status Jalan Rusak Menjadi Sudah Di Perbaiki ?')
                  \" title='Hapus'><button type='button' class='btn btn-success'>Sudah Dilakukan Perbaikan</button></a>


                  ";

                }else{
                  echo"
                  <center>
                  <a href='". site_url()."Jalan_rusak/reset_perbaikan_jalan_rusak?id=$data_jalan_rusak->kode_jalan_rusak' onclick=\"return confirm('Apakah Anda Yakin Untuk Mereset status perbaikan ?')
                    \" title='Hapus'><button type='button' class='btn btn-danger'>Reset</button></a>


                    ";

                }?>
                <?php echo"


                <a href='". site_url()."edit_jalan_rusak?id=$data_jalan_rusak->kode_jalan_rusak' onclick=\"return confirm('Apakah Anda Yakin Untuk Mengubah Data Jalan Rusak ?')
                    \" title='Hapus'><button type='button' class='btn btn-warning'>Edit Jalan Rusak</button></a>
                <center>
                  ";?>
                <?php } ?>
            </form>
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
