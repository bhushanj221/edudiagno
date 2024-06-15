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
  <title>page 48</title>
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
    <a href="../../chapter4.php">return to chapter</a>
    
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
    
Electric circuit, path for transmitting electric current. An electric circuit includes a device
The heating effect of electric current is widely used in our day-to-day life. The electric iron, kettle, toaster, heater, etc.
are used as alternatives to the conventional methods of cooking and laundry.
The same is used in electric bulbs which is the alternative of conventional lamps.
These devices have revolutionized the world over the years. In this section,
we will discuss the concept of the heating effect of electric current and its applications.
<br>
When an electric current is passed through a conductor,
it generates heat due to the hindrance caused by the conductor to the flowing current. 
The work done in overcoming the hindrance to the current generates heat in that conductor.
<br>
<b>Application:</b>
Following are the devices in which heating effect of current is harnessed for other purposes:
<br>
<b>Electric Iron:</b>
Mica is an insulator that is placed between the metal part and the coil in an iron.
The coil becomes heated with the passage of current which is then transferred to the metallic part through mica.
Finally, the metal part becomes heated which is then used for ironing clothes
<br>
<b>Electric Fuse:</b>
In any electrical instrument, due to sudden rise of current, 
the instrument gets burnt down which sometimes results in fire. A conducting wire with low melting point is 
connected in series with the circuit to avoid this type of accident. When the current rises, the wire melts due to excessive heating,
thus breaking the electrical circuit.
 
  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 48   )</h2>

    <div class="value-img">
      <img src="4/48.jpg" data-action="zoom" data-original="4/48.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
