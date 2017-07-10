<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website"; $imgNum = mt_rand(1,4);/*$ROOT is the base URL & should on top of every PAGE */?> 
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
                                <div class="content-left myWelcome wow fadeIn" style="min-height: 1150px;">
                                    <img src="images/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />
                               
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp; Conferences and <strong> Workshops </strong></span>
                                    </h4>

									<p><b>The following intellectual programmes were conducted by the department in the year 2016-17</b></p>

                                      <table border="0" class="table table-bordered table-hover">
  <tr>
    <td width="46" valign="top"><p><strong>Sl. No.</strong></p></td>
    <td width="100" valign="top"><p align="center"><strong>Date </strong><br />
      <strong>DD/MM/YY</strong></p></td>
    <td width="134" valign="top"><p align="center"><strong>Full Title </strong></p></td>
    <td width="244" valign="top"><p align="center"><strong>Name of the Resource Person(s) with designation</strong></p></td>
    <td width="88" valign="top"><p align="center"><strong>Type of Event*</strong></p></td>
    <td width="96" valign="top"><p align="center"><strong>No of</strong><br />
      <strong>Participants</strong></p></td>
  </tr>
  <tr>
    <td width="46" valign="top"><p>1</p></td>
    <td width="100" valign="top"><p>5&amp;6/10/2016</p></td>
    <td width="134" valign="top"><p>4th International Conference<strong> </strong> On Emerging markets in Accounting, banking    and Finance</p></td>
    <td width="244" valign="top"><p><u>Inauguration</u>: Dr.Philip B Laird<br />
      Vice    president, Trinity western university, Canada.</p>
      <p><u>Sessions I</u>:     CMA Raveendranath Kaushik, Chairman – Professional Development,           ICAI (CMA), Bengaluru Chapter    Member – ICAI, IEDRC, BMA, FIPT, LUB, Chamber of Tax Consultants.</p>
      <p><u>Sessions II</u>:     Shri. S. N. Rangaprasad, Director MSME,<br />
        GOI,    Bangalore.</p>
      <p><u>Sessions III</u>:     CA Vinayak Pai, International GAAP Expert (Consultant and Trainer –    USGAAP and IFRS)</p>
      <p><u>Sessions IV</u>:     Shri. B. Sadashiva Mallya, Vice President, Circle Head, Axis Bank,    Bangalore.</p>
      <p><u>Valedictory</u>:     B K Kulkarni VP Healthcare     Siemens Information Technology     pvt  Ltd.</p>
      <p><strong>&nbsp;</strong></p></td>
    <td width="88" valign="top"><p>Inter</p></td>
    <td width="96" valign="top"><p>221</p></td>
  </tr>
  <tr>
    <td width="46" valign="top"><p>2</p></td>
    <td width="100" valign="top"><p>12/08/2016</p></td>
    <td width="134" valign="top"><p>Workshop    on Equity, Forex and Commodity Market</p></td>
    <td width="244" valign="top"><p>Mr. Himanshu Gupta<br />
      Senior Research Analyst<br />
      Karvy commodities Ltd<br />
      Mr. Sumit Mukerjee<br />
      Head Consultation<br />
      Karvy Commodities Ltd</p></td>
    <td width="88" valign="top"><p>Intra</p></td>
    <td width="96" valign="top"><p>III Sem MCom, MCom(FA) ( 83 Students)</p></td>
  </tr>
  <tr>
    <td width="46" valign="top"><p>3</p></td>
    <td width="100" valign="top"><p>27/06/2016 </p></td>
    <td width="134" valign="top"><p>Research Empowerment Series- A Guest Lecture on    Publications in International Journals. </p></td>
    <td width="244" valign="top"><p>Dr.Justin Paul, Professor, University of Puerto Rico,    USA. </p></td>
    <td width="88" valign="top"><p>Intra </p></td>
    <td width="96" valign="top"><p>39 Faculties </p></td>
  </tr>
  <tr>
    <td width="46" valign="top"><p>4</p></td>
    <td width="100" valign="top"><p>1/07/2016 </p></td>
    <td width="134" valign="top"><p>Orientation    Programme for UGC-NET </p></td>
    <td width="244" valign="top"><p>Dr. Babu V<br />
      M.Com, MBA, NET,    Phd<strong></strong></p></td>
    <td width="88" valign="top"><p>Intra </p></td>
    <td width="96" valign="top"><p>65 Students </p></td>
  </tr>
  <tr>
    <td width="46" valign="top"><p>5</p></td>
    <td width="100" valign="top"><p>29/07/2016</p></td>
    <td width="134" valign="top"><p>Guest    Lecture On Recent Trends in Wealth Management and Security Analysis</p></td>
    <td width="244" valign="top"><p>Shri Srinivasan Lakshminarayana<br />
      CA, Financial Planner.</p></td>
    <td width="88" valign="top"><p>Intra</p></td>
    <td width="96" valign="top"><p>75 Students</p></td>
  </tr>
  <tr>
    <td width="46" valign="top"><p>6</p></td>
    <td width="100" valign="top"><p>06/08/2016 </p></td>
    <td width="134" valign="top"><p>Orientation On    Research Paper Presentation</p></td>
    <td width="244" valign="top"><p>Dr. V. MuthuKumar</p></td>
    <td width="88" valign="top"><p>Intra</p></td>
    <td width="96" valign="top"><p>I Sem MCom/MCom(FA) (80 Students)</p></td>
  </tr>
  <tr>
    <td width="46" valign="top"><p>7</p></td>
    <td width="100" valign="top"><p>16/8/2016</p></td>
    <td width="134" valign="top"><p>Guest    Lecture on Convergence of IFRS and IND AS – Present Scenario</p></td>
    <td width="244" valign="top"><p>Mr.C.A. Shirish Shah<br />
      Chartered Accountant</p></td>
    <td width="88" valign="top"><p>Intra</p></td>
    <td width="96" valign="top"><p>174 Students</p></td>
  </tr>
  <tr>
    <td width="46" valign="top"><p>8</p></td>
    <td width="100" valign="top"><p>15/9/2016 </p></td>
    <td width="134" valign="top"><p>Guest Lecture on Capitaline Data Base </p></td>
    <td width="244" valign="top"><p>Mr Gurumurthy<br />
      Trainer<br />
      Capitaline Database </p></td>
    <td width="88" valign="top"><p>Intra </p></td>
    <td width="96" valign="top"><p>83 Students(First year Mcom, Mcom(FA) Students </p></td>
  </tr>
  <tr>
    <td width="46" valign="top"><p align="center">9</p></td>
    <td width="100" valign="top"><p>16/12/16</p></td>
    <td width="134" valign="top"><p>Guest Lecture on Financial Leverage and Investment    Banking</p></td>
    <td width="244" valign="top"><p>Mr. Scaria George<br />
      Investment Banking Analyst<br />
      Africa Group Limited<br />
      University of cape town<br />
      Johannesburg area<br />
      South Africa</p></td>
    <td width="88" valign="top"><p align="center">Intra</p></td>
    <td width="96" valign="top"><p align="center">II Sem    MCom,MCom(FA) -80 Students</p></td>
  </tr>
  <tr>
    <td width="46" valign="top"><p align="center">10</p></td>
    <td width="100" valign="top"><p>4/2/2017</p></td>
    <td width="134" valign="top"><p>Guest Lecture on Masala Bonds(London Stock    Exchange)</p></td>
    <td width="244" valign="top"><p>Mr.Subramanyam<br />
      Band Valuer<br />
      Tech Mahindra</p></td>
    <td width="88" valign="top"><p align="center">&nbsp;</p></td>
    <td width="96" valign="top"><p align="center">II Sem MCom &amp;    MFA 80 Students </p></td>
  </tr>
</table>                           
                                   


                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Programs  <strong>Offered</strong></span>
                                    </h4>
                                   <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="mcom.php">M.Com</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="mcom_fa.php">M.Com (Financial Analysis)
                                        </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="mcom_fa_cgma.php">M.Com (FA with CGMA)
                                            </a></p>
                                    </section>


                                  

                                 

                                </div>
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Our  <strong>Activities</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="vision_mission.php"> Mission and vision  </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce-fests-pg.php"> Fests </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce-pg-achievements.php"> Achievements  </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerc-pg-bestpractcies.php">Best Practices</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce-pg-carrer-opportunities.php"> Career Opportunities</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty.php"> Faculty Profile
                                        </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_calendar.php"> Academic Calendar
                                            </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce-pg-conferences-workshops.php"> Conferences and Workshops </a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="commerce-pg-newslettter.php"> News Letter</a></p>
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



<!--
                                    <div class="content-right wow fadeIn" style="padding:10px;padding-bottom: 0px;">
                                        <div class="fb-page" data-href="https://www.facebook.com/KristuJayantiCollege" data-height="425" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                                            <div class="fb-xfbml-parse-ignore">
                                                <blockquote cite="https://www.facebook.com/KristuJayantiCollege"><a href="https://www.facebook.com/KristuJayantiCollege">Facebook</a></blockquote>
                                            </div>
                                        </div>
                                    </div>
-->

                                </div>

                            </div>

                        </div>

                    </div>

                    <!--						                                </div>-->
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
<!--    </div>-->
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
