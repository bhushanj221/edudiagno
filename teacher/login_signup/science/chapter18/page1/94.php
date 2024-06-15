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
  <title>page 94</title>
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
    <a href="../../chapter18.php">return to chapter</a>
    
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
  <p >Interferons made and released by host cells in response to the presence of several viruses. In a typical scenario, a virus-infected cell will release interferons causing nearby cells to heighten their anti-viral defenses.
<br>
IFNs belong to the large class of proteins known as cytokines, molecules used for communication between cells to trigger the protective defenses of the immune system that help eradicate pathogens. Interferons are named for their ability to "interfere" with viral replication[3] by protecting cells from virus infections. IFNs also have various other functions: they activate immune cells, such as natural killer cells and macrophages; they increase host defenses by up-regulating antigen presentation by virtue of increasing the expression of major histocompatibility complex (MHC) antigens. Certain symptoms of infections, such as fever, muscle pain and "flu-like symptoms", are also caused by the production of IFNs and other cytokines.

<br>
Gene therapy (also called human gene transfer) is a medical field which focuses on the utilization of the therapeutic delivery of nucleic acids into a patient's cells as a drug to treat disease.[1][2] The first attempt at modifying human DNA was performed in 1980 by Martin Cline, but the first successful nuclear gene transfer in humans, approved by the National Institutes of Health, was performed in May 1989.[3] The first therapeutic use of gene transfer as well as the first direct insertion of human DNA into the nuclear genome was performed by French Anderson in a trial starting in September 1990. It is thought to be able to cure many genetic disorders or treat them over time.

<br>
Cloning is the process of producing individuals with identical or virtually identical DNA, either naturally or artificially. In nature, many organisms produce clones through asexual reproduction. Cloning in biotechnology refers to the process of creating clones of organisms or copies of cells or DNA fragments (molecular cloning).
<br>
The term clone, coined by Herbert J. Webber, is derived from the Ancient Greek word κλών klōn, "twig", referring to the process whereby a new plant can be created from a twig. In botany, the term lusus was traditionally used.[1] In horticulture, the spelling clon was used until the twentieth century; the final e came into use to indicate the vowel is a "long o" instead of a "short o".[2][3] Since the term entered the popular lexicon in a more general context, the spelling clone has been used exclusively.</p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 94  )</h2>

    <div class="value-img">
      <img src="18/94.jpg" data-action="zoom" data-original="18/94.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
