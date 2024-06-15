

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
  <title>page 136</title>
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
    

ARTIFICIAL SATALLITE :

Aryabhata was India's first artificial satellite, named after the famous Indian astronomer.
It was launched on 19 April 1975[2] from Kapustin Yar, a Russian
rocket launch and development site in Astrakhan Oblast using a Kosmos-3M launch vehicle. 
It was built by the ISRO.
<br><br>
It was launched by India on 19 April 1975[2] from Kapustin Yar,
a Russian rocket launch and development site in Astrakhan Oblast using a Kosmos-3M launch vehicle.
<br><br> 
It was built by the Indian Space Research Organisation. The launch came from an agreement between 
India and the Soviet Union directed by UR Rao and signed in 1972. It allowed the USSR to use Indian 
ports for tracking ships and launching vessels in return for launching various different Indian satellites.
On 19 April 1975, the satellite's 96.46-minute orbit had an apogee of 619 kilometres (385 mi) and a perigee
of 563 kilometres (350 mi), at an inclination of 50.7 degrees.[5][1] It was built to conduct experiments
in X-ray astronomy, aeronomics, and solar physics. 
The spacecraft was a 26-sided polyhedron 1.4 metres (4.6 ft) in diameter.
<br><br> 
All faces (except the top and bottom) were covered with solar cells.
A power failure halted experiments after four days and 60 orbits with all signals from the spacecraft lost
after five days of the operation.[citation needed] Spacecraft mainframe remained active till March 1981.
Due to orbital decay the satellite entered Earth's atmosphere on 11 February 1992.



  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 136    )</h2>

    <div class="value-img">
      <img src="10/136.jpg" data-action="zoom" data-original="10/136.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
