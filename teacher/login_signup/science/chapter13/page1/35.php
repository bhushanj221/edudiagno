
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
  <title>page 35</title>
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
    <a href="../../chapter13.php">return to chapter</a>
    
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
  <p ></p>





</div>




<!-- partial:index.partial.php -->

    <div class="container">
  
  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 35  )</h2>

    <div class="value-img">
      <img src="13/35.jpg" data-action="zoom" data-original="3/35.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
   </div>

<!-- Question and answers-->
<div class="container">
  <br><br><br>
	<h1><p style="color: blue;"><b> 3. Life Processes in Living Organisms Part - 2 </b></p></h1><br><br>

<b>Question 2:</b><br>
Fill in the blanks.<br>
a. In humans, sperm production occurs in the organ ----------------.<br>
b. In humans, ------ chromosome is responsible for maleness.<br>
c. In male and female reproductive system of human, ------------- gland is same.<br>
d. Implantation of embryo occurs in ------<br>
e. ---------- type of reproduction occurs without fusion of gametes.<br>
f. Body breaks up into several fragments and each fragment starts to live as a new individual. This is -- -- -- -- -- -- -- type of reproduction.<br>
g. Pollen grains are formed by -- ----- -- -- -- division in locules of anthers.<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
a. In humans, sperm production occurs in the organ <b style="color:green;"><u>testes.</u></b><br>
b. In humans,<b style="color:green;"><u> Y</u></b> chromosome is responsible for maleness.<br>
c. In male and female reproductive system of human,<b style="color:green;"><u> bulbourethral</u></b> gland is same.<br>
d. Implantation of embryo occurs in<b style="color:green;"><u> uterus</u></b>.<br>
e. <b style="color:green;"><u>Asexual</u></b> type of reproduction occurs without fusion of gametes.<br>
f. Body breaks up into several fragments and each fragment starts to live as a new individual. This is <b style="color:green;"><u>fragmentation</u></b> type of reproduction.<br>
g. Pollen grains are formed by <b style="color:green;"><u>meiotic</u></b> division in locules of anthers.<br>
 
<br><br><br>

<b>Question 3:</b><br>
Complete the paragraph with the help of words given in the bracket. (Luteinizing hormone, endometrium of uterus, follicle stimulating hormone, estrogen, progesterone, corpus luteum)<br>
<br>
Growth of follicles present in the ovary occurs under the effect of ----- This follicle secretes estrogen. -- --- - -- -- -- grows / regenerates under the effect of estrogen. Under the effect of --- ---, fully grown up follicle bursts, ovulation occurs and -- --- -- -- is formed from remaining part of follicle. It secrets --- --- -- -- and --- --- -- -- --. Under the effect of these hormones, glands of -- -- -- -- are activated and it becomes ready for implantation.<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
Growth of follicles present in the ovary occurs under the effect of follicle <b style="color:green;"><u>stimulating hormone. </u></b>This follicle secretes estrogen.<b style="color:green;"><u> Endometrium of uterus</b></u> grows/regenerates under the effect of estrogen. Under the effect of <b style="color:green;"><u>luteinizing hormone,</b></u> fully grown up follicle bursts, ovulation occurs and <b style="color:green;"><u>corpus luteum</b></u> is formed from remaining part of follicle. It secretes<b style="color:green;"><u> progesterone</b></u> and <b style="color:green;"><u>estrogen.</b></u> Under the effect of these hormones, glands of <b style="color:green;"><u>endometrium of uterus</b></u> are activated and it becomes ready for implantation.<br>
<br><br>

<b>Question 4:</b><br>
Answer the following questions in short.<br>
a. Explain with examples types of asexual reproduction in unicellular organism.<br>
b. Explain the concept of IVF.<br>
c. Which precautions will you follow to maintain the reproductive health?<br>
d. What is menstrual cycle? Describe it in brief.<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br>


a. Asexual reproduction in unicellular organisms can be of three types:<br>
 <img src="images/quesation 4.jpg" data-action="zoom" data-original="images/quesation 4.jpg" alt="journey_start_thumbnail" />
<br>
<br>
<b>Binary fission:</b> Binary fission is the splitting of parent organisms into two halves, each of which develops to form a complete daughter cell. For example, Amoeba reproduces asexually by the process of binary fission. In Amoeba,binary fission begins with the division of the nucleus. This is followed by the division of the cytoplasm and the cell. Each part receives a portion of the nucleus. Finally, two cells are formed from one parent Amoeba.<br>

<br>

<b>Multiple fission - </b>Multiple fission is also seen in Amoeba. In this method, the parent microbe divides into many daughter microbes. Amoeba shows multiple fission under adverse conditions. It covers itself in a protective covering and forms a structure known as cyst. Inside the cyst, the nuclei undergo repetitive nuclear division followed by cytoplasmic division and result in the formation of amoebules. These amoebules are released together when the conditions turn favourable.<br>
<br>
<b>Budding - </b>In this method, a bud develops as an outgrowth from parent body. This developing bud detaches from the parent body and the daughter individual develops further. For example, yeast reproduces asexually through the method of budding. During this process, small bulb-like projections (called buds) start coming out of the yeast cell. These buds gradually grow in size and get detached from the parent cell to form a new yeast cell. The new yeast cell then grows and becomes mature to form more yeast cells.<br>
 <br>

b. Many couples all over the world are unable to produce children due to various reasons. These couples can be assisted to have children through techniques called assisted reproductive technologies (ART). IVF is one such form of ART which includes different methods that can be a boon for childless couples:<br>
<br>
<b>Surrogacy-</b> This is a technique which is used for women who face problem in implantation of embryo in uterus. In this technique the donor of the oocyte is the women itself who has problem in implanting the embryo in the uterus. The collected oocyte is fertilized with the sperm of her husband in a test tube. The embryo which is obtained after fertilization is implanted in the uterus of another female who is called the surrogate mother.<br>
<b>ZIFT -</b> It stands for zygote intra fallopian transfer. In ZIFT, the sperm from a donor male and the ova from a donor female are fused in the laboratory. The zygote so formed is transferred into the fallopian tube at the 8 blastomeres stage.<br>
<br>
<b>IUT -</b> It stands for intra uterine transfer. In this technique, embryos with more than 8 blastomeres are transferred into the uterus.<br>
<br>
<b>GIFT -</b> It stands for gamete intra fallopian transfer. In GIFT, females who cannot produce ovum, but can provide suitable conditions for the fertilisation of ovum, are provided with ovum from a donor.<br>
<br>
<b>ICSI -</b> It stands for intra cytoplasmic sperm injection. In this method, sperm is directly injected into the cytoplasm of the ovum.<br>
<br>
Artificial insemination - In this technique, the semen collected from the husband or a donor is injected into the vagina or uterus. This cures the infertility arising from the inability of the male partner to ejaculate, or due to low sperm count.<br>
<br>

c. Precautions which should be taken in order to maintain good reproductive health are:<br>
eat a balanced and nutritional diet<br>
maintain personal hygiene<br>
take adequate physical exercise<br>
avoid taking any drugs<br>
<br>
d.  Menstrual cycle is the reproductive cycle in all primates and begins at puberty (menarche).
In human females, menstruation occurs once in 28 to 29 days. The cycle of events starting from one menstruation till the next one is called the menstrual cycle.<br>
<br>
During the middle of the menstrual cycle, one ovum is released (ovulation).<br>
<br>
The cycle starts with the menstrual flow (3 to 5 days), caused due to the breakdown of the endometrium of the uterus. Blood vessels in liquid state are discharged, but this occurs only when the ovum is not fertilised.<br>
<br>
It is followed by the follicular phase. In this phase, the primary follicles mature into the Graafian follicles. This causes the regeneration of the endometrium, follicular growth, and the growing follicles produce oestrogen.<br>
<br>
The LH and FSH are at their peak in the middle of the cycle (14th day) and cause the rupture of the Graafian follicles to release ovum. This phase is called the ovulatory phase.<br>
<br>
In the absence of fertilisation, the corpus luteum degenerates, thereby causing the <br>
disintegration of the endometrium and the start of a new cycle.<br>

<br><br><br> 

 

<b>Question 5:</b>
In case of sexual reproduction, newborn show similarities about characters. Explain this statement with suitable examples.<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
Sexual reproduction involves the fusion of two types of gametes i.e., the male and the female gametes. The zygote formed contains a fusion of both the sperm nucleus and the egg nucleus. Due to this, the new individual has characteristics which are similar to both the parents while some characteristics which are different from both the parents. Thus, the new individual formed from sexual reproduction inherits the characteristics of both the parents. For example, if the father has black hair while the mother has brown hair, the chances are that their offspring may have either black or brown hair.<br> 
<br><br><br>

<b>Question 6:</b><br>
Sketch the labeled diagrams:<br>
a. Human male reproductive system<br>
b. Human female reproductive system<br>
c. Flower with its sexual reproductive organs<br>
d. Menstrual cycle<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
a. Human male reproductive system
<br>
<br>
<img src="images/quesation 6 dig a.png" data-action="zoom" data-original="images/quesation 6 dig a.png" alt="journey_start_thumbnail" />
<br>
<br>

b. Human female reproductive system
<img src="images/quesation 6 dig b.png" data-action="zoom" data-original="images/quesation 6 dig b.png" alt="journey_start_thumbnail" />
<br>
<br>


c. Flower with its sexual reproductive organs
<img src="images/quesation 6 dig c.png" data-action="zoom" data-original="images/quesation 6 dig c.png" alt="journey_start_thumbnail" />
<br>
<br>


d. Menstrual cycle
<img src="images/quesation 6 dig d.png" data-action="zoom" data-original="images/quesation 6 dig d.png" alt="journey_start_thumbnail" />
<br>

<br>
 <br><br><br>


<b>Question 7:</b><br>
Give the names.<br>
a. Hormones related with male reproductive system.<br>
b. Hormones secreted by ovary of female reproductive system.<br>
c. Types of twins.<br>
d. Any two sexual diseases.<br>
e. Methods of family planning.<br>
<br><br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
a. Hormones related with male reproductive system- testosterone<br>
b. Hormones secreted by ovary of female reproductive system- estrogen and progesterone<br>
c. Types of twins- Monozygotic and dizygotic twins<br>
d. Any two sexual diseases- AIDS and Gonorrhea<br>
e. Methods of family planning- Oral pills, condoms, IUD's<br>
 
<br><br><br>

<b>Question 8:</b><br>
Gender of child is determined by the male partner of couple. Explain with reasons whether this statement is true or false.<br>
<br><br>
<p style="color:green;"><b>ANSWER:</b><p><br>
<img src="images/quesation 8.jpg" data-action="zoom" data-original="images/quesation 8.jpg" alt="journey_start_thumbnail" />
<br>
<br>
<img src="images/quesation 8.png" data-action="zoom" data-original="images/quesation 8.png" alt="journey_start_thumbnail" />
<br>
Human females have two X chromosomes (XX) and human males have one X and one Y chromosome (XY). Therefore, the eggs produced by females have only X chromosomes while the sperms produced by males can have either X or Y chromosome. If an unfertilised egg fuses with a sperm containing X chromosome, then it gives rise to a girl child having two X chromosomes. If an unfertilised egg fuses with a sperm containing Y chromosome, then it gives rise to a male child having one X and one Y chromosome.<br>
<br>
<br>


<b>Question 9:</b><br>
Explain asexual reproduction in plants.<br>
<br><br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
Asexual reproduction is the process by which a plant gives rise to a new plant without producing seeds or spores. Asexual reproduction in plants occur by vegetative propogation. The development of a new plant from the vegetative part of a plant like stem, root or leaf is known as vegetative propagation. The various methods of vegetative propogation are:<br>
<br>
<b>From underground stem:</b> A potato plant has an underground stem known as the tuber. It has many buds called eyes. A vegetative bud consists of a short stem, around which immature overlapping leaves are present in a folded state. A bud can give rise to a new plant through asexual reproduction.<br>
<br>
<b>Rhizome: </b>The underground stem of ginger is known as the rhizome which is capable of giving rise to a new plant. Corm is the underground stem as found in Gladiolus. It can also be used for vegetative propagation.<br>
<br>

<b>Through leaves:</b> Leaves perform the function of photosynthesis. However, they can take part in asexual reproduction as well. In some plants, leaves can give rise to a new plant asexually. For example, the leaves of the plant Bryophyllum contain buds on its margins. These buds give rise to a new plant through asexual reproduction.<br>

<br>
<b>From aerial stem:</b> In certain plants, a slender stem arises from the base of the plant and touches the soil, it develops roots and buds at the point of contact with the soil and gives rise to new plants. When the new plant is old enough the stem connecting it to the parent plant withers away.
<br><br><br>

<b>Question 10:</b><br>
Modern techniques like surrogate mother, sperm bank and IVF technique will help the human beings. Justify this statement.<br>
<br><br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
Many couples all over the world are unable to produce children because of various reasons like congenital diseases, drugs, immunological and psychological factors. Such couples can be assisted to have children through techniques called assisted reproductive technologies (ART).  IVF is one such ART and include the following techniques:<br>
 <br><br>

<b>ZIFT -</b> It stands for zygote intra fallopian transfer. In ZIFT, the sperm from a donor male and the ova from a donor female are fused in the laboratory. The zygote so formed is transferred into the fallopian tube at the 8 blastomeres stage.<br>
<b>IUT -</b> It stands for intra uterine transfer. In this technique, embryos with more than 8 blastomeres are transferred into the uterus.<br>
<b>GIFT - </b>It stands for gamete intra fallopian transfer. In GIFT, females who cannot produce ovum, but can provide suitable conditions for the fertilisation of ovum, are provided with ovum from a donor.<br>
<b>ICSI -</b> It stands for intra cytoplasmic sperm injection. In this method, sperm is directly injected into the cytoplasm of the ovum.<br>
<b>Artificial insemination -</b> In this technique, the semen collected from the husband or a donor is injected into the vagina or uterus. This cures the infertility arising from the inability of the male partner to ejaculate, or due to low sperm count.<br>
<b>Surrogacy - </b>Surrogacy is another method which is used for women who face problem in implantation of embryo in uterus. In this technique the donor of the oocyte is the women itself who has problem in implanting the embryo in the uterus. The collected oocyte is fertilized with the sperm of her husband in a test tube. The embryo which is obtained after fertilization is implanted in the uterus of another female who is called the surrogate mother.<br>
<b>Sperm bank -</b> It is a new concept which is similar to blood banks. Sperms are collected from the male donors after a thorough medical checkup and stored for future use. These sperms are used to fertilize the ovum of the women and then this fertilised ovum is implanted in the uterus of the same women.<br><br><br>

<b>Question 11:</b><br>
Explain sexual reproduction in plants.<br>

<p style="color:green;"><b>ANSWER:</b><p><br><br>

 

In sexually reproducing plants, flowers function as the reproductive organs.<br>
In flowers, male organ is the stamen and female organ is the carpel.<br>
Flowers which have both the male and female organs i.e. stamens and carpels are called bisexual flowers whereas flowers which have either male or female organs are called unisexual.<br>
Male gametes called pollen grains are produced by stamen, and carpels produce female gametes called ovules or egg cells inside ovaries.<br>
Fertilization takes place in the ovule where the egg cell and pollen grain fuse.<br>
This fertilized egg cell later develops into an embryo and the entire ovule gets converted into a seed.<br>
Under favourable conditions, the seed germinates to give rise to a new plant.<br>



</div>




<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
