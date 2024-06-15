
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
  <title>page 137</title>
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
    
What is an orbit?
An orbit is the curved path that an object in space (such as a star, planet, moon, asteroid or spacecraft) takes around another object due to gravity. 
<br><br>
Gravity causes objects in space that have mass to be attracted to other nearby objects. If this attraction brings them together with enough momentum, they can sometimes begin to orbit each other. 
<br><br>
Objects of similar mass orbit each other with neither object at the centre, whilst small objects orbit around larger objects. In our Solar System, the Moon orbits Earth, and Earth orbits the Sun, but that does not mean the larger object remains completely still. Because of gravity, Earth is pulled slightly from its centre by the Moon (which is why tides form in our oceans) and our Sun is pulled slightly from its centre by Earth and other planets. 
<br><br>
During the early creation of our Solar System, dust, gas, and ice travelled through space with speed and momentum, surrounding the Sun in a cloud. With the Sun being so much larger than these small bits of dust and gas, its gravity attracted these bits into orbit around it, shaping the cloud into a kind of ring around the Sun. 
<br><br>
Eventually, these particles started to settle and clump together (or ‘coalesce’), growing ever larger like rolling snowballs until they formed what we now see as planets, moons, and asteroids. The fact that the planets were all formed together this way is why all the planets have orbits around the Sun in the same direction, in roughly the same plane.
<br><br>



  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 137    )</h2>

    <div class="value-img">
      <img src="10/137.jpg" data-action="zoom" data-original="10/137.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
