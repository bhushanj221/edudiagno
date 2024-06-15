
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
  <title>page 8</title>
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
    <a href="../../chapter11.php">return to chapter</a>
    
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
    

chevalier de Lamarck (1 August 1744 – 18 December 1829), often known simply as Lamarck, was a French naturalist. He was a soldier, biologist, and academic, and an early proponent of the idea that biological evolution occurred and proceeded in accordance with natural laws.
<br><br>
Lamarck fought in the Pomeranian War (1757–62) against Prussia, and was awarded a commission for bravery on the battlefield. Posted to Monaco, Lamarck became interested in natural history and resolved to study medicine. He retired from the army after being injured in 1766, and returned to his medical studies. Lamarck developed a particular interest in botany, and later, after he published the three-volume work Flore françoise (1778), he gained membership of the French Academy of Sciences in 1779. Lamarck became involved in the Jardin des Plantes and was appointed to the Chair of Botany in 1788. When the French National Assembly founded the Muséum national d'Histoire naturelle in 1793, Lamarck became a professor of zoology.
In 1801, he published Système des animaux sans vertèbres, a major work on the classification of invertebrates, a term which allegedly he coined. In an 1802 publication, he became one of the first to use the term "biology" in its modern sense.Note  Lamarck continued his work as a premier authority on invertebrate zoology. He is remembered, at least in malacology, as a taxonomist of considerable stature.
The modern era generally remembers Lamarck for a theory of inheritance of acquired characteristics, called Lamarckism (inaccurately named after him), soft inheritance, or use/disuse theory,which he described in his 1809 Philosophie Zoologique. However, the idea of soft inheritance long antedates him, formed only a small element of his theory of evolution, and was in his time accepted by many natural historians. Lamarck's contribution to evolutionary theory consisted of the first truly cohesive theory of biological evolution,in which an alchemical complexifying force drove organisms up a ladder of complexity, and a second environmental force adapted them to local environments through use and disuse of characteristics, differentiating them from other organisms. Scientists have debated whether advances in the field of transgenerational epigenetics mean that Lamarck was to an extent correct, or not.





  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 8   )</h2>

    <div class="value-img">
      <img src="11/8.jpg" data-action="zoom" data-original="11/8.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>


<!-- partial:index.partial.php -->
<div class="container">

<p>
	<h1><p style="color: blue;"><b> Practice Questions and Answers</b></p></h1><br><br>


<p style="color:gray;"><b>Page no -8 </b></p> <br><br>
<b>Question 1:</b><br><br>
<b> Fill in the blanks</b><br><br><br>

(1) lamarckism is also called as 
<b style="color:green;"><u>theory of inheritance of acquired characters </u></b> 
  <br>
(2)  the living organism can trasfer the characters which it has acquired to the next generation . this is
called
<b style="color:green;"><u> ancestry of acquired character</u></b>
  <br>
  <br>

<b>Question 2:</b><br><br>
 <b>Short answers and questions</b> <br><br><br>

1: : who gave the thery of lamarkism and what was the principle of his theory?
<br><br>
2: why the lamarcks theory was disproved.<br><br>


<br>
  <!--<p style="color:green;"><b>ANSWER:</b></p>
<p>transfer of biological character from one generation to another</p><br><br> -->

<!--(2) explain about morphological evidence?<br>-->

<!--<p<p style="color:green;"><b>ANSWER:</b></p> hugo devaries in 1901 <br><br><br>-->

 <!--(3) explain about anatomical evidence ?<br><br><br>-->

<!--<p style="color:green;"><b>ANSWER:</b></p> walter and sutton in cells of grasshopper in 1902 
<br><br><br>-->
<b style="color:red;">Hot qustions:</b><br><br>

1: 1: explain in details about the theory of lamarckism and why it was disproved?
<br><br>

</div>







<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
