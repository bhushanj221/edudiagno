
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
  <title>page 19</title>
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
    
Cytokinesis is the physical process of cell division, which divides the cytoplasm of a parental cell into two daughter cells. It occurs concurrently with two types of nuclear division called mitosis and meiosis, which occur in animal cells.
<br>
Meiosis 1 separates the pair of homologous chromosomes and reduces the diploid cell to haploid. It is divided into several stages that include, prophase, metaphase, anaphase and telophase
<br><br>
Meiosis 1 Stages
The different stages of meiosis 1 can be explained by the following phases :
<br><br>
Prophase 1
<br>
Metaphase 1
<br>
Anaphase 1
<br>
Telophase
<br>
Phases of Meiosis 1
<br>
Meiosis 1 Prophase 1
<br>
Prophase I is longer than the mitotic prophase and is further subdivided into 5 substages,
<br>
leptotene
<br>
zygotene
<br>
pachytene
<br>
diplotene
<br>
diakinesis
<br>
The chromosomes begin to condense and attain a compact structure during leptotene.
<br>
In zygotene, the pairing of homologous chromosomes starts a process known as chromosomal synapsis, accompanied by the formation of a complex structure called synaptonemal complex. A pair of synapsed homologous chromosome forms a complex known as bivalent or tetrad.
At pachytene stage, crossing over of non-sister chromatids of homologous chromosomes occurs at the recombination nodules. The chromosomes remain linked at the sites of 
<br>
crossing over.
Diplotene marks the dissolution of the synaptonemal complex and separation of the homologous chromosomes of the bivalents except at the sites of cross-over. The X-shaped structures formed during separation are known as chiasmata.
Diakinesis is marked by the termination of chiasmata and assembly of the meiotic spindle to separate the homologous chromosomes. The nucleolus disappears and the nuclear envelope breaks down.
<br>
Meiosis 1 Metaphase 1
The bivalents align at the equatorial plate and microtubules from the opposite poles attach to the pairs of homologous chromosomes.
<br>
Meiosis 1 Anaphase 1
The two chromosomes of each bivalent separate and move to the opposite ends of the cells. The sister chromatids are attached to each other.
<br>
Meiosis 1 Telophase 1
The nuclear membrane reappears and is followed by cytokinesis. This gives rise to a dyad of cells.
<br>
Also Read: Meiosis II
<br>
For more information on meiosis 1, stages of meiosis, phases of meiosis 1 such as meiosis 1 prophase 1, meiosis 1 metaphase 1, etc.
<br><br>
Frequently Asked Questions
What do you understand by meiosis?
Meiosis is the process in which a single cell divides twice to produce four cells with half the original amount of chromosomes.
<br><br>
What are the different stages of meiosis 1?
The different stages of meiosis 1 include:
<br><br>
Prophase
<br>
Metaphase
<br>
Anaphase
<br>
Telophase
<br>
How is meiosis 1 different from meiosis 2?
In meiosis 1 the homologous chromosomes separate from each other, whereas, in meiosis 2 the sister chromatids separate. In meiosis 1 two diploid daughter cells are produced, whereas, in meiosis 2 four haploid daughter cells are produced.
<br><br>
Why is meiosis 1 also known as reductional division?
Meiosis 1 is known as reductional division because in this process the number of chromosomes is reduced to half, i.e., from diploid to haploid.
<br><br>
2=Stages of Meiosis II
The four stages of meiosis II are as follows:-
<br><br>
Prophase II – It immediately sets off after the cytokinesis when the daughter cells are formed. The chromosomes begin to condense accompanied by the dissolution of the nuclear membrane and the disappearance of the Golgi apparatus and ER complex.
<br><br>
Metaphase II – The chromosomes are connected to the centriole poles at the kinetochores of sister chromatids through the microtubules. They also get aligned at the equator to form the metaphase plate.
<br><br>
Anaphase II – In this phase of meiosis II,  there is a simultaneous splitting of the centromere of each chromosome and the sister chromatids are pulled away towards the opposite poles. As the chromatids move towards the poles, the kinetochore is at the leading edge with the chromosomal arms trailing.
<br><br>
Telophase II – The chromosomes dissolve again into an undifferentiated lump and a nuclear envelope develops around it. Followed by cytokinesis, telophase II marks the end of meiosis. Four haploid daughter cells are formed as a result.
<br><br>
Significance of Meiosis
Reproduction in animals takes place through the fusion of gametes i.e. two cells fuse together with their genetic material to develop a zygote. If germ cells, which give rise to gametes, also maintains their ploidy during division like the somatic cells, the zygote will have an accumulation of chromosomes in its nucleus. This accumulation will keep on increasing with every subsequent generation. Meiosis offers a very smart solution to this problem as it reduces the number of chromosomes in the gametes to half of their parent germ cells. Moreover, prophase I of meiosis allows recombination of homologous chromosomes.
<br><br>
This recombination is essential for the variation to be introduced in the genetic makeup of the gametes as this variation only holds the key to evolution through sexual reproduction.
<br><br>


20=Aim Of The Experiment
To study and demonstrate mitosis by preparing the mount of an onion root tip cells.
<br><br>

Theory Of The Experiment
For entities to mature, grow, maintain tissues, repair and synthesize new cells, cell division is required. Cell division is of two types:
<br><br>
Mitosis
<br>
Meiosis
<br>
Mitosis
<br>
In mitosis, the nucleus of the Eukaryotic cells divides into two, subsequently resulting in the splitting of the parent cells into two daughter cells. Hence, every cell division involves two chief stages:
<br>
Cytokinesis – Cytoplasm division
<br>
Karyokinesis – Nucleus division
<br>
Stages Of Mitosis
The various stages of mitosis are:
<br>
1. Prophase
<br>
The process of mitosis is initiated at this stage wherein coiling and thickening of the chromosomes occurs
Shrinking and hence the disappearance of the nucleolus and nuclear membrane takes place
The stage reaches its final state when a cluster of fibres organizes to form the spindle fibres.
<br><br>
2. Metaphase
<br><br>
Chromosomes turn thick in this phase. The two chromatids from each of the chromosomes appear distinct
Each of the chromosomes is fastened to the spindle fibres located on its controller
Chromosomes align at the centreline of the cell
<br><br>
3. Anaphase
<br><br>
Each of the chromatid pair detaches from the centromere and approaches the other end of the cell through the spindle fibre
At this stage, compressing of the cell membrane at the centre takes place.
<br><br>
4. Telophase
<br><br>
*Chromatids have reached the other end of the cell
*The disappearance of the spindles
*Chromatin fibres are formed as a result of uncoiling of daughter chromosomes
*The appearance of two daughter nuclei at the opposing ends due to the reformation of the nucleolus and nuclear membrane
*At this phase, splitting of the cell or cytokinesis may also occur.
<br><br>
Post mitosis, the next stage is referred to as interphase which is part of the cell cycle that is non-dividing and between two consecutive cell divisions. A cell spends most of its life in the interphase. It comprises the G1, S and G2 stages.
<br><br>



  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 19   )</h2>

    <div class="value-img">
      <img src="12/19.jpg" data-action="zoom" data-original="12/19.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
