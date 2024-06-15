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
  <title>page 92</title>
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
  <p >Biotechnology has applications in four major industrial areas, including health care (medical), crop production and agriculture, non-food (industrial) uses of crops and other products (e.g. biodegradable plastics, vegetable oil, biofuels), and environmental uses.Biotechnology has applications in four major industrial areas, including health care (medical), crop production and agriculture, non-food (industrial) uses of crops and other products (e.g. biodegradable plastics, vegetable oil, biofuels), and environmental uses.
Biotechnology is a broad area of biology, involving the use of living systems and organisms to develop or make products. Depending on the tools and applications, it often overlaps with related scientific fields. In the late 20th and early 21st centuries, biotechnology has expanded to include new and diverse sciences, such as genomics, recombinant gene techniques, applied immunology, and development of pharmaceutical therapies and diagnostic tests. The term biotechnology was first used by Karl Ereky in 1919, meaning the production of products from raw materials with the aid of living organisms.

<br>
Agricultural biotechnology, also known as agritech, is an area of agricultural science involving the use of scientific tools and techniques, including genetic engineering, molecular markers, molecular diagnostics, vaccines, and tissue culture, to modify living organisms: plants, animals, and microorganisms.[1] Crop biotechnology is one aspect of agricultural biotechnology which has been greatly developed upon in recent times. Desired trait are exported from a particular species of Crop to an entirely different species. These transgene crops possess desirable characteristics in terms of flavor, colour of flowers, growth rate, size of harvested products and resistance to diseases and pests.

<br>
Hybrid seeds are produced by companies through careful pollination of two specific varieties. Normally, this highly selective plant breeding is done to bring together two traits in each of the chosen varieties so that the resulting seed has both of the traits.

<br>
GM is a technology that involves inserting DNA into the genome of an organism. To produce a GM plant, new DNA is transferred into plant cells. Usually, the cells are then grown in tissue culture where they develop into plants. The seeds produced by these plants will inherit the new DNA.
</p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 92   )</h2>

    <div class="value-img">
      <img src="18/92.jpg" data-action="zoom" data-original="18/92.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
