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
                                        <span>&nbsp;B.Sc., <strong> Biotechnology, Biochemistry, Genetics (BBG)</strong></span></h4>
									
									
									<p><b>Course Duration: 3 Years / Six Semesters</b></p>
									<p><b style="color: #cd6e08;font-weight: bold;">Eligibility</b><br>
										Pass in 10 + 2 / Pre-University Course / Equivalent. Candidate should have studied Biology / Chemistry as one of the subjects.</p>
									<p align=justify><b style="color: #cd6e08;font-weight: bold;">Biotechnology</b><br>
										Biotechnology is an area of multi-disciplinary sciences, involving a variety of distinct subjects where living organisms or their derivatives are modified and put into effective use in catering the welfare of humanity. Applications of Biotechnology have been found in several sectors, including Agriculture, Food Science and Medicine.</p>

									<p align=justify>Students are showing tremendous interest in Biotechnology, the reason behind emerges from the fact that the technical and procedural application of Biotechnology touches a vast array of disciplines. This opens up a lot of job portals for students who are seeking a stable and exciting  career in their life.</p>
									
<p>The course introduces the students to detailed study of Cell Biology, Genetics, Microbiology, Biophysics, Molecular Biology, Recombinant DNA Technology, Genetic Engineering, Environmental Biotechnology, Animal Biotechnology, Immunology, Industrial Biotechnology and Plant Biotechnology and makes a student a biotechnologist who can pursue further and contribute to this field in the area of one's interest.</p>
									
									<p align=justify><b style="color: #cd6e08;font-weight: bold;">Biochemistry</b><br>
										Biochemistry deals with understanding living organisms in chemical terms. Areas illuminated by bio- chemical knowledge have broadened enormously. The profound impact of biochemistry on medicine, agriculture, pharmaceutical and food science and many other fields is increasing rapidly. The relevance of Biochemistry to society has become more apparent.</p>
									
									<p align=justify>This course incorporates fundamental and exciting developments of Biochemistry as detailed insight into different branches of chemistry like organic, inorganic and physical chemistry and their application in understanding life.</p>
									<p align=justify><b style="color: #cd6e08;font-weight: bold;">Genetics</b><br>
										Genetics has higher prospects in the field of research and development. It also deals with conserving and utilizing the plants, gene bank management, in vitro conservation, in situ conservation including genetic resource and animal breeding.</p>
									<p align=justify>A sound knowledge of genetics is essential for an understanding of all other fields of biology particularly cytology, embryology, molecular biology, physiology, etc. Genetics is a subject that unifies biology and serves as its 'core'.</p>
									<p align=justify>The college recognizes the importance of this subject and offers the course structured in a way that the students get a chance to explore the theoretical and practical aspects of the subject in depth.</p>

									
									
			
				<center><p><a href="curriculum/bsc_bt_2014-17.pdf" target="_blank" class="btn btn-primary btn-xs">Curriculum of B.Sc., Biotechnology   2014 - 17</a></p></center>
								<center><p><a href="curriculum/bsc_biotechnology_curriculum_2015_18.pdf" target="_blank" class="btn btn-primary btn-xs">Curriculum of B.Sc., Biotechnology  2015 - 18</a></p></center>
									<center><p><a href="curriculum/bsc_biotechnology_coursematrix.pdf" target="_blank" class="btn btn-primary btn-xs">Course Matrix of B.Sc., Biotechnology  University batch</a></p></center>


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
                                        <p><a class="a-link-arrow" href="ls_research.php">Research Centre </a></p>
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
