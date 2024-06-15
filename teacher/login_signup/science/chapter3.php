
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
  <title>chapter 3</title>
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
  
    
  <h1 style="color: white;">Chapter 3</h1>
<h2  style="color: white; font-size: 20px;">Subpoints Page no wise Augmented Reality </h2>

 




  <li>Page no 30
    <ol>
      <a href="chapter3/index/30.1.php"   ><li >30.1</li></a>
     
    </ol>
  </li>


  <li>Page no 31
    <ol>
     <a href="chapter3/page/31.php"   >  <li>no ar</li></a>
    
    </ol>
  </li>


  <li>Page no 32
    <ol>
    <a href="chapter3/index/32.1.php"   >   <li>32.1</li></a>
  
    </ol>
  </li>



  <li>Page no 33
    <ol>
     <a href="chapter3/index/33.1.php"   >  <li>33.1</li></a>

    </ol>
  </li>



  <li>Page no 34
    <ol>
     <a href="chapter3/page/34.php"   >  <li>no ar</li></a>
     
    </ol>
  </li>

   <li>Page no 35
    <ol>
     <a href="chapter3/index/35.1.php"   >  <li>35.1</li></a>
      
    </ol>
  </li>



   <li>Page no 36
    <ol>
    <a href="chapter3/index/36.1.php"   >   <li>36.1</li>  </a>
    </ol>
  </li>




   <li>Page no 37
    <ol>
     <a href="chapter3/page/37.php"   >  <li>no ar</li></a>
    </ol>
  </li>

   <li>Page no 38
    <ol>
    <a href="chapter3/index/38.1.php"   > <li>38.1</li>  </a>
    </ol>
  </li>



   <li>Page no 39
    <ol>
     <a href="chapter3/page/39.php"   > <li>no ar</li>  </a>
    </ol>
  </li>

   <li>Page no 40
    <ol>
     <a href="chapter3/page/40.php"   > <li>no ar</li>  </a>
    </ol>
  </li>

   <li>Page no 41
    <ol>
     <a href="chapter3/page/41.php"   >  <li>no ar</li>  </a>
    </ol>
  </li>

   <li>Page no 42
    <ol>
      <a href="chapter3/page/42.php"  . > <li>no ar</li>  </a>
    </ol>
  </li>


<li>Page no 43
    <ol>
    <a href="chapter3/page/43.php"   > <li>no ar</li>  </a>
    </ol>
  </li>


<li>Page no 44
    <ol>
    <a href="chapter3/index/44.1.php"   > <li>44.1</li>  </a>
    </ol>
  </li>
  
<li>Page no 45
    <ol>
    <a href="chapter3/page/45.php"   > <li>no ar</li>  </a>
    </ol>
  </li>
  
<li>Page no 46
    <ol>
    <a href="chapter3/page/46.php"   > <li>no ar</li>  </a>
    </ol>
  </li>







</ol>
<!-- partial -->
  
</body>
</html>
