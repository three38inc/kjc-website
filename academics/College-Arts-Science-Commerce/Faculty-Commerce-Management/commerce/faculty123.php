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
    <link rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/icon.png">
    <!-- Bootstrap css -->
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--additional css-->
    <link rel="stylesheet" type="text/css" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/component.css" />
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/font-awesome.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/roundIcons.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/hoverEffect.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/morphing.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/navTabs.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/animate.css">
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/fakeLoader.css">
    <!--		<link rel="stylesheet" href="../css/deptCustomLink.css">-->

    <!--custom css-->
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/custom.css" rel="stylesheet">
    		<link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/innerpage.css" rel="stylesheet">
    <!-- javascript -->
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/jquery-1.11.0.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/respond.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/custom.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/fakeLoader.js"></script>

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
								 <img src="images/commerce_banner.jpg" class="img-responsive" style="margin-bottom:20px;" />

                                <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                    <span>&nbsp;Faculty <strong>Profile</strong></span>

                                </h4>
                                <div class="profile-page">
                                    <div id="page">

                                    </div>

                                    <div class="row profile-pagination">
                                        <ul class="pagination pagination-sm">
                                            <li class="active"><a href="#" data-value="page3">1</a></li>
                                            <li><a href="#" data-value="page2">2</a></li>
                                            <li><a href="#" data-value="page3">3</a></li>
                                            <li><a href="#" data-value="page4">4</a></li>
                                            <li><a href="#" data-value="page5">5</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-3" style="margin-top:1em;">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                         <span>&nbsp;Programs  <strong>Offered</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bcom.php">B.Com</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bcom_tourism.php">B.Com Tourism</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bcom_professioal.php">B.Com Professional</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bcom_integrated_bcom_acca.php">B.Com with ACCA</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="mcom.php">M.Com</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="mcom_fa.php">M.Com (Financial Analysis)
                                        </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="mcom_fa_cgma.php">M.Com (FA with CGMA)
                                            </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="ma_economics.php">MA Economics</a></p>
                                    </section>

                                </div>
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Our  <strong>Activities</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce_vision_mission.php"> Vision, Mission &amp; Goals   </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce_fests.php"> Fests </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce_value_added_courses.php"> Value Added Program &amp;  Certificate courses  </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce_bestpractcies.php"> Best Practices</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce_carrer_opportunity.php"> Career Opportunity</a></p>
                                    </section>


                                 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty.php" style="color: #2980b9;font-weight: bold;"> Faculty Profile
                                        </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_calendar.php"> Academic Calendar
                                            </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce_achievements.php"> Achievements </a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce_seminars_conferencesbr_workshops.php"> Seminars Conferences and Workshops </a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="news_letter.php"> News Letter </a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce_other_departmrntal_activities.php"> Other departmental activities </a></p>
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
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/modernizr.custom.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/modernizr.custom.academics.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/spin.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/mySpin.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/swipeview.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/jquery.bootstrap.newsbox.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/classie.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/morphingSearch.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/sidebarEffects.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/transit.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/sly.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/customSly.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/wow.min.js"></script>
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/scripts.js"></script>
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