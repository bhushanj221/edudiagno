
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
  <title>chapter 16</title>
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
  
  <h1 style="color: white;">Chapter 16</h1>
<h2  style="color: white; font-size: 20px;">Subpoints Page no wise Augmented Reality </h2>

 




  <li>Page no 61
    <ol>
    <a href="chapter16/index/61.1.php"   >   <li>61.1</li></a>
    
  
    </ol>
  </li>

<li>Page no 62
    <ol>
    <a href="chapter16/index/62.1.php"   >   <li>62.1</li></a>
    
  
    </ol>
  </li>

<li>Page no 63
    <ol>
    <a href="chapter16/index/63.1.php"   >   <li>63.1</li></a>
    
  
    </ol>
  </li>

<li>Page no 64
    <ol>
    <a href="chapter16/index/64.1.php"   >   <li>64.1</li></a>
   <a href="chapter16/index/64.2.php"   >   <li>64.2</li></a>
  
    </ol>
  </li>


<li>Page no 65
    <ol>
    <a href="chapter16/index/65.1.php"   >   <li>65.1</li></a>
   
  
    </ol>
  </li>

<li>Page no 66
    <ol>
    <a href="chapter16/index/66.1.php"   >   <li>66.1</li></a>
   
  
    </ol>
  </li>

<li>Page no 67
    <ol>
    <a href="chapter16/index/67.1.php"   >   <li>67.1</li></a>
    <a href="chapter16/index/67.2.php"   >   <li>67.2</li></a>
  
    </ol>
  </li>



<li>Page no 68
    <ol>
    <a href="chapter16/index/68.1.php"   >   <li>68.1</li></a>
    <a href="chapter16/index/68.2.php"   >   <li>68.2</li></a>
  
    </ol>
  </li>


<li>Page no 69
    <ol>
    <a href="chapter16/index/69.1.php"   >   <li>69.1</li></a>
    
  
    </ol>
  </li>


<li>Page no 70
    <ol>
    <a href="chapter16/index/70.1.php"   >   <li>70.1</li></a>
    <a href="chapter16/index/70.2.php"   >   <li>70.2</li></a>
  
    </ol>
  </li>

<li>Page no 71
    <ol>
    <a href="chapter16/index/71.1.php"   >   <li>71.1</li></a>
     
  
    </ol>
  </li>



  <li>Page no 72
    <ol>
    <a href="chapter16/index/72.1.php"   >   <li>72.1</li></a>
    
  
    </ol>
  </li>




<li>Page no 73
    <ol>
    <a href="chapter16/index/73.1.php"   >   <li>73.1</li></a>
     <a href="chapter16/index/73.2.php"   >   <li>73.2</li></a>
   <a href="chapter16/index/73.3.php"   >   <li>73.3</li></a>
    </ol>
  </li>



<li>Page no 74
    <ol>
    <a href="chapter16/index/74.1.php"   >   <li>74.1</li></a>
     <a href="chapter16/index/74.2.php"   >   <li>74.2</li></a>
   <a href="chapter16/index/74.3.php"   >   <li>74.3</li></a>
    </ol>
  </li>





  <li>Page no 75
    <ol>
  <a href="chapter16/page1/75.php"   ><li >no ar</li></a>

    </ol>
  </li>

 <li>Page no 76
    <ol>
  <a href="chapter16/page1/76.php"   ><li >no ar</li></a>

    </ol>
  </li>






</ol>
<!-- partial -->
  
</body>
</html>
