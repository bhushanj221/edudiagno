+
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
  <title>page 9</title>
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
    
Human evolution is the evolutionary process that led to the emergence of anatomically modern humans, beginning with the evolutionary history of primates—in particular genus Homo—and leading to the emergence of Homo sapiens as a distinct species of the hominid family, which includes the great apes. This process involved the gradual development of traits such as human bipedalism and language, as well as interbreeding with other hominins, which indicate that human evolution was not linear but a web.
<br><br>
The study of human evolution involves several scientific disciplines, including physical anthropology, primatology, archaeology, paleontology, neurobiology, ethology, linguistics, evolutionary psychology, embryology and genetics. Genetic studies show that primates diverged from other mammals about 85 million years ago, in the Late Cretaceous period, and the earliest fossils appear in the Paleocene, around 55 million years ago.
<br><br>
Within the superfamily Hominoidea, the family Hominidae diverged from the family Hylobatidae some 15–20 million years ago; subfamily Homininae (African apes) diverged from Ponginae (orangutans[a]) about 14 million years ago; the tribe Hominini (including humans, Australopithecus, and chimpanzees) parted from the tribe Gorillini (gorillas) between 8–9 million years ago; and, in turn, the subtribes Hominina (humans and extinct biped ancestors) and Panina (chimpanzees) separated 4–7 million years ago





  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 9   )</h2>

    <div class="value-img">
      <img src="11/9.jpg" data-action="zoom" data-original="11/9.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>

<!-- partial:index.partial.php -->
<div class="container">
<p>
	<h1><p style="color: blue;"><b> Practice Questions and Answers</b></p></h1><br><br>


<p style="color:gray;"><b>Page no -9 </b></p> <br><br>
<b>Question 1:</b><br><br>
<b> Fill in the blanks</b><br><br><br>

(1) formation of new species of plants and animals is effect of 
<b style="color:green;"><u>evolution. </u></b> 
  <br>
(2)   last dinosaurs disappeared approximately  
<b style="color:green;"><u>seven crore years</u></b> ago
  <br>
  (2)  first record of human like animal is with is in the form of Ramapithecus ape from  
<b style="color:green;"><u>east africa</u></b>
  <br>
  <br>

<b>Question 2:</b><br><br>
 <b>Short answers and questions</b> <br><br><br>

1: describe the concept of speciation.?
<br><br>
2: 2: give the years with its evolutionary change?.<br><br>


<br>
  <!--<p style="color:green;"><b>ANSWER:</b></p>
<p>transfer of biological character from one generation to another</p><br><br> -->

<!--(2) explain about morphological evidence?<br>-->

<!--<p<p style="color:green;"><b>ANSWER:</b></p> hugo devaries in 1901 <br><br><br>-->

 <!--(3) explain about anatomical evidence ?<br><br><br>-->

<!--<p style="color:green;"><b>ANSWER:</b></p> walter and sutton in cells of grasshopper in 1902 
<br><br><br>-->
<b style="color:red;">Hot qustions:</b><br><br>

1: describe in details about the human evolution with the journey of human and periods of change ?
<br><br>

<br><br>
</div>

<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
