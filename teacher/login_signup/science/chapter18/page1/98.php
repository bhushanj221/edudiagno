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
  <title>page 98</title>
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
    <a href="../../chapter18.php">return to chapter</a>
    
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
  <p >Insecticides are substances used to kill insects.[1] They include ovicides and larvicides used against insect eggs and larvae, respectively. Insecticides are used in agriculture, medicine, industry and by consumers. Insecticides are claimed to be a major factor behind the increase in the 20th-century's agricultural productivity.[2] Nearly all insecticides have the potential to significantly alter ecosystems; many are toxic to humans and/or animals; some become concentrated as they spread along the food chain.

<br>
Organic farming is an agricultural system which originated early in the 20th century in reaction to rapidly changing farming practices. Certified organic agriculture accounts for 70 million hectares globally, with over half of that total in Australia.[2] Organic farming continues to be developed by various organizations today. It is defined by the use of fertilizers of organic origin such as compost manure, green manure, and bone meal and places emphasis on techniques such as crop rotation and companion planting. Biological pest control, mixed cropping and the fostering of insect predators are encouraged. Organic standards are designed to allow the use of naturally occurring substances while prohibiting or strictly limiting synthetic substances.[3] For instance, naturally occurring pesticides such as pyrethrin and rotenone are permitted, while synthetic fertilizers and pesticides are generally prohibited. Synthetic substances that are allowed include, for example, copper sulfate, elemental sulfur and Ivermectin. Genetically modified organisms, nanomaterials, human sewage sludge, plant growth regulators, hormones, and antibiotic use in livestock husbandry are prohibited.[4][5] Organic farming advocates claim advantages in sustainability,[6][7] openness, self-sufficiency, autonomy/independence,[7] health, food security, and food safety.

<br>
Apiculture is the practice of keeping and maintaining bees and their hives. The beekeeper is also referred to as the apiarist and the entire colony set up is called the Apiary. Beekeeping has grown in popularity in recent years and the raw honey, beeswax, and royal jelly are much sought after products.</p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 98   )</h2>

    <div class="value-img">
      <img src="18/98.jpg" data-action="zoom" data-original="18/98.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
