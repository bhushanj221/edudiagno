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
  <title>page 127</title>
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
    <a href="../../chapter9.php">return to chapter</a>
    
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
     <h2 style="  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;">Some Important Carbon Compounds - Ethanol and Ethanoic Acid</h2>
  <p >
    
Some Important Carbon Compounds - Ethanol and Ethanoic Acid
<br><br>
Ethanol and Ethanoic Acid 
<br><br>
The two important carbon compounds are Ethanol and Ethanoic acid
<br><br>
 Alcohol:
<br><br>
Molecules in which hydroxyl group attached to alkyl groups are the alcohols.
<br><br>
The formula of alcohols can be written by replacing hydrogen (“H”) from alkanes with hydroxy group (“OH”).
<br><br>
R – H + OH → R – OH
<br><br>
Alcohols can be named by replacing “e” from alkanes with “ol”.
<br><br>
Alkane + ol → Alkanol
<br><br>
Some of the important alcohols are:
<br><br>
Name of the alcohol Chemical formula of alcohol
Methanol  CH3-OH
Ethanol CH3-CH2-OH
Propanol  CH3-CH2-CH2-OH
Butanol CH3-CH2-CH2-CH2-OH
Pentanol  CH3-CH2-CH2-CH2-CH2-OH
 <br><br>
Ethanol:
<br><br>
Ethanol is considered as one of the important organic compound.
<br><br>
The molecular formula of ethanol is C2H5OH. It is also called as ethyl alcohol.
<br><br>
Preparation of Ethanol:
<br><br>
Ethanol can be manufactured through fermentation of molasses.
<br><br>
The process involves slow decomposition of a complex organic compound like molasses into simpler compounds including ethanol, by means of microorganisms like yeast.

 <br><br>

Physical Properties of ethyl alcohol:
<br><br>
It is a colourless inflammable and sweet smelling liquid
Is miscible with water
It is a good solvent that dissolves most known substances.
Ethanol can cause drunkenness on consumption, even in small quantities of dilute ethanol.
Extremely poisonous when consumed in pure form (absolute alcohol)
 
<br><br>
Chemical properties of Ethanol:
<br><br>
It involves in different chemical reactions due to the presence of hydroxy group (–OH).
<br><br>
Reaction of ethanol with sodium:
<br><br>
Ethanol readily reacts with sodium to form sodium ethoxide and hydrogen gas.
<br><br>
2Na + 2CH3CH2OH → 2CH3CH2O–Na+ + H2
<br><br>
Reaction with concentrated sulphuric acid:
<br><br>
Ethanol on heating to a temperature of 443 K with excess concentrated sulphuric acid, gives ethene.
<br><br>
CH3–CH2–OH        Hot  Conc. H₂ SO₄ →         CH2=CH2+H2O
<br><br>
Oxidation:
<br><br>
Ethanol undergoes oxidation in presence of Potassium dichromate to form intiallyethanal and finally formsfurtheroxidised ethanoic acid.

<br><br>

CH3–CH2–OH + K2Cr2O7 → CH3–CHO → CH3–COOH
<br><br>

Esterification:
<br><br>

Reaction of ethanol with carboxylic acids is called esterification reaction. The product formed in this reaction is an ester along with water.
<br><br>

Esters are sweet smelling substances which are used in making perfumes and as flavoring agents.
<br><br>

Example:
<br><br>

CH3–CH2–OH + CH3–COOH → CH3–COOC2H5 + H2O

 <br><br>


Uses of Ethanol:
<br><br>

Ethanol is used in pharmaceutical preparations like tincture of iodine, cough syrups, and tonics.
Ethanol is used in the manufacture of organic compounds like acetaldehyde, acetic acid and chloroform.
Ethanol is used as a preservative for biological specimen.
 <br><br>


Acetic acid:
<br><br>

The molecular formula of acetic acid is CH3COOH.
<br><br>

5-8% solution of acetic acid in water is called vinegar.
<br><br>

Preparation of Ethanoic acid:
<br><br>
Ethanoic acid is prepared by the oxidation of ethanol in the presence of oxidising agents like Alkaline KMnO4  or acidified K2Cr2O7.
<br><br>

CH3–CH2–OH    Alkaline   KMnO4   or Acidified   K 2 Cr 2 O 7 →          CH3–COOH

<br><br>

Physical Properties of Ethanoic acid:
<br><br>
Ethanoic acid is a colourless corrosive liquid with a pungent odour.
The melting point of pure ethanoic acid is 17 0
Ethanoic acid freezes during the winter and is known as glacial acetic acid.
Miscible with water, ether and ethyl alcohol.
 
<br><br>

Chemical Properties of Ethanoic acid:
<br><br>

Reaction with sodium carbonate:
<br><br>

Ethanoic acid reacts with sodium carbonate to give sodium acetate ,carbon dioxide and water
<br><br>

2CH3–COOH + Na2CO3 → 2CH3COO–Na+ + CO2 + H2O
<br><br>

Reaction with sodium hydrogen carbonate:
<br><br>

Ethanoic acid reacts with sodium hydrogen carbonate to give sodium acetate ,carbon dioxide and water.
<br><br>

CH3–COOH + NaHCO3 → CH3COO–Na+ + CO2 + H2O
<br><br>

Reaction with base:
<br><br>

Ethanoic acid reacts with bases to give salt and water.
<br><br>

Example:
<br><br>

Reaction of ethanoic acid with sodium hydroxide to form sodium acetate and water.
<br><br>

CH3–COOH + NaOH → CH3COONa + H2O
<br><br>

Reaction with sodium hydrogen carbonate, sodiumhydrogen carbonate and with bases are the acidic properties of ethanoic acid.

<br><br>
 

Saponification:
<br><br>

Esters react in the presence of an acid or a base to give back the alcohol and carboxylic acid. This is called saponification reaction. This is reverse reaction of esterification reaction.
<br><br>

CH3COOC2H5       Sodium Hydroxide →      CH3–COOH + CH3–CH2–OH

<br><br>
 

Reaction with active metals:
<br><br>

Ethanoic acid reacts with active metals to form metal ethanoate and hydrogen gas.
<br><br>
Example:
<br><br>
2CH3COOH + 2Na → 2CH3COONa + H2
<br><br>
2CH3COOH + Ca → (CH3COO)2Ca + H2
<br><br>
Reduction:
<br><br>
Ethanoic acid is reduced to ethanol in presence of reducing reagents like LiAlH4 (Lithium aluminum hydrate), NaBH4 (Sodium borohydrate).
<br><br>
CH3COOH + LiAlH4 → CH3–OH
 <br><br>
Uses of Ethanoic acid:
<br><br>
Preserve food items
Manufacture of artificial fibres
Ethanoic acid is used for coagulating latex to prepare rubber from it.
<br><br>
It is used as a reagent in the laboratory.
<br><br>
It is used in the preparation of perfumes.



  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 127    )</h2>

    <div class="value-img">
      <img src="9/127.jpg" data-action="zoom" data-original="9/127.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
