<!DOCTYPE html>
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
        <?php include('../../php/offCanvasMenu.php'); ?>
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
                            <div class="col-lg-9">
                                <div class="content-spl myWelcome wow fadeIn" style="margin-bottom:1px;">
                                    <?php include ('php/welcome.php'); ?>
                                </div>
                                <div class="content-spl myNav wow fadeIn" style="height: auto;min-height: 284px;">
                                    <?php include ('php/accordion-pill-tabs.php'); ?>
                                    <div style="clear: both;"></div>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-spl wow fadeIn" style="height: 543px; overflow-y:hidden;">
                                    <?php include ('php/newsAndUpdates.php'); ?>
                                </div>
                            </div>
                            <div class="clearfill"></div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-lg-9">
                                <!--
                                <div class="col-lg-4" style="padding: 0px;">
                                    <div class="content-spl wow fadeIn" style="margin-right: 0;padding-top: 0;">
                                        <div class="placementTitle">
                                            <h4>Media Releases</h4>
                                        </div>
                                        <p style="text-align:justify;">
                                            <ul class="mMenu">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-newspaper-o"></i> KJC in news <i class="fa fa-angle-double-right"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-book"></i> Publications <i class="fa fa-angle-double-right"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-file-text-o"></i> Glimpses <i class="fa fa-angle-double-right"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-film"></i> Videos <i class="fa fa-angle-double-right"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-comments-o"></i> Social Media <i class="fa fa-angle-double-right"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-files-o"></i> Brochures <i class="fa fa-angle-double-right"></i></a>
                                                </li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
-->
                                <div class="col-lg-4 space" style="padding: 0px;">
                                    <div class="content-spl wow fadeIn" style="margin-right: 0;padding-top: 0;height: 220px;">
                                        <div class="placementTitle">
                                            <h4>Media Room</h4>
                                        </div>
                                        <div class="owl-carousel owl-theme" id="MediaSlider">
                                            <div class="item">
                                                <div class="media-room">
                                                    <img src="../../images/weekly-calendar.png" class="media-room-icon" />
                                                    <span class="media-room-heading">Glimpses</span>

                                                </div>
                                                <div style="clear:both;"></div>

                                                <p style="text-align:center; font-size: 1em;position:relative;">
                                                    Glimpses as a weekly newsletter has revealed to the world what Kristu Jayanti is ..
                                                </p>
                                                <p class="text-center">
                                                    <a href="../../admission/admission.php" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                                                </p>
                                            </div>
                                            <div class="item">
                                                <div class="media-room">
                                                    <img src="../../images/newspaper.png" class="media-room-icon" />
                                                    <div class="media-room-heading">KJC IN NEWS</div>
                                                </div>

                                                <div style="clear:both;"></div>
                                                <p style="text-align:center; font-size: 1em;position:relative;">
                                                    The institution has experienced a rapid growth since its humble inception ...
                                                </p>
                                                <p class="text-center">
                                                    <a href="../../admission/admission.php" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                                                </p>
                                            </div>
                                            <div class="item">
                                                <div class="media-room">
                                                    <img src="../../images/publications.png" class="media-room-icon" />
                                                    <div class="media-room-heading">Publications</div>
                                                </div>
                                                <div style="clear:both;"></div>
                                                <p style="text-align:center; font-size: 1em;position:relative;">
                                                    Chavara journel &amp; Jayantian New letter has been grown to industry standard ....
                                                </p>
                                                <p class="text-center">
                                                    <a href="../../admission/admission.php" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                                                </p>
                                            </div>

                                            <div class="item">
                                                <div class="media-room">
                                                    <img src="../../images/play-button.png" class="media-room-icon" />
                                                    <div class="media-room-heading">Videos</div>
                                                </div>

                                                <div style="clear:both;"></div>
                                                <p style="text-align:center; font-size: 1em;position:relative;">
                                                    Video room of kristu jayanti Produces magnificiant videos which explains ....
                                                </p>
                                                <p class="text-center">
                                                    <a href="../../admission/admission.php" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                                                </p>
                                            </div>
                                            <div class="item">
                                                <div class="media-room">
                                                    <img src="../../images/networking.png" class="media-room-icon" />
                                                    <div class="media-room-heading">Social Media</div>
                                                </div>

                                                <div style="clear:both;"></div>
                                                <p style="text-align:center; font-size: 1em;position:relative;">
                                                    Facebook and Youtube became a part and parcel of the Age .
                                                </p>
                                                <p class="text-center">
                                                    <a href="../../admission/admission.php" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                                                </p>
                                            </div>
                                            <div class="item">
                                                <div class="media-room">
                                                    <img src="../../images/broucher.png" class="media-room-icon" />
                                                    <div class="media-room-heading">Brochures</div>
                                                </div>

                                                <div style="clear:both;"></div>
                                                <p style="text-align:center; font-size: 1em;position:relative;">
                                                    Brochures for the current academic year can be accessed from here....
                                                </p>
                                                <p class="text-center">
                                                    <!--
                                                    <a href="../admission/admission.php" class="label label-primary text-center" style="font-size: 1em;">
                                                        Click Here</a>
-->
                                                    <a href="../../admission/admission.php" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a></p>


                                            </div>



                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 space">
                                    <div class="content-spl wow fadeIn" style="margin-right: 0;padding-top: 0;height: 220px;">
                                        <div class="placementTitle">
                                            <h4>Placements</h4>
                                        </div>
                                        <div class="owl-carousel owl-theme" id="placementSlider">
                                            <div class="item">
                                                <img src="../../images/placements/google_new_logo.png" width="210" height="139" />
                                                <p class="text-center">
                                                <a href="../../placements/our_recruiters.php" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                                                    </p>
                                            </div>
                                            <div class="item">
                                                <img src="../../home/slider-images/volvo.jpg" />
                                                <a href="../../placements/our_recruiters.php" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                            <div class="item">
                                                <img src="../../home/slider-images/crossdomain.jpg" />
                                                <a href="../../placements/our_recruiters.php" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                            <div class="item">
                                                <img src="../../home/slider-images/greatwest.jpg" />
                                                <a href="../../placements/our_recruiters.php" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4" style="padding: 0px;">
                                    <div class="content-spl wow fadeIn" style="margin-right: 0;padding-top: 0;height: 220px;">
                                        <div class="placementTitle">
                                            <h4>Admissions</h4>
                                        </div>
                                        <div class="media-room">
                                            <img style="width:75px;" src="../../images/graduates.png" class="media-room-icon" />
                                            <span class="media-room-heading">Admission</span>
                                        </div>

                                        <div style="clear:both;"></div>
                                        <p style="text-align:center; font-size: 1.2em;position:relative;">
                                            Admission to all UG &amp; PG Programmes for academic year 2017 are open.
                                        </p>
                                        <p class="text-center">
                                            <a href="../../admission/admission.php" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3" style="padding:0;">
                                <div class="col-lg-12">
                                    <div class="content-spl sideLinks wow fadeIn" style="min-height: 20px;">
                                        <a href="http://events.kristujayanti.edu.in/">
                                            <h4><i class="fa fa-calendar-o"></i> Enroll for an Event</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="content-spl sideLinks wow fadeIn" style="min-height: 20px;">
                                        <a href="http://alumni.kristujayanti.edu.in/">
                                            <h4><i class="fa fa-link"></i> Alumini Connect</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="content-spl sideLinks wow fadeIn" style="min-height: 20px;">
                                        <a href="#">
                                            <h4><i class="fa fa-graduation-cap"></i> Coaching Centers</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="content-spl sideLinks wow fadeIn" style="min-height: 20px;">
                                        <a href="../career/career.php">
                                            <h4><i class="fa fa-suitcase"></i> Career Vacancies</h4>
                                        </a>
                                    </div>
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
        $(document).ready(function(){
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
            $('#placementSlider').owlCarousel({
                loop: true,
                autoplay: true,
                margin: 10,
                nav: false,
                dots: true,
                items: 1
            });
            $('#MediaSlider').owlCarousel({
                loop: true,
                autoplay: true,
                margin: 10,
                nav: false,
                dots: true,
                items: 1
            });
        });
    </script>
</body>

</html>
