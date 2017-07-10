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
                                        <img src="images/banner_sciences.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                        
                                        <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                            <span>&nbsp; Faculty Of <strong>Sciences</strong></span>
                                        </h4>

										<p align=justify>The science department was started with the inception of the college in 1999.  The programmes offered under the Deanery of Sciences comprise of multidisciplinary and interdisciplinary courses that facilitate student progression in various fields in sciences. The department that fall under the purview of the faculty of sciences consists are the departments of Computer Science (UG), Department of Computer Science (PG), Department of Life Sciences and the Research Centre in Biotechnology. Academic programs leading to B.Sc., M.Sc., MCA and Ph.D., are offered by the departments.</p>
										<p align=justify>The faculty of sciences aspires to be a premier entity and strives to be recognized for the significance, novelty, and impact of the curriculum and the quality, relevance and currency of the various academic programs offered by the Deanery is unique. Excellence in research and scholarly pursuits, quality teaching, enthusiasm for innovation and discovery, cooperation and collaboration, community engagement, and service, entrepreneurship, career guidance and counseling, placement programmes are some of the major highlights of the Deanery of Science.</p>
										<p align=justify>The curriculum of the various programmes covers the latest updates and technical innovations in the fields of Computer Science, Information Technology, Biotechnology, Microbiology, Biochemistry, Genetics and other allied fields. By providing experienced advisors, state-of-the-art laboratory facilities and a rationalized curriculum the various programmes of the deanery help build confidence in students to take up challenges and excel in their career. In addition, the faculty of sciences strives to promote all round development of students by providing value added programs such as Discussions on current affairs, Skill Development activities, Certificate courses, Add-on courses, Life Skill Education, Training and Placement programs, etc,. </p>



                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;<strong>Departments</strong></span>
                                        </h4>
                                        <section class="link-arrow">
                                            <p><a class="a-link-arrow" href="department-cs-pg/index.php">Department of Computer Science [PG]</a></p>
                                        </section>


                                        <section class="link-arrow">
                                            <p><a class="a-link-arrow" href="department-cs-ug/computer_science.php">Department of Computer Science [UG]</a></p>
                                        </section>


                                        <section class="link-arrow">
                                            <p><a class="a-link-arrow" href="department-lifescience/Lifescintro.php">Department of Life Sciences</a></p>
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
