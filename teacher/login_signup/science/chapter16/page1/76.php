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
  <title>page 76</title>
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
table, th, td {
    border-collapse: collapse;
    border: 1px solid black;

  text-align: center;
  padding: 9px;

}

h1 {text-align: center;}
</style>
</head>
<body>




 <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="#" onclick="window.history.go(-1)">back</a>
    <a href="../../chapter16.php">return to chapter</a>
    
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
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;"> </h1>
  <p >
    

  </p>





</div>




<!-- partial:index.partial.php -->

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 76   )</h2>

    <div class="value-img">
      <img src="16/76.jpg" data-action="zoom" data-original="16/76.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>

<!-- qustion an answers -->
<div class="container">
<div class="container">
<br><br><br>
	<h1><p style="color: blue;"><b> 6. Animal Classification </b></p></h1><br><br>

<br>
<b>Question 8:</b><br><br>
Complete the following chart.<br>
 <br>
<br>
<br>
<table style="width:50%">
  <tr>
    <td>Body cavity</td>
    <td>Germ Layer</td> 
    <td>Phylum</td>
   
  </tr>
  
   <tr>
    <td>Absent</td>
    <td>........</td> 
    <td>Porifera</td>
   
  </tr>
   <tr>
    <td>Absent</td>
    <td>Triploblastic</td> 
    <td>.........</td>
   
  </tr>
   <tr>
    <td>Pseudocoelom</td>
    <td>........</td> 
    <td>Aschelminthes</td>
   
  </tr>
   <tr>
    <td>Present</td>
    <td>........</td> 
    <td>Arthropoda</td>
   
  </tr>
</table>
</body>
</html>
<br>
<br>
<br>

<p style="color:green;"><b>ANSWER:</b></p><br><br>
<br>
<br>
<table style="width:50%">
  <tr>
    <td>Body cavity</td>
    <td><u>Germ Layer</u></td> 
    <td>Phylum</td>
   
  </tr>
  
   <tr>
    <td>Absent</td>
    <td><u>Absent</u></td> 
    <td>Porifera</td>
   
  </tr>
   <tr>
    <td>Absent</td>
    <td>Triploblastic</td> 
    <td><u>Platyhelminthes</u></td>
   
  </tr>
   <tr>
    <td>Pseudocoelom</td>
    <td><u>Triploblastic</u></td> 
    <td>Aschelminthes</td>
   
  </tr>
   <tr>
    <td>Present</td>
    <td><u>Triploblastic</u></td> 
    <td>Arthropoda</td>
   
  </tr>
</table>
</body>
</html>
<br><br><br>


<b>Question 9:</b><br><br>
Complete the following chart<br>
<br>
<br>
<table style="width:50%">
  <tr>
    <th>Type</th>
    <th>Character</th> 
    <th>Example</th>
   
  </tr>
  
   <tr>
    <td>Cyclostomata</td>
    <td></td> 
    <td></td>
   
  </tr>
  
   <tr>
    <td></td>
    <td>Gill respiration</td> 
    <td></td>
   
  </tr>
  
   <tr>
    <td>Amphibia</td>
    <td></td> 
    <td></td>
   
  </tr>
  
   <tr>
    <td></td>
    <td></td> 
    <td>Whale</td>
   
  </tr>
  
   <tr>
    <td></td>
    <td>Poikilotherms</td> 
    <td></td>
   
  </tr>
  
   
  </tr>
</table>
</body>
</html>
 <br><br><br>


<p style="color:green;"><b>ANSWER:</b></p><br><br><br>



<br>
<br>
<table style="width:50%">
  <tr>
    <th>Type</th>
    <th>Character</th> 
    <th>Example</th>
   
  </tr>
  
   <tr>
    <td>Cyclostomata</td>
    <td>Jaw less mouth</td> 
    <td>Myxine</td>
   
  </tr>
  
   <tr>
    <td>Pisces</td>
    <td>Gill respiration</td> 
    <td>Rohu</td>
   
  </tr>
  
   <tr>
    <td>Amphibia</td>
    <td>Aquatic and aerial respiration</td> 
    <td>Frog</td>
   
  </tr>
  
   <tr>
    <td>Mammalia</td>
    <td>Mammary glands</td> 
    <td>Whale</td>
   
  </tr>
  
   <tr>
    <td>Reptilia</td>
    <td>Poikilotherms</td> 
    <td>Lizard</td>
   
  </tr>
  
   
  </tr>
</table>
</body>
</html>

<br><br><br>




<b>Question 10:</b><br><br><br>
Sketch, labell and classify<br>
<br>
Hydra, Jellyfish, Planaria, Round worm, Butterfly, Earthworm, Octopus, Star fish, Shark, Frog, Wall lizard, Pigeon.
 
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
Classification: <br>
<br>
1. Kingdom- Animalia<br>
Phylum- Arthropda<br>
Genus- Rhopalocera<br>
<br>
<img src="image/quesation 10 ans dis 1.png" data-action="zoom" data-original="image/quesation 10 ans dis 1.png" alt="journey_start_thumbnail" />
<br>
   

2. Kingdom- Animalia<br>
Phylum- Choradata<br>
Class- Aves<br>
Genus- Columba<br>
<br>
<img src="image/quesation 10 ans dig 2.png" data-action="zoom" data-original="image/quesation 10 ans dig 2.png" alt="journey_start_thumbnail" />
<br>
3. Kingdom- Animalia<br>
Phylum- Echinodermata<br>
Genus- Asterias<br>

<br>
<img src="image/quesation 10 ans dig 3.png" data-action="zoom" data-original="image/quesation 10 ans dig 3.png" alt="journey_start_thumbnail" />
<br>

4. Kingdom- Animalia<br>
Phylum- Platyhelmenthis<br>
Genus- Planaria<br>
<br>
<img src="image/quesation 10 ans dig 4.png" data-action="zoom" data-original="image/quesation 10 ans dig 4.png" alt="journey_start_thumbnail" />
<br>

5. Kingdom- Animalia<br>
Phylum- Choradata<br>
Class- Chondrichthyes<br>
Genus- Isurus<br>
<br>
<img src="image/quesation 10 ans dig 5.png" data-action="zoom" data-original="image/quesation 10 ans dig 5.png" alt="journey_start_thumbnail" />
<br>

6. Kingdom- Animalia<br>
Phylum- Chordata<br>
Class- Amphibia<br>
Genus- Rana<br>
<br>
<img src="image/quesation 10 ans dig 6.png" data-action="zoom" data-original="image/quesation 10 ans dig 6.png" alt="journey_start_thumbnail" />
<br>

7. Kingdom- Animalia<br>
Phylum- Aschelminthes<br>
Genus- Ascaris<br>

<img src="image/quesation 10 ans dig 7.png" data-action="zoom" data-original="image/quesation 10 ans dig 7.png" alt="journey_start_thumbnail" />
<br>


8. Kingdom- Animalia<br>
Phylum- Coelenterata<br>
Genus- Hydra<br>
<img src="image/quesation 10 ans dig 8.png" data-action="zoom" data-original="image/quesation 10 ans dig 8.png" alt="journey_start_thumbnail" />
<br>



9. Kingdom- Animalia<br>
Phylum- Mollusca<br>
Genus- Octpous<br>
<img src="image/quesation 10 ans dig 9.png" data-action="zoom" data-original="image/quesation 10 ans dig 9.png" alt="journey_start_thumbnail" />
<br>


10. Kingdom- Animalia<br>
Phylum- Choradata<br>
Class- Reptilia<br>
Genus- Hemidactylus<br>
<img src="image/quesation 10 ans dig 10.png" data-action="zoom" data-original="image/quesation 10 ans dig 10.png" alt="journey_start_thumbnail" />
<br>

<br><br><br>

 

<b>Question 11:</b><br><br>
Label the following.<br>

<img src="image/quesation 11 dig 1.png" data-action="zoom" data-original="image/quesation 11 dig 1.png" alt="journey_start_thumbnail" />
<br>

<p style="color:green;"><b>ANSWER:</b></p><br><br>
1. Planaria<br>
<br>
<img src="image/question 11 ans 1 dig.png" data-action="zoom" data-original="image/question 11 ans 1 dig.png" alt="journey_start_thumbnail" />
<br>
2. Scolidon<br>
<br>
<img src="image/quesation 11 ans  dig 2.png" data-action="zoom" data-original="quesation 11 ans  dig 2.png" alt="journey_start_thumbnail" />
<br>
3. Nereis<br>
<img src="image/quesation 11  ans dig 3.png" data-action="zoom" data-original="quesation 11  ans dig 3.png" alt="journey_start_thumbnail" />
<br>
<br>

4. Jelly fish<br>
<img src="image/quesation 11 ans dig 4.png" data-action="zoom" data-original="quesation 11 ans dig 4.png" alt="journey_start_thumbnail" />
<br>
<br>
<br>
<br>
</body>
</html>
</div>








<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
