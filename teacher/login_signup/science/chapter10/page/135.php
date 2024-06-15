

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
  <title>page 135</title>
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
    
Space exploration is the use of astronomy and space technology to explore outer space.
While the exploration of space is carried out mainly by astronomers with telescopes, 
its physical exploration though is conducted both by unmanned robotic space probes and 
human spaceflight. Space exploration, like its classical form astronomy, is one of the 
main sources for space science.
<br><br>
Space mission launch calendar 2020
Dates are subject to change, and will be updated throughout the year as launch schedules are confirmed
<br><br>
4 January 2020 (earliest possible date) SpaceX Crew Dragon in-flight abort test
<br><br>
10 February 2020 Solar Orbiter (European Space Agency/NASA) -  4.03am GMT (date subject to change)
<br><br>
Early 2020 International Space Station Expedition 62 (Russian and US astronauts to form part of the new ISS crew)
<br><br>
27 May 2020 SpaceX Crew Dragon Demonstration Mission 2 (9.33pm BST / 4.33pm EDT)
<br><br>
Early 2020 OneWeb satellite launch (OneWeb/Roscosmos)
<br><br>
Mid 2020 China Space Station first module launch
<br><br>
June 2020 New International Space Station module 'Nauka' launched (Roscosmos)
<br><br>
July 2020 Mars 2020 Rover (NASA)
<br><br>
July 2020 Mars Global Remote Sensing Orbiter and Small Rover (China National Space Administration)
<br><br>
July 2020 Hope Mars Mission (United Arab Emirates)
<br><br>
December 2020 Gaganyaan orbital spacecraft test flight (Indian Space Research Organisation)
<br><br>
December 2020 Hayabusa2 (Japanese asteroid sample return mission due to land back on Earth)
<br><br>
Late 2020 Chang'e 5 (China National Space Administration)
<br><br>
2020 Boeing CST-100 Starliner Crew Flight Test
<br><br>
Throughout 2020 Starlink (SpaceX).




  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 135   )</h2>

    <div class="value-img">
      <img src="10/135.jpg" data-action="zoom" data-original="10/0135.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
