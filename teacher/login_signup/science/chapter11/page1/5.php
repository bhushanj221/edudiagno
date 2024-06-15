
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
  <title>page 5</title>
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
     <a href="https://edudiagno.com/teacher/login_signup/science/chapter11/index/6.1.php">Go to Next page</a>
    
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
      
      <h1 style="font-size:30px; color:red;">Vestiginal Organs</h1><br>
<br>
<img src="image/appendix-anatomy.jpg" alt="Appedix" width="400" height="300"><br>
<b style="text-align: center;"> Appendix</b>
<br>
<img src="image/Wisdom-tooth.jpg" alt="Appedix" width="400" height="300"><br>
<b style="text-align: center;">Wisdom Tooth </b>
<br>
<br>

In the context of human evolution, human vestigiality involves those traits (such as organs or behaviors) occurring in humans that have lost all or most of their original function through evolution.
<br><br>
Although structures called vestigial often appear functionless, a vestigial structure may retain lesser functions or develop minor new ones. In some cases, structures once identified as vestigial simply had an unrecognized function. Vestigal organs are sometimes called rudimentary organs.
<br><br>
The examples of human vestigiality are numerous, including the anatomical (such as the human tailbone, wisdom teeth, and inside corner of the eye), the behavioral (goose bumps and palmar grasp reflex), and molecular (pseudogenes). Many human characteristics are also vestigial in other primates and related animals.
</p>
<b> Paleontologyical Evidences</b>
<br><b>(Paleontology-study of Fossils)</b>

<br><br><br>
<b>Fossil:</b>

Organisms get buried in earth due to disasters (flood, earthquake.) Remnants and impression of buried organism get preserved.
<br><br>
<b>Such preserved traces of organism are called Fossils. Importance of Fossils:</b>
<br>
1. They help to study evolution.<br>
2. Fossils give paleontological evidences for evolution.<br>

3. Fossils are important for study of species that are not alive (Extinct Species)<br>

4. Fossils help in estimating time duration of existence of organism (by Carbon Dating)<br>

<br>


</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 5   )</h2>

    <div class="value-img">
      <img src="11/5.jpg" data-action="zoom" data-original="11/5.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>

<!-- P Q an A -->
<div class="container">


<p>
	<h1><p style="color: blue;"><b> Practice Questions and Answers</b></p></h1><br><br>


<p style="color:gray;"><b>Page no -5 </b></p> <br><br>
<b>Question 1:</b><br><br>
<b> Fill in the blanks</b><br><br><br>

(1) <b style="color:green;"><u>remnants</u></b> and <b style="color:green;"><u>impressions</u></b> of such organisms remain preserved underground are called as fossils
  <br>

(2) appendix is useful and fully functional organ in 
<b style="color:green;"><u>ruminant</u></b>   <br>

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

(1) Describe how paleontological evidences are important?

<br><br><br>







<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
