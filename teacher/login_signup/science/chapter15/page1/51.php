
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
  <title>page 51</title>
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
    
In nuclear physics and nuclear chemistry, nuclear fission is a nuclear reaction or a radioactive decay process in which the nucleus of an atom splits into two or more smaller, lighter nuclei. The fission process often produces gamma photons, and releases a very large amount of energy even by the energetic standards of radioactive decay.
<br><br>
Nuclear fission of heavy elements was discovered on December 17, 1938 by German Otto Hahn and his assistant Fritz Strassmann at the suggestion of Austrian-Swedish physicist Lise Meitner who explained it theoretically in January 1939 along with her nephew Otto Robert Frisch. Frisch named the process by analogy with biological fission of living cells. For heavy nuclides, it is an exothermic reaction which can release large amounts of energy both as electromagnetic radiation and as kinetic energy of the fragments (heating the bulk material where fission takes place). Like nuclear fusion, in order for fission to produce energy, the total binding energy of the resulting elements must have a greater binding energy than that of the starting element.
<br><br>
Fission is a form of nuclear transmutation because the resulting fragments are not the same element as the original atom. The two (or more) nuclei produced are most often of comparable but slightly different sizes, typically with a mass ratio of products of about 3 to 2, for common fissile isotopes.[1][2] Most fissions are binary fissions (producing two charged fragments), but occasionally (2 to 4 times per 1000 events), three positively charged fragments are produced, in a ternary fission. The smallest of these fragments in ternary processes ranges in size from a proton to an argon nucleus.
<br><br>
Apart from fission induced by a neutron, harnessed and exploited by humans, a natural form of spontaneous radioactive decay (not requiring a neutron) is also referred to as fission, and occurs especially in very high-mass-number isotopes. Spontaneous fission was discovered in 1940 by Flyorov, Petrzhak, and Kurchatov[3] in Moscow, in an experiment intended to confirm that, without bombardment by neutrons, the fission rate of uranium was negligible, as predicted by Niels Bohr; it was not negligible.[3]
<br><br>
The unpredictable composition of the products (which vary in a broad probabilistic and somewhat chaotic manner) distinguishes fission from purely quantum tunneling processes such as proton emission, alpha decay, and cluster decay, which give the same products each time. Nuclear fission produces energy for nuclear power and drives the explosion of nuclear weapons. Both uses are possible because certain substances called nuclear fuels undergo fission when struck by fission neutrons, and in turn emit neutrons when they break apart. This makes a self-sustaining nuclear chain reaction possible, releasing energy at a controlled rate in a nuclear reactor or at a very rapid, uncontrolled rate in a nuclear weapon.
<br><br>
The amount of free energy contained in nuclear fuel is millions of times the amount of free energy contained in a similar mass of chemical fuel such as gasoline, making nuclear fission a very dense source of energy. The products of nuclear fission, however, are on average far more radioactive than the heavy elements which are normally fissioned as fuel, and remain so for significant amounts of time, giving rise to a nuclear waste problem. Concerns over nuclear waste accumulation and the destructive potential of nuclear weapons are a counterbalance to the peaceful desire to use fission as an energy source.



  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 51  )</h2>

    <div class="value-img">
      <img src="15/51.jpg" data-action="zoom" data-original="15/51.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
