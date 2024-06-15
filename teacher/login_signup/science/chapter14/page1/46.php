
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
  <title>page 46</title>
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
    <a href="../../chapter14.php">return to chapter</a>
    
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
    


    
  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 46   )</h2>

    <div class="value-img">
      <img src="14/46.jpg" data-action="zoom" data-original="14/46.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>

<!-- Qustion and Answers -->
<div class="container">

<br><br><br>
	<h1><p style="color: blue;"><b> 4. Environmental management </b></p></h1><br><br><br>


<b>Question 1:</b><br><br
Reorganize the following food chain. Describe the ecosystem to which it belongs. Grasshopper -Snake- Paddy field- Eagle - Frog.

<p style="color:green;"><b>ANSWER:</b><p><br><br>
Paddy field -Grasshopper - Frog - Snake - Eagle

Paddy field represents the primary producer which are plants.
Grasshopper is a primary consumer. Primary consumers are organisms that eat the primary producers and are usually herbivores.<br>
Frog is a secondary consumer. Secondary consumers are organisms that eat the primary consumers and are generally meat..eaters/carnivores.<br>
Snake is a tertiary consumer. Tertiary consumers are organisms that eat the secondary consumers. These organisms are carnivore-eating carnivores, like snakes or big fish.<br>
Eagle is a quaternary consumer and in this case it is the apex consumer because it occupies the highest position in the food chain. <br>
<br><br>

<b>Question 2:</b><br><br>
Explain the statement- ‘we have got this Earth planet on lease from our future generations and not as an ancestral property from our ancestors.’<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
The above statement refers to the fact that earth belongs to everyone, from our ancestors to our future generations. It indicates towards the point that the planet earth should be protected and conserved in the same way as by our ancestors, so that it can be passed on to our future generations. It highlights an underlying problem which is the overexploitation of resources by the present generation which could eventually lead to the destruction of life on earth. The planet earth can be protected for future generations by following the path of sustainable development.<br>
Sustainable development means that development should be such that it can be sustained for longer period of time and must cater to the needs of the coming generations. It is mostly used in terms of the non-renewable sources of energy, which face depletion because of over-use by human beings. Sustainable development seeks to promote a judicious use of non-renewable energy sources such as coal and petroleum so that they do not get depleted beforehand and our future generations do not have these resources at their disposal. Sustainable development thus means developing in such a way that not only our present but our future is also secured.<br>
<br><br>

<b>Question 3:</b><br><br>
Write short notes.<br>
a. Environmental Conservation.<br>
b. Chipko Movement of Bishnoi.<br>
c. Biodiversity.<br>
d. Sacred Groves.<br>
e. Disaster and its management.<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
a. Environmental conservation is a broad term which refers to the actions we take in order to protect our planet and conserve its natural resources. We are very well aware of the fact that the human life on earth is supported by the various components of the environment. There is a direct relationship between environment and life on earth. Any kind of harm or disruption to the environment will directly and indirectly affect the life of organisms on this earth. We need to understand that natural resources should be used in a sustainable manner and not to fulfill our greeds.<br>
Environmental conservation implies to the conservation of forests, water resources, mineral resources etc. There are various projects which are being carried out at different levels with respect to environment conservation. These programmes are carried out by government organisations, NGO's, RWA's, schools, colleges etc. The aim of these programmes is to promote the conservation of environment from the grassroot level.<br> 
<br>
b. The Chipko Movement started in the 1970s in Garhwal in Uttarakhand. It was a socio-ecological movement which followed the Gandhian ideology of satyagraha for the protection of trees from cutting. Chipko, in Hindi, literally means ‘to stick’. Under the movement, people used to hug the trees in order to protect them from being felled. The movement mobilized villagers by making them aware about the after effects of destruction of forests. It was a great success and soon spread all over India. It was because of Chipko Movement that the government of India realized the importance of formulating wildlife conservation plans and policies in order to protect the biodiversity of the country. <br>
<br>

c. Biodiversity refers to the combined diversity at all levels of biological organisation. It includes genetic diversity, species diversity and ecological diversity. Importance of biodiversity:<br>
<br>
(i) A wide range of materials such as fibres, dyes, resins are obtained from plants.<br>
<br>
(ii) A variety of plants and animals are utilised as sources of food.<br>
<br>
(iii) Medicinal plants act as sources of drugs.<br>
<br>
(iv) Plants and animals also have a cultural and aesthetic value.<br>
<br>
d. The sacred groves are forest fragments which are highly protected by certain communities because they are of religious importance to the communities. These can be considered as sanctuaries which are protected by the society and not by the government organisations. More than 13000 sacred groves have been identified all over India.<br>
<br>
e. Any natural or man made event which has a negative impact on life, property and livelihood and causes permanent changes to environment, ecosystem and human society is termed as a disaster. 
Natural disasters: Any adverse event which occurs as a result of natural processes of earth is called natural disaster for example: cyclones, earthquakes, storms, tsunami, etc.
Man made disasters: Unlike natural disasters, which are influenced by natural forces, man made disasters are caused due to negligence of humans. Gas leaks, oil spills, nuclear meltdown or leakage of radiation, industrial fires, transport accidents, terrorism, epidemics and biological warfare are examples of man made disasters.<br> 
<br>
The damage caused by disasters can be reduced by making ourselves prepared in disaster management. Disaster management is the strategy and course of action to be executed at the time of any such disaster to save as much life as possible. This includes:<br>
<br>
<b>*</b>Improving tolerance<br>
<b>*</b>Preventing losses and dangers<br>
<b>*</b>Providing relief to the affected people<br>
<b>*</b>Preparing for actions to be taken at the time of disaster<br>
<b>*</b>Assessing the damage caused<br>
<b>*</b>Arrangement of rescue for the affected<br>
<b>*</b>Rehabilitation and rebuilding the affected <br><br><br>

<b>Question 4:</b><br><br>
How will you justify that overcoming the pollution is a powerful way of environmental management?
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
We know that the major cause of environmental damage is pollution. Pollution of air, water bodies, soil etc. all contribute to various environmental problems. The continuous increase in pollution has made the environment nearly unfit for us. This can largely be attributed to the rapid rate at which trees are being cut. In the absence of trees, the level of carbon dioxide in the atmosphere increases, adding to the problem of global warming. Moreover, the emission of carbon monoxide, hydrocarbons and other such gases, from vehicles and factories, is rapidly polluting the air making it even difficult to breathe.<br>
Pollution of water bodies have resulted in the death of aquatic life and making most of the water bodies unfit for human and animal use.<br>
<br>
All the above points highlight the fact that pollution is one of the causes of environmental degradation. Environmental management can help solve this issue by efficiently managing the problems associated with pollution. We need to remember that nature is a treasure which needs to be preserved for our own survival. If we do not pay attention to this problem and make efforts to preserve our environment, this wonderful earth would soon cease to exist.<br>
<br><br><br>

<b>Question 5:</b><br><br>
Which projects will you run in relation to environmental conservation? How?<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
Environmental conservation is a broad term which refers to the actions we take in order to protect our planet and conserve its natural resources. Environment conservation can have various components like conservation of forests, conservation of water resources etc. There are various projects which can be carried out to conserve our environment: <br>
<br>
Water conservation-  Conservation of water is of utmost importance for human survival because almost all forms of life depend on water. Conservation of water is essential for securing food grain production and sustaining various life-forms. In order to conserve water we ca run programmes on various levels to bring awareness abouit water coservation and its methods. The most talked about method is rain water harvesting. We can persuade people to practice rain water harvesting and the government can provide loans and expert advice for this purpose.<br> 
<br>
Forest conservation- Forest conservation not only deals with conservation of trees of a forest but it also implies to the protection of wildlife which exists there. Forest are a huge resource of wood and other products which is why they are exploited at a greater scale. In oreder to protect forests, the government and the public needs to work in harmony. We need to start projects which ou aiimed at recycling of products like paper etc. so that less of trees are cut down. We need to take responsibilities that less of forest cover is destroyed for urbanisation projects.<br>
<br>
We need to start projects which highlight the importance of sustainable development and how we can achieve that.<br>
<br><br><br>

<b>Question 6:</b><br><br>
Answer the following.<br>
a. Write the factors affecting environment.<br>
b. Why does the human beings have important place in environment?<br>
c. Write the types and examples of biodiversity.<br>
d. How the biodiversity can be conserved?<br>
e. What do we learn from the story of Jadav Molai Peyang?<br>
f. Write the names of biodiversity hot spots.<br>
g. Which are the reasons for endangering the many species of plants and animals? How can we save those?<br>
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>
a. The factors which affect the environment are grouped into two categories- biotic and abiotic factors.<br> 
Biotic factors refer to the living components of an ecosystem like animals and plants. 
Abiotic factors refer to the non living components of an ecosystem, for example, sunlight, temperature, air etc.<br>
The biotic and abiotic factors together affect the environment as both are connected to each other. Abiotic factors are required for the existence and survival of organisms.<br>
<br>
b. There is an inter relationship between humans and environment which means humans and environment are interconnected. The existence of humans is not possible without striking a balance with the environment. Humans developed ways to use these natural resources for their existence, however when these needs turned into greed, it resulted in over exploitation of resources. Over exploitation of resources by humans have threatened the existence of other species as well, resulting in their extinction. Various problems like global warming, changed weather patterns, water scarcity etc. are results of human activities. These problems highlight the fact that how imporatant is the role of humans with respect to environment. If human activites are controlled and an effort is made to make harmony with the nature, it is most probable we can revert these environmental changes and if we fail to do so, it could have devastating effects.<br>

<br><br>
c. There are 3 types of diversity which are as follows:<br>
<br>
Genetic diversity: Genetic diversity refers to the diversity which occurs among the organisms of same species. For example, the diversity which is found among humans, each human being is different from another.<br>
<br>
Species diversity: Species diversity refers to the innumerable species of organisms which are found in nature ranging from plants, animals to microbes.<br>
<br>
Ecosystem diversity: Ecosystem diversity refers to the various kinds of ecosystem which are found in a region. Each ecosystem will have its own characteristic plants, animals, abiotic factors etc. <br>
 <br>

d. Two approaches followed for the conservation of biodiversity are:<br>
<br>
In-situ conservation: In order to conserve biodiversity better, biodiversity hotspots all around the world have been identified and protected. In India, biosphere reserves, wildlife sanctuaries, and national parks have been developed for this purpose.<br>
Ex-situ conservation: The threatened species of plants and animals are taken out of their habitats and are kept in special settings such as zoological parks, botanical gardens, and wildlife parks. Nowadays, the gametes of endangered species can be preserved by methods such as cryopreservation. They can also be fertilized in-vitro followed by propagation through tissue culture methods. Similarly, seeds can be preserved in seed banks.<br>
<br>
 e. Jadav Molai Peyang was a nomadic tribe born in Assam. There is a jungle which has been named on his name to hounour his hardwork. After a flood affected the areas of Assam, Jadav started a reforestation process by planting 20 bamboo plants. This initiative was then supported by the Assam government and with the hardwork of Jadav and the government, the barren area witnessed the forest cover over the 1360 acres. His contrbution to the environment was acknowleged by honouring him with the 'Padmashree' award. His story gives us a message that a single person can bring about a big change and it is the will which is required to do so.<br>
<br>
f. Biodiversity hotspots are regions with high species richness and high degree of endemism. Endemism is the indigenousness of a species to a particular region. Western Ghats, Sri Lanka, Himalaya and Indo-Burma are the high biodiversity regions that cover India.<br>
<br>
g. The last 20 years have seen the loss of 27 species. Some of the causes of this loss are:<br>
<br>
Habitat loss and fragmentation: This is the major cause for loss of biodiversity. Habitat destruction is caused by human activities such as deforestation and increasing pollution, leading to the loss of many plants and animals. Habitat fragmentation is the breaking up of habitat of a particular species into fragments.<br>
<br>
Over-exploitation: Humans, because of their greed and increased exploitation of natural resources, have contributed to the endangerment of commercially important species of plants and animals. Species such as the Steller’s sea cow and passenger pigeons have become extinct as a result of over-exploitation by humans.<br>
<br>
Co-extinction: When plants or animals become extinct, other plants or animals that are dependant on it in an obligatory way also become extinct.
Endangered plant and animal species can be saved by adopting methods which do not disturb their environment. We need to protect the habitats in which they survive and also protect them from poachers and hunters. Lot of steps are being taken at personal and public level to ensure their protection.<br><br><br>


 

<b>Question 7:</b><br><br>
What are the meanings of following symbols? Write your role accordingly?<br>
<br>
<br>
  <img src="image/quse 7 dig (1).png" data-action="zoom" data-original="image/quse 7 dig (1).png" alt="journey_start_thumbnail" />
<br>
<p style="color:green;"><b>ANSWER:</b><p><br><br>


Symbol 1 represents recycle. This sign is seen on various packaged food materials. Recycling is the process in which a substance that has been discarded is reprocessed to make the same or a different substance. It is one of the methods to conserve our environment, for example recycling of paper saves several others trees from being cut down. Also, chemicals that are produced at the time of manufacturing paper are directly released into rivers and lakes. Therefore, recycling of paper will not only prevent deforestation but also prevent water pollution.<br>
<br>
Symbol 2 represents water conservation. Water conservation refers to the act of conserving water with the help of various methods such as rain water harvesting. Conservation of water is essential for maintaining a proper hydrological cycle, ensuring timely rainfall and maintaining the availability of fresh water in rivers and other sources. Conservation of water is essential for securing food grain production and sustaining various life-forms. Water can be conserved by various methods. The most effective means of conserving water is rainwater harvesting, which involves collecting rainwater and storing it for further use. Water can also be conserved by checking our day-to-day habits and ensuring that there is no wastage of water. Innovative irrigation techniques such as drip irrigation also help in water conservation to a great extent.
<br>
Symbol 3 represents solar pannels. Solar energy can be harnessed with the help of solar cells. Several solar cells are connected together to form a solar panel. Solar panels devices are used to convert thermal energy of sun into electric energy. There are various reasons for which solar energy is being prefered over other sources:<br>
<br>
* tropical country India receives abundant sunlight throughout the year as the number of sunny days across a large geographical portion of country is around 300.<br>
*it requires less investment in infrastructure as compared to other forms of energy.<br>
*solar energy can be utilised for rural electrification and irrigation through solar powered water pumping system.<br>
*it will eventually reduce the dependance upon fossils fuels hence will help in the conservation of environment.<br>
<br>
<br>

</div>









<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
