    
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
  <title>page 4</title>
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
    
The evidence for evolution
In this article, we'll examine the evidence for evolution on both macro and micro scales.
<br><br>
First, we'll look at several types of evidence (including physical and molecular features, geographical information, and fossils) that provide evidence for, and can allow us to reconstruct, macroevolutionary events.
At the end of the article, we'll finish by seeing how microevolution can be directly observed, as in the emergence of pesticide-resistant insects.
<br><br>
Anatomy and embryology
Darwin thought of evolution as "descent with modification," a process in which species change and give rise to new species over many generations. He proposed that the evolutionary history of life forms a branching tree with many levels, in which all species can be traced back to an ancient common ancestor.
<br><br>
Branching diagram that appeared in Charles Darwin's On the origin of species, illustrating the idea that new species form from pre-existing species in a branching process that occurs over extended periods of time.
<br><br>
In this tree model, more closely related groups of species have more recent common ancestors, and each group will tend to share features that were present in its last common ancestor. We can use this idea to "work backwards" and figure out how organisms are related based on their shared features.


  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 4   )</h2>

    <div class="value-img">
      <img src="11/4.jpg" data-action="zoom" data-original="11/4.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>


<!-- Q AN A -->
<div class="container">
<p>
	<h1><p style="color: blue;"><b> Practice Questions and Answers</b></p></h1><br><br>


<p style="color:gray;"><b>Page no -2 </b></p> <br><br>
<b>Question 1:</b><br><br>
<b> Fill in the blanks</b><br><br><br>

(1) similarities in groups of animals and plants show that origin must be same and must have common
<b style="color:green;"><u>ancestors.</u></b>   <br>




<b>Question 2:</b><br><br>
 <b>Short answers and questions</b> <br><br><br>

(1) define evolution?
<br>
  <!--<p style="color:green;"><b>ANSWER:</b></p>
<p>transfer of biological character from one generation to another</p><br><br> -->

(2) explain about morphological evidence?<br>

<!--<p<p style="color:green;"><b>ANSWER:</b></p> hugo devaries in 1901 <br><br><br>-->

 (3) explain about anatomical evidence ?<br><br><br>

<!--<p style="color:green;"><b>ANSWER:</b></p> walter and sutton in cells of grasshopper in 1902 
<br><br><br>-->
<b style="color:red;">Hot qustions:</b><br><br>

(1) give a note on why these evidences are important and how they help in understanding the theory of
evolution?



</div>







<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
