
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
  <title>page 11</title>
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
    
15 fun facts about evolution for kids
Did you know that Charles Darwin’s theory of evolution caused quite a stir in the 19th century? At the time, many still believed the world and everything in it was created all at once. In On the Origin of Species, Sabina Radeva has retold Darwin’s original work along with her own beautiful illustrations. Here are a few of our favourite facts about evolution.
<br><br>
1. It took Charles Darwin, an English naturalist, 20 years to write and publish his original book On the Origin of Species that explained the process of evolution.
<br><br>
2. No two animals are the same, even if they belong to the same species.
<br><br>
3. There are over 340 breeds of dog, yet they all come from one kind of wild wolf that existed many years ago.
4. Humans share the same five-fingered bone structure in their hands with lots of other animals that have paws, wings or flippers, such as lemurs and bats.
<br><br>
5. Many of the pets, farm animals and garden flowers we see today are the result of human choice. For example, farmers would have chosen to breed the chickens that lay the best eggs, and gardeners would have encouraged the most beautiful plants to grow.
<br><br>
6. The slightest difference in colour or design can help an animal or plant live, survive and reproduce better in the wild. This is known as natural selection.
<br><br>
7. Instinct is another important part of natural selection. For example, most birds know they must travel to warmer places to survive during winter.
<br><br>
8. If animals and plants did not compete to survive, the earth would be covered by the offspring of a single pair.
<br><br>
9. Little changes within one species can add up and create a whole new species.
10. But often these changes happen over thousands of years. So, it’s hard to see evolution happening with our own eyes.
<br><br>
11. Fossils are evidence of extinct species. However, perfect conditions are needed for fossils to form.
<br><br>
12. We are able to see from fossils that dinosaurs, woolly mammoths and dodos lived many years ago. But we’ll never really know all of the weird and wonderful species that previously existed!
<br><br>
13. Although they both live underwater, dolphins evolved from mammals whereas sharks evolved from fish ancestors.
<br><br>
14. Humans, animals, plants, insects and even bacteria, all descend from the first living things that ever came to be.
<br><br>
15. At one point in time, whales walked on land!





  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 11   )</h2>

    <div class="value-img">
      <img src="11/11.jpg" data-action="zoom" data-original="11/11.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>
<!-- question and answers -->
<div class="container">
    
    <br><br>
<h1><b> Chapter 1 - Heredity And Evolution</b></h1><br><br>

    
<b>Question 3:</b><br>
Complete the statements by choosing correct options from bracket. (Gene, Mutation, Translocation, Transcription, Gradual development, Appendix)<br>
a. The causality behind the sudden changes was understood due to -- -- principle of Hugo de Vries.<br>
b. The proof for the fact that protein synthesis occurs through -- --- was given by George Beadle and Edward Tatum.<br>
c. Transfer of information from molecule of DNA to mRNA is called as -- -- -- process.<br>
d. Evolution means -- -- -- --.<br>
e. Vestigial organ -- -- -- present in human body is proof of evolution.<br>
<br>
<b>ANSWER:</b><br><br>
a. The causality behind the sudden changes was understood due to <b>mutation</b> principle of Hugo de Vries.<br>
b. The proof for the fact that protein synthesis occurs through <b> gene </b>was given by George Beadle and Edward Tatum.<br>
c. Transfer of information from molecule of DNA to mRNA is called as <b>transcription</b> process.
d. Evolution means <b>gradual development</b>.<br>
e. Vestigial organ <b>appendix</b> present in human body is proof of evolution.<br>
<br>

<b>Question 4:</b><br>
Write short notes based upon the information known to you.<br>
a. Lamarckism<br>
b. Darwin’s theory of natural selection<br>
c. Embryology<br>
d. Evolution<br>
e. Connecting link<br>
<br>
<b>ANSWER:</b><br><br>
a.<b> Lamarckism:</b> Lamarck gave the principle of 'use or disuse of organs’. He proposed that the reason behind evolution was the changes in the morphological activities of the organism. For example: giraffe has a long neck because it used to browse on leaves of tall plants by extending their neck for several generations, shoulders of iron smith are strong due to repetitive hammering movements, wings of ostrich and emu are weak because they are not used for flying, legs of birds and swan are used for swimming because they live in water. These characters are termed as acquired characters which are transferred from one generation to another.<br>
<br>
<b>b. Darwin’s theory of natural selection:</b> Darwin is famous for the theory which he published in the book titled ‘Origin of Species’. In this book he explained the theory of natural selection which talks about the survival of the fittest. He stated that there is a continuous competition between organisms for survival and the strongest of all survives. The chances of survival are higher for organisms which show modifications which will help them to survive. He also said that, nature also plays an important role in the selection of the fittest. Nature selects only those organisms which are capable of adapting to the changing situations while the rest which are incapable to do so perish away. The organisms which are selected by the nature then reproduce and give rise to new species which have their own characteristics
<br><br>
<b>c. Embryology:</b> Embryology is the study of the formation and development of embryo and foetus. Embryology is used as one of the evidences of evolution. Comparative study of embryos in vertebrates shows that there is lot of similarity in them at the initial stages whereas this similarity decreases gradually. This similarity in the development of embryos represents common origin of organisms.<br>
<br>

<b>d. Evolution:</b> Evolution refers to the gradual change which occurs in an organism over a long duration of time. It is a slow going process which results in the development of the organism. Life originated on earth about 3.5 billion years ago. It is believed that there might have been presence of simple elements on earth which may have given rise to simple organic and inorganic molecules. From these simple molecules, complex molecules like proteins, DNA etc. may have been formed. Other evolutionary changes may have resulted in the formation of simple cells and the result of the continuous evolution on earth is the several species of plants and animals which exist on earth. Today, the diversity on earth varies from unicellular Amoeba to a human being and from a unicellular algae like Chlorella to huge Banyan tree.<br>
<br>

e.<b> Connecting link:</b> Connecting link refers to plant and organisms which show characteristics related to two different groups. For example, Peripatus is considered a connecting link between annelida and arthropoda. It has characteristics like segmented body, thin cuticle and parapodia-like organs which are similar to annelids. It also shows tracheal respiration and open circulatory system which is similar to arthropods. Another example is duck billed platypus which is a connecting link between reptiles and mammals as it lays eggs like reptiles and has mammary glands like mammals.<br>
<br>
<br>


<b>Question 5:</b><br>
Define heredity. Explain the mechanism of hereditary changes.<br>
<br>
<b>ANSWER:</b><br>
Heredity refers to the passing of traits from parents to offsprings either through asexual or sexual reproduction. Gregor Johann Mendel (1822 – 1884) was the first to carryout the study on the transmission of characteristics from the parents to the offsprings. He proposed that heredity is controlled by factors, which are now believed to be segments of chromosomes or genes.<br>
These traits are passed on in the form of genetic information from parents to offsprings. This genetic information is stored in molecules called DNA. During the process of reproduction, the child receives genetic information from both the parents in the form of DNA. 50% genetic information is passed on from the paternal DNA whereas rest 50% information is passed on by the maternal DNA. This is why a child closely resembles its parents and has traits similar to both of them. Commonly observed heritable features are curly hair, a particular type of ear lobe, hair on ears etc.<br>
<br>
<br> 


<b>Question 6:</b><br>
Define vestigial organs. Write names of some vestigial organs in human body and write the names of those animals in whom same organs are functional<br>
<br>
<b>ANSWER:</b><br><br>
Vestigial organs is a term used for organs which are degenerated, underdeveloped or useless for an organism. Usually, with the changes in the outer environment, the organs undergo a gradual change in order to cope up with those changes. Presence of vestigial organs is an indication that they were useful for our ancestors but as we evolved with the changing surroundings, these structures lost their functionality but our still found in our bodies. It is not compulsory that if an organ is vestigial for humans, so will it be for other organisms too.<br>
<br>
<br>
<b>Page No 11:</b><br><br><br>
<b>Question 7:</b><br>
Answer the following questions.<br>
a. How are the hereditary changes responsible for evolution?<br>
b. Explain the process of formation of complex proteins.<br>
c. Explain the theory of evolution and mention the proof supporting it.<br>
d. Explain with suitable examples importance of anatomical evidences in evolution.<br>
e. Define fossil. Explain importance of fossils as proof of evolution.<br>
f. Write evolutionary history of modern man.<br>
<br>
<b>ANSWER:</b><br><br>
a. Heredity is the passing of traits from parents to offsprings. These traits which are passed from one generation to another are called inherited traits as they are inherited from the previous generation. Evolution refers to the changes which occur in these inheritable traits over a long period of time. These changes allow organisms to survive with changing environment and provide an advantage over other species who cannot survive in that environment. Changes in these inheritable characters, provide better chances of survival and reproduction and thus result in the evolution of species.<br>
<br>
b. The synthesis of proteins occurs according to the central dogma. The central dogma
explains how genetic information flows from DNA to RNA to make a functional protein.<br>  
It suggests that DNA contains all the information required to synthesise a protein and the RNA acts as a messenger which carries this information to ribosomes (a type of cell organelle). The central dogma is represented as:<br>
<br>
DNA -?-----Transcription mRNA -?----TranslationProtein<br>
<br>
<b>Transcription:</b> Transcription results in the formation of an mRNA using DNA as a template. This process takes place in the nucleus. You must be aware that DNA is made up of two strands. But in this process only one strand of DNA is required and this one strand is used as the template for the synthesis of the mRNA.<br>
<br>
An enzyme, RNA polymerase, helps in this process. It helps in copying the information from DNA strand to mRNA. Once this process is complete, the RNA polymerase dissociates from the strand and the newly synthesised mRNA is released from the nucleus.<br>
Like DNA, RNA is also made up of nucleotides but there is a difference. RNA contains the nucleotide Uracil (U) instead of thymine which is present in DNA. This uracil pairs with adenine just like thymine.<br>
<br>
Once the process of transcription is complete, the newly synthesised mRNA is released from the nucleus into the cytoplasm.<br>
<br>
Translation: The newly synthesised mRNA contains information in the form of codons. A codon is a sequence of 3 DNA or RNA nucleotides that correspond with a specific amino acid. Since, these codons contain 3 nucleotides, they are called triplet codon.<br>
<br>
<b>Process of translation:</b>b><br>
<br>
After the mRNA is released into the cytoplasm, it reaches the ribosomes where the process of translation occurs. Each mRNA can be made up of thousands of triplet codons.<br>
Two other types of RNAs, i.e. tRNA and rRNA, also participate in this process.<br>
Each tRNA has an anticodon which has the sequence complementory to the codon on mRNA.<br> These tRNAs supply the amino acids as per the codons on the mRNA.<br>
The amino acids which are brought by the tRNA are joined together by peptide bonds. <br>This process is carried out with the help of rRNA.<br>
During this process, the ribosome moves from one end of the mRNA to the other by a process known as translocation.<br>
At the end of this process a protein is formed which undergoes further modifications to form a fully functional protein. <br>
<br>
c. There are various theories of evolution but the most acceptable one is the theory of 'Gradual development of living organisms'. According to this theory, the first living material which is the protoplasm was formed in ocean. Gradual changes resulted in the formation of unicellular organisms and further developments resulted in the formation of larger and complex organisms. However, these changes did not occur overnight, they were slow and gradual changes which took almost 300 crore years. These changes and development are often referred to as evolution and are the prime cause of diversity of plants and organisms which we see on earth today. There are various evidences which support evolution:<br>
<br>
<b>Morphological evidence- </b>Similarity in morphological features of animals and plants is an evidence that they have evolved from common ancestors. For example: In animals similarities like<br>
structure of mouth, position of eyes, structure of nostrils and in plants, similarities in characters like leaf shape, leaf venation, leaf petiole represent common ancestry.<br>
<br>
<b>Connecting links</b>- Connecting links refers to plant and organisms which show characteristics related to two different groups. For example, Peripatus is considered a connecting link between annelida and arthropoda. It has characteristics like segmented body, thin cuticle, and parapodia-like organs which are similar to annelids. It also show tracheal respiration and open circulatory system which is similar to arthropods. Another example is duck billed platypus which is a connecting link between reptiles and mammals because it lays eggs like reptiles and has mammary glands like mammals.<br>
<br>
<b> evidence-</b> Embryology is used as one of the evidences of evolution. Comparative study of embryos shows that there is lot of similarity in them at the initial stages whereas this similarity decreases gradually. This similarity in the development of embryos represents common origin of organisms.<br>
<br>
d.  Anatomical evidences help us to study how species have evolved over a period of time. Analogous structures support the theory of evolution and explain the fact that how species build up adaptations in order to fit in an environment whereas homologous structures help us to understand common ancestry. For example, if we compare the hands of humans with cat’s foreleg, flipper of whale and patagium of bat, we see that each of these organism use these structures are differently. But still there is a similarity between the structure of bones and joints which indicates that somewhere or the other these animals may have originated from common ancestors. This is an example of homology. Another example which explains analogous features is the arctic fox and the ptarmigan bird, Both of them change colours from dark brown to white during seasonal changes. They do not show common ancestry in way but since, they are found in the same habitat they are adapted to colour change.<br>
<br>
e. <b> The evolutionary history of modern man is as follows:</b><br> 
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

</div>







<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
