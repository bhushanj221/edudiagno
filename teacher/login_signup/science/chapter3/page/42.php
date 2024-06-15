
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
  <title>page 42</title>
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
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;">Expert Advice</h1>
  <p >
    
<b>Uses:</b><br>
<br>
<b>ethyle alcoho(CH3−CH2−OH)</b>= Ethanol is used extensively as a solvent in the manufacture of varnishes and perfumes;
as a preservative for biological specimens; in the preparation of essences and flavorings; 
in many medicines and drugs; as a disinfectant and in tinctures (e.g., tincture of iodine); and as a fuel and gasoline additive (see gasohol).
<b>Potassium dichromate(K2Cr2O7)</b>=Potassium dichromate is an oxidising agent in organic chemistry, 
and is milder than potassium permanganate. It is used to oxidize alcohols. It converts primary alcohols into aldehydes and,
under more forcing conditions, into carboxylic acids.<br>
<b>Sulphuric Acid(H2so4)</b>= Sulphuric acid is highly acidic. 
Therefore, it is used in the cleaning of metals, removal of impurities from oil,
manufacturing of chemicals – nitric acid, hydrochloric acid, synthesis of dye, drugs, detergents, explosives, etc.<br>

<b>Ascetic acid(CH3COOH)</b>=Industrially, acetic acid is used in the preparation of metal acetates,
used in some printing processes; vinyl acetate, employed in the production of plastics; cellulose acetate,
used in making photographic films and textiles; and volatile organic esters (such as ethyl and butyl acetates)
  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 42    )</h2>

    <div class="value-img">
      <img src="3/42.jpg" data-action="zoom" data-original="3/42.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
