<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

      <link rel="stylesheet" href="<?php echo site_url(); ?>assets/slider/css/style.css">

<style>
html, body {
  font-size: 62.5%;
  height: 230px;
  overflow: hidden;
}

.slide:nth-child(1) .slide__bg {
  left: 0;
  background-image: url("<?php echo site_url(); ?>assets/image/1.png");
}
.slide:nth-child(2) .slide__bg {
  left: -50%;
    background-image: url("<?php echo site_url(); ?>assets/image/2.png");
}
.slide__text {
  position: absolute;
  width: 25%;
  bottom: 15%;
  left: 4%;
  color:#000;
  transition: opacity 0.5s 0.8s, -webkit-transform 0.5s 0.8s;
  transition: transform 0.5s 0.8s, opacity 0.5s 0.8s;
  transition: transform 0.5s 0.8s, opacity 0.5s 0.8s, -webkit-transform 0.5s 0.8s;
  will-change: transform, opacity;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  opacity: 0;
}


</style>
</head>

<body>

  <div class="slider-container">
  <div class="slider-control left inactive"></div>
  <div class="slider-control right"></div>
  <ul class="slider-pagi"></ul>
  <div class="slider">
    <div class="slide slide-0 active">
      <div class="slide__bg"></div>

    </div>
    <div class="slide slide-1 ">
      <div class="slide__bg"></div>

    </div>

  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="<?php echo site_url(); ?>assets/slider/js/index.js"></script>




</body>

</html>
