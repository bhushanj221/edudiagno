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
  <title>page 115</title>
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
    <a href="../../chapter9.php">return to chapter</a>
    
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


<h1 style="  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;">What is Ethane?</h1>
  <p >
Ethane is a saturated hydrocarbon found in gaseous state. Ethane is the second simplest alkane followed by methane. It contains 2 carbon atoms and 6 hydrogen atoms. So the formula for ethane is C2H6. It is prepared by laboratory method using sodium propionate. Ethane is the most important gaseous fuel. Natural gas components of ethane and heavier hydrocarbons are quite easily separated from the gas stream and liquefied under moderate pressure.
<br>
Other names – Methyl methane, Bimethyl, Dimethyl, Ethyl hydride
<br>
C2H6  Ethane.
<br>
Density 1.36 kg/m³
<br>
Molecular Weight/ Molar Mass  30.07 g/mol
<br>
Boiling Point -89 °C
<br>
Melting Point -182.8 °C
<br>
Chemical Formula  C2H6
<br>
Synthesis of Ethane – C2H6
<br>
Ethane is synthesized by reduction of ethyl iodide using zinc + copper couple in alcohol. The chemical equation is given below.
<br>
CH3CH2I + 2[H] → C2H6 + HI

Ethane is also prepared by Wurtz reaction. When methyl bromide or methyl iodide and sodium are heated in the presence of dry ether ethane is formed.
<br>
CH3I + Na + CH3I = CH3-CH3 + Na


  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 115    )</h2>

    <div class="value-img">
      <img src="9/115.jpg" data-action="zoom" data-original="9/115.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>