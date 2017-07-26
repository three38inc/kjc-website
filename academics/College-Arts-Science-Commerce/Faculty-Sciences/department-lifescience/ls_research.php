<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST'].""; $imgNum = mt_rand(1,19); /*$ROOT is the base URL & should on top of every PAGE */?> 
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
    <!--        <link rel="stylesheet" href="css/res-navtabs.css">-->
    <!--custom css-->
    <link href="../../../../css/custom.css" rel="stylesheet">
    <link href="../../../../css/innerpage.css" rel="stylesheet">
    <!-- javascript -->
    <script src="../../../../js/jquery-1.11.0.min.js"></script>
    <script src="../../../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../../js/respond.js"></script>
    <script src="../../../../js/custom.js"></script>
    <script src="../../../../js/fakeLoader.js"></script>
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
            <?php include ('../../../../php/navbar.php');  ?>
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
                        <!--        <div class="row">-->
                        <div class="row" style="margin-top: 100px; padding-left: 10px; padding-right: 10px;">

                        </div>
                        <div class="row">
                            <div class="marginTopDiv">&nbsp;</div>
                            <div class="col-lg-9">
                                <div class="content-left myWelcome wow fadeIn">
                                  <img src="images/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />
                             
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp; Research <strong>  Center</strong></span>
                                    </h4>
                                 
                                      
									<p align=justify>The Department of Life Sciences  has been endowed the status of a Research Centre in Biotechnology of Bangalore University during January 2011. A state-of-the-art research complex is set up in the college to facilitate research and to carry out major research projects and to pursue Ph.D. The facility features laboratories with full scale research in Plant Tissue Culture, Animal Cell Culture, Microbiology and Phytochemistry. Central Instrumentation facility is a special feature of the Research complex. Collaborative projects have been carried out by the department in association with industries / research labs. Post graduate students of the department are involved in minor research projects and are efficiently guided by the faculty.</p>

                                    
                                    
                                    <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            Research Projects : Ongoing self funded/industry projects
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">

                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>S.No</th>
                                                                        <th>Project Title</th>
                                                                        <th>Investigators</th>
                                                                        <th>Collaboration/ Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>Microbial Screening for different applications 
                                                                        </td>
                                                                        <td>Leads Pvt. Ltd, Bangaluru &Dept of LS,  KJC  (Dr. Elcey CD)
                                                                        </td>
                                                                        <td>Leads PvtLtd, Bangaluru / Ongoing
                                                                        </td>
                                                                    </tr>
                                                                     <tr>
                                                                        <td>2.</td>
                                                                        <td>Phyto-compound screening
                                                                        </td>
                                                                        <td>Leads Pvt. Ltd, Bangaluru & Dept of LS,  KJC (Dr. Elcey CD)
                                                                        </td>
                                                                        <td>Leads Pvt. Ltd, Bangaluru /Ongoing 
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                    <tr>
                                                                        <td>3.</td>
                                                                        <td>Microbial Screening and cell line studies
                                                                        </td>
                                                                        <td>CellTricks Biotech Pvt Ltd., Bengaluru & Dept of LS,  KJC ( Dr. Elcey)
                                                                        </td>
                                                                        <td>CellTricks Biotech Pvt Ltd., Bengaluru/  On going
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                    
                                                                    <tr>
                                                                        <td>4.</td>
                                                                        <td>Nuetra-ceutical Formulation of Bioactive compounds
                                                                        </td>
                                                                        <td>Dr. Jude Calistus & Dr. S. Vijayanand 
                                                                        </td>
                                                                        <td>Self-Finance- Minor Project /Ongoing
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                       
                                                                    <tr>
                                                                        <td>5.</td>
                                                                        <td>Phytochemical Analysis of various plants
                                                                        </td>
                                                                        <td> Dr. S. Vijayanand
                                                                        </td>
                                                                        <td>Self-Finance- Minor Project /Ongoing
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                     <tr>
                                                                        <td>6.</td>
                                                                        <td>Synthesis of magnetite nano particles and its toxicity studies
                                                                        </td>
                                                                        <td>Dr. Elcey CD
                                                                        </td>
                                                                        <td>Self-Finance- Minor Project/ Ongoing
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    
                                    
                                    
                                    <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingFour">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                            Projects applied to Government funding agency
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                    <div class="panel-body">

                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>S.No</th>
                                                                        <th>Project Title</th>
                                                                        <th>Funding Agency</th>
                                                                        <th>Investigators</th>
                                                                        <th>Project Estimated Cost</th>
                                                                        <th>Duration</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1.</td>
                                                                        <td>Study on Bio- demineralization of Coal and Lignite using Microorganisms 
                                                                        </td>
                                                                        <td>SERB, DST, INDIA 

                                                                        </td>
                                                                        <td>Dr. Elcey CD
                                                                        </td>
                                                                        <td>85, 87, 400
                                                                        </td>
                                                                        <td>3 &nbsp; &nbsp;Years 
                                                                        </td>
                                                                                                                                   
                                                                                        
                                                                                                                                        
                                                                    </tr>
                                                                     <tr>
                                                                        <td>2.</td>
                                                                        <td>Isolation and characterization of Phytochemicals from Michelia Champaca and Thespesia Populnea for evaluation of Therapeutic Potential
                                                                        </td>
                                                                        <td>VGST, GOVT. KARNATAKA

                                                                        </td>
                                                                        <td>Dr.S. Vijayanand
                                                                        </td>
                                                                         <td>10 &nbsp; &nbsp; Lakhs
                                                                        </td>
                                                                         <td> 2 &nbsp; &nbsp; Years
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                   
                                                                    
                                                                    
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    
                                    
                                    
                                    


                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                     <span>&nbsp;<strong>Programmes</strong> offered</span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bsc_micro.php">B.Sc., Microbiology</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bsc_bio.php">B.Sc., Biotechnology</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="msc_bio.php">M.Sc., Biotechnology</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="msc_micro.php">M.Sc., Microbiology</a></p>
                                    </section>


                                </div>
                                <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span> <strong>Activities</strong></span>
                                        </h4>
                                        
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="membership_pbodies.php">Membership in Professional Bodies</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty.php">Faculty Profile</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="ls_research.php" style="color: #2980b9;font-weight: bold;">Research Centre </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bio-science_laboratory.php">Bio-science Laboratory</a></p>
                                    </section>

                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="projects.php">Projects</a></p>
                                    </section>
                                        
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="achievements.php">Achievements</a></p>
                                    </section>
                                        
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bestpractices.php">Best Practices</a></p>
                                    </section>
                                        
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="careeropportunity.php">Career Opportunity</a></p>
                                    </section>
                                        
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="skilldevelop.php">Skill Development Activities</a></p>
                                    </section>
                                        
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="swc.php">Seminars,Workshops and Conferences</a></p>
                                    </section>
                                        
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="pub.php">Publications</a></p>
                                    </section>
                                        
                                  <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="patent.php">Patents </a></p>
                                    </section>
                                        
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="book.php">Book Publications</a></p>
                                    </section>
                                        
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="envtclub.php">Academic clubs</a></p>
                                    </section>
                                        
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="acad.php">Academic Calendar</a></p>
                                    </section>
                                    </div>
                                     <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                        </h4>

                                        <?php include ('../../../../php/sideMenu.php'); ?>
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
                    <?php include ('../../../../php/alerts.php');  ?>
                    <?php include('../../../../php/footer.php'); ?>
                    <?php include('../../../../php/morphingSearch.php'); ?>
                </div>



            </div>
            <!--/st-content-inner-->
        </div>
        <!-- this is the wrapper for the content-->
    </div>
    <!--st-pusher-->

    <!--st-container-->

    <script src="../../../../js/cbpFWTabs.js"></script>
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
    <script src="../../../../js/morphingSearch.js"></script>
    <script src="../../../../js/sidebarEffects.js"></script>
    <script src="../../../../js/transit.js"></script>
    <script src="../../../../js/sly.js"></script>
    <script src="../../../../js/customSly.js"></script>
    <script src="../../../../js/wow.min.js"></script>
    <!--    <script src="js/res-navtabs.js"></script>-->
    <script src="../../../../js/scripts.js"></script>
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
