<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."Github/kjc-website"; $imgNum = mt_rand(1,10);/*$ROOT is the base URL & should on top of every PAGE */?> 
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
    <!--        <link rel="stylesheet" href="css/res-navtabs.css">-->
    <!--custom css-->
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/innerpage.css" rel="stylesheet">
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
                                    <img src="../images/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                 
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Public  <strong> NCC </strong></span></h4>
									
									
									<p align=justify>Kristu Jayanti College dreams of disciplined and patriotic citizens of tomorrow in her students of today. The National Cadet Corps (NCC) is one of the tools through which the college's this dream would be fulfilled. We follow a very strict and strategic pattern of training the NCC cadets through trained professionals. The regular NCC parade held on every Saturdays proclaim the value and sense of discipline inculcated in them as a result of vigorous training. The members also take part in National Camps organised at various cities of the country.</p>

									
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                   
									<p><b><font color="#3b96d6">ART & CULTURE</font></b></p>
                                    
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="art_culture.php"> Art & Culture</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="kalajyothi.php">Kalajyothi</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="nrityanjali.php">Nrityanjali</a></p>
                                    </section>



                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="sargotsav.php"> Sargotsav</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="training.php">Training</a></p>
                                    </section>   </div>
								
								<div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
									<p><b><font color="#3b96d6">SPORTS & GAMES</font></b></p>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="annual_sports.php"> Annual Sports</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="sports_games.php">Sports & Games</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="sports_training.php">Sports Training</a></p>
                                    </section>
								    </div>
								
								<div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
									<p><b><font color="#3b96d6">CELEBRATIONS</font></b></p>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="ethinic_day.php">Ethinic Day</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="independence_day.php">Independence day</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="kannada_hindi.php">Kannada Hindi</a></p>
                                    </section>
									
									<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="teachers_day.php">Teachers Day</a></p>
                                    </section>
								    </div>
								
								<div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
									<p><b><font color="#3b96d6">PUBLIC SERVICES</font></b></p>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="public_gramotsava.php">Public Gramotsava</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="public_ncc.php" style="color: #2980b9;font-weight: bold;">Public NCC</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="public_nss.php">Public NSS</a></p>
                                    </section>
									
									<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="public_services.php">Public Services</a></p>
                                    </section>
								    </div>
								
								<div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
									<p><b><font color="#3b96d6">INTER-INTRA FESTIVALS</font></b></p>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="inter_intra_festivals.php">Inter Intra Festivals</a></p>
                                    </section>
								    </div>
								
								
								<div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
									<p><b><font color="#3b96d6">ASSOCIATIONS</font></b></p>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce_club.php">Commerce Club</a></p>
                                    </section>
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="computer_academy.php">Computer Academy</a></p>
                                    </section>
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="current_affairs_forum.php">Current Affairs Forum</a></p>
                                    </section>
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="electronics_club.php">Electronics Club</a></p>
                                    </section>
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="environmental_club.php">Environmental Club</a></p>
                                    </section>
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="journalism_club.php">Journalism Club</a></p>
                                    </section>
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="literary_cultural_academy.php">Literary and Cultural Academy</a></p>
                                    </section>
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="management_association.php">Management Association</a></p>
                                    </section>
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="psychology_club.php">Psychology Club</a></p>
                                    </section>
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="theatre_club.php">Theatre Club</a></p>
                                    </section>
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="tourism_club.php">Tourism Club</a></p>
                                    </section>
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="women_empowerment_cell.php">Women Empowerment Cell</a></p>
                                    </section>
									
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

</body>

</html>
