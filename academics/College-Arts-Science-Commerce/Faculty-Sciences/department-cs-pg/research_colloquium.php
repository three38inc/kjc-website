<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."";$imgNum=mt_rand(1,4);/*$ROOT is the base URL & should on top of every PAGE */?> 
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
            <?php require ("php/navbar.php"); ?>
        </div>
    </div>
    <div id="st-container" class="st-container">
        <?php include("../../../../php/offCanvasMenu.php"); ?>
        <!-- content push wrapper -->
        <div class="st-pusher">
            <div class="st-content">
                <!-- this is the wrapper for the content -->
                <div class="st-content-inner">
                    <div class="container">
                        <div class="row" style="margin-top: 100px; padding-left: 10px; padding-right: 10px;">

                        </div>



                        <div class="row">
                            <div class="col-lg-9">
								 <div class="content-left myWelcome wow fadeIn">
									   <img src="images/<?php echo $imgNum;?>.jpg" class="img-responsive" style="margin-bottom:20px;" />

                                <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                    <span>&nbsp;Research <strong> Colloquium  </strong></span></h4>
								
									 <p align=justify>Research Colloquium is a prestigious programme held in the Dept. of Computer Science (UG and PG). At this seminar series faculty members present their current work on their domain/ their area of research. The presenters represent a range of disciplines and methodological approaches in the field of IT. This platform provides an opportunity to receive constructive feedback to refine one’s work.</p>
									 <p align=justify>The sessions are conducted twice a year. It was initiated in the year 2010 – 11. Thereafter 7 sessions were held in the following years. This programme is held with the Objectives:</p>
<p>1.	To promote research culture among the faculty members.  <br>
2.	To provide a platform for teachers to share the developments happening in the researches undertaken.<br>
										 3.	To give insight to the recent developments in their respective domain.</p>
									 <p><b>The details of the sessions held:</b></p>
									 
									 <table border="0" class="table table-bordered table-hover">
  <tr>
    <td valign="top"><p align="center"><strong>Academic Year</strong></p></td>
    <td valign="top"><p align="center"><strong>Session</strong></p></td>
    <td valign="top"><p align="center"><strong>Date</strong></p></td>
    <td valign="bottom"><p align="center"><strong>Session</strong></p></td>
  </tr>
  <tr>
    <td valign="top"><p>2010 - 11</p></td>
    <td valign="top"><p align="center">1</p></td>
    <td valign="top"><p>26. 03. 11</p></td>
    <td valign="bottom"><ol>
      <li>Ms. Suja Stanley –Comparative study of data compression algorithms.</li>
      <li>Ms. Neethu Sen – UBANDU</li>
      <li>Mr. Rajesh H – Data mining: Facts and applications.</li>
    </ol>
      <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td valign="top"><p>2011 - 12</p></td>
    <td valign="top"><p align="center">2</p></td>
    <td valign="top"><p>23. 07. 11</p></td>
    <td valign="bottom"><ol>
      <li>&lsquo;Watermarking, A passion security&rsquo; – by Mr. Rajesh .H . He presented about the recent trends in water marking and brought to light the scope of research in this field.</li>
      <li>&lsquo;Research – an eye opener&rsquo; – jointly by Mr. Velmurugan. R and Mrs. Ambika. P. the presentation was on how to embark on a Ph.D programme  and how to tackle the various hurdles the we may come across.</li>
    </ol></td>
  </tr>
  <tr>
    <td valign="top"><p>2011 – 12</p></td>
    <td valign="top"><p align="center">3</p></td>
    <td valign="top"><p>03. 03. 12</p></td>
    <td valign="bottom"><ol>
      <li>Prof. S  Nagendra- &ldquo;Analysis of Brain waves&rdquo;</li>
      <li>Prof. Prathap.G, Prof. Ramanathan .G and Prof. Akilan.S on the topic &ldquo;A Research on Security Algorithm against Cyber Attacks&rdquo;</li>
    </ol></td>
  </tr>
  <tr>
    <td valign="top"><p>2012 – 13</p></td>
    <td valign="top"><p align="center">4</p></td>
    <td valign="top"><p>25.08. 12</p></td>
    <td valign="bottom"><ol>
      <li>Mr. Aswin Herbert presented a paper entitled &ldquo;Brain Finger printing&rdquo;.</li>
      <li>Mrs. Mary Jacob presented the paper – &ldquo;DNA computing</li>
    </ol></td>
  </tr>
  <tr>
    <td valign="top"><p>2012 – 13</p></td>
    <td valign="top"><p align="center">5</p></td>
    <td valign="top"><p>12. 01 . 13</p></td>
    <td valign="bottom"><p><u>Prof.Bino Joseph</u> (Dept. of Electronics) on the topic <u>&lsquo;Understanding High Definition&rsquo;</u>.</p></td>
  </tr>
  <tr>
    <td valign="top"><p>2013 - 14</p></td>
    <td valign="top"><p align="center">6</p></td>
    <td valign="top"><p>13.12.13</p></td>
    <td valign="bottom"><p>&ldquo;An overview of Tools useful for Research in Computer research &ldquo;<br />
      jointly    by <br />
      Prof. R Kumar<br />
      Prof. Jyothi Manoj<br />
      Prof. Aruna Devi K<br />
      Prof. Ambika</p></td>
  </tr>
  <tr>
    <td valign="top"><p>2014 - 15</p></td>
    <td valign="top"><p align="center">7</p></td>
    <td valign="top"><p>25 .07 . 14</p></td>
    <td valign="bottom"><p>Dr. Shantanu Godbole, Senior Researcher and Manager - Cognitive Text  Analytics, IBM Research – India- &ldquo;Genres of    Research in Computer Science&rdquo;</p></td>
  </tr>
  <tr>
    <td valign="top"><p>2014 - 15</p></td>
    <td valign="top"><p align="center">8</p></td>
    <td valign="top"><p>13.04. 2015.</p></td>
    <td valign="top"><p>1. Convergence and Consociation of Big Data and Cloud - <br />
      Prof.    Sandhya Soman.<br />
      2.    Managing and Expanding HCI (Human Computer Interaction) in a Computational Eco Systems: A Living style in a Monitored – Reliant World in Digital Crowd.<br />
      Prof. H. Rajesh &amp; Prof. Anthony Vincent<br />
      3. Ontology based Information Retrieval in Semantic Web.<br />
      Prof. Anitha DSouza</p></td>
  </tr>
  <tr>
    <td valign="top"><p>2015-2016</p></td>
    <td valign="top"><p align="center">9</p></td>
    <td valign="top"><p>17.11.2015</p></td>
    <td valign="top"><p>Research Ideas in Data Mining using Rapid Miner Tool – Dr.Ambika and Prof.Arunadevi</p></td>
  </tr>
  <tr>
    <td valign="top"><p>2015-2016</p></td>
    <td valign="top"><p align="center">10</p></td>
    <td valign="top"><p>15.04.2016</p></td>
    <td valign="top"><p>Introduction to <strong>R</strong> Software – Prof.Suni Ajaykumar and Prof.Liji George</p></td>
  </tr>
  <tr>
    <td valign="top"><p>2016-2017</p></td>
    <td valign="top"><p align="center">11</p></td>
    <td valign="top"><p>26.11.2016</p></td>
    <td valign="top"><p>Dr. Subashini. P, Professor, Department of Computer Science, Avinashilingam Institute for Home Science and Higher Education for Women, Coimbatore.</p></td>
  </tr>
  <tr>
    <td valign="top"><p>2016-2017</p></td>
    <td valign="top"><p align="center">12</p></td>
    <td valign="top"><p>05.05.2017</p></td>
    <td valign="top"><p>Session I: &quot;Scientific Chart Recognition &quot; by Dr.Nagarajan.S </p>
      <p>Session II: &quot;CloudSim in &nbsp;Research &quot; by Prof. Vinothina.V </p>
      <p>Session III: &quot;Augmented Reality- &nbsp;Research &nbsp;Perspectives &quot; by Prof. Ranjitha M </p>
      <p>&nbsp;</p></td>
  </tr>
</table>


								</div></div>
                            <div class="col-lg-3" style="margin-top:1em;">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;<strong>Activities</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="national_conference.php">National Conference</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="international_conference.php">International Conference</a></p>
                                    </section>
                                   
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="orientation_program.php">Orientation Program</a></p>
                                    </section>
									
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="aptitude_enhancement_program.php">Aptitude Enhancement Program</a></p>
                                    </section>
									
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="technical_communities.php">Technical Communities</a></p>
                                    </section>
									
									
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="club_activity.php" style="color: #2980b9;font-weight: bold;">Club Activity</a></p>
                                    </section>
									
									
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="it_fests.php">IT Fests</a></p>
                                    </section>
									
								    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="celebrations.php">Celebrations</a></p>
                                    </section>
                                	
								</div>
								
								 <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>Department <strong>Special</strong></span>
                                        </h4>
                                        
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="achivements.php">Achievements</a></p>
                                    </section>
                                        
                                        <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="it_fests.php">Fests</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="executive_visit.php">Executive Visit</a></p>
                                    </section>
										
										 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="best_practices.php">Best Practices</a></p>
                                    </section>
										
										 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty.php">Faculty Profile</a></p>
                                    </section>
										
										 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_calendar.php">Academic Calendar</a></p>
                                    </section>
										
										 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_projects.php">Academic Projects</a></p>
                                    </section>
										
										 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="seminars_workshops.php">Seminars/Workshops</a></p>
                                    </section>
										
										<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="collaboration_linkage.php">Collaboration and Linkage</a></p>
                                    </section>
										
										<section class="link-arrow">
                                        <p><a class="a-link-arrow" href="news_letter.php">Newsletter</a></p>
                                    </section>
										
									 </div>
								
<div class="content-right new-content-right wow fadeIn" style="margin-left:2px; margin-right: 2px;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                    </h4>
                                    <?php include ('../../../../php/sideMenu.php'); ?>
                                </div>
                                <div class="content-right wow fadeIn" style="padding:10px;padding-bottom: 0px;">
                                    <div class="fb-page" data-href="https://www.facebook.com/KristuJayantiCollege" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                                        <div class="fb-xfbml-parse-ignore">
                                            <blockquote cite="https://www.facebook.com/KristuJayantiCollege"><a href="https://www.facebook.com/KristuJayantiCollege">Facebook</a></blockquote>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
						</div></div>

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
    <script src="../../../../js/morphingSearch.js"></script>
    <script src="../../../../js/sidebarEffects.js"></script>
    <script src="../../../../js/transit.js"></script>
    <script src="../../../../js/sly.js"></script>
    <script src="../../../../js/customSly.js"></script>
    <script src="../../../../js/wow.min.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
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
        });

    </script>
</body>

</html>
