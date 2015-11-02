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
      <title>AWS OpenShift Test Drive</title>
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
 
<!-- Begin: About page -->
<div data-theme="a" id="pageAbout" data-role="page" data-fullscreen="false"><section>

   <script> writeHeader("backhome", "info"); </script>
         
   <div class="content" data-role="content">
      <h3 style="color:orange">About</h3>
 
      <div style="color:white;" align="justify"> 
<p>
Welcome to the OpenShift Enterprise by Red Hat Test Drive companion for the weighwatcher demo.
A comprehensive write-up of the weightwatcher demo is available in the docs location at <a href="https://github.com/StefanoPicozzi/weightwatcher2">GitHub repository</a>
</p>

<p>
To execute these test case, first Set the FQDN:PORT that hosts your targeted weightwatcher application instance.  
</p>

<p>
You can then test a sample invocation using the Post Facts menu option.  
This will send a payload of weight observations to the Decision Server.  
The service will then reason over these facts and return a payload of insights as an XML response payload
</p>

     </div>

   </div>
   
   <script> writeFooter(); </script>

   </body>
</html>

          