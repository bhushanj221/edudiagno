
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
  <title>page 7</title>
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
    
    <b>Connecting Links</b><br><br>
    The plant or animal which are having characters of two different group are called as connecting link 
    <b>Example</b><br>
    1. <b>peripatus</b> is connecting link between Annelida and Arthropoda .<br>
    2. <b>Duck billed Platypus</b> is connecting link between reptiles and Mammals<br>
    2. <b>lungfish:-</b>  is connecting link between fish and amphibians.<br> study of connecting link indicates that Mammals are evolved from Reptile and Amphibian from Fishes.
    
    
    
    <br><br><br>
    
    

<b>Embryological Evolution:</b>
<br><br>
An embryo goes through a number of stages before it develops into a fetus and eventually into a living offspring. Studying the structures that develop during an embryo's various stages of growth is called embryology and can be used to show the genetic similarities that suggest certain patterns of evolution.
<br><br>
Most embryos look similar in their early stages, but as they develop, the differences between species become more obvious. Embryos of organisms that have a closer genetic relationship to one another tend to look similar for a longer period of time since they share a more recent common ancestor.
<br><br>
In early embryonic stages, embryos will often form structures that will not be present in the organism's final form.
<br><br>
For example, human embryos develop a tail in the beginning stages of our development. However, further along in the process, certain genes kick in that absorb the tail cells, leaving us with a nub referred to as a vestigial tail. The development of this vestigial tail suggests that we had a tail at some point in our evolutionary history, but adaptations and evolutionary shifts made tails unnecessary for our survival.


  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 7   )</h2>

    <div class="value-img">
      <img src="11/7.jpg" data-action="zoom" data-original="11/7.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>

<!-- p q a -->
<div class="container">

<p>
	<h1><p style="color: blue;"><b> Practice Questions and Answers</b></p></h1><br><br>


<p style="color:gray;"><b>Page no -7 </b></p> <br><br>
<b>Question 1:</b><br><br>
<b> Fill in the blanks</b><br><br><br>

(1)  mammals are evolved from reptiles and amphibians from 
<b style="color:green;"><u>fishes.</u></b>  .
  <br>
(1)  darwin had published a book titled  
<b style="color:green;"><u>Origin of Species .</u></b>  .
  <br>
  <br>

<b>Question 2:</b><br><br>
 <b>Short answers and questions</b> <br><br><br>

1: what is connecting link?<br><br>
2: what conclusion we got from the embryonic evidence ?<br><br>
3 : what was the objective raised against the theory of natural selection given by Darwin's?

<br>
  <!--<p style="color:green;"><b>ANSWER:</b></p>
<p>transfer of biological character from one generation to another</p><br><br> -->

<!--(2) explain about morphological evidence?<br>-->

<!--<p<p style="color:green;"><b>ANSWER:</b></p> hugo devaries in 1901 <br><br><br>-->

 <!--(3) explain about anatomical evidence ?<br><br><br>-->

<!--<p style="color:green;"><b>ANSWER:</b></p> walter and sutton in cells of grasshopper in 1902 
<br><br><br>-->
<b style="color:red;">Hot qustions:</b><br><br>

1: explain in details abot all the evidence given for the theory of evolution and the final conclusion on it?
<br><br>
2: describe in detail the theory of natural selection and what objections were raised against the theory ?
<br><br>


</div>





<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
