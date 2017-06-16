<!DOCTYPE html>
<?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website";$imgNum=mt_rand(1,4);/*$ROOT is the base URL & should on top of every PAGE */?>
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
    <link href="../../../../css/owl.carousel.min.css" rel="stylesheet" />
    <!--        <link rel="stylesheet" href="css/res-navtabs.css">-->
    <!--custom css-->
    <link href="../../../../css/custom.css" rel="stylesheet">
    <link href="../../../../css/innerpage.css" rel="stylesheet">
    <link href="css/manSchool.css" rel="stylesheet">
    <!-- javascript -->
    <script src="../../../../js/jquery-1.11.0.min.js"></script>
    <script src="../../../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../../js/respond.js"></script>
    <script src="../../../../js/custom.js"></script>
    <script src="../../../../js/fakeLoader.js"></script>


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
        <?php include('../../../../php/offCanvasMenu.php'); ?>
        <!-- content push wrapper -->
        <div class="st-pusher">
            <div class="st-content">
                <!-- this is the wrapper for the content -->
                <div class="st-content-inner">
                    <div class="container">
                        <div class="row empty" style="margin-bottom:9vh;"></div>
                        <div class="row" style="margin-top: 100px; padding-left: 5px; padding-right: 5px;">
<!--
                            <img src="images/CAROUSEL/<?php echo $imgNum?>.jpg" class="img-responsive" style="margin-bottom:4px;height: 330px;
    width: 100%;" />
-->
                            <?php include ('php/carousel.php'); ?>
                        </div>



                        <div class="row">
                            <div class="col-lg-9">
                                <div class="content-left myWelcome wow fadeIn" style="margin-left: 0px;margin-right: 0px;">


                                    <?php include('php/welcome.php');?>

                                </div>
                                <div class="content-spl myNav wow fadeIn" style="height: auto;min-height: 284px;padding-top: 0;margin-top: 8px;">
                                    <?php include ('php/accordion-pill-tabs.php'); ?>
                                    <div style="clear: both;"></div>
                                </div>

                                <div class="content-spl wow fadeIn" style="margin-top: 9px;">
                                    <?php include('php/highLights.php');?>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                            <div class="col-lg-3" style="margin-top:1em;">
                                <div class="content-spl wow fadeIn" style="height: 400px; overflow-y:hidden;margin-top:-6px;">
                                    <?php include ('php/dept_acheivements.php'); ?>
                                </div>
								
                                <div class="content-spl wow fadeIn" style="height: 508px; overflow-y:hidden;margin-top: 15px;">
                                    <?php include ('php/newsAndUpdates.php'); ?>
                                </div>
                                <div class="clearfill"></div>


                            </div>
                        </div>

                    </div>

                    <?php include ('../../../../php/alerts.php');  ?>
                    <?php include('../../../../php/footer.php'); ?>

                </div>



            </div>
            <!--/st-content-inner-->
        </div>
        <!-- this is the wrapper for the content-->
    </div>
    <!--st-pusher-->
    <!--        </div> st-container -->

    <!--<script src="../js/cbpFWTabs.js"></script>-->

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
    <!--    <script src="../../../../js/morphingSearch.js"></script>-->
    <script src="../../../../js/sidebarEffects.js"></script>
    <script src="../../../../js/transit.js"></script>
    <script src="../../../../js/sly.js"></script>
    <script src="../../../../js/customSly.js"></script>
    <script src="../../../../js/wow.min.js"></script>
    <script src="../../../../js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="../../../../js/scripts.js"></script>
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

            var $scene = $(".scene"),
                $content = $(".content"),
                $back = $(".back"),
                $backBgs = $(".back__bg"),
                $front = $(".front"),
                $frontBgs = $(".front__bg"),
                $menuBlock = $(".menu__block"),
                $svgPath = $(".menu__block-svgPath"),
                animating = false,
                menuActive = false,
                menuAnimTime = 600,
                blockAnimTime = 1500,
                $sliderCont = $(".menu-slider__content"),
                curSlide = 1,
                sliderXDiff = 0,
                curPage = 1,
                nextPage = 0,
                numOfPages = $(".front__bg").length,
                scaleTime = 500,
                transTime = 500,
                totalTime = scaleTime + transTime,
                changeTimeout,
                timeoutTime = 8000,
                winW = $(window).width(),
                winH = $(window).height();

            // init nav element timeout animation
            $(".nav__el-1").addClass("active");

            //default debounce function from David Walsh blog
            function debounce(func, wait, immediate) {
                var timeout;
                return function() {
                    var context = this,
                        args = arguments;
                    var later = function() {
                        timeout = null;
                        if (!immediate) func.apply(context, args);
                    };
                    var callNow = immediate && !timeout;
                    clearTimeout(timeout);
                    timeout = setTimeout(later, wait);
                    if (callNow) func.apply(context, args);
                };
            };

            function changePages() {
                $(".back__bg, .front__bg, .nav__el").removeClass("active");
                $(".nav__el-" + curPage).addClass("active");
                $back.css("transform", "translate3d(0," + (curPage - 1) * -100 + "%,0)");
                $front.css("transform", "translate3d(0," + (curPage - 1) * 100 + "%,0)");
                createTimeout();

                setTimeout(function() {
                    $(".back__bg-" + curPage + ", .front__bg-" + curPage).addClass("active");
                }, totalTime);
            };

            $(document).on("click", ".nav__el:not(.active)", function() {
                curPage = $(this).attr("data-page");
                changePages();
            });

            // ugly hack for animation reset when you coming back from menu section
            function resetTimeoutAnimation() {
                var $activeNavEl = $(".nav__el.active"),
                    $activeParts = $activeNavEl.find(".nav__el-clone, .nav__el")
                $activeParts.addClass("instant");
                $activeNavEl.removeClass("active");
                $activeParts.css("top");
                $activeParts.removeClass("instant");
                $activeParts.css("top");
                $activeNavEl.addClass("active");
            }

            /* creates timeOut for change of slides.
            Call's itself from inside of changePages() function
            */
            function createTimeout() {
                window.clearTimeout(changeTimeout);
                resetTimeoutAnimation();
                changeTimeout = setTimeout(function() {
                    if (curPage >= numOfPages) {
                        curPage = 1;
                    } else {
                        curPage++;
                    }
                    changePages();
                }, timeoutTime);
            };

            createTimeout();

            /* creates path D attribute strings for animation
            initial d = fullScreen
            mid d = Q curves with 5% padding
            final d = centered 90% width/height block
            */
            function createD(type) {
                var types = {
                    "init": ["M0,0",
                        "Q" + winW / 2 + ",0",
                        winW + ",0",
                        "Q" + winW + "," + winH / 2,
                        winW + "," + winH,
                        "Q" + winW / 2 + "," + winH,
                        "0," + winH,
                        "Q0," + winH / 2,
                        "0,0"
                    ],
                    "mid": ["M0,0",
                        "Q" + winW / 2 + "," + winH * 0.05,
                        winW + ",0",
                        "Q" + winW * 0.95 + "," + winH / 2,
                        winW + "," + winH,
                        "Q" + winW / 2 + "," + winH * 0.95,
                        "0," + winH,
                        "Q" + winW * 0.05 + "," + winH / 2,
                        "0,0"
                    ],
                    "final": ["M" + winW * 0.05 + "," + winH * 0.05,
                        "Q" + winW / 2 + "," + winH * 0.05,
                        winW * 0.95 + "," + winH * 0.05,
                        "Q" + winW * 0.95 + "," + winH / 2,
                        winW * 0.95 + "," + winH * 0.95,
                        "Q" + winW / 2 + "," + winH * 0.95,
                        winW * 0.05 + "," + winH * 0.95,
                        "Q" + winW * 0.05 + "," + winH / 2,
                        winW * 0.05 + "," + winH * 0.05
                    ]
                };
                return types[type].join(" ");
            }

            // animates path d with SnapSVG
            function animateBlock(reverse) {
                winW = $(window).width();
                winH = $(window).height();
                var initD = createD("init"),
                    midD = createD("mid"),
                    finalD = createD("final");

                if (!reverse) {
                    $svgPath.attr("d", initD);
                    Snap($svgPath[0]).animate({
                        "path": midD
                    }, blockAnimTime / 2, mina.elastic, function() {
                        Snap($svgPath[0]).animate({
                            "path": finalD
                        }, blockAnimTime / 2, mina.elastic);
                    });
                } else {
                    Snap($svgPath[0]).animate({
                        "path": midD
                    }, blockAnimTime / 2, mina.elastic, function() {
                        Snap($svgPath[0]).animate({
                            "path": initD
                        }, blockAnimTime / 2, mina.elastic);
                    });
                }

            };

            // resizes opened menu path d block, because i can't change viewBox with js
            var resizeSvg = debounce(function() {
                winW = $(window).width();
                winH = $(window).height();
                $svgPath.attr("d", createD("final"));
            }, 50);

            // default madness
            $(document).on("click", ".menu__btn", function() {
                if (animating) return;
                animating = true;
                setTimeout(function() {
                    animating = false;
                }, blockAnimTime + menuAnimTime);

                if (!menuActive) {
                    menuActive = true;
                    window.clearTimeout(changeTimeout);
                    $content.addClass("inactive");
                    $scene.addClass("menu-visible");
                    $(".back__bg:not(.active)").addClass("hidden");
                    $(window).on("resize", resizeSvg);
                    setTimeout(function() {
                        $menuBlock.addClass("visible");
                        animateBlock();
                    }, menuAnimTime);
                } else {
                    menuActive = false;
                    animateBlock(true);
                    setTimeout(function() {
                        $menuBlock.removeClass("visible");
                        createTimeout();
                        $(".back__bg").removeClass("hidden");
                        $content.removeClass("inactive");
                        $scene.removeClass("menu-visible");
                    }, blockAnimTime);
                    $(window).off("resize");
                }
            });

        });

    </script>
    <script>
        $("document").ready(function() {
            //below code is for retrieving corresponding pages #START
            var activePage = 'page1';
            $.ajax({
                url: 'snipets/' + activePage + '.php',
                success: function(data) {
                    $('#page').html(data);
                },
                error: function(data) {
                    alert('failed to load data');
                }
            });
            $('.profile-pagination li a').click(function() {
                $(this).parent().siblings().removeClass('active');
                $(this).parent().addClass('active');
            });
            $('.profile-pagination li a').click(function() {
                var activePage = this.getAttribute('data-value');
                $.ajax({
                    url: 'snipets/' + activePage + '.php',
                    success: function(data) {
                        $('#page').html(data);
                    },
                    error: function(data) {
                        alert('failed to load data');
                    }
                });
            });
            //above code is for retrieving corresponding pages #END
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
