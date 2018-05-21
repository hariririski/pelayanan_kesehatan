<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Google filteri</title>



    <style>
    #map-canvas {
  	margin: 0;
  	padding: 0;
  	height: 400px;
  	max-width: none;
  }

    </style>


</head>

<body>

  <div id="map-canvas">

</div>

<select id="type" onchange="filterMarkers(this.value);">
  <option value="">Semua</option>
  <?php
       foreach($kabupaten as $kabupaten){

     ?>
     <option value="<?php echo $kabupaten->nama_kabupaten?>"><?php echo $kabupaten->nama_kabupaten?></option>
  <?php } ?>

</select>
<div id="buttons">

  <?php

       foreach($jenis as $jenis){

     ?>
     <input type="checkbox" checked name="filter" value="<?php echo $jenis->nama_jenis_pelayanan?>" class='chk-btn'  onclick="selectAllChecked();">
     <label for='shower'><?php echo $jenis->nama_jenis_pelayanan?></label>
     <?php
   }
        ?>

</div>
Layer
<table border='0'>
  <?php

       foreach($layer as $data_layer){
         if($data_layer->url!=null){
     ?>
     <tr>
    <td width='85%'> <input type="checkbox" id="layer_0" onclick="toggleLayers(<?php echo $data_layer->id_layer;?>);"/>     <?php echo $data_layer->nama_layer;?></td>
    </tr>

    <?php
    }
     }
       ?>



</table >

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmUfKutqGZ-VgbD4fwjOFd1EGxLXbxcpQ&sCensor=false"></script>



    <script >
    var gmarkers1 = [];
var markers1 = [];

var filters = {
  shower: false,
  vault: false,
  flush: false
}

var layers=[];




 <?php
      $jumlah=1;
      foreach($layer as $data_layer){
        if($data_layer->url!=null){
    ?>
  layers[<?php echo $data_layer->id_layer;?>] = new  google.maps.KmlLayer('<?php echo $data_layer->url;?>',{preserveViewport: true});
   <?php
   $jumlah++;}
    }
      ?>

var markers1 = [
<?php
$data;
foreach($lihat as $pelkes){
  $data=$pelkes->id_pelayanan_kesehatan;
?>
        ['<?php echo $pelkes->id_pelayanan_kesehatan ?>','title',<?php echo $pelkes->lat ?>,<?php echo $pelkes->lon ?>,'<?php echo $pelkes->nama_kabupaten?>','<?php echo $pelkes->nama_jenis_pelayanan?>','<?php echo site_url();?>assets/image/<?php echo $pelkes->icon ?>'],
<?php }?>

  ];
var data=<?php echo $data;?>
/**
 * Function to init map
 */

function initialize() {
  var center = new google.maps.LatLng(4.2952462,96.9974882);
  var mapOptions = {
    zoom: 5,
    center: new google.maps.LatLng(4.2952462,96.9974882),
    mapTypeId: 'roadmap',
  };

  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  for (i = 0; i < markers1.length; i++) {
    addMarker(markers1[i],);
  }
}

/**
 * Function to add marker to map
 */

function addMarker(marker) {
  var tip = marker[5];
  var category = marker[4];
  var title = marker[1];
  var pos = new google.maps.LatLng(marker[2], marker[3]);
  var content = marker[1];
  var icon=marker[6];

  marker1 = new google.maps.Marker({
    title: title,
    position: pos,
    tip: tip,
    category: category,
    map: map,
    icon:icon
  });

  gmarkers1.push(marker1);
  var content = '<iframe src="<?php echo site_url(); ?>popup?id='+marker+'" width="100%"  scrolling="no" frameborder="0"></iframe>';
  // Marker click listener
  var infowindow = new google.maps.InfoWindow({
   content: content,

   // Assign a maximum value for the width of the infowindow allows
   // greater control over the various content elements
   //maxWidth: 400,
   maxHeight: 400
 });
  google.maps.event.addListener(marker1, 'click', (function(marker1, content) {
    return function() {

      infowindow.open(map, marker1);

    }
  })(marker1, content));

  google.maps.event.addListener(map, 'click', function() {
   infowindow.close();
 });

 // *
 // START INFOWINDOW CUSTOMIZE.
 // The google.maps.event.addListener() event expects
 // the creation of the infowindow HTML structure 'domready'
 // and before the opening of the infowindow, defined styles are applied.
 // *


}

/**
 * Function to filter markers by category
 */

filterMarkers = function(category) {
  for (i = 0; i < markers1.length; i++) {
    marker = gmarkers1[i];
    // If is same category or category not picked
    if (marker.category == category || category.length === 0) {
      marker.setVisible(true);
    }
    // Categories don't match
    else {
      marker.setVisible(false);
    }
  }

}
var get_set_options = function() {
  ret_array = []
  for (option in filters) {
    if (filters[option]) {
      ret_array.push(option)
    }
  }
  return ret_array;
}

var filter_markers = function() {
  set_filters = get_set_options()

  // for each marker, check to see if all required options are set
  for (i = 0; i < markers.length; i++) {
    marker = markers[i];

    // start the filter check assuming the marker will be displayed
    // if any of the required features are missing, set 'keep' to false
    // to discard this marker
    keep = true
    for (opt = 0; opt < set_filters.length; opt++) {
      if (!marker.properties[set_filters[opt]]) {
        keep = false;
      }
    }
    marker.setVisible(keep)
  }
}


// Fuction for checkboxes
var tipovi = document.getElementsByClassName('chk-btn').value;

var selectAllChecked = function() {
  var checkedPlace = []
  var allCheckedElem = document.getElementsByName('filter');
  for (var i = 0; i < allCheckedElem.length; i++) {
    if (allCheckedElem[i].checked == true) {
      checkedPlace.push(allCheckedElem[i].value)//creating array of checked items
      
    }
  }
  filterChecker(checkedPlace) //passing to function for updating markers
}

var filterChecker = function(tip) {
  //console.log(tip);
  for (i = 0; i < markers1.length; i++) {
    marker = gmarkers1[i];
    //console.log(marker);
    if (in_array(this.marker.tip, tip) != -1) {
      marker.setVisible(true);
    } else {
      marker.setVisible(false);
    }
  }
}
// Init map
initialize();

function in_array(needle, haystack) {
  var found = 0;
  for (var i = 0, len = haystack.length; i < len; i++) {
    if (haystack[i] == needle) return i;
    found++;
  }
  return -1;
}

function toggleLayers(i)
{

  if(layers[i].getMap()==null) {
       layers[i].setMap(map);

    }
    else {
       layers[i].setMap(null);
    }
    document.getElementById('status').innerHTML += "toggleLayers("+i+") [setMap("+layers[i].getMap()+"] returns status: "+layers[i].getStatus()+"<br>";

}


    </script>




</body>

</html>
