
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
  <title>page 47</title>
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
    <a href="../../chapter15.php">return to chapter</a>
    
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
    
consumption is the total energy produced and used by humans. Typically measured per year, it involves all energy harnessed from every energy source applied towards activity across all industrial and technological sectors, in every country. It does not include energy from food. World energy consumption has implications for the socio-economic-political sphere.
<br><br>
Institutions such as the International Energy Agency (IEA), the U.S. Energy Information Administration (EIA), and the European Environment Agency (EEA) record and publish energy data periodically. Improved data and understanding of world energy consumption may reveal systemic trends and patterns, which could help frame current energy issues and encourage movement towards collectively useful solutions.
<br><br>
Closely related to energy consumption is the concept of total primary energy supply (TPES), which – on a global level – is the sum of energy production minus storage changes. Since changes of energy storage over the year are minor, TPES values can be used as an estimator for energy consumption. However, TPES ignores conversion efficiency, overstating forms of energy with poor conversion efficiency (e.g. coal, gas and nuclear) and understating forms already accounted for in converted forms (e.g. photovoltaics or hydroelectricity). The IEA estimates that, in 2013, total primary energy supply (TPES) was 157.5 petawatt hours or 1.575×1017 Wh (157.5 thousand TWh; 5.67×1020 J; 13.54 billion toe) or about 18 TW-year. From 2000 to 2012 coal was the source of energy with the total largest growth. The use of oil and natural gas also had considerable growth, followed by hydropower and renewable energy. Renewable energy grew at a rate faster than any other time in history during this period. The demand for nuclear energy decreased, in part due to nuclear disasters (Three Mile Island in 1979, Chernobyl in 1986, and Fukushima in 2011). More recently, consumption of coal has declined relative to renewable energy. Coal dropped from about 29% of the global total primary energy consumption in 2015 to 27% in 2017, and non-hydro renewables were up to about 4% from 2%.
<br><br>
In 2010, expenditures on energy totaled over US$6 trillion, or about 10% of the world gross domestic product (GDP). Europe spends close to one-quarter of the world's energy expenditures, North America close to 20%, and Japan 6%.

  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 47   )</h2>

    <div class="value-img">
      <img src="15/47.jpg" data-action="zoom" data-original="15/47.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
