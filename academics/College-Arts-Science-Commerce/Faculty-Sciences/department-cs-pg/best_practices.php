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
            <?php require ("php/navbar.php"); ?>
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

                                <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                    <span>&nbsp; Best  <strong> Practices</strong></span></h4>
								
								<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="headingOne">
														<h5 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">

															Software Development Cell (2016-2017)
															</a>
														</h5>
													</div>
													<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
														<div class="panel-body">
															<p><b>Execution:</b><br>
																<b>Following are the list of projects deployed under this cell.</b><br>
																
																
																<table class="table">
  <thead>
    <tr>
      <th>S.No</th>
      <th>Type </th>
      <th>Project Title </th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>In-house Projects</td>
      <td>Examination Result Management System</td>
      </tr>
	  <tr>
      <th scope="row">2</th>
      <td>In-house Projects</td>
      <td>Website for KRISYM 2017</td>
      </tr>
	  <tr>
      <th scope="row">3</th>
      <td>In-house Projects</td>
      <td>Website for IEEE ICCTAC 2017</td>
      </tr>
	  <tr>
      <th scope="row">4</th>
      <td>In-house Projects</td>
      <td>Website and Mobile App for Shells 2017</td>
      </tr>
	  <tr>
      <th scope="row">5</th>
      <td>External  Projects</td>
      <td>Maintenance of BM School Website</td>
      </tr>
	  <tr>
      <th scope="row">6</th>
      <td>External  Projects</td>
      <td>BM School administration automation</td>
      </tr>
 </tbody>
</table>
															<p><b>2.	Computer Literacy Programme</b><br>
																Details of Computer Literacy Programme for this year department are given below. </p>
	
<table class="table">
  <thead>
    <tr>
      <th>S.No</th>
      <th>Date</th>
      <th>Place</th>
      <th>Beneficiaries</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>05.08.2016 and 06.08.2016</td>
      <td>Alambady Village, Malur Taluk, Kolar District</td>
      <td>Students of 1st to 5th and 9th & 10th class</td>
    </tr>
    </tbody>
</table>


															
														</div>
													</div>
												</div>

								
								
								<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="headingTwo">
														<h5 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

															Software Development Cell (2015-2016)
															</a>
														</h5>
													</div>
													<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
														<div class="panel-body">
															<p><b>Execution:</b><br>
																<b>Following are the list of projects deployed under this cell.</b><br>
																
																
																<table class="table">
  <thead>
    <tr>
      <th>S.No</th>
      <th>Type </th>
      <th>Project Title </th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>In-house Projects</td>
      <td>Document Management System</td>
      </tr>
	  <tr>
      <th scope="row">2</th>
      <td>In-house Projects</td>
      <td>Evaluation System for Examination Department</td>
      </tr>
	  <tr>
      <th scope="row">3</th>
      <td>In-house Projects</td>
      <td>Document Management System</td>
      </tr>
	  <tr>
      <th scope="row">4</th>
      <td>In-house Projects</td>
      <td>Website for KRISYM 2016</td>
      </tr>
	  <tr>
      <th scope="row">5</th>
      <td>In-house Projects</td>
      <td>Website for IEEE ICCTAC 2016</td>
      </tr>
	  <tr>
      <th scope="row">6</th>
      <td>In-house Projects</td>
      <td>Website and Mobile App for Shells 2016</td>
      </tr>
	  <tr>
      <th scope="row">7</th>
      <td>External  Projects</td>
      <td>External  Projects	Maintenance of BM School Website</td>
      </tr>
	  <tr>
      <th scope="row">8</th>
      <td>External  Projects</td>
      <td>BM School administration automation</td>
      </tr>
    </tbody>
</table>
															<p><b>2.	Computer Literacy Programme</b><br>
																Details of Computer Literacy Programme for this year department are given below. </p>
	
<table class="table">
  <thead>
    <tr>
      <th>S.No</th>
      <th>Date</th>
      <th>Place</th>
      <th>Beneficiaries</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>20.08.2015 – 21.08.2015</td>
      <td>Sri. Siddaganga High School, Purushanahalli, Doddabalapur (D.T)</td>
      <td>Students of 9th and 10th class</td>
    </tr>
    </tbody>
</table>

															<p><b>3.	Language Enhancement Programme</b><br>
																Details of Language Enhancement Programme for the year 2015-2016 are given below.</p>
															<table class="table">
  <thead>
    <tr>
      <th>S.No</th>
      <th>Date</th>
      <th>Duration</th>
      <th>Beneficiaries</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>06.10.2015-18.12.2015</td>
      <td>40 Hours</td>
      <td>8 Students from I MCA Batch 2015-2016.</td>
    </tr>
    </tbody>
</table>

															
														</div>
													</div>
												</div>

								
								<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="headingThree">
														<h5 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

															Software Development Cell:
															</a>
														</h5>
													</div>
													<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
														<div class="panel-body">
															<p><b style="color: #cd6e08;font-weight: bold;">Context:</b><br>
																The Software Development Cell formed by the department caters the automation of various system oriented applications both for the college and outside agencies. It is initiated in the year 2013-2014.</p>
															<p><b style="color: #cd6e08;font-weight: bold;">Objective:</b><br>
																To hone software development skills determine by quality standards w.r.t. industrial expectations. It prepares them to meet the challenges faced by today’s IT professional by exposing them to wide array of cutting-edge technologies during the course of development and also to enhance entrepreneur skills.  </p>
															<p><b style="color: #cd6e08;font-weight: bold;">Practices:</b><br>
																Under the guide ship of Department faculty coordinator interested students are identified and projects related to the college internal applications and external agencies are developed. Periodical meetings are conducted to sort out the findings with this regard and also to aid in organized development.</p>
															<p><b style="color: #cd6e08;font-weight: bold;">Constraints:</b><br>
																Lack of skillful students much to the expectations of the challenges prevailing in development trends.</p>
															<p><b style="color: #cd6e08;font-weight: bold;">Resource required:</b><br>
o	Upgraded hardware and software resources required for development.<br>
																o	Appropriate time duration</p>

															
														</div>
													</div>
												</div>
								
								
								<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="headingFour">
														<h5 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">

														Computer Literacy Program:
															</a>
														</h5>
													</div>
													<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
														<div class="panel-body">
															<p align=justify><b>Context:</b><br>
																Computer literature sessions are conducted to the higher secondary classes and also to primary classes of the nearby and rural Government Schools with the help of really motivated and enthusiastic set of students.</p>
															<p align=justify><b>Objective:</b><br>
																This program aims to inculcate the essence of “Education for All” and to meet the underprivileged section of the Society. Our students are given with a real life experience of mingling with school children and making them to understand the basics of computers. It is started in the year of 2009-2010.</p>
															<p align=justify><b>Practices:</b><br>
																Once in a semester the Head of the Department with assistance from NSS coordinator of the college identifies a village and takes the permission from the govt., school authorities to conduct the session. Once the approval is attained a group of students with the guidance of the faculties meet the students and conduct computer classes on the fundamentals.</p>
															<p align=justify><b>Execution:</b><br>
•	SAHANAVAVATHU  ...  ‘KISHORA GANAKA JNANA’ - Come Together - Teaching Basic Computer Skills to High School children. <br>
																•	Computer Literacy Program for Government High School Students by the students as a part of NSS Programme.</p>
															<p><b>Constraints:</b><br>
																Lack of mandatory resources at the school for the efficient conduct of class</p>
															<p><b>Resources required:</b><br>
																•	Set of basic software, computers, and class room teaching materials.</p>


															
														</div>
													</div>
												</div>

								
								<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="headingFive">
														<h5 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">

														Language Enhancement Program
															</a>
														</h5>
													</div>
													<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
														<div class="panel-body">
															<p align=justify><b>Context:</b> To identify the weaker section in communication ability amongst the students the LEP has been instantiated. This practice is initiated in the year of 2004-2005.</p>
															<p align=justify><b>Objective:</b> To improve the English speaking ability of the students and to overwhelm the fear of facing the public while delivering seminars. Department opens up language solutions through Jayantian Language Learning Centre (JLLC). </p>
															<p align=justify><b>Practice: </b><br>
																Activity-1: Three batches of Students comprising 9 members each whom are weaker in communication are identified and an animator for each group is appointed.</p>
															<p>Activity-II: Amongst the members in the group, a leader is selected for each session and asked to prepare activities like Seminars on specific topics, Group Discussions, Debate etc., to be done on the day by the members of the group focusing towards enhancing communication.</p>
															<p>Activity-III: Animators in-charge of the team is asked to monitor the progress of the students and to help them in sorting out the difficulties. The report of the same is being prepared by the leader and submitted to the Staff-in-charge.</p>
															<p align=justify><b>Constraint: </b><br>
i)	Identification of students weaker in communication and making them to feel the importance of improving their ability.<br>
																ii)	Problems in identifying appropriate programs that creates curiosity and interest amongst the group members to actively participate in the programs.</p>
															<p><b>Resource required:</b><br>
i)	ICT enabled class room environment<br>
ii)	News Papers, Magazines, Journals<br>
iii)	Wi-Fi facility<br>
iv)	Audio Visual System<br>
																v)	Public Addressing system.</p>


															
														</div>
													</div>
												</div>


								
								

								</div></div>
                            <div class="col-lg-3" style="margin-top:1em;">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;<strong>Activities</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="national_conference.php">National Conference</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="international_conference.php">International Conference</a></p>
                                    </section>
                                   
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="orientation_program.php">Orientation Program</a></p>
                                    </section>
									
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="aptitude_enhancement_program.php">Aptitude Enhancement Program</a></p>
                                    </section>
									
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="technical_communities.php">Technical Communities</a></p>
                                    </section>
									
									
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="club_activity.php">Club Activity</a></p>
                                    </section>
									
									
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="it_fests.php">IT Fests</a></p>
                                    </section>
									
								    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="celebrations.php">Celebrations</a></p>
                                    </section>
                                	
								</div>
								
								 <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>Department <strong>Special</strong></span>
                                        </h4>
                                        
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="achivements.php">Achievements</a></p>
                                    </section>
                                        
                                        <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="it_fests.php">Fests</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="executive_visit.php">Executive Visit</a></p>
                                    </section>
										
										 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="best_practices.php" style="color: #2980b9;font-weight: bold;">Best Practices</a></p>
                                    </section>
										
										 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty.php">Faculty Profile</a></p>
                                    </section>
										
										 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_calendar.php">Academic Calendar</a></p>
                                    </section>
										
										 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_projects.php">Academic Projects</a></p>
                                    </section>
										
										 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="seminars_workshops.php">Seminars/Workshops</a></p>
                                    </section>
										
										<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="collaboration_linkage.php">Collaboration and Linkage</a></p>
                                    </section>
										
										<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="news_letter.php">Newsletter</a></p>
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
						</div></div>

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
