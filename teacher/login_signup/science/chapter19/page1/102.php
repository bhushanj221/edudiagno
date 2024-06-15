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
  <title>page 102</title>
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
  

<p >Causes of Stress
Everyone has different stress triggers. Work stress tops the list, according to surveys. Forty percent of U.S. workers admit to experiencing office stress, and one-quarter say work is the biggest source of stress in their lives.
<br>
<b>Causes of work stress include:</b><br>

1. Being unhappy in your job<br>
2. Having a heavy workload or too much responsibility<br>
3. Working long hours<br>
4. Having poor management, unclear expectations of your work, or no say in the decision-making process<br>
5. Working under dangerous conditions<br>
6. Being insecure about your chance for advancement or risk of termination<br>
7. Having to give speeches in front of colleagues<br>
8. Facing discrimination or harassment at work, especially if your company isn't supportive</p>




  <h1 style="  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;">How to overcome Mental Stress</h1>


<p>
    
    
    
    <b>Exercise</b>
Working out regularly is one of the best ways to relax your body and mind. Plus, exercise will improve your mood. But you have to do it often for it to pay off.

So how much should you exercise every week?

Work up to 2 hours and 30 minutes of moderately intense exercise like brisk walks or 75 minutes of a more vigorous exercise like swimming laps, jogging or other sports.

Focus on setting fitness goals you can meet so you don’t give up. Most of all remember that doing any exercise is better than none at all.
<br>
<b>Relax Your Muscles</b><br>
When you’re stressed, your muscles get tense. You can help loosen them up on your own and refresh your body by:

Stretching
Enjoying a massage
Taking a hot bath or shower
Getting a good night’s sleep<br>
<b>Deep Breathing</b><br>
Stopping and taking a few deep breaths can take the pressure off you right away. You’ll be surprised how much better you feel once you get good at it. Just follow these 5 steps:

Sit in a comfortable position with your hands in your lap and your feet on the floor. Or you can lie down.
Close your eyes.
Imagine yourself in a relaxing place. It can be on the beach, in a beautiful field of grass, or anywhere that gives you a peaceful feeling.
Slowly take deep breaths in and out.
Do this for 5 to 10 minutes at a time.
4. Eat Well
Eating a regular, well-balanced diet will help you feel better in general. It may also help control your moods. Your meals should be full of vegetables, fruit, whole grains, and lean protein for energy. And don’t skip any. It’s not good for you and can put you in a bad mood, which can actually increase your stress
</p>




<h1 style="  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;">Helping a Friend With Addiction</h1>


<p>
If you're worried about a friend who has an addiction, you can use these tips to help him or her. For example, let your friend know that you are available to talk or offer your support. If you notice a friend backsliding, talk about it openly and ask what you can do to help.

If your friend is going back to drugs or drinking and won't accept your help, don't be afraid to talk to a nonthreatening, understanding adult, like your parent or school counselor. It may seem like you're ratting your friend out, but it's the best support you can offer.

Above all, offer a friend who's battling an addiction lots of encouragement and praise. It may seem corny, but hearing that you care is just the kind of motivation your friend needs.</p>
</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 102  )</h2>

    <div class="value-img">
      <img src="19/102.jpg" data-action="zoom" data-original="19/102.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
