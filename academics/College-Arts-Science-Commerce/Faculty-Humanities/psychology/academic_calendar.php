<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST'].""; $imgNum = mt_rand(1,9);/*$ROOT is the base URL & should on top of every PAGE */?> 
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
									 <img src="images/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />

                                <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                    <span>&nbsp; Academic <strong> Calendar </strong></span></h4>
                                     
                                     <p><b>Academic Calendar 2017-18</b></p>
                                    <table border="1" class="table table-bordered table-hover">
  <tr>
    <td width="139" valign="top"><p><strong>Date </strong></p></td>
    <td width="138" valign="top"><p><strong>Class</strong></p></td>
    <td width="186" valign="top"><p><strong>Activity</strong></p></td>
    <td width="204" valign="top"><p><strong>Subject/Programme</strong></p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>June  12 - 17     2017</p></td>
    <td width="138" valign="top"><p>UG</p></td>
    <td width="186" valign="top"><p>Training</p></td>
    <td width="204" valign="top"><p>life    skill Development</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>June    30  2017</p></td>
    <td width="138" valign="top"><p>UG</p></td>
    <td width="186" valign="top"><p>Propium    Series Seminar</p></td>
    <td width="204" valign="top"><p>Psychology    Today</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>July    3 2017</p></td>
    <td width="138" valign="top"><p>III    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Positive    Psychology</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>July    10 2017</p></td>
    <td width="138" valign="top"><p>III    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Social    Psychology</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>July    17 2017</p></td>
    <td width="138" valign="top"><p>III    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Specialization    1</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>July    20 2017</p></td>
    <td width="138" valign="top"><p>V    Sem BA Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Behaviour    Dysfunction</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>July    25 2017</p></td>
    <td width="138" valign="top"><p>PG</p></td>
    <td width="186" valign="top"><p>Phase    I: Title and Method Finalization</p></td>
    <td width="204" valign="top"><p>Research    Proposal </p></td>
  </tr>
  <tr>
    <td width="139" rowspan="3"><p>July    29 2017</p></td>
    <td width="138" valign="top"><p>V    Sem BA Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Industrial    and OB</p></td>
  </tr>
  <tr>
    <td width="138" valign="top"><p>I    Sem BA Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Basic    Psychological Process </p></td>
  </tr>
  <tr>
    <td width="138" valign="top"><p>V    Sem BA Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Developmental    Psy</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>July    31 2017</p></td>
    <td width="138" valign="top"><p>III    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Specialization    2</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>August    3-4 2017</p></td>
    <td width="138" valign="top"><p>III    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Experiential    learning</p></td>
    <td width="204" valign="top"><p>Educational    trip</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>August    7 2017</p></td>
    <td width="138" valign="top"><p>I    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Cognitive    Psychology</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>August 10 2017 </p></td>
    <td width="138" valign="top"><p>UG    &amp; PG</p></td>
    <td width="186" valign="top"><p>Intra    College Psychology Fest</p></td>
    <td width="204" valign="top"><p>COGNIZANCE</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>August 14 2017 </p></td>
    <td width="138" valign="top"><p>I    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Bio    Psychology</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>August 21 2017 </p></td>
    <td width="138" valign="top"><p>I    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Research    Methods</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>August 28 2017 </p></td>
    <td width="138" valign="top"><p>PG</p></td>
    <td width="186" valign="top"><p>Propium    Series Workshop</p></td>
    <td width="204" valign="top"><p>Counselling    Skills</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>August 30 2017 </p></td>
    <td width="138" valign="top"><p>PG</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Indian    Psychology</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>September    20 2017</p></td>
    <td width="138" valign="top"><p>UG    &amp; PG</p></td>
    <td width="186" valign="top"><p>Inter    Collegiate Psychology Fest</p></td>
    <td width="204" valign="top"><p>STIMULI</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>November    3 2017</p></td>
    <td width="138" valign="top"><p>I    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Industrial    Vist</p></td>
    <td width="204" valign="top"><p>VYASA</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>November    7 2017</p></td>
    <td width="138" valign="top"><p>IV    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Internship    Begins </p></td>
    <td width="204" valign="top"><p>Hands    on Training</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>November    20 2017</p></td>
    <td width="138" valign="top"><p>UG</p></td>
    <td width="186" valign="top"><p>commencement    of even sem</p></td>
    <td width="204" valign="top"><p>Classes    begin</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>December    5 2017</p></td>
    <td width="138" valign="top"><p>VI    Sem BA Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Behaviour    Dysfunction</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>December    6 2017</p></td>
    <td width="138" valign="top"><p>IV    Sem BA Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Developmental    Psychology</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>December    7 2017</p></td>
    <td width="138" valign="top"><p>IV    Sem BA Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Basic    Psychological process </p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>December    12 2017</p></td>
    <td width="138" valign="top"><p>II    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>commencement    of even sem</p></td>
    <td width="204" valign="top"><p>Classes    begin</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>December    13 2017</p></td>
    <td width="138" valign="top"><p>IV    Sem BA Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Industrial    &amp; OB </p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>December    30 2017</p></td>
    <td width="138" valign="top"><p>IV    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Internship    Ends </p></td>
    <td width="204" valign="top"><p>Hands    on Training</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>January    3 2018</p></td>
    <td width="138" valign="top"><p>II    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Theories    of Personality Learning and Intelligence</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p><strong>Date </strong></p></td>
    <td width="138" valign="top"><p><strong>Class</strong></p></td>
    <td width="186" valign="top"><p><strong>Activity</strong></p></td>
    <td width="204" valign="top"><p><strong>Subject</strong></p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>January    10 2018</p></td>
    <td width="138" valign="top"><p>II    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Statistics    in Psychology</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>January    12 2018</p></td>
    <td width="138" valign="top"><p>PG</p></td>
    <td width="186" valign="top"><p>Propium    Series Workshop</p></td>
    <td width="204" valign="top"><p>Workshop</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>January    17 2018</p></td>
    <td width="138" valign="top"><p>II    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Health    Psychology</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>January    20 2018</p></td>
    <td width="138" valign="top"><p>IV    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Alternative    Psychotherapuitics</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>January    22 2018</p></td>
    <td width="138" valign="top"><p>PG</p></td>
    <td width="186" valign="top"><p>Phase    II: Introduction and ROL Final Review and Remark</p></td>
    <td width="204" valign="top"><p>Research    Proposal </p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>January    24 2018</p></td>
    <td width="138" valign="top"><p>II    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Life    span Development</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>January    30 2018</p></td>
    <td width="138" valign="top"><p>UG    &amp; PG</p></td>
    <td width="186" valign="top"><p>National    Conference </p></td>
    <td width="204" valign="top"><p>INSYGHT</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>Febrauary    7 2018</p></td>
    <td width="138" valign="top"><p>IV    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Specalaization    1</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>Febrauary    14 2018</p></td>
    <td width="138" valign="top"><p>PG</p></td>
    <td width="186" valign="top"><p>Phase    III: Analysis and Discussion Review and Remark</p></td>
    <td width="204" valign="top"><p>Research    Proposal </p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>Febrauary    21 2018</p></td>
    <td width="138" valign="top"><p>IV    Sem M.Sc. Psy</p></td>
    <td width="186" valign="top"><p>Assignment    submission</p></td>
    <td width="204" valign="top"><p>Specalaization    II</p></td>
  </tr>
  <tr>
    <td width="139" valign="top"><p>Febrauary    23 2018</p></td>
    <td width="138" valign="top"><p>PG</p></td>
    <td width="186" valign="top"><p>Propium    Series</p></td>
    <td width="204" valign="top"><p>Panel    Discussions</p></td>
  </tr>
</table>
                              


								</div></div>
                            <div class="col-lg-3" style="margin-top:1em;">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Programs <strong> Offered </strong></span>
                                    </h4>
                                   <section class="link-arrow">
                                            <p><a class="a-link-arrow" href="../journalism/ba_jpeng.php">BA JPEng.</a></p>
                                        </section>
										<section class="link-arrow">
                                            <p><a class="a-link-arrow" href="../journalism/ba_jpcs.php">BA JPCS</a></p>
                                        </section>
                                        <section class="link-arrow">
                                            <p><a class="a-link-arrow" href="msc_program.php">M.Sc Psychology</a></p>
                                        </section>  </div>
                                
                                 <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span> <strong>Activities</strong></span>
                                        </h4>
                                        
                                        
                                       <section class="link-arrow">
                                                <p><a class="a-link-arrow" href="vision-mission-goal.php">Vision, Mission and Goal </a></p>
                                            </section>


                                            <section class="link-arrow">
                                                <p><a class="a-link-arrow" href="activities.php">Activities</a></p>
                                            </section>


                                            <section class="link-arrow">
                                                <p><a class="a-link-arrow" href="faculty.php">Faculty Profile</a></p>
                                            </section>


                                            <section class="link-arrow">
                                                <p><a class="a-link-arrow" href="best_practices.php">Best Practices</a></p>
                                            </section>
                                            
                                             <section class="link-arrow">
                                                <p><a class="a-link-arrow" href="achievements.php">Achievements</a></p>
                                            </section>
                                            
                                            <section class="link-arrow">
                                                <p><a class="a-link-arrow" href="research-activities.php">Research activities</a></p>
                                            </section>
                                            
                                             <section class="link-arrow">
                                                <p><a class="a-link-arrow" href="upcoming-events.php">Upcoming Events</a></p>
                                            </section>
                                            
                                            <section class="link-arrow">
                                                <p><a class="a-link-arrow" href="curriculum.php">Curriculum for UG and PG programs</a></p>
                                            </section>


                                            <section class="link-arrow">
                                                <p><a class="a-link-arrow" href="career_opportunities.php">Career Opportunities</a></p>
                                            </section>

                                            <section class="link-arrow">
                                                <p><a class="a-link-arrow" href="psychology_lab.php">Psychology Lab</a></p>
                                            </section>

                                            <section class="link-arrow">
                                                <p><a class="a-link-arrow" href="academic_calendar.php">Academic Calendar</a></p>
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
    <!--    <script src="js/res-navtabs.js"></script>-->
    <script src="../../../../js/scripts.js"></script>
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
