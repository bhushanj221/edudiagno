




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
  <title>page 100</title>
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
    <a href="../../chapter8.php">return to chapter</a>
    
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
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;">Expert Advice</h1>
  
<p>
    
<b>Principles of Metallurgy:</b>
The metallurgical process can be classified as the following:
<br><br>
1. Crushing and grinding: The first process in metallurgy is crushing of ores into a fine powder in a crusher or ball mill. This process is known as pulverization.
<br>
2. The concentration of ores: The process of removing impurities from ore is known as a concentration of minerals or ore dressing. In metallurgy, we concentrate the ores mainly by the following methods.
<br>
3. Hydrolytic method: In this method, we pour the ore over a sloping, vibrating corrugated table with grooves. A jet of water is allowed to flow over the surface. The denser ore particles settle in the grooves, and the impurities are washed away by water.
<br>
4. Magnetic separation: In this case, the crushed ore is placed on a conveyor belt. This belt rotates around two wheels in which one of the wheels is magnetic, and therefore the magnetic particles get attracted to the magnetic wheel and fall apart from the non-magnetic particles.
<br>
5. Froth floatation: In this process, we take the crushed ore in a large tank which contains oil and water. A current of compressed air is passed through it. The ore gets wet by oil and is separated from the impurities in the form of froth. Ore is lighter, and so it comes on the surface and impurities are left behind.
<br>
6. Roasting and calcination: In metallurgy, the process of heating a concentrated ore in the presence of oxygen is known as roasting. This process is applied in the case of sulfide ores. For ores containing carbonate or hydrated oxides, heating is done in the absence of air to melt the ores, and this process is known as calcination.
<br>
We have briefly seen the process of metallurgy used commercially for the extraction of different elements   
    
    
</p>




</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 100    )</h2>

    <div class="value-img">
      <img src="8/100.jpg" data-action="zoom" data-original="8/100.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
