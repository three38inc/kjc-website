<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website"; $imgNum = mt_rand(1,10);/*$ROOT is the base URL & should on top of every PAGE */?> 
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
                                    <img src="../images/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
										   <span>&nbsp; Orientation Schedule <strong> (UG)</strong></span>
									 </h4>
									
								<table border="0" class="table table-bordered table-hover">
  <tr>
    <td width="63"><p align="center"><strong>SL.NO</strong></p></td>
    <td width="64" nowrap="nowrap"><p align="center"><strong>COURSE</strong></p></td>
    <td width="87" nowrap="nowrap"><p align="center"><strong>SECTION(S)</strong></p></td>
    <td width="64" nowrap="nowrap"><p align="center"><strong>DATE</strong></p></td>
    <td width="111" nowrap="nowrap"><p align="center"><strong>TIME</strong></p></td>
    <td width="156" nowrap="nowrap"><p align="center"><strong>VENUE</strong></p></td>
  </tr>
  <tr>
    <td width="63" nowrap="nowrap" rowspan="7"><p align="center"><strong>1</strong></p></td>
    <td width="64" nowrap="nowrap" rowspan="7"><p align="center"><strong>B.COM</strong></p></td>
    <td width="87" nowrap="nowrap"><p align="center"><strong>A</strong></p></td>
    <td width="64" nowrap="nowrap" rowspan="7"><p align="center"><strong>20.7.17</strong></p></td>
    <td width="111" nowrap="nowrap" rowspan="7"><p><strong>1:45-3:30 PM</strong></p></td>
    <td width="156" rowspan="7"><p><strong>MAIN AUDI,                      UG BLOCK</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap"><p align="center"><strong>B</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap"><p align="center"><strong>C</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap"><p align="center"><strong>D</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap"><p align="center"><strong>P</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap"><p align="center"><strong>T</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap"><p align="center"><strong>ACCA</strong></p></td>
  </tr>
  <tr>
    <td width="63" nowrap="nowrap" rowspan="4"><p align="center"><strong>2</strong></p></td>
    <td width="64" nowrap="nowrap" rowspan="4"><p align="center"><strong>BBA </strong></p></td>
    <td width="87" nowrap="nowrap"><p align="center"><strong>A</strong></p></td>
    <td width="64" nowrap="nowrap" rowspan="4"><p align="center"><strong>12.7.17</strong></p></td>
    <td width="111" nowrap="nowrap" rowspan="4"><p><strong>11 AM  -12:30 PM</strong></p></td>
    <td width="156" rowspan="4"><p><strong>MAIN AUDI,                              UG BLOCK</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap"><p align="center"><strong>B</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap"><p align="center"><strong>C</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap"><p align="center"><strong>D</strong></p></td>
  </tr>
  <tr>
    <td width="63" nowrap="nowrap" rowspan="5"><p align="center"><strong>3</strong></p></td>
    <td width="64" nowrap="nowrap" rowspan="5"><p align="center"><strong>BA</strong></p></td>
    <td width="87" nowrap="nowrap"><p align="center"><strong>HEP</strong></p></td>
    <td width="64" nowrap="nowrap" rowspan="5"><p align="center"><strong>24.7.17</strong></p></td>
    <td width="111" nowrap="nowrap" rowspan="5"><p><strong>9 - 10:30 AM</strong></p></td>
    <td width="156" rowspan="5"><p><strong>MINI AUDI-1,                           UG BLOCK</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap"><p align="center"><strong>HTJ</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap"><p align="center"><strong>JPCS</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap"><p align="center"><strong>JPSENG</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap"><p align="center"><strong>JPENG</strong></p></td>
  </tr>
  <tr>
    <td width="63" nowrap="nowrap" rowspan="3"><p align="center"><strong>4</strong></p></td>
    <td width="64" nowrap="nowrap" rowspan="3"><p align="center"><strong>BCA</strong></p></td>
    <td width="87" nowrap="nowrap"><p align="center"><strong>A</strong></p></td>
    <td width="64" nowrap="nowrap" rowspan="3"><p align="center"><strong>12.7.17</strong></p></td>
    <td width="111" nowrap="nowrap" rowspan="3"><p><strong>2:35-4:30 PM</strong></p></td>
    <td width="156" rowspan="3"><p><strong>MAIN AUDI,                            UG BLOCK</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap"><p align="center"><strong>B</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap"><p align="center"><strong>C</strong></p></td>
  </tr>
  <tr>
    <td width="63" nowrap="nowrap" rowspan="4"><p align="center"><strong>5</strong></p></td>
    <td width="64" nowrap="nowrap" rowspan="4"><p align="center"><strong>B.SC</strong></p></td>
    <td width="87" nowrap="nowrap"><p align="center"><strong>CSME</strong></p></td>
    <td width="64" nowrap="nowrap" rowspan="2"><p align="center"><strong>12.7.17</strong></p></td>
    <td width="111" nowrap="nowrap" rowspan="2"><p><strong>2:35-4:30 PM</strong></p></td>
    <td width="156" rowspan="2"><p><strong>MAIN AUDI,                            UG BLOCK</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap"><p align="center"><strong>CSMS</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap"><p align="center"><strong>BT</strong></p></td>
    <td width="64" nowrap="nowrap" rowspan="2"><p align="center"><strong>24.7.17</strong></p></td>
    <td width="111" nowrap="nowrap" rowspan="2"><p><strong>2:35-4:30 PM</strong></p></td>
    <td width="156" rowspan="2"><p><strong>ROOM NO:308,                  UG BLOCK</strong></p></td>
  </tr>
  <tr>
    <td width="87" nowrap="nowrap" valign="bottom"><p align="center">MB</p></td>
  </tr>
</table>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Learn <strong>Placements</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="about_cecr.php">Introduction</a></p>
                                    </section>
                                        <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="../pdf/2017/placements/2016_17_student_placed.pdf" target="_blank">Student Placed 2016-17</a></p>
                                   </section>
                                     <section class="link-arrow">   
                <p><a class="a-link-arrow" href="talent_transformation_team.php">Talent Transformation Team(TTT)</a></p>
                                    </section><section class="link-arrow">
                                    
                                        <p><a class="a-link-arrow" href="gate.php">GATE</a></p>
                                    </section><section class="link-arrow">
                                    
                                        <p><a class="a-link-arrow" href="placement_process.php">Placement Process</a></p>
                                    </section><section class="link-arrow">
                                    
              <p><a class="a-link-arrow" href="orientation_training.php" style="color: #2980b9;font-weight: bold;">Placement Orientation & Training Programme</a></p>
                                    </section><section class="link-arrow">
                                    
          <p><a class="a-link-arrow" href="industry_institute_interfac.php">Industry Institute Interface(3iCell)</a></p>
                                    </section><section class="link-arrow">
                                    
                                        <p><a class="a-link-arrow" href="placement_initiatives.php">Placement Initiatives @ KJC</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="our_recruiters.php">Our Recruiters</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="placement_extension_services.php">Placement Extension Services</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="udyogVichaar.php">UdyogVichaar</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="transcend.php">Transcend</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="photo_gallery.php">Photo Gallery</a></p>
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
