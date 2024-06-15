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
  <title>page 92</title>
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

  text-align: left;
  padding: 8px;

}

h1 {text-align: center;}

</style>
</head>
<body>




 <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="#" onclick="window.history.go(-1)">back</a>
    <a href="../../chapter7.php">return to chapter</a>
    
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
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;"></h1>
  




</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 92    )</h2>

    <div class="value-img">
      <img src="7/92.jpg" data-action="zoom" data-original="7/92.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>

<!-- qustion and ans -->
<div class="container">


<br><br><br>
	<h1><p style="color: blue;"><b> 7. Introduction to Microbiology </b></p></h1><br><br>

<b>Question 1:</b><br>
Rewrite the following statements using correct of the options and explain the completed statements.<br>
(gluconic acid, coagulation, amino acid, acetic acid, Clostridium, Lactobacilli)<br>
a. Process of -- -- -- -- of milk proteins occurs due to lactic acid.<br>
b. Harmful bacteria in like -- -- -- in the intestine are destroyed due to probiotics.<br>
c. Chemically, vinegar is -- -- --.<br>
d. Salts which can be used as supplement of calcium and iron are obtained from -------- acid.<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
a.  Process of <b><u>coagulation</u></b> of milk proteins occurs due to lactic acid.<br>
b. Harmful bacteria in like<b> <u>Clostridium </u></b>in the intestine are destroyed due to probiotics.<br>
c. Chemically, vinegar is<b> <u>acetic acid.</u></b><br>
d. Salts which can be used as supplement of calcium and iron are obtained from<u><b> gluconic </b></u>acid.<br>
<br><br><br>


<b>Question 2:</b><br>
Match the pairs<br>
 
<br>
<br>
<table style="width:50%">
  <tr>
    <th>'A' Group</th>
    <th>'B' Group</th> 
    
   
  </tr>
  <tr>
    <td>a.	Xylitol</td>
    <td>1.	Pigment</td>
    
  </tr>
  
  <tr>
    <td>b.	Citric acid	</td>
    <td>2.	To impart sweetness</td>
   
 </tr>
  
  <tr>
    <td>c.	Lycopene</td>
    <td>3.	Microbial restrictor</td>

   </tr>

<tr>
  <td>d.	Nycin</td>
    <td>4.	Protein binding emulsifier</td>
    </tr>

<tr>
  <td></td>
    <td>
 	 	5.	To impart acidity</td>
    </tr>

</table>
</body>
</html>
<br>
<br>
<br>
 	

<p style="color:green;"><b>ANSWER:</b></p><br><br>
 
<br>
<br>
<table style="width:50%">
  <tr>
    <th>'A' Group</th>
    <th>'B' Group</th> 
    
   
  </tr>
  <tr>
    <td>a.	Xylitol</td>
    <td>2.	To impart sweetness</td>
    
  </tr>
  
  <tr>
    <td>b.	Citric acid</td>
    <td>5.	To impart acidity</td>
   
 </tr>
  
  <tr>
    <td>c.	Lycopene</td>
    <td>1.	Pigment</td>

   </tr>

<tr>
  <td>d.	Nycin</td>
    <td>	3.	Microbial restrictor</td>
    </tr>


</table>
</body>
</html>
<br>
<br>
<br>
 	
 
<b>Question 3:</b><br>
Answer the following.<br>
a. Which fuels can be obtained by microbial processes? Why is it necessary to increase the use of such fuels?<br>
b. How can the oil spills of rivers and oceans be cleaned?<br>
c. How can the soil polluted by acid rain be made fertile again?<br>
d. Explain the importance of biopesticides in or ganic farming.<br>
e. Which are the reasons for increasing the popularity of probiotic products?<br>
f. How the bread and other products produced using baker’s yeast are nutritious?<br>
g. Which precautions are necessary for proper decomposition of domestic waste?<br>
h. Why is it necessary to ban the use of plastic bags?<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
<b>a.</b> There are different kinds of fuel which can be produced with the help of microbes. Some of the examples of such fuels are:<br>
<br>
<b>1. Ethanol-</b> It is a byproduct which is produced during fermentation of molasses by Saccharomyces. It is a type of alcohol and is a clean (smokeless) fuel. It is mixed with petrol and diesel to prevent vehicular emission.<br>
<br>
<b>2. Methane- </b>Methane is a gaseous fuel which is obtained by microbial anaerobic decomposition of urban agricultural and industrial waste.<br>
<br>
<b>3. Hydrogen fuel:</b> Hydrogen is released during bio-photolysis of water in which bacteria perform photoreduction. It is considered as the fuel of future as it is non polluting and an efficient fuel.<br>
<br>
Fuels which are obtained from fossil fuels are non renewable and also polluting. These fuels like hydrogen, ethanol, methane are the future fuels as they burn cleaner with more less same efficiency and are renewable. Thus, their use needs to be promoted further.<br>
<br>
<b>b.</b> Oil spills are a form of pollution in which liquid fuels, like petroleum are spilled on water, land or air. Oil spills usually occur in oceans where there is accidental leakage of oil. It is harmful to the aquatic life as it reduces the availability of oxygen and would eventually result in their death. It is difficult to clear out oil spills as the methods used are not much efficient and take a lot of time. To solve this issue, a new approach has been developed which uses bacteria known as hydrocarbonoclastic bacteria (HCB) for this purpose. These group of bacteria are capable of degrading pyrimidines and other chemicals. They convert hydrocarbons to CO2 and oxygen. Pseudomonas sp. and Alcanovorax borkumensis are used for this purpose.<br>
<br>
<b>c. </b> The sulphuric acid which is a part of acid rain and is released from various industries is a common pollutant of soil. Soil which has been polluted by sulphuric acid cannot be used for cultivation of plants. However, there is a way of treating this soil to make it fertile again. Microorganisms like Acidophillium sp. and Acidobacillus ferroxidens can be used in the treatment of soil polluted with sulphuric acid.<br>
<br>
<b>d. </b>Biopesticide is a term used for bacterial and fungal toxins which can be used to destroy pests/pathogens/insects and can be directly integrated into the plants. The special characteristics of biopesticide is that they do not harm the plant or other organisms except its target organism. Some of the examples of biopesticides are-<br>
 
<br>
 Bacillus thuringiensis (Bt) is used to control butterfly caterpillars. This bacterium is available in sachets as dried spores, which are sprayed on the crops. The spores get into the gut of the larvae and kill it while the other insects remain unperturbed.<br>
<br>
By methods of genetic engineering, the genes of B. thuringiensis responsible for killing the larvae have been incorporated into the plants. Cotton plant with Bt gene incorporated is called Bt-cotton.<br>
<br>
The fungus Trichoderma living in roots of plants acts as a biocontrol agent against several plant pathogens.<br>
<br>
Baculoviruses, particularly genus Nucleopolyhedrovirus are also used as narrow spectrum insecticidal agents.<br>
<br>
 <b>e.</b> Probiotics are such edible preparations which contain useful active bacteria, like Lactobacillus, Acidophilus, Lactobacillus casei, Bifidobacterium bifidum, etc. There are various reasons for which probiotics are being promoted nowadays. These bacteria are beneficial for the intestine as they help in the process of metabolism. They are usually given when a person is suffering from diarrhoea or is under antibiotic treatment. Antibiotics kill both beneficial and harmful bacteria present in our body, thus affecting the metabolic process. These probiotics form the colonies of useful microbes in alimentary canal and thus aid in the digestion process.

 <br>
<b>f.</b> Baker's yeast is commonly used in food production. It's major application is in the food 
industry where it is used in variou baking procedures as well as for fermentation purposes. Fermentation of fruit juices, maple syrup, sugar molasses etc. with the help of yeast yields ethanol whereas it is used in baking breads and other products as it provides them with a fluffy and spongy characteristic. Apart from this, yeast is also a rich source of carbohydrates, fats, proteins, various vitamins, and minerals which means it also increases the nutritive value of the product to which it is added.<br>
<br>
<b>g.</b> Domestic waste refers to the waste which is generated in our houses due to our daily activities. Domestic waste can be either biodegradable or non biodegradable for example, vegetable and fruit peels are biodegradable whereas batteries, computers etc are non biodegradable. biodegardable products can be used for making composts which can be used in parks, plant pots etc. For non biodegradable products we need to practice the 3R's and only after that they should be discarded as waste. The 3R's are -<br>
<br>
<b>Reduce- </b>Reduce the amount of waste produced.<br>
<b>Reuse-</b> Reusing a resource in a new way before throwing it.<br>
<b>Recycle-</b> Making something new from a material rather than throwing it away.<br>
<br>

<b>h.</b> Plastic bags are non biodegradable products which pose a serious threat to the environment. Non biodegradable products do not decompose easily and thus keep on accumulating in the <br>
environment. There are various other reasons for which plastic bags should be banned, for example:
plastic bags, on getting into drains and sewer system, choke them up resulting in spilling of dirty water on the roads<br>
burning of plastic bags produces harmful gases, which can cause health problems
street animals may consume these plastic bags, which may even result in their deaths.<br>
<br><br><br>


<b>Question 4:</b>
Complete the following conceptual picture.<br>

  <img src="image/question 4 dig.png" data-action="zoom" data-original="image/question 4 dig.png" alt="journey_start_thumbnail" />
  <br><br>  

<p style="color:green;"><b>ANSWER:</b></p><br><br>

 <img src="image/question 4 ans dig.png" data-action="zoom" data-original="image/question 4 ans dig.png" alt="journey_start_thumbnail" />
  <br><br> 



<b>Question 5:</b><br>
Give scientific reasons.<br>
a. Use of mutant strains has been increased in industrial microbiology.<br>
b. Enzymes obtained by microbial process are mixed with detergents.<br>
c. Microbial enzymes are used instead of chemical catalysts in chemical industry.<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
a. Mutant varieties of microorganisms are different from the original microorganism. Mutant varieties are created by insertion of genes of interest in a particular organism through a technique called genetic engineering. Mutant microorganisms have characteristics which are not present in the original strain and thus make them useful for various purposes.<br>
<br>
b. Enzymes obtained by microbial process are mixed with detergents because it makes the cleaning process efficient. Addition of enzymes to detergents makes them efficient in removing dirt with an added advantage of being able to work at lower temperatures.<br>
<br>
c. Microbial catalysts are also known as biocatalysts. Microbial catalysts are preferred over chemical catalysts for various reasons like: <br>
<br>
Lesser byproducts are formed in case of microbial enzymes which means the cost of purification is minimised.<br>
Microbial enzymes can function at low temperatures, pH and pressure, thus saving the energy.
Enzymes which are used in these processes can be reused as they do not decompose during these processes.<br>
Use of enzymes also reduces the amount of environmental pollution.<br>
<br>

 

<b>Question 6:</b><br>
Complete the following conceptual picture with respect to uses.<br>

<img src="image/question 6 dig.png" data-action="zoom" data-original="image/question 6 dig.png" alt="journey_start_thumbnail" />
  <br><br> 



<p style="color:green;"><b>ANSWER:</b></p><br><br>

<img src="image/quesation 6 ans dig.png" data-action="zoom" data-original="image/quesation 6 ans dig.png" alt="journey_start_thumbnail" />
  <br><br>


<b>Question 7:</b><br>
Complete the following conceptual picture related to environmental management.<br>
<br>

<img src="image/quesation 7 dig.png" data-action="zoom" data-original="image/quesation 7 dig.png" alt="journey_start_thumbnail" />
  <br><br>

<p style="color:green;"><b>ANSWER:</b></p><br><br>

<img src="image/quesation 7 ans dig.png" data-action="zoom" data-original="image/quesation 7 ans dig.png" alt="journey_start_thumbnail" />
  <br><br>



<b>Question 8:</b><br>
Answer the following.<br>
a. What is role of microbes in compost production?<br>
b. What are the benefits of mixing ethanol with petrol and diesel?<br>
c. Which plants are cultivated to obtain the fuel?<br>
d. Which fuels are obtained from biomass?<br>
e. How does the bread become spongy?<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
 a. Microbes play an important role in various aspects of our lifes. One such important role is the formation of compost. The biodegradable waste which is collected from all around the cities are placed in landfill sites. Landfill sites are created by digging deep pits away from residential areas and the biodegradable waste is dumped into it. The conversion of this waste is then carried out by various kinds of microorganisms, specially aerobic bacteria and some kind of fungi. It takes time for formation of compost and then the landfill site is again ready to use while the compost can be used in agricultural fields, parks etc.<br>
<br>
b. Nowadays, many countries are practicing mixing of ethanol with petrol and diesel. Ethanol is a clean burning fuel and reduces the vehicle exhaust emissions. Also. it is an easily available and cheap source which makes it suitable for this purpose.<br>
<br>
c. Biofuels can be obtained from cultivating plants like corn, sugarcane, palm oil, jatropha, soybean, switchgrass and rapeseed.<br>
<br>
d. Fuels which are obtained from biomass are called bio fuels and they are an important and renewable source of energy. Biofuels can be in the form of either solid, liquid or gases.
Solid biofuels- coal, dung, crop residue<br>
Liquid- vegetable oils, alcohol<br>
Gaseous- gobar gas, coal gas<br>
<br>
e. Breads become spongy due to the addition of yeast in their dough. Yeast reproduces rapidly and produces carbon dioxide gas while respiring. This gas fills the dough and increases its volume making it to rise, thus making the bread appear spongy and fluffy.
<br>


</div>




<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
