<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website"; $imgNum = mt_rand(1,11); /*$ROOT is the base URL & should on top of every PAGE */?> 
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kristu Jayanti College, Bengaluru</title>
    <!--<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />-->
    <meta name="author" content="Three38 inc" />
    <link rel="shortcut icon" href="../../../images/icon.png">
    <!-- Bootstrap css -->
    <link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--additional css-->
    <link rel="stylesheet" type="text/css" href="../../../css/component.css" />
    <link rel="stylesheet" href="../../../css/font-awesome.css">
    <link rel="stylesheet" href="../../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../css/roundIcons.css">
    <link rel="stylesheet" href="../../../css/hoverEffect.css">
    <link rel="stylesheet" href="../../../css/morphing.css">
    <link rel="stylesheet" href="../../../css/navTabs.css">
    <link rel="stylesheet" href="../../../css/animate.css">
    <link rel="stylesheet" href="../../../css/fakeLoader.css">
    <!--        <link rel="stylesheet" href="css/res-navtabs.css">-->
    <!--custom css-->
    <link href="../../../css/custom.css" rel="stylesheet">
    <link href="../../../css/innerpage.css" rel="stylesheet">
    <link href="../css/law.css" rel="stylesheet">
    <!-- javascript -->
    <script src="../../../js/jquery-1.11.0.min.js"></script>
    <script src="../../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../js/respond.js"></script>
    <script src="../../../js/custom.js"></script>
    <script src="../../../js/fakeLoader.js"></script>
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
    <script type="text/javascript">$crisp=[];CRISP_WEBSITE_ID="bfee4615-2d13-4129-a9c2-d7b8095e3d0e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.im/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
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
        <?php include('../../../php/offCanvasMenu.php'); ?>
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
										<span>&nbsp;<font size="5">B.Com LL.B.</font><strong>Course Details</strong></span>
                                    </h4>

                              
                                    <p align="justify">
                                       
                                        The B.Com LL.B.is an integrated dual-degree combination of Bachelor’s degree programmein Commerce with a Bachelor’s degree programme in law. As legal opinion and expertise is currently a demand  in the banking sector this programme will serve the purpose of getting legally trained commerce graduates come into the workforce. The Course is designed in a systematic manner according to the needs of the present era. Each academic year is divided into two semesters. The duration of the course shall be five academic years consisting of 10 semesters.  Medium of Instructions is in English. Students have option to write their exams either in English or Kannada.</p>

									<p align=justify><b style="color: #cd6e08;font-weight: bold;">ATTENDANCE</b><br>
                                        No student shall be considered to have followed a regular course of study unless he/she is certified by the Principal to have attended minimum 75% of the total number of classes conducted in each course at the end of the semester.</p>

									<p align=justify><b style="color: #cd6e08;font-weight: bold;">Library</b><br>
                                        The Library is the heart of the academic institution and plays a very important role in the life of each and every student. The Kristu Jayanti College of Law is having vast collections of law books, Journals, magazines, Central Acts and Rules, etc. At present, the library contains 54,768 books. The Library with facilities as reading room, Wi-Fi, Discussion Room will be kept open from 8.30 am to 7.00 pm on all working days and from 8.30 am to 1.00pm on Saturdays</p>

									<!--<p align=justify><b style="color: #cd6e08;font-weight: bold;">Anti- Ragging Committee</b><br>
                                        Ragging is strictly prohibited in the campus. Inconvenience in any manner to the students, especially the students by counterparts or a senior student is a punishable offence. An Anti-Ragging Committee is functional in the college which addresses issues related to ragging or any form of inconvenience in the campus and off campus. The names and phone numbers of the members of the anti-ragging committee are displayed on the college notice board.</p>-->

									<p><b style="color: #cd6e08;font-weight: bold;">Moot Court Hall</b><br>
                                        A Moot Court helps in simulating the proceedings in a court with the appropriate ambience. The college is having well-furnished Moot Court Hall where all the students of LL.B. programme will be trained to participate in National and International Moot Courts.
                                    </p>


                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Course <strong>B.Com LL.B.</strong></span>
                                    </h4>
                                   


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="structure.php">Course Structure</a></p>
                                    </section>
                                    
                                    
<!--
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="sylabus.php">Sylabus</a></p>
                                    </section>
-->


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="entry.php">Entry Requirements</a></p>
                                    </section>


                                </div>
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Courses <strong>Offered</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="../BA-LLB/index.php">B.A., LL.B.</a></p>
                                    </section>
									
									  <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="../BCom-LLB/index.php">B.Com LL.B.</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="../BBA-LLB/index.php">B.B.A., LL.B.</a></p>
                                    </section>

                                  

                                </div>
                                <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                        </h4>

                                        <?php include ('../../../php/sideMenu.php'); ?>
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
                    <?php include ('../../../php/alerts.php');  ?>
                    <?php include('../../../php/footer.php'); ?>
                    <?php include('../../../php/morphingSearch.php'); ?>
                </div>



            </div>
            <!--/st-content-inner-->
        </div>
        <!-- this is the wrapper for the content-->
    </div>
    <!--st-pusher-->
    </div>
    <!--st-container-->

    <script src="../../../js/cbpFWTabs.js"></script>
    <script>
        (function() {

            [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
                new CBPFWTabs(el);
            });

        })();

    </script>
    <script src="../../../js/modernizr.custom.js"></script>
    <script src="../../../js/spin.min.js"></script>
    <script src="../../../js/mySpin.js"></script>
    <script src="../../../js/swipeview.js"></script>
    <script src="../../../js/jquery.bootstrap.newsbox.min.js"></script>
    <script src="../../../js/classie.js"></script>
    <script src="../../../js/morphingSearch.js"></script>
    <script src="../../../js/sidebarEffects.js"></script>
    <script src="../../../js/transit.js"></script>
    <script src="../../../js/sly.js"></script>
    <script src="../../../js/customSly.js"></script>
    <script src="../../../js/wow.min.js"></script>
    <!--    <script src="js/res-navtabs.js"></script>-->
    <script src="../../../js/scripts.js"></script>
    <script src="../js/law.js"></script>
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
