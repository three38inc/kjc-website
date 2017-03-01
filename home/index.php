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

        <link href="../css/owl.carousel.min.css" rel="stylesheet" />
        <!--        <link rel="stylesheet" href="css/res-navtabs.css">-->
        <!--custom css-->
        <link href="../css/custom.css" rel="stylesheet">
        <!-- javascript -->
        <script src="../js/jquery-1.11.0.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script> 
        <script src="../js/respond.js"></script>
        <script src="../js/custom.js"></script>
        <script src="../js/fakeLoader.js"></script>
    </head>
    <body>
        <script type="text/javascript">$crisp=[];CRISP_WEBSITE_ID="bfee4615-2d13-4129-a9c2-d7b8095e3d0e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.im/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
        <div id="fakeLoader"></div>
        <script>
            $("#fakeLoader").fakeLoader({
                timeToHide:2000,
                bgColor:"#2c3e50",
                spinner:"spinner4"
            });
        </script>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=578768295582897";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <div class="container-fluid">
            <div class="row">
                <?php include ('../php/navbar.php');  ?>
            </div>
        </div>
        <div id="st-container" class="st-container">
            <?php include('../php/offCanvasMenu.php'); ?>
            <!-- content push wrapper -->
            <div class="st-pusher">	
                <div class="st-content"><!-- this is the wrapper for the content -->
                    <div class="st-content-inner">
                        <div class="container">
                            <!--        <div class="row">-->
                            <div class="row empty" style="margin-bottom:2vh;"></div>
                            <div class="row" style="padding:0% 15px;">             	                    
                                <?php include ('php/carouselMain.php'); ?>
                            </div>
                            <div class="row branchDiv" style="margin-top: 15px;margin-bottom: 15px;">
                                <div class="col-lg-4 space">
                                    <div class="content-spl mainDiv wow fadeIn">
                                        <!--
<h4 ><i class="fa fa-bookmark" style="color:#2980b9"></i>
<span>&nbsp;Schools of <strong> Management</strong> </span>
</h4>
-->

                                        <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                            <span>&nbsp;Schools of <strong> Management</strong></span>
                                        </h4>
                                        <p style="text-align: center;">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 space">
                                    <div class="content-spl mainDiv wow fadeIn">
                                        <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                            <span>&nbsp;College of <strong> Arts,Science &amp; Commerce</strong></span>
                                        </h4>
                                        <p style="text-align: center;">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 space">
                                    <div class="content-spl mainDiv wow fadeIn">
                                        <h4 style="background-image: url(../images/headline_bg.jpg);
                                                   background-repeat: no-repeat;
                                                   background-position: 0px bottom;
                                                   padding-bottom: 15px;padding-top:15px;"><i class="fa fa-bookmark" style="color:#2980b9;"></i>
                                            <span style="font-size: 16px;">&nbsp;College of <strong style="color:#2980b9;font-size: 20px;">Law</strong></span>
                                        </h4>
                                        <p style="text-align: center;">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                        </p>
                                    </div>
                                </div>
                                <div style="clear: both;"></div>
                            </div>
                            <div class="row" >
                                <div class="col-lg-9">
                                    <div class="content-spl myWelcome wow fadeIn" style="margin-bottom:1px;">
                                        <?php include ('php/welcome.php'); ?>
                                    </div>
                                    <div class="content-spl myNav wow fadeIn">
                                        <?php include ('php/accordion-pill-tabs.php'); ?>
                                        <div class="clearfill"></div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="content-spl wow fadeIn" style="height:  635px; overflow-y:hidden;">
                                        <?php include ('php/newsAndUpdates.php'); ?>
                                    </div>
                                </div>
                                <div class="clearfill"></div>
                            </div>

                            <div class="row" style="margin-top:10px;">
                                <div class="col-lg-9">
                                    <div class="col-lg-4" style="padding: 0px;">
                                        <div class="content-spl wow fadeIn" style="margin-right: 0;">
                                            <div style="width: 100%; height: 41px; background-color: #2c3e50; padding: 10px; color: #fff;">
                                                <h4>Placement</h4>
                                            </div>
                                            <p style="text-align:justify;"> 
                                                <br>
                                                Sample Content to be displayed.<br/><br/><br/><br/><br/><br/>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 space">
                                        <div class="content-spl wow fadeIn" style="margin-right: 0;">
                                            <div style="width: 100%; height: 41px; background-color: #2c3e50; padding: 10px; color: #fff;">
                                                <h4>Placement</h4>
                                            </div>
                                            <p style="text-align:justify;"> 
                                                <br>
                                                Sample Content to be displayed.<br/><br/><br/><br/><br/><br/>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="padding: 0px;">
                                        <div class="content-spl wow fadeIn">
                                            <div style="width: 100%; height: 41px; background-color: #2c3e50; padding: 10px; color: #fff;">
                                                <h4>Placement</h4>
                                            </div>
                                            <p style="text-align:justify">
                                                <br>
                                                Sample Content to be displayed.<br/><br/><br/><br/><br/><br/>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3" style="padding:0;">
                                    <div class="col-lg-12">
                                        <div class="content-spl wow fadeIn"  style="min-height: 20px;">
                                            <div style="width: 100%; height: 38px; padding: 10px; color: #fff;">
                                                <h4>Placement</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="content-spl wow fadeIn"  style="min-height: 20px;">
                                            <div style="width: 100%; height: 38px; padding: 10px; color: #fff;">
                                                <h4>Placement</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="content-spl wow fadeIn"  style="min-height: 20px;">
                                            <div style="width: 100%; height: 38px; padding: 10px; color: #fff;">
                                                <h4>Placement</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="content-spl wow fadeIn"  style="min-height: 20px;">
                                            <div style="width: 100%; height: 38px; padding: 10px; color: #fff;">
                                                <h4>Placement</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfill"></div>
                            </div>

                            <div class="row" style="margin-top: 14px;">
                                <div class="col-lg-9">
                                    <div class="content-spl myWelcome wow fadeIn" style="margin-top: -5px; min-height: 458px;">
                                        <h4 style="background-image: url(../images/headline_bg.jpg);
                                                   background-repeat: no-repeat;
                                                   background-position: 0px bottom;
                                                   padding-bottom: 7px;padding-top:15px;"><i class="fa fa-bookmark" style="color:#2980b9;"></i>
                                            <span style="font-size: 20px;">&nbsp;At<strong style="color:#2980b9;font-size: 24px;"> Kristu Jayanti College</strong></span>
                                        </h4>
                                        <img class="atKjc img-responsive" src="../images/img1.jpg" />
                                        <p style="text-align:justify;margin-top: 15px;margin-bottom: 0;" > The institution strives to fulfill its mission to provide educational opportunities.
                                        </p>
                                    </div>

                                </div>
                                <div class="col-lg-3">
                                    <div class="content-spl wow fadeIn" style="margin-top: -5px; height: 458px; overflow: hidden;">
                                        <?php include ('php/events.php'); ?>
                                    </div>
                                </div>                                        
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="content-spl wow fadeIn">
                                        <?php include('php/highLights.php');?>
                                    </div>
                                </div>
                            </div>
                            <!--
<div class="row">
<div class="col-lg-9">
<div class="content-left wow fadeIn">
<?php/* include('php/upcoming.php');*/?>
</div>
</div>
<div class="col-lg-3">
<div class="content-right wow fadeIn" style="height:  393px; overflow-y:hidden;">
<div class="fb-page" data-href="https://www.facebook.com/KristuJayantiCollege" data-height="370" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/KristuJayantiCollege"><a href="https://www.facebook.com/KristuJayantiCollege">Facebook</a></blockquote></div></div>
</div>
</div>
</div>
-->
                        </div>

                        <!--                                </div>-->
                        <?php include ('../php/alerts.php');  ?>
                        <?php include('../php/footer.php'); ?>
                        <?php include('../php/morphingSearch.php'); ?>
                    </div>   



                </div> <!--/st-content-inner--> 
            </div><!-- this is the wrapper for the content--> 
        </div> <!--st-pusher--> 
        </div> <!--st-container--> 

    <script src="../js/cbpFWTabs.js"></script>
    <script>
        (function() {

            [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
                new CBPFWTabs( el );
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
    <script src="../js/owl.carousel.min.js" type="text/javascript"></script>
    <!--    <script src="js/res-navtabs.js"></script>-->
    <script src="../js/scripts.js"></script>
    <script>

        $(document).ready(function(){
            
            if(screen.width < 400){
                $('#frameHighLights').owlCarousel({
                    items: 1,
                    loop: true,
                    autoplay: true,
                    nav: true,
                    navSpeed: 500,
                    responsive : true
                });
            }
            else {
                $('#frameHighLights').owlCarousel({
                    items: 4,
                    loop: true,
                    autoplay: true,
                    nav: true,
                    navSpeed: 500,
                    responsive : true
                });
            }
            
            $('#prev-high').click(function(){
                alert();
                $('.owl-next').trigger('click');
            });
            
            
            
        });
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </body>   
</html>