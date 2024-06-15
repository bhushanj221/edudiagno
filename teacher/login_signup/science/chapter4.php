
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
  <title>chapter 4</title>
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
  
    
    
  <h1 style="color: white;">Chapter 4</h1>
<h2  style="color: white; font-size: 20px;">Subpoints Page no wise Augmented Reality </h2>

 




  <li>Page no 47
    <ol>
      <a href="chapter4/page/47.php"   ><li >no ar</li></a>
     
    </ol>
  </li>


  <li>Page no 48
    <ol>
     <a href="chapter4/page/48.php"   ><li >no ar</li></a>
    
    </ol>
  </li>


  <li>Page no 49
    <ol>
    <a href="chapter4/index/49.1.php"   >   <li>49.1</li></a>
  
    </ol>
  </li>



  <li>Page no 50
    <ol>
  <a href="chapter4/page/50.php"   ><li >no ar</li></a>

    </ol>
  </li>



  <li>Page no 51
    <ol>
     <a href="chapter4/index/51.1.php"   >  <li>51.1</li></a>
     
    </ol>
  </li>

   <li>Page no 52
    <ol>
     <a href="chapter4/index/52.1.php"   >  <li>52.1</li></a>
      
    </ol>
  </li>



   <li>Page no 53
    <ol>
    <a href="chapter4/index/53.1.php"   >   <li>53.1</li>  </a>
    </ol>   
  </li>




   <li>Page no 54
    <ol>
     <a href="chapter4/index/54.1.php"   >  <li>54.1</li></a>
    </ol>
  </li>

   <li>Page no 55
    <ol>
    <a href="chapter4/index/55.1.php"   > <li>55.1</li>  </a>
    </ol>
  </li>



   <li>Page no 56
    <ol>
     <a href="chapter4/index/56.1.php"   > <li>56.1</li>  </a>
    </ol>
  </li>

   <li>Page no 57
    <ol>
     <a href="chapter4/index/57.1.php"   > <li>57.1</li>  </a>
    </ol>
  </li>

   <li>Page no 58
    <ol>
     <a href="chapter4/index/58.1.php"   >  <li>58.1</li>  </a>
     <a href="chapter4/index/58.2.php"   >  <li>58.2</li>  </a>
    </ol>
    
   
  </li>






   <li>Page no 59
    <ol>
      <a href="chapter4/index/59.1.php"  . > <li>59.1</li>  </a>
    </ol>
  </li>


<li>Page no 60
    <ol>
    <a href="chapter4/index/60.1.php"   > <li>60.1</li>  </a>
    </ol>
  </li>



  
<li>Page no 61
    <ol>
    <a href="chapter4/page/61.php"   > <li>no ar</li>  </a>
    </ol>
  </li>
  








</ol>
<!-- partial -->
  
</body>
</html>
