<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."";/*$ROOT is the base URL & should on top of every PAGE */?> 
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
									  <img src="images/banner02.jpg" class="img-responsive" style="margin-bottom:20px;" />

                                <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                    <span>&nbsp; Academic <strong>Training</strong></span></h4>
								
								<p>To achieve academic excellence the following teaching methods have been followed</p>

								<p align=justify><b style="color: #cd6e08;font-weight: bold;">Class Room Teaching</b><br>
									Class room teaching follows traditional lecture method with latest technologies like ICT resources.</p>

								<p align=justify><b style="color: #cd6e08;font-weight: bold;"></b><br>
									Students are asked to complete at least two non-academic projects during vacation along with their regular projects. They should submit the synopsis in the beginning of the project term and every week the review be conducted.</p>

								<p align=justify><b style="color: #cd6e08;font-weight: bold;">Practical Sessions</b><br>
									Wi-Fi enabled labs upgraded with all new software helps the students to do their practicals in all the subjects with the guidance from the dedicated faculty members. List of practical programs given in the syllabus is executed in the lab. The logic and the description are given by the teacher and the program is written and debugged by the students.</p>

								<p align=justify><b style="color: #cd6e08;font-weight: bold;">Student's seminar</b><br>
									Apart from lecture method students are given some sessions to show their knowledge and presentation skills through some seminar. The topics for seminar to be selected either from the syllabus or from the current topics related to the subjects.</p>

								<p align=justify><b style="color: #cd6e08;font-weight: bold;">Assignments</b><br>
									Assignments are given as part of internal assessment. Assignment topics are given from the topics related to the subjects either from syllabus or from current events.</p>



								<p align=justify><b style="color: #cd6e08;font-weight: bold;">Peer group teaching</b><br>
									Peer group teaching is teaching the students by the students. Students are divided into different groups and those who are good in particular software or subjects will lead the group and help the students to excel in their area of interest. </p>

								<p align=justify><b style="color: #cd6e08;font-weight: bold;">Guest Lectures</b><br>
									Some topics which are highly related to industry and very new technology are handled by the experts from industry or the specialist in that particular subject.</p>

								<p><b style="color: #cd6e08;font-weight: bold;">Remedial Classes</b><br>
									For weak students separate remedial classes are conducted.</p>

								<p align=justify><b style="color: #cd6e08;font-weight: bold;">Discussion forum </b><br>
									It is also a method of teaching in which a topic related to the syllabus is asked to discuss by a group of students randomly chosen from the class. The group of students has to discuss all aspects and also should answer the questions and queries raised by the rest of the class. This activity makes the learning a fun and informative.</p>


								</div></div>
                            <div class="col-lg-3" style="margin-top:1em;">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;<strong>Training</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_training.php" style="color: #2980b9;font-weight: bold;">Academic Training</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="professional_training.php">Professional Training</a></p>
                                    </section>
                                   
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="technical_training.php">Technical Training</a></p>
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
                                        <p><a class="a-link-arrow" href="best_practices.php">Best Practices</a></p>
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
