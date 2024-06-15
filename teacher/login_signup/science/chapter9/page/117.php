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
  <title>page 117</title>
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
    <a href="../../chapter9.php">return to chapter</a>
    
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
    

In organic chemistry, a functional group is a specific group of atoms or bonds within a compound that is responsible for the characteristic chemical reactions of that compound. The same functional group will behave in a similar fashion, by undergoing similar reactions, regardless of the compound of which it is a part.
<br> <br>
Functional groups also play an important part in organic compound nomenclature; combining the names of the functional groups with the names of the parent alkanes provides a way to distinguish compounds.
<br><br>
The atoms of a functional group are linked together and to the rest of the compound by covalent bonds. The first carbon atom that attaches to the functional group is referred to as the alpha carbon; the second, the beta carbon; the third, the gamma carbon, etc. Similarly, a functional group can be referred to as primary, secondary, or tertiary, depending on if it is attached to one, two, or three carbon atoms.
<br><br>
Key Points :
<br><br>
> Functional groups are often used to “functionalize” a compound, affording it different physical and chemical properties than it would have in its original form.
<br><br>
> Functional groups will undergo the same type of reactions regardless of the compound of which they are a part; however, the presence of certain functional groups within close proximity can limit reactivity.
<br><br>
> Functional groups can be used to distinguish similar compounds from each other.
<br><br>
Key Terms :
<br><br>
> functional group: A specific grouping of elements that is characteristic of a class of compounds, and determines some properties and reactions of that class.
<br>
> functionalization: Addition of specific functional groups to afford the compound new, desirable properties.



  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 117    )</h2>

    <div class="value-img">
      <img src="9/117.jpg" data-action="zoom" data-original="9/117.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
