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
  <title>page 99</title>
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
table, th, td {
    border-collapse: collapse;
    border: 1px solid black;

  text-align: left;
  padding: 8px;

}

h1 {text-align: center;}
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
  <p >
Cultivation of many medicinal plants on private land is required both to conserve the species and to ensure the supply of quality raw material to the industry. Conservation of medicinal plant species in private land by resource rich individuals has been successful.

<br>
Fruit development can generally be divided into three major stages: growth, maturation, and senescence. The period of growth generally involves cell division and enlargement, which accounts for the increasing size of the fruit.
</p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 99   )</h2>

    <div class="value-img">
      <img src="18/99.jpg" data-action="zoom" data-original="18/99.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>

<!-- question and answers -->
<div class="container">


<h1><p style="color: blue;"><b> 8. Cell Biology and Biotechnology</b></p></h1><br><br>


<b>Question 1:</b><br>
Fill in the blanks and complete the statements.<br>
a. Methods like artificial insemination and embryo transplant are mainly used for --- --- ---<br>
b. -- -- -- -- is the revolutionary event in biotechnology after cloning.<br>
c. The disease related with the synthesis of insulin is --- --- ---.<br>
d. Government of India has encouraged the -- -- --- -- for improving the productivity by launching NKM-16.<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
a. Methods like artificial insemination and embryo transplant are mainly used for<b style="color:green;"><u> improving the quality and quanitiy of animal products.</u></b><br>
b. <b style="color:green;"><u>Stem cell technology</u></b> is the revolutionary event in biotechnology after cloning.<br>
c. The disease related with the synthesis of insulin is<b style="color:green;"><u> diabetes.</u></b><br>
d. Government of India has encouraged the<b style="color:green;"><u> people</b> </u>for pisciculture for improving the productivity by launching NKM-16.<br>
 

</div>






<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
