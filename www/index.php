<?php
?>

<!doctype html>
<!--[if IE 7 ]>       <html class="no-js ie ie7 lte7 lte8 lte9" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>       <html class="no-js ie ie8 lte8 lte9" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>       <html class="no-js ie ie9 lte9>" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en-US">
   <!--<![endif]-->

<html lang="en">
   <head>
      <title>OpenShift V3 TestDrive</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/themes/testdrivetheme.min.css" />
      <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile.structure-1.4.0.min.css" />
      <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
      
      <link rel="stylesheet" href="css/testdrive.css" />      
      <script src="js/testdrive.js"  ></script>  
   </head>
   <body>

      <!-- Begin: Home Page -->
      <div id="pageHome" data-theme="a" data-role="page" data-ajax="false"  >
         
         <script> writeHeader("info", "home"); </script>


            <div data-role="content">
               <div class="content-primary" id="Home">
                  <ul  data-role="listview" id="HomeList" data-inset="true" data-icon="arrow-r">
                     <li data-role="divider">
                        <h4><var style="font-size:15px;font-style:normal;" class="welcome">Main Menu</var></h4>
                     </li>

                     <li>
                        <a href="about.php" data-ajax="false">About 
                        </a>
                     </li>
                      
                     <li>
                        <a href="fqdn.php" data-ajax="false">Set FQDN:PORT 
                        </a>
                     </li>

                     <li>
                        <a href="getkiecontainer.php" data-ajax="false">Get KIE Container 
                        </a>
                     </li>
                     
                     <li>
                        <a href="postfacts.php" data-ajax="false">Post Facts 
                        </a>
                     </li>
                                                                                                        
                  </ul>
               </div>
            </div>

         <script> writeFooter(); </script>

      </div>
      <!-- End: Home Page -->
      


      



</body>

<script>





</html>
