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
  <title>page 100</title>
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
    <a href="../../chapter18.php">return to chapter</a>
    
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
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 100  )</h2>

    <div class="value-img">
      <img src="18/100.jpg" data-action="zoom" data-original="18/100.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>

<!-- que & ans -->
<div class="container">

<h1><p style="color: blue;"><b> 8. Cell Biology and Biotechnology</b></p></h1><br><br>

<b>Question 2:</b><br>
Match the pairs.
 <br>
<br>
<table style="width:50%">
  <tr>
    <th>'A' Group</th>
    <th>'B' Group</th> 
    
   
  </tr>
  <tr>
    <td>a.	Interferon</td>
    <td>	1.	Diabetes</td>
    
  </tr>
  
  <tr>
    <td>b.	Factor</td>
    <td>2.	Dwarfness</td>
   
 </tr>
  
  <tr>
    <td>c.	Somatostatin</td>
    <td>3.	Viral infection</td>

   </tr>

<tr>
  <td>d.	Interleukin</td>
    <td>4.	Cancer</td>
    </tr>
<tr>
  <td></td>
    <td>	5.	Hemophilia</td>
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
    <td>a.	Interferon</td>
    <td>3.	Viral infection</td>
    
  </tr>
  
  <tr>
    <td>b.	Factor</td>
    <td>5.	Hemophilia</td>
   
 </tr>
  
  <tr>
    <td>c.	Somatostatin</td>
    <td>2.	Dwarfness</td>

   </tr>

<tr>
  <td>d.	Interleukin</td>
    <td>4.	Cancer	</td>
    </tr>


</table>
</body>
</html>
<br>
<br>
<br>







<b>Question 3:</b><br>
Rewrite the following wrong statements after corrections.<br>
a. Changes in genes of the cells are brought about in non-genetic technique.<br>
b. Gene from Bacillus thuringiensis is introduced into soyabean.<br>

<p style="color:green;"><b>ANSWER:</b></p><br><br>
a. Changes in genes of the cells are brought about in genetic technique.<br>
b. Gene from Bacillus thuringiensis is introduced into cotton plants.<br>

<br><br><br>
<br>Question 4:</b><br>
Write short notes.<br>
a. Biotechnology: Professional uses.<br>
b. Importance of medicinal plants.<br>

<p style="color:green;"><b>ANSWER:</b></p><br><br>
a. Biotechnology is the branch of biology that involves application of technology in utilising the living organisms or their parts to produce products useful for humans. There are various applications of biotechnology some of which are mentioned below:<br>
<br>
(i) It is used in agriculture to produce improved varieties of plants and animal breeds, and to control pests and pathogens.<br>
<br>
(ii) It is applied in food processing industries to produce additives.<br>
<br>
(iii) It is applied to produce biocatalysts and biopolymers.<br>
<br>
(iv) Many biotechnological processes are applied to control pollution and treat waste water.<br>
<br>
(v) It is applied in the field of health care to produce several vaccines, drugs and hormones like insulin, etc.<br>
<br>

b. Several plants have medicinal properties which can be used as medicines. Some of the plants grown for their medicinal value are:<br>
<br>
<b>Cinchona -</b> Quinine, a drug used in the treatment of malaria, is obtained from the bark of the Cinchona tree.<br>
<br>
<b>Rauwolfia (Sarpagandha) -</b> This plant is used for the treatment of hypertension and insomnia.<br>
<br>
<b>Belladonna -</b> Alkaloids obtained from the roots of this plant are used as pain relievers. It also stimulates respiration and circulation.<br>
<br>
<b>Eucalyptus -</b> The leaves of eucalyptus are used for extracting on oil which is used in the treatment of blocked nose and throat infections. It is also used as a mosquito repellent.

<br><br><br>
<b>Question 5:</b><br>
Answer the following questions in your own words.<br>
a. Which products produced through biotechnology do you use in your daily life?<br>
b. Which precautions will you take during spraying of pesticides?<br>
c. Why some of the organs in human body are most valuable?<br>
d. Explain the importance of fruitprocessing in human life?<br>
e. Explain the meaning of vaccination.<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
a. There are various products which we use in our daily life that are produced by biotechnological processes. These products belong to the category of:<br>
<br>
Medical products like antibiotics, vaccines and insulin.<br>
Fruits and dairy products.<br>
Microbial metabolites like vitamins and enzymes.<br>
Organic acids like acetic acid/vinegar.<br>
<br>
b. Pesticides are chemicals which are used on plants for protecting them against pest infection. They contain variou kinds of chemicals which are harmful to humans as well as the environment. There are certain points which should be taken care of while using pesticides like, cover the nose, mouth and eyes while spraying them, keeping them out of the reach of children. Another important point is to prevent excessive use of pesticides as they also lead to water and soil pollution. Instead one should adopt natural or biological methods to ward off pests.<br>
<br>
c. We know that the human body is a system which is comprised of various types of organs. These organs have specific and important roles to play and in the absence of their functioning, normal body functions cannot be carried out. There are various reasons like aging, accidents, infections, disorders because of which an organ may become non functional. Such situation can eventually result in the death of the patient. However, organ transplant is a solution for such cases. There are organs which can be donated to such people and our thus valuable, for example, heart, kidney, eyes, liver etc.<br>
<br>
d. Fruits are something which we eat everyday. Fruits are called perishable products which means that they cannot be stored for long durations. The solution to this problem is fruit processing. Fruit processing is a process which converts fruits into jams, juices, jellies etc. These processing methods include storage in cold areas, drying salting etc. This process makes the fruits available all around the year and makes their storage possible.<br>
<br>
e. Vaccines are the dead or weakened microorganisms, which help the body in fighting against diseases. Our body reacts to infection by microorganisms by producing certain substances called antibodies. These antibodies kill the invading microorganisms, thereby freeing the body from diseases. In order to protect the body from diseases caused by microorganisms, some dead or weakened microbes are introduced in the body, which cause the production of antibodies. These antibodies then remain in the body for a long period of time protecting the body from diseases. This whole process of introducing vaccines into the body is known as vaccination.
<br>
<br>
<br>
 <b>Question 6:</b><br>


Complete the following chart.<br>
<img src="image/question 6 dig.png" data-action="zoom" data-original="image/question 6 dig.png" alt="journey_start_thumbnail" />

<br>

<p style="color:green;"><b>ANSWER:</b></p><br><br>
<img src="image/question 6 ans dig.png" data-action="zoom" data-original="image/question 6 ans dig.png" alt="journey_start_thumbnail" />


<br><br><br>

<b>Question 7:</b><br>
Write the correct answer in blank circles.<br>


<img src="image/question 7 dig.png" data-action="zoom" data-original="image/question 7 dig.png" alt="journey_start_thumbnail" />



<p style="color:green;"><b>ANSWER:</b></p><br><br>



<br><br><br>


<b>Question 8:</b><br>
Identify and complete the following correlations.<br>
a. Insulin : Diabetes :: Interleukin : -- -- --<br>
b. Interferon : -- :: Erythropoietin : Anemia.<br>
c. ------- : Dwarfness :: Factor VIII : Hemophilia.<br>
d. White revolution : Dairy :: Blue revolution : -- -- -- --.<br>
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
a. Insulin: Diabetes :: Interleukin:<u><b> Cancer</b></u> <br>
b. Interferon: <b><u>Viral infection </u> </b>:: Erythropoietin: Anemia<br>
c. <b><u>Somatostatin </u></b>: Dwarfness :: Factor VIII: Hemophilia<br>
d. White revolution: Dairy :: Blue revolution:<b> <u>Aquatic organisms </u></b><br>

<br><br><br>
<b>Question 9:</b><br>
Write a comparative note on usefulness and harmfulness of biotechnology.
<br>
<p style="color:green;"><b>ANSWER:</b></p><br><br>
  Biotechnology has revolutionised the field of science and technology. It has provided us with solutions to our problems which would not have been possible otherwise. It has found widespread applications in various fields and its many potentials are still being exploited. However, despite the various merits of biotechnology, there are certain demerits also associated with it.
<br>
Merits of biotechnology:
<br>
it has helped in the field of agriculture for the development of stress resistant varieties for example drought resistant, temperature resistant plants etc.<br>
it has been useful in the medical field in the diagnosis and treatment of various kind of diseases.<br>
it is being widely applied in the food industry for producing different kinds of food products on a larger scale.<br>
it's potential for solving environmental problems is also being exploited. For examples, microorganisms are being used to solve the menace of plastics.<br>
<br>
Demerits of biotechnology<br>
Although biotechnology has found a widespread applications in various field, it has its own potential risks. Some of its demerits are:<br>
some of the biotechnological procedures are against nature and natural laws as they involve other living organisms and disturbing their genetic makeup.<br>
new and advanced varieties of crops produced by biotechnology, which are considered to be <br>healthier and better, also have some disadvantages like seed sterility.<br>
it may also lead to the development of antibiotic resistant bacteria<br>
there are various ethical issues associated with products produced by biotechnological processes.


<br>
<br>
<br>

</div>





<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
