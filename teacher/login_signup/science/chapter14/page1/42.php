
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
  <title>page 42</title>
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
    <a href="../../chapter14.php">return to chapter</a>
    
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
Considering the degree of threat to biodiversity around the world and the vital importance of biodiversity for living beings of which mankind is a major part, there is an urgent need to conserve biodiversity in the world. Further, we should be concerned about saving biodiversity because of the benefits it provides us – biological resources and ecosystem services, and the social and aesthetic benefits.
<br><br>
There are two main methods for the conservation of biodiversity.
<br><br>
In-situ Conservation
In-situ or on-site conservation refers to the conservation of species within their natural habitats. This is the most viable way of biodiversity conservation. It is the conservation of genetic resources through their maintenance within the environment in which they occur.
<br><br>
Examples − National Parks, Wild Life sanctuaries, Biosphere Reserves, Gene Sanctuaries
<br><br>
Ex-situ Conservation
Ex-situ conservation means the conservation of components of biological diversity outside their natural habitats. In this method, threatened or endangered species of animals and plants are taken out of their natural habitat and placed in special settings where they can be protected and provided with natural growth.
<br><br>
In ex-situ conservation methods, the plants and animals taken away from their habitats are taken care of in an artificially created environment.
<br><br>
Examples − Captive Breeding, Gene Banks, Seed Banks, Zoos, Botanical gardens, Aquaria, In vitro fertilization, Cryopreservation, Tissue Culture.
<br><br>
National Biodiversity Act
National Biodiversity Act in India draws from the objectives of Convention of Biodiversity (CBD). It aims at conservation of biodiversity, sustainable use and equitable sharing of the benefits of such use.
<br><br>
To achieve its objectives, it has put in place a three-tier institutional structure such as −
<br><br>
National Biodiversity Authority based in Chennai
State Biodiversity Board (SBBs) in every state
Biodiversity Management Committee (BMCs) at Panchayat/Municipality levels
The Ministry of Environment and Forestry (MoEF) is the nodal agency.
<br><br>
Main Provisions of the Act
Prohibition on transfer of Indian genetic material outside the country without specific approval of the Indian Government.
<br><br>
Prohibition of anyone claiming an IPR such as a patent over biodiversity or related knowledge without the permission of Indian Government.
<br><br>
Regulation of collection and use of biodiversity by Indian national, while exempting local communities from such restrictions.
<br><br>
Measures from sharing of benefits from the use of biodiversity including transfer of technology, monitory returns, joint research and development, joint IPR ownership, etc.
<br><br>
Measures to conserve sustainable use of biological resources including habitat and species protection projects, integration of biodiversity into the plans and policies of the various departments and sectors.
<br><br>
Provisions for local communities to have a say in the use of their resources and knowledge and to charge fees for this.
<br><br>
Protection of indigenous or traditional laws such as registration of such knowledge.
<br><br>
Regulation of the use of the genetically modified organisms.
<br><br>Setting up of national, state and local biodiversity funds to be used to support conservation and benefit sharing.
<br><br>
Setting up of Biodiversity Management Committees (BMC) at local village levels. State Biodiversity Boards at state level and National Biodiversity Authority.



  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 42   )</h2>

    <div class="value-img">
      <img src="14/42.jpg" data-action="zoom" data-original="14/42.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
