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
  <title>page 77</title>
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
    <a href="../../chapter17.php">return to chapter</a>
    
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
  <p >Applied microbiology is a branch deals with application of microorganisms in the field of science for the production of human beneficial products such as medicines, antibiotics, vaccines, enzymes, biotechnological engineered products and also in food technology as fermentation products.

<br>
Industrial microbiology is a branch of biotechnology that applies microbial sciences to create industrial products in mass quantities, often using microbial cell factories. There are multiple ways to manipulate a microorganism in order to increase maximum product yields. Introduction of mutations into an organism may be accomplished by introducing them to mutagens. Another way to increase production is by gene amplification, this is done by the use of plasmids, and vectors. The plasmids and/ or vectors are used to incorporate multiple copies of a specific gene that would allow more enzymes to be produced that eventually cause more product yield. The manipulation of organisms in order to yield a specific product has many applications to the real world like the production of some antibiotics, vitamins, enzymes, amino acids, solvents, alcohol and daily products. Microorganisms play a big role in the industry, with multiple ways to be used. Medicinally, microbes can be used for creating antibiotics in order to treat antibiotics. Microbes can also be used for the food industry as well. Microbes are very useful in creating some of the mass produced products that are consumed by people. The chemical industry also uses microorganisms in order to synthesize amino acids and organic solvents. Microbes can also be used in an agricultural application for use as a biopesticide instead of using dangerous chemicals and or inoculants to help plant proliferation.

<br>
Dairy products or milk products are a type of food produced from or containing the milk of mammals, most commonly cattle, water buffaloes, goats, sheep, and camels. Dairy products include food items such as yogurt, cheese and butter.[1][2] A facility that produces dairy products is known as a dairy, or dairy factory.[3] Dairy products are consumed worldwide, with the exception of most of East and Southeast Asia and parts of central Africa.</p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 77   )</h2>

    <div class="value-img">
      <img src="17/77.jpg" data-action="zoom" data-original="17/77.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
