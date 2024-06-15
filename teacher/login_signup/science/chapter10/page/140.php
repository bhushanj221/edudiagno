

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
  <title>page 140</title>
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
    
<b>SLV :</b>
<br><br>
The Satellite Launch Vehicle or SLV was a small-lift launch vehicle project started in the early 1970s by the Indian Space Research Organisation to develop the technology needed to launch satellites. SLV was intended to reach a height of 400 kilometres (250 mi) and carry a payload of 40 kg (88 lb). The first experimental flight of SLV-3, in August 1979, was a failure. The first successful launch took place on 18 July, 1980.
It was a four-stage rocket with all solid-propellant motors.
<br><br> 
The first launch of the SLV took place in Sriharikota on 10 August 1979. The fourth and final launch of the SLV took place on 17 April 1983.
<br><br>
It has taken approximately seven years to realise the vehicle from start. The solid motor case for first and second stage are fabricated from 15 CDV6 steel sheets and third and fourth stages from fibre reinforced plastic.
All four SLV launches occurred from the SLV Launch Pad at the Sriharikota High Altitude Range. The first two launches were experimental (E) and the next 2 were designated as developmental (D) as this was the first launch vehicle being developed by India not intended for a long service life.
<br><br> 
Flight №  Date / time (UTC)
Rocket,
Configuration Launch site Payload Payload mass  Orbit User  Launch
outcome
<br><br>
E1  10 August 1979  Satellite Launch Vehicle  SLV Launch Pad
Rohini Technology Payload[5]
35 kg Low Earth
ISRO
Failure
<br><br>
  Faulty valve caused vehicle to crash into the Bay of Bengal 317 seconds after launch.[4]

E2  18 July 1980  Satellite Launch Vehicle  SLV Launch Pad
Rohini RS-1
35 kg Low Earth
ISRO
Success
<br><br>

  It was the first satellite successfully launched by the indigenous launch vehicle SLV. It provided data on the fourth stage of SLV.
D1  31 May 1981 Satellite Launch Vehicle  SLV Launch Pad
Rohini RS-D1
38 kg Low Earth
ISRO
Partial failure
  Orbit too low. Decayed after 9 days

  <br><br>

D2  17 April 1983 Satellite Launch Vehicle  SLV Launch Pad
Rohini RS-D2
41.5 kg Low Earth
ISRO
Success
<br><br>

  Earth Observation satellite




  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 140    )</h2>

    <div class="value-img">
      <img src="10/140.jpg" data-action="zoom" data-original="10/140.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
