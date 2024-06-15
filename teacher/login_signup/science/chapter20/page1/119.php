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
  <title>page 119</title>
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
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 119   )</h2>

    <div class="value-img">
      <img src="20/119.jpg" data-action="zoom" data-original="20/119.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>


<!-- Exercise question and answers -->
<div class="container">



<h1><p style="color: blue;"><b>10. Disaster Management</b></p></h1><br><br>

<b>Question 1:</b><br>
Complete the table.<br>
(Motor accident, land sliding, forest fire, theft, riot, war, epidemic, drought, locust attack, financial crisis, flood, famine)
 
<br>
<br>
<table style="width:50%">
  <tr>
    <th>Disaster</th>
    <th>Symptoms</th> 
   <th>Effects</th>
   <th>Remedy</th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
   </tr>
 <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
   </tr>


</table>
</body>
</html>
<br>
<br>
<br>

 	 	 	 
 <p style="color:green;"><b>ANSWER:</b></p><br><br>


<br>
<br>
<table style="width:50%">
  <tr>
    <th>Disaster</th>
    <th>Symptoms</th> 
   <th>Effects</th>
   <th>Remedy</th>
  </tr>
  <tr>
    <td>Motor accident</td>
    <td>Rash driving, drink and drive, ignorance to safety rules</td>
    <td>Loss of life, loss of property</td>
    <td>Following traffic rules, avoid driving if tipsy</td>
  </tr>
  
  <tr>
    <td>Land sliding</td>
    <td>New cracks or bulges in the ground, street or sidewalks, sunken road beds</td>
    <td>Loss of property, loss of life, adverse impact on environment</td>
    <td>Give help to clear debris, call ambulance to send victims to hospitals</td>
  </tr>
  
  <tr>
    <td>Forest fire</td>
    <td>Lightning, human activities involving smoke and fire near forests areas</td>
    <td>Impact on environment, loss of lives of animals</td>
    <td>Call fire brigade, give first aid to animals which survived the burns</td>
   </tr>


<tr>
    <td>Theft</td>
    <td>Sheer carelessness towards property and wealth</td>
    <td>Tension and loss of property</td>
    <td>Informing police, giving emotional support</td>
   </tr>


<tr>
    <td>Riot</td>
    <td>Opinion differences, political influence</td>
    <td>Loss of life and property</td>
    <td>Give shelter to innocent victims, provide food and clothing and first-aid to the victims</td>
   </tr>


<tr>
    <td>War</td>
    <td>Transgressing, opinion differences between countries</td>
    <td>Loss of life and property,  Impact on the country and its economy</td>
    <td>Give shelter to innocent victims, provide food, clothing and first-aid to the victims</td>
   </tr>


<tr>
    <td>Epidemic</td>
    <td>Spreading of viruses from different animals</td>
    <td>Loss of life, health risks, impact on environment</td>
    <td>Give proper medication to people, preparing antidotes against epidemic</td>
   </tr>



<tr>
    <td>Drought</td>
    <td>No rainfall for long duration</td>
    <td>Food and water crisis, loss of life</td>
    <td>Donate food and water for victims, provide shelter and monetary help </td>
   </tr>


<tr>
    <td>Locust attack</td>
    <td>Leaf distortion, chlorosis, yellow to brown spots, premature leaf drop</td>
    <td>Crop destruction, scarcity in food</td>
    <td>Spraying pesticides</td>
   </tr>



<tr>
    <td>Financial crisis</td>
    <td>Bankrupt, loss in business or services in individual case</td>
    <td>Impact on the country and its economy, impact on individual</td>
    <td>Giving support to friends and family, asking support from other countries when crises happens in a country</td>
   </tr>

<tr>
    <td>Flood</td>
    <td>Cloudburst, heavy rainfall</td>
    <td>Health risks, loss of property,  food and water crisis, loss of life</td>
    <td>Donate food and clothing for flood victims, stay at some height if possible</td>
   </tr>

  <tr>
    <td> Famine	</td>
    <td>Heavy rainfall, drought</td>
    <td>Food and water crisis, displacement of people, loss of life</td>
    <td>Donate food and water for victims, provide shelter and monetary help</td>
   </tr> 



</table>
</body>
</html>
<br>
<br>
<br>
<br><br><br>


<b>Question 2:</b><br>
Write notes.<br>
a. Disaster management Authority<br>
b. Nature of disaster management<br>
c. Mock drill<br>
d. Disaster Management Act, 2005<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br>
<img src="image/quesation 2 ans dig.png" data-action="zoom" data-original="image/quesation 2 ans dig.png" alt="journey_start_thumbnail" />
<br>
<b>a.</b> Disaster Management Authority has the responsibility of making the policies, plans and guidelines for disaster management to ensure timely and effective response to disasters. This authority has been established at the level of government. Following flow chart indicates the function of control and coordination under the disaster management from national to village level. Disaster Management Act, 2005 has been passed in our country.<br>
<br>

<b>Pre-disaster Management:</b><br>
Pre-disaster management phase is concerned with the complete preparation and planning in order to enable us to face any kind of situation.<br>
<br>
The first step includes identifying the pro-disaster areas.<br>
The second step includes collecting information about intensity of disaster and probable sites of disasters using predictive intensity maps and hazard maps.<br>
Next step is to get training for disaster management.<br>
Another important aspect of pre-disaster management is spreading awareness among the common people through various awareness programmes.<br>
Post-disaster Management:<br>
Post-disaster management is concerned with the situation that arise after a disaster has occurred. It includes the following components:<br>
The primary concern is to provide help to victims preferably with the participation of local people.<br>
Establishment of help centres to provide all kind of possible help required by the people.
Categorisation of help materials that are received from the help centres and distributing them efficiently to the people affected by the disaster.<br>
<b>c.</b> Mock drills are a way of checking the preparedness of facing a disaster. During mock drills, an apparent situation is created to check the reaction time and the type of response. 
Mock drills are carried out in schools, offices, public places, etc. for situations like fire accidents, terrorist attack, etc.<br>
<img src="image/quesation 2 c ans dig.png" data-action="zoom" data-original="image/quesation 2 c ans dig.png" alt="journey_start_thumbnail" />
<br>
<br>

d. The Disaster Management Act, 2005 was passed by the Rajya Sabha on 28 November, and by the Lok Sabha on 12 December 2005. It received the approval from the President of India on 9 January 2006. This act has 11 chapters and 79 sections. The act extends to the whole of India. This act called for the formation of National Disaster Management Authority (NDMA) with prime minister of India as its chair person. The Act under Section 8 encouraged the central government to constitute a National Executive Committee (NEC) to assist the National Authority. All State Governments are mandated under Section 14 of the act to establish a State Disaster Management Authority (SDMA). Section 42 of the act calls for establishing a National Institute of Disaster Management.<br>
<br><br><br>
<b>Question 3:</b><br>
Answer the following questions.<br>
a. Explain the role of district disaster control unit after occurrence of any disaster.<br>
b. Give the reasons for increase in human disasters after the World War-II.<br>
c. Which are the objectives of disaster management?<br>
d. Why is it essential to get the training of first aid?<br>
e. Which different methods are used for transportation of patients? Why?<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
a. District control unit is formed either after the impact of disaster or getting intimation about it. It analyse about various aspects of disaster, keeps continuous contact with various agencies like army, air force, navy, telecommunication department, paramilitary forces, etc. for getting help. It is also responsible for coordinating with various voluntary organizations for their help in disaster management.<br>
<br>
b. After World War-II, there has been a vast advancement in technology. This has led to tremendous increase in human disasters. For example, the advancement in nuclear energy field has led to setting up of various nuclear power plants. The radiations via these power plants are affecting the environment as well as living beings. Also, the set up of various oil factories near the seas are affecting aquatic life. After the World War-II, the number in motor vehicles have increased exponentially. Due to this, motor accidents have become very frequent these days. Other reasons of increasing human disasters are oil spills, nuclear meltdown, terrorism, biological warfare, etc. <br>
<br>
c. The objectives of disaster management are as follows:
<br>
Improving tolerance<br>
Preventing losses and dangers
Providing relief to the affected people
Preparing for actions to be taken at the time of disaster
Assessing the damage caused
Arrangement of rescue for the affected
Rehabilitation and rebuilding the affected area
d. It is essential to get the training of first aid because of the following reasons:
It enables the person to use appropriate precautionary methods to save lives during emergency.
It enables the person to give primary help and medications to victims before actual medication.
It enables the person to prevent further damage to victims.
It enables the person to be relaxed and calm during critical situations.
It enables the person to give comfort and care to the victim
<br>
e. In emergency condition, different methods are used for transportation of patients. The methods to be adopted depends on the condition of the patient. Following are the various condition to be adopted while transporting patients:
Cradle method: useful for children and under-weight victims
Carrying piggy back: useful for carrying patients who are unconscious
Carrying on two hands chair: useful for those patients who cannot use their hands but can hold their body upright <br>
Pulling or lifting method: useful for carrying an unconscious patient through a short distance
Carrying on four-hand chair: useful when support is needed for the part below the waist
<br><br><br>
<b>Question 4:</b><br>
On the basis of the structure of disaster management authority, form the same for your school.
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
It is an activity based question. Kindly do it yourself.<br>
<br><br><br>

<b>Question 5:</b><br>
Write down the reasons, effects and remedial measures taken for any two disasters experienced by you.<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
Note: The disaster experienced can vary from person to person.
<br>
Two disasters experienced are:<br>
(i) Motor accident:<br>
<br>
Reason: rash driving and ignorance to safety rules<br>
Effects: Injuries to oneself and family as well as damage to property.<br>
Remedial measures: Giving emotional support to victims, calling ambulance and taking the victims to hospital<br>
(ii) Theft:<br>
Reason: sheer carelessness towards property and wealth<br>
Effects: loss of life and property<br>
Remedial measures: Giving emotional support to victims, calling police to register the case
<br><br><br>

</div>






<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
