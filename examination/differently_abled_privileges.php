<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website"; $imgNum = mt_rand(1,4);/*$ROOT is the base URL & should on top of every PAGE */?> 
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
    <link rel="stylesheet" href="../css/morphing.css">
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
            <?php include ('../php/navbar.php');  ?>
        </div>
    </div>
    <div id="st-container" class="st-container">
        <?php include('../php/offCanvasMenu.php'); ?>
        <!-- content push wrapper -->
        <div class="st-pusher">
            <div class="st-content">
                <!-- this is the wrapper for the content -->
                <div class="st-content-inner">
                    <div class="container">
                        <!--        <div class="row">-->
                        <div class="row" style="margin-top: 100px; padding-left: 10px; padding-right: 10px;">

                        </div>
                        <div class="row">
                            <div class="marginTopDiv">&nbsp;</div>
                            <div class="col-lg-9">
                                <div class="content-left myWelcome wow fadeIn">
                                    <img src="images/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />
                             
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp; Differently Abled  <strong> (Physically Challenged) Privileges</strong></span>
                                    </h4>
									<p><b style="color: #cd6e08;font-weight: bold;">Differently abled (Physically Challenged) students have to submit the following:</b><br>
Medical certificate certifying their disability<br>
										Documentary proof of special privileges granted during the time of admission or at the beginning of the academic programme to the Principal and the Controller of Examinations.</p>

									<p><b style="color: #cd6e08;font-weight: bold;">Based on the documentary evidence the management and the Controller of Examinations shall provide special grants for these students such as</b><br>
Extension of time for the Term/End Semester Examinations<br>
Relaxation of time and procedure in the evaluation of Continuous Internal Assessment<br>
Special moderations in the evaluation process of CIA and End Semester Examinations<br>
										Appointment of scribe for writing examination (if necessary)</p>
									<p><b style="color: #cd6e08;font-weight: bold;">Allocation of Scribe</b><br>
										Differently abled (Physically Challenged) students who have submitted the documentary evidence for the disability shall be granted permission to have scribe for writing the examination </p>

									<p>The scribe has to be arranged by the respective student.</p>

<p>The scribe should be a person who has not completed 10 + 2/PUC and following document copies has to be produced two months before the commencement of the examination in support of sanctioning of scribe the management and Controller of Examinations:<br>
Identity Card of the institution where the scribe is undergoing education<br>
10th Standard/SSLC marks card and first page Photostat copy<br>
	One Passport size photograph</p>


									
									
                                </div>
                            </div>
                           <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
									
									 <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Examination</h3>
                                        </div>
										 
										  <div class="list-group">
          <a href="introduction.php" class="list-group-item"> Introduction</a></div>
										 
										  <div class="list-group">
          <a href="examination_comittee.php" class="list-group-item">Examination Committee</a></div>
										 
										  <div class="list-group">
          <a href="internal_examination.php" class="list-group-item"> Internal Examination</a></div>
										 
										  <div class="list-group">
          <a href="guidelines_termexam.php" class="list-group-item"> Guidelines - Internal Exam</a></div>
										 
										  <div class="list-group">
          <a href="pta_meeting.php" class="list-group-item"> PTA Meeting</a></div>
										 
										  <div class="list-group">
          <a href="graducation_day.php" class="list-group-item"> Graduation Day</a></div>
										 
										  <div class="list-group">
											  <a href="#" class="list-group-item disabled"><b>Programme Pattern</b></a>
  <a href="semester_pattern_ug_pg.php" class="list-group-item">Semester / Trimester Pattern UG / PG</a></div> 
										 
										 
										 <div class="list-group">
											 <a href="#" class="list-group-item disabled"><b>Examination Calendar</b></a>
  <a href="examination_calendar.php" class="list-group-item">Academic Year 2016-17</a></div> 
										 
										  <div class="list-group">
											  <a href="#" class="list-group-item disabled"><b>Assessment Regulations</b></a>
  <a href="assessment_norms.php" class="list-group-item">Assessment Norms</a>
  <a href="continuous_internal_assessment.php" class="list-group-item">Continuous Internal Assessment</a>
  <a href="end_semester_examination.php" class="list-group-item">End Semester Examination</a>
 <a href="passing_criteria.php" class="list-group-item">Passing Criteria</a>
 <a href="credit_system.php" class="list-group-item">Credit System</a>
 <a href="grading_cgpa.php" class="list-group-item">Grading and CGPA</a>
										 </div> 
										 
									 <div class="list-group">
										 <a href="#" class="list-group-item disabled"> <b>Pre Examination Procedures / Examination Time Table</b></a>
  <a href="end_semester_trimester_examination_time_table.php" class="list-group-item">End Sem/Tri Examination </a>
										  <a href="term_examination_time_table.php" class="list-group-item">Term Examination Time Table </a>
										  <a href="university_examination_time_table.php" class="list-group-item">University Examination Time Table</a>
										 
										 </div>	 
										 
										 <div class="list-group">
											 <a href="#" class="list-group-item disabled"><b>Post Examination Procedures</b></a>
  <a href="result_announcement.php" class="list-group-item">Result Announcement</a>
										  <a href="grievance_redressal.php" class="list-group-item">Grievance Redressal</a>
										  <a href="revaluations.php" class="list-group-item">Revaluation</a>
											  <a href="supplementary_examination.php" class="list-group-item">Supplementary Examinationn</a>
											  <a href="marks_card_transcript.php" class="list-group-item">Marks Card/Transcript</a>
										 
										 </div>	 
										 
										 
										 <div class="list-group">
											 <a href="non_core_courses_ug_programme.php" class="list-group-item"> <b>Non-Core Courses UG Programme</b></a></div>
										 
										 <div class="list-group">
											 <a href="differently_abled_privileges.php" style="color: #2980b9;font-weight: bold;" class="list-group-item"> <b>Differently Abled (Physically Challenged) privileges</b></a></div>
										 
										 
										 <div class="list-group">
											 <a href="seating_arrangement.php" class="list-group-item"> <b>Seating Arrangement</b></a></div>
										 


                                </div>

                            </div>
                        </div>

                    </div>

                  </div>
                    <?php include ('../php/alerts.php');  ?>
                    <?php include('../php/footer.php'); ?>
                    
                </div>



            </div>
            <!--/st-content-inner-->
        </div>
        <!-- this is the wrapper for the content-->
    </div>
    <!--st-pusher-->
   
    <!--st-container-->

    <script src="../js/cbpFWTabs.js"></script>
    <script>
        (function() {

            [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
                new CBPFWTabs(el);
            });

        })();

    </script>
    <script src="../js/modernizr.custom.js"></script>
    <script src="../js/spin.min.js"></script>
    <script src="../js/mySpin.js"></script>
    <script src="../js/swipeview.js"></script>
    <script src="../js/jquery.bootstrap.newsbox.min.js"></script>
    <script src="../js/classie.js"></script>
    <script src="../js/morphingSearch.js"></script>
    <script src="../js/sidebarEffects.js"></script>
    <script src="../js/transit.js"></script>
    <script src="../js/sly.js"></script>
    <script src="../js/customSly.js"></script>
    <script src="../js/wow.min.js"></script>
    <!--    <script src="js/res-navtabs.js"></script>-->
    <script src="../js/scripts.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>
