
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
  <title>page 29</title>
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
    
The female reproductive system is made up of the internal and external sex organs that function in reproduction of new offspring. In humans, the female reproductive system is immature at birth and develops to maturity at puberty to be able to produce gametes, and to carry a foetus to full term. The internal sex organs are the uterus, Fallopian tubes, and ovaries. The uterus or womb accommodates the embryo which develops into the foetus. The uterus also produces vaginal and uterine secretions which help the transit of sperm to the Fallopian tubes. The ovaries produce the ova (egg cells). The external sex organs are also known as the genitals and these are the organs of the vulva including the labia, clitoris, and vaginal opening. The vagina is connected to the uterus at the cervix.

<br><br>
At certain intervals, the ovaries release an ovum, which passes through the Fallopian tube into the uterus. If, in this transit, it meets with sperm, a single sperm (1-cell) can enter and merge with the egg or ovum (1-cell), fertilizing it into a zygote (1-cell).
<br><br>
Fertilization usually occurs in the Fallopian tubes and marks the beginning of embryogenesis. The zygote will then divide over enough generations of cells to form a blastocyst, which implants itself in the wall of the uterus. This begins the period of gestation and the embryo will continue to develop until full-term. When the foetus has developed enough to survive outside the uterus, the cervix dilates and contractions of the uterus propel the newborn through the birth canal (the vagina).
<br><br>
The corresponding equivalent among males is the male reproductive system.    
  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 29   )</h2>

    <div class="value-img">
      <img src="13/29.jpg" data-action="zoom" data-original="13/29.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
