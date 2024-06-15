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
  <title>page 75</title>
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
    <a href="../../chapter16.php">return to chapter</a>
    
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
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;"> </h1>
  <p >
    

  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 75   )</h2>

    <div class="value-img">
      <img src="16/75.jpg" data-action="zoom" data-original="16/75.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>



<br><br><br>
	<h1><p style="color: blue;"><b> 6. Animal Classification </b></p></h1><br><br>

<br>
<!-- question and answers -->
<div class="container">

<b>Question 1:</b><br>
Identify me.<br>
a. I am diploblastic & acoelomate. Which phylum do I belong to?<br>
b. My body is radially symmetrical. Water vascular system is present in my body. I am referred as fish though I am not. What is my name?<br>
c. I live in your small intestine. Pseudocoelom is present in my thread like body. In which phylum will you include me?<br>
d. Though I am multicellular, there are no tissues in my body. What is the name of my phylum?<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
a. I belong to the phyllum Cnidaria.<br>
b. I belong to the phyllum Echinodermata and my name is Star fish/Asterias.<br>
c. You belong to the phyllum Aschelminthes and your name is Ascaris.<br>
d. The name of phyllum is Porifera.<br>
<br>
<br>
<b>Question 2:</b><br>
Write the characters of each of the following animals with the help of classification chart.
Bath sponge, grasshopper, rohu, penguin, frog, lizard, elephant, jellyfish.<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>


<br>
<br>
<table style="width:50%">
  <tr>
    <th>Organism</th>
    <th>Level of organisation</th> 
    <th>Symmetry</th>
    <th>Coelom</th>
    <th>Notochord</th>
   
  </tr>
  <tr>
    <th>Bath sponge</th>
    <td>Cellular level</td>
    <td>Assymetrical</td>
    <td>Absent</td>
    <td>Absent</td>
    
  </tr>
  
  <tr>
    <th>Grasshopper</th>
    <td>Organ system</td>
    <td>Bilateral</td>
    <td>Coelomate</td>
    <td>Absent</td>
    
  </tr>
  
  <tr>
    <th>Rohu</th>
    <td>Organ system</td>
    <td>Bilateral</td>
    <td>Coelomate</td>
    <td>Present</td>
   </tr>

<tr>
  <th>Penguin</th>
    <td>Organ system</td>
    <td>Bilateral</td>
    <td>Coelomate</td>
    <td>Present</td>
    </tr>

<tr>
  <th>Frog</th>
  <td>Organ system</td>
  <td>Bilateral</td>
  <td>Coelomate</td>
  <td>Present</td>
    
    </tr>

    <tr>
  <th>Lizzard</th>
  <td>Organ system</td>
  <td>Bilateral</td>
  <td>Coelomate</td>
    <td>Present</td>
    </tr>

    <tr>
  <th>Elephant</th>
    <td>Organ system</td>
    <td>Bilateral</td>
    <td>Coelomate</td>
    <td>Present</td>
    </tr>


     <tr>
  <th>Jelly fish</th>
    <td>Tissue level</td>
    <td>Radial</td>
    <td>Absent</td>
    <td>Absent</td>
    </tr>

</table>
</body>
</html>
<br>
<br>
<br>
 	

<b>Question 3:</b><br><br>
Write in brief about progressive changes in animal classification.
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
 There are various sceintists which have contributed to biological classification and based on their observations we have the current system of classification:<br>
<br>
Aristotle (384-322 BC): Also known as the father of classificatio, he classified animals on the basis of two points: presence or absence of blood, wether they live on land, air or water.<br>
Carolous Linneaus (1707-1778): Also knowm as father of taxonomy, he classified living things into two kingdoms- Plantae and Animalia.<br>
Ernst Haeckel (1834-1919): He proposed the thee kingdom classificatio- Plantae, Animalia and Protista.
Robert Whitakker (1920-1980): He gave the five kingdom classification- Monera, Protista, Fungi, Plantae and Animalia.<br>
Carl Woose (1928-2012): He gave the classification where he classified all the organisms into three categories- Eukarya domain, Bacteria domain and Archae domain.<br>
<br><br>
<b>Question 4:</b>
What is the exact difference between grades of organization and symmetry? Explain with examples.
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
Grades of organization:<br>
We know that all organisms are made up of cells out of which some organisms may be unicellular while some may be multicellular. Grade of organisation refers to the levels in which the cells are arranged. There are different grades of organisation like:<br>
<br>
Cellular level of organization: It is a loose aggregation of cells in which the cells are functionally different from one another.<br>
Tissue level of organization: In this, different cells performing similar functions are arranged into tissues.
Organ level of organization: Here, different tissues are organized into organs and each organ is specialized for a particular function.<br>
<br>
Members of kingdom Animalia are multicellular and all of them exhibit the different pattern of organisation of cells. The different levels of organization are as follows:
<br>
Cellular level of organization (Example: Porifera)<br>
Tissue level of organization (Example: Coelenterata)<br>
Organ level of organization (Example: Platyhelminthes)<br>
Organ system level of organization (Examples: Nematoda, Annelida, Arthropoda, Mollusca, Echinodermata and chordates)
<br>
Symmetry is a characteristic through which animals may be distinguished from each other. Animals that can be divided into two identical halves in one plane exhibit bilateral symmetry. Animals that can be divided into many identical parts exhibit radial symmetry. Animals that cannot be divided into identical parts are asymmetric. If the body of an animal can be divided into two equal parts by any plane, it is said to be symmetrical.
<br>
(i) Animals showing radial symmetry - Hydra and sea anemone
<br>
(ii) Animals showing bilateral symmetry - Human beings and prawn
<br>

<br><br><br>
<b>Question 5:</b><br><br>
Answer in brief.<br>
a. Give scientific classification of shark upto class.<br>
b. Write four distinguishing characters of phylum- Echinodermata.<br>
c. Distinguish between butterfly and bat with the help of four distinguishing properties.<br>
d. To which phylum does Cockroach belong? Justify your answer with scientific reasons.<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
a. The classification of shark is as follows:<br>
 Kingdom- Animalia
 Phylum-  Chordata
 Sub- phylum- Vertebrata
 Class- Chondrichthyes

b.  Characteristic features of Echinodermata are:

they are called echinoderms because calcareous spines are present on the body of these animals.
their skeleton is made up of calcareous spines/ossicles (plates).
they show radial symmetry in adult stage whereas they show bilateral symmetry in larval stage.
these animals have the ability of regeneration.
they are found only in oceans.

c. 

<br>
<br>
<table style="width:50%">
  <tr>
    <th> Butterfly</th>
    <th>Bat</th> 
   
  </tr>
  <tr>
    <td>1. It belongs to the phylum Arthropoda.</td>
    <td>It belongs to the phylum Chordata and class mammalia.</td>
    
  </tr>
  
  <tr>
    <td>2. Their characteristic feature is the presence of joint appendages.</td>
    <td>Their characteristic feature is the presence of mammary glands.</td>
    
  </tr>
  
  <tr>
    <td>3. It shows the presence of chitinous exoskeleton.</td>
    <td>Exoskeleton is in the form of hair or fur.</td>
   </tr>

<tr>
  <td>4. They are cold blooded organisms.</td>
    <td>They are warm blooded organisms.</td>
    </tr>



</table>
</body>
</html>
<br>
<br>
<br>


d. Cockroach belings to the phylum Arthropoda. It shows all the features which are a characteristic of this phylum:
*it shows the presence of jointed appendages<br>
*it is triploblastic, coelomate, bilaterally symmetrical and <br>
*it has chitinous exoskeleton around its body<br>
*it respires with the help of tracheal system<br><br><br><br>

<b>Question 6:</b><br><br>
Give scientific reasons.<br>
a. Though tortoise lives on land as well as in water, it cannot be included in class- Amphibia.<br>
b. Our body irritates if it comes in contact with jelly fish.<br>
c. All vertebrates are chordates but all chordates are not vertebrates.<br>
d. Balanoglossus is connecting link between non-chordates & chordates.<br>
e. Body temperature of reptiles in not constant.<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
a. Tortoise belongs to the class reptilia and does not show any characteristic which is similar to the class amphibia except that it can live in both land and water. There are certain characteristics which are common to the amphibians which are not applicable for reptiles. For example: amphibians have moist skin, neck is absent, external ear is in the form of tympanum whereas reptiles have dry and scaly skin, neck is present and external ear is absent. So, we can say that tortoise is a reptile and not an amphibian based on the above characteristics.
<br>
b. Jelly fish has special cells on its tentacles called cnidoblasts. These cnidoblasts contain toxins which is a protective mechanism shown by organisms belonging to the phylum Cnidaria.<br>
On touching the jelly fish, this toxin is released which results in irritating of the body.<br>
<br>
c. The members of Vertebrata possess notochord during embryonic development. Thus, all vertebrates are chordates. However, the notochord gets replaced by a cartilaginous or bony vertebral column in the adult. Thus, all chordates are not vertebrates.<br>
<br>
d. Balanoglossus is considered a connecting link between chordates and non chordates because it shows characteristics which are present in both the phylums. For example, Balanoglossus shows the presence of notochord and pharyngeal gill slits which is a characteristic feature of chordates. It also shows the presence of heart which is dorsal just like non chordates.<br>
<br>
e. Reptiles are cold blooded organisms or poikilotherms which means they are not able to regulate their body temperatures. Their body temperatures change with the change in the temperature of the environment. For example, if the outer temperature rises their body temperature also rises and vice or versa. This can be explained from the observation that when the temperatures drops, these reptiles bask themselves in the sun whereas when the temperatures are high, they would hide under the shades.<br>
<br><br><br>

<b>Question 7:</b><br><br>
Answer the following questions by choosing correct option.<br>
a. Which special cells are present in the body of sponges (Porifera)?<br>
<br>
1. Collar cells<br>
2. Cnidoblasts<br>
3. Germ cells<br>
4. Ectodermal cells<br>
<br>
b. Which of the following animal's body shows bilateral symmetry?<br>
1. Star fish<br>
2. Jelly fish <br>
3. Earthworm<br>
4. Sponge<br>
<br>
c. Which of the following animals can regenerate it’s broken body part?<br>
1. Cockroach<br>
2. Frog<br>
3. Sparrow<br>
4. Star fish<br>
 
<br>
d. Bat is included in which class?<br>
1. Amphibia<br>
2. Reptilia<br>
3. Aves<br>
4. Mammalia<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
a. Collar cells are present in the body of sponges (Porifera).<br>
b. Earthworm shows bilateral symmetry.<br>
c. Star fish can regenerate it’s broken body part.<br>
d. Bat is included in the class Mammalia.<br>
 
<br>
<br>
<br>
</div>








<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
