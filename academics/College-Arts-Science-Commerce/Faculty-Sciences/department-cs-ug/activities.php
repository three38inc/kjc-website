<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST'].""; $imgNum = mt_rand(1,2);/*$ROOT is the base URL & should on top of every PAGE */?> 
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kristu Jayanti College, Bengaluru</title>
    <!--<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />-->
    <meta name="author" content="Three38 inc" />
    <link rel="shortcut icon" href="../../../../images/icon.png">
    <!-- Bootstrap css -->
    <link href="../../../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--additional css-->
    <link rel="stylesheet" type="text/css" href="../../../../css/component.css" />
    <link rel="stylesheet" href="../../../../css/font-awesome.css">
    <link rel="stylesheet" href="../../../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../../css/roundIcons.css">
    <link rel="stylesheet" href="../../../../css/hoverEffect.css">
    <link rel="stylesheet" href="../../../../css/morphing.css">
    <link rel="stylesheet" href="../../../../css/navTabs.css">
    <link rel="stylesheet" href="../../../../css/animate.css">
    <link rel="stylesheet" href="../../../../css/fakeLoader.css">
    <!--        <link rel="stylesheet" href="css/res-navtabs.css">-->
    <!--custom css-->
    <link href="../../../../css/custom.css" rel="stylesheet">
    <link href="../../../../css/innerpage.css" rel="stylesheet">
    <!-- javascript -->
    <script src="../../../../js/jquery-1.11.0.min.js"></script>
    <script src="../../../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../../js/respond.js"></script>
    <script src="../../../../js/custom.js"></script>
    <script src="../../../../js/fakeLoader.js"></script>


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
									 <img src="images/activities/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />

                                <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                    <span>&nbsp;  <strong> Activities </strong></span></h4>
									
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading19">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse19" aria-expanded="true" aria-controls="collapse19">
                                                          July 2017:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading19">
                                                    <div class="panel-body">
                                                        <p><b>Title:</b> Machine learning under Tech Giants<br>

                                                            <b>Date:</b> 15.07.17<br>

                         <b>Classes Attended & Number of beneficiaries:</b> III SEM BCA, III SEM B.Sc., V SEM BCA, V SEM B.Sc. - 600 students<br>

            <b>Name and details of the Resource Person:</b>  Mr. Sawrav Roy, Senior Software Development Engineer, Amazon Fulfilment Technologies<br>

                                                            <b align=justify>Objective:</b>  To impart knowledge on the basics of Machine learning- its types, its difference from a standard rule based learning approach, existing job profiles in this domain.</p>


                                                            <p align=justify>The session started with the speaker prompting for a difference between rule based learning and adaptable learning. He quoted the difference between how a machine works when it is made to do a routine task having pre-defined set of rules and when it has find an adaptable solution. He further explored the adaptable learning aspect by quoting the example of “steps involved in distinguishing between an apple and orange (for a machine)”. The speaker emphasized that we go for machine learning when the human expertise for a task doesn’t exist or when humans are unable to explain their expertise or when the solution has to be adapted with changes in the environment. He also explained the various forms of machine learning-association analysis, supervised and unsupervised learning, and reinforcement learning to name a few. Thereafter a video was played which showed the working of a simple perceptron model, multilayer perceptron, spiking perceptron and convolutional perceptron. He also emphasized that the aim of a learning algorithm is always to minimize the error loss with every passed data set and mentioned two core learning algorithms WCore and BP(Back Propagation). The speaker then mentioned about Tensor Flow which is an open source library available for ML, which can be used to create simple to complex ML algorithms. He also mentioned that students can use Scikit-Learn that leverages Python’s breadth for math and science related ML problems. Finally he concluded the session with the job opportunities available to students in this area. Two promising job profiles – one of a developer role (entry level) and second of a ML Scientist role were well appreciated by the speaker.</p>

                                                        
                                                        
                                                        
                                                        
                                                        <p align=justify><b>Industrial Visit to ISRO, Bangalore</b><br>
                                                            The students of fifth semester BCA and BSc (CSMS/CSME) accompanied by three faculty members visited ISRO, Bangalore as part of the industrial visit on 10th July 2017.Mr.H.L. Srinivasa, Scientist, ISRO Satellite Centre briefed the students on various aspects of ISRO and space technology. The students were given an insight to the objectives and the various facilities for research, construction, test, launch, track and control facilities of ISRO. He also elaborated on the different launch vehicles like SLV, ASLV, PSLV and GSLV. Mr.Srinivas also spoke on the various satellite programmes of ISRO like NSAT (Indian National Satellite System), Indian Remote Sensing satellites (IRS), Radar Imaging Satellites and GAGAN satellite navigation system and its applications. He also updated the students on the forthcoming satellites, launch vehicles and launches. He also spoke on the Chandrayaan-2 mission planned to be launched to the Moon by a GSLV including a lunar orbiter, lander and rover, in 2018. The students also visited the clean room which is equipped with harness lab for fabricating onboard harness of the spacecraft and Mechanical lab which is equipped with mechanical ground support equipment required for the assembly, integration and testing of the spacecraft. The students also had a video presentation on the Chandrayan-1 and making of satellites. Mr.Srinivas also informed the students on the wide range of career opportunities available in ISRO.</p>
                                                        
                                                        
														<p><b>Guest Lectureon Space Technology </b><br>
															<b>Classes Attended & Number of beneficiaries:</b><br>
															I SEM BCA, I SEM B.Sc, III SEM BCA,III SEM B.Sc - 650 students</p>

<p>Name and details of the Resource Person:<br>
	<b>SHRI.SRINIVAS HL, SCIENTIST, ISRO SATELLITE CENTER, BANGALORE.</b><br>

	Objective: To impart knowledge on different types of satellites, purpose of satellites, life term of satellites, life inside the satellites, cost of the satellite and techniques to reduce the space jam.</p>

<p align=justify>The guest lecture on SPACE TECHNOLOGY organized for I and III sem BCA, B.Sc. students on 01.07.17 in Main Auditorium at 11.00 Am. The speaker was Srinivas HL, Scientist from ISRO satellite center, Bangalore. He started his lecture with launched satellites such as Aryabhatta, Chandrayan, IRM and its purposes. Speaker played video on how scientists spending their life and doing their daily routines inside the satellite. The components used for covering satellites are explained with videos. He uncovered the reasons for launching Indian satellite from Sriharikota and for using American components for constructing Indian satellites. The details such as the cost of making Indian satellites are 400 crore, American satellites are 1800 core, Life term and Quality of American satellite’s components are provided to the students. The session ends with questionnaire. Speaker clarified students’ queries like role of computer graduate students in space, how to get in to space technology related courses, how obsolete satellites are destroyed, how space jam is avoided, about international space committee and International space stations.</p> 


                               </div>
                              </div>
                            </div></div>
									
									
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading18">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="true" aria-controls="collapse18">
                                                          June 2017:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18">
                                                    <div class="panel-body">
                                                    <p><b>Focus on making the Arts and Science students Industry Ready stands crucial for the holistic development of students passing out of college.</b><br />
As a first step to it, Kristu Jayanti College (Autonomous), Bengaluru signs membership with ICT Academy<br />
Bengaluru<br />
														<b>23rd  June 2017</b><br />
Of late with the growing importance for the Arts and Science colleges across India, majority of the students are enrolled in the Arts and Science Colleges. It has also been stated that the maximum number of Ph.D has been enrolled from the Science streams.</p>
<p>As per the All India Survey on Higher education report by Ministry of Human Resource Development, GOI, it is stated that </p>
<p>"At Undergraduate level the highest number (40%) of students is enrolled in Arts/Humanities/Social Sciences courses followed by Science (16%), Engineering and Technology (15.6%) and Commerce (14.1%). At Ph.D. level, maximum number of students is enrolled in Science stream followed by Engineering and Technology."</p>
<p>Realizing this various arts and science colleges gives a special focus on training the students in various industry relevant skill development courses. Kristu Jayanti College (Autonomous), Bengaluru has signed the Membership with ICT Academy on June 23, 2017. The membership is signed to benefit Faculty Members and Students through various initiatives of ICT Academy which includes Faculty Development, Student Skill Development, Industry-Institute Collaboration, Research etc.</p>
<p>Kristu Jayanti College (Autonomous), Bengaluru is the first Arts & Science College in the State of Karnataka to sign the membership with ICT Academy.</p>
														<p>The Certificate of Membership was exchanged between <b>Fr. Jose Kutty P.D the Principal of the institution and Mr. Suresh Babu, Regional Head - Karnataka & Telangana, ICT Academy.</b> Speaking on the occasion, <b>Mr. Suresh Babu</b> said, "ICT Academy the non-profit organization is happy to sign its first arts & science college membership in the state of Karnataka. We are committed to provide full support to the faculty and students of the college by providing world class training and delivering courses directly from the global corporate house. We strive to bring down the skill gap by being a bridge between academia and corporate, and this occasion is the first step towards that." Mr. Vishnu Prasad, State Head - Karnataka, ICT Academy was also present on the occasion.</p>



                               </div>
                              </div>
                            </div></div>
									
                               
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading17">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="true" aria-controls="collapse17">
                                                          March 2017:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
                                                    <div class="panel-body">
                                                        <p><b> VMware Open Badge Days</b><br>
                                                            <li>March 1st 2017 – Online examination on Data Center Virtualization in Computer Lab II and Computer Lab III </li>
                                                            <li>March 3rd 2017 - Online examination on VMware Network Assessment in Computer Lab II and Computer Lab III</li>
                                                            <li>March 7th 2017 - Online examination on VMware Cloud Fundamentals Assessment in Computer Lab II and Computer Lab III</li>


                               </div>
                              </div>
                            </div></div>
                                
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading16">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="true" aria-controls="collapse16">
                                                          December 2016:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
                                                    <div class="panel-body">
                                                        <li>Guest Lecture on “Software Testing” for the VI semester BCA and B.Sc.(CSMS/CSME) students by Ms.Selvi , Freelancer in software testing on December 3rd 2016.</li>

                               </div>
                              </div>
                            </div></div>
                                
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading15">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
                                                        August 2016:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
                                                    <div class="panel-body">
                                                        <il>Industrial visit to ISRO Satellite Centre (ISAC) on 1st August, 2016 for the students of V semester BCA.</il>
                                                        <li>Visit to Thirumuga Ashram MS Palaya, Jalahalli by III semester B.Sc. (CSMS/CSME) students as part of the social outreach programme on 16th August 2016</li>
                                                        <li>Students of III semester BCA ‘A’ to visit Thirumuga Ashram MS Palaya, Jalahalli as part of the social outreach programme on 17th August 2016.</li>
                                                        <li>Visit to to Thrithwa Ashram , Thanisandra by III Semester BCA ‘B’ students as part of the social outreach programme on 18th August 2016.</li>
                                                        <li>Students of III semester BCA ‘C’ to visit Thrithwa Ashram, Thanisandra as part of the social outreach programme on 19th August 2016.</li>
                                                    </div></div></div></div>
                                
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading14">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="true" aria-controls="collapse14">
                                                        July 2016:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
                                                    <div class="panel-body">
                                                        <il>Industrial visit to IISC on 29th July 2016 for the 3rd and 5th semester BCA students to visit the Supercomputer Education and Research Centre (SERC), which is the country's leading computing centre.</il>
                                                        <li>Certification course on Information Storage Management (EMC2) for the V semester BCA students to start on 19th July 2016.</li>
                                                        <li>Industrial visit to Analog & Digital Devices, Abbigere, Bangalore on 18th July 2016 for the students of B.Sc.(CSME).</li>
                                                        <li>Freshers Fiesta 2K16 –Freshers welcome on 5th July 2016 for the I Semester BCA and B.Sc. (CSMS/CSME) students.</li>
                                                        <li>Data Science Academy Inauguration by Mr. Partha Mazumder, Director of Consumer Marketing & Analytics Time Inc. on 2nd July 2016.</li>
                                                        <li>Interaction with the alumni for the first year BCA and B.Sc.(CSMS/CSME) students on 2nd July 2016</li>

                                                    </div></div></div></div>
                                
                                
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading13">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="true" aria-controls="collapse13">
                                                        March 2016:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
                                                    <div class="panel-body">
                                                        <li>Farewell Programme for VI Semester BCA and BSc (CSMS/CSME) students on 28th March 2016 in Main Auditorium by the I year and II year BCA and BSc (CSMS/CSME) students</li>

                                                    </div></div></div></div>
                                
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading12">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="true" aria-controls="collapse12">
                                                       February 2016:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
                                                    <div class="panel-body">
                                                        <li>The students of II Semester BSc (CSMS/CSME) & BCA will have a Session on " Networking Technologies” on 13th February 2016 by Mr. Pavan Kumar k, System Executive ,CTS, Bangalore from 11 AM to 1 PM in Mini Auditorium II.</li>

                                                    </div></div></div></div>
                                
                                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading11">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true" aria-controls="collapse11">
                                                       January 2016:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                                                    <div class="panel-body">
                                                        <p>The students of II Semester BSc (CSMS/CSME) & BCA will have a Session on "Overview of Cloud Computing” on 27th January 2016 by Mr.Hemanth Manoranjan, Alumni, Former Employee of HP from 11 AM to 1 PM in Main Auditorium. </p>

                                                    </div></div></div></div>
                                
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading10">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                                       December 2015:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
                                                    <div class="panel-body">
                                                        <li>The students of II Sem BCA & B.Sc(CSMS/CSME) will have a Session on "Application of Mathematics in Computing Field" on 5th December 2015 from 10 AM to 1 PM in Amphi Theater.</li>
                                                <p><b>Resource Persons:</b><br>
                                                    1. Prof.Diana Susan D’Roza<br>
                                                    2.Prof.Jeo Joy<br>
                                                    3.Kurian George(MCA Student)</p>
                                                        <li>The students of IV Sem B.Sc(CSMS/CSME) & BCA will have a Session on "Software Project Management Tools" on 5th December 2015 by Dr.Gnanasankaran & Prof.Ramanathan from 11 AM to 1 PM in Main Auditorium.</li>
                                                        <li>The students of VI Sem B.Sc(CSMS/CSME) & BCA will have a talk on "Android Studio" on 5th December 2015 by Mr.Jobith Basheer(MCA Student) in Mini Auditorium II from 11AM to 1PM</li>


                                                    </div></div></div></div>
                                
                                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading9">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="true" aria-controls="collapse9">
                                                      September 2015:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
                                                    <div class="panel-body">
                                                        <li>Guest talk on “Virtualization, Cloud and IT Security” for III BCA and BSc (CSMS/CSME) students by Mr. Mohan Jagannath,Technology solutions Consultant, HP Global Soft, Bangalore on 19th September 2015 in Main auditorium from 11 AM-12.30 PM.</li>
                                                        <li>3rd and 4th September 2015: Workshop on "Hardware and Networking" for I semester BCA and BSc (CSMS/CSME) students by Mr. R.JANARTHANAN ,IT Certification Professional (Microsoft and Juniper Networks), Coimbatore, Tamilnadu.</li>
                                                        <li>3rd September 2015: III BCA ‘A’ section students to visit Thrithwa Ashram, Thanisandra main Road, Bharath Nagar, Bangalore as part of the Social Outreach Programme .</li>
                                                        <li>4th September 2015: III BCA ‘B’ section students to visit Thrithwa Ashram, Thanisandra main Road, Bharath Nagar, Bangalore as part of the Social Outreach Programme.</li>
                                                        <li>7th September 2015: III BCA ‘C’ section students to visit Thrithwa Ashram, Thanisandra main Road, Bharath Nagar, Bangalore as part of the Social Outreach Programme .</li>
                                                        <li>9th September 2015: III BSc (CSMS/CSME) students to visit Thrithwa Ashram, Thanisandra main Road, Bharath Nagar, Bangalore as part of the Social Outreach Programme .</li>



                                                    </div></div></div></div>
                                
                                
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTen">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="true" aria-controls="collapse8">
                                                   August 2015:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
                                                    <div class="panel-body">
                                                        <li> Vimochanna"-Independence Day Celebration for UG Computer Science Students on August 17,2015 </li>
                                                        <li>Prelims of Synchronize 2015 - August 20th 2015 to 31st August, 2015 </li>




                                                    </div></div></div></div>
                                
                                 
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading7">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                                   July 2015:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                                    <div class="panel-body">
                                                        <li>Guest talk on TOEFL and GRE by Mr. Alan Polson, Alumni, Kristu Jayanti College for V BCA & BSC(CSMS,CSME) students in Amphitheatre from 11 AM - 1 PM on 4th July 2015. </li>



                                                    </div></div></div></div>
                                
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading6">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                                  June 2015:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                                                    <div class="panel-body">
                                                        <li>V BCA & BSc (CSMS/CSME) - Guest Talk on "Life in Corporate & Corporate culture" Chief Guest - Mr. Manzoor, Senior Field Officer, Unisys, Bangalore on June 6th 2015.Venue - Amphitheater Time: 11 AM - 1PM</li>



                                                    </div></div></div></div>
                                
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading5">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                                 December 2014:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                                    <div class="panel-body">
                                                        <li> A session on "Doing a Galaxia Project" by Prof. Bino Joseph for IV Sem B.Sc. & BCA Students in Mini Audi II from 10 AM to 1 PM on 6th December 2014. </li>



                                                    </div></div></div></div>
                                
                                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading4">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                                November 2014:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                                    <div class="panel-body">
                                                        <li>	A session on "Mathematical Foundations in Computing" by Prof. Diana Susan Mary Ann D'Roza for II Sem B.Sc(CSMS/CSME) & BCA Students in Mini Audi II from 11 AM to 12 PM on 28th November 2014</li>
                                                        <li>A session on "How to do a Galaxia Project" by Prof. Amjad Hassan Khan MK for II Sem B.Sc (CSMS/CSME) & BCA Students in Mini Audi II from 12 PM to 1 PM on 28th November 2014 </li>
                                                        <li>Department of Computer Science organizes Industrial talk on "Bringing Python to life" by Mr.Souma Kumar Paul, Junior Software Engineer - Development Operations, Altisource Business Pvt. Ltd on 29th November 2014 in Mini Audi-II for IV and VI Semester BCA/BSc students from 11 AM to 1 PM.</li>




                                                    </div></div></div></div>
                                
                                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading3">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                                August 2014:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                                    <div class="panel-body">
                                                        <li>Synchronize Events Prelims from 11th August 2014 to 19th August 2014 3.30 PM to 5.30 PM.</li>
                                                        <li>Workshop on "Hardware & Networking" by R.Janarthanan, IT Certification & Career Consultant for III Semester BSc. Computer Science & BCA students on 30th August 2014 from 9:00 AM to 12:00 PM. </li>
                                                        <li>Workshop on "Hardware & Networking" by R.Janarthanan, IT Certification & Career Consultant I Semester BCA & BSc. Computer Science students on 30th August 2014 from 12:30 to 3:30 PM. </li>
                                                        <li>Session on "Cloud Computing" by for V Semester by BSc. Computer Science & BCA students on 30th August 2014 by Mr. Sriram Sharma, Senior Cloud Architect, Hewlett Packard from 11:00 - 1:00PM in Amphi Theatre.</li>
                                                        <li>Industrial Visit: V Semester BCA and BSc (CSMS/CSME) students visiting Wipro Technologies, Phase I ,Electronics City , Bangalore on 05/08/2014.</li>
                                                        <li>Industrial Visit: I Semester BCA (Section A) students visiting to CDAC, Bangalore on 07/08/2014 </li>



                                                    </div></div></div></div>
                                
                                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading2">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                              July 2014:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                                    <div class="panel-body">
                                                        <li>Animation Refreshing Course - III BCA & B.Sc(CSMS/CSME) ,V BCA & B.Sc (CSMS/CSME from [30/06/2014 - 04/06/2014 & 07/07/2014]</li>
                                                        <li>	CSA Orientation Program for I BCA & B.Sc. (CSMS/CSME) 02/07/2014</li>
                                                        <li>Freshers Day - Computer Science Department on 05/07/2014.</li>
                                                        <li>Industrial Visit: III Semester BCA (Section B) students visiting to CDAC, Bangalore on 22/07/2014</li>
                                                        <li>Technical Community Briefing by Mr.Rajesh , Faculty,Kristu Jayanti College for I SEM BCA & B.Sc (CSMS/CSME) on 26/07/2014. </li>
                                                        <li>Animation Test for III BCA & BSc (CSMS/CSME) on 26/07/2014. </li>
                                                        <li>Interactive session on "Theory into Practice" by Mr.Richard Nelson,Associate(Tax),Ernst & Young (EY), Bangalore for V BCA & BSc(CSMS/CSME) on 26/07/2014. </li>



                                                    </div></div></div></div>
                                
                                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading1">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                              June 2014:
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                                                    <div class="panel-body">
                                                        <li>VAC Course on PL/SQL for III Semester BCA from June 25th, 2014 onwards.</li>
                                                        <li>VAC Course on MS-EXEL for III B.Sc. (CSMS/CSME) from June 26th , 2014 onwards.</li>
                                                        <li>Tech Talk on "SDLC Industry Perspective "for V BCA and V BSc.(CSMS/CSME) on 28th June 2014.</li>
                                                        <li>Guest Talk on Youth and Ethics for I BCA and V BSc. (CSMS/CSME) on 28th June 2014.</li>
                                                        <li>Briefing on Technical Community for III BCA and V BSc. (CSMS/CSME) on 28th June 2014.</li>




                                                    </div></div></div></div>
                                



								</div></div>
                            <div class="col-lg-3" style="margin-top:1em;">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;<strong>Programs Offered </strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bca.php">BCA
                                            <font size=1>(Bachelor of Computer Applications)</font></a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bsc_csme.php">B.Sc. CSME <font size=1>(Computer Science, Mathematics, Electronics)</font></a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bsc_csms.php">B.Sc. CSMS
                                            <font size=1>(Computer Science, Mathematics, Statistics)</font></a></p>
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
                                        <p><a class="a-link-arrow" href="activities.php" style="color: #2980b9;font-weight: bold;">Activities</a></p>
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
    <script src="../../../../js/modernizr.custom.js"></script>
    <script src="../../../../js/spin.min.js"></script>
    <script src="../../../../js/mySpin.js"></script>
    <script src="../../../../js/swipeview.js"></script>
    <script src="../../../../js/jquery.bootstrap.newsbox.min.js"></script>
    <script src="../../../../js/classie.js"></script>
    <script src="../../../../js/morphingSearch.js"></script>
    <script src="../../../../js/sidebarEffects.js"></script>
    <script src="../../../../js/transit.js"></script>
    <script src="../../../../js/sly.js"></script>
    <script src="../../../../js/customSly.js"></script>
    <script src="../../../../js/wow.min.js"></script>
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
