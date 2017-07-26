<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."";$imgNum=mt_rand(1,4);/*$ROOT is the base URL & should on top of every PAGE */?> 
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
									 <img src="images/<?php echo $imgNum;?>.jpg" class="img-responsive" style="margin-bottom:20px;" />

                                <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                    <span>&nbsp; Academic <strong> Calendar </strong></span></h4>
								
								<table border="0" class="table table-bordered table-hover">
  <tr>
    <td width="62" valign="top"><p align="center"><strong>Month</strong></p></td>
    <td width="48" valign="top"><p align="center"><strong>Date</strong></p></td>
    <td width="50" valign="top"><p align="center"><strong>Year</strong></p></td>
    <td width="50" valign="top"><p align="center"><strong>Day</strong></p></td>
    <td width="535" valign="top"><p align="center"><strong>Activity</strong></p></td>
  </tr>
  <tr>
    <td width="745" colspan="5" valign="top"><p align="center"><strong>ODD SEMESTER</strong></p></td>
  </tr>
  <tr>
    <td width="62" valign="top"><p align="center"><strong>July</strong></p></td>
    <td width="48" valign="top"><p align="center">06</p></td>
    <td width="50" valign="top"><p align="center">2017</p></td>
    <td width="50" valign="top"><p align="center">Thu</p></td>
    <td width="535" valign="top"><p>Workshop on &ldquo;Networking &amp; Network Security&rdquo; – Dept. of Computer Science (PG)</p></td>
  </tr>
  <tr>
    <td width="62" valign="top"><p align="center"><strong>July</strong></p></td>
    <td width="48" valign="top"><p align="center">07</p></td>
    <td width="50" valign="top"><p align="center">2017</p></td>
    <td width="50" valign="top"><p align="center">Fri</p></td>
    <td width="535" valign="top"><p>Workshop on &ldquo;Networking &amp; Network Security&rdquo; – Dept. of Computer Science (PG)</p></td>
  </tr>
  <tr>
    <td width="62" valign="top"><p align="center"><strong>July</strong></p></td>
    <td width="48" valign="top"><p align="center">13</p></td>
    <td width="50" valign="top"><p align="center">2017</p></td>
    <td width="50" valign="top"><p align="center">Thu</p></td>
    <td width="535" valign="top"><p>FDP on &ldquo;Data Science &amp; Analytics&rdquo; – Dept. of Computer Science (PG)</p></td>
  </tr>
  <tr>
    <td width="62" valign="top"><p align="center"><strong>July</strong></p></td>
    <td width="48" valign="top"><p align="center">14</p></td>
    <td width="50" valign="top"><p align="center">2017</p></td>
    <td width="50" valign="top"><p align="center">Fri</p></td>
    <td width="535" valign="top"><p>FDP on &ldquo;Data Science &amp; Analytics&rdquo; – Dept. of Computer Science (PG)</p></td>
  </tr>
  <tr>
    <td width="62" valign="top"><p align="center"><strong>July</strong></p></td>
    <td width="48" valign="top"><p align="center">28</p></td>
    <td width="50" valign="top"><p align="center">2017</p></td>
    <td width="50" valign="top"><p align="center">Fri</p></td>
    <td width="535" valign="top"><p>Rural Exposure Programme – Dept. of Computer Science (PG)</p></td>
  </tr>
  <tr>
    <td width="62" valign="top"><p align="center"><strong>July</strong></p></td>
    <td width="48" valign="top"><p align="center">29</p></td>
    <td width="50" valign="top"><p align="center">2017</p></td>
    <td width="50" valign="top"><p align="center">Sat</p></td>
    <td width="535" valign="top"><p>Rural Exposure Programme – Dept. of Computer Science (PG)</p></td>
  </tr>
  <tr>
    <td width="62" valign="top"><p align="center"><strong>Aug</strong></p></td>
    <td width="48" valign="top"><p align="center">31</p></td>
    <td width="50" valign="top"><p align="center">2017</p></td>
    <td width="50" valign="top"><p align="center">Thu</p></td>
    <td width="535" valign="top"><p>One Day National Level Students Symposium – Dept. of Computer Science (PG)</p></td>
  </tr>
  <tr>
    <td width="62" valign="top"><p align="center"><strong>Sep</strong></p></td>
    <td width="48" valign="top"><p align="center">27</p></td>
    <td width="50" valign="top"><p align="center">2017</p></td>
    <td width="50" valign="top"><p align="center">Wed</p></td>
    <td width="535" valign="top"><p>Intra-collegiate Fest – Manoeuvre – Dept. of Computer Science (PG)</p></td>
  </tr>
  <tr>
    <td width="745" colspan="5" valign="top"><p align="center"><strong>EVEN SEMESTER</strong></p></td>
  </tr>
  <tr>
    <td width="62" valign="top"><p align="center"><strong>Dec</strong></p></td>
    <td width="48" valign="top"><p align="center">15</p></td>
    <td width="50" valign="top"><p align="center">2017</p></td>
    <td width="50" valign="top"><p align="center">Fri</p></td>
    <td width="535" valign="top"><p>National Workshop on &ldquo;Roof Computing&rdquo; – Dept. of Computer Science (PG)</p></td>
  </tr>
  <tr>
    <td width="62" valign="top"><p align="center"><strong>Dec</strong></p></td>
    <td width="48" valign="top"><p align="center">16</p></td>
    <td width="50" valign="top"><p align="center">2017</p></td>
    <td width="50" valign="top"><p align="center">Sat</p></td>
    <td width="535" valign="top"><p>National Workshop on &ldquo;Roof Computing&rdquo; – Dept. of Computer Science (PG)</p></td>
  </tr>
  <tr>
    <td width="62" valign="top"><p align="center"><strong>Feb</strong></p></td>
    <td width="48" valign="top"><p align="center">1</p></td>
    <td width="50" valign="top"><p align="center">2018</p></td>
    <td width="50" valign="top"><p align="center">Thu</p></td>
    <td width="535" valign="top"><p>International Conference ICCTAC &rsquo;18 – Dept. of Computer Science (PG)</p></td>
  </tr>
  <tr>
    <td width="62" valign="top"><p align="center"><strong>Feb</strong></p></td>
    <td width="48" valign="top"><p align="center">2</p></td>
    <td width="50" valign="top"><p align="center">2018</p></td>
    <td width="50" valign="top"><p align="center">Fri</p></td>
    <td width="535" valign="top"><p>International Conference ICCTAC &rsquo;18 – Dept. of Computer Science (PG)</p></td>
  </tr>
  <tr>
    <td width="62" valign="top"><p align="center"><strong>Mar</strong></p></td>
    <td width="48" valign="top"><p align="center">1</p></td>
    <td width="50" valign="top"><p align="center">2018</p></td>
    <td width="50" valign="top"><p align="center">Thu</p></td>
    <td width="535" valign="top"><p>Intercollegiate Fest – Shells 2K18 – Dept. of Computer Science (PG)</p></td>
  </tr>
  <tr>
    <td width="62" valign="top"><p align="center"><strong>Mar</strong></p></td>
    <td width="48" valign="top"><p align="center">2</p></td>
    <td width="50" valign="top"><p align="center">2018</p></td>
    <td width="50" valign="top"><p align="center">Fri</p></td>
    <td width="535" valign="top"><p>Intercollegiate Fest – Shells 2K18 – Dept. of Computer Science (PG)</p></td>
  </tr>
</table>


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
                                        <p><a class="a-link-arrow" href="best_practices.php">Best Practices</a></p>
                                    </section>
										
										 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty.php">Faculty Profile</a></p>
                                    </section>
										
										 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_calendar.php" style="color: #2980b9;font-weight: bold;">Academic Calendar</a></p>
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
