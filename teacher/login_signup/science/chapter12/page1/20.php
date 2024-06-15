
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
  <title>page 20</title>
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
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;"></h1>
  <p >
    <b>Aim Of The Experiment</b><br>
<b>To study and demonstrate mitosis by preparing the mount of an onion root tip cells.</b><br>
<br>
<b>Theory Of The Experiment</b><br>
For entities to mature, grow, maintain tissues, repair and synthesize new cells, cell division is required. Cell division is of two types:
<br>
Mitosis<br>
Meiosis<br>
Mitosis<br>
In mitosis, the nucleus of the Eukaryotic cells divides into two, subsequently resulting in the splitting of the parent cells into two daughter cells. Hence, every cell division involves two chief stages:
<br>
Cytokinesis – Cytoplasm division<br>
Karyokinesis – Nucleus division<br>
Stages Of Mitosis<br>
The various stages of mitosis are:<br>

<b>1. Prophase</b><br>

The process of mitosis is initiated at this stage wherein coiling and thickening of the chromosomes occurs<br>
Shrinking and hence the disappearance of the nucleolus and nuclear membrane takes place<br>
The stage reaches its final state when a cluster of fibres organizes to form the spindle fibres.<br>
<b>2. Metaphase</b><br>

Chromosomes turn thick in this phase. The two chromatids from each of the chromosomes appear distinct<br>
Each of the chromosomes is fastened to the spindle fibres located on its controller<br>
Chromosomes align at the centreline of the cell<br><br>
<b>3. Anaphase</b>
Each of the chromatid pair detaches from the centromere and approaches the other end of the cell through the spindle fibre<br>
At this stage, compressing of the cell membrane at the centre takes place<br><br>
<b>4. Telophase</b><br>
Chromatids have reached the other end of the cell<br>
The disappearance of the spindles<br>
Chromatin fibres are formed as a result of uncoiling of daughter chromosomes<br>
The appearance of two daughter nuclei at the opposing ends due to the reformation of the nucleolus and nuclear membrane<br>
At this phase, splitting of the cell or cytokinesis may also occur.<br>
Post mitosis, the next stage is referred to as interphase which is part of the cell cycle that is non-dividing and between two consecutive cell divisions. A cell spends most of its life in the interphase. It comprises the G1, S and G2 stages.
<br><br>
<b>Why is onion root tip used to demonstrate mitosis in this experiment?</b>
It is because of the meristematic cells that are situated in the tip of the roots that render the most desirable and suitable raw material to study the different stages of mitosis. Onion is a monocot plant. Monocotyledonous plants possess large chromosomes that are clearly visible. Hence, their root tips are used. The period of time taken for mitosis varies as it is dependent on the cell type and type of species.
<br>
<b>Is mitosis influenced by any factor? If yes, name them.</b><br>
Yes, mitosis, the cell cycle is affected by various factors such as time and temperature.<br>

Materials Required<br>
Compound microscope<br>
Acetocarmine stain<br>
Water<br>
Burner<br>
N/10 Hydrochloric acid<br>
Filter paper<br>
Coverslip<br>
Aceto alcohol (Glacial acetic acid and Ethanol in the ratio 1:3)<br>
Glass Slide<br>
Onion root peel<br>
Forceps<br>
Blade<br>
Watch glass<br>
Dropper<br>
Needle<br>
Vial<br>
<b>Procedure Of The Experiment</b>
<br>

Place an onion on a tile<br>
With the help of a sharp blade, carefully snip the dry roots of the onion<br>
Place the bulbs in a beaker containing water to grow the root tips<br>
It may take around 4 to 6 days for the new roots to grow and appear<br>
Trim around 3 cm of the newly grown roots and place them in a watch glass<br>
With the help of forceps, shift it to a vial holding freshly prepared aceto-alcohol i.e., a mixture of glacial acetic acid and ethanol in the ratio 1:3.<br>
Allow the root tips to remain the vial for one complete day<br>
With the help of forceps, pick one root and set in on a new glass slide<br>
With the help of a dropper, allow one drop of N/10 HCl to come in contact with the tip of the root. Additionally, add around 2 to 3 drops of the acetocarmine stain.<br>
Heat is lightly on the burner in such a way that the stain does not dry up.<br>
Excessive stain can be carefully treated using filter paper<br>
The more stained part of the root tip can be trimmed with the help of a blade.<br>
Discard the lesser stained part while retaining the more stained section.<br>
Add a droplet of water to it<br>
With the help of a needle, a coverslip can be mounted on it<br>
Gently tap the coverslip with an unsharpened end of a needle in order for the meristematic tissue of the root tip present under the coverslip to be squashed properly and to be straightened out as a fine cell layer<br>
The onion root tip cells’ slide is now prepared and ready to be examined for different stages of mitosis<br>
Observe and study mitosis by placing the slide under the compound microscope. Focus as desired to obtain a distinct and clear image.<br>
<br> <b>Observations and Conclusion</b><br>
The slide containing the stained root tip cells is placed on the stage of the compound microscope, changes taking place are noted and sketched.<br>
The different phases of mitosis, such as prophase, metaphase, anaphase and telophase can be observed

  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 20   )</h2>

    <div class="value-img">
      <img src="12/20.jpg" data-action="zoom" data-original="12/20.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
