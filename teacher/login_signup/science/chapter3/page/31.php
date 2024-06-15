
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
  <title>page 31</title>
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
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;"> Expert Advice</h1>
<p><b>Uses:-</b><br>

<b>zine(Zn)</b>= Zinc is also used in alloys such as brass, nickel silver and aluminium solder. Zinc oxide is widely used in the manufacture of very many products such as paints, rubber, cosmetics, pharmaceuticals, plastics, inks, soaps, batteries, textiles and electrical equipment.
<br><b>Copper sulphate(CuSO4)</b>= Copper sulfate is used as a fungicide, algaecide, root killer, and herbicide in both agriculture and non-agricultural settings. It is also used as an antimicrobial and molluscicide. Uses for individual products containing copper sulfate vary widely.<br>
<b>potassium chromate(K2Cr2)</b>=It is used in chemical analysis, in making pigments for paints and inks, as a fungicide, and to make other chromium compounds. Potassium chromate is a potassium salt consisting of potassium and chromate ions in a 2:1 ratio. It has a role as a carcinogenic agent and an oxidising agent.
<br><br><b>barium sulphate(BaSO4)</b>=Barium sulfate is a contrast agent. Barium sulfate works by coating the inside of your esophagus, stomach, or intestines which allows them to be seen more clearly on a CT scan or other radiologic (x-ray) examination. Barium sulfate is used to help diagnose certain disorders of the esophagus, stomach, or intestines.
<br><br><b>sodium carbonate (Na2CO3)</b>=Sodium carbonate is a strong alkali base used in green cleaning products. Often found in powder form, it's used in a wide range of industries, such as in cleaning and personal care products and as a fungicide, microbicide, herbicide, and pH adjuster.<br>
<br><b>calcium chloride(CaCl2)</b>=Calcium Chloride is a mineral indicated in the immediate treatment of hypocalcemic tetany (abnormally low levels of calcium in the body that cause muscle spasm). Calcium chloride injection is also used in cardiac resuscitation, arrhythmias, hypermagnesemia, calcium channel blocker overdose, and beta-blocker overdose.</p>




</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 31    )</h2>

    <div class="value-img">
      <img src="3/31.jpg" data-action="zoom" data-original="3/31.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
