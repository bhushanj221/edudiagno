
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
  <title>page 59</title>
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
  padding: 10px;

}

h1 {text-align: center;}

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
    
Solar thermal power/electric generation systems collect and concentrate sunlight to produce the high temperature heat needed to generate electricity. All solar thermal power systems have solar energy collectors with two main components: reflectors (mirrors) that capture and focus sunlight onto a receiver. In most types of systems, a heat-transfer fluid is heated and circulated in the receiver and used to produce steam. The steam is converted into mechanical energy in a turbine, which powers a generator to produce electricity. Solar thermal power systems have tracking systems that keep sunlight focused onto the receiver throughout the day as the sun changes position in the sky. Solar thermal power plants usually have a large field or array of collectors that supply heat to a turbine and generator. Several solar thermal power facilities in the United States have two or more solar power plants with separate arrays and generators.
<br><br>
Solar thermal power systems may also have a thermal energy storage system component that allows the solar collector system to heat an energy storage system during the day, and the heat from the storage system is used to produce electricity in the evening or during cloudy weather. Solar thermal power plants may also be hybrid systems that use other fuels (usually natural gas) to supplement energy from the sun during periods of low solar radiation.
  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 59   )</h2>

    <div class="value-img">
      <img src="15/59.jpg" data-action="zoom" data-original="15/59.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>

<!-- question an answers -->

<div class="container">

<br><br><br>
	<h1><p style="color: blue;"><b>  5. Towards Green Energy</b></p></h1><br><br>

<b>Question 1:</b><br>
Remake the table taking into account relation between entries in three columns.<br>
 <br>
<br>
<table style="width:50%">
  <tr>
    <th>I</th>
    <th>II</th> 
    <th>III</th> 
   
  </tr>
  <tr>
    <td>Coal</td>
    <td>Potential Energy</td>
    <td>Wind electricity plant</td> 
    
  </tr>
  
  <tr>
    <td>Uranium</td>
    <td>Kinetic Energy</td>
    <td>Hydro electric plant</td> 
    
  </tr>
  
  <tr>
  	<td>Water Reservoir</td> 
    <td>Nuclear Energy</td> 
    <td>Thermal plant</td> 
    
  </tr>
  

  <tr>
  	<td >Wind</td> 
    <td>Thermal Energy</td> 
    <td>Nuclear power plant</td> 
    
  </tr>

</table>
</body>
</html>

<br><br>
	 	
<p style="color:green;"><b>ANSWER:</b></p><br><br>
<br>
<br>

<table style="width:50%">
  <tr>
    <th>I</th>
    <th>II</th> 
    <th>III</th> 
   
  </tr>
  <tr>
    <td>Coal</td>
    <td>Thermal Energy</td>
    <td>Thermal plant</td> 
    
  </tr>
  
  <tr>
    <td>Uranium</td>
    <td>Nuclear Energy</td>
    <td>Nuclear powder plant</td> 
    
  </tr>
  
  <tr>
  	<td>Water Reservoir</td> 
    <td> Potential Energy</td> 
    <td> Hydro electric plant</td> 
    
  </tr>
  

  <tr>
  	<td >Wind</td> 
    <td> Kinetic Energy</td> 
    <td>Wind electricity plant</td> 
    
  </tr>

</table>
</body>
</html>
<br><br><br>


<b>Question 2:</b><br>
Which fuel is used in thermal power plant? What are the problems associated with this type of power generation?
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
Coal is used in thermal power plant. Problems associated with this type of power generation are:
<br>
*Air pollution caused due to burning of coal: Burning of coal emits gases like carbon dioxide, sulphur oxide and nitrogen oxide which are harmful to living beings<br>
*Release of soot particles in the environment: Along with the gases released due to burning of coal, soot particles are released in the environment which can cause fatal respiratory problems.<br>
*Coal is non-renewable source of energy. So, this method of power generation will put a limit on the availability of coal in future.<br>
<br><br>


<b>Question 3:</b><br>
Other than thermal power plant, which power plants use thermal energy for power generation? In what different ways is the thermal energy obtained? <br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
Other than thermal power plant, nuclear power plants, solar power plants use thermal energy for power generation. Different ways of generating thermal energy are:<br>
<br>
Using fossil fuels: By burning fossil fuels such as coal, petroleum, the chemical energy stored in them is converted into thermal energy.<br>
Using natural gas: Chemical energy in natural gas is converted into thermal energy.<br>
Using nuclear fuels: Controlled chain reaction in nuclear power plants releases huge amount of thermal energy.
Using solar energy: Solar energy can be reflected and absorbed in aborbers where it gets converted to thermal energy.<br> 
Using geothermal energy: Underground water, sometimes, comes in contact with hot spots (where hot molten rocks are found), and thus steam is generated which is then collected via hot springs. Thus, geothermal energy is converted to heat energy.<br>
<br><br>


<b>Question 4:</b><br>
Which type/types of power generation involve maximum number of steps of energy conversion? In which power generation is the number minimum?<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
 The types of power generation involving maximum number of steps of energy conversion are:<br>
(i) Thermal energy based power generation: It involves 5 steps of energy conversion.<br>
<b>Chemical energy in coal-thermal energy-kinetic energy in steam-kinetic energy in turbine-electrical energy</b><br>
(ii) Nuclear energy based power generation: It also involves 5 steps of energy conversion.<br>
<b>Nuclear energy-thermal energy-Skinetic energy in steam-kinetic energy in turbine-electrical energy</b>
<br><br>
The power generation using solar photovoltaic cell involves least number of steps of energy conversion. <br>
It involves only two steps of energy conversion.<br>
Energy in sunlight?electric energy<br>
<br>
<br>

</div>









<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
