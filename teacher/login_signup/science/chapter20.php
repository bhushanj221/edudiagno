
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
  <title>chapter 20</title>
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
  
  <h1 style="color: white;">Chapter 20</h1>
<h2  style="color: white; font-size: 20px;">Subpoints Page no wise Augmented Reality </h2>

 




  <li>Page no 109
    <ol>
    <a href="chapter20/index/109.1.php"   >   <li>109.1</li></a>
    
  
    </ol>
  </li>

<li>Page no 110
    <ol>
    <a href="chapter20/index/110.1.php"   >   <li>110.1</li></a>
    
  
    </ol>
  </li>

<li>Page no 111
    <ol>
    <a href="chapter20/index/111.1.php"   >   <li>111.1</li></a>
    
  
    </ol>
  </li>

<li>Page no 112
    <ol>
    <a href="chapter20/page1/112.php"   >   <li>no ar</li></a>
   
  
    </ol>
  </li>

<li>Page no 113
    <ol>
    <a href="chapter20/index/113.1.php"   >   <li>113.1</li></a>
   
  
    </ol>
  </li>



  <li>Page no 114
    <ol>
  <a href="chapter20/page1/114.php"   ><li >no ar</li></a>

    </ol>
  </li>


<li>Page no 115
    <ol>
  <a href="chapter20/page1/115.php"   ><li >no ar</li></a>

    </ol>
  </li>



<li>Page no 116
    <ol>
    <a href="chapter20/index/116.1.php"   >   <li>116.1</li></a>
   
  
    </ol>
  </li>



<li>Page no 117
    <ol>
  <a href="chapter20/page1/117.php"   ><li >no ar</li></a>

    </ol>
  </li>


<li>Page no 118
    <ol>
  <a href="chapter20/page1/118.php"   ><li >no ar</li></a>

    </ol>
  </li>



<li>Page no 119
    <ol>
  <a href="chapter20/page1/119.php"   ><li >no ar</li></a>

    </ol>
  </li>



<li>Page no 120
    <ol>
  <a href="chapter20/page1/120.php"   ><li >no ar</li></a>

    </ol>
  </li>








</ol>
<!-- partial -->
  
</body>
</html>
