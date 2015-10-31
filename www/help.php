<!doctype html>
<!--[if IE 7 ]>       <html class="no-js ie ie7 lte7 lte8 lte9" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>       <html class="no-js ie ie8 lte8 lte9" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>       <html class="no-js ie ie9 lte9>" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en-US">
   <!--<![endif]-->

<html lang="en">
   <head>
      <title>The testdrive Machine</title>

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
 
<!-- Begin: Help page -->
<div data-theme="a" id="pageHelp" data-role="page" data-fullscreen="false" ><section>
   
   <script> writeHeader("backhome", "home")</script>

   <div data-role="content">
      <div class="content-primary" id="Settings">
         <ul data-role="listview"  id="SettingsList" data-icon="arrow-r" data-inset="true" >
            <li data-role="divider"> <h4>Help Menu </h4> </li>
            <li> <a href="contact.php" data-ajax="false">Contact </a> </li>
         </ul>
      </div>
   </div>
   
   <script> writeFooter(); </script>

</section></div>
<!-- End: Help section -->

<!-- Begin: Glossary page -->
<div data-theme="a" id="pageGlossary" data-role="page" data-fullscreen="false" ><section>
   
   <script> writeHeader("backhelp", "home")</script>

   <div data-role="content">
      <div class="content-primary" id="Settings">
         <ul data-role="listview"  id="SettingsList" data-icon="arrow-r" data-inset="true" >
            <li data-role="divider"> <h4>Glossary </h4> </li>
            <li> <a href="#pageOSETerms">OpenShift</a> </li>
            <li> <a href="#pageAWSTerms">AWS</a> </li>
         </ul>
      </div>
   </div>
   
   <script> writeFooter(); </script>

</section></div>
<!-- End: Glossary section -->

<!-- Begin: AWSTerms Page -->
<div data-theme="a" id="pageAWSTerms" data-role="page"><section>
   
   <script>writeHeader("backhelp", "home")</script>
      
   <div data-role="content">
      <div class="content-primary" id="Terms">
         <ul data-role="listview" data-filter="true" id="TermsList" data-icon="arrow-r" data-inset="true" >
            
            <li data-role="divider">
               Terminology
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Amazon Web Services
                  </h4>
                     <p align=justify style="white-space:normal;">
Amazon Web Services (AWS) is a collection of remote computing services, also called web services, 
that make up a cloud computing platform by Amazon.com. 
The most central and well-known of these services are Amazon EC2 and Amazon S3. 
<a href="http://en.wikipedia.org/wiki/Amazon_Web_Services">Wikipedia</a>
                   </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Test Drives
                  </h4>
                     <p align=justify style="white-space:normal;">
AWS Test Drive provides a private IT sandbox environment containing preconfigured server based solutions. 
In under an hour, and using a step-by-step lab manual and video, launch, login and learn about these popular 3rd party IT solutions, powered by AWS and CloudFormation.
Test Drives are developed by AWS Partner Network (APN) Consulting and Technology Partners and are provided free of charge in return for your registration with the Partner that built the Test Drive.
Each Test Drive includes enough free AWS datacenter time to experience using the IT solution, crafted by the industry’s leading System Integrators (SIs) and Independent Software Vendors (ISVs).  
If you like the Test Drive you can request a private Pilot of the system from the Test Drive Partner.
                   </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Amazon Machine Image
                  </h4>
                     <p align=justify style="white-space:normal;">         
An Amazon Machine Image (AMI) is a special type of virtual appliance that is used to instantiate (create) 
a virtual machine within the Amazon Elastic Compute Cloud ("EC2"). 
It serves as the basic unit of deployment for services delivered using EC2.
<a href="en.wikipedia.org/wiki/Amazon_Machine_Image">Wikipedia</a>
                   </p>
               </div>
            </li>
            
            <li>
               <div data-role="collapsible">
                  <h4>
FQDN
                  </h4>
                     <p align=justify style="white-space:normal;">         

A fully qualified domain name (FQDN) is the complete domain name for a specific computer, or host, on the Internet. 
The FQDN consists of two parts: the hostname and the domain name. 
For example, an FQDN for a hypothetical mail server might be mymail.somecollege.edu.
<a href="https://kb.iu.edu/d/aiuv">https://kb.iu.edu/d/aiuv</a>
                   </p>
               </div>
            </li>
                        
   </div>
   
   <script> writeFooter(); </script>
         
</section></div>
<!-- End: AWSTerms Page -->
              

<!-- Begin: OSETerms Page -->
<div data-theme="a" id="pageOSETerms" data-role="page"><section>
   
   <script>writeHeader("backhelp", "home")</script>
      
   <div data-role="content">
      <div class="content-primary" id="Terms">
         <ul data-role="listview" data-filter="true" id="TermsList" data-icon="arrow-r" data-inset="true" >
            
            <li data-role="divider">
               Terminology
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Platform as a Service
                  </h4>
                     <p align=justify style="white-space:normal;">
Platform as a service is the cloud service rendition of application infrastructure (middleware), 
the foundation technology for business applications. CIOs, IT planners and architects rely on public, 
private and hybrid platform as a service (PaaS) in their digital business technology decisions.
<a href="https://www.gartner.com/doc/2833022/platform-service-definition-taxonomy-vendor">Gartner</a>                     
</p>
               </div>
            </li>
            
            
            <li>
               <div data-role="collapsible">
                  <h4>
OpenShift Enterprise
                  </h4>
                     <p align=justify style="white-space:normal;">
OpenShift Enterprise by Red Hat is an on-premise, 
private platform as a service solution offering that allows you to deliver apps faster and meet your enterprise's growing application demands. 
With Red Hat's award-winning private Platform as a Service, OpenShift Enterprise, 
you can improve developer productivity, increase operational efficiency, and expand your hardware utilization.  
OpenShift can run anywhere Red Hat Enterprise Linux is supported including the Amazon Web Services (AWS) public cloud infratructure.
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
OpenShift Broker
                  </h4>
                     <p align=justify style="white-space:normal;">
The Broker is a Rails application that manages all application control, user authentication, and DNS updates within OpenShift Enterprise PaaS.
The Broker uses a MongoDB database to keep a record of users and their applications. 
The Broker manages user authentication and DNS changes through the use of provided plugins.                    
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
OpenShift Enterprise Test Drive
                  </h4>
                     <p align=justify style="white-space:normal;">
The OpenShift Enterprise Test Drive consists of four Amazon managed instances (AMI) based on Red Hat Enterprise Linux (RHEL).  
The AMIs consists of one OSE Broker, two acting as OSE Nodes, and a fourth as a general client environment. 
The OSE Broker is a Rails application that manages all application control, user authentication, and DNS updates within OpenShift Enterprise PaaS.  Node servers are the systems that host user applications.  Each node can host many applications using a secure, multi-tenanted container model.  Known as "gears", each gear represents the slice of the 
Node’s CPU, RAM and base storage that is made available to each application
Each customer lab is provisioned on a unique VPC in order to have the same IP addressing scheme within each VPC. 
The following documentation shows you how to attach the GlusterFS volume to each one of the clients using GlusterFS native, NFS, SMB and Object access protocols.
                     </p>
               </div>
            </li>
                        
            <li>
               <div data-role="collapsible">
                  <h4>
Application
                  </h4>
                     <p align=justify style="white-space:normal;">
This is your typical web application that will run on OpenShift. At this time, Open‐
Shift is focused on hosting web applications. With this in mind, and to try to provide
some security for your applications, the only ports exposed to incoming traffic are
HTTP (80), HTTPS (443), and SSH (22). OpenShift also provides beta WebSocket
support on HTTP (8000) and HTTPS (8443).
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Domains
                  </h4>
                     <p align=justify style="white-space:normal;">
OpenShift allows a user to create multiple domains that are associated with their account. 
Keep in mind that the domain in this context does not refer to the domain name of the application, 
but rather to a unique identifier for grouping your applications.                     
                    </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Gear
                  </h4>
                     <p align=justify style="white-space:normal;">
A gear is a server container with a set of resources that allows users to run their
applications. Your gears run on OpenShift in the cloud. There are currently three
gear types on OpenShift Online: small, medium, and large. Each size provides 1 GB
of disk space by default. The large gear has 2 GB of RAM, the medium gear has 1
GB of RAM, and the small gear has 512 MB of RAM.
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Cartridge
                  </h4>
                  <div  style="white-space:normal;">
                     <p align=justify style="white-space:normal;">
To get a gear to do anything, you need to add a cartridge. Cartridges are the plugins
that house the framework or components that can be used to create and run an
application. One or more cartridges run on each gear, and the same cartridge can
run on many gears for clustering or scaling. There are two kinds of cartridges:
<b>Standalone</b>
These are the languages or application servers that are set up to serve your web content, such as JBoss, Tomcat, Python, or Node.js. Having one of these cartridges is sufficient to run an application.
<b>Embedded</b>
An embedded cartridge provides functionality to enhance your application,
such as a database or Cron, but cannot be used on its own to create an application.
                     </p>
               </div>
            </li>
                        
            <li>
               <div data-role="collapsible">
                  <h4>
Scalable Application
                  </h4>
                     <p align=justify style="white-space:normal;">
Application scaling enables your application to react to changes in traffic and automatically allocate the necessary resources to handle your increased demand. The
OpenShift infrastructure monitors incoming web traffic and automatically brings
up new gears with the appropriate web cartridge online to handle more requests. 
When traffic decreases, the platform retires the extra resources. 
When you create a scaled application, it can consume multiple gears: one for the high-availability proxy (HAProxy) itself, 
and one or more for your actual application. If you add other cartridges like PostgreSQL or MySQL to your application, 
they are installed on their own dedicated gears.  
The HAProxy cartridge sits between your application and the network and routes web traffic to your web cartridges. 
When traffic increases, HAProxy notifies the OSE servers that it needs additional capacity. 
There is a web page dedicated to explaining how scaling works on OpenShift.
                     </p>
               </div>
            </li>
            
            <li>
               <div data-role="collapsible">
                  <h4>
Client tools, Web Console, or Eclipse plug-ins

                  </h4>
                     <p align=justify style="white-space:normal;">
You can interact with the OpenShift platform via RHC client command-line tools
you install on your local machine, the OpenShift Web Console, or a plug-in you
install in Eclipse to interact with your application in the OpenShift cloud. The only
time you must use these tools is when you are managing the infrastructure or components
of your application. For example, you would use these tools when creating
an application or embedding a new cartridge. The rest of your work with your
application will happen through Git and SSH, which we describe in the following
section.
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Port Forwarding
                  </h4>
                     <p align=justify style="white-space:normal;">
With OpenShift port forwarding, developers can connect to their remote services while using 
local client tools without having to worry about the details of configuring complicated firewall rules. 
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Regions and Zones
                  </h4>
                     <p align=justify style="white-space:normal;">
OpenShift Enterprise supports grouping nodes into regions and zones. 
Regions and zones provide a way for brokers to manage several distinct geographies by controlling application deployments across a selected group of nodes. A group of nodes can form a zone and several zones can belong to a single region. 
These groups can represent logical environments, physical geographies, such as different countries or data centers, or can be used to provide network level separation between node environments.  
Zones can be mapped to physical locations such as, e.g. specific blades in a rack.
                     </p>
               </div>
            </li>

            <li>
               <div data-role="collapsible">
                  <h4>
Districts
                  </h4>
                     <p align=justify style="white-space:normal;">
Districts facilitate gear movement between node hosts in order to manage resource usage.  
Districts and zones can be combined to protect against affinity of gear placement to physical hardware.  
For example, by assigning a district to span multiple physically mapped zones, 
the OSE gear deployment algorithm will ensure that scaled gears are not collocated.
                     </p>
               </div>
            </li>
                        
            <li>
               <div data-role="collapsible">
                  <h4>
Quickstarts
                  </h4>
                     <p align=justify style="white-space:normal;">
Developers can create applications using QuickStarts, which are preconfigured applications installed from a specific source.  
QuickStarts are not available to developers by default in OpenShift Enterprise but can be added by editing the quickstarts.json 
file on the broker host.
                     </p>
               </div>
            </li>
                              

                                    
         </ul>
   </div>
   
   <script> writeFooter(); </script>
         
</section></div>
<!-- End: Terms Page -->
            
            



<!-- Begin: FAQ Page -->
<div data-theme="a" id="pageFAQ" data-role="page"><section>
   
   <script>writeHeader("backhelp", "home")</script>
      
   <div data-role="content">
      <div class="content-primary" id="Terms">
         <ul data-role="listview" data-filter="true" id="TermsList" data-icon="arrow-r" data-inset="true" >
            <li data-role="divider">
               Frequently Asked Questions
            </li>

            <li>
               <div data-role="collapsible">
<h5>
My First Q
</h5>

<p>
<div style="white-space:normal;">
Some text.
</div>
</p>

               </div>
            </li>


         
         
   </div>
   
   <script> writeFooter(); </script>
         
</section></div>
<!-- End: FAQ Page -->


      <div data-theme="a" id="pageResources" data-role="page"><section>

         <script> writeHeader("backhelp", "home"); </script>
         
         <div data-role="content">
            <div class="content-primary" id="Resource">
               <ul data-role="listview"  id="ResourceList" data-icon="arrow-r" data-inset="true" >
                  <li data-role="divider">
                     <h4>Resources </h4>                    
                  </li>

                     <li>
                        <a href="#pageYoutube" data-ajax="false">
                           Youtube
                        </a>
                     </li> 
                  
                     <li>
                        <a href="https://access.redhat.com/documentation/en-US/OpenShift_Enterprise/" data-ajax="false">
                           Documentation
                        </a>
                     </li> 

                     <li>
                        <a href="https://developers.openshift.com/" data-ajax="false">
                           Developers Portal
                        </a>
                     </li>
                                       
                     <li>
                        <a href="https://developers.openshift.com/en/overview-platform-features.html" data-ajax="false">
                          Features
                        </a>
                     </li>

                     <li>
                        <a href="https://developers.openshift.com/en/managing-client-tools.html" data-ajax="false">
                           Client Tools
                        </a>
                     </li>                               


                     <li>
                        <a href="https://www.openshift.com/promotions/ebook" data-ajax="false">
                           Getting Started eBook
                        </a>
                     </li>                               

                     <li>
                        <a href="https://www.openshift.com/" data-ajax="false">
                           OpenShift Online
                        </a>
                     </li> 
                  
                     <li>
                        <a href="https://github.com/openshift" data-ajax="false">
                           GitHub
                        </a>
                     </li> 
                                 
                     <li>
                        <a href="http://training.runcloudrun.com/standard/" data-ajax="false">
                           Training
                        </a>
                     </li> 
 
                  
               </ul>
            </div>
         </div>

         <script> writeFooter(); </script>

      </section></div>
      <!-- End: Resource Page -->

 <!-- Begin: Youtube Page -->
<div data-theme="a" id="pageYoutube" data-role="page"><section>
   
   <script>writeHeader("backhelp", "home")</script>

         <div data-role="content" align="center">
      <iframe width="300" height="200" src="https://www.youtube.com/embed/rbFIHgHDRgo" frameborder="0" allowfullscreen></iframe>
         </div>
   <script> writeFooter(); </script>
         
</section></div>
<!-- End: Bruce Page -->     
     
           
 <!-- Begin: Bruce Page -->
<div data-theme="a" id="pageBruce" data-role="page"><section>
   
   <script>writeHeader("backhelp", "home")</script>

         <div data-role="content">
      <iframe width="300" height="200" src="https://www.youtube.com/embed/_f_p0CgPeyA" frameborder="0" allowfullscreen></iframe>
         </div>
   <script> writeFooter(); </script>
         
</section></div>
<!-- End: Bruce Page -->     
     
      
 </body>
 
  
</html>

          