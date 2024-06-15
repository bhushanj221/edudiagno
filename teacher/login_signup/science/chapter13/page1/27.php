
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
  <title>page 27</title>
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
    <a href="../../chapter13.php">return to chapter</a>
    
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
    
Double fertilization is a complex fertilization mechanism of flowering plants (angiosperms). This process involves the joining of a female gametophyte (megagametophyte, also called the embryo sac) with two male gametes (sperm). It begins when a pollen grain adheres to the stigma of the carpel, the female reproductive structure of a flower. The pollen grain then takes in moisture and begins to germinate, forming a pollen tube that extends down toward the ovary through style. The tip of the pollen tube then enters the ovary and penetrates through the micropyle opening in the ovule. The pollen tube proceeds to release the two sperm in the megagametophyte.
<br><br>
The cells of an unfertilized ovule are 8 in number and arranged in the form of 3+2+3 (from top to bottom) i.e. 3 antipodal cells, 2 polar central cells, 2 synergids & 1 egg cell. One sperm fertilizes the egg cell and the other sperm combines with the two polar nuclei of the large central cell of the megagametophyte. The haploid sperm and haploid egg combine to form a diploid zygote, the process being called syngamy, while the other sperm and the two haploid polar nuclei of the large central cell of the megagametophyte form a triploid nucleus (triple fusion). Some plants may form polyploid nuclei. The large cell of the gametophyte will then develop into the endosperm, a nutrient-rich tissue which provides nourishment to the developing embryo. The ovary, surrounding the ovules, develops into the fruit, which protects the seeds and may function to disperse them.[1]
The two central cell maternal nuclei (polar nuclei) that contribute to the endosperm, arise by mitosis from the same single meiotic product that gave rise to the egg. The maternal contribution to the genetic constitution of the triploid endosperm is double that of the embryo.
<br><br>
In a study conducted in 2008 of the plant Arabidopsis thaliana, the migration of male nuclei inside the female gamete, in fusion with the female nuclei, has been documented for the first time using in vivo imaging. Some of the genes involved in the migration and fusion process have also been determined.[2]
<br><br>
Evidence of double fertilization in Gnetales, which are non-flowering seed plants, has been reported.[3]



  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 27   )</h2>

    <div class="value-img">
      <img src="13/27.jpg" data-action="zoom" data-original="13/27.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
