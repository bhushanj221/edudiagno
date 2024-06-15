
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
  <title>page 44</title>
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
    <a href="../../chapter3.php">return to chapter</a>
    
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
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;">Corrosion</h1>




  <p >
    
    
Elements are divided mainly into two groups on the basis of physical and chemical properties – Metal and Non-metals
<br><br>
Metals that are chemically active get corroded in the presence of air and moisture in the atmosphere. Metals with a higher reactivity (such as magnesium, aluminum, iron, zinc, and tin) are much more prone to corrosion.
<br><br>
Corrosion is a natural process, which converts a refined metal to a more chemically stable form, such as its oxide, hydroxide, or sulphide. It is the gradual destruction of materials (usually metals) by chemical and/or electrochemical reaction with their environment. Corrosion degrades the useful properties of materials and structures including strength, appearance, and permeability to liquids and gases.
<br><br>
Corrosion is the deterioration of a metal as a result of chemical reactions between it and the surrounding environment.
<br><br>

<h1   style=" color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;" >
    Metals are attacked by substances in surroundings like moisture and acids:</h1>
    
    <br>
Silver – it reacts with sulphur in the air to form silver sulphide and turns black.    <br>
Copper – reacts with moist carbon dioxide in the air and gets a green coat of copper carbonate.    <br>
Iron-acquires a coating of a brown flaky substance called rust. Both air and moisture are necessary for rusting of iron.    <br>
<b>  Prevention of corrosion: </b>  <br>

The application of a paint coating is a cost-effective way of preventing corrosion. Paint coatings act as a barrier to prevent the transfer of electrochemical charge from the corrosive solution to the metal underneath.
Applying a powder coating: In this process, a dry powder is applied to the clean metal surface. The metal is then heated which fuses the powder into a smooth unbroken film. A number of different powder compositions can be used, including acrylic, polyester, epoxy, nylon, and urethane.
Corrosion is mainly caused by a chemical reaction between the metal and gases in the surrounding environment. By taking measures to control the environment, these unwanted reactions can be minimized.
Reducing exposure to rain or seawater, controlling the amounts of sulfur, chlorine, or oxygen in the surrounding environment are some of the measures to be taken.
    <br>
Galvanizing: coating the metal with an additional metal type that is more likely to oxidize.    <br>
The most common example is the coating of iron alloy steel with zinc, a process known as galvanizing. This protection is used for steel pipelines carrying water or fuel, water heater tanks, ship hulls, and offshore oil platforms.
    <br>
 Coating the iron alloy steel with a less active metal, such as tin. Tin will not corrode, so the steel will be protected as long as the tin coating is in place.
    <br>
A light coat of a protective material, such as metal oxide, creates a protective layer over the metal which acts as a barrier against corrosion. This is used in petroleum refining, chemical production, and water treatment works.
Rusting of iron is prevented by painting, oiling, greasing, galvanizing, chrome plating, anodizing and making alloys.    <br>
<b>Alloys:</b>    <br>

An alloy is a mixture of two elements, one of which is a metal. <br>

 Alloys often have properties that are different to the metals they contain. <br>

Generally, alloys are stronger and harder than their main metals, less malleable (harder to work) and less ductile (harder to pull into wires). This makes them more useful than the pure metals.
 <br>
Adding a small amount of carbon makes iron hard and strong. <br>
Stainless steel is obtained by mixing iron with nickel and chromium. It is hard and does not rust It is used to produce utensils,kitchen ware bathroom fixtures, buildings, power tools, weaponry, and even jewelry.
Mercury is added to other metals to make an amalgam. <br>
Brass: It is an alloy of copper and zinc. It is used to make musical instruments, coins, handicrafts, and household fixtures such as doorknobs and faucets.etc <br>
Bronze: It is an alloy of copper and tin. It can be made into furniture, armour and weapons. It is used in construction and ship building. <br>
In brass and bronze, melting point and electrical conductivity are lower than that of pure metal. <br>

Solder: It is an alloy of lead and tin. Has a low melting point and is used for welding electrical wires.

  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 44    )</h2>

    <div class="value-img">
      <img src="3/44.jpg" data-action="zoom" data-original="3/44.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
