<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website"; $imgNum = mt_rand(1,15);/*$ROOT is the base URL & should on top of every PAGE */?> 
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
                                    <span>&nbsp; Academic <strong>  Calendar </strong></span></h4>
                                     
                                     <table border="1" class="table table-bordered table-hover">
  <tr>
    <td><p align="center"><strong>Month</strong></p></td>
    <td><p align="center"><strong>Date</strong></p></td>
    <td><p align="center"><strong>Day</strong></p></td>
    <td><p align="center"><strong>Event</strong></p></td>
  </tr>
  <tr>
    <td rowspan="3"><p><strong>June</strong></p></td>
    <td valign="bottom"><p>20/06/2017</p></td>
    <td valign="bottom"><p>Tuesday</p></td>
    <td valign="bottom"><p>Commencement of III Semester classes</p></td>
  </tr>
  <tr>
    <td valign="bottom"><p>27/06/2017</p></td>
    <td valign="bottom"><p>Tuesday </p></td>
    <td valign="bottom"><p>Orientation Visit to St. John&rsquo;s Hospital, Bangalore </p></td>
  </tr>
  <tr>
    <td valign="bottom"><p>30/06/2016</p></td>
    <td valign="bottom"><p>Friday</p></td>
    <td valign="bottom"><p>Workshop on Self Branding and    Employability Skills </p></td>
  </tr>
  <tr>
    <td rowspan="6"><p><strong>July</strong></p></td>
    <td valign="bottom"><p>01/07/2017</p></td>
    <td valign="bottom"><p>Saturday</p></td>
    <td valign="bottom"><p>Orientation Visit to Schneider Electric,    Bangalore</p></td>
  </tr>
  <tr>
    <td valign="top"><p>04/07/2017</p></td>
    <td valign="top"><p>Tuesday</p></td>
    <td valign="bottom"><p>Orientation Visit to Indian Social Institute(ISI),    Bangalore</p></td>
  </tr>
  <tr>
    <td valign="bottom"><p>13/07/2017</p></td>
    <td valign="bottom"><p>Thursday</p></td>
    <td valign="bottom"><p>CSR Exposure Visit to   Techmahindra, Bangalore</p></td>
  </tr>
  <tr>
    <td valign="bottom"><p>18/07/2017</p></td>
    <td valign="bottom"><p>Tuesday</p></td>
    <td valign="bottom"><p>Commencement of I Semester Classes</p></td>
  </tr>
  <tr>
    <td valign="bottom"><p>19/07/2017 to<br />
      22/07/2017</p></td>
    <td valign="bottom"><p>&nbsp;</p></td>
    <td valign="top"><p>Capacity    Building Training on Life Skills for Social Work Professionals</p></td>
  </tr>
  <tr>
    <td valign="top"><p>20/07/2017</p></td>
    <td valign="top"><p>Thursday</p></td>
    <td valign="bottom"><p>Orientation Visit to FVTRS( Functional Vocational Training and Research Society)</p></td>
  </tr>
  <tr>
    <td><p><strong>August</strong></p></td>
    <td valign="top"><p>22/08/2017</p></td>
    <td valign="top"><p>Tuesday</p></td>
    <td valign="top"><p>Panel    Discussion</p></td>
  </tr>
  <tr>
    <td><p><strong>October</strong></p></td>
    <td valign="top"><p>11/10/2017</p></td>
    <td valign="top"><p>Wednesday</p></td>
    <td valign="top"><p>National Seminar</p></td>
  </tr>
  <tr>
    <td><p><strong>January</strong></p></td>
    <td valign="top"><p>10/01/2018</p></td>
    <td valign="top"><p>Wednesday</p></td>
    <td valign="top"><p>Panel Discussion</p></td>
  </tr>
  <tr>
    <td><p><strong>February</strong></p></td>
    <td valign="bottom"><p>27/02/2018    &amp;<br />
      28/02/2018</p></td>
    <td valign="top"><p>Tuesday &amp; <br />
      Wednesday</p></td>
    <td valign="top"><p>International Conference</p></td>
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
                                        <p><a class="a-link-arrow" href="master_socialwork.php">Masters in Social Work (MSW) </a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="phd_socialwork.php">Ph.D in Social Work</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="certificate_courses.php">Certificate Courses </a></p>
                                    </section>
                                     </div>
								
								<div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span> <strong>Activities</strong></span>
                                        </h4>
                                        
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty.php">Faculty Profile</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="vision_mission_goals.php">Vision, Mission & Goals</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="membership_professional_bodies.php">Membership in Professional Bodies</a></p>
                                    </section>
										
										<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="research_activities.php">Research Activities</a></p>
                                    </section>
										
										<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="achievements.php">Achievements</a></p>
                                    </section>
										
										<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="best_practices.php">Best Practices for Student Engagement</a></p>
                                    </section>
										
										<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="upcoming_seminars_conferences.php">Upcoming Seminars & Conferences</a></p>
                                    </section>
										
										<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_calendar.php" style="color: #2980b9;font-weight: bold;">Academic Calendar</a></p>
                                    </section>
										
										<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="consultancies_offered.php">Consultancies offered </a></p>
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
