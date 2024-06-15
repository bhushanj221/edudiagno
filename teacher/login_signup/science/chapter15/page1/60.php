
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
  <title>page 60</title>
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
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;"></h1>
  <p >
    
  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 60  )</h2>

    <div class="value-img">
      <img src="15/60.jpg" data-action="zoom" data-original="15/60s.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>

<!-- question and answers -->
<div class="container">
br><br><br>
	<h1><p style="color: blue;"><b>  5. Towards Green Energy</b></p></h1><br><br>
<b>Question 5:</b><br>
Solve the following crossword puzzle.<br>
a. Maximum energy generation in india is done using..... energy.<br>
b. ...... energy is a renewable source of energy<br>
c. Solar energy can be called.... energy.<br>
d .... energy of wind is used in wind mills.<br>
e. ..... energy of water in dams is used for generation of electricity.<br>
<br>
<img src="image/quesation 5 ques dig.png" data-action="zoom" data-original="image/quesation 5 ques dig.png" alt="journey_start_thumbnail" />
    
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>

<img src="image/question 5 ans dig.png" data-action="zoom" data-original="image/question 5 ans dig.png" alt="journey_start_thumbnail" />
    
<br><br><br>


<b>Question 6:</b><br>
Explain the difference.<br>
a. Conventional and Non-conventional Sources of energy.<br>

b Thermal electricity generation and solar thermal electricity generation.<br>

<p style="color:green;"><b>ANSWER:</b><p><br><br>
a. 

<br>
<br>

<table style="width:50%">
  <tr>
    <th>Conventional sources of energy</th>
    <th>Non-conventional sources of energy</th> 
     
   
  </tr>
  <tr>
    <td>They are exhaustible.</td>
    <td>They are inexhaustible</td>
     
    
  </tr>
  
  <tr>
    <td>They cause pollution.</td>
    <td>They do not cause pollution.</td>
     
    
  </tr>
  
  <tr>
    <td>eg: coal, petroleum, natural</td>
    <td>eg: wind energy, solar energy</td>
     
    
  </tr>

</table>
</body>
</html>
<br><br>

b. 
<br>
<br>

<table style="width:50%">
  <tr>
    <th>Thermal electricity generation</th>
    <th>Solar thermal electricity generation</th> 
     
   
  </tr>
  <tr>
    <td>It uses non-renewable source of energy for electricity generation such as fossil fuels, natural gas or nuclear fuels.</td>
    <td>It uses renewable source of energy i.e. solar energy for electricity generation.</td>
     
    
  </tr>
  
  <tr>
    <td>This method of electricity generation is not environment friendly. It causes air pollution.</td>
    <td>This is environment friendly method of electricity generation. It does not cause air pollution.</td>
     
    
  </tr>
  
  <tr>
    <td>This method requires maintenance.</td>
    <td>This method does not require maintenance.</td>
     
    
  </tr>

</table>
</body>
</html>
<br><br>
<br>
<b>Question 7:</b><br>
What is meant by green energy? Which energy sources can be called as green energy sources and why? Give examples.
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
Green energy is that energy which does not pollute the environment and is renewable in nature. The energy sources such as sunlight, wind, rain, tides, etc. can be called as green energy. This is because these are readily available on Earth, can be naturally replenished and do not even harm the environment much.<br>
<br>

<br>

<b>Question 8:</b><br>
Explain the following sentences.<br>
a. Energy obtained from fossil fuels is not green energy.<br>
b. Saving energy is the need of the hour.<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
a. <br>
Fossil fuels are non renewable sources of energy. These are getting depleted rapidly. Also, the usage of the fossil fuels for energy generation adversely impacts the environment and living beings. Burning of fossil fuels like coal, natural gas etc. leads to emission of gases and soot particles in the environment which pollute the air and cause many respiratory diseases. For example, incomplete combustion of some fossil fuels leads to formation carbon monoxide which affects the health of living beings. Also, burning of fossil fuels releases carbon dioxide in the environment which is the main greenhouse gas. Thus, it can be said that energy obtained from fossil fuels is not green energy.<br>
<br>
b.<br>
 Yes, certainly energy conservation has become the need of the hour. We know our day to day life runs on electricity. Be it fans, lights, televisions, escalators, vehicles on roads or water supply to our homes, each and everything requires energy- "The Electrical Energy" for its working. Even the technology advancement has made it possible to supply electricity to most remote places. Thus, to produce such huge amount of electrical energy, we are getting more and more dependent on non-renewable sources of energy such as coal, petroleum, etc. It is observed that the rate at which these fuels are consumed is much greater than at which it is produced. So, if it continues like this, a day will come when we would get deprived of these sources of energy and thus will not even get the basic amenities of life. So, take a pledge to not waste energy wherever possible for the betterment of our and future generation.<br>
<br>
<br>
<b>Question 9:</b><br>
Answer the following questions.<br>
a. How can we get the required amount of energy by connecting solar panels?<br>
b. What are the advantages and limitations of solar energy?<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
a. <br>
Many identical solar cells connected together forms a solar panel. Now, many such solar panels are connected in series in a form of solar string to get required voltage. Also, many such identical solar strings are connected in parallel to get the required current. Hence, in this way we get the required amount of energy by connecting solar panels.<br>
<br>
b. <br>
Advantages of solar energy:<br>
<br>
Solar energy is green energy i.e. it is renewable and does not cause pollution.<br>
Solar panels for the generation of electricity requires less maintenance.<br>
With the help of solar energy, electricity is possible to be generated even in the most remote, inaccessible locations where electric power lines cannot be laid.<br>
<br>
Limitations of solar energy: 
<br>
Electricity generation based on solar energy is weather dependent and hence it is less reliable. In winters and in cloudy days, the production becomes less. <br>
The whole set-up of the panels requires lot of space to generate considerable amount of electricity. <br>
The initial cost of a solar panel is sufficiently high.<br>
<br><br><br>


<b>Question 10:</b><br>
Explain with diagram step-by-step energy conversion in<br>
a. Thermal power plant<br>
b. Nuclear Power Plant.<br>
c. Solar thermal power plant<br>
d. Hydroelectric power plant<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
a. Water is heated in a boiler. Using the thermal energy released due to burning of coal, steam of very high temperature and pressure<br>
is generated. The energy in the steam drives the turbine. Thus, the generator connected to the turbine rotates and electrical energy is produced.<br>
Chemical energy in coal?Thermal energy?Kinetic energy in steam?Kinetic energy in turbine?Electrical energy<br>
<br>
<img src="image/quesation 10 ans dig a.png" data-action="zoom" data-original="image/quesation 10 ans dig a.png" alt="journey_start_thumbnail" />
    
<br>
b. Nuclear power plants consist of nuclear reactors. These reactors use uranium rods as fuel and heat is generated by the process of nuclear fission. Neutrons smash into the nucleus of the uranium atoms, which roughly split into half and release energy in the form of heat. Carbon dioxide gas is pumped through the reactor to take the heat away. The hot gas then heats water to form steam. This steam drives the turbines of generators to produce electricity. Thus, the steps of energy conversion are:<br>
Nuclear energy?Thermal energy?Kinetic energy in steam?Kinetic energy in turbine?Electrical energy<br>
<img src="image/quesation 10 ans dig b.png" data-action="zoom" data-original="image/quesation 10 ans dig b.png" alt="journey_start_thumbnail" />
    
<br>






c. Following energy conversion takes place in the solar thermal power plant:<br>
<img src="image/quesation 10 ans dig c.png" data-action="zoom" data-original="image/quesation 10 ans dig c.png" alt="journey_start_thumbnail" />
    
<br>
<br>
Thermal energy in radiation?Kinetic energy in steam?Kinetic energy in turbine?Electrical energy<br>
<br>


d. In hydroelectric power plant, the potential energy in water stored in dam is converted into kinetic energy of water. Fast flowing water is brought from the dam to the turbine at the bottom of the dam. The kinetic energy of the flowing water drives the turbine. The turbine<br>
in turn drives the generator to generate electricity.<br>
Potential energy in water?Kinetic energy in flowing water?Kinetic energy in turbine?Electrical energy<br>
<br>

<img src="image/quesation 10 ans dig d.png" data-action="zoom" data-original="image/quesation 10 ans dig d.png" alt="journey_start_thumbnail" />
    
<br>
<img src="image/question 10 ans d dig.png" data-action="zoom" data-original="image/question 10 ans d dig.png" alt="journey_start_thumbnail" />
    
<br>
<br>




<b>Question 11:</b><br>
Give scientific reasons<br>
a. The construction of turbine is different for different types of power plants.<br>
b. It is absolutely necessary to control the fission reaction in nuclear power plants.<br>
c. Hydroelectric energy, solar energy and wind energy are called renewable energies.<br>
d. It is possible to produce energy from mW to MW using solar photovoltaic cells.<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
a. The construction of turbine is different for different types of power plants. This depends on the type of energy source used for driving the turbine. Like in thermal power plants, steam turbine is used whereas in hydro-power plant, water turbine is used.<br>
<br>
b. If fission reaction in nuclear power plants is not controlled, then enormous amount of heat released during this process will lead to explosion of the plant and cause fatal destruction to environment and mankind. Thus, it is absolutely necessary to control the fission reaction in nuclear power plants.<br>
<br>
c. Hydroelectric energy, solar energy and wind energy are called renewable energies because they are abundant in nature and can be regenerated or replenished again and again. These will never extinct even with their excessive use.<br>
<br>
d. Solar photovoltaic cells can be arranged according to the requirement of electric power. If power requirement is within mW, use of few number of photovoltaic cells will be able to achieve this much power. But, if the requirement of power is in MW, then large number of cells are grouped together to form a solar panel. Then, large number of solar panels are connected in series and parallel to get the required electric power. Thus, it is possible to produce energy from mW to MW using solar photovoltaic cells.<br>

<br>
<br>
<br>
<b>Question 12:</b><br>
Draw a schematic diagram of solar thermal electric energy generation.<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
The schematic diagram of solar thermal electric energy generation is as follows:
<img src="image/quesation 10 ans dig b.png" data-action="zoom" data-original="image/quesation 10 ans dig b.png" alt="journey_start_thumbnail" />
    
<br>

<img src="image/quesation 10 ans dig b.png" data-action="zoom" data-original="image/quesation 10 ans dig b.png" alt="journey_start_thumbnail" />
    
<br>
<br>
<br>
<br>

<b>Question 13:</b><br>
Give your opinion about whether hydro electric plants are environment friendly or not?
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
No waste products and harmful gases are released in water bodies and atmosphere when power is generated using hydroelectric power plants. Also, water is available in plenty on Earth and is renewable. Hence, there is no fear of this energy source dying out. Thus, it has no harmful effects on environment and hence is environment friendly.
<br>
<br>
<br>
<b>Question 14:</b><br>
Draw neat and labelled diagrams.<br>
a. Energy transformation in solar thermal electric energy generation.<br>
b. One solar panel produces a potential difference of 18 V and current of 3 A. Discribe how you can obtain a potential difference of 72 Volts and current of 9 A with a solar array using solar panels. You can use sign of a battery for a solar panel.<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
a.<br>
 
Thermal energy in radiation?Kinetic energy in steam?Kinetic energy in turbine?Electrical energy

<img src="image/question 14 ans a dig.png" data-action="zoom" data-original="image/question 14 ans a dig.png" alt="journey_start_thumbnail" />
    
<br>
<br>
b. We can obtain a potential difference of 72 V by forming a string of 5 solar panels in series. Now, to obtain current of 9 A, connect 3 such identical strings in parallel. The same has been shown below.
 <br>
 <img src="image/quesation 14 ans b dig.png" data-action="zoom" data-original="image/quesation 14 ans b dig.png" alt="journey_start_thumbnail" />
    
<br>
<br>
<br>

<b>Question 15:</b><br>
Write short note on<br>
Electrical energy generation and environment.<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
Today electrical energy generation has become the need of the hour. We cannot imagine our life without electricity. We have been able to generate electrical energy by various methods. In these methods, a generator is present which works on the principle of electromagnetic induction. A turbine is used to rotate this generator and this turbine itself is rotated with the help of an energy source. This energy source can be renewable source such as wind, sunlight, nuclear fuels etc. as well as non-renewable source such as coal, petrol, water etc. The energy sources such as wind, sunlight have proved to be green sources as they do not pollute the environment and are economical too. But the use of fossil fuel such as natural gas, coal, nuclear energy etc. as energy source has harmful effects on environment. The harmful radiations emitted from the nuclear waste has fatal effect on the environment and humans. Even the release of soot particles and various greenhouse gases such as carbon dioxide, carbon monoxide on burning or incomplete burning of fossil fuels affects the health of living beings as well as the environment adversely. Also, the release of these greenhouse gases is day by day increasing the danger of global warming. We need to as soon as possible find suitable environment friendly substitutes to fossil fuels to save our Earth.

<br>

</div>








<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
