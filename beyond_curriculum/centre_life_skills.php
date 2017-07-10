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
                                    <img src="images/Life-Skills.JPG" class="img-responsive" style="margin-bottom:20px;" />

                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Centre for Life Skills <strong> Education (CLSE) </strong></span></h4>
									
									<p align=justify>Centre for Life Skills Education (CLSE) has been initiated as an offspring on the recommendations of World Health organization (WHO) which has identified 10 core skills as life skills.</p>

									<p><b style="color: #cd6e08;font-weight: bold;">The center functions with the following specific objectives:</b><br>
										1. To provide training for all our under graduate and post graduate students of Kristu Jayanti College on Life Skill Education so that they are able to face the challenges and adapt to day to day demands of their everyday lives.</p>

									<p>2. To offer the benefit of Life Skill Education to our neighborhood communities & institutes especially to government school children and youth so that their quality of life is enhanced and self-esteem improved.</p>

									<p>3. To act as a nodal center in the State of Karnataka in implementing various central and state government policies and programs related to Life Skill Education.</p>

									<p>4. To facilitate capacity building training on Life Skills and Training of Trainers (ToT) on Life Skills.</p>

									<p>5. To carry out research & publications in the area of Life Skill Education and to identify the newer areas for application of Life Skills.</p>

									<p><b style="color: #cd6e08;font-weight: bold;">What are Life Skills?</b><br>
										Life Skills are the abilities for adaptive and positive behavior that enables individuals to deal effectively with the demands and challenges of everyday life across cultures (WHO, 1997).</p>

<p><b style="color: #cd6e08;font-weight: bold;">The following are the 10 core life skills recommended by World Health Organization:</b><br>
1. Self-Awareness<br>
2. Empathy<br>
3. Decision Making<br>
4. Problem Solving<br>
5. Creative Thinking<br>
6. Critical Thinking<br>
7. Communication<br>
8. Interpersonal Relationship<br>
9. Coping With Emotions<br>
										10. Coping With Stress</p>

									<p><b style="color: #cd6e08;font-weight: bold;">Ever since its inception, the center has been actively conducting several trainings on Life Skills in the following areas:</b><br>
<b>*</b> Life Skills Education for Teachers for Psycho-social understanding of Gen Y Learners.<br>
<b>*</b> Life Skills for Students for Gender Sensitivity, Self-branding and Enhancing Employability Skills.<br>
<b>*</b> Life Skills for Corporate Employees for Stress Management and Psycho-social Well-being.<br>
<b>*</b> Capacity Building Workshop on Life Skills for Development Professionals.<br>
<b>*</b> Life Skills for Health Care Professionals for sustaining effective Inter Personal Relationship.<br>
				<b>*</b>						Short term courses on Life Skills on request.</p>

<p>For more information, please contact:<br>
	<b>Dr. A. Jonas Richard</b><br>
Director<br>
Centre for Life Skills Education (CLSE)<br>
Kristu Jayanti College, Bangalore<br>
+91-80-28465611, +91-9448532577<br>
	jonasrichard@kristujayanti.com 		</p>			
									
									
								</div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp; Beyond <strong>Curriculum</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="ccpd.php"> Centre for Continuing Professional Development (CCPD)</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="jayantian_extension_services.php"> Jayantian Extension Services</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="entrepreneurship_development.php"> Entrepreneurship Development </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="language_learning_centre.php"> Language learning centre</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="nss.php">  National Service Scheme </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="ncc.php"> National Cadet Corps</a></p>
                                    </section>


                                    <section class="link-arrow">
                                <p><a class="a-link-arrow" href="centre_life_skills.php" style="color: #2980b9;font-weight: bold;"> Centre for Life Skills Education (CLSE)</a></p>
                                    </section>


                                   



                                </div>
                                <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                        </h4>

                                        <?php include ('../php/sideMenu.php'); ?>
                                    </div>



                                   <div class="content-right wow fadeIn" style="padding:10px;padding-bottom: 0px;">
                                    <div class="fb-page" data-href="https://www.facebook.com/KristuJayantiCollege" data-height="425" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                                        <div class="fb-xfbml-parse-ignore">
                                            <blockquote cite="https://www.facebook.com/KristuJayantiCollege"><a href="https://www.facebook.com/KristuJayantiCollege">Facebook</a></blockquote>
                                        </div>
                                    </div>
                                </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <!--						                                </div>-->
                    <?php include ('../php/alerts.php');  ?>
                    <?php include('../php/footer.php'); ?>
                    
                </div>



            </div>
            <!--/st-content-inner-->
        </div>
        <!-- this is the wrapper for the content-->
    </div>
    <!--st-pusher-->
    </div>
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
