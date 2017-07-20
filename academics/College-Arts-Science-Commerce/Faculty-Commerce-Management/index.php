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
                                        <img src="images/banner_com_mang.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                       
                                        <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                            <span>&nbsp; Faculty Of <strong>Commerce &amp; Management</strong></span>
                                        </h4>

										<p align=justify>The faculty of commerce and management offers leading academic courses in commerce and management as a core field of study. The Faculty of Commerce & Management (FCM) offers programmes designed to provide students with a sound understanding of the functions of Business and their inter-relationships. All business and economic activities, whether in the private or public sector, utilizes the functions to plan, organize, administer, control, produce, market and distribute goods or services. As corporations grow larger and more complex, as government regulations become more pervasive, and national and international firms compete for markets – the principles and techniques in business become more critical for success.</p>
										<p align=justify>The FCM strives to develop in its students an understanding of nature of modern business, including an awareness of emerging business opportunities and the constraints within those opportunities may be explored. It requires students to apply the analytical skills developed in study of general education to real business situation.</p>
										<p align=justify>At present the FCM offers different commerce and management courses such as B.Com , B.Com – Professional, B.Com Tourism, B.Com (Integrated with ACCA), BBA, BBA with CIMA, BA HTJ and HEP – Economics and Tourism major  at UG Level. At PG Level FCM offers MBA, PGDM, M.Com, M.Com Financial Analysis (FA),  M.Com FA with CIMA and  MA Economics.  It also offers   one year executive program for industry professionals. </p>




                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;<strong>Departments</strong></span>
                                        </h4>
                                        <section class="link-arrow">
                                            <p><a class="a-link-arrow" href="commerce/commerce.php">Department of Commerce (UG)</a></p>
                                        </section>
										
										<section class="link-arrow">
                                            <p><a class="a-link-arrow" href="commerce-pg/commerce-pg.php">Department of Commerce (PG)</a></p>
                                        </section>


                                        <section class="link-arrow">
                                            <p><a class="a-link-arrow" href="management/management.php">Department of Management</a></p>
                                        </section>
										
										<section class="link-arrow">
                                            <p><a class="a-link-arrow" href="economics/economics.php">Department of Economics</a></p>
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
