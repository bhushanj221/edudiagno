
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
  <title>page 34</title>
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
  padding: 10px;

}

h1 {text-align: center;}
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
    
Within the framework of the World Health Organization's (WHO) definition of health as a state of complete physical, mental and social well-being, and not merely the absence of disease or infirmity, reproductive health, or sexual health/hygiene, addresses the reproductive processes, functions and system at all stages of life.[1] UN agencies claim sexual and reproductive health includes physical, as well as psychological well-being vis-a-vis sexuality.
<br><br>


Reproductive health implies that people are able to have a responsible, satisfying, healthy reproductive system and safer sex life and that they have the capability to reproduce and the freedom to decide if, when and how often to do so. One interpretation of this implies that men and women should be informed of and have access to safe, effective, affordable and acceptable methods of birth control; also access to appropriate health care services of sexual, reproductive medicine and implementation of health education programs to stress the importance of women to go safely through pregnancy and childbirth could provide couples with the best chance of having a healthy infant.
<br>
<br>

Individuals do face inequalities in reproductive health services. Inequalities vary based on socioeconomic status, education level, age, ethnicity, religion, and resources available in their environment. It is possible for example, that low income individuals lack the resources for appropriate health services and the knowledge to know what is appropriate for maintaining reproductive health.[3]
<br>
<br>

  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 34  )</h2>

    <div class="value-img">
      <img src="13/34.jpg" data-action="zoom" data-original="3/34.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>


<!-- question and answers -->
<div class="container">
<br><br><br>
	<h1><p style="color: blue;"><b> 3. Life Processes in Living Organisms Part - 2 </b></p></h1><br><br>



<b>Question 1:</b><br>
Complete the following chart.<br><br>
 <br>
<br>
 
<table style="width:100%">
  <tr>
  	<th></th>
    <th>Asexual reproduction</th>
    <th></th>
    <th>Sexual reproduction</th> 
   
  </tr>
  <tr>
    <td>1.</td>
    <td>Reproduction that occurs with the help of somatic cells is called as asexual reproduction.</td>
    <td>1.</td>
    <td>.........................
    ............................</td>

    
  </tr>
  
  <tr>
    <td>2.</td>
    <td>..............................
    ..................................</td>
    <td>2.</td>
     <td>Male and female parent are necessary for sexual reproduction.</td>

  </tr>
  
  <tr>
    <td>3.</td>
    <td>This reproduction occurs with the help of mitosis only.</td>
    <td>3.</td>
     <td>..............................
     ..................................
     </td>

   </tr>
<tr>
    <td>4.</td>
    <td>..............................
    ..................................</td>
    <td>4.</td>
     <td>New individual formed by this method is genetically different from parents
     </td>

   </tr>

   <tr>
    <td>5.</td>
    <td>Asexual reproduction occurs in different individuals by various methods like binary fission, multiple fission, budding, fragmentation, regeneration, vegetative propagation, spore production, etc.	</td>
    <td>5.</td>
     <td>...................................
     ......................................
     </td>

   </tr>



</table>
</body>
</html>
<br><br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
	
 
<table style="width:100%">
  <tr>
  	<th></th>
    <th>Asexual reproduction</th>
    <th></th>
    <th>Sexual reproduction</th> 
   
  </tr>
  <tr>
    <td>1.</td>
    <td>Reproduction that occurs with the help of somatic cells is called as asexual reproduction.</td>
    <td>1.</td>
    <td>Reproduction that occurs with the help of germ cells is called sexual reproduction.</td>

    
  </tr>
  
  <tr>
    <td>2.</td>
    <td>Both the parents are not required for asexual reproduction. It is uniparental
reproduction.</td>
    <td>2.</td>
     <td>Male and female parent are necessary for sexual reproduction.</td>

  </tr>
  
  <tr>
    <td>3.</td>
    <td>This reproduction occurs with the help of mitosis only.</td>
    <td>3.</td>
     <td>This reproduction occurs with the help of both meiosis and mitosis
     </td>

   </tr>
<tr>
    <td>4.</td>
    <td>New individual formed by this method is genetically identical to parents.</td>
    <td>4.</td>
     <td>New individual formed by this method is genetically different from parents
     </td>

   </tr>

   <tr>
    <td>5.</td>
    <td>Asexual reproduction occurs in different individuals by various methods like binary fission, multiple fission, budding, fragmentation, regeneration, vegetative propagation, spore production, etc.	</td>
    <td>5.</td>
     <td>Sexual reproduction occurs in various organisms like microbes, plants, animals and humans. It involves two main processes- gamete formation and fertilization.
     </td>

   </tr>



</table>

</div>






<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
