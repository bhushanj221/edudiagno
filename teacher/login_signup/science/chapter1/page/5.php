






<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../../log.php");
    exit;
}
?>










<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>page 5</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css'><link rel="stylesheet" href="./style.css">

<style >
  .overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

</style>
</head>
<body>




 <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="#" onclick="window.history.go(-1)">back</a>
    <a href="../../chapter1.php">return to chapter</a>
    
  </div>
</div>

<span style="font-size:30px;cursor:pointer; color: red;"  onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>








<div class="container">
  



  <h1 style="  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;">Expert advice</h1>
  <p >
    
A centripetal force (from Latin centrum, "center" and petere, "to seek" is a force that makes a body follow a curved path. Its direction is always orthogonal to the motion of the body and towards the fixed point of the instantaneous center of curvature of the path. Isaac Newton described it as "a force by which bodies are drawn or impelled, or in any way tend, towards a point as to a centre". In Newtonian mechanics, gravity provides the centripetal force causing astronomical orbits.

    
  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 5    )</h2>

    <div class="value-img">
      <img src="1/5.jpg" data-action="zoom" data-original="1/5.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  <!-- <section class="content">
    <h4>Image zoom that makes sense.</h4>

    <ul>
      <li>Pure JavaScript &amp; built with mobile in mind.</li>
      <li>Smooth animations with intuitive gestures.</li>
      <li>Zoom into a hi-res image if supplied.</li>
      <li>Easy to integrate &amp; customizable.</li>
    </ul>
    <div class="value-img">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/journey_thumbnail.jpg" data-action="zoom" data-original="test.jpg" alt="journey_thumbnail" />
    </div>

    <p>
      <em>Faced with rolling sand dunes, age-old ruins, caves and howling winds,
          your passage will not be an easy one. The goal is to get to the mountaintop,
          but the experience is discovering who you are, what this place is,
          and what is your purpose.</em>
    </p>

    <div class="row">
      <a class="button" id="btn-fast" onclick="fast()">faster</a>
      <a class="button" id="btn-slow" onclick="slow()">slow down</a>
      <a class="button" id="btn-dark" onclick="dark()">make it dark</a>
      <a class="button" id="btn-no-grab" onclick="noGrab()">no grab</a>
    </div>

    <hr>

    <a class="button button-primary" href="https://github.com/kingdido999/zooming">start journey</a>
  </section>

  <br> -->
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
