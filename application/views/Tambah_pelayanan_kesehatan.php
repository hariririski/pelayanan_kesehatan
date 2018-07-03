<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Tambah Pelayanan</title>
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

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery_combo.js"></script> <!-- ajax-bertingkat -->
<script>
$(document).ready(function() {


$("#kabupaten").change(function(){
  var kode_kabupaten = $("#kabupaten").val();
  $.ajax({
    type: "POST",
    url: "<?php echo base_url(); ?>pelayanan_kesehatan/kecamatan/"+kode_kabupaten,
    data: "kode_kabupaten="+kode_kabupaten,
    success: function(data){
      $("#kecamatan").html(data);
    }
  });
});

$("#kecamatan").change(function(){
  var kode_kecamatan = $("#kecamatan").val();
  $.ajax({
    type: "POST",
    url: "<?php echo base_url(); ?>pelayanan_kesehatan/desa/"+kode_kecamatan,
    data: "kode_kecamatan="+kode_kecamatan,
    success: function(data){
      $("#desa").html(data);
    }
  });
});


});
</script>
</head>
<body class="site-navbar-small ">


<?php echo $this->load->view('common/menu', '', TRUE);?>


  <div class="page animsition">
    <div class="page-header">
      <?php echo $this->session->flashdata('pesan')?>
      <h1 class="page-title">Tambah Pelayanan Kesehatan</h1>


    </div>
    <div class="page-content">
      <div class="panel">

          <div class="panel-body">
            <form   action="proses_tambah_pelayanan_kesehatan" method="post" enctype="multipart/form-data" class="fv-form fv-form-bootstrap">

              <div class="row row-lg">
                <div class="col-lg-6 form-horizontal">

                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Nama Pelayanan Kesehatan
                      <span class="required">*</span>
                    </label>
                    <div class=" col-lg-9 col-sm-9">
                      <input type="text" class="form-control focus" name="nama_pelayanan_kesehatan" placeholder="Nama Pelayanan Kesehatan" required=""  >

                  </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Jenis Pelayanan Kesehatan
                      <span class="required">*</span>
                    </label>
                    <div class=" col-lg-9 col-sm-9">
                      <select class="form-control select2-hidden-accessible" name="id_jenis_pelayanan" data-plugin="select2" data-placeholder="Pilih Jenis Pelayanan Kesehatan" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                          <option value="">Pilih</option>
                        <?php
                           $i=0;
                           foreach($jenis_pelayanan as $data_jenis_pelayanan){
                           $i++;
                         ?>
                        <option value="<?php echo $data_jenis_pelayanan->id_jenis_pelayanan; ?>"><?php echo $data_jenis_pelayanan->nama_jenis_pelayanan; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Alamat
                      <span class="required">*</span>
                    </label>
                    <div class=" col-lg-9 col-sm-9">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" required="" >
                    </div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Kabupaten
                      <span class="required">*</span>
                    </label>
                    <div class="col-lg-9 col-sm-9">
                      <select id="kabupaten" class="form-control select2-hidden-accessible" name="id_kabupaten" data-plugin="select2" data-placeholder="Pilih Kabupaten" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                          <option value="">Pilih</option>
                        <?php
                           $i=0;
                           foreach($kabupaten as $kabupaten){
                           $i++;
                         ?>
                        <option value="<?php echo $kabupaten->id_kabupaten; ?>"><?php echo $kabupaten->nama_kabupaten; ?></option>
                        <?php } ?>
                      </select>
                    <small class="help-block" data-fv-validator="notEmpty" data-fv-for="company" data-fv-result="INVALID" style="">Pilih Kabupaten</small></div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Kecamatan
                      <span class="required">*</span>
                    </label>
                    <div class="col-lg-9 col-sm-9">

                        <select id="kecamatan" class="form-control select2-hidden-accessible" name="id_kecamatan" data-plugin="select2" data-placeholder="Pilih Kecamatan" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                          <option value="">Pilih</option>

                        </select>
                    <small class="help-block" data-fv-validator="notEmpty" data-fv-for="company" data-fv-result="INVALID" style="">Plilh Kecataman</small></div>
                  </div>
                  <div class="form-group form-material ">
                    <label class="col-lg-3 col-sm-3 control-label">Desa
                      <span class="required">*</span>
                    </label>
                    <div class="col-lg-9 col-sm-9">

                        <select id="desa" class="form-control select2-hidden-accessible" name="id_desa" data-plugin="select2" data-placeholder="Pilih desa" data-allow-clear="true" tabindex="-1" aria-hidden="true">
                          <option value="">Pilih</option>

                        </select>
                    <small class="help-block" data-fv-validator="notEmpty" data-fv-for="company" data-fv-result="INVALID" style="">Plilh Desa</small></div>
                  </div>



                </div>

                <div class="col-lg-6 form-horizontal">

                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">No Telepon
                        <span class="required">*</span>
                      </label>
                      <div class=" col-lg-9 col-sm-9">
                        <input type="text" class="form-control" name="no_tlp" placeholder="NO Telepon" required="" >
                      </div>
                    </div>
                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">Email
                        <span class="required">*</span>
                      </label>
                      <div class=" col-lg-9 col-sm-9">
                        <input type="text" class="form-control" name="email" placeholder="Email" required="" >
                      </div>
                    </div>
                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">Latitude / Lintang
                        <span class="required">*</span>
                      </label>
                      <div class=" col-lg-9 col-sm-9">
                        <input type="text" class="form-control" name="lat" placeholder="Latitude / Lintang" required=""  >

                      </div>
                    </div>
                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">Longitude / Bujur
                        <span class="required">*</span>
                      </label>
                      <div class=" col-lg-9 col-sm-9">
                        <input type="text" class="form-control" name="lon" placeholder="Longitude / Bujur" required="" >
                      </div>
                    </div>
                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">Halaman Web
                        <span class="required">*</span>
                      </label>
                      <div class=" col-lg-9 col-sm-9">
                        <input type="text" class="form-control" name="web" placeholder="Url Halaman Web" required="" >

                    </div>
                    </div>
                    <div class="form-group form-material ">
                      <label class="col-lg-3 col-sm-3 control-label">Akreditasi
                        <span class="required">*</span>
                      </label>
                      <div class=" col-lg-9 col-sm-9">
                        <input type="text" class="form-control" name="status_akreditasi" placeholder="Akreditasi" required="" >
                      </div>
                    </div>

                    <div class="form-group  ">
                      <div class="form-material ">
                        <label class="col-lg-3 col-sm-3 control-label ">Foto
                          <span class="required">*</span>
                        </label>
                      </div>
                      <div class=" col-lg-9 col-sm-9">
                        <div class="input-group input-group-file">
                            <input type="file" name="document" class="form-control" multiple="">
                          <span class="input-group-btn">
                            <span class="btn btn-primary btn-file waves-effect waves-light">
                              <i class="icon md-upload" aria-hidden="true"></i>

                            </span>
                          </span>
                        </div>
                      </div>
                    </div>




                </div>
                <div class="form-group form-material col-lg-12 text-right padding-top-m">
                  <button type="submit" class="btn btn-primary waves-effect waves-light" >Submit</button>
                </div>
              </div>
            </form>
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
