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
  <title>page 124</title>
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
    
Oxidation is any chemical reaction that involves the moving of electrons.
<br><br>
Specifically, it means the substance that gives away electrons is oxidized.
Normally, this is a reaction between oxygen and a substance such as iron.
<br><br>
When iron reacts with oxygen it forms a chemical called rust because it
 <br><br>
has been oxidized (the iron has lost some electrons) and the oxygen has been reduced (the oxygen has gained some electrons).
<br><br>
Formula of rusting is: 4Fe + 3O2 → 2F→Fe2O3.x H2O
<br><br>
Oxidation is the opposite of reduction. A reduction-reaction always comes together with an oxidation-reaction. 
Oxidation and reduction together are called redox (reduction and oxidation). Oxygen does not have to be present in a reaction for it to be a redox-reaction.
<br><br>
Oxidation is the loss of electrons.
<br><br>
Reduction is the gain of electrons.
<br><br>
In terms of oxygen transfer, oxidation may be defined as the chemical process in which a substance gains 
oxygen or loses electrons and hydrogen.
<br><br>
When one of the reactants is oxygen, then oxidation is the gain of oxygen.
<br><br> 
Reduction is a loss of oxygen. For example:
<br><br>
Fe2O3 + 3CO → 2Fe + 3CO2
<br><br>
Both reduction and oxidation go on at the same time which is a redox-reaction.
<br><br>
The loss of hydrogen atoms and the gain of oxygen atoms is known as oxidation. 
<br><br>
The gain of hydrogen atoms and the loss of oxygen atoms is known as reduction. 
<br><br>
Oxidation is gain of oxygen atoms and reduction is gain of hydrogen atoms.


  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 124    )</h2>

    <div class="value-img">
      <img src="9/124.jpg" data-action="zoom" data-original="96/124.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
