<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST'].""; $imgNum = mt_rand(1,10);/*$ROOT is the base URL & should on top of every PAGE */?> 
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
                                    <img src="../images/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                 
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Neu-Ulm University of <strong>  Applied Sciences, Germany</strong></span></h4>
									<p align=justify>The Neu-Ulm University of Applied Sciences (HNU) is an international business school which welcomes students from all over Germany and the world. Our aim is to educate students who are keen on results and to prepare them throughly for their future roles in management. Our bachelor and master's programmes are strongly grounded in the practical application of academic theory.</p>

									<p><b style="color: #cd6e08;font-weight: bold;">Courses taught in English</b><br>

Lectures at the HNU are either given in German or, in many cases, in English only.<br>
In 'Business studies' (B.A.) four entire focus fields are held in English:<br>
International business administration<br>
Transport, environment and international logistics<br>
International management and leadership<br>
										Business information systems</p>

									<p>Each focus field includes several seminars.</p>

									<p>The 'Information management and corporate communications' B.A. programme and the newely introduced 'Information management automotive' B.Sc. programme both include two semesters held exclusively in English.</p>

									<p>At the Master's level, the focus area 'International brand and sales management' is taught in English.</p>

									<p>The range of courses in English is complemented by a number of optional courses, e.g.'Corporate finance','Cross-cultural aspects of business' and 'Managerial economics'.</p>

									<p><b style="color: #cd6e08;font-weight: bold;">Studying at the HNU</b></p>

									<p><b style="color: #cd6e08;font-weight: bold;">Academic departments</b><br>
The Neu-Ulm University of Applied Sciences consists of the following academic departments:<br>
Department of Business and Economics<br>
Department of Information management<br>
Department of Healthcare management<br>
										Department of Professional and postgraduate studies</p>

									<p>Undergraduate programmes usually take seven semester to complete, including one internship and the final thesis, whereas the master's degree requires four semesters of study. The part-time professional degree programmes take four to six semesters, depending on the programme.</p>

									<p><b style="color: #cd6e08;font-weight: bold;">HNU academic calendar</b><br>
The academic year at HNU consists of a summer and a winter semester.<br>
Teaching period summer semester: mid-March to mid-July<br>
Teaching period winter semester: October to mid-February<br>
										For our international students, the International office holds welcoming weeks prior to the beginning of the teaching period.</p>

									<p><b style="color: #cd6e08;font-weight: bold;">Degree programmes</b><br>
Bachelor majors<br>
Business studies(B.A.)<br>
Industrial engineering | Production (B.Sc.)*<br>
Industrial engineering | Logistics (B.Eng.)*<br>
Information management and corporate communications (B.A.)<br>
Information management automotive(B.Sc.)<br>
Business information systems(B.Sc.)*<br>
Information management in healthcare(B.Sc.)*<br>
Healthcare management (B.A.)<br>
										Management for health and care professional (B.A.) (part time)</p>

									<p><b style="color: #cd6e08;font-weight: bold;">Master majors</b><br>
Master of advanced management (M.Sc.)<br>
Business studies for engineers and other non-business professionals (MBA) (part-time)<br>
Strategic information management (MBA) (part-time)<br>
Business studies for doctors (MBA) (part-time)<br>
										Business studies for doctors in Africa (MBA) (part-time)</p>
									
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp; <strong>Collaboration</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="collaborations.php"> Introduction</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="appalachian_state_university.php">Appalachian State University , NC, USA</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="fachhochschule_dortmund_university.php">Fachhochschule Dortmund - University, Germany</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="FHDW_fachhochschule_der_wirtschaft.php">FHDW Fachhochschule der Wirtschaft, Germany </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="em_normandie_normandy_business_school.php"> E M Normandie - Normandy Business School, Caen, France</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="neu_ulm_university.php" style="color: #2980b9;font-weight: bold;">Neu-Ulm University of Applied Sciences, Germany</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="pass_world_consortium.php">Pass-World Consortium, France</a></p>
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
