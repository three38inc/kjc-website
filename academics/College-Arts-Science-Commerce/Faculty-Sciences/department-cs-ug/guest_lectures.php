<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website";/*$ROOT is the base URL & should on top of every PAGE */?> 
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kristu Jayanti College, Bengaluru</title>
    <!--<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />-->
    <meta name="author" content="Three38 inc" />
    <link rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/icon.png">
    <!-- Bootstrap css -->
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--additional css-->
    <link rel="stylesheet" type="text/css" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/component.css" />
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/font-awesome.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/roundIcons.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/hoverEffect.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/morphing.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/navTabs.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/animate.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/fakeLoader.css">
    <!--		<link rel="stylesheet" href="../css/deptCustomLink.css">-->

    <!--custom css-->
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/custom.css" rel="stylesheet">
    		<link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/innerpage.css" rel="stylesheet">
    <!-- javascript -->
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/jquery-1.11.0.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/respond.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/custom.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/fakeLoader.js"></script>

</head>

<body>
    <div id="fakeLoader"></div>
    <script>
        $("#fakeLoader").fakeLoader({
            timeToHide: 2000,
            bgColor: "#2c3e50",
            spinner: "spinner4"
        });

    </script>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=578768295582897";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>
    <div class="container-fluid">
        <div class="row">
            <?php require ("../../../../php/navbar.php"); ?>
        </div>
    </div>
    <div id="st-container" class="st-container">
        <?php include("../../../../php/offCanvasMenu.php"); ?>
        <!-- content push wrapper -->
        <div class="st-pusher">
            <div class="st-content">
                <!-- this is the wrapper for the content -->
                <div class="st-content-inner">
                    <div class="container">
                        <div class="row" style="margin-top: 100px; padding-left: 10px; padding-right: 10px;">

                        </div>



                        <div class="row">
                            <div class="col-lg-9">
								<div class="content-left myWelcome wow fadeIn">
									 <img src="images/computerscience_banner.jpg" class="img-responsive" style="margin-bottom:20px;" />

                                <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                    <span>&nbsp; Guest <strong> Lectures </strong></span></h4>
                               
                                <p align=justify>At Kristu Jayanti emphasis is given not only making a student academically brilliant, but true leaders and team players, thus preparing the student for the real life corporate world. This is done by inviting people from industries and top institutions to provide valuable information to our students. The Students are bestowed with knowledge about industry needs, latest technical updates, avenues for higher studies etc. These are the few guest talks provided to the students of the department.</p>
                                
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Network Security
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                     <p><b>DATE:</b> 23rd July, 2016<br />
<b>TIME:</b>11.00 A.M - 1.00 P.M<br />
<b>VENUE:</b> Main Auditorium <br />
<b>TOPIC OF DISCUSSION :</b>  Network Security<br />
<b>DETAILS OF THE DIGNITARY</b><br />
<b>NAME:</b> Mr. Sanal Kumar<br />
<b>DESIGNATION:</b> Training Manager<br />
<b>COMPANY/INSTITUTION:</b> NETCRAFTZ, Bangalore </p>


<p>Department of Computer Science has organized  a seminar  on "Network Security" on 23rd July, 2016 for the students of III BCA, B.Sc & V BCA, B.Sc .</p>
<p>Mr. Sanal Kumar, Training Manager, NETCRAFTZ, Bangalore was the resource person for the seminar. The seminar was about the basic data communication through networks and the threats ,measures taken for providing  network security.</p>

                                                    </div>
                                                </div>
                                </div></div>
                                
                                
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                           Mathematical Modeling
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                    <p><b>DATE:</b> 20th July 2016<br />
<b>TIME:</b> 2.00P.M - 3.30P.M<br />
<b>VENUE:</b> Mini Auditorium I<br />
<b>TOPIC OF DISCUSSION:</b> Mathematical Modeling<br />
<b>DETAILS OF THE DIGNITARY</b><br />
<b>NAME:</b> Dr Pranesh S<br />
<b>DESIGNATION:</b> Professor, Department of Mathematics<br />
<b>COMPANY/INSTITUTION:</b> Christ University  </p>


<p>Department of Mathematics conducted a Guest Lecture for BSc students on "Mathematical Modeling" by Dr Pranesh S, Professor, Department of Mathematics, Christ University on 20th July 2016.</p>

                                                    </div>
                                                </div>
                                </div></div>
                                
                                
                                
             <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                           Networking Technologies
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                   <p><b>DATE:</b> 13-02-2016<br />
<b>TIME:</b> 11:00 TO 1:00 pm<br />
<b>VENUE:</b> Mini Auditorium II<br />
<b>TOPIC OF DISCUSSION:</b> Networking Technologies</p>

<p><b>DETAILS OF THE RESOURSE PERSON -- </b><br />
<b>NAME:</b> Mr.Pavan Kumar K<br />
<b>DESIGNATION:</b> System Executive<br />
<b>COMPANY:</b> CTS, Bangalore<br />
<b>DETAILS OF BENIFICIARIES</b> --<br />
<b>CLASS:</b> VI BCA/BSc (CSME/CSMS)<br />
<b>TOTAL COUNT:</b> 210<br />

<b>DETAILS OF THE EVENT</b> --<br />
<b>ABSTRACT OF THE GUEST LECTURE:</b></p>

<p>On 13th February 2016, a session on "Networking Technologies" was organized for VI Semester BCA and BSc students. Mr. Pavan Kumar k, gave an introduction about himself and his career. He elaborated on various networking technologies which is dominating the present corporate sector. He also briefed on various networking courses based on the expectation of the industry. He also spoke about the importance of language and communication in their career. He interacted with students and motivated the students on completion few certification courses..</p>

                                                    </div>
                                                </div>
                                </div></div>
                                
                                                    
       <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingFour">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                          Overview of Cloud Computing
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                    <div class="panel-body">
                                                   <p><b>DATE:</b> 27-01-2016<br />
<b>TIME:</b> 11:00 TO 1:00 pm<br />
<b>VENUE:</b> Main Auditorium <br />
<b>TOPIC OF DISCUSSION:</b> Overview of Cloud Computing</p>

<p><b>DETAILS OF THE RESOURSE PERSON -- </b><br />
<b>NAME:</b> Mr.Hemanth Manoranjan <br />
<b>DESIGNATION:</b> Alumni, Former Employee of HP<br />
<b>DETAILS OF BENIFICIARIES</b> --<br />
<b>CLASS:</b> II BCA/BSc CSME/CSMS)<br />
<b>TOTAL COUNT:</b> 220<br />
<b>DETAILS OF THE EVENT</b> --<br />
<b>ABSTRACT OF THE GUEST LECTURE:</b></p>
<p>Mr.Hemanth Manoranjan, Alumni, Former employee of HP, Bangalore gave an introduction about himself and his career. He briefed the students on the fundamentals of cloud computing. He spoke on the practical approach and fundamental principal of reusability of IT capabilities. A comparison on cloud with traditional concepts like grid computing, distributed computing and utility computing was done. He also provided awareness on various cloud providers and the services offered. He demonstrated the concept of virtualization using VMware. . The session gave an insight to the cloud computing. Students interacted with the speaker at the end of the session and got benefited. He also motivated the students to take a project on cloud in their course.</p>

                                                    </div>
                                                </div>
                                </div></div>
                                                         
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingFive">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                                         Life in Corporate & Corporate Culture
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                                    <div class="panel-body">
                                                     <p><b>DATE:</b>: 27th June 2015<br />
<b>TIME:</b> 11:00 AM to 1:00 PM<br />
<b>VENUE:</b>Amphi Theatre<br />
<b>TOPIC OF DISCUSSION:</b> LIFE IN CORPORATE & CORPORATE CULTURE<br />
<b>DETAILS OF THE DIGNITARIES:</b><br />
<b>NAME & DESIGNATION: </b><br />
NAME: MR. MANZOOR.<br />
DESIGNATION: SERVICE DELIVERY COORDINATOR<br />
COMPANY/INSTITUTION	:  UNISYS BANGALORE</p>

<p><b>DETAILS OF BENIFICIARIES:</b><br />
 CLASS	           :  V BCA/BSc (CSMS/CSME)<br />
 TOTAL COUNT	:  210</p>

<p><b>REPORT : </b><br />
Mr. Manzoor, Service Delivery Coordinator, Unisys, Bangalore gave an introduction about himself and his career. He spoke on, how to make oneself flexible when he/she joins a corporate company. He also conducted few activities to make the students realize their potential.</p>
<p>He briefed on the culture of various corporate companies. He also shared his knowledge on how to face the interviews and how each one can built their confidence in these three years. He insisted on the importance on their soft skills in today’s IT domain. He shared his experience in writing programs and the importance of team work. </p>
<p>All in all the students were given a heads up as to what to expect in the job market and how to prepare for the Modern Technologies availed in the Markets and the Industries. The session was then opened for interaction, many questions were raised by the students and answered by the resource person.</p>
<p><b>Faculty Coordinators: Mr.S.Aswin , Ms.Ann Mary</b></p>

                                                    </div>
                                                </div>
                                </div></div>            
                                
                                
           <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingSix">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        How to face "TOEFL" and "GRE" examination & thoughts from my final year

                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                                    <div class="panel-body">
                                                     <p><b>DATE:</b>: 4th July 2015<br />
<b>TIME:</b> 11:00 AM to 1:00 PM<br />
<b>VENUE:</b>Amphi Theatre<br />
<b>TOPIC OF DISCUSSION:</b> How to face "TOEFL" and "GRE" examination & thoughts from my final year<br />
<b>DETAILS OF THE DIGNITARIES:</b><br />
<b>NAME & DESIGNATION: </b><br />
NAME: MR. ALAN PAULSON, ALUMNI, KRISTU JAYANTI COLLEGE</p>

<p><b>DETAILS OF BENIFICIARIES:</b><br />
 CLASS	           :  V BCA/BSc (CSMS/CSME)<br />
 TOTAL COUNT	:  210</p>

<p><b>REPORT : </b><br />
On 4th July 2015, a session on “Thoughts from my final year” was conducted by Mr. Allan Paulson, Alumni, Kristu Jayanti College. It was an interactive session where he asked the students about their plans for their final year. He made them think if joining PG is worth and also explained "Why the college life is expensive?" these days. He also spoke about the importance of language (English) in their career.  He also provided them a few information of on how to take up a “TOEFL" and "GRE" examination. He discussed few some sample questions and interacted with students. He shared his experience on how the students can prepare for the test. Students interacted with the speaker during the session and were benefited.</p>
<p><b>Faculty Coordinators: Mr.S.Aswin , Ms.Ann Mary</b></p>

                                                    </div>
                                                </div>
                                </div></div>      
                                
                                
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingSeven">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                      Virtualization, Cloud and IT Security

                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                                    <div class="panel-body">
                                                    <p><b>DATE:</b> 19-09-2015<br />
<b>TIME:</b> 11:00 TO 12:00 pm<br />
<b>VENUE:</b> Main Auditorium <br />
<b>TOPIC OF DISCUSSION:</b> Virtualization, Cloud and IT Security <br />
DETAILS OF THE RESOURSE PERSON -- <br />
<b>NAME:</b> MR. Mohan Jagannath<br />
DESIGNATION : Technology Solution Consultant<br />
COMPANY/INSTITUTION	:  HP Global Soft, Bangalore</p>

<p><b>DETAILS OF BENIFICIARIES --</b><br />
           CLASS			:  III BCA/BSc and V BSc (CSME/CSMS)<br />
           TOTAL COUNT	:  241</p>
<p><b>DETAILS OF THE EVENT --</b><br />
ABSTRACT OF THE GUEST LECTURE:<br />
Mr. Mohan Jagganath, Technology Solution Consultant, HP Global Soft, Bangalore gave an introduction about himself and his career, the way he was brought up and entered the corporate world. He spoke on Virtualization and how it divides the resources of a computer into multiple execution environments, such as hardware and software partitioning, time-sharing, partial or complete machine simulation, emulation, quality of service, and many other topics which made the talk more interesting. The session gave a lot of information about the recent technologies in cloud storage. Students interacted with the speaker at the end of  the session and got benefited.</p>


                                                    </div>
                                                </div>
                                </div></div>      
                                
                                
                                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingEight">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                     Importance of Communication Skills

                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                                    <div class="panel-body">
                                                  <p><b>DATE:</b> 18th January 2014<br />
<b>TIME :</b>  11 am to 1 pm<br />
<b>VENUE :</b> Mini Auditorium-I<br />
<b>TOPIC OF DISCUSSION	:</b> Importance of communication skills.<br />
<b>DETAILS OF THE DIGNITARY </b><br />
<b>NAME :</b> Mr.Emmanuel Dawson<br />
<b>DESIGNATION :</b><br />
<b>COMPANY/INSTITUTION :</b> Entrepreneur </p>


<p><b>DETAILS OF THE EVENT -
REPORT</b><br />
The session on importance of communication skills was organized for the third year BCA and B.Sc students. The speaker stressed on the importance of communication skills in various walks of life. The importance of fluency in English to express ones ideas and how to grab the opportunities that comes on your way was elaborated. By playing a game the importance of optimistic attitude, the power of speech to overcome threats and how to overcome the barriers of communication was demonstrated to the students. The session was highly interactive and very interesting.</p>

                                                    </div>
                                                </div>
                                </div></div>      
                                                     
                                
                                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingNine">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                    Hadoop

                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                                    <div class="panel-body">
                                                 <p><b>DATE:</b> 31st  January 2014<br />
<b>TIME :</b>  1.45 pm to 3.30 pm<br />
<b>VENUE :</b> Main Auditorium<br />
<b>TOPIC OF DISCUSSION	:</b> Hadoop<br />
<b>DETAILS OF THE DIGNITARY </b><br />
<b>NAME :</b> Mr.ShamshadAnsari<br />
<b>DESIGNATION :</b> President & CEO <br />
<b>COMPANY/INSTITUTION :</b> EAccure Pvt Ltd. </p>

<p><b>Profile : </b> SHAMSHAD ANSARI , President & CEO <br />
Shamshad Ansari co-founded Accure Pvt Ltd in 2011. He lived and worked in the US for over a decade at various positions including software engineer, principal software architect, director of engineering and VP of engineering. <br />
Shamshad serves as a Member of the Board of Directors in several companies including Accure Pvt Ltd (India), Accure LLC (USA), Orbit EMR Solutions Pvt Ltd (India), Aspirins Healthcare (India). 
He has about 14 years of experience in building high scale computing solutions. He has been developing Hadoop based technology for the past 5 years. His recent innovation, while working as the principal architect, was recognized by the Fast Company magazine as the most innovative healthcare big data platform in the world and was featured in the Forbes magazine. He holds four US patents related to healthcare big data technology (2013/0262, 144; 2013/0238, 349; 2013/0117, 046; 2012/0060, 216). His research works were published in some of the leading international journals like Byte.com and Dr Dobb's Journal, cited in several books, and archived in libraries across the world. <br />
He architected, developed and brought one of the most innovative electronic medical record systems in the US and Indian market.<br /> 
Shamshad is an engineering graduate from Bihar Institute of Technology Sindri and a post graduate from Indian Institute of Information Technology & Management Kerala. </p>





<p><b>DETAILS OF THE EVENT -
REPORT</b><br />
The session on Hadoop was organized for the second and third year BCA and B.Sc students. The resource person was Mr.Shamshad Ansari,President ,CEO of Accure Pvt.Ltd.The session started off with an introduction to Hadoop and why Hadoop is important.The history of Hadoop ,the advantages and applications of Hadoop were explained in detail by the speaker.The user explained in detail the future aspects of Hadoop and what will be the role played by Hadoop in different areas like health care,aviation industry etc.</p>
<p>The speaker elaborated on how Hadoop can crunch enormous amount of data and how hadoop can analyse large amount of data quickly and highlighted the fact that major industries /institutions are now installing Hadoop systems.</p>
<p>The speaker highlighted that  there is a huge demand for professionals in hadoop.The session was very interesting and interactive .</p>

                                                    </div>
                                                </div>
                                </div></div>      
                                
                                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTen">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                    Software Testing

                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                                    <div class="panel-body">
                                                <p><b>DATE:</b> 1st  March 2014<br />
<b>TIME :</b>  11.am to 12.50 pm<br />
<b>VENUE :</b> Main Auditorium<br />
<b>TOPIC OF DISCUSSION	:</b> Software Testing<br />
<b>DETAILS OF THE DIGNITARY </b><br />
<b>NAME :</b> Ms. Parimala Hariprasad<br />
<b>DESIGNATION :</b> Project Manager <br />
<b>COMPANY/INSTITUTION :</b> Moolya Software Testing Services </p>

<p><b>Profile : </b>Ms. Parimala Hariprasad, Project Manager, Moolya Software Testing Services <br />
Parimala spent her youth studying people and philosophy. By the time she got to work, she was able to put those learning's to create awesome testers. She has worked as a tester for over 10 years for domains like CRM, Security, e-Commerce and Healthcare. Her specialty is in coaching and creating great teams which ultimately fired her because she wasn't needed anymore. She has experienced the transition from Web to Mobile and emphasizes the need for design thinking in testing.  She frequently rants on her blog, Curious Tester.</p>


<p><b>REPORT:</b><br />
The session on software testing was organized for the first and second year BCA and B.Sc students. The resource person was Ms.Parimala Hariprasad, Project Manager.Moolya Software Testing Services. The speaker explained What is testing?, How to find solution to the problems,How to become a good tester?. A brief explanation about technology and automation was also done.The speaker gave a brief introduction about programming languages like C and C++.The speaker elaborated on how to get a job in testing field and how to enhance the skill full way of thinking and improvement of soft skills. She also quoted the reference books available in the field of testing. The session was very interesting and interactive.</p>
<p><b>Faculty Coordinator: </b> Mr.S.Aswin ,Ms.Anita.C</p>


                                                    </div>
                                                </div>
                                </div></div>      
                                
                                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingEleven">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                  Tech Talk - SDLC Industry Perspective 

                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                                                    <div class="panel-body">
                                               <p><b>DATE:</b> 28 june 2014<br />
<b>TIME:</b> 11:00PM - 1:00PM<br />
<b>VENUE:</b> MINI AUDITORIUM I<br />
<b>TOPIC OF DISCUSSION:</b> SDLC INDUSTRY PERSPECTIVE<br />
<b>DETAILS OF THE DIGNITARY</b> <br />
<b>NAME:</b> PROF. ANTHONY VINCENT<br />
<b>DESIGNATION:</b> FACULTY, DEPARTMENT OF COMPUTER SCIENCE<br />
<b>COMPANY/INSTITUTION:</b>  KRISTU JAYANTI COLLEGE</p>
<p><b>ABSTRACT OF THE TECH TALK:</b><br />
The department organized a tech talk on "SDLC Industry Perspective" for the V BCA and B.Sc (CSMS/CSME) students by Prof.Anthony Vincent, Faculty, Department of Computer science. The sequential design process - waterfall model used in software development process was discussed in detail. Agile software development methods were elaborated and a comparison of it with other methods was made during the session. </p>



                                                    </div>
                                                </div>
                                </div></div>      
                                
                                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwelve">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                                 Guest Talk - Youth and Ethics 

                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                                                    <div class="panel-body">
                                              <p><b>DATE:</b> 28 June 2014<br />
<b>TIME:</b> 11:00PM - 1:00PM<br />
<b>VENUE:</b> MAIN AUDITORIUM <br />
<b>TOPIC OF DISCUSSION:</b> YOUTH AND ETHICS<br />
<b>DETAILS OF THE DIGNITARY</b> <br />
<b>NAME:</b> MR. SAMUEL OLSON <br />
<b>DESIGNATION:</b> DIRECTOR,<br />
<b>COMPANY/INSTITUTION:</b>  RESCUE, BANGALORE</p>

<p><b>ABSTRACT OF THE GUEST TALK:</b><br />
The Women Empowerment Cell of the college organized a guest talk on "Youth and Ethics" for I BCA and B.Sc (CSMS/CSME) students by Mr. Samuel Olson, Director, Rescue Bangalore. The speaker spoke on the largest happening homicide - abortion. He demonstrated various methods of abortion, the cruelty in it and it's after effects. He also talked on how addiction to drugs and porn channels affects the students of this generation. </p>




                                                    </div>
                                                </div>
                                </div></div>      
                                
                                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThirteen">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">
                                Guest Talk - Theory To Practice

                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
                                                    <div class="panel-body">
                                             <p><b>DATE:</b> 26 july 2014<br />
<b>TIME:</b> 11:00PM - 1:00PM<br />
<b>VENUE:</b> MINI AUDITORIUM I<br />
<b>TOPIC OF DISCUSSION:</b> THEORY TO PRACTICE - A TRAVEL<br />
<b>DETAILS OF THE DIGNITARY</b> <br />
<b>NAME:</b> Mr. RICHARD NELSON<br />
<b>DESIGNATION:</b>TAX ASSOCIATE<br />
<b>COMPANY/INSTITUTION:</b>  ERNST & YOUNG</p>
<p><b>ABSTRACT OF THE TECH TALK:</b><br />
Computer Science Department of Kristu Jayanti College had organized a technical talk on Theory to Practice on 26/7/2014 for VI Semester BCA and BSc (CSMS/CSME) students. The Resource person was Mr. Richard Nelson, alumni of Kristu Jayanti College who is currently working with Ernst and Young as Tax Associate.
He educated the students on Time Management and how to categorize the important, urgent, non-urgent and non-important things that we do. Inspirational thoughts were shared. Career Opportunities for BCA students, especially in Ernst and Young was discussed. He highlighted the job opportunities available for the Graduate students as the maintenance and designing of Software is done in Bangalore Campus of Ernst. He discussed on how to face an interview and how to succeed in an interview. 
An interactive session was held to clear the doubts and myths about higher studies and IT industry. The travel from theory to practice was an eye opener for the students. The Session was very motivating and interesting. Richard Nelson who is a fresh alumnus of Kristu Jayanti College kept up the energy and portrayed the Jayantian Culture.</p>
 
<p><b>Faculty Coordinator:</b>  Mr.Ashwin Herbert Satish, Ms.K.Kalaiselvi    
</p>


                                                    </div>
                                                </div>
                                </div></div>      
                                
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingFourteen">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
                                Seminar on "Cloud Computing"

                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
                                                    <div class="panel-body">
                                             <p><b>DATE:</b>: 30th August 2014<br />
<b>TIME:</b> 11:00 AM to 1:00 PM<br />
<b>VENUE:</b>Amphi Theatre<br />
<b>TOPIC OF DISCUSSION:</b> Cloud Computing<br />
<b>DETAILS OF THE DIGNITARIES:</b><br />
<b>NAME & DESIGNATION: </b><br />
1.	Mr. Sriram Sharma, Senior Cloud Architect, Hewlett Packard<br />
2.	Mr. Navine, Cloud   Architect, IBM <br />
3.	Mr. Bhaskar, Cloud Architect, IBM </p>
<p><b>REPORT : </b><br />
The seminar on Cloud Computing was conducted by eminent resource personals from the industry Mr. Sriram Sharma, Senior cloud architect, Hewlett Packard, Mr. Navine, Cloud Architect, IBM and Mr. Bhaskar, Cloud Architect, IBM on 30th August 2014 from 11:00AM to 1:00PM for the V semester BCA and BSC (CSMS/CSME) students.</p>
	<p>Mr. Sriram Sharma opened the session with the introduction of cloud computing by quoting on well known applications in the Market and used in the Industries. He also discussed on the dairy industry in India going from individual to centralized and thereby moving from the troublesome to on demand in the modern trend.</p>
	<p>Mr. Bhaskar. M, then took over the session exploring the various job opportunities and the work culture in various Industries. Mr. Navine later gave a live server demonstration using VM Sphere and VM workstation.All in all the students were given a heads up as to what to expect in the job market and how to prepare for the Modern Technologies availed in the Markets and the Industries. The session was then opened for interaction, many questions were raised by the students were answered by the resource persons.</p>
 
<p><b>Faculty Coordinator:</b> Mr.S.Aswin ,Ms.Kalai Selvi</p>


                                                    </div>
                                                </div>
                                </div></div>      
                                                     
                                                     
                                                     
                                
                                
                            
								</div></div>
                            <div class="col-lg-3" style="margin-top:1em;">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;<strong>Programs Offered </strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bca.php">BCA
                                            <font size=2>(Bachelor of Computer Applications)</font></a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bsc_csme.php">B.Sc. CSME <font size=2>(Computer Science, Mathematics, Electronics)</font></a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bsc_csms.php">B.Sc. CSMS
                                            <font size=2>(Computer Science, Mathematics, Statistics)</font></a></p>
                                    </section>
                                </div>
                                
                                <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span> <strong>Activities</strong></span>
                                        </h4>
                                        
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="vission_mission_goals.php">Vision,Mission and Goals</a></p>
                                    </section>
                                        
                                        <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty.php">Faculty Profile</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_calendar.php">Academic Calender</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="fests.php">Fests</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="value_added_certificate_courses.php">Value Added & Certificate Courses</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="computer_academy.php">Computer Academy</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="achivements.php">Achievements</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="best_practices.php">Best Practices</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="carer_opportunity.php">Career Opportunity</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="seminars_workshop.php">Seminars & Workshops</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="guest_lectures.php">Guest Lectures</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="activities.php">Activities</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty_development_program.php">Faculty Development Program</a></p>
                                    </section>
                                        
                                    </div>
<div class="content-right new-content-right wow fadeIn" style="margin-left:2px; margin-right: 2px;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                    </h4>
                                    <?php include ('../../../../php/sideMenu.php'); ?>
                                </div>
                                <div class="content-right wow fadeIn" style="padding:10px;padding-bottom: 0px;">
                                    <div class="fb-page" data-href="https://www.facebook.com/KristuJayantiCollege" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                                        <div class="fb-xfbml-parse-ignore">
                                            <blockquote cite="https://www.facebook.com/KristuJayantiCollege"><a href="https://www.facebook.com/KristuJayantiCollege">Facebook</a></blockquote>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    </div>
                    <?php include ('../../../../php/alerts.php');  ?>
                    <?php include('../../../../php/footer.php'); ?>
                    <?php include('../../../../php/morphingSearch.php'); ?>
                </div>



            </div>
            <!--/st-content-inner-->
        </div>
        <!-- this is the wrapper for the content-->
    </div>
    <!--st-pusher-->
    <!--        </div> st-container -->

    <!--<script src="../js/cbpFWTabs.js"></script>-->
	
    <script>
        (function() {

            [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
                new CBPFWTabs(el);
            });

        })();

    </script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/modernizr.custom.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/modernizr.custom.academics.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/spin.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/mySpin.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/swipeview.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/jquery.bootstrap.newsbox.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/classie.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/morphingSearch.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/sidebarEffects.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/transit.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/sly.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/customSly.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/wow.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/scripts.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        $("document").ready(function() {
            //below code is for retrieving corresponding pages #START
            var activePage = 'page1';
            $.ajax({
                url: 'snipets/' + activePage + '.php',
                success: function(data) {
                    $('#page').html(data);
                },
                error: function(data) {
                    alert('failed to load data');
                }
            });
            $('.profile-pagination li a').click(function() {
                $(this).parent().siblings().removeClass('active');
                $(this).parent().addClass('active');
            });
            $('.profile-pagination li a').click(function() {
                var activePage = this.getAttribute('data-value');
                $.ajax({
                    url: 'snipets/' + activePage + '.php',
                    success: function(data) {
                        $('#page').html(data);
                    },
                    error: function(data) {
                        alert('failed to load data');
                    }
                });
            });
            //above code is for retrieving corresponding pages #END
        });

    </script>
</body>

</html>
