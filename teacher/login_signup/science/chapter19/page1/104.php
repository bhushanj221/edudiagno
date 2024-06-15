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
  <title>page 104</title>
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
    <a href="../../chapter19.php">return to chapter</a>
    
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
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;">What are the consequences of distracted eating?</h1>
  <p >
It's no secret that the increasing rate of obesity and the rise of technology coincide. 

No one can say that TV screens and cell phones are the sole reason for America's concerning obesity levels -- easy access to processed foods, inexpensive fast-food chains, access to transportation and an increase in sedentary jobs also contribute. But there's a clear link between screen time and body weight, especially in children and adolescents. 

This might simply be due to the fact that more screen time usually means more sedentary time. 

But it might also be due to the fact that distracted or hurried eating can cause you to eat more than you would without distractions. When you're distracted, you might not pay attention to how much you eat or how quickly you eat, and you might miss the fullness cue that signals your body is satisfied. 

Conversely, paying attention to meals (or mindfully eating) has been linked to eating less later in the day. For example, mindfully eating your breakfast might result in you eating less at lunch or dinner.</P







  <h1 style="  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;">Dangerious Selfie</h1><br>

<p>New Delhi: A recently published study has found that almost 100 people died taking selfies in 2017, a phenomenon that has seen exponential growth in recent years. The study found that between 2011 and 2017, 259 people died taking selfies, with 159 such incidents reported in India.

The researchers called for “no selfie zones” across tourist areas, especially near water bodies, mountain peaks and tall buildings to decrease the incidence of “selfie deaths”.

Similar studies published earlier have shown that India has been seen maximum number of “selfie death” incidents.

The recent study, published in the Journal of Family Medicine and Primary Care, says youngsters, especially young males, are more likely to take dangerous selfies, putting their life at risk. Almost two-thirds of the deaths were of males. The results show that people between the age of 10 and 29 years died in 86% of such incidents. Drowning, falling from elevated areas and transport (clicking selfies near a train or moving vehicle), were the leading causes of deaths.

While India has the highest selfie toll at 159 deaths, Russia with 16 reported deaths has the second highest deaths. US and Pakistan have respectively reported 14 and 11 deaths. The researchers suggest that India’s large young population could be one reason behind the high occurrence of selfie deaths.</p>

</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 104   )</h2>

    <div class="value-img">
      <img src="19/104.jpg" data-action="zoom" data-original="19/104.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
