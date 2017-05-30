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
    <link rel="shortcut icon" href="../../images/icon.png">
    <!-- Bootstrap css -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--additional css-->
    <link rel="stylesheet" type="text/css" href="../../css/component.css" />
    <link rel="stylesheet" href="../../css/font-awesome.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/roundIcons.css">
    <link rel="stylesheet" href="../../css/hoverEffect.css">
    <link rel="stylesheet" href="../../css/morphing.css">
    <link rel="stylesheet" href="../../css/navTabs.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/fakeLoader.css">
    <link href="../../css/owl.carousel.min.css" rel="stylesheet" />
    <!--        <link rel="stylesheet" href="css/res-navtabs.css">-->
    <!--custom css-->
    <link href="../../css/custom.css" rel="stylesheet">
    <link href="../../css/innerpage.css" rel="stylesheet">
    <link href="css/manSchool.css" rel="stylesheet">
    <!-- javascript -->
    <script src="../../js/jquery-1.11.0.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../js/respond.js"></script>
    <script src="../../js/custom.js"></script>
    <script src="../../js/fakeLoader.js"></script>

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
            <?php include ('php/navbar.php');  ?>
        </div>
    </div>
    <div id="st-container" class="st-container">
        <?php include('../../php/offCanvasMenu.php'); ?>
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
									<img src="images/banner_training.jpg" class="img-responsive" style="margin-bottom:20px;" />

                                <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                    <span>&nbsp; Competency <strong> Matrix System</strong></span></h4>
								
								<p align=justify>This is a tool used by the department for measuring the competency of the student from the beginning of the course till the end. The students are initially given a Base Rating which is evaluated based on their performance in the beginning of the course. For this purpose the department conducts a series of tests like the Online IQ and EQ test, Interviews and evaluation of the Presentations to assess the students’ initial competence. Then there is an addition of points with regard to any adherence to certain criteria like assignments, reports, feedbacks, attendance etc. There is also negative marking in case of any student not following the instructions like not following the time schedule, late coming to college etc. The student is expected to rise up to a certain level of competency in order to keep up with the standards fixed by the department. If the student is found not reaching the competency levels prescribed they are forwarded to their Mentors for further counselling with reference to their improvement.</p>
								</div></div>
                            <div class="col-lg-3" style="margin-top:1em;">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp; <strong>Training</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bridge_courses.php">Bridge Courses</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="current_business_awareness.php"> Current Business Awareness</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="industrial_exposure.php">Industrial Exposure</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="executive_visits.php">Executive Visits</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="inter_intra_college_competitions.php">Inter and Intra college Competitions</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="blitzberg.php">Blitzberg</a></p>
                                    </section>
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="soft_skill_training.php">Soft Skill Training</a></p>
                                    </section>
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="competency_matrix_system.php">Competency Matrix System</a></p>
                                    </section>
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="attitudinal_workshop.php">Attitudinal Workshop</a></p>
                                    </section>
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="mentorship_system.php">Mentorship System</a></p>
                                    </section>
									<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="out_bound_training_programme.php">Out bound training programme</a></p>
                                    </section>
                                   </div>
								
								<div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>Department <strong>Special</strong></span>
                                        </h4>
                                        
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="achievements.php">Achievements</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="management_fests.php">Management Fests</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="best_practices.php">Best Practices</a></p>
                                    </section>
										
										 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty.php">Faculty Profile</a></p>
                                    </section>
										
										 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_projects.php">Academic Projects</a></p>
                                    </section>
									</div>
									
<div class="content-right new-content-right wow fadeIn" style="margin-left:2px; margin-right: 2px;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                    </h4>
                                    <?php include ('../../php/sideMenu.php'); ?>
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

                    <?php include ('../../php/alerts.php');  ?>
                    <?php include('../../php/footer.php'); ?>
                    <?php include('../../php/morphingSearch.php'); ?>
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
      <script src="../../js/modernizr.custom.js"></script>
    <script src="../../js/spin.min.js"></script>
    <script src="../../js/mySpin.js"></script>
    <script src="../../js/swipeview.js"></script>
    <script src="../../js/jquery.bootstrap.newsbox.min.js"></script>
    <script src="../../js/classie.js"></script>
    <script src="../../js/morphingSearch.js"></script>
    <script src="../../js/sidebarEffects.js"></script>
    <script src="../../js/transit.js"></script>
    <script src="../../js/sly.js"></script>
    <script src="../../js/customSly.js"></script>
    <script src="../../js/wow.min.js"></script>
    <!--    <script src="js/res-navtabs.js"></script>-->
    <script src="../../js/scripts.js"></script>
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
