
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
  <title>page 40</title>
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
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;">Expert advice</h1>
  <p >
    

1) Concentration of reactants - The number of collisions and hence the activated collisions between the reactant molecules increase with increase in concentration. Therefore, according to the collision theory, the rate of a reaction should increase with increase in the concentration since the rate is directly proportional to the collision frequency.<br><br>


2) Pressure - The partial pressure is another way of expressing the concentration for gases. The number of collisions increases with increase in the partial pressures of gases. Hence the rate of reactions involving gaseous reactants increases with increase in partial pressures. However it has no effect on reactions involving reactants in liquid or solid phases.It is important to keep in mind that the partial pressures of reactants can be increased by increasing the pressure of overall system. However the partial pressures do not increase when an inert gas or a non reacting gas is added to the reaction mixture at constant volume.

<br>
<br>

3)  NATURE OF REACTANTS
Rate of a reaction depends on the nature of bonding in the reactants. Usually the ionic compounds react faster than covalent compounds. 
<br>
<br>

The reactions between ionic compounds in water occur very fast as they involve only exchange of ions, which were already separated in aqueous solutions during their dissolution. 
<br>
<br>

E.g. AgCl is precipitated out immediately when AgNO3 solution is added to NaCl solution. 
<br>
<br>

4) TEMPERATURE
The average kinetic energy increases with increase in absolute temperature. Hence the number of molecules with energy greater than the threshold energy also increases (see the Maxwell distribution curves shown below). As a result, the number of effective collisions between reactant molecules also increases. Therefore, usually it is observed that the rate of reaction increases with increase in temperature. 



  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 40    )</h2>

    <div class="value-img">
      <img src="3/40.jpg" data-action="zoom" data-original="3/40.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
