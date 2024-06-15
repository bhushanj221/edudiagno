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
table, th, td {
    border-collapse: collapse;
    border: 1px solid black;

  text-align: center;
  padding: 9px;

}

h1 {text-align: center;}
</style>
</head>
<body>




 <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="#" onclick="window.history.go(-1)">back</a>
    <a href="../../chapter20.php">return to chapter</a>
    
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
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 120   )</h2>

    <div class="value-img">
      <img src="20/120.jpg" data-action="zoom" data-original="20/120.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>


<!-- partial:index.partial.php -->
<div class="container">
<h1><p style="color: blue;"><b>10. Disaster Management</b></p></h1><br><br>


<b>Question 6:</b><br>
Which different aspects of disaster management would you check for your school? Why?
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
Following are the main aspects of disaster management:<br>
Preparation: A plan is created to minimise the damage if a disaster occurs.<br>
Redemption: It is the plan to minimise the damage to the society and country.
Preparedness: A plan is chalked out to get quick response from public and administration.
Impact of disaster: Intensity of disaster and disaster management are reviewed.
Response: This stage deals with providing immediate response after an incident has occurred.
Resurgence: It is an important link between emergency measures and national progress. It includes the steps which are required for the welfare and rehabilitation of the nation. 
Restoration: It is an important link between measures after disaster and national development. It includes steps useful for progress of
nation and rehabilitation.
Do a survey of your school and find out which aspects of disaster management are needed to be checked for your school.
<br><br><br>

<b>Question 7:</b><br><br>
Identify the type of disaster.<br>
a. Terrorism<br>
b. Soil erosion<br>
c. Hepatitis<br>
d. Forest fire<br>
e. Famine<br>
f. Theft<br>

<p style="color:green;"><b>ANSWER:</b></p><br><br>
a. Terrorism: Man-made<br>
b. Soil erosion: Man-made as well as natural<br>
c. Hepatitis: Natural<br>
d. Forest fire: Man-made as well as natural<br>
e. Famine: Natural as well as man-made<br>
f. Theft: Man-made<br>

<br><br><br>
<b>Question 8:</b><br>
Some symbols are given below. Explain those symbols. Which disasters may occur if those symbols are ignored?<br>
<img src="image/quesation 8 que dig.png" data-action="zoom" data-original="image/quesation 8 que dig.png" alt="journey_start_thumbnail" />
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
<img src="image/quesation 8 ans dig.png" data-action="zoom" data-original="image/quesation 8 ans dig.png" alt="journey_start_thumbnail" />
<br>
These symbols come under globally harmonised system (GHS) adopted by UN for labelling and classification of chemicals.<br>
<br>
(i) This symbol is used for hazardous products which causes less severe health effects. This symbol indicates that the product has acute toxicity, can cause skin and eye irritation, can be hazardous to ozone layer, can affect respiratory organs as well as has narcotic effects. If this symbol is ignored, then health issues as mentioned above can arise as well as can impact the environment.<br>
<br>
(ii) These are used for products which have deathly effects on exposure to small amount of it. This symbol indicates that the product has acute oral, dermal and inhalation toxicity. It would prove fatal if the product with this symbol is swallowed or inhaled.
<br>
(iii) This symbol is used to represent that the product is hazardous to aquatic life. If these products are spilled in oceans or seas, then it can have fatal and long lasting effects on aquatic organisms.<br>
<br>
(iv) This symbol indicates that the product can cause serious health effects. The product with this symbol can cause respiratory sensitivity, skin toxicity, germ cell mutagenicity, carcinogenicity, reproductive toxicity, aspiration hazard, specific target organ toxicity after single exposure or repeated exposure.<br>
<br>
(v) This symbol is used to indicate that the product is capable of corroding metals and cause irritation to eyes and skin. The product with this symbol can also cause severe burns to skin as well as damage the eye.<br>
<br>
(vi) This symbol represents that the product is good oxidising liquids or solids. The product having this symbol can cause fire or explosions or can even intensify fire.
<br>
(vii) This symbol represents flammable gases, aerosols, liquids and solids; pyrophoric liquids, gases and solids, self-reactive substance or mixtures, organic peroxides. The product having this symbol can cause fire on heating.
<br>
(viii)  This symbol represents that the product is an unstable explosive or it is a self-reactive substance or mixtures. This symbol is also placed on labels of organic peroxides. The product having this symbol can cause explosions on heating.
<br>
(ix) This symbol is used to represent the hazard of gases under pressure such as dissolved gas, liquefied gas, compresses gas or refrigerated liquefied gas. The product having this symbol may explode on heating as well as may cause cryogenic burns and injuries.
<br>
<br><br><br>
<b>Question 9:</b><br>
Explain that why is it said like that?<br>
A] Mock drill is useful<br>
B] Effective disaster management makes us well prepared for future.<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
A. It is very correct to say that mock drills are very important and useful. These drills should be conducted at every work places, schools, public places etc. These drills ensure a way of checking the preparedness of facing a disaster. Through mock drills, 
<br>
we can evaluate the response or reaction time to a disaster<br>
we can identify our own abilities<br>
coordination between various departments of disaster control can be improved<br>
we can check the competency of the planned actions<br>
we can identify the possible errors and risks<br>
B. We know that disasters are sudden and unplanned and thus can't be avoided in most cases. But if effective disaster management is employed and exercised, then we would certainly achieve the abilities to face the adverse effects of disasters. Hence, through effective disaster management, we actually make ourselves prepared for future. Through effective disaster management, <br>
we can supply essential commodities to the people after or before disaster<br>
we can arrange rescue for the affected<br>
we can rehabilitate and rebuild the affected area in short span of time<br>
we can minimise losses of life and property<br>
we can build tools to assess the damaged caused<br>
<br><br><br>
<b>Question 10:</b><br>
Complete the following chart.<br>


<p style="color:green;"><b>ANSWER:</b></p><br><br>

<img src="image/quesation 10 ans dig.png" data-action="zoom" data-original="image/quesation 10 ans dig.png" alt="journey_start_thumbnail" />
<br>

<b>Question 11:</b><br>
Following are the pictures of some disasters. How will be your pre- and post-disaster management in case you face any of those disasters?
<br>


<p style="color:green;"><b>ANSWER:</b></p><br><br>
(a) Pre-disaster management: 

Avoid drinking cold water and eating ice-creams<br>
Post-disaster management:<br>
Visit a doctor<br>
Take proper medication and rest<br>
Avoid going to public places<br>
<b>(b)  Pre-disaster management:</b><br> 
Discussing the problem with elders<br>
Trying to settle the dispute verbally<br>
<b>Post-disaster management:</b><br>
Identifying any serious injuries occurred to oneself or the counterpart. Getting propermedication for the same<br>
Apologizing to each other<br>
<b>(c)  Pre-disaster management:</b><br> 
Keep an emergency kit. This kit should consist of portable lights, medicines etc.<br>
Keep extra dry food and portable water<br>
Move to higher floors if possible<br>
Switch off all the electrical appliances<br> 
<b>Post-disaster management:</b><br>
Avoid going to water flooded areas as there are chances of harmful insects being present there
Check for the casualties around<br>
Help the victims in need<br>
<b>(d) Pre-disaster management:</b> <br>
Keep an emergency kit. This kit should consist of portable lights, medicines etc.<br>
Keep extra dry food and portable water<br>
Move to locations which are less prone to cyclones<br>
Switch off all the electrical appliances<br> 
<b>Post-disaster management:</b><br>
Clearing the debris left behind the cyclone<br>
Help the victims in need<br>
Check for the ruptures or cracks on the wall of house<br>


</div>

<br>

<br><br><br><br>


<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
