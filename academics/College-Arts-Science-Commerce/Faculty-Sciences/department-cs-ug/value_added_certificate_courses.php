<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website"; $imgNum = mt_rand(1,19);/*$ROOT is the base URL & should on top of every PAGE */?> 
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
            <?php require ("../../../../php/navbar.php"); ?>
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
									 <img src="images/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />

                                <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                    <span>&nbsp; Value Added and <strong> Certificate Courses  </strong></span></h4>
                               
                                <p align=justify>At Kristu Jayanti College we believe in going beyond books and equipping our students with real life skills that turn out to be invaluable in their personal and professional life. The department conducts Value Added Courses aiming to provide an additional, learner centric, skill oriented technical training with the primary objective of improving the employability skills of the students. The various value added courses offered for the academic year (2016-17) are as follows:</p>
                                
                                <p><b>Value Added Courses</b></p>
      <table class="table table-bordered" align=center>
  <thead>
    <tr>
      
      <th>Class</th>
      <th>Value Added Program</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>II BCA</td>
      <td>Basic HTML & XML </td>
      
    </tr>
    <tr>
     
      <td>II B.Sc.(CSMS/CSME)</td>
      <td>MS EXCEL</td>
     
    </tr>
    <tr>
     <td>III BCA</td>
      <td>PL/SQL </td>
      </tr>
     <tr>
     <td>IV BCA</td>
      <td>VB.NET </td>
      </tr>
       <tr>
     <td>V B.Sc.(CSMS/CSME)</td>
      <td>ASP.NET </td>
      </tr>
       <tr>
     <td>V BCA & V BSc.(CSMS/CSME)</td>
      <td>QUANTITATIVE APTITUDE</td>
      </tr>
      </tbody>
          
</table>

<p><b>Certificate Courses</b></p>

     <table class="table table-bordered" align=center>
 <tr>
      
      <td>V BCA</td>
      <td>EMC2  Certification Course - Information Storage and Management</td>
      </tr>
  
  
    <tr>
     <td>I BCA & III BCA</td>
      <td>NSDC Animation Certification Course  </td>
         </tr></table>
         
         <p><b>Bridge Course</b></p>
        
            <table class="table table-bordered" align=center>
 <tr>
      
      <td>I B.Sc.(CSMS/CSME) </td>
      <td>Basic Problem solving techniques and Basic Mathematics.</td>
      </tr>
  </table>   
                                
                                <p><b>Open Badges</b></p>
        
            <table class="table table-bordered" align=center>
 <tr>
      
      <td>VMware Digital Badges</td>
      <td>Courses for the VMware Digital Badge are:<br>
          <li>Data Center Virtualization Fundamentals [V6]</li>
          <li>Data Center Virtualization Fundamentals [V6]</li>
          <li>VMware Network Virtualization Fundamentals</li>
          <li>VMware Cloud Fundamentals</li>
</td>
      </tr>
  </table>   
                            
                            
								</div></div>
                            <div class="col-lg-3" style="margin-top:1em;">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;<strong>Programs Offered </strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bca.php">BCA
                                            <font size=2>(Bachelor of Computer Applications)</font></a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bsc_csme.php">B.Sc. CSME <font size=2>(Computer Science, Mathematics, Electronics)</font></a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="bsc_csms.php">B.Sc. CSMS
                                            <font size=2>(Computer Science, Mathematics, Statistics)</font></a></p>
                                    </section>
                                </div>
                                
                                <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span> <strong>Activities</strong></span>
                                        </h4>
                                        
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="vission_mission_goals.php">Vision,Mission and Goals</a></p>
                                    </section>
                                        
                                        <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty.php">Faculty Profile</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_calendar.php">Academic Calender</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="fests.php">Fests</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="value_added_certificate_courses.php" style="color: #2980b9;font-weight: bold;">Value Added & Certificate Courses</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="computer_academy.php">Computer Academy</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="achivements.php">Achievements</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="best_practices.php">Best Practices</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="carer_opportunity.php">Career Opportunity</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="seminars_workshop.php">Seminars & Workshops</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="guest_lectures.php">Guest Lectures</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="activities.php">Activities</a></p>
                                    </section>
                                        
                                         <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="faculty_development_program.php">Faculty Development Program</a></p>
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
