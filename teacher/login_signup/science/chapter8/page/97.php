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
  <title>page 97</title>
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
<b>What happens when metals react with non metals?</b>
<br>
When a metal reacts with a non-metal few changes takes place with the compound or molecules undergoing in the reaction. Let us see what happens.
<br><br>
Changes that take place during reaction
Transfer of electrons
When metals react with non-metals, electrons are transferred from the metal atoms to the non-metal atoms, forming ions. The resulting compound is called an ionic compound.
<br><br>
Formation of ions
The metal atoms give electrons to the non-metal atoms. The metal atoms become positive ions and the non-metal atoms become negative ions.
<br><br>
Reactions
Few examples of the reaction between metals and non metals
<br><br>
Sodium + chlorine → sodium chloride
<br><br>
Magnesium + oxygen → magnesium oxide
<br><br>
Calcium + chlorine → calcium chloride
<br><br>
  
  
<b>Chemical properties of non-metal</b>
<br>
The chemical properties of non-metal are given below:
<br>
• Non metallic oxides are acidic in nature.
<br>
• They do not dissolve in dilute mineral acids.
<br>
• They form stable compound with hydrogen.
<br>
• Their chlorides are completely hydrolyzed by water.
<br>
• Reaction of non-metals with oxygen: They react with oxygen to form acidic oxides or neutral oxides.
<br>
• Reaction of non-metals with water: They do not react with water (steam) to evolve hydrogen gas.
<br>
• Reaction of non-metal with acids: They do not react with acids because they are negative charged electron.
<br>
• Reaction of non-metal with salt solution: They do not react with salt solution but displaces less reactive non-metal from the salt.
<br>
• Reaction of non-metal with chlorine: They are react with chlorine to form covalent chlorides which are non- electrolytes.  
  <br>  
</p>



</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 97  )</h2>

    <div class="value-img">
      <img src="8/97.jpg" data-action="zoom" data-original="8/97.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
