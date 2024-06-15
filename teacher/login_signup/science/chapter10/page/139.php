

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
  <title>page 139</title>
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
    <a href="../../chapter10.php">return to chapter</a>
    
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
    
How Do Objects Stay in Orbit?
An object in motion will stay in motion unless something pushes or pulls on it. This statement is called Newton's first law of motion. Without gravity, an Earth-orbiting satellite would go off into space along a straight line. With gravity, it is pulled back toward Earth. A constant tug-of-war takes place between the satellite's tendency to move in a straight line, or momentum, and the tug of gravity pulling the satellite back.
<br><br>
An object's momentum and the force of gravity have to be balanced for an orbit to happen. If the forward momentum of one object is too great, it will speed past and not enter into orbit. If momentum is too small, the object will be pulled down and crash. When these forces are balanced, the object is always falling toward the planet, but because it's moving sideways fast enough, it never hits the planet. Orbital velocity is the speed needed to stay in orbit. At an altitude of 150 miles (242 kilometers) above Earth, orbital velocity is about 17,000 miles per hour. Satellites that have higher orbits have slower orbital velocities.

<br><br>
Where Do Satellites Orbit Earth?
The International Space Station is in low Earth orbit, or LEO. LEO is the first 100 to 200 miles (161 to 322 km) of space. LEO is the easiest orbit to get to and stay in. One complete orbit in LEO takes about 90 minutes.
<br><br>
Satellites that stay above a location on Earth are in geosynchronous Earth orbit, or GEO. These satellites orbit about 23,000 miles (37,015 km) above the equator and complete one revolution around Earth precisely every 24 hours. Satellites headed for GEO first go to an elliptical orbit with an apogee about 37,015 km. Firing the rocket engines at apogee then makes the orbit round. Geosynchronous orbits are also called geostationary.
<br><br>
Any satellite with an orbital path going over or near the poles maintains a polar orbit. Polar orbits are usually low Earth orbits. Eventually, Earth's entire surface passes under a satellite in polar orbit. When a satellite orbits Earth, the path it takes makes an angle with the equator. This angle is called the inclination. A satellite that orbits parallel to the equator has a zero-degree orbital inclination. A satellite in a polar orbit has a 90-degree inclination.
<br><br>


  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 139    )</h2>

    <div class="value-img">
      <img src="10/139.jpg" data-action="zoom" data-original="10/139.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
