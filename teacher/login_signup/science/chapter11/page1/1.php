
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
  <title>page 1</title>
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
    
When a parent with blue eyes and parent with brown eyes pass down their genes for eye color to their offspring, this is an example of heredity.
<br><br>
The children inherit the genes that consist of deoxyribonucleic acid (DNA) from the parents, and they may have blue or brown eyes. However, genetics is complex, and more than one gene is responsible for eye color.
Likewise, many genes determine other traits like hair color or height.
<br><br>
Heredity Definition in Biology
Heredity is the study of how parents pass down their traits to their offspring through genetics. Many theories about heredity have existed, and the general concepts of heredity appeared before people understood cells completely.
<br><br>
However, modern-day heredity and genetics are newer fields.
Although the foundation for studying genes appeared in the 1850s and throughout the 19th century, it was largely ignored until the early 20th century.
<br><br>
Heredity Examples
Punnett squares can help you understand homozygous vs. heterozygous crosses and heterozygous vs. heterozygous crosses. However, not all crosses can be calculated using Punnett squares due to their complexity.
Named after Reginald C. Punnett, the diagrams can help you predict phenotypes and genotypes for offspring. The squares show the probability of certain crosses.
<br><br>
Mendel’s overall findings showed that genes transmit heredity. Each parents transfers half of his or her genes to the offspring. Parents can also give different sets of genes to different offspring. For example, identical twins have the same DNA, but siblings do not.


  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 1   )</h2>

    <div class="value-img">
      <img src="11/1.jpg" data-action="zoom" data-original="11/1.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>


<!-- practice question and answers -->

<div class="container">
<p>
	<h1><p style="color: blue;"><b> Practice Questions and Answers</b></p></h1><br><br>


<p style="color:gray;"><b>Page no -1 </b></p> <br><br>
<b>Question 1:</b><br><br>
<b> Fill in the blanks</b><br><br><br>

(1) The proteins are synthesized by DNA throughout <b style="color: green"><u>RNA</u></b>  <br>
(2) the process of RNA synthesis is called as <b style="color: green"><u> transcription</u></b> <br><br><br>


<b>Question 2:</b><br><br>
 <b>Short answers and questions</b> <br><br><br>

<b>(1) what is heredity?</b>
  <p style="color:green;"><b>ANSWER:</b></p>
<p>transfer of biological character from one generation to another</p><br><br> 

<b>(2) mutational theory was given by whome and when ?</b> 
<p style="color:green;"><b>ANSWER:</b></p> hugo devaries in 1901 <br><br><br>

 <b>(3) pair of chromosome is observed first by whome? Where? When?</b> 
<p style="color:green;"><b>ANSWER:</b></p> walter and sutton in cells of grasshopper in 1902 
<br><br><br>

<b>(4) who and when proved that except viruses all living organisms have DNA as genetic material?</b>
 <p style="color:green;"><b>ANSWER:</b></p>
  in 1944 trio of scientists ostwald avery .maclyn maccarty and colin macteod proved... 
<br><br><br>

<b>(5) who is pioneer of modern genetics?</b>
<p style="color:green;"><b>ANSWER:</b></p>Johann gregor mendal <br><br><br>

<b>(6) who and when gave the model for protein synthesis?</b> 
<p style="color:green;"><b>ANSWER:</b></p>
<br

<b>(7)the science of heredity is usefull for what purpose?</b>
<p style="color:green;"><b>ANSWER:</b></p> 
diagnosis , treatment , prevention of hereditary disorder production of hybrid variety of animals  and plants in industrial process in which microbes are used <br><br><br>

<b>(8)which are the 3 process for protin synthesis?</b>
<p style="color:green;"><b>ANSWER:</b></p> transcription , translation , translocation .

<br>
<br>

<br>
<br>
<br>
<br>
</div>




<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
