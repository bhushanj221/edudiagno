
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
  <title>chapter 17</title>
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
  
  <h1 style="color: white;">Chapter 17</h1>
<h2  style="color: white; font-size: 20px;">Subpoints Page no wise Augmented Reality </h2>

 




  <li>Page no 77
    <ol>
    <a href="chapter17/index/77.1.php"   >   <li>77.1</li></a>
    
  
    </ol>
  </li>

<li>Page no 78
    <ol>
    <a href="chapter17/index/78.1.php"   >   <li>78.1</li></a>
    
  
    </ol>
  </li>

<li>Page no 79
    <ol>
    <a href="chapter17/index/79.1.php"   >   <li>79.1</li></a>
    <a href="chapter17/index/79.2.php"   >   <li>79.2</li></a>
  
    </ol>
  </li>

<li>Page no 80
    <ol>
    <a href="chapter17/index/80.1.php"   >   <li>80.1</li></a>
   
  
    </ol>
  </li>

<li>Page no 81
    <ol>
    <a href="chapter17/index/81.1.php"   >   <li>81.1</li></a>
   
  
    </ol>
  </li>

<li>Page no 82
    <ol>
    <a href="chapter17/index/82.1.php"   >   <li>82.1</li></a>
    <a href="chapter17/index/82.2.php"   >   <li>82.2</li></a>
  
    </ol>
  </li>



<li>Page no 83
    <ol>
    <a href="chapter17/index/83.1.php"   >   <li>83.1</li></a>
    
  
    </ol>
  </li>


<li>Page no 84
    <ol>
    <a href="chapter17/index/84.1.php"   >   <li>84.1</li></a>
     <a href="chapter17/index/84.2.php"   >   <li>84.2</li></a>
  
    </ol>
  </li>


<li>Page no 85
    <ol>
    <a href="chapter17/index/85.1.php"   >   <li>85.1</li></a>
     <a href="chapter17/index/85.2.php"   >   <li>85.2</li></a>
  
    </ol>
  </li>


  <li>Page no 86
    <ol>
  <a href="chapter17/page1/86.php"   ><li >no ar</li></a>

    </ol>
  </li>


  <li>Page no 87
    <ol>
  <a href="chapter17/page1/87.php"   ><li >no ar</li></a>

    </ol>
  </li>





</ol>
<!-- partial -->
  
</body>
</html>
