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
                              
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp; Infectious Diseases and <strong> Control  </strong></span></h4>
									
								
									<p><b>Total: 50 Hours</b></p>

									<p><b>Objective:</b><br>
* Understand infectious disease dynamics<br>
										* Understand the principles to prevent and control infectious diseases.</p>

									<p><b><u>Unit 1: Communicable Diseases : (12 hrs)</u></b><br>
										Epidemics- Definition, disease- specific set of symptoms, causes, types, spread of infection, mode of transmission. Communicable diseases - transmission of the agent, direct & In-direct methods, products from infected person -Their importance, emergencies and disasters.</p>

									<p><b><u>Unit 2: Bacterial Epidemic Diseases : (14 hrs)</u></b><br>
										Epidemiology, General characteristics, symptoms lab diagnosis and treatment of Enteric fever-Typhus (Salmonella typhi), Tuberculosis (Mycobacterium tuberculosis) and Cholera (Vibrio cholera).Immunity against bacterial infections, antimicrobial agents, assay of antibiotics.</p>

									<p><b><u>Unit 3: Viral and Parasitic Epidemic Diseases : (12 hrs)</u></b><br>
										Epidemiology, General characteristics, symptoms lab diagnosis and treatment of Polio, Influenza, AIDS, Malaria and Yellow fever. Antiviral agents, Immunity against viruses. Molecular methods used in detection of virus</p>

									<p><b><u>Unit 4: Prevention and control of Outbreak : (12 hrs)</u></b><br>
										Disease Control, Infection control measures, Public-health surveillance, Food safety, Healthy Habits, Vaccines for preventable diseases. social responsibility, eradication of diseases. Environmental monitoring.</p>

									<p><b>References:</b><br>
1. Ananth Narayan and Jayaram Panickker, (2009). Medical Microbiology, Himalaya Publishing House, Mumbai.<br>
2. Davis, B.D., Dulbecco, R., Eisen, H.N. and Ginsberg, H.S. Morse, S.A. (2001). Medical Microbiology, Harper and Row Publishers Inc, Singapore.<br>
3. Dobranovsky, (2001). Virology - A hand book for Microbiologists, MIR Publishers, Moscow.<br>
4. Iyengar, K.V.K., Gupta, A., Sharma, S. K. and Pande, J.N. (1993). A text book of Diagnostic Methods in Microbiology.,Biomed Central publishers.Kathmandu, Nepal<br>
5. Mc.Kee and McCartney, (1996). A text book of Medical Microbiology, Churchill and Livingstone, Edinburgh, Scotland.<br>
6. R.L.Sharma and S.K.Agarwal., (2003). A study of pathological diseases of Fungi, Himalaya Publications, NewDelhi.<br>
										7. Salle, A.J., (1974). Principles of Bacteriology, Tata McGraw-Hill Publishing Company, New Delhi. </p>
									
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp; CBCS <strong> Course</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                <p><a class="a-link-arrow" href="professional_purposes.php"> Writing for Academic and Professional Purposes</a></p>
                                    </section>


                                   <section class="link-arrow">
                <p><a class="a-link-arrow" href="corporate_social_responsibility.php"> Corporate Social Responsibility</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="advertising_psychology.php"> Advertising Psychology</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="data_management_and_analytics.php"> Data Management and Analytics  </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="infectious_diseases_and_control.php" style="color: #2980b9;font-weight: bold;"> Infectious Diseases and Control </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="investment_management.php">  Investment Management </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="fundamentals_of_finance.php"> Fundamentals of Finance</a></p>
                                    </section>



                                </div>
                                <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                        </h4>

                                        <?php include ('../php/sideMenu.php'); ?>
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

                    <!--						                                </div>-->
                    <?php include ('../php/alerts.php');  ?>
                    <?php include('../php/footer.php'); ?>
                    
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
