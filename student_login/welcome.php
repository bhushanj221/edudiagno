<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: log.php");
    exit;
}
?>

















 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Target Police Bharti</title>
    
    <!-- Favicons -->
  <link href="images/icon.jpg" rel="icon">
  <link href="images/icon.jpg" rel="apple-touch-icon">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<!-- 
       <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div> -->

<!-- 
    <p>

        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p> -->





    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="index.html">Bin</a>  -->
                <h1 style="color: white;">Welcome Master <b class="page-header" style="color: white;" ><?php echo htmlspecialchars($_SESSION["username"]); ?></b>  Love to see You.</h1>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> “A good teacher can inspire hope, ignite the imagination, and instill a love of learning.” <b>Brad Henry.</b> <br> <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">logo
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="images/icon.jpg" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a   href="http://codeappmedia.com/test_file/display-copy.php"><i class="	fa fa-file-code-o" style="font-size: 38px"></i> Host Your Website</a>
                    </li>
                     <li>
                        <a  href="https://t.me/joinchat/N4uKIxpVfQbPagauNNFwcg"><i class="fa fa-telegram" style="font-size:48px;color:blue"></i>Free Telegram Channel</a>
                    </li>
                    <li>
                        <a  href="https://chat.whatsapp.com/EHF1qZmFCY8FXNAcIqN1Em"><i class="fa fa-whatsapp" style="font-size:48px;color:green"></i> Free WhatsApp Group</a>
                    </li>

              
                  <li  >


                                       
                
                        <a  href="logout.php"><i class="fa fa-square-o fa-3x"></i> Logout</a>


                    </li>   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="font-size: 16px; color:black;"> 
                </h2>   
                       
                    </div>
                </div>              
                 <!-- /. ROW  -->
      
                 <!-- /. ROW  -->
                <hr />                
           
                 <!-- /. ROW  -->
                 <!-- /. ROW  -->
                <div class="row" >
               
                    <div class="col-md-9 col-sm-12 col-xs-12">
                 <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 style="font-family: bold ; font-size: 20px;"> 10th Science Augmented Reality Lab <b></b></h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th >Sr. no.</th>
                                            <th>Topic Name(Section 1)</th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                           
                                           
                                             <td><a href="science/chapter1.php">Gravitation</a></td>
                                            
                                           
                                        </tr>
                                        
                                        
                                        <td>02</td>

                                           
                                             <td><a href="science/chapter2.php">Periodic classification of elements</a></td>
                                             
                                          
                                        </tr>
                                        
                                
                                
                                        
                                        
                                        
                                        
                                         <td>03</td>
                                            
                                           
                                            
                                             
                                           <td><a href="science/chapter3.php"> Chemical Reaction And Equation</a> </td>
                                        </tr>
                                        
                                        
                                        
                                                                                 <td>04</td>

                                           
                                             <td><a href="science/chapter4.php">Effects of Electric current</a></td>
                                             
                                          
                                        </tr>
                                        
                                        
                                        
                                                                                
                                                                                
                                        
                                        
                                        
                                                                                 <td>05</td>
                                          
                                           
                                            
                                           <td><a href="science/chapter5.php">Heat</a></td>
                                        </tr>
                                        
                                        
                                        
                                        
                                                                                 <td>06</td>

                                           
                                           
                                             
                                         <td><a href="science/chapter6.php">Refraction of Light</a></td>
                                        </tr>
                                        
                                        
                                        
                                        
                                                                                                                        <td>07</td>
                                           
                                           
                                             
                                       <td><a href="science/chapter7.php">Lenses </a></td>
                                        </tr>
                                        
                                       

<td>08</td>
                                           
                                           
                                            
                                         <td><a href="science/chapter8.php">Metallurgy </a></td>
                                        </tr>




<td>09</td>
                                        
                                           
                                             
                                       <td><a href="science/chapter9.php">Carbon Compound </a></td>
                                        </tr>
                                        
                                        
                                        <td>10</td>
                                     
                                             
                                        <td><a href="science/chapter10.php">Space Mission</a></td>
                                        </tr>


                                        
                                        
                                   
                                  

                                    </tbody>
                                </table>
                                </div>
                                
                                 <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th >Sr. no.</th>
                                            <th>Topic Name (SECTION 2)</th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                                                        <br/><br/>
                                    <tbody>
                                        <tr>
                                   


                                        
                                        
                                        <td>11</td>
    
                                           
                                             
                                         <td><a href="science/chapter11.php">Heredity and Evolution</a></td>
                                        </tr>
                                        
                                        
                                        <td>12</td>
                                        
                                           
                                             
                                         <td><a href="science/chapter12.php">Life Processes in living organisms Part-1 </a></td>
                                        </tr>
                                        
                                        
                                        
                                        
                                        
                                         <td>13</td>
                                        
                                           
                                             
                                         <td><a href="science/chapter13.php">Life Processes in living organisms Part-2</a></td>
                                        </tr>
                                        
                                        
                                        
                                        
                                         <td>14</td>
                                        
                                           
                                             
                                         <td><a href="science/chapter14.php">Environment Management</a></td>
                                        </tr>
                                        
                                        
                                        
                                        
                                         <td>15</td>
                                        
                                           
                                             
                                         <td><a href="science/chapter15.php">Towards Green Energy</a></td>
                                        </tr>
                                        
                                        
                                        
                                        
                                         <td>16</td>
                                        
                                           
                                             
                                         <td><a href="science/chapter16.php">Animal Classification</a></td>
                                        </tr>
                                        
                                        
                                        
                                        
                                         <td>17</td>
                                        
                                           
                                             
                                         <td><a href="science/chapter17.php">Introduction to Microbiology</a></td>
                                        </tr>
                                        
                                        
                                        
                                        
                                         <td>18</td>
                                        
                                           
                                             
                                         <td><a href="science/chapter18.php">Cell Biology and Biotechnology</a></td>
                                        </tr>
                                        
                                        
                                        
                                         <td>19</td>
                                        
                                           
                                             
                                         <td><a href="science/chapter19.php">Social health</a></td>
                                        </tr>
                                        
                                        
                                         <td>20</td>
                                        
                                           
                                             
                                         <td><a href="science/chapter20.php">Disaster Management</a></td>
                                        </tr>
                                  

                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                  
                    </div>
                </div>
                 <!-- /. ROW  -->
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
