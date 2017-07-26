<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST'].""; $imgNum = mt_rand(1,4);/*$ROOT is the base URL & should on top of every PAGE */?> 
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Kristu Jayanti College, Bengaluru</title>
        <!--<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />-->
        <meta name="author" content="Three38 inc" />
        <link rel="shortcut icon" href="../images/icon.png">
        <!-- Bootstrap css -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--additional css-->
        <link rel="stylesheet" type="text/css" href="../css/component.css" />
        <link rel="stylesheet" href="../css/font-awesome.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/roundIcons.css">
        <link rel="stylesheet" href="../css/hoverEffect.css">
        
        <link rel="stylesheet" href="../css/navTabs.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/fakeLoader.css">
        <!--        <link rel="stylesheet" href="css/res-navtabs.css">-->
        <!--custom css-->
        <link href="../css/custom.css" rel="stylesheet">
        <link href="../css/innerpage.css" rel="stylesheet">
        <!-- javascript -->
        <script src="../js/jquery-1.11.0.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script> 
        <script src="../js/respond.js"></script>
        <script src="../js/custom.js"></script>
        <script src="../js/fakeLoader.js"></script>

        <style>
            .link-arrow a.a-link-arrow::before {
                left: 0px;
                z-index: -1;
                width: 100%;
                background: #f3f3f3;
            }

            .link-arrow {
                /* background: rgba(149,165,166,0.4); */
                background: rgba(255, 255, 255, 0);
            }

            .link-arrow a.a-link-arrow {
                left: 10px;
            }

            .menu-list ul li {
                background: transparent;
            }

            .side-menu {
                background: transparent;
            }

            .content-right {
                background: transparent;
                box-shadow: none;
            }


        </style>
    </head>

    <body>
        <!--<script type="text/javascript">
            $crisp = [];
            CRISP_WEBSITE_ID = "bfee4615-2d13-4129-a9c2-d7b8095e3d0e";
            (function() {
                d = document;
                s = d.createElement("script");
                s.src = "https://client.crisp.im/l.js";
                s.async = 1;
                //d.getElementsByTagName("head")[0].appendChild(s);
            })();

        </script>-->
        <div id="fakeLoader"></div>
        <script>
            $("#fakeLoader").fakeLoader({
                timeToHide:2000,
                bgColor:"#2c3e50",
                spinner:"spinner4"
            });
        </script>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=578768295582897";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <div class="container-fluid">
            <div class="row">
                <?php include ('../php/navbar.php');  ?>
            </div>
        </div>
        <div id="st-container" class="st-container">
            <?php include('../php/offCanvasMenu.php'); ?>
            <!-- content push wrapper -->
            <div class="st-pusher">	
                <div class="st-content"><!-- this is the wrapper for the content -->
                    <div class="st-content-inner">
                        <div class="container">
                            <div class="row" style="margin-top: 100px; padding-left: 10px; padding-right: 10px;">

                            </div>
                            <div class="row">
                                <div class="marginTopDiv">&nbsp;</div>
                                <div class="col-lg-9">
                                    <div class="content-left myWelcome wow fadeIn" style="min-height:1050px">
                                        <img src="images/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                     
                                        <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                            <span>&nbsp;About <strong> Entrepreneurship and Innovation Centre(EIC)</strong></span>
                                        </h4>
                                    

                                        <p align="justify"> EIC was formed on August 2nd, 2013 by the students and student secretaries of  Entrepreneurship and Innovation Centre  of  Kristu Jayanti College Autonomous.
											EIC symbolizes "a person who positively inspires and influences others. The EIC motivates, encourages and spreads the knowledge, skills which an individual need to acquire to be an ENTREPRENEUR and help the society in order to make it a better place than yesterday. Our aim is to create awareness among the students about various avenues of ENTREPRENEURSHIP and various aspects related to it such as financial aspects, marketing aspects and technical aspects.</p>
                                            
                                     
                                        <h4>About EIC</h4>
                                        <p align="justify">
                                            Entrepreneurship and Innovation Centre was established on 2nd august, 2013 with the mission of encouraging the students to acquire the knowledge and skill to be a successful entrepreneur.
                                        <p>Our Vision is to inspire the students to become job creator by inculcating the entrepreneurial spirit into them and provide the platform to inspired budding entrepreneur who has the innate impulse to innovate, take risks &amp; shoulder social responsibility.</p> 
                                        <p>Keeping the fact of growing competition in mind, in the present era entrepreneurship is inseparable from innovation. Motivated by this vision, Entrepreneurship Development Cell is renamed as Entrepreneurship and Innovation Centre and a passionate group of people are working to persuade an entrepreneurial attitude into the students and to imbibe an innovative spark in them.</p>
										<p>Entrepreneurship and Innovation Centre is a member of Wadhwani Foundation’s NEN which is a vibrant entrepreneurship network enabling access to mentors, investors and tools for growth of the EIC members.</p>
                                       
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h5 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Objectives of EIC
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <ul><li>Fostering the entrepreneurial spirit amongst students
                                                            </li>

                                                            <li> Networking student enterprises from campus to incubators, seeding funds and angel investors.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                                                            Faculty Coordinators

                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                     

                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Faculty Name</th>
                                                                        <th>Email ID</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Prof. Mathiyarasan.M , BE,MBA, (Ph.D)
                                                                        </td>
                                                                        <td>mathiyarasan@kristujayanti.com
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Prof.Deepika.S.R,  MBA,M.Phil,UGC NET,(Ph.D)
                                                                        </td>
                                                                        <td>deepikasr@kristujayanti.com
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Prof.Amjadh Khan , M.Sc,M.Phil.
                                                                        </td>
                                                                        <td>amjadhkhan@kristujayanti.com
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dr.Preethy Chandran, M.Sc,Ph.D
                                                                        </td>
                                                                        <td>preethy@kristujayanti.com
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Prof.Swetha.P.A, M.Com,M.Phil,(Ph.D)
                                                                        </td>
                                                                        <td>swetha.pa@kristujayanti.com
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div><br>



                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            Student Coordinators
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                    <div class="panel-body">

                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Student Name</th>
                                                                        <th>Course</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Roji M Tony 
                                                                        </td>
                                                                        <td>(V sem B.Com Prof)   
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Beulah Priyanka   
                                                                        </td>
                                                                        <td>(V sem BBA A)
                                                                        </td>
                                                                    </tr>
																	<tr>
                                                                        <td>Josine Merine Vargheese     
                                                                        </td>
                                                                        <td>( V sem B.Com Prof)
                                                                        </td>
                                                                    </tr>
																	<tr>
                                                                        <td>Jonnah   
                                                                        </td>
                                                                        <td>(V sem BCA A)
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingFour">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                            Activities
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                    <div class="panel-body">

                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ODD SEMESTER
                                                                        </th>
                                                                        <th>EVEN SEMESTER</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><strong>1. Membership
                                                                            Objective</strong><br><br>
                                                                            To create the seriousness among the students.<br><br>
                                                                            <strong>Activities</strong>
                                                                            <ul><li>
                                                                                Students who are interested to become the member of E-Cell, they can enroll their names to the Staff coordinator</li>
                                                                                <li>
                                                                                    Only students who register will be allowed to participate in the events 
                                                                                </li></ul><br>


                                                                            <strong>2. E-Day (Weekly Stalls)
                                                                            </strong><br><br>

                                                                            <strong>Objective</strong>
                                                                            <ul><li>
                                                                                To help the students to inculcate and improve their entrepreneurial skills </li>
                                                                                <li>
                                                                                    To give hands-on experience of business to the students 

                                                                                </li>
                                                                                <li>
                                                                                    To help the e-cell to be self-sustainable 

                                                                                </li></ul><br>


                                                                            <strong>Activities</strong>
                                                                            <ul><li>
                                                                                Students will be motivated to put stalls, in the food court, once in a week </li>
                                                                                <li>
                                                                                    Students will be selected based on the business proposal submitted by them 

                                                                                </li>
                                                                                <li>
                                                                                    The activity will be performed throughout the semester 

                                                                                </li>
                                                                                <li>
                                                                                    Only two members per team 
                                                                            </ul>


                                                               <br><br>
                                                                    <strong>3. Workshop, Seminar and Guest Lectures</strong>
                                                                    <ul>
                                                                        <li>
                                                                            <strong>Objective: </strong> To give in-depth knowledge about various aspects on entrepreneurship


                                                                        </li><br><br>
                                                                        <strong>Activity</strong>
                                                                        <li>
                                                                            Resource persons from various fields will be invited to address the students on various aspects of entrepreneurship
                                                                        </li></ul>

                                                                    <br><br>
                                                                    <strong>4. Students Mentoring (Incubation Centre)</strong>
                                                                    <ul>  <li>
                                                                        <strong>Objective</strong>
                                                                        To assist the students who are interested to start a part time or full time business 

                                                                        </li>
                                                                        <br>
                                                                        <strong>Activity</strong>
                                                                        <li>
                                                                            Interested students will be provided with information and network to start the business
                                                                        </li>
                                                                        <li>
                                                                            Continuous support and guidance will be provided
                                                                        </li>



                                                                    </ul>

                                                                </td>
                                                            <td><strong>1. E-Week
                                                                Objectives</strong><br><br>
                                                                To provide a platform for the students of our college to exhibit and explore their entrepreneurship skills<br><br>

                                                                <strong>Activities</strong>
                                                                <ul>
                                                                    <i> To conduct various events such as:</i> 
                                                                    <li>
                                                                        Business Venture 
                                                                    </li>
                                                                    <li>
                                                                        Girls Got Talent 

                                                                    </li>
                                                                    <li>
                                                                        Short Film Making
                                                                    </li>

                                                                </ul><br>
                                                                <strong>2. Workshop, Seminar and Guest Lectures (Knowledge Partner: NEN)</strong><br><br>
                                                                <ul>
                                                                    <i> <strong>Objective :</strong> To give in-depth knowledge about various aspects on entrepreneurship 

                                                                    </i> <br><br>
                                                                    <strong>Activity</strong>
                                                                    <li>
                                                                        Resource persons from various fields will be invited to address the students on various aspects of entrepreneurship

                                                                    </li>


                                                                </ul>

                                                            </td>



                                                            </tr>
                                                        </tbody>
                                                    </table>
                                            </div>


                                        </div>
                                    </div>
                                </div>


                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h5 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                          Activities organised by Entrepreneurship and Innovation Centre (EIC) [ June 2016-March 2017]

                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                        <div class="panel-body">

                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Sl. No.</th>
                                                            <th>Date</th>
                                                            <th>Nature of Event</th>
                                                            <th>Resource Person</th>
                                                            <th>No of Participants</th>
                                                            <th>Outcome</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1   
                                                            </td>
                                                            <td>12/08/2016
                                                            </td>
                                                            <td>Expert talk on Family owned enterprise  
                                                            </td>
                                                            <td>Mr.Kabir Bhasin
                                                            </td>
                                                            <td>220
                                                            </td>
                                                            <td>Students were motivated in  his talk
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>2   
                                                            </td>
                                                            <td>18/08/2016
                                                            </td>
                                                            <td>YESCAN-Entrepreneur talk 
                                                            </td>
                                                            <td>Mr.Ramesh Babu
                                                            </td>
                                                            <td>500
                                                            </td>
                                                            <td>Students were inspired in his talk
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3   
                                                            </td>
                                                            <td>02/12/2016
                                                            </td>
                                                            <td>YESCAN-Guest lecture on Family Management Business

                                                            </td>
                                                            <td>Aravind Singh, Chandrashekhar Sohoni, Abhimanyu Dikshit

                                                            </td>
                                                            <td>350  
                                                            </td>
                                                            <td>Students know about entrepreneurship opportunities in the market and help them to be creative thinkers in their business
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>4  
                                                            </td>
                                                            <td>05/01/2017
                                                            </td>
                                                            <td>YESCAN-Guest lecture on Family Management Business  
                                                            </td>
                                                            <td>Prof.Parimal Merchant
                                                            </td>
                                                            <td>90  
                                                            </td>
                                                            <td>Students were motivated to continue their family business
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5
                                                            </td>
                                                            <td>23/02/2017-
                                                                02/03/2017
                                                            </td>
                                                            <td>E-Week Inaugural
                                                            </td>
                                                            <td>Ravish Dhamija

                                                            </td>
                                                            <td>125   
                                                            </td>
                                                            <td>Students were motivated to find out opportunities and become entrepreneur
                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
										
                                        </div>
                                    </div>
                                </div>
                            </div>   
										
										<div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSix">
                                        <h5 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                               Alumni Entrepreneur Details

                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                        <div class="panel-body">

                                            <div class="table-responsive">
												
                                             <table border="0" class="table table-bordered table-hover">
  <tr>
	  <td width="42" valign="top"><p align="center"><b>S.No</b></p></td>
	  <td width="126" valign="top"><p align="center"><b>Name</b></p></td>
	  <td width="211" valign="top"><p align="center"><b>Mail id</b></p></td>
	  <td width="98" valign="top"><p align="center"><b>Mobile No</b></p></td>
	  <td width="66" valign="top"><p align="center"><b>Department</b></p></td>
	  <td width="168" valign="top"><p><b>Type of Business</b></p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">1</p></td>
    <td width="126" valign="top"><p>Arihant Kumar</p></td>
    <td width="211" valign="top"><p>Arihantarihant007@gmail.com</p></td>
    <td width="98" valign="top"><p align="center">9886340668</p></td>
    <td width="66" valign="top"><p align="center">BSC</p></td>
    <td width="168" valign="top"><p>Branding </p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">2</p></td>
    <td width="126" valign="top"><p>Dennis Thomas</p></td>
    <td width="211" valign="top"><p>dennis@dukerichards.in</p></td>
    <td width="98" valign="top"><p align="center">9742278366</p></td>
    <td width="66" valign="top"><p align="center">MBA</p></td>
    <td width="168" valign="top"><p>Interiors</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">3</p></td>
    <td width="126" valign="top"><p>Jesme Joy</p></td>
    <td width="211" valign="top"><p>jesmejoy@gmail.com</p></td>
    <td width="98" valign="top"><p align="center">8553486617</p></td>
    <td width="66" valign="top"><p align="center">B.com</p></td>
    <td width="168" valign="top"><p>Accessories</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">4</p></td>
    <td width="126" valign="top"><p>Joe Harold P.T</p></td>
    <td width="211" valign="top"><p>Joe.harold24@av-associates.in</p></td>
    <td width="98" valign="top"><p align="center">7829692691</p></td>
    <td width="66" valign="top"><p align="center">B.com</p></td>
    <td width="168" valign="top"><p>Chartered accountant</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">5</p></td>
    <td width="126" valign="top"><p>Dorai Raj.K</p></td>
    <td width="211" valign="top"><p>Raj.dorai316@gmail.com</p></td>
    <td width="98" valign="top"><p align="center">9844470190</p></td>
    <td width="66" valign="top"><p align="center">BBM</p></td>
    <td width="168" valign="top"><p>Bike Servicing</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">6</p></td>
    <td width="126" valign="top"><p>Divin Vaghese</p></td>
    <td width="211" valign="top"><p>Divinvarghese2030@gmail.com</p></td>
    <td width="98" valign="top"><p align="center">9447951047</p></td>
    <td width="66" valign="top"><p align="center">B.com, MBA</p></td>
    <td width="168" valign="top"><p> Manufacturing sand for <br />
      architectural purposes. </p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">7 /p></td>
    <td width="126" valign="top"><p>Balu Thomas Mathew</p></td>
    <td width="211" valign="top"><p>balu@mogbtunes.com</p></td>
    <td width="98" valign="top"><p align="center">9400339696</p></td>
    <td width="66" valign="top"><p align="center">BSc</p></td>
    <td width="168" valign="top"><p>Network and solutions.</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">8</p></td>
    <td width="126" valign="top"><p>Cyril Prabhu.J</p></td>
    <td width="211" valign="top"><p>Prabhu2424@gmail.com</p></td>
    <td width="98" valign="top"><p align="center">9902760859</p></td>
    <td width="66" valign="top"><p align="center">B.com</p></td>
    <td width="168" valign="top"><p>NGO</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center"> 9</p></td>
    <td width="126" valign="top"><p>N.Yeshwanth H</p></td>
    <td width="211" valign="top"><p>Sumukhgraphics7@gmail.com</p></td>
    <td width="98" valign="top"><p align="center">9663774401</p></td>
    <td width="66" valign="top"><p align="center">B.com</p></td>
    <td width="168" valign="top"><p>Graphic Designing and Printing</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p> 10</p></td>
    <td width="126" valign="top"><p>Sonia Shandilya</p></td>
    <td width="211" valign="top"><p>Shandilya.sonal@gmail.com</p></td>
    <td width="98" valign="top"><p align="center">8197366626</p></td>
    <td width="66" valign="top"><p align="center">BBM</p></td>
    <td width="168" valign="top"><p>consultancy</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center"> 11</p></td>
    <td width="126" valign="top"><p>Prujeeth Joshua</p></td>
    <td width="211" valign="top"><p>prujeethjoshua@gmail.com</p></td>
    <td width="98" valign="top"><p align="center">9916648240</p></td>
    <td width="66" valign="top"><p align="center">BA</p></td>
    <td width="168" valign="top"><p>Food, hospitality, entertainment</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">12</p></td>
    <td width="126" valign="top"><p>Bala Praveen</p></td>
    <td width="211" valign="top"><p>Bala.praveeen@gmail.com</p></td>
    <td width="98" valign="top"><p align="center">9886032986</p></td>
    <td width="66" valign="top"><p align="center">B.com</p></td>
    <td width="168" valign="top"><p>Tour operations</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">13</p></td>
    <td width="126" valign="top"><p> Joel Andrew Bartley</p></td>
    <td width="211" valign="top"><p>audiotechnics@hotmail.com</p></td>
    <td width="98" valign="top"><p align="center">9845337088</p></td>
    <td width="66" valign="top"><p align="center">B.com</p></td>
    <td width="168" valign="top"><p>Sound and light rentals</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">14</p></td>
    <td width="126" valign="top"><p>Pavan Shetty</p></td>
    <td width="211" valign="top"><p>Pavannshetty@gmail.com</p></td>
    <td width="98" valign="top"><p align="center">9880505357</p></td>
    <td width="66" valign="top"><p align="center">B.sc, MBA</p></td>
    <td width="168" valign="top"><p>Services</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">15</p></td>
    <td width="126" valign="top"><p>Pradeep John</p></td>
    <td width="211" valign="top"><p>capradeepjohn@gmail.com</p></td>
    <td width="98" valign="top"><p align="center">9036700581</p></td>
    <td width="66" valign="top"><p align="center">B.com</p></td>
    <td width="168" valign="top"><p>Chartered Accountant</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">16</p></td>
    <td width="126" valign="top"><p>Kiran K Nair</p></td>
    <td width="211" valign="top"><p>Kiranknair.nair@gmail.com</p></td>
    <td width="98" valign="top"><p align="center">9686133997</p></td>
    <td width="66" valign="top"><p align="center">B.com</p></td>
    <td width="168" valign="top"><p>Studio, photography, designing</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">17</p></td>
    <td width="126" valign="top"><p>Rizwan Ul Junaid</p></td>
    <td width="211" valign="top"><p>rizwanuljunaid@gmail.com</p></td>
    <td width="98" valign="top"><p align="center">8553180888</p></td>
    <td width="66" valign="top"><p align="center">MBA</p></td>
    <td width="168" valign="top"><p>Health care</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">18</p></td>
    <td width="126" valign="top"><p>J.Reynold Robin</p></td>
    <td width="211" valign="top"><p>Reynold.robin@gmail.com</p></td>
    <td width="98" valign="top"><p align="center">9886381152</p></td>
    <td width="66" valign="top"><p align="center">BBM</p></td>
    <td width="168" valign="top"><p>Interior decorations</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">19</p></td>
    <td width="126" valign="top"><p>Rojin R Sam</p></td>
    <td width="211" valign="top"><p>rojin@rcventures.co.in</p></td>
    <td width="98" valign="top"><p align="center">9886365272</p></td>
    <td width="66" valign="top"><p align="center">B.com, MBA</p></td>
    <td width="168" valign="top"><p>Logistics and waste management</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">20</p></td>
    <td width="126" valign="top"><p>Sebe Mathew</p></td>
    <td width="211" valign="top"><p>Sebe.mathew7@gmail.com</p></td>
    <td width="98" valign="top"><p align="center">7411195737</p></td>
    <td width="66" valign="top"><p align="center">BA</p></td>
    <td width="168" valign="top"><p>Event management</p></td>
  </tr>
  <tr>
    <td width="42" valign="top"><p align="center">21</p></td>
    <td width="126" valign="top"><p>Prithvi Lawrence</p></td>
    <td width="211" valign="top"><p>prithvitheearth@gmail.com</p></td>
    <td width="98" valign="top"><p align="center">8884191284</p></td>
    <td width="66" valign="top"><p align="center">BA</p></td>
    <td width="168" valign="top"><p>Event management</p></td>
  </tr>
</table>
											</div></div></div></div>
										
								<div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingSeven">
                                        <h5 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                              Details of Present students who became an entrepreneur

                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                        <div class="panel-body">

                                            <div class="table-responsive">
												
												<table border="0" class="table table-bordered table-hover">
  <tr>
    <td width="55" valign="top"><p><strong>S.No</strong></p></td>
    <td width="144" valign="top"><p><strong>Name</strong></p></td>
    <td width="84" valign="top"><p><strong>Batch</strong></p></td>
    <td width="167" valign="top"><p><strong>Department</strong></p></td>
    <td width="138" valign="top"><p><strong>Type of Business</strong></p></td>
  </tr>
  <tr>
    <td width="55" valign="top"><p>1</p></td>
    <td width="144" valign="top"><p>Kurian George</p></td>
    <td width="84" valign="top"><p>2015-18</p></td>
    <td width="167" valign="top"><p>Computer Science[PG]</p></td>
    <td width="138" valign="top"><p>Online gifting and Web Development</p></td>
  </tr>
  <tr>
    <td width="55" valign="top"><p>2</p></td>
    <td width="144" valign="top"><p>Jobith M Basheer</p></td>
    <td width="84" valign="top"><p>2015-18</p></td>
    <td width="167" valign="top"><p>Computer Science[PG]</p></td>
    <td width="138" valign="top"><p>Online gifting and Web Development</p></td>
  </tr>
  <tr>
    <td width="55" valign="top"><p>3</p></td>
    <td width="144" valign="top"><p>Sonu Aharaham</p></td>
    <td width="84" valign="top"><p>2015-18</p></td>
    <td width="167" valign="top"><p>Computer Science[PG]</p></td>
    <td width="138" valign="top"><p>Online gifting and Web Development</p></td>
  </tr>
  <tr>
    <td width="55" valign="top"><p>4</p></td>
    <td width="144" valign="top"><p>Jijo Joseph</p></td>
    <td width="84" valign="top"><p>2015-18</p></td>
    <td width="167" valign="top"><p>Computer Science[PG]</p></td>
    <td width="138" valign="top"><p>Online gifting and Web Development</p></td>
  </tr>
  <tr>
    <td width="55" valign="top"><p>5</p></td>
    <td width="144" valign="top"><p>Joel Mathew</p></td>
    <td width="84" valign="top"><p>2015-18</p></td>
    <td width="167" valign="top"><p>Computer Science[PG]</p></td>
    <td width="138" valign="top"><p>Online gifting and Web Development</p></td>
  </tr>
  <tr>
    <td width="55" valign="top"><p>6</p></td>
    <td width="144" valign="top"><p>Nidhin manjaly</p></td>
    <td width="84" valign="top"><p>2015-18</p></td>
    <td width="167" valign="top"><p>Computer Science[PG]</p></td>
    <td width="138" valign="top"><p>Online gifting and Web Development</p></td>
  </tr>
  <tr>
    <td width="55" valign="top"><p>7</p></td>
    <td width="144" valign="top"><p>Abijith Benny</p></td>
    <td width="84" valign="top"><p>2015-18</p></td>
    <td width="167" valign="top"><p>Computer Science[PG]</p></td>
    <td width="138" valign="top"><p>Online gifting and Web Development</p></td>
  </tr>
  <tr>
    <td width="55" valign="top"><p>8</p></td>
    <td width="144" valign="top"><p>Melbin kuriakose</p></td>
    <td width="84" valign="top"><p>2014-17</p></td>
    <td width="167" valign="top"><p>Computer Science[PG]</p></td>
    <td width="138" valign="top"><p>Web Development</p></td>
  </tr>
  <tr>
    <td width="55" valign="top"><p>9</p></td>
    <td width="144" valign="top"><p>Jain kurian</p></td>
    <td width="84" valign="top"><p>2014-17</p></td>
    <td width="167" valign="top"><p>Computer Science[PG]</p></td>
    <td width="138" valign="top"><p>Web Development</p></td>
  </tr>
  <tr>
    <td width="55" valign="top"><p>10</p></td>
    <td width="144" valign="top"><p>Lijo Jai</p></td>
    <td width="84" valign="top"><p>2014-17</p></td>
    <td width="167" valign="top"><p>Computer Science[PG]</p></td>
    <td width="138" valign="top"><p>Web Development</p></td>
  </tr>
  <tr>
    <td width="55" valign="top"><p>11</p></td>
    <td width="144" valign="top"><p>Praveen Tom Jennings </p></td>
    <td width="84" valign="top"><p>2014-16</p></td>
    <td width="167" valign="top"><p>MBA</p></td>
    <td width="138" valign="top"><p>Logistics</p></td>
  </tr>
  <tr>
    <td width="55" valign="top"><p>12</p></td>
    <td width="144" valign="top"><p>Amal Siby</p></td>
    <td width="84" valign="top"><p>2014-16</p></td>
    <td width="167" valign="top"><p>MBA</p></td>
    <td width="138" valign="top"><p>Jewelers</p></td>
  </tr>
  <tr>
    <td width="55" valign="top"><p>13</p></td>
    <td width="144" valign="top"><p>Mathew Sebastian</p></td>
    <td width="84" valign="top"><p>2014-16</p></td>
    <td width="167" valign="top"><p>MBA</p></td>
    <td width="138" valign="top"><p>Hotel</p></td>
  </tr>
  <tr>
    <td width="55" valign="top"><p>14</p></td>
    <td width="144" valign="top"><p>Rohit R Patel </p></td>
    <td width="84" valign="top"><p>2015-16</p></td>
    <td width="167" valign="top"><p>MBA</p></td>
    <td width="138" valign="top"><p>Retail </p></td>
  </tr>
  <tr>
    <td width="55" valign="top"><p>15</p></td>
    <td width="144" valign="top"><p>Syed Zaid Asim</p></td>
    <td width="84" valign="top"><p>2015-16</p></td>
    <td width="167" valign="top"><p>MBA</p></td>
    <td width="138" valign="top"><p>Hotel </p></td>
  </tr>
  <tr>
    <td width="55" valign="top"><p>16</p></td>
    <td width="144" valign="top"><p>Jaison Kunchandy</p></td>
    <td width="84" valign="top"><p>2015-16</p></td>
    <td width="167" valign="top"><p>MBA</p></td>
    <td width="138" valign="top"><p>Retail</p></td>
  </tr>
  <tr>
    <td width="55" valign="top"><p>17</p></td>
    <td width="144" valign="top"><p>Shashikumar  M </p></td>
    <td width="84" valign="top"><p>2015-17</p></td>
    <td width="167" valign="top"><p>Commerce    – PG</p></td>
    <td width="138" valign="top"><p>Catering</p></td>
  </tr>
</table>
											
											</div></div></div></div>





                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                            <h4 style="margin-left:10px;" class="mainheading">
                                <i class="fa fa-bookmark"></i>
                                <span>&nbsp;Student <strong> Services</strong></span>
                            </h4>
                            <section class="link-arrow">
                                <p><a class="a-link-arrow" href="https://kristujayanti.directverify.in/myeasydocs_directverify/directverify/dv_trn_verification.aspx">Online Document Verification</a></p>
                            </section>
                            <section class="link-arrow">
                                <p><a class="a-link-arrow" href="eic.php" style="color: #2980b9;font-weight: bold;">Entrepreneurship and Innovation Centre(EIC)</a></p>
                            </section>
                            <section class="link-arrow">   
                                <p><a class="a-link-arrow" href="jayantian_entrepreneurs.php">Jayantian Entrepreneurs</a></p>
                            </section><section class="link-arrow">
                            <p><a class="a-link-arrow" href="counselling_center.php">Counselling Centre</a></p>
                            </section><section class="link-arrow">
                            <p><a class="a-link-arrow" href="grievance_redressal.php">Grievance Redressal </a></p>
                            </section><section class="link-arrow">
                            <p><a class="a-link-arrow" href="scholarship.php">Scholarship</a></p>
                            </section><section class="link-arrow">
                            <p><a class="a-link-arrow" href="schlorship_loan_facilities.php">Scholarship &amp; Loan Facilities</a></p>
                            </section>
                            <section class="link-arrow">
                                <p><a class="a-link-arrow" href="health_care.php">Health Care</a></p>
                            </section>
                            <section class="link-arrow">
                                <p><a class="a-link-arrow" href="international_student_forum.php">International Student Forum</a></p>
                            </section>
                            <section class="link-arrow">
                                <p><a class="a-link-arrow" href="coaching_center.php">Coaching Centre</a></p>
                            </section>

                        </div>
                        <div class="content-right new-content-right wow fadeIn" style="margin-left:2px; margin-right: 2px;">
                            <h4 style="margin-left:10px;" class="mainheading">
                                <i class="fa fa-bookmark"></i>
                                <span>&nbsp;goto <strong>QuickLinks</strong></span>
                            </h4>
                            <?php include ('../php/sideMenu.php'); ?>
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

            <!--                                </div>-->
            <?php include ('../php/alerts.php');  ?>
            <?php include('../php/footer.php'); ?>
            
        </div>



        </div>
    <!--/st-content-inner-->
    </div>
<!-- this is the wrapper for the content-->
</div>
<!--st-pusher-->
<!--        </div> st-container -->



<script>
    (function() {

        [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
            new CBPFWTabs( el );
        });

    })();
</script>
<script src="../js/modernizr.custom.js"></script>
<script src="../js/spin.min.js"></script>
<script src="../js/mySpin.js"></script>
<script src="../js/swipeview.js"></script>
<script src="../js/jquery.bootstrap.newsbox.min.js"></script>
<script src="../js/classie.js"></script>

<script src="../js/sidebarEffects.js"></script>
<script src="../js/transit.js"></script>
<script src="../js/sly.js"></script>
<script src="../js/customSly.js"></script>
<script src="../js/wow.min.js"></script>
<!--    <script src="js/res-navtabs.js"></script>-->
<script src="../js/scripts.js"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>   

</html>