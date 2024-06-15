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
  <title>page 122</title>
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
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;">Expert Advice</h1>
  <p >
      
<b>How to name organic compounds using the IUPAC rules</b>
<br>
In order to name organic compounds you must first memorize a few basic names. 
These names are listed within the discussion of naming alkanes. In general,
the base part of the name reflects the number of carbons in what you have assigned
to be the parent chain. The suffix of the name reflects the type(s) of functional 
group(s) present on (or within) the parent chain. Other groups which are attached to 
the parent chain are called substituents.
<br><br>
<b>Here is a simple list of rules to follow. Some examples are given at the end of the list.</b>
<br>
Identify the longest carbon chain. This chain is called the parent chain.
<br>
Identify all of the substituents (groups appending from the parent chain).
<br>
Number the carbons of the parent chain from the end that gives the substituents the lowest numbers. When compairing a series of numbers, the series that is the "lowest" is the one which contains the lowest number at the occasion of the first difference. If two or more side chains are in equivalent positions, assign the lowest number to the one which will come first in the name.
<br>
If the same substituent occurs more than once, the location of each point on which the substituent occurs is given. In addition, the number of times the substituent group occurs is indicated by a prefix (di, tri, tetra, etc.).
<br>
If there are two or more different substituents they are listed in alphabetical order using the base name (ignore the prefixes). The only prefix which is used when putting the substituents in alphabetical order is iso as in isopropyl or isobutyl. The prefixes sec- and tert- are not used in determining alphabetical order except when compared with each other.
<br>
If chains of equal length are competing for selection as the parent chain, then the choice goes in series to:
<br>
a) the chain which has the greatest number of side chains.
<br>
b) the chain whose substituents have the lowest- numbers.
<br>
c) the chain having the greatest number of carbon atoms in the smaller side chain.
<br>
d)the chain having the least branched side chains.
<br>

A cyclic (ring) hydrocarbon is designated by the prefix cyclo- which appears directly in front of the base name.
  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 122    )</h2>

    <div class="value-img">
      <img src="9/122.jpg" data-action="zoom" data-original="9/122.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
