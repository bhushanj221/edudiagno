
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
  <title>page 43</title>
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
    
A sacred grove or sacred woods are any grove of trees that are of special religious importance to a particular culture. Sacred groves feature in various cultures throughout the world. They were important features of the mythological landscape and cult practice of Celtic, Estonian, Baltic, Germanic, ancient Greek, Near Eastern, Roman, and Slavic polytheism, and continue to occur in locations such as India, Japan, and West Africa. Examples of sacred groves include the Greco-Roman temenos, various Germanic words for sacred groves, and the Celtic nemeton, which was largely but not exclusively associated with Druidic practice. During the Northern Crusades, there was a common practice of building churches on the sites of sacred groves. The Lakota and various other North American tribes consider particular forests or other natural landmarks to be sacred. Singular trees which a community deems to hold religious significance are known as sacred trees.
<br><br>
*In India, sacred groves are scattered all over the country, and do enjoy protection. Prior to 2002, these forest regions were not recognized under any of the existing laws. But in 2002 an amendment was brought in Wildlife Protection Act, 1972 to include Sacred Groves under the act. Some NGOs work with local villagers to protect such groves. Each grove is associated with a presiding deity, and the groves are referred to by different names in different parts of India. They were maintained by local communities with hunting and logging strictly prohibited within these patches. While most of these sacred deities are associated with local Hindu gods, sacred groves of Islamic and Buddhist origins are also known. Sacred groves occur in a variety of places – from scrub forests in the Thar Desert of Rajasthan maintained by the Bishnois, to rain forests in the Kerala Western Ghats. Himachal Pradesh in the North and Kerala in the South are specifically known for their large numbers of sacred groves. The Kodavas of Karnataka maintained over 1000 sacred groves in Kodagu alone.
<br><br>
Around 14,000 sacred groves have been reported from all over India, which act as reservoirs of rare fauna, and more often rare flora, amid rural and even urban settings. Experts believe that the total number of sacred groves could be as high as 100,000. Threats to the groves include urbanization, and over-exploitation of resources. While many of the groves are looked upon as abode of Hindu gods, in the recent past a number of them have been partially cleared for construction of shrines and temples.
<br><br>
Ritualistic dances and dramatizations based on the local deities that protect the groves are called Theyyam in Kerala and Nagmandalam, among other names, in Karnataka. There are sacred groves in Ernakulam region in a place named Mangatoor in Kerala. Sacred groves are being destroyed as a part of urbanization. The family "Nalukettil Puthenpurayil" still protects sacred groves.





  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 43   )</h2>

    <div class="value-img">
      <img src="14/43.jpg" data-action="zoom" data-original="14/43.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
