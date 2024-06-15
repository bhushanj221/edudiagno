
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
  <title>page 32</title>
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
    
Reproductive Technology encompasses all current and anticipated uses of technology in human and animal reproduction, including assisted reproductive technology, contraception and others. It is also termed Assisted Reproductive Technology, where it entails an array of appliances and procedures that enable the realization of safe, improved and healthier reproduction. While this is not true of all men and women, for an array of married couples, the ability to have children is vital. But through the technology, infertile couples have been provided with options that would allow them to conceive children.

<br><br>
Assisted reproductive technology=Assisted reproductive technology (ART) is the use of reproductive technology to treat low fertility or infertility. The natural method of reproduction has become only one of many new techniques used today. There are millions of couples that do not have the ability to reproduce on their own because of infertility and therefore, must resort to these new techniques. The main causes of infertility are that of hormonal malfunctions and anatomical abnormalities. ART is currently the only form of l uterus, for example, for the time being can only conceive through surrogacy methods).Examples of ART include in vitro fertilization and its possible expansions, including:
<br><br>
Prognostics
Reproductive technology can inform family planning by providing individual prognoses regarding the likelihood of pregnancy. It facilitates the monitoring of ovarian reserve, follicular dynamics and associated biomarkers in females, and semen analysis in males.
<br><br>
Contraception
Contraception is a form of reproductive technology that enables people to control their fertility. This is inhady with reproduction, which is the ability of a species to perpetuate and in the human species it is looked upon as a right in today's society. Males and females alike feel pressure that in order to be fully male or fully female they must procreate.
  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 32   )</h2>

    <div class="value-img">
      <img src="13/32.jpg" data-action="zoom" data-original="3/32.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
