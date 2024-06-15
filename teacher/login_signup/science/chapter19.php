
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../log.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>chapter 19</title>
  <link rel="stylesheet" href="./main_index.css">

<style>
	a{
		text-decoration: none;
	
color: white;

	}
a:hover{
	cursor: pointer;
}

body{
 background: #8A2387;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #F27121, #E94057, #8A2387);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #F27121, #E94057, #8A2387); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
</style>


<style>/* back button  starts*/
.BUTTON_NLV {
   background: #3D94F6;
   background-image: -webkit-linear-gradient(top, #3D94F6, #1E62D0);
   background-image: -moz-linear-gradient(top, #3D94F6, #1E62D0);
   background-image: -ms-linear-gradient(top, #3D94F6, #1E62D0);
   background-image: -o-linear-gradient(top, #3D94F6, #1E62D0);
   background-image: -webkit-gradient(to bottom, #3D94F6, #1E62D0);
   -webkit-border-radius: 2px;
   -moz-border-radius: 2px;
   border-radius: 20px;
   color: #FFFFFF;
   font-family: Brush Script MT;
   font-size: 20px;
   font-weight: 30px;
   padding: 13px;
   -webkit-box-shadow: 1px 1px 20px 0 #000000;
   -moz-box-shadow: 1px 1px 20px 0 #000000;
   box-shadow: 1px 1px 20px 0 #000000;
   text-shadow: 1px 1px 20px #000000;
   border: solid #337FED 1px;
   text-decoration: none;
   display: inline-block;
   cursor: pointer;
   text-align: center;
   width:120px;
}

.BUTTON_NLV:hover {
   border: solid #FFFFFF 2px;
   background: #1E62D0;
   background-image: -webkit-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -moz-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -ms-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -o-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -webkit-gradient(to bottom, #1E62D0, #3D94F6);
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   text-decoration: none;
}/* back button  ends*/

</style>

</head>
<body>
<!-- partial:index.partial.php -->
<ol>




 <!-- back button start-->
<a href="../welcome.php" class="BUTTON_NLV">Back to Index</a>
  <!-- back button end-->
  
  <h1 style="color: white;">Chapter 19</h1>
<h2  style="color: white; font-size: 20px;">Subpoints Page no wise Augmented Reality </h2>

 




  <li>Page no 101
    <ol>
    <a href="chapter19/index/101.1.php"   >   <li>101.1</li></a>
    
  
    </ol>
  </li>

<li>Page no 102
    <ol>
    <a href="chapter19/index/102.1.php"   >   <li>102.1</li></a>
     <a href="chapter19/index/102.2.php"   >   <li>102.2</li></a>
  
    </ol>
  </li>

<li>Page no 103
    <ol>
    <a href="chapter19/index/103.1.php"   >   <li>103.1</li></a>
    
  
    </ol>
  </li>

<li>Page no 104
    <ol>
    <a href="chapter19/index/104.1.php"   >   <li>104.1</li></a>
   
  
    </ol>
  </li>

<li>Page no 105
    <ol>
    <a href="chapter19/page1/105.php"   >   <li>no ar</li></a>
   
  
    </ol>
  </li>

<li>Page no 106
    <ol>
    <a href="chapter19/index/106.1.php"   >   <li>106.1</li></a>
    
  
    </ol>
  </li>



<li>Page no 107
    <ol>
    <a href="chapter19/index/107.1.php"   >   <li>107.1</li></a>
    
  
    </ol>
  </li>



  <li>Page no 108
    <ol>
  <a href="chapter19/page1/108.php"   ><li >no ar</li></a>

    </ol>
  </li>







</ol>
<!-- partial -->
  
</body>
</html>
