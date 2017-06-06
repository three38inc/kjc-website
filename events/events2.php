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
    <link rel="shortcut icon" href="../images/icon.png">
    <!-- Bootstrap css -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--additional css-->
    <link rel="stylesheet" type="text/css" href="../css/component.css" />
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/roundIcons.css">
    <link rel="stylesheet" href="../css/hoverEffect.css">
    <link rel="stylesheet" href="../css/morphing.css">
    <link rel="stylesheet" href="../css/navTabs.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/fakeLoader.css">
            
    <!--custom css-->
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/innerpage.css" rel="stylesheet">
    <link rel="stylesheet" href="event_style.css">
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
        
        .event-navigator {
            position: relative;
            width: 100%;
            background: #ccc;
            text-align: center;
            padding-bottom: 10px;
        }
        
        .event-navigator a {
            padding: 0px 9px;
            font-size: 15px;
            cursor: pointer;
            text-decoration: none;
            color: #34495e;
        }
        
        .event-navigator a:hover {
            color: #fff;
        }
        
        .event-navigator a:visited {
            color: #34495e;
        }
        
        .nowMonth {
            color: #2980b9!important;
        }
        
        .event-head-navigator h3 {
            padding: 5px 0px;
        }
        .event-head-navigator{
            position: relative;
            background: #ccc;
            text-align: center;
        }
        .event-head-navigator .fa-chevron-left {
            position: absolute;
            top: 1em;
            left: 1em;
            z-index: 999;
            cursor: pointer;
            font-size: 1.2em;
        }
        
        .event-head-navigator .fa-chevron-right {
            position: absolute;
            top: 1em;
            right: 1em;
            z-index: 999;
            cursor: pointer;
            font-size: 1.2em;
        }
        
       

    </style>

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
                        <div class="row" style="margin-top: 100px; padding-left: 10px; padding-right: 10px;">

                        </div>
                        <div class="row">
                            <div class="marginTopDiv">&nbsp;</div>
                            <div class="col-lg-9">
                                <div class="content-left myWelcome wow fadeIn">
                                    <div class="event-head-navigator">
                                        <i class='fa fa-chevron-left yearLeft'></i>
                                        <i class='fa fa-chevron-right yearRight'></i>
                                        <h3 id="event-year"> Current Year </h3>
                                        <div class="event-navigator">
                                          <a href="#">January</a>
                                            <a href="#">February</a>
                                            <a href="#">March</a>
                                            <a href="#">April</a>
                                            <a href="#">May</a>
                                            <a href="#">June </a>
                                            <a href="#">July</a>
                                            <a href="#">August</a>
                                            <a href="#">September</a>
                                            <a href="#">October </a>
                                            <a href="#">November</a>
                                            <a href="#">December</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr />
                                    <div class="inner-content">
                                        <div class="row event-details">
                                            <!-- Ajax Loaded Contents -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Learn <strong>About us</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="founder.php">Founder</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="history.php">History</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="vision_mission_goals.php">Vision, Mission &amp; Goals</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="core_values.php">Core Values</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="educational_philosophy.php">Educational Philosophy</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="profile.php">Profile</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="milestones.php">Milestones</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="management.php">Management</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="message.php">Principal's Message</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="autonomous.php">Autonomous Info</a></p>
                                    </section>



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

                    <?php include ('../php/alerts.php');  ?>
                    <?php include('../php/footer.php'); ?>
                    <?php include('../php/morphingSearch.php'); ?>




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
    <script src="../js/morphingSearch.js"></script>
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

    <script type="text/javascript">
        $('#event-year').html((new Date()).getFullYear());
        $('.event-navigator a:nth-child(' + ((new Date()).getMonth() + 1) + ')').addClass("nowMonth");
        getNews($('#event-year').html(),$('.nowMonth').html());
        $('.event-navigator a').on('click', function(e) {
            $('.event-navigator a').removeAttr("class");
            $(this).addClass("nowMonth");
            getNews($('#event-year').html(),$('.nowMonth').html());
        });
        $(".yearLeft").click(function() {
            var year = Number(document.getElementById('event-year').innerHTML);
            document.getElementById('event-year').innerHTML = year - 1;
            getNews($('#event-year').html(),$('.nowMonth').html());
        });
        $(".yearRight").click(function() {
            var year = Number(document.getElementById('event-year').innerHTML);
            document.getElementById('event-year').innerHTML = year + 1;
            getNews($('#event-year').html(),$('.nowMonth').html());
        });

        function getNews(year, month) {
            var dataString = "year=" + (year) + "&month=" + month;
            $.ajax({
                url: "loadEvent.php",
                data: dataString,
                success: function(data) {
                    $('.event-details').html(data);

                },
                error: function(data) {
                    
                }
            });
        }

    </script>
</body>

</html>
