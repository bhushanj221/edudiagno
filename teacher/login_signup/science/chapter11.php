
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
  <title>chapter 11</title>
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
  
  <h1 style="color: white;">Chapter 11</h1>
<h2  style="color: white; font-size: 20px;">Subpoints Page no wise Augmented Reality </h2>

 




  <li>Page no 1
    <ol>
    <a href="chapter11/index/1.1.php"   >   <li>1.1</li></a>
    
  
    </ol>
  </li>

<li>Page no 2
    <ol>
    <a href="chapter11/index/2.1.php"   >   <li>2.1</li></a>
    <a href="chapter11/index/2.2.php"   >   <li>2.2</li></a>
  
    </ol>
  </li>

<li>Page no 3
    <ol>
    <a href="chapter11/index/3.1.php"   >   <li>3.1</li></a>
    
  
    </ol>
  </li>

<li>Page no 4
    <ol>
    <a href="chapter11/index/4.1.php"   >   <li>4.1</li></a>
   
  
    </ol>
  </li>

<li>Page no 5
    <ol>
    <a href="chapter11/index/5.1.php"   >   <li>5.1</li></a>
   
  
    </ol>
  </li>

<li>Page no 6
    <ol>
    <a href="chapter11/index/6.1.php"   >   <li>6.1</li></a>
    <a href="chapter11/index/6.2.php"   >   <li>6.2</li></a>
  
    </ol>
  </li>



<li>Page no 7
    <ol>
    <a href="chapter11/index/7.1.php"   >   <li>7.1</li></a>
    
  
    </ol>
  </li>


<li>Page no 8
    <ol>
    <a href="chapter11/index/8.1.php"   >   <li>8.1</li></a>
    
  
    </ol>
  </li>

<li>Page no 9
    <ol>
    <a href="chapter11/index/9.1.php"   >   <li>9.1</li></a>
    
  
    </ol>
  </li>


<li>Page no 10
    <ol>
    <a href="chapter11/index/10.1.php"   >   <li>10.1</li></a>
    
  
    </ol>
  </li>


  <li>Page no 11
    <ol>
  <a href="chapter11/page1/11.php"   ><li >no ar</li></a>

    </ol>
  </li>







</ol>
<!-- partial -->
  
</body>
</html>
