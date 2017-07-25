<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website"; $imgNum = mt_rand(1,18);/*$ROOT is the base URL & should on top of every PAGE */?> 
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
            <?php include ('../../../../php/navbar.php');  ?>
        </div>
    </div>
    <div id="st-container" class="st-container">
        <?php include('../../../../php/offCanvasMenu.php'); ?>
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
                                    <br/>
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp; Academic Programs</span>
                                    </h4>

                                    <p><b style="color: #cd6e08;font-weight: bold;">1)	Management Exhibitions:</b></p>

                                    <p><b style="color: #cd6e08;font-weight: bold;">a)	Banque:</b>  In order to inculcate practical understanding of banking operations and it’s functioning; the Department of Management organizes and conducts an annual banking exhibition by the name of, Banque. This platform is exclusively for final year students as they showcase their talent by the way of models and reports. Concepts such as money laundering and bitcoins are expressed by way of models, and create a better understanding on the same.</p>

                                    <p><b style="color: #cd6e08;font-weight: bold;">b)	Savishkar:</b> Savishkar is an exhibition organized exclusively for the first years by the Department of Management, where students develop prototypes on assigned management topics. This event aims at equipping students with a better understanding of management concepts and presenting the same in creative and innovative methods. Concepts of economics, banking facilities, supply chain management, etc. is expressed by way of models and charts. </p>

                                    <p><b style="color: #cd6e08;font-weight: bold;">c)	Koushala:</b> The services sector in India is dominant contributor to our country’s GDP. It has also attracted significant foreign investment flows, contributed significantly to exports as well as provided large-scale employment. India’s services sector covers a wide variety of activities such as trade, hotel and restaurants, transport, storage and communication, Information Technology, financing, insurance and various other business services. Keeping this in mind, Koushala is an exhibition organized exclusively for the second year students, to incorporate in them a clear understanding of various services and its importance. </p>

                                    <p><b style="color: #cd6e08;font-weight: bold;">2)	Anveshan:</b>  Anveshan is an annual paper presentation competition of the department conducted for the final year students to nurture and promote the spirit of research. The students are divided into groups of two and are encouraged to conduct a research based on their chosen specialization (Finance, marketing, human resource).</p>

                                    <p><b style="color: #cd6e08;font-weight: bold;">3)	Innovatio:</b> Innovatio is yet another co-curricular programme conducted with exclusivity for the final year students of the Department of Management. With the “entrepreneurship buzz” going around in the nation, Innovatio is a platform where students are encouraged to identify an innovative business idea and present a detailed plan covering all aspects of the business. The main purpose of this programme is to develop entrepreneurship ability, and to inculcate the needed confidence and knowledge to start a business. </p>

                                    <p><b style="color: #cd6e08;font-weight: bold;">4)	Industrial Visit:</b> While filling in the vessel of education in a student’s life within the four walls of a classroom, it is also important to kindle the flame of education via practical exposure. Through industrial visits students are introduced to various production and operational techniques in order to update them on the latest developments in the industry. Visits to small, medium, and large scale industries are organized. Industries that were visited in the past include- Sarwottam Ispat, Khaitan Electricals Limited, Agi Glaspac Pvt Ltd, Hartex Rubber Industry ( All of which are located in Hyderabad </p>




                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;<strong>Programs Offered </strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bba.php">BBA Bachelor of Business Administration</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bba_integrated.php">BBA CGMA Integrated</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="pg_diploma.php">One year PG Diploma Programme <font size=2>(Working Executives)</font></a></p>
                                    </section> </div>
                                
                                
                                <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span> <strong>Activities</strong></span>
                                        </h4>
                                        
                                        
                                
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="vision_mission.php">Vision & Mission</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="acadmic_calendar.php">Academic Calender</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_programs.php" style="color: #2980b9;font-weight: bold;">Academic Programs</a></p>
                                    </section> 
                                    
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="fests.php">Fests</a></p>
                                    </section> 
                                    
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty.php">Faculty Profile</a></p>
                                    </section> 
                                    
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="association.php">Association</a></p>
                                    </section> 
                                    
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="achivements.php">Achievements</a></p>
                                    </section> 
                                    
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="best_practices.php">Best Practices</a></p>
                                    </section> 
                                    
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="career_opportunity.php">Career Opportunity</a></p>
                                    </section> 
                                    
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="career_development_courses.php">Certificate and Credit Courses</a></p>
                                    </section> 
                                    
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="curriculm.php">Curriculum</a></p>
                                    </section> 
                                    
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="schedule_examination.php">Schedule of Examination</a></p>
                                    </section> 
                                    
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_projects.php">Academic Projects</a></p>
                                    </section> 
                                    
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="department_magazine.php">Department Magazine</a></p>
                                    </section> 
                                    
                                    
                                    
                                    
                                    </div>
                                
                                
                                
                                 <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                        </h4>

                                        <?php include ('../../../../php/sideMenu.php'); ?>
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

                    						                                </div>
                    <?php include ('../../../../php/alerts.php');  ?>
                    <?php include('../../../../php/footer.php'); ?>
                    <?php include('../../../../php/morphingSearch.php'); ?>
<!--                </div>-->



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

</body>

</html>
