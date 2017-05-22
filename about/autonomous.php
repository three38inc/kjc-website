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
    <link rel="shortcut icon" href="<?php echo $ROOT; ?>/images/icon.png">
    <!-- Bootstrap css -->
    <link href="<?php echo $ROOT; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--additional css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $ROOT ; ?>/css/component.css" />
    <link rel="stylesheet" href="<?php echo $ROOT ; ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo $ROOT ; ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $ROOT ; ?>/css/roundIcons.css">
    <link rel="stylesheet" href="<?php echo $ROOT ; ?>/css/hoverEffect.css">
    <link rel="stylesheet" href="<?php echo $ROOT ; ?>/css/morphing.css">
    <link rel="stylesheet" href="<?php echo $ROOT ; ?>/css/navTabs.css">
    <link rel="stylesheet" href="<?php echo $ROOT ; ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo $ROOT ; ?>/css/fakeLoader.css">
    <!--custom css-->
    <link href="<?php echo $ROOT ; ?>/css/custom.css" rel="stylesheet">
<!--    <link href="../css/innerpage.css" rel="stylesheet">-->
    <!-- javascript -->
    <script src="<?php echo $ROOT ; ?>/js/jquery-1.11.0.min.js"></script>
    <script src="<?php echo $ROOT ; ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $ROOT ; ?>/js/respond.js"></script>
    <script src="<?php echo $ROOT ; ?>/js/custom.js"></script>
    <script src="<?php echo $ROOT ; ?>/js/fakeLoader.js"></script>

</head>

<body>
    <script type="text/javascript">
        $crisp = [];
        CRISP_WEBSITE_ID = "bfee4615-2d13-4129-a9c2-d7b8095e3d0e";
        (function() {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.im/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();

    </script>
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
                                    <img src="../images/clg_history.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                    <br/>
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Our <strong>Autonoums Status</strong></span>
                                    </h4>

                                    <br/>
                                    <p align="justify">

                                        Will Update soon
                                    </p>




                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Learn <strong>About us</strong></span>
                                    </h4>
                                    <?php include ('php/sideMenu.php'); ?>
                                </div>

                                <div class="content-right wow fadeIn" style="margin-left:2px; margin-right: 2px;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                    </h4>
                                    <?php include ('../php/sideMenu.php'); ?>
                                </div>


                                <div class="content-right wow fadeIn" style="height: 137px;overflow: hidden;visibility: visible;animation-name: fadeIn;background: #fff;box-shadow: 0 1px 2px #ccc;">
                                    <div class="fb-page" data-href="https://www.facebook.com/KristuJayantiCollege" data-height="310" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="false">
                                        <div class="fb-xfbml-parse-ignore">
                                            <blockquote cite="https://www.facebook.com/KristuJayantiCollege"><a href="https://www.facebook.com/KristuJayantiCollege">Facebook</a></blockquote>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                    <!--						                                </div>-->
                    <?php include ('../php/alerts.php');  ?>
                    <?php include('../php/footer.php'); ?>
                    <?php include('../php/morphingSearch.php'); ?>
                </div>



            </div>
            <!--/st-content-inner-->
        </div>
        <!-- this is the wrapper for the content-->
    </div>
    <!--st-pusher-->
    </div>
    <!--st-container-->

    <script>
        (function() {

            [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
                new CBPFWTabs(el);
            });

        })();

    </script>
    <script src="<?php echo $ROOT ; ?>/js/modernizr.custom.js"></script>
    <script src="<?php echo $ROOT ; ?>/js/spin.min.js"></script>
    <script src="<?php echo $ROOT ; ?>/js/mySpin.js"></script>
    <script src="<?php echo $ROOT ; ?>/js/swipeview.js"></script>
    <script src="<?php echo $ROOT ; ?>/js/jquery.bootstrap.newsbox.min.js"></script>
    <script src="<?php echo $ROOT ; ?>/js/classie.js"></script>
    <script src="<?php echo $ROOT ; ?>/js/morphingSearch.js"></script>
    <script src="<?php echo $ROOT ; ?>/js/sidebarEffects.js"></script>
    <script src="<?php echo $ROOT ; ?>/js/transit.js"></script>
    <script src="<?php echo $ROOT ; ?>/js/sly.js"></script>
    <script src="<?php echo $ROOT ; ?>/js/customSly.js"></script>
    <script src="<?php echo $ROOT ; ?>/js/wow.min.js"></script>
    <!--    <script src="js/res-navtabs.js"></script>-->
    <script src="<?php echo $ROOT ; ?>/js/scripts.js"></script>
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
