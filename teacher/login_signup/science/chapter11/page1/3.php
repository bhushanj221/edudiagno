
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
  <title>page 3</title>
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
h1 {text-align: center;}
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
    
The theory of evolution by natural selection, first formulated in Darwin's book "On the Origin of Species" in 1859, is the process by which organisms change over time as a result of changes in heritable physical or behavioural traits. Changes that allow an organism to better adapt to its environment will help it survive and have more offspring.
<br><br>
Evolution by natural selection is one of the best substantiated theories in the history of science, supported by evidence from a wide variety of scientific disciplines, including palaeontology, geology, genetics and developmental biology.
<br><br>
The theory has two main points, said Brian Richmond, curator of human origins at the American Museum of Natural History in New York City. "All life on Earth is connected and related to each other," and this diversity of life is a product of "modifications of populations by natural selection, where some traits were favoured in and environment over others," he said.
<br><br>
More simply put, the theory can be described as "descent with modification," said Briana Pobiner, an anthropologist and educator at the Smithsonian Institution National Museum of Natural History in Washington, D.C., who specializes in the study of human origins.
<br><br>
The theory is sometimes described as "survival of the fittest," but that can be misleading, Pobiner said. Here, "fitness" refers not to an organism's strength or athletic ability, but rather the ability to survive and reproduce.
For example, a study on human evolution on 1,900 students, published online in the journal Personality and Individual Differences in October 2017, found that many people may have trouble finding a mate because of rapidly changing social technological advances that are evolving faster than humans. "Nearly 1 in 2 individuals faces considerable difficulties in the domain of mating," said lead study author Menelaos Apostolou, an associate professor of social sciences at the University of Nicosia in Cyprus. "In most cases, these difficulties are not due to something wrong or broken, but due to people living in an environment which is very different from the environment they evolved to function in.


  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 3   )</h2>

    <div class="value-img">
      <img src="11/3.jpg" data-action="zoom" data-original="11/3.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>


<!-- partial:index.partial.php -->
<div class="container">
<p>
	<h1><p style="color: blue;"><b> Practice Questions and Answers</b></p></h1><br><br>


<p style="color:gray;"><b>Page no -2 </b></p> <br><br>
<b>Question 1:</b><br><br>
<b> Fill in the blanks</b><br><br><br>

(1) <b style="color:green;"><u>evolution</u></b> is a gradual change occurring in living organisms over a long duration.   <br>
(2) according to theory of evolution first living material hass been formed in 
 <b style="color:green;"><u> ocean</u></b> <br><br><br>


<b>Question 2:</b><br><br>
 <b>Short answers and questions</b> <br><br><br>

(1) define evolution?
<br>
  <!--<p style="color:green;"><b>ANSWER:</b></p>
<p>transfer of biological character from one generation to another</p><br><br> -->

(2)  give brief idea about life on earth 3.5 billion years ago?<br>

<!--<p<p style="color:green;"><b>ANSWER:</b></p> hugo devaries in 1901 <br><br><br>-->

 (3) how the first primitive cell may have been formed?<br><br><br>

<!--<p style="color:green;"><b>ANSWER:</b></p> walter and sutton in cells of grasshopper in 1902 
<br><br><br>-->
<b style="color:red;">Hot qustions:</b><br><br>

(1) explain in detail about evolution and the first theory of evolution.

<br><br><br>

</div>






<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
