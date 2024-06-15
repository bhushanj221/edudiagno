
<?php
// Initialize the session
session_start();
 
// Check if acthe user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../../log.php");
    exit;
}
?>

























<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>page 22</title>
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
    <a href="../../chapter2.php">return to chapter</a>
    
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
    
 the electron configurations of the elements explain the otherwise peculiar shape of the periodic table. Although the table was originally organized on the basis of physical and chemical similarities between the elements within groups, these similarities are ultimately attributable to orbital energy levels and the Pauli principle, which cause the individual subshells to be filled in a particular order. As a result, the periodic table can be divided into “blocks” corresponding to the type of subshell that is being filled, as illustrated in Figure.
<br><br>
 For example, the two columns on the left, known as the s block, consist of elements in which the ns orbitals are being filled. The six columns on the right, elements in which the np orbitals are being filled, constitute the p block. In between are the 10 columns of the d block, elements in which the (n − 1)d orbitals are filled. At the bottom lie the 14 columns of the f block, elements in which the (n − 2)f orbitals are filled. Because two electrons can be accommodated per orbital, the number of columns in each block is the same as the maximum electron capacity of the subshell: 2 for ns, 6 for np, 10 for (n − 1)d, and 14 for (n − 2)f. Within each column, each element has the same valence electron configuration—for example, ns1 (group 1) or ns2np1 (group 13). As you will see, this is reflected in important similarities in the chemical reactivity and the bonding for the elements in each column.


  </p>





</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 22    )</h2>

    <div class="value-img">
      <img src="2/22.jpg" data-action="zoom" data-original="2/22.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
