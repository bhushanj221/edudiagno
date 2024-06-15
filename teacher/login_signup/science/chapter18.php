
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
  <title>chapter 18</title>
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
  
  <h1 style="color: white;">Chapter 18</h1>
<h2  style="color: white; font-size: 20px;">Subpoints Page no wise Augmented Reality </h2>

 




  <li>Page no 88
    <ol>
    <a href="chapter18/index/88.1.php"   >   <li>88.1</li></a>
    
  
    </ol>
  </li>

<li>Page no 89
    <ol>
    <a href="chapter18/index/89.1.php"   >   <li>89.1</li></a>
    
  
    </ol>
  </li>

<li>Page no 90
    <ol>
    <a href="chapter18/index/90.1.php"   >   <li>90.1</li></a>
    
  
    </ol>
  </li>

<li>Page no 91
    <ol>
    <a href="chapter18/index/91.1.php"   >   <li>91.1</li></a>
   
  
    </ol>
  </li>

<li>Page no 92
    <ol>
    <a href="chapter18/index/92.1.php"   >   <li>92.1</li></a>
   
  
    </ol>
  </li>

<li>Page no 93
    <ol>
    <a href="chapter18/index/93.1.php"   >   <li>93.1</li></a>
    <a href="chapter18/index/93.2.php"   >   <li>93.2</li></a>
  <a href="chapter18/index/93.3.php"   >   <li>93.3</li></a>
  <a href="chapter18/index/93.4.php"   >   <li>93.4</li></a>
    </ol>
  </li>



<li>Page no 94
    <ol>
    <a href="chapter18/index/94.1.php"   >   <li>94.1</li></a>
    
  
    </ol>
  </li>


<li>Page no 95
    <ol>
    <a href="chapter18/index/95.1.php"   >   <li>95.1</li></a>
    
  
    </ol>
  </li>


<li>Page no 96
    <ol>
    <a href="chapter18/index/96.1.php"   >   <li>96.1</li></a>
     <a href="chapter18/index/96.2.php"   >   <li>96.2</li></a>
  
    </ol>
  </li>


<li>Page no 97
    <ol>
    <a href="chapter18/index/97.1.php"   >   <li>97.1</li></a>
    <a href="chapter18/index/97.2.php"   >   <li>97.2</li></a>
  
    </ol>
  </li>


<li>Page no 98
    <ol>
    <a href="chapter18/index/98.1.php"   >   <li>98.1</li></a>
    <a href="chapter18/index/98.2.php"   >   <li>98.2</li></a>
  
    </ol>
  </li>


<li>Page no 99
    <ol>
    <a href="chapter18/index/99.1.php"   >   <li>99.1</li></a>
    
  
    </ol>
  </li>



  <li>Page no 100
    <ol>
  <a href="chapter18/page1/100.php"   ><li >no ar</li></a>

    </ol>
  </li>







</ol>
<!-- partial -->
  
</body>
</html>
