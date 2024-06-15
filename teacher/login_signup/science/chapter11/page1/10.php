
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
  <title>page 10</title>
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
    
The primary resource for detailing the path of human evolution will always be fossil specimens. Certainly, the trove of fossils from Africa and Eurasia indicates that, unlike today, more than one species of our family has lived at the same time for most of human history. 
<br><br>
The nature of specific fossil specimens and species can be accurately described, as can the location where they were found and the period of time when they lived; but questions of how species lived and why they might have either died out or evolved into other species can only be addressed by formulating scenarios, albeit scientifically informed ones. These scenarios are based on contextual information gleaned from localities where the fossils were collected.
<br><br>
In devising such scenarios and filling in the human family bush, researchers must consult a large and diverse array of fossils, and they must also employ refined excavation methods and records, geochemical dating techniques, and data from other specialized fields such as genetics, ecology and paleoecology, and ethology (animal behaviour)—in short, all the tools of the multidisciplinary science of palaeoanthropology.
<br><br>
This article is a discussion of the broad career of the human tribe from its probable beginnings millions of years ago in the Miocene Epoch (23 million to 5.3 million years ago [mya]) to the development of tool-based and symbolically structured modern human culture only tens of thousands of years ago, during the geologically recent Pleistocene Epoch (about 2.6 million to 11,700 years ago). Particular attention is paid to the fossil evidence for this history and to the principal models of evolution that have gained the most credence in the scientific community. See the article evolution for a full explanation of evolutionary theory, including its main proponents both before and after Darwin, its arousal of both resistance and acceptance in society, and the scientific tools used to investigate the theory and prove its validity.

  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 10   )</h2>

    <div class="value-img">
      <img src="11/10.jpg" data-action="zoom" data-original="11/10.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>


<!-- Question and answrs -->
<div class="container">

<br><br>
<h1><b> Chapter 1 - Heredity And Evolution</b></h1><br><br>
<b>Page No 10:</b>
	<br><br>

<b>Question 1:</b><br>
Complete the following diagram.<br>
<br>
<b>ANSWER:</b>
<br>
 <img src="image/quesation 1 ans dig.png" data-action="zoom" data-original="image/quesation 1 ans dig.png" alt="journey_start_thumbnail" />
<br>
<table></table>



<b>Question 2:</b><br>
Read the following statements and justify same in your own words with the help of suitable examples.<br>
a. Human evolution began approximately 7 crore years ago.<br>
b. Geographical and reproductive isolation of organisms gradually leads to speciation.<br>
c. Study of fossils is an important aspect of study of evolution.<br>
d. There is evidences of fetal science among chordates.<br>
<br>
<b>ANSWER:</b>
<br>


<br>
a. The dinosaurs became extinct around 7 crore years ago and from that point human evolution began. Humans are thought to have evolved from monkey like animals which looked more or less like modern lemurs. These monkey like animals further evolved into ape like animals. Some of these ape like animals evolved into gibbon and orangutan while rest of them evolved into gorilla and chimpanzees.From their evolved, the first human like animal called Ramapethicus. The following table lists the  evolutionary history of modern man: <br>
<br>
<table style="width:50%">
  <tr>
    <th>Year</th>
    <th>Evolution</th> 
   
  </tr>
  <tr>
    <td>15 million years ago</td>
    <td>Dryopithecus (ape-like) and Ramapithecus (man-like)</td>
    
  </tr>
  
  <tr>
    <td>3 - 4 million years ago</td>
    <td>Man-like primates</td>
    
  </tr>
  
  <tr>
    <td>2 million years ago</td>
    <td>Australopithecines, also called Homo habilis,lived in East Africa</td>
   </tr>

<tr>
	<td>1.5 million years ago</td>
    <td>Homo erectus</td>
    </tr>

<tr>
	<td>1,000 - 40, 000 years ago</td>
    <td>Neanderthal man</td>
    </tr>

    <tr>
	<td>75, 000 - 10, 000 years ago</td>
    <td>Homo sapiens</td>
    </tr>
</table>
</body>
</html>
 <br><br>
 
b. Speciation may be defined as an evolutionary process, which involves the formation of one or more species from an existing species. In order to understand speciation, let us consider the example of beetles. Let us consider that a population of beetles has split into two separate populations, which cannot reproduce with each other.
<img src="image/que 2 b dig.png">
<br><br>

<b>Formation of a new species:</b>
These two separate populations of beetles are spread on a wide mountain range since their food is widely distributed. Hence, the population of beetles in that area is very large. Beetles are small insects, which cannot travel to far off places. They gather food from nearby places. As a result, sub-populations of beetles are spread over that area. These sub-populations can lead to the formation of an entirely new species.<br>
<br>
<b>Geographical isolation:</b> Since this population of beetles is spread over a large area, reproduction cannot occur between individuals of sub-populations. Reproduction will only occur within a sub-population, which will lead to the production of a new species. Now, if a river starts flowing between the two populations, then the two sub-populations would be further isolated and the chances of gene flow or reproduction further decreases.
<br><br>
<b>Genetic drift and natural selection:</b> Genetic drift and natural selection can give rise to different changes in sub-populations. For example, a particular sub-population of beetles evolves to blue or green colour due to natural selection or genetic drift. This will result in changes in subsequent generations. Thus, the two populations of beetles become completely different from each other.
<br><br>
These sub-populations will eventually be incapable of reproducing with each other. For example, the green female beetles of an area will prefer to reproduce with the green males only because green beetles have the survival advantage. Therefore, this results in the formation of a new species of green beetles, which are reproductively isolated.
<br><br>
c. Fossils are the remains of organisms that once existed on Earth. They represent the ancestors of plants and animals, which are alive even today. Fossils provide evidences of evolution by revealing the characteristics of the past organisms, and the changes that have occurred in these organisms to give rise to a present organism. Fossils have the same shape as that of the original animal, but their colour and texture may vary widely. The colour of a fossil depends upon the type of minerals that form it. For example, the fossil of a bone will not have some constituents of the bone in it. It has the same shape as the bone, but it is chemically more like a rock.?<br>
<b>Importance of Fossils:</b><br>
(i) They inform us about the types of living things that existed in the past.<br>
(ii) They inform us about the extent to which living things have changed over time.<br>
(iii) The most recent fossil is found in a rock nearest to earth’s surface. Therefore, they inform us about the time when a particular life form existed.<br>
<br>

d. Fetal science or embryology is used as an evidence of evolution. Comparative study of embryos in vertebrates/chordates shows that there is lot of similarity in them at the initial stages whereas this similarity decreases gradually. This similarity in the development of embryos represents common origin of organisms.

<br>
<br>
<br>




</div>



<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
