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
                                   <img src="images/lifesciences_banner.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                 
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Seminars, Workshops and<strong> Conferences</strong></span></h4>
									
									     <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading1">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                                           Activities Organized (2015-2017)
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                                                    <div class="panel-body">

                                                        <div class="table-responsive">
           <table border="1" class="table table-bordered table-hover">
  <tr>
    <td width="59" valign="top"><p align="center"><strong>S.No</strong></p></td>
    <td width="95" valign="top"><p align="center"><strong>Date</strong></p></td>
    <td width="207" valign="top"><p align="center"><strong>Title</strong></p></td>
    <td width="257" valign="top"><p align="center"><strong>Resource person(s) with designation</strong></p></td>
    <td width="180" valign="top"><p align="center"><strong>No of participants</strong></p></td>
  </tr>
										<tr>
    <td width="59" valign="top"><p>1</p></td>
    <td width="95" valign="top"><p align="center">20/03/2017</p></td>
    <td width="207" valign="top"><p align="center">FDP Data Analysis in Natural sciences, </p></td>
    <td width="257" valign="top"><p>Dr.K.P.Suresh,  Scientist, NIVEDI, Bangalore<br />
      Dr.Sridaran, Chairperson, IEC-CRICR</p></td>
    <td width="180" valign="top"><p align="center">25</p></td>
  </tr>
										<tr>
    <td width="59" valign="top"><p>2</p></td>
    <td width="95" valign="top"><p align="center">25/01/2017</p></td>
    <td width="207" valign="top"><p align="center">National Seminar on Biofilm Technology</p></td>
    <td width="257" valign="top"><p><strong>Dr. AnandKhedkar</strong><br />
      Associate Director<br />
      ApotexPharmachem India Pvt. Ltd, Bengaluru</p>
      <p><strong>Dr. S. MURUGAN</strong><br />
        School of Biotechnology &amp; Health Sciences,<br />
        Karunya University, Coimbatore, Tamil Nadu</p>
      <p>&nbsp;</p>
      <p><strong>Dr. B. ANANDKUMAR</strong><br />
        Scientific Officer - D <br />
        Surface Modification and Characterization Section,<br />
        Corrosion Science and Technology Division,<br />
        Metallurgy and Materials Group, Indira Gandhi    Centre for Atomic Research(IGCAR)<br />
        Kalpakkam, Tamil Nadu.</p>
      <p>&nbsp;</p>
      <p><strong>Dr.KUSHI ANAND</strong> <br />
        Amit Singh Group, Centre for Infectious Disease Research (CIDR)<br />
        Indian Institute of Science (IISc) Bangalore, Karnataka</p>
      <p>&nbsp;</p>
      <p><strong>Dr. C.NAGARAJ</strong><br />
        Professor,<br />
        PES Institute of Medical Sciences and Research (PES), Kuppam, Andhra Pradesh</p>
      <p>&nbsp;</p>
      <p><strong>Dr.KAVITHA G.</strong> <br />
        Scientist,<br />
        Institute of Animal Health and Veterinary Biologicals (IAHVB), Bengaluru </p></td>
    <td width="180" valign="top"><p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <p align="center">53</p></td>
  </tr>
  
  <tr>
    <td width="59" valign="top"><p>3</p></td>
    <td width="95" valign="top"><p>09/03/2016</p></td>
    <td width="207" valign="top"><p>National Seminar on Tropical infectious diseases(NASTID)</p></td>
    <td width="257" valign="top"><p align=justify>Dr.UV Babu, Head, Department of Phytochemistry,<br />
      Himalaya Drugs Company ltd, Bangalore.<br />
      Dr.Ramanujam Srinivasan, Reader-F,School of Biological Sciences, National institute of Science Education and Research(NISER), Khurda, odisha<br />
      Dr.P.Ramadaa, Former Prof and Head, Department of Animal Biotechnology, Madras Veterinary college, Chennai<br />
      Dr.Manjunath, Chairman, Department of Biotechnology and Microbiology, Bangalore university, Bengaluru</p></td>
    <td width="180" valign="top"><p>30+140(UG &amp;PG)</p></td>
  </tr>
  <tr>
    <td width="59" valign="top"><p>4</p></td>
    <td width="95" valign="top"><p>&nbsp;</p>
      <p>19/12/2016</p></td>
    <td width="207" valign="top"><p align="center">&nbsp;</p>
      <p align="center">FDP-Workshop on BioInstrumentation</p></td>
    <td width="257" valign="top">Dr.E.M.Elango, Director, ResearchSerene Cell Sciences &amp; Technologies, Bangalore
      <p>&nbsp;</p>
      <p><strong>Mr.S.Srinivasan</strong><br />
        Smart Lab Tech Pvt Ltd, Bangalore</p>
      <p><strong>Mr.K.E.Shankar</strong>, Director, Serene Cell Sciences &amp; Technologies, Bangalore</p>
      <p><strong>Mr.Somashekar</strong>,Scigenics Biotech Ltd, Bangalore</p>
      <p><strong>Mr.Nagaraju</strong><br />
        RPM    Enterprises, Bangalore</p></td>
    <td width="180" valign="top"><p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <p align="center">17</p></td>
  </tr>
  
</table>
														</div>
                                                    </div>
                                                </div>
                                            </div>
									
									
<div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="heading2">
                                                    <h5 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                           Activities Organized (2009-2015)
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                                    <div class="panel-body">

                                                        <div class="table-responsive">
				<table class="table table-bordered">
  <thead>
    <tr>
     
      <th>Title</th>
      <th>Resource Personnel</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td>National Seminar on Modern Biology  Perspective and Prospects (2009)</td>
        <td>Dr.Rathore, Inst.Wood Science & Technology<br>
            Dr.T K S Gowda, GKVK, Bangalore<br>
            Dr. S K Srinivas, Analysis Sciences<br>
            Mr.S P Venkatesh Prasad, Aarom Pharmaceuticals Ind.Ltd.<br>
            Dr.Uday Kumar Ranga, JNCASR<br>
            Dr.Maya Paul, KOP<br>
            Ms.Vidya Virajith, GSK </td>
    </tr>
      <tr>
     <td>National Seminar on "Evolvingtrends in Bioprocess Engineering" (2010)</td>
      <td>Dr. Divakar, Dy. CFTRI<br>
Dr. Keshav Nireshwalia, CFTRI<br>
Mr. Ganesh Ramu, United Breweries<br>
Dr. U V Babu, Himalaya Healthcare<br>
Dr. Subhasis, Millipore India Pvt. Ltd.<br>
Dr. Gurpreet Kalsi, ITC Ltd<br>
Dr. Baladev, CFTRI<br>
Mr. Nitesh Dave, Biocon, Bangalore</td>
    </tr>
       <tr>
     <td>National Conference on Plant Diversity: prospects and problems of conservation (2010) supported by Dept. of IT, BT and S & T, Govt. of Karnataka</td>
      <td>Mr. K. Arul Thomas , Robust Mushrooms, Tamil Nadu<br>
Mr. Sushant Sekhar, Jayaa Agro Foods, Bangalore<br>
Dr. Paneerselvam , IIHR, Bangalore<br>
Dr. Devaraj Achar, Indo American Hybrid Seeds, Bangalore<br>
Mr. Sanjay Bettadpura, Polyclone Bioservices, Bangalore </td>
    </tr>
       <tr>
     <td>National Workshop on Entrepreneurship for Post Graduate Life Science Students (2011) in association with NEN</td>
      <td>Mr. K. Arul Thomas , Robust Mushrooms, Tamil Nadu<br>
Mr. Sushant Sekhar, Jayaa Agro Foods, B<br>angalore<br>
Dr. Paneerselvam , IIHR, Bangalore
Dr. Devaraj Achar, Indo American Hybrid Seeds, Bangalore<br>
Mr. Sanjay Bettadpura, Polyclone Bioservices, Bangalore  </td>
    </tr>
     
       <tr>
     <td>Science Academies Lectureworkshop on "Frontiers in Biology" (2013)  in association with National Science Academies</td>
      <td>Prof. Kumar Somasundaram<br>
Prof. K.N. Balaji<br>
Prof. Dipshika Chakravorty<br>
Prof. Nagasuma Chandra<br>
Prof. Annapoorni Rangarajan<br>
Prof. Utpal Nath Indian Institute of Science, Bangalore  </td>
    </tr>
      
      <tr>
     <td>National Seminar on Science and Technology for Human Development (2015) - in association with ISCA, Bangalore Chapter</td>
      <td>Prof. Govindan Rangarajan, IISc, Bangalore<br>
Prof. N.B. Ramachandra, University of Mysore<br>
Dr. Abraham Varghese, NBAII, Bangalore<br>
Prof. Harrold Phillip, SK University, AP,<br>
Prof. M. G. Venkatesha, Bangalore University  </td>
    </tr>
                                        </tbody>
                                    </table></div>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                 
                                    
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                       <span>&nbsp;<strong>Programs Offered</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bsc_micro.php">B.Sc., MicroBiology</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bsc_bio.php">B.Sc., BioTechnology</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="msc_bio.php">M.Sc., Biotechnology </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="msc_micro.php">M.Sc., MicroBiology</a></p>
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
                                        <p><a class="a-link-arrow" href="swc.php" style="color: #2980b9;font-weight: bold;">Seminars,Workshops and Conferences</a></p>
                                    </section>
                                        
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="pub.php">Publications</a></p>
                                    </section>
                                        
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="patent.php">Patent Recognition</a></p>
                                    </section>
                                        
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="book.php">Book Publications</a></p>
                                    </section>
                                        
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="envtclub.php">Environmental Club</a></p>
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
