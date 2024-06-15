
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
  <title>page 21</title>
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
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;"> </h1>
  <p >
    

  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 21   )</h2>

    <div class="value-img">
      <img src="12/21.jpg" data-action="zoom" data-original="12/21.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>

<div class="container">

<br><br><br>
	<h1><p style="color: blue;"><b> Chapter 2. Life Processes in living organisms Part -1 </b></p></h1><br><br>

<br>

<b>Question 1:</b><br>
Fill in the blanks and explain the statements.<br>
a. After complete oxidation of a glucose molecules, ---- --- --- number of ATP molecules are formed.<br>
b. At the end of glycolysis, ---- --- -- molecules are obtained.<br>
c. Genetic recombination occurs in -- -- -- phase of prophase of meiosis-I.<br>
d. All chromosomes are arranged parallel to equatorial plane of cell in -- -- -- phase of mitosis.<br>
e. For formation of plasma membrane, --- --- --- molecules are necessary.<br>
f. Our muscle cells perform -- -- -- type of respiration during exercise.<br>
<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
a. After complete oxidation of a glucose molecules, <b style="color:green;"><u> 38</u></b>  number of ATP molecules are formed.<br><br>
b. At the end of glycolysis<b style="color:green;"><u> pyruvic acid, ATP, NADH2 and water </u></b>molecules are obtained.<br><br>
c. Genetic recombination occurs in <b style="color:green;"> <u> pachytene</u> </b> phase of prophase of meiosis-I.<br><br>
d. All chromosomes are arranged parallel to equatorial plane of <b style="color:green;"><u> cell in metaphase</u></b></b> phase of mitosis.<br><br>
e. For formation of plasma membrane, <b style="color:green;"> <u> phospholipid </u> </b> molecules are necessary.<br><br>
f. Our muscle cells perform <b style="color:green;"> <u> anerobic </u> </b> type of respiration during exercise.<br><br>
<br>


<b>Question 2:</b><br>
Write definitions.<br>
a. Nutrition<br>
b. Nutrients<br>
c. Proteins<br>
d. Cellular respiration<br>
e. Aerobic respiration<br>
f. Glycolysis<br>
<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br>
a. <b>Nutrition:</b> The process by which organisms take up nutrients and utilise these nutrients for various biological activities is called nutrition. Nutrition can be categorised as autotrophic or heterotrophic. Autotrophic nutrition refers to the process by which organisms synthesise their own food from inorganic raw materials, for example, green plants and some bacteria.<br>
In heterotrophic nutrition, the organisms are unable to use light energy for the synthesis of food and are dependant on other organisms to fulfil their energy requirements.<br>
<br>
b. <b>Nutrients:</b> Nutrient is a substance available in food that helps us to stay healthy. The main nutrients available in food are carbohydrates, fats, proteins, vitamins, minerals and roughage.<br>
<br>
c.<b> Proteins:</b> Proteins are a type of biomolecules which are made up of amino acids. A protein is made up of several amino acids which are linked together by peptide bonds. They play various roles like help in body building, repairing worn out cells and keeping us healthy.<br>
<br>
d.<b> Cellular respiration:</b> Cellular respiration is a process in which respiratory substrates such as starch, glucose, fats and proteins are broken down to release energy. This energy is then trapped for the synthesis of ATP to release CO2.
<br>
<br>
e. <b>Aerobic respiration:</b> Cellular respiration occurs by two processes i.e. aerobic and anaerobic respiration. The process by which the breakdown of carbohydrates occurs in the presence of oxygen resulting in the release of energy in the form of ATP is called aerobic? respiration.?<br>
<br>
f.<b> Glycolysis is the first step in respiration:</b> In this step, six-carbon glucose is broken down into a three-carbon molecule called pyruvate. This does not require oxygen. One glucose molecule produces 2 pyruvate molecules.?<br>
<br>
<br>
<br>

<b>Question 3:</b><br>
Distinguish between<br>
a. Glycolysis and TCA cycle.<br>
b. Mitosis and meiosis.<br>
c. Aerobic and anaerobic respiration.<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br>
a.
<br>
<br>
<table style="width:50%">
  <tr>
    <th>Krebs Cycle/TCA cycle</th>
    <th>Glycolysis</th> 
   
  </tr>
  <tr>
    <td>It is a cyclic pathway.</td>
    <td>It is a linear pathway.</td>
    
  </tr>
  
  <tr>
    <td>Substrate is acetyl-CoA.</td>
    <td>Substrate is glucose.</td>
    
  </tr>
  
  <tr>
    <td>Occurs in the matrix of mitochondria</td>
    <td>Occurs in the cytoplasm</td>
   </tr>

<tr>
  <td>It produces oxaloacetic acid, NADH , FADH2, ATP and CO2.</td>
    <td>It produces pyruvic acid, NADH and ATP.</td>
    </tr>

<tr>
  <td>It does not consume ATP.</td>
    <td>It consumes 2 ATP molecules.</td>
    </tr>

    <tr>
  <td>It generates 2 GTP/ATP molecules from 2 acetyl-CoA molecules.</td>
    <td>It generates 2 ATP molecules from 1 glucose molecule.</td>
    </tr>

    <tr>
  <td>Occurs only in eukaryotes</td>
    <td>Occurs in eukaryotes as well as in prokaryotes</td>
    </tr>
    <tr>

</table>
</body>
</html>
<br>
<br>
<br>

b.
<br>
<br>
<table style="width:50%">
  <td></td>
    <td><b>Anaerobic respiration</b></td>
    <td></td>
    <td>Aerobic Respiration</td>
    </tr>
    <tr>
  <td>(i)</td>
    <td>It involves the partial breakdown of glucose.</td>
    <td>(i)</td>
    <td>It involves the complete breakdown of glucose into CO2 and H2O.</td>
    </tr>

    <tr>
  <td>(ii)</td>
    <td>A net gain of only 2 molecules of ATP occurs.</td>
    <td>(ii)</td>
    <td>A net gain of 36 molecules of ATP occurs.</td>
    </tr>

<tr>
  <td>(iii)</td>
    <td>Here, oxidation of NADH to NAD+ is a slow reaction.</td>
    <td>(iii)</td>
    <td>Here, oxidation of NADH to NAD+ is a vigorous reaction.</td>
    </tr>
</table>
</body>
</html>
<br>
<br>
<br>
c.
<br>
<br>
<table style="width:50%">


<tr>
	<td></td>
  <td><b>Mitosis</b></td>

  <td></td>
    <td><b>Meiosis</b></td>
    </tr>

    <tr>
  <td>(i)</td>
    <td>It involves single division, resulting in the formation of two daughter cells.</td>
    <td>(i)</td>
    <td>It involves two successive divisions, namely meiosis I and II, resulting in the formation of four daughter cells.</td>
    </tr>

    <tr>
  <td>(ii)</td>
    <td>It is also known as equational division as the daughter cell has the same number of chromosomes as the parent cell.
</td>
    <td>(ii)</td>
    <td>Meiosis I is known as reductional division where the chromosome number is reduced to half. Meiosis II is known as equational division where the sister chromatids separate while the chromosome number remains the same.</td>
    </tr>

<tr>
  <td>(iii)</td>
    <td>The prophase stage is short and does not comprise of synapsis, crossing over, and the formation of chiasmata.</td>
    <td>(iii)</td>
    <td>Prophase I stage is very long. It comprises of five stages. In the zygotene stage of meiosis I, the pairing of homologous chromosomes takes place. During the pachytene stage, crossing over occurs while in the diplotene stage, chiasmata formation occurs.</td>
    </tr>

    <tr>
  <td>(iv)</td>
    <td>It plays a significant role in cell growth, repair, and healing of wounds.</td>
    <td>(iv)</td>
    <td>It brings about variation and maintains constant chromosome number from one generation to another.</td>
    </tr>

    <tr>
    	<td>(v)</td>
    	<td>It mainly takes place in the somatic cells.</td>
    	<td>(v)</td>
    	<td>It mainly takes place in the reproductive cells.</td>



    </tr>

</table>
</body>
</html>


<br><br><br>

<b>Question 4:</b><br>
Give scientific reasons.<br>
a. Oxygen is necessary for complete oxidation of glucose.<br>
b. Fibers are one of the important nutrients.<br>
c. Cell division is one of the important properties of cells and organisms.<br>
d. Sometimes, higher plants and animals too perform anaerobic respiration.<br>
e. Kreb's cycle is also known as citric acid cycle.<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
a. Glucose can be used by two pathways i.e. aerobic and anaerobic respiration. Glucose is completely oxidised only in the presence of oxygen and results in the release of energy. It undergoes three steps to finally reach its fate - glycolysis, Kreb's cycle and electron transport chain reaction. In anaerobic respiration, glucose undergoes partial oxidation and results in the release of energy which is comparitvely less to the energy released during aerobic respiration.
<br><br>
b. Fibers are one of the imporatant nutrients beacuse they help in the digestion of foods although they themselves are not digestable. They help in the egestion of undigested substannces which is also a reason why we are advised to have fiber rich food in case of constipation. Fibers are naturally present in leafy vegetables, fruits, cereals, etc.<br>
<br>
c. Cell division is is one of the important properties of cells and organisms because:<br>
<br>
it is the means of asexual reproduction in unicellular organisms<br>
the zygote which is formed of single cell, transforms into an adult composed of millions of cells formed by successive divisions<br>
it is the basis of repair for old and worn out tissues<br>
it also results regeneration of organisms<br>
it forms the basis of evolution to various life forms<br>
<br>
d. When availability of oxygen is limited, higher animals and plants can also show anaerobic respiration. For example, during exercise the availability of oxygen to the muscles is limited, as a result of which they undergo anaerobic respiration and results in the production of lactic acid. Similarly plants may also show anaerobic respiration in case of water logged roots and result in the production of ethyl alcohol, carbon dioxide and energy. Althought the energy obatained through anerobic respiration is less as compared to the energy released during aerobic respiration.<br>
<br>
e. Krebs cycle is also known as citric acid cycle because the first product formed during the cycle is citric acid. Citric acid is formed by the condensation of an acetyl group with oxaloacetic acid and water.<br>
<br>
<br>

<b>Question 5:</b><br>
Answer in detail.<br>
a. Explain the glycolysis in detail.<br>
b. With the help of suitable diagrams, explain the mitosis in detail.<br>
c. With the help of suitable diagrams, explain the five stages of prophase-I of meiosis.<br>
d. How all the life processes contribute to the growth and development of the body?<br>
e. Explain the Kreb's cycle with reaction.<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
<img src="image/quesation 5 dig a.jpg" data-action="zoom" data-original="image/quesation 5 dig a.jpg" alt="journey_start_thumbnail" />
<br>
<br>
a. Glycolysis was first given by Embden, Meyerhof and Parnas, and is referred to as EMP pathway. This process occurs in the cytoplasm of the cell and is present in all living organisms.<br> 
<br>

In this pathway, glucose undergoes partial oxidation to form two molecules of pyruvic acid, which can enter either Krebs cycle (in the case of aerobic respiration) or fermentation pathway (in the case of anaerobic respiration). In the course of conversion of glucose into pyruvate, energy is produced in the form of two molecules of ATP.<br>
<br>
The steps involved in the partial oxidation of glucose to form pyruvate are as follows:<br>
<br>

b. 
Mitosis is the process of equational cell division where daughter cells, so produced, contain an equal number of chromosomes as that in the parent cell. The various stages of mitosis in an animal cell are as follows:<br>
<br>
<img src="image/quesation 5 dig b (i).jpg" data-action="zoom" data-original="image/quesation 5 dig b (i).jpg" alt="journey_start_thumbnail" />
<br>
<b>(i) Prophase:</b> It is the first stage of mitosis that is marked by the initiation of the condensation of chromosomal material. Each chromosome is composed of two chromatids, which are attached by the centromere. At the end of prophase, the mitotic spindle begins to form from the centrioles. The nuclear membrane and the nucleolus disappear completely by the end of this stage.
<br>
<img src="image/quesation 5 dig b (ii).jpg" data-action="zoom" data-original="image/quesation 5 dig b (ii).jpg" alt="journey_start_thumbnail" />
<br>
<b>(ii) Metaphase:</b> It is the second stage of mitosis in which the condensation of the chromosomal material and the spindle formation gets complete. The spindle fibres get attached to the kinetochores of the chromosomes and the chromosomes get aligned along the metaphase plate in the middle of the nucleus.<br>

<br>
<img src="image/quesation 5 dig b (iii).jpg" data-action="zoom" data-original="image/quesation 5 dig b (iii).jpg" alt="journey_start_thumbnail" />
<br>
<b>(iii) Anaphase: </b>It is the stage of mitosis where the centromere of the chromosomes split and the chromatids get separated. The contraction of the spindle fibres moves the sister chromatid apart, towards the two opposite poles.<br>
<br>
<img src="image/quesation 5 dig b (iv).jpg" data-action="zoom" data-original="image/quesation 5 dig b (iv).jpg" alt="journey_start_thumbnail" />
<br>

<b>(iv) Telophase:</b> It is the last stage of mitosis. In this stage, chromosomes finally reach their respective poles. The spindle fibres disappear and the nuclear envelope reappears around the chromosome cluster. Also, the nucleolus, Golgi complex, endoplasmic reticulum, and other cell organelles re-appear.<br>

<br>

c. Prophase I is the longest phase of meiosis and is further sub divided into 5 phases:<br>
<br>
<b>Leptotene -</b> Condensation makes chromosomes become distinct and compact.<br>
<br>

<b>Zygotene -</b> Homologous chromosomes start pairing together by a process called synapsis to form a complex structure called synaptonemal complex. Two synapsed homologous chromosomes form a complex called bivalent or tetrad.<br>
<br>
<b>Pachytene -</b> Longest phase of prophase I<br>
Recombination nodules appear in this stage at the sites where crossing over has to take place<br> between non-sister chromatids of homologous chromosomes.<br>
<br>
<b>Diplotene -</b> Synaptonemal complex dissolves and recombinants separate from each other except at crossover sites to form X-shaped structure called chiasmata.<br>
<br>
<b>Diakinesis -</b> Chiasmata terminalises and chromosomes condense. Meiotic spindle assembles and nucleolus and nuclear envelope disappear.<br>
<br>
d. Life processes are processes which are required to maintain body functions and are necessary for survival. The important life processes are nutrition, transportation, metabolism, reproduction, respiration, and excretion. All these processes work together and result in the growth and development of the body. For example, nutrition is the process by which we take up nutrients which are used by the cells to meet their respective needs. This is a vital process which helps living beings to obtain their energy from various sources. Respiration is associated with the exchange of gases as well as burning of food. It results in the breakdown of glucose and release of oxygen. Similarly, cell cycle and cell division play an important role in the growth and development of the organisms. They help in the formation of new organisms as well as repair of dead and damaged cells and tissues.<br>
<br>

<br>
<img src="image/quesation 5 dig e.jpg" data-action="zoom" data-original="image/quesation 5 dig e.jpg" alt="journey_start_thumbnail" />
<br>

e. Krebs cycle is a cyclic process that occurs in the mitochondrial matrix, in the presence of oxygen.<br>
<br>
<b>Step 1:</b> The cycle starts with the condensation of an acetyl group with oxaloacetic acid and water to form citric acid, with a release of CoA molecule. The enzyme involved in this conversion is citrate synthase.<br>
<br>
<b>Step 2:</b> Citrate then isomerises to form isocitrate.<br>
<br>
<b>Step 3:</b> The synthesis of citrate is followed by two successive steps of decarboxylation - first, the formation of a-ketoglutaric acid, and then, that of succinyl-CoA.
<br>
<b>Step 4:</b> This succinyl-CoA gets oxidised to form malic acid, which in turn gets converted into oxaloacetic acid, thereby allowing the cycle to continue.<br>
<br>
The entire process of Krebs cycle can be represented as follows:<br>
<br>

<br>

<b>Question 6:</b>
How energy is formed from oxidation of carbohydrates, fats and proteins? Correct the diagram given below.<br>
<br>
<img src="image/question 6 que dig.png" data-action="zoom" data-original="image/question 6 que dig.png" alt="journey_start_thumbnail" />
<br>

<p style="color:green;"><b>ANSWER:</b><br><br></p>
<img src="image/question 6 ans dig.png" data-action="zoom" data-original="image/question 6 ans dig.png" alt="journey_start_thumbnail" />
<br>
 Carbohydrates are the major sources of energy and this energy is produced in the form of ATP. Glucose which is a type of carbohydrate undergoes oxidation in the presence of oxygen to produce ATP. It undergoes three steps to get completely oxidised and the end products which are obtained are CO2, energy and water. Glucose may also undergo anaerobic respiration under certain circumstances.<br>
Proteins are biomolecules which are made up of several amino acids that are joined together by peptide bonds. For every 1 gram of protein which is digested 4 Kcal energy is released. Proteins are digested and broken down into amino acids which are then absorbed by the various cells of the body. These amino acids are then used for the synthesis of proteins required by cells and the body.<br>
Fats are molecules which are made up of fatty acids and glycerol. Digestion of fats yield fatty acids which are absorbed by the cells and used as per their requirement. For example, fatty acids are used for producing hormones like progesterone, estrogen etc.<br>


</div>





<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
