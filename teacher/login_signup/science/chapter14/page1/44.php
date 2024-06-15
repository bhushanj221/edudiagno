
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
    <a href="../../chapter14.php">return to chapter</a>
    
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
    
A biodiversity hotspot is a biogeographic region with significant levels of biodiversity that is threatened by human habitation.
<br><br>
Norman Myers wrote about the concept in two articles in “The Environmentalist” (1988),  and 1990  revised after thorough analysis by Myers and others “Hotspots: Earth’s Biologically Richest and Most Endangered Terrestrial Ecoregions” and a paper published in the journal Nature.
<br><br>
To qualify as a biodiversity hotspot on Myers 2000 edition of the hotspot-map, a region must meet two strict criteria: it must contain at least 0.5% or 1,500 species of vascular plants as endemics, and it has to have lost at least 75% of its primary vegetation.  Around the world, 36 areas qualify under this definition. These sites support nearly 60% of the world's plant, bird, mammal, reptile, and amphibian species, with a very high share of those species as endemics. Some of these hotspots support up to 15,000 endemic plant species and some have lost up to 95% of their natural habitat.[7]
<br><br>Biodiversity hotspots host their diverse ecosystems on just 2.4% of the planet's surface,[2] however, the area defined as hotspots covers a much larger proportion of the land. The original 25 hotspots covered 11.8% of the land surface area of the Earth.[1] Overall, the current hotspots cover more than 15.7% of the land surface area, but have lost around 85% of their habitat.[8] This loss of habitat explains why approximately 60% of the world's terrestrial life lives on only 2.4% of the land surface area.
<br><br>

    
  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 44   )</h2>

    <div class="value-img">
      <img src="14/44.jpg" data-action="zoom" data-original="14/44.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
