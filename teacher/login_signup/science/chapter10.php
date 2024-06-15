
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
  <title>chapter 10</title>
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
  
  <h1 style="color: white;">Chapter 10</h1>
<h2  style="color: white; font-size: 20px;">Subpoints Page no wise Augmented Reality </h2>

 


<!--135-144-->



<li>Page no 135
    <ol>
     <a href="chapter10/page/135.php"   >  <li>no ar</li></a>
      
    </ol>
  </li>




<li>Page no 136
    <ol>
     <a href="chapter10/index/136.1.php"   ><li >136.1</li></a>
    
    </ol>
  </li>
  
  <li>Page no 137
    <ol>
     <a href="chapter10/index/137.1.php"   ><li >137.1</li></a>
    
    </ol>
  </li>



  <li>Page no 138
    <ol>
      <a href="chapter10/page/138.php"   ><li >no ar</li></a>
     
    </ol>
  </li>


 <li>Page no 139
    <ol>
      <a href="chapter10/page/139.php"   ><li >no ar</li></a>
     
    </ol>
  </li>


  <li>Page no 140
    <ol>
     <a href="chapter10/index/140.1.php"   ><li >140.1</li></a>
    
    </ol>
  </li>





 <li>Page no 141
    <ol>
      <a href="chapter10/page/141.php"   ><li >no ar</li></a>
     
    </ol>
  </li>
  
  
  

 <li>Page no 142
    <ol>
      <a href="chapter10/page/142.php"   ><li >no ar</li></a>
     
    </ol>
  </li>
  
  

 <li>Page no 143
    <ol>
      <a href="chapter10/page/143.php"   ><li >no ar</li></a>
     
    </ol>
  </li>
  
  
   <li>Page no 144
    <ol>
      <a href="chapter10/page/144.php"   ><li >no ar</li></a>
     
    </ol>
  </li>
  
  






</ol>
<!-- partial -->
  
</body>
</html>
