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
  <title>page 87</title>
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
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;"></h1>
  




</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 87   )</h2>

    <div class="value-img">
      <img src="17/87.jpg" data-action="zoom" data-original="17/87.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>



<!-- partial:index.partial.php -->
<div class="container">
<br><br><br>
	<h1><p style="color: blue;"><b> 7. Introduction to Microbiology </b></p></h1><br><br>

<b>Question 8:</b><br>
Answer the following.<br>
a. What is role of microbes in compost production?<br>
b. What are the benefits of mixing ethanol with petrol and diesel?<br>
c. Which plants are cultivated to obtain the fuel?<br>
d. Which fuels are obtained from biomass?<br>
e. How does the bread become spongy?<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
 a. Microbes play an important role in various aspects of our lifes. One such important role is the formation of compost. The biodegradable waste which is collected from all around the cities are placed in landfill sites. Landfill sites are created by digging deep pits away from residential areas and the biodegradable waste is dumped into it. The conversion of this waste is then carried out by various kinds of microorganisms, specially aerobic bacteria and some kind of fungi. It takes time for formation of compost and then the landfill site is again ready to use while the compost can be used in agricultural fields, parks etc.<br>
<br>
b. Nowadays, many countries are practicing mixing of ethanol with petrol and diesel. Ethanol is a clean burning fuel and reduces the vehicle exhaust emissions. Also. it is an easily available and cheap source which makes it suitable for this purpose.<br>
<br>
c. Biofuels can be obtained from cultivating plants like corn, sugarcane, palm oil, jatropha, soybean, switchgrass and rapeseed.<br>
<br>
d. Fuels which are obtained from biomass are called bio fuels and they are an important and renewable source of energy. Biofuels can be in the form of either solid, liquid or gases.
Solid biofuels- coal, dung, crop residue<br>
Liquid- vegetable oils, alcohol<br>
Gaseous- gobar gas, coal gas<br>
<br>
e. Breads become spongy due to the addition of yeast in their dough. Yeast reproduces rapidly and produces carbon dioxide gas while respiring. This gas fills the dough and increases its volume making it to rise, thus making the bread appear spongy and fluffy.
<br>
<br>
<br>
<br>


</div>



<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
