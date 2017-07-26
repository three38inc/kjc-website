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
                <?php include ('../../../php/navbar.php');  ?>
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
                                        <img src="images/faculty_humanities_banner.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                 
                                        <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                            <span>&nbsp; Faculty Of <strong>Humanities</strong></span>
                                        </h4>

                                   
										<p>The Faculty of Humanities is responsible for teaching and research within a broad range of subjects in the Humanities: <b>Social Work, Psychology, Mass Communication, Literature and Languages, History, Culture and Political Science.</b> Furthermore, we aim to develop existing programmes of study with an interdisciplinary focus to understand the cognitive, historical, cultural, artistic, and social aspects of human life.</p>

										<p><b>The Faculty of Humanities strives to:</b><br>
										<p>1. Create conducive academic environment for lifelong learning.</p>
										<p>2.      Develop critical, logical, emotional and analytical skills for the well-being of an individual.</p>
										<p>3.      Develop historical and political consciousness through learning.</p>
										<p>4.      Nurture esthetic and technological skills through the curriculum.</p>
										<p>5.      Social, cultural, psychological and ethical sensitization of an individual through education.</p>
										<p>6.      Refine individuals’ ways of expressions through different communicative modes.</p>
										<p>7.      Maintain and improve excellent academic achievements in the field of teaching and research</p>
										<p>8.      Enrich students with the good values offered through our novel and holistic curricula </p>

                                       

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;<strong>Departments</strong></span>
                                        </h4>
                                        <section class="link-arrow">
                                            <p><a class="a-link-arrow" href="humanities/humanities.php">Department of Humanities</a></p>
                                        </section>


                                        <section class="link-arrow">
                                            <p><a class="a-link-arrow" href="journalism/journalism.php">Department of Journalism</a></p>
                                        </section>


                                        <section class="link-arrow">
                                            <p><a class="a-link-arrow" href="psychology/psychology.php">Department of Psychology</a></p>
                                        </section>
                                        

                                        <section class="link-arrow">
                                            <p><a class="a-link-arrow" href="socialwork/social_work.php">Department of Social Work</a></p>
                                        </section>
										
										<section class="link-arrow">
                                            <p><a class="a-link-arrow" href="english/english.php">Department of English</a></p>
                                        </section>

                                    </div>
                                    <div class="row" style="margin-left:2px; margin-right: 2px;">

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

                        </div>
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
