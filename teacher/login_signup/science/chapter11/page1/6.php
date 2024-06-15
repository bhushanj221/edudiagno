
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
  <title>page 6</title>
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



<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align:center
}
</style>
</head>
<body>




 <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="#" onclick="window.history.go(-1)">back</a>
    <a href="../../chapter11.php">return to chapter</a>
    <a href="https://edudiagno.com/teacher/login_signup/science/chapter11/index/6.1.php">return to object 1</a>
    <a href="https://edudiagno.com/teacher/login_signup/science/chapter11/index/6.2.php">return to object 2</a>
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
      
      
      
      
      
      
    
<b>Fossil record</b><br>

organisms get buried in or due to disaster flood earthquake eminent and impression of buried organism gets preserved such preserved traces of organisms are called fossils

<br><br>


<b>Importance of Fossils:</b>
<br>
1. They help to study evolution.<br>
2. Fossile give paleontological evidences for evolution.<br>
3. Fossile are important for study of species that are not alive (Extinct species).<br>
4. Fossils help in estimating time duration of existence of organism (by carbon dating).<br>
5. study of fossil shows that vertebrates are evolved from invertebrates<br>

<br>
<br>
<br>
<br>
<table >
  <tr>
    <th>Era</th>
    <th>Animals</th> 
    
  </tr>
  <tr>
    <td>Paleozoic</td>
    <td>invertebrates, Pisces,Amphibia and reptile</td>
   
  </tr>
  <tr>
    <td>Mesozoic</td>
    <td>Reptiles</td>

  </tr>
  <tr>
    <td>Cenozoic</td>
    <td>Aves(Birds),Mammals</td>

  </tr>
</table>

<br>
<br>
<br>






<b>Extra words  </b><br>


Fossils are the preserved remains of previously living organisms or their traces, dating from the distant past. The fossil record is not, alas, complete or unbroken: most organisms never fossilize, and even the organisms that do fossilize are rarely found by humans. Nonetheless, the fossils that humans have collected offer unique insights into evolution over long timescales.

<br><br>

Earth's rocks form layers on top of each other over very long time periods. These layers, called strata, form a convenient timeline for dating embedded fossils. Strata that are closer to the surface represent more recent time periods, whereas deeper strata represent older time periods.


<br><br>
How can the age of fossils be determined? First, fossils are often contained in rocks that build up in layers called strata. The strata provide a sort of timeline, with layers near the top being newer and layers near the bottom being older. Fossils found in different strata at the same site can be ordered by their positions, and "reference" strata with unique features can be used to compare the ages of fossils across locations. In addition, scientists can roughly date fossils using radiometric dating, a process that measures the radioactive decay of certain elements.

<br><br>
Fossils document the existence of now-extinct species, showing that different organisms have lived on Earth during different periods of the planet's history. They can also help scientists reconstruct the evolutionary histories of present-day species. For instance, some of the best-studied fossils are of the horse lineage. Using these fossils, scientists have been able to reconstruct a large, branching "family tree" for horses and their now-extinct relatives^66start superscript, 6, end superscript. Changes in the lineage leading to modern-day horses, such as the reduction of toed feet to hooves, may reflect adaptation to changes in the environment.



  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 6  )</h2>

    <div class="value-img">
      <img src="11/6.jpg" data-action="zoom" data-original="11/6.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>


<!-- partial:index.partial.php -->
<div class="container">

<p>
	<h1><p style="color: blue;"><b> Practice Questions and Answers</b></p></h1><br><br>


<p style="color:gray;"><b>Page no -6 </b></p> <br><br>
<b>Question 1:</b><br><br>
<b> Fill in the blanks</b><br><br><br>

(1)  the time passed since death of a plant or animal can be calculated by measuring the radioactivity of<b style="color:green;"><u>C14 </u></b>  and ratio of C-14 to C-12 present in theri body .
  <br>

  <br>

<b>Question 2:</b><br><br>
 <b>Short answers and questions</b> <br><br><br>

(1) what is carbon dating method?

<br>
  <!--<p style="color:green;"><b>ANSWER:</b></p>
<p>transfer of biological character from one generation to another</p><br><br> -->

<!--(2) explain about morphological evidence?<br>-->

<!--<p<p style="color:green;"><b>ANSWER:</b></p> hugo devaries in 1901 <br><br><br>-->

 <!--(3) explain about anatomical evidence ?<br><br><br>-->

<!--<p style="color:green;"><b>ANSWER:</b></p> walter and sutton in cells of grasshopper in 1902 
<br><br><br>-->
<b style="color:red;">Hot qustions:</b><br><br>

(1) describe the method of carbon dating method with use of this method?



</div>




<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
