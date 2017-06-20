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
    <script type="text/javascript">$crisp=[];CRISP_WEBSITE_ID="bfee4615-2d13-4129-a9c2-d7b8095e3d0e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.im/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
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
                                        <span>&nbsp; Continuous  <strong>Internal Assessment (CIA)</strong></span>
                                    </h4>

									<p align=justify>The Continuous Internal Assessment (CIA) is having a weightage of 30% and the student performance in the End Semester Examinations is having a weightage of 70%. All the UG theory courses are evaluated out of 100 marks where 70 marks will be based on the End Semester Examination and 30 marks will be based on the Continuous Internal Assessment. The practical courses of UG programmes are evaluated out of 50 marks where 35 marks will be based on the End Semester Practical Examination and 15 marks will be based on the Continuous Internal Assessment. Post Graduate programmes follow the same marks distribution except for the practical courses where the marks distribution may vary which is depicted in the syllabus.</p>

									<p align=justify>Exception for the above marks distribution occurs for the MBA and PGDM programme courses which have 2 or 3 credits where in the courses are evaluated out of 75 marks where 50 marks will be based on the End Trimester Examination and 25 marks will be based on the Continuous Internal Assessment.</p>

									<p align=justify><b style="color: #cd6e08;font-weight: bold;">Non Core Course:</b><br>
										Non Core theory courses of the Under Graduate Programmes are evaluated out of 50 marks where 45 marks will be based on the End Semester Examination and 5 marks will be based on the Continuous Internal Assessment (one assignment evaluated out of 5 marks). The marks secured for these courses are not considered for the grand total. But student should secure a pass status for the same for awarding the degree.</p>
									<p><b style="color: #cd6e08;font-weight: bold;">CIA Components - UG Programme</b><br>
										CIA(Theory Course): Under Graduate Programme</p>
									
 <table class="table table-bordered">
  <thead>
    <tr>
      <th>Component</th>
      <th>Marks</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>CIAI : Total of two Term Examinationmarks(Out of 100)is scaled down toout of 15 marks. </td>
      <td>15</td>
      
    </tr>
    <tr>
      <td>CIAII : Assignment</td>
      <td>10</td>
     
    </tr>
	  
	   <tr>
      <td>CIAIII : Attendance</td>
      <td>5</td>
     
    </tr>
	  
	   <tr>
      <th scope="row">Total</th>
      <td>30</td>
     
    </tr>
										</tbody></table><br>
									
									
									<p><b>CIA(Theory Course):<br> Post Graduate Programme</b>
										
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Component</th>
      <th>Marks</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>CIAI : Mid Term Examination</td>
      <td>15</td>
      
    </tr>
    <tr>
      <td>CIAII : Assignment</td>
      <td>5</td>
     
    </tr>
	  
	   <tr>
      <td>CIAIII : Seminar </td>
      <td>5</td>
     
    </tr>
	  
	   <tr>
      <td>CIAIV: Paper presentation / Case Study/ Mini Project </td>
      <td>5</td>
     
    </tr>
	  <tr>
		  <td><b>Total</b></td>
      <td>30</td>
     
    </tr>
										</tbody></table>
									
									<p><b>Exception: MBA/PGDM programme courses having 2 or 3 credits. The CIA component division of marks for the same is given below.</b>
									
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Component</th>
      <th>Marks</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>CIAI :  Mid Term Examination </td>
      <td>15</td>
      
    </tr>
    <tr>
      <td>CIAII :  Seminar </td>
      <td>5</td>
     
    </tr>
	  
	   <tr>
      <td>CIAIII :Case Study/Mini Project</td>
      <td>5</td>
     
    </tr>
	 <tr>
		 <td><b>Total</b></td>
      <td>25</td>
     
    </tr>
										</tbody></table>
									
									
									<p><b>CIA: Practical Course (UG & PG)</b></p>
									<table class="table table-bordered">
  <thead>
    <tr>
      <th>Component</th>
      <th>Marks</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Term Examination (Conducted Out of 30 marks and scaled down to 10 marks)</td>
      <td>10</td>
      
    </tr>
    <tr>
      <td>Class Work & Record Work  </td>
      <td>5</td>
     
    </tr>
	  
	  
	 <tr>
		 <td><b>Total</b></td>
      <td>15</td>
     
    </tr>
										</tbody></table>
									
									<p><b>CIA Components - PG Programme</b><br>
										There may be variation of marks distribution for practical courses of PG programmes the details of which is depicted in the syllabus of the respective programme.</p>

									<p><b>CIA I: Term Examination or Internal Test UG & PG</b><br>
										The Term Examinations are held as per the schedule given in the academic calendar. The Term Examination will be conducted out of 50 marks for a duration of two hours for each course. For UG students the total marks secured by the student in the two Term Examinations for acourse will be scaled down to 15 marks. For PG students the marks secured in one Mid Term Examination will be scaled down to 15 marks.</p>

									<p><b>CIA II: Assignment UG & PG</b><br>
										One assignment will be given for each course as per the schedule given in the calendar. The assignment is evaluated out of 10 marks for UG and 5 marks for PG course.</p>

									<p><b>CIA III: Seminar PG</b><br>
										One seminar will be done by the student for each course as per the schedule given in the calendar. The seminar is evaluated out of five marks for each course.</p>

									<p><b>CIA IV: Attendance - UG</b><br>
A student can attain maximum of 5 marks based on his/her attendance percentage for each course. Marks allotted will be as follows:<br>
If attendance is in the range 95% - 100% assign 5 marks out of 5<br>
If attendance is in the range 90% - 94% assign 4 marks out of 5<br>
If attendance is in the range 85% - 89% assign 3 marks out of 5<br>
										If attendance is in the range 75% - 84% assign 2 marks out of 5</p>


									<p><b>CIA IV: Paper presentation / Case Study / Mini Project - PG</b><br>
										According to the nature of the course the subject teacher provide one among the three options (Paper Presentation/Case Study/Mini Project) and evaluate the same out of 5 marks.</p>



									
									
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
  <a href="continuous_internal_assessment.php" style="color: #2980b9;font-weight: bold;" class="list-group-item">Continuous Internal Assessment</a>
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
											 <a href="differently_abled_privileges.php" class="list-group-item"> <b>Differently Abled (Physically Challenged) privileges</b></a></div>
										 
										 
										 <div class="list-group">
											 <a href="seating_arrangement.php" class="list-group-item"> <b>Seating Arrangement</b></a></div>
										 


                                </div>

                            </div>
                        </div>

                    </div>

                    </div>
                    <?php include ('../php/alerts.php');  ?>
                    <?php include('../php/footer.php'); ?>
                    <?php include('../php/morphingSearch.php'); ?>
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
