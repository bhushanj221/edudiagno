
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
  <title>page 17</title>
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
    <a href="../../chapter12.php">return to chapter</a>
    
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
    
Cell division is the process by which a parent cell divides into two or more daughter cells.[1] Cell division usually occurs as part of a larger cell cycle. In eukaryotes, there are two distinct types of cell division; a vegetative division, whereby each daughter cell is genetically identical to the parent cell (mitosis), and a reproductive cell division, whereby the number of chromosomes in the daughter cells is reduced by half to produce haploid gametes (meiosis).
<br><br>
In cell biology, mitosis (/maɪˈtoʊsɪs/) is a part of the cell cycle, in which, replicated chromosomes are separated into two new nuclei. Cell division gives rise to genetically identical cells in which the total number of chromosomes is maintained. In general, mitosis (division of the nucleus) is preceded by the S stage of interphase (during which the DNA is replicated) and is often followed by telophase and cytokinesis; which divides the cytoplasm, organelles and cell membrane of one cell into two new cells containing roughly equal shares of these cellular components.
<br><br>
The different stages of Mitosis all together define the mitotic (M) phase of an animal cell cycle—the division of the mother cell into two daughter cells genetically identical daughter cells.[3] Meiosis results in four haploid daughter cells by undergoing one round of DNA replication followed by two divisions. Homologous chromosomes are separated in the first division, and sister chromatids are separated in the second division. Both of these cell division cycles are used in the process of sexual reproduction at some point in their life cycle. Both are believed to be present in the last eukaryotic common ancestor.
<br><br>
Prokaryotes (bacteria and archaea) usually undergo a vegetative cell division known as binary fission, where their genetic material is segregated equally into two daughter cells. While binary fission may be the means of division by most prokaryotes, there are alternative manners of division, such as budding, that have been observed. All cell divisions, regardless of organism, are preceded by a single round of DNA replication.
<br><br>
For simple unicellular microorganisms such as the amoeba, one cell division is equivalent to reproduction – an entire new organism is created. On a larger scale, mitotic cell division can create progeny from multicellular organisms, such as plants that grow from cuttings. Mitotic cell division enables sexually reproducing organisms to develop from the one-celled zygote, which itself was produced by meiotic cell division from gametes.[4][5] After growth, cell division by mitosis allows for continual construction and repair of the organism.[6] The human body experiences about 10 quadrillion cell divisions in a lifetime.[7]
<br><br>
The primary concern of cell division is the maintenance of the original cell's genome. Before division can occur, the genomic information that is stored in chromosomes must be replicated, and the duplicated genome must be separated cleanly between cells.[8] A great deal of cellular infrastructure is involved in keeping genomic information consistent between generations.




  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 17   )</h2>

    <div class="value-img">
      <img src="12/17.jpg" data-action="zoom" data-original="12/17.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>

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
  <title>page 62</title>
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
  <p >Gravity, also called gravitation, in mechanics, the universal force of attraction acting between all matter. It is by far the weakest known force in nature and thus plays no role in determining the internal properties of everyday matter. On the other hand, through its long reach and universal action, it controls the trajectories of bodies in the solar system and elsewhere in the universe and the structures and evolution of stars, galaxies, and the whole cosmos. On Earth all bodies have a weight, or downward force of gravity, proportional to their mass, which Earth’s mass exerts on them. Gravity is measured by the acceleration that it gives to freely falling objects. At Earth’s surface the acceleration of gravity is about 9.8 metres (32 feet) per second per second. Thus, for every second an object is in free fall, its speed increases by about 9.8 metres per second. At the surface of the Moon the acceleration of a freely falling body is about 1.6 metres per second per secon</p>


<p >Gravity, also called gravitation, in mechanics, the universal force of attraction acting between all matter. It is by far the weakest known force in nature and thus plays no role in determining the internal properties of everyday matter. On the other hand, through its long reach and universal action, it controls the trajectories of bodies in the solar system and elsewhere in the universe and the structures and evolution of stars, galaxies, and the whole cosmos. On Earth all bodies have a weight, or downward force of gravity, proportional to their mass, which Earth’s mass exerts on them. Gravity is measured by the acceleration that it gives to freely falling objects. At Earth’s surface the acceleration of gravity is about 9.8 metres (32 feet) per second per second. Thus, for every second an object is in free fall, its speed increases by about 9.8 metres per second. At the surface of the Moon the acceleration of a freely falling body is about 1.6 metres per second per secon</p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 17   )</h2>

    <div class="value-img">
      <img src="2/17.jpg" data-action="zoom" data-original="2/17.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
