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
                                        <span>&nbsp; Management Association</span>
                                    </h4>

                                    <p align=justify>Management Association was established in the year 2001 with motto "vision beyond tomorrow". Management Association is a platform for students to come together and learn about various managerial skills, which are essential for successful transition to corporate and excelling in their corporate tasks. </p>

                                    <p align=justify>Management Association will focus on developing managerial skills like communication, problem solving, decision making, inter-personal skills, time management, management of resources, stress management etc. <br>
                                        <b>The major activities initiated under the banner of Management Association are as follows:</b>

                                    <ul><li> <b style="color: #cd6e08;font-weight: bold;">1)	Virtuoso:</b>  Virtuoso is a workshop conducted by the Department of Management, exclusively for the first year students, organized and conducted by the final year students of the department. The students are introduced to the basic concepts of management and management events (Finance, Human Resources, Marketing, and Best Manager), in order to give them a perspective of competitive fests. </li>

                                        <li> <b style="color: #cd6e08;font-weight: bold;">2)	Social Responsibility Week:</b>  CSR is not a new term any longer, companies both small and large practice corporate social responsibility. This could be mainly for the reason that companies exist because of the society, in the sense that companies borrow from Society’s and Nature’s bank of resources, and as a result need to give back to the society in order to encourage and promote development in a sustainable manner. Social Responsibilities Week is initiated to bring about a sense of awareness among students and to sensitize students to the growing concerns of the society. </li>

                                        <li><b style="color: #cd6e08;font-weight: bold;">3)	Meet Your Alumni:</b> Once a student walks out through the gates of an institution, he walks into an adventure, an adventure into the “real world” filled with possibilities, opportunities, ups and downs, success, and failures. Meet Your Alumni is an interactive programme that provides a platform where existing students can connect and interact with the Alumni of our department, who are entrepreneurs or employed in senior designation with corporate. They give back to their alma mater by sharing their rich insights on life after college, experiences, and anecdotes that will pave guidelines to the existing students. They also share about opportunities that are presently available with the corporate and skills required to get employed. </li></ul>
                                    <p> <b style="color: #cd6e08;font-weight: bold;">Alumni who have visited us in the past academic year are:</b></p>

                                    <ul><li>John Mathai, Entrepreneur (2011-14 BBM batch)</li>
                                        <li>Mr. Saravanan G, Team Lead, Herman Miller, Bangalore (2003-07 BBM Batch)</li>
                                        <li>Ms. Deepa Chirayath, Senior Sales Executive, Cadbury (2007-10 BBM Batch)</li></ul>

                                    <p align=justify> <b style="color: #cd6e08;font-weight: bold;">4)	Guest Lectures:</b>  Apart from garnering insights from teachers and the alumni, it is also vitally important for students to have interactions with experts from industry, who can offer their personal experiences, knowledge, insights and cautionary advice for the benefit of the students.</p>
                                    <p> <b style="color: #cd6e08;font-weight: bold;">Guests who have visited us in the past are-</b></p>
                                    <ul><li>Mr. Mahesha Velu., SAP Consultant, Cargill Business Services Pvt. Ltd., Bangalore.</li>
                                        <li>Mr. Nishwanth, Team Leader, Standard Chartered.</li>
                                        <li>Mr. Christopher D’Souza, Lead Strategic Development Private Ltd.</li>
                                        <li>Mr. Amith Ravindra, Trainer, Think & Learn Pvt. Ltd., Bangalore.</li>
                                        <li>Mr. Shreyas B.V., Management Consultant, E & Y, Bangalore.</li></ul>

                                    <p align=justify> <b style="color: #cd6e08;font-weight: bold;">5)	Club Activity:</b> Apart from all these other interactions that the students have, it is also important for the students to interact with themselves by way of a concept called ‘Club Activity’. Students are encouraged to organize and conduct activities related to their curriculum within the dimensions of their class rooms. Through this weekly exercise, students learn the importance of communicating, team work, leadership, etc. by working alongside each other. </p>

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
                                        <p><a class="a-link-arrow" href="academic_programs.php">Academic Programs</a></p>
                                    </section> 
                                    
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="fests.php">Fests</a></p>
                                    </section> 
                                    
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty.php">Faculty Profile</a></p>
                                    </section> 
                                    
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="association.php" style="color: #2980b9;font-weight: bold;">Association</a></p>
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
