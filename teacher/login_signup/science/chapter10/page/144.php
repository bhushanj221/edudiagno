

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
  <title>page 144</title>
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
    <a href="../../chapter10.php">return to chapter</a>
    
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
    
<b>INTERESTING FACTS ABOUT SPACE</b>
<br><br>
1. Neutron stars can spin at a rate of 600 rotations per second
Neutron stars are one of the possible evolutionary end-points of high mass stars. They're born in a core-collapse supernova star explosion and subsequently rotate extremely rapidly as a consequence of their physics. Neutron stars can rotate up to 60 times per second after born. Under special circumstances, this rate can increase to more than 600 times per second.
<br><br>
2. Space is completely silent
Sound waves need a medium to travel through. Since there is no atmosphere in the vacuum of space, the realm between stars will always be eerily silent.
That said, worlds with atmospheres and air pressure do allow sound to travel, hence why there's plenty of noise on Earth and likely other planets as well.
<br><br> 
3. There is an uncountable number of stars in the known universe
We basically have no idea how many stars there are in the universe. Right now we use our estimate of how many stars there are in our own galaxy, the Milky Way. We then multiply that number by the best guesstimate of the number of galaxies in the universe. After all that math, NASA can only confidently say that say there all zillions of uncountable stars. A zillion is any uncountable amount.
An Australian National University study put their estimate at 70 sextillion. Put another way, that's 70,000 million million million.
<br><br>
4. The Apollo astronauts' footprints on the moon will probably stay there for at least 100 million years
Since the moon doesn't have an atmosphere, there's no wind or water to erode or wash away the Apollo astronauts' mark on the moon. That means their footprints, roverprints, spaceship prints, and discarded materials will stay preserved on the moon for a very long time.
They won't stay on there forever, though. The moon still a dynamic environment. It's actually being constantly bombarded with "micrometeorites," which means that erosion is still happening on the moon, just very slowly.
<br><br>
5. 99 percent of our solar system's mass is the sun Our star, the sun, is so dense that it accounts for a whopping 99 percent of the mass of our entire solar system. That's what allows it to dominate all of the planets gravitationally. 
Technically, our sun is a "G-type main-sequence star" which means that every second, it fuses approximately 600 million tons of hydrogen to helium. It also converts about 4 million tons of matter to energy as a by product.
When the sun dies, it will become a red giant and envelop the Earth and everything on it. But don't worry: That won't happen for another 5 billion years.
<br><br>
6. More energy from the sun hits Earth every hour than the planet uses in a year 
The use of solar energy has increased at a rate of 20 percent each year for the past 15 years. According to Yale Environment 360, the world added 30 percent more solar energy capacity in 2017, meaning that 98.9 gigawatts of solar energy was produced that year. 
Despite seemingly large number, this amount of energy only accounts for 0.7 percent of the world's annual electricity usage.
<br><br>
7. If two pieces of the same type of metal touch in space, they will bond and be permanently stuck together 
This amazing effect is called cold welding. It happens because the atoms of the individual pieces of metal have no way of knowing that they are different pieces of metal, so the lumps join together.
This wouldn't happen on Earth because there is air and water separating the pieces. The effect has a lot of implication for spacecraft construction and the future of metal-based construction in vacuums.
<br><br>
8. The largest asteroid in our solar system is a mammoth piece of space rock named Ceres
The asteroid — which is sometimes known as a dwarf planet — is almost 600 miles in diameter. It's by far the largest in the Asteroid Belt between Mars and Jupiter and accounts for a whole third of the belt's mass. Ceres' surface area is approximately equal to the land area of India or Argentina.
The uncrewed spacecraft Dawn just finished up its mission orbiting Ceres and helping us totally transform our understanding of the world.
Source: NASA
<br><br>
9. One day on Venus is longer than one year on Earth
<br><br>
IMAGE: AFP / GETTY IMAGES
Venus has an extremely slow axis rotation that takes about 243 Earth days to complete one full cycle. Funny enough, it takes Venus even less time in Earth days in order to complete one revolution around the sun — 226 to be exact.
Furthermore, the sun rises every 117 Earth days, which means that the sun will rise only two times during each year, which is also all technically in the same day. Since Venus also rotates clockwise, the sun will rise in the west and set in the east.
<br><br>
10. Jupiter's Red Spot is shrinking
Jupiter's famous Red Spot has been shrinking over the past few decades. This spot on the planet is  a giant spinning storm that used to be able to fit about three Earths. Now, according to only one Earth can fit inside the spot.
Interestingly enough, as the storm is shrinking in width, it's actually growing taller in length. As of 2018, scientists are still stumped as to why this phenomenon is occurring in the first place, but some theorize that it may have to do with jet streams on Jupiter that have either changed direction or location.
<br><br>
11. One of Saturn's moons has a distinct two-tone coloration 
Iapetus, one of Saturn's 62 moons, is actually a pretty unique celestial object. This moon has a very distinct two-tone coloration, with one side be much darker than the other. 
As of 2018, this strange occurrence isn't present on any other moons in the Solar System. Iapetus' color has to do with its position in relation to the rest of Saturn's moons. It turns out that Iapetus is way outside of Saturn's rings, and because of this, it gets hit with a lot of space debris from objects that might be passing through its orbit, explaining the dark areas, according to Forbes.
Furthermore, another moon Phoebe, which is completely dark and farther out than Iapetus, revolves clockwise around Saturn and "emits a steady stream of particles." Iapetus revolves counterclockwise, meaning that only one side of Iapetus gets hit with the particles coming off of Phoebe when they revolve past each other. This explains why Iapetus isn't fully dark, but only partially.
<br><br> 
12. The position of the North Star will change over time 
Navigation will be weird when Polaris stops being the North Star in about 13,000 years. In case you didn't know, Earth's axis goes through a motion called "precession" which means that the planet's axis will change, and trace out the shape of a cone—even if it's slightly.
When this occurs, it takes around 26,000 years for the axis to trace out a complete cone shape. To add to this, Polaris, the Earth's current "North Star" will eventually begin to shift positions as the Earth undergoes precession. 
In 3,000 B.C., it's believed that the North Star was the star Thuban, otherwise known as Alpha Draconis. In about 13,000 years, the star Vega will be the new North Star — but in 26,000 years, Polaris will return in its original position as the Earth continues to go through precession.



  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 144    )</h2>

    <div class="value-img">
      <img src="10/144.jpg" data-action="zoom" data-original="10/144.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
