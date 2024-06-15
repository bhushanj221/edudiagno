
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
  <title>page 12</title>
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
    <a href="../../chapter12.php">return to chapter</a>
    
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
    
In biology, a biological life cycle (or just life cycle or lifecycle when the biological context is clear) is a series of changes in form that an organism undergoes, returning to the starting state. "The concept is closely related to those of the life history, development and ontogeny, but differs from them in stressing renewal."[1][2] Transitions of form may involve growth, asexual reproduction, or sexual reproduction.
<br><br><br>
In some organisms, different "generations" of the species succeed each other during the life cycle. For plants and many algae, there are two multicellular stages, and the life cycle is referred to as alternation of generations. The term life history is often used, particularly for organisms such as the red algae which have three multicellular stages (or more), rather than two.[3]
<br><br>
Life cycles that include sexual reproduction involve alternating haploid (n) and diploid (2n) stages, i.e., a change of ploidy is involved. To return from a diploid stage to a haploid stage, meiosis must occur. In regard to changes of ploidy, there are 3 types of cycles:
<br><br>
haplontic life cycle — the haploid stage is multicellular and the diploid stage is a single cell, meiosis is "zygotic".
<br><br>
diplontic life cycle — the diploid stage is multicellular and haploid gametes are formed, meiosis is "gametic".
haplodiplontic life cycle (also referred to as diplohaplontic, diplobiontic, or dibiontic life cycle) — multicellular diploid and haploid stages occur, meiosis is "sporic".
<br><br>

The cycles differ in when mitosis (growth) occurs. Zygotic meiosis and gametic meiosis have one mitotic stage: mitosis occurs during the n phase in zygotic meiosis and during the 2n phase in gametic meiosis. Therefore, zygotic and gametic meiosis are collectively termed "haplobiontic" (single mitotic phase, not to be confused with haplontic). Sporic meiosis, on the other hand, has mitosis in two stages, both the diploid and haploid stages, termed "diplobiontic" (not to be confused with diplontic).


  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 12   )</h2>

    <div class="value-img">
      <img src="12/12.jpg" data-action="zoom" data-original="12/12.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>







<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
