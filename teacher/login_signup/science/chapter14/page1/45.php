
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
  <title>page 45</title>
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
    
Threatened Species are any species (including animals, plants, fungi, etc.) which are vulnerable to endangerment in the near future. Species that are threatened are sometimes characterised by the population dynamics measure of critical depensation, a mathematical measure of biomass related to population growth rate. This quantitative metric is one method of evaluating the degree of endangerment
<br><br>
The International Union for Conservation of Nature (IUCN) is the foremost authority on threatened species, and treats threatened species not as a single category, but as a group of three categories, depending on the degree to which they are threatened:
<br><br>
Vulnerable species
Endangered species
Critically endangered species
Less-than-threatened categories are near threatened, least concern, and the no longer assigned category of conservation dependent. Species which have not been evaluated (NE), or do not have sufficient data (data deficient) also are not considered "threatened" by the IUCN.

<br><br>
The three categories of the threatened species IUCN Red List.
Although threatened and vulnerable may be used interchangeably when discussing IUCN categories, the term threatened is generally used to refer to the three categories (critically endangered, endangered and vulnerable), while vulnerable is used to refer to the least at risk of those three categories. They may be used interchangeably in most contexts however, as all vulnerable species are threatened species (vulnerable is a category of threatened species); and, as the more at-risk categories of threatened species (namely endangered and critically endangered) must, by definition, also qualify as vulnerable species, all threatened species may also be considered vulnerable.
<br><br>
Threatened species are also referred to as a red-listed species, as they are listed in the IUCN Red List of Threatened Species.
<br><br>
Subspecies, populations and stocks may also be classified as threatened.

    
  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 45  )</h2>

    <div class="value-img">
      <img src="14/45.jpg" data-action="zoom" data-original="14/45.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
