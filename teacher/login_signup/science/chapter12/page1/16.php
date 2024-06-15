
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
  <title>page 16</title>
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
    
Food is essential for the survival of living organisms. It provides us with energy to carry out daily activities and develop, grow and repair our body parts in case of any damage. Therefore understanding the importance of consuming the right kind of food becomes a necessity.
<br><br>
Furthermore, most of the food items available today are adulterated in many possible ways. The food that we consume comes from numerable sources and the variety is huge. You can think of the last meal you had, and list down sources from which your food was obtained. This helps us understand how food varies in its sources and components.
<br><br>
What Do Different Food Items Contain?
Each dish we eat is prepared using more than one ingredient containing different nutrients along with dietary fibres and water. Some nutrients in our food are fats, minerals, vitamins, proteins and carbohydrates.
<br><br>
Carbohydrates are present in the form of starch and sugars in our food. The presence of carbs in our food can be tested using a dilute iodine solution, an indication of the presence of starch is shown by black-blue colouration.
Presence of protein in food is tested using a solution of copper sulphate and caustic soda. If the solution turns violet, proteins are present.
Presence of fat in food is indicated when food wrapped in paper turns oily after releasing its moisture content.
Components of Food (Tabular Representation)
<br><br>

Food Component  Functions
<br><br>
Carbohydrates= These are digested and broken down into glucose and provide energy to the body
<br><br>
Fats  =         Store energy, protects and insulates the important organs
<br><br>
Proteins  = Help in metabolism, act as enzymes, and hormones
<br><br>
Vitamins  = These help in maintaining healthy bones, boost the immune system, heal wounds, repair and damage of cells and converting food into energy
<br><br>
Iodine  = Formation of thyroid hormone
<br><br>
Calcium =  Helps in the proper functioning of the nervous system and maintain healthy bones
Phosphorus= Helps to maintain acid-base balance in the body
<br><br>
Sodium  = Controls the blood pressure
<br><br>
Iron    = Facilitates the formation of haemoglobin
<br><br>
Fibres  = They help in food absorption and prevents constipation
<br><br>
Water = They help in absorbing nutrients from the food and release waste from the body in the form of urine and sweat.
<br><br>


  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 16   )</h2>

    <div class="value-img">
      <img src="12/16.jpg" data-action="zoom" data-original="12/16.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
