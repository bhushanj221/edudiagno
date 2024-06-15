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
  <title>page 107</title>
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
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;">Tobacco</h1>
  
  <b>Overview</b>
  <p>Nicotine contained in tobacco is highly addictive and tobacco use is a major risk factor for cardiovascular and respiratory diseases, over 20 different types or subtypes of cancer, and many other debilitating health conditions. <b>Every year, more than 8 million people die from tobacco use. </b>Most tobacco-related deaths occur in low- and middle-income countries, which are often targets of intensive tobacco industry interference and marketing.

Tobacco can also be deadly for non-smokers. Second-hand smoke exposure has also been implicated in adverse health outcomes, causing 1.2 million deaths annually.<b> Nearly half of all children breathe air polluted by tobacco smoke and 65 000 children die each year due to illnesses related to second-hand smoke.</b> Smoking while pregnant can lead to several life-long health conditions for babies. 

Heated tobacco products (HTPs) contain tobacco and expose users to toxic emissions, many of which cause cancer and are harmful to health. Electronic nicotine delivery systems (ENDS) and electronic non-nicotine delivery systems (ENNDS), commonly known as e-cigarettes, do not contain tobacco and may or may not contain nicotine, but are harmful to health and undoubtedly unsafe. However, it is too early to provide a clear answer on the long-term impact of HTPs and/or e-cigarette use. </p>
 

<br><br>
<b>Impact</b><br>
  <p>An estimated 1.3 billion people worldwide use tobacco products, 80% of whom are in low- and middle-income countries. Tobacco use contributes to poverty by diverting household spending from basic needs, such as food and shelter, to tobacco. This spending behaviour is difficult to curb because tobacco is so addictive. It also causes premature death and disability of productive age adults in households thus leading to reduced household income and increased healthcare costs.

In addition to the detrimental impact of tobacco on health, the total economic cost of smoking (from health expenditures and productivity losses together) are estimated to be around US$ 1.4 trillion per year, equivalent in magnitude to 1.8% of the world's annual gross domestic product (GDP). Almost 40% of this cost occurred in developing countries, highlighting the substantial burden these countries suffer.

Tobacco taxes are applied in part to combat this effect and are seen as the most cost-effective way of curbing tobacco use, particularly among youth and low-income populations. A tax increase that increases tobacco prices by 10% decreases tobacco consumption by about 4% in high-income countries and about 5% in low- and middle-income countries.</P>


<b>WHO Response</b><br>
<p>The scale of this human and economic tragedy is shocking, but it’s also preventable. Big Tobacco — along with all manufacturers of tobacco products — is fighting to ensure the dangers of their products are concealed, but we are fighting back: In 2003, WHO Member States unanimously adopted the WHO Framework Convention on Tobacco Control (WHO FCTC), the only public health treaty under the auspices of WHO. In force since 2005, it has currently 181 Parties.

To help countries implement the WHO FCTC, WHO introduced MPOWER, a package of technical measures and resources, each of which corresponds to at least one provision of the WHO FCTC. MPOWER builds the capacity of countries to implement 6 measures to reduce the demand for tobacco products: Monitor tobacco use and prevention policies, Protect people from tobacco use, Offer help to quit tobacco use, Warn about the dangers of tobacco, Enforce bans on tobacco advertising, promotion and sponsorship and Raise taxes on tobacco.

 </p>


 <h1 style="  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;">Salam Mumbai Foundation</h1>


<p>Salaam Bombay Foundation started its rural outreach programme in 2007 under 
the Salaam Mumbai Foundation banner. It began in collaboration with Ambuja Cement Foundation 
in Chandrapur district (Maharashtra).Salaam Mumbai Foundation focuses on “training the trainer.”
Through this we reach out to “influencers” at the rural level,from schoolteachers,to aanganwadi workers,to public health 
workers,to local NGOs to the village sarpanch. They all form the first level of educators who take the message out to the various
targeted groups. Tried and tested modules that have delivered results to the various Mumbai BMC and government aided schools have been implemented 
at the rural level, with adjustments made keeping in mind rural parameters. Constant follow-ups and add-on training modules specific to rural conditions
further enhance the efficiency and effectiveness of the programme.Since its inception in 2007, the rural programme has reached across 5 states in India,
including 30 districts in Maharashtra. The rural programme has reached out to 1866 trainers, 60,000 teachers, 620 NGOs, 1,340 MPHWs, 11,364 police, 8538 D.Ed, 
B.Ed students and 1416 university students. The rural outreach has impacted more than 48,000 schools across Maharashtra.</p>





<h1 style="  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; text-align: center;">Police Station Turns To Classroom In Maharashtra, Offers Free Education To Slum Kids</h1>

<p>A police station in Maharashtra's Aurangabad has come to the rescue of the children residing in slum areas who were missing out on 
schools either due to the ongoing COVID-19 outbreak or did not have facilities to attend online classes. Going beyond the call of duty, 
Pundalik Nagar police station started organising English classes for children from nearby slum areas. According to reports, the sessions, 
a part of the community policing programme, would be conducted for 15 days with the help of a volunteer-teacher. An official associated with 
the initiative said that it had been three days since the classes were started amid the compliance of COVID-19 safety protocol including wearing facemasks,
maintaining social distancing and using sanitisers. He further stated that as many as 14 children are currently enrolled for the programme.
"Children are unable to attend schools due to the ongoing COVID-19 pandemic and many don't have facilities to attend classes online.

</p>


</div>




<!-- partial:index.partial.php -->
<div class="container">

  <section class="header">
    <h2 style="  color: white;
  text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px darkred;">Text Book (page.no 107   )</h2>

    <div class="value-img">
      <img src="19/107.jpg" data-action="zoom" data-original="19/107.jpg" alt="journey_start_thumbnail" />
    </div>
  </section>
  
</div>












<!-- partial -->

  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/zooming.min.js'></script><script  src="./script.js"></script>

</body>
</html>
