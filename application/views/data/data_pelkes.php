
<?php
$rows = array();
$rows['type'] = 'pie';
$rows['name'] = 'Revenue';
foreach($lihat as $data){
  $rows['data'][] = array($data->nama_jenis_pelayanan, $data->jumlah);

}
$rslt = array();
array_push($rslt,$rows);
print json_encode($rslt, JSON_NUMERIC_CHECK);
