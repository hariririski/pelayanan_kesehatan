<?php
$jenis_pelayanan;
$a=0;
foreach($jenis as $jenis){
	$jenis_pelayanan[$a]=$jenis->nama_jenis_pelayanan;
	$a++;
}
$arrlength = count($jenis_pelayanan);
?>

{
	"type": "pelayanan_kesehatan",
	"features": [
									<?php
											 foreach($lihat as $data_lihat){
												echo'
												{
													"type": "Feature",
													"geometry": {
														"type": "Point",
														"coordinates": ['.$data_lihat->lon.', '.$data_lihat->lat.']
													},
													"properties": {
														';


														for($x = 0; $x < $arrlength; $x++) {
															 echo '"';
														   echo $jenis_pelayanan[$x];
															 echo '"';
															 echo ':';
															
															 if($jenis_pelayanan[$x]==$data_lihat->nama_jenis_pelayanan)
	 															{print"true";}
	 															else
	 															{echo"false";}
															 echo ',';
														}
														echo'

														"icon":"'.$data_lihat->icon.'",
														"description": "Flush toilet, Shower",
														"title": "'.$data_lihat->nama_pelayanan_kesehatan.'",
														"marker-size": "small"
													}
												},';

									}
										 ?>
										 {

										 }
	]
}
