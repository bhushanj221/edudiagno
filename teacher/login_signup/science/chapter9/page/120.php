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
  <title>page 120</title>
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
  <h2 style="  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;">Nomenclature of Carbon Compounds:</h2>
  <p >  

<br>
International Union of Pure and Applied Chemistry (IUPAC) decided some rules to name the carbon compounds. This was done to maintain the uniformity throughout the world. Names which are given on this basis are popularly known as IUPAC name. The rules for nomenclature are as follows:
<br>
Identify the number of carbon atoms in carbon compound. Name the carbon compounds according to the number of carbon atoms.
<br>
Example: Saturated hydrocarbon having one carbon atom is named as Methane. Saturated hydrocarbon having two carbon atoms is named as Ethane.
<br>
Unsaturated hydrocarbon with double bond having two carbon atoms is named as Ethene.
<br>
Unsaturated hydrocarbon with triple bond between carbon atoms is named as Ethyne.
<br>
If the structure has branched chain, identify the longest chain and then identify the number of carbon atoms. To understand this, let us observe following examples:
<br>
branched carbon chain
branched carbon chain
In figure (a) the longest chain has eight carbon atoms, and thus the name of parent compound would be octane. In figure (b) longest chain has nine carbon atoms, and thus the name of parent compound would be nonane.
<br>
Identify the longest chain. Then number the carbon atoms in such a fashion that the functional group; if any; would come at the lowest number.
<br>
branched carbon chain
In the given figure (c), while counting from right to left (in red color), branched chain which is functional group falls at the fourth position. On the other hand, while counting from left to right, the branched chain falls at the fifth position. In this case, the numbering from right to left is taken because then only the functional would be at the lowest position.
<br>
In case of a functional group present, write the prefix or suffix of the functional group according to the table given here. Then write the name of the parent compound.





  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 120    )</h2>

    <div class="value-img">
      <img src="9/120.jpg" data-action="zoom" data-original="9/120.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
