<!DOCTYPE html>
<?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website";/*$ROOT is the base URL & should on top of every PAGE */?>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kristu Jayanti College, Bengaluru</title>
    <!--<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />-->
    <meta name="author" content="Three38 inc" />
    <link rel="shortcut icon" href="../../images/icon.png">
    <!-- Bootstrap css -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--additional css-->
    <link rel="stylesheet" type="text/css" href="../../css/component.css" />
    <link rel="stylesheet" href="../../css/font-awesome.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/roundIcons.css">
    <link rel="stylesheet" href="../../css/hoverEffect.css">
    <link rel="stylesheet" href="../../css/morphing.css">
    <link rel="stylesheet" href="../../css/navTabs.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/fakeLoader.css">
    <link href="../../css/owl.carousel.min.css" rel="stylesheet" />
    <!--        <link rel="stylesheet" href="css/res-navtabs.css">-->
    <!--custom css-->
    <link href="../../css/custom.css" rel="stylesheet">
    <link href="../../css/innerpage.css" rel="stylesheet">
    <link href="css/manSchool.css" rel="stylesheet">
    <!-- javascript -->
    <script src="../../js/jquery-1.11.0.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../js/respond.js"></script>
    <script src="../../js/custom.js"></script>
    <script src="../../js/fakeLoader.js"></script>
    <style>
        

        
        .card-img img {
            width: 80%;
            padding-bottom: 15px;
        }
        
        .card-img2 img {
            width: 80%;
            height: auto;
            margin: 50px 0;
        }
        
        .card-mba {
            background: #fff;
            padding: 10px;
            text-align: center;
            padding-top: 50px;
            overflow: hidden;
            min-height: 583px;
            box-shadow: 0 1px 2px #ccc;
        }
        .card-mba:hover{
            box-shadow: 0px 4px 5px 1px #ccc;
            cursor: pointer
        }
        .cardBg {
            background-color: #34495e;
            color: #fff;
        }
        
        .card-block {
            width: 80%;
            margin: 0 auto;
        }
        
        .card-block p {
            text-align: center;
        }
        
        .card-subtitle {
            font-size: 14px;
            margin-top: 0px;
        }
        
        .card-title {
            margin-bottom: 0;
            font-size: 1.4em;
            font-weight: bold;
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
            <?php include ('php/navbar.php');  ?>
        </div>
    </div>
    <div id="st-container" class="st-container">
        <?php //include('../../php/offCanvasMenu.php'); ?>
        <!-- content push wrapper -->
        <div class="st-pusher">
            <div class="st-content">
                <!-- this is the wrapper for the content -->
                <div class="st-content-inner">

                    <div class="row" style="height: 110px;"></div>
                    <div class="row">
                        <div class="col-lg-12" style="position: relative;">
                            <div id="lawCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 0;">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/img1.jpg" class="img-responsive" />
                                    </div>
                                    <div class="item">
                                        <img src="images/img2.jpg" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 hidden-xs hidden-sm floatDiv">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-10">
                                    <?php include "php/deanary.php"; ?>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
                                <?php include "php/deanary.php"; ?>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 card-mba cardBg">
                                <a href="experiential-learning.php" style="text-decoration:none;color:#FFF;">
                                <div class="card-img2">
                                    <img src="images/mba/father-600x600.jpg" class="card-img-top">
                                </div>
                                <div class="card-block">
                                    <h4 class="card-title">Experiential Learning</h4>
                                    <h5 class="card-subtitle">Building critical skills</h5>
                                    <p class="card-text">Experiential Learning is focused on building critical skills through an outbound leadership training programme......</p>
                                    <div class="card-btn"><a href="experiential-learning.php" class="btn btn-primary" style="background: #fff;
    border-color: #fff;
    color: #2c3e50;
    font-weight: bold;
    padding: 3px 15px;">MORE</a></div>
                                </div>
                                    </a>
                            </div>
                            <div class="col-lg-3 card-mba">
                                <a href="learning-management-thro-theatre.php" style="text-decoration:none;color:#000;">
                                <div class="card-img"><img src="images/mba/edward-600x832.jpg" class="card-img-top"></div>
                                <div class="card-block">
                                    <h4 class="card-title">Learning Management Thro’ Theatre</h4>
                                    <h5 class="card-subtitle">Collaborative form of fine art</h5>
                                    <p class="card-text">Theatre uses live performers, typically actors or actresses, to present the experience of a real or imagined .....
                                    </p>
                                    <div class="card-btn"><a href="https://mobirise.com" class="btn btn-primary" style="padding: 3px 15px;">MORE</a></div>
                                </div>
                                </a>
                            </div>
                            <div class="col-lg-3 card-mba cardBg">
                                <a href="interactive-group-learning.php" style="text-decoration:none;color:#FFF;">
                                <div class="card-img2">
                                    <img src="images/mba/father-600x600.jpg" class="card-img-top">
                                </div>
                                <div class="card-block">
                                    <h4 class="card-title">Group Learning</h4>
                                    <h5 class="card-subtitle">intellectually engaged community</h5>
                                    <p class="card-text">Kristu Jayanti School of Management offers a platform for the student community to learn as a group in an interactive environment .....</p>
                                    <div class="card-btn"><a href="https://mobirise.com" class="btn btn-primary" style="background: #fff;
    border-color: #fff;
    color: #2c3e50;
    font-weight: bold;
    padding: 3px 15px;">MORE</a></div>
                                </div>
                                </a>
                            </div>
                            <div class="col-lg-3 card-mba">
                                <a href="employability-enhancement-programmes.php" style="text-decoration:none;color:#000;">
                                <div class="card-img"><img src="images/mba/edward-600x832.jpg" class="card-img-top"></div>
                                <div class="card-block">
                                    <h4 class="card-title">Employability Enhancements</h4>
                                    <h5 class="card-subtitle">Impacts The relevant areas</h5>
                                    <p class="card-text">Holistic development of the students also includes enhancing their Employability .....</p>
                                    <div class="card-btn"><a href="https://mobirise.com" class="btn btn-primary" style="padding: 3px 15px;">MORE</a></div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="content-spl myWelcome wow fadeIn" style="margin-bottom:1px;">
                                    <?php include ('php/welcome.php'); ?>
                                </div>
                                <div class="content-spl myNav wow fadeIn" style="height: auto;min-height: 284px;padding-top: 0;">
                                    <?php include ('php/accordion-pill-tabs.php'); ?>
                                    <div style="clear: both;"></div>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-spl wow fadeIn" style="height: 570px; overflow-y:hidden;">
                                    <?php include ('php/newsAndUpdates.php'); ?>
                                </div>
                            </div>
                            <div class="clearfill"></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="content-spl wow fadeIn">
                                    <?php include('php/highLights.php');?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php include ('../../php/alerts.php');  ?>
                    <?php include('../../php/footer.php'); ?>
                </div>



            </div>
            <!--/st-content-inner-->
        </div>
        <!--st-pusher-->
    </div>
    <!--st-container-->

    <script src="../../js/cbpFWTabs.js"></script>
    <script>
        (function() {

            [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
                new CBPFWTabs(el);
            });

        })();

    </script>
    <script src="../../js/modernizr.custom.js"></script>
    <script src="../../js/spin.min.js"></script>
    <script src="../../js/mySpin.js"></script>
    <script src="../../js/swipeview.js"></script>
    <script src="../../js/jquery.bootstrap.newsbox.min.js"></script>
    <script src="../../js/classie.js"></script>
    <!--	<script src="../../js/morphingSearch.js"></script>-->
    <script src="../../js/sidebarEffects.js"></script>
    <script src="../../js/transit.js"></script>
    <script src="../../js/sly.js"></script>
    <script src="../../js/customSly.js"></script>
    <script src="../../js/wow.min.js"></script>

    <script src="../../js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="../../js/scripts.js"></script>
    <script src="js/manSchool.js"></script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        $(document).ready(function() {
            $('#frameHighLights').owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                nav: true,
                navSpeed: 500,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    500: {
                        items: 2,
                        nav: true
                    },
                    700: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: false
                    }
                }
            });
        });

    </script>
</body>

</html>
