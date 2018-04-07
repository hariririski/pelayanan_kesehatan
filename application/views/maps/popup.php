	<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet">
    <link href="../css/bootstrap-reset.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!--external css-->

    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="../stylesheet" href="css/flexslider.css"/>
    <link href="../assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="../stylesheet" href="css/animate.css">
    <link rel="../stylesheet" href="assets/owlcarousel/owl.carousel.css">
    <link rel="../stylesheet" href="assets/owlcarousel/owl.theme.css">

    <link href="../css/superfish.css" rel="stylesheet" media="screen">



    <!-- Custom styles for this template -->
    <link rel="../stylesheet" type="text/css" href="css/component.css">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />

 </head>
</body>
<?php
	 $i=0;
	 foreach($lihat as $data_jalan_rusak){
 ?>
			<div id="content"><div id="siteNotice"></div>
		    <center><h3 id="firstHeading" class="firstHeading"></h3>
					<div id="bodyContent"> <?php echo $data_jalan_rusak->nama_jalan;?> </center>
						<table  border="0">
							<tr>
								<td width="100px">
									Nama Jalan
								</td>
								<td width="10px">
									:
								</td>
								<td>
									<?php echo $data_jalan_rusak->nama_jalan;?>
								</td>
							</tr>
							<tr>
								<td>
									Kondisi
								</td>
								<td>
									:
								</td>
								<td>
									
									<?php
									if($data_jalan_rusak->kondisi==1){
										echo '<span class="label label-round label-warning">Rusak Ringan</span>';
									}else if($data_jalan_rusak->kondisi==2){
										echo '<span class="label label-round label-danger">Rusak Parah</span>';
									}else if($data_jalan_rusak->kondisi==3){
										echo '<span class="label label-round label-primary">Belum Tembus</span>';
									}

									?>
								</td>
							</tr>
							<tr>
								<td>
									Kabupaten
								</td>
								<td>
									:
								</td>
								<td>
									<?php echo $data_jalan_rusak->nama_kabupaten;?>
								</td>
							</tr>
							<tr>
								<td>
									Kecamatan
								</td>
								<td>
									:
								</td>
								<td>
									<?php echo $data_jalan_rusak->nama_kecamatan;?>
								</td>
							</tr>
						</table>
						<center><img src="<?php echo site_url(); ?>uploads/<?php echo $data_jalan_rusak->photo;?>" width="500px"><center>
					</div>
			</div>
	<?php }?>

<script type="text/javascript">
			$('body').on('hidden.bs.modal', '.modal', function () { $(this).removeData('bs.modal'); });
			$.fn.modal.Constructor.prototype.enforceFocus = function() {};
		</script>
</body>
</html>
