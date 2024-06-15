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
  <title>page 103</title>
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
    <a href="../../chapter19.php">return to chapter</a>
    
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
  <p >The first, and most important, step is the fermentation process, 
  which happens when the yeast eats sugar, either in the fermentables or that you've added, 
  and converts it into alcohol. Fermentation takes roughly two to three weeks to complete fully, 
  but the initial ferment will finish within<b>seven to ten days</b> we don't eat food after 2 days and here..  </p>

<p>
    
    
    
  <b style="color:red; "> Key Points</b> <br>
Scheduling is the process by which you plan how you'll use your time. Doing it well can maximize your effectiveness and reduce your stress levels.
<br>
<i>Follow this six-step process to prepare your schedule:</i>
<br>
<ul>
    <li>Identify the time you have available.</li>
    <li>Block in the essential tasks you must carry out to succeed in your job.</li>
    <li>Schedule high-priority urgent tasks and vital "housekeeping" activities.</li>
    <li>Block in appropriate contingency time to handle unpredictable events and interruptions.</li>
    <li>Schedule the activities that address your priorities and personal goals in the time that remains.</li>
<li>It's important that your schedule makes time for your professional and personal goals. If you have little or no discretionary time left when you reach step five, revisit your tasks to see if you can do them differently – otherwise, your work-life balance will suffer.</li>

</ul>


</p>




</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 103   )</h2>

    <div class="value-img">
      <img src="19/103.jpg" data-action="zoom" data-original="19/103.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
