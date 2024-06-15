


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
  <title>page 142</title>
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
    
MOON MISSION
As part of human exploration of the Moon, numerous space missions have been undertaken to study Earth's natural satellite. Of the Moon landings, Luna 2 of the Soviet Union was the first spacecraft to reach its surface successfully,[1] intentionally impacting the Moon on 13 September 1959. In 1966, Luna 9 became the first spacecraft to achieve a controlled soft landing,[2] while Luna 10 became the first mission to enter orbit.
<br><br>
Between 1968 and 1972, crewed missions to the Moon were conducted by the United States as part of the Apollo program. Apollo 8 was the first crewed mission to enter orbit in December 1968, and it was followed by Apollo 10 in May 1969. Six missions landed men on the Moon, beginning with Apollo 11 in July 1969, during which Neil Armstrong became the first man to walk on the Moon. Apollo 13 was intended to land; however, it was restricted to a flyby due to a malfunction aboard the spacecraft. All nine crewed missions returned safely to the Earth.
While the United States focused on the crewed Apollo program, the Soviet Union conducted uncrewed missions that deployed rovers and returned samples to the Earth. Three rover missions were launched, of which two were successful, and eleven sample return flights were attempted with three successes.
<br><br>
Missions to the Moon have been conducted by the following nations and entities (in chronological order): the Soviet Union, the United States, Japan, the European Space Agency, China, India, Luxembourg, and Israel. The Moon has also been visited by five spacecraft not dedicated to studying it; four spacecraft have flown past it to gain gravity assistance, and a radio telescope, Explorer 49, was placed into selenocentric orbit in order to use the Moon to block interference from terrestrial radio sources.
<br><br>
MARS MISSION :
<br><br>
he Mars Orbiter Mission (MOM), also called Mangalyaan ("Mars-craft", from mangala, "Mars" and yāna, "craft, vehicle"). is a space probe orbiting Mars since 24 September 2014. It was launched on 5 November 2013 by the Indian Space Research Organisation (ISRO). It is India's first interplanetary mission] and it made it the fourth space agency to achieve Mars orbit, after Roscosmos, NASA, and the European Space Agency.[17] It made India the first Asian nation to reach Martian orbit and the first nation in the world to do so on its maiden attempt. 
<br><br>
The Mars Orbiter Mission probe lifted-off from the First Launch Pad at Satish Dhawan Space Centre (Sriharikota Range SHAR), Andhra Pradesh, using a Polar Satellite Launch Vehicle (PSLV) rocket C25 at 09:08 UTC on 5 November 2013. The launch window was approximately 20 days long and started on 28 October 2013. The MOM probe spent about a month in Earth orbit, where it made a series of seven apogee-raising orbital manoeuvres before trans-Mars injection on 30 November 2013 (UTC). After a 298-day transit to Mars, it was put into Mars orbit on 24 September 2014.
<br><br>
The mission is a "technology demonstrator" project to develop the technologies for designing, planning, management, and operations of an interplanetary mission.[24] It carries five scientific instruments. The spacecraft is currently being monitored from the Spacecraft Control Centre at ISRO Telemetry, Tracking and Command Network (ISTRAC) in Bengaluru with support from the Indian Deep Space Network (IDSN) antennae at Bengaluru, Karnataka. 





  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 142    )</h2>

    <div class="value-img">
      <img src="10/142.jpg" data-action="zoom" data-original="10/142.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
