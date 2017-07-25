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
   <!-- <script type="text/javascript">
        $crisp = [];
        CRISP_WEBSITE_ID = "bfee4615-2d13-4129-a9c2-d7b8095e3d0e";
        (function() {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.im/l.js";
            s.async = 1;
            //d.getElementsByTagName("head")[0].appendChild(s);
        })();

    </script>-->
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
							<div class="row" style="margin-top: 100px; padding-left: 10px; padding-right: 10px;">

                        </div>
                       <div class="row">
                                <div class="marginTopDiv">&nbsp;</div>
                                <div class="col-lg-9">
                                    <div class="content-left myWelcome wow fadeIn" style="min-height:1050px">
                                        <img src="../images/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                     
                                        <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Counselling <strong> Center</strong></span>
                                    </h4>
                                 
										
                                     
                                            <p align=justify>The youth of today are on the fast track to compete with one another to excel in every field. As a flipside to it they are subjected to lot of stress and pressure. Most often these pent up emotions lead to depression or mishandled outbursts. To ease out these bottled up emotions the college has a counselling centre and guidance cell that offers comfort, relief and confidentiality. With an in house counsellor available at all time the students receive personal and professional guidance in every aspect of life.</p>
                                            <p align=justify>The institution has a full time Counselor to provide guidance and to help students in their personal problems. The services of the counselor are available to the students.</p>
                                            <p align=justify>As mentors, faculty guide mentees in their personal and academic matters, and maintain a record of their academic and personal profile. The mentor directs the mentee to the college counselor for guidance if needed.</p>
                                            <p align=justify>The existing counselling services give equal importance to women, though the college does not have separate guidance and counseling center for women. <strong>The Women Empowerment Cell</strong> of the institution empowers girls through awareness programmes, talks and extension activities. Expert lectures on 'Women and Atrocities' and 'Women and Gynaecological Issues,' workshops on 'Entrepreneurship' and 'Trafficking,' film reviews and monetary assistance to poor women are some of the activities of the Cell.</p>

                                     
                                    </div>
                                </div>
                                         <div class="col-lg-3">
                        <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                            <h4 style="margin-left:10px;" class="mainheading">
                                <i class="fa fa-bookmark"></i>
                                <span>&nbsp;Student <strong> Services</strong></span>
                            </h4>
                            <section class="link-arrow">
                                <p><a class="a-link-arrow" href="https://kristujayanti.directverify.in/myeasydocs_directverify/directverify/dv_trn_verification.aspx">Online Document Verification</a></p>
                            </section>
                            <section class="link-arrow">
                                <p><a class="a-link-arrow" href="eic.php">Entrepreneurship and Innovation Centre(EIC)</a></p>
                            </section>
                            <section class="link-arrow">   
                                <p><a class="a-link-arrow" href="jayantian_entrepreneurs.php">Jayantian Entrepreneurs</a></p>
                            </section><section class="link-arrow">
                            <p><a class="a-link-arrow" href="counselling_center.php" style="color: #2980b9;font-weight: bold;">Counselling Centre</a></p>
                            </section><section class="link-arrow">
                            <p><a class="a-link-arrow" href="grievance_redressal.php">Grievance Redressal </a></p>
                            </section><section class="link-arrow">
                            <p><a class="a-link-arrow" href="scholarship.php">Scholarship</a></p>
                            </section><section class="link-arrow">
                            <p><a class="a-link-arrow" href="schlorship_loan_facilities.php">Scholarship &amp; Loan Facilities</a></p>
                            </section>
                            <section class="link-arrow">
                                <p><a class="a-link-arrow" href="health_care.php">Health Care</a></p>
                            </section>
                            <section class="link-arrow">
                                <p><a class="a-link-arrow" href="international_student_forum.php">International Student Forum</a></p>
                            </section>
                            <section class="link-arrow">
                                <p><a class="a-link-arrow" href="coaching_center.php">Coaching Centre</a></p>
                            </section>

                        </div>
                        <div class="content-right new-content-right wow fadeIn" style="margin-left:2px; margin-right: 2px;">
                            <h4 style="margin-left:10px;" class="mainheading">
                                <i class="fa fa-bookmark"></i>
                                <span>&nbsp;goto <strong>QuickLinks</strong></span>
                            </h4>
                            <?php include ('../php/sideMenu.php'); ?>
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

            <!--                                </div>-->
            <?php include ('../php/alerts.php');  ?>
            <?php include('../php/footer.php'); ?>
            
        </div>



        </div>
    <!--/st-content-inner-->
    </div>
<!-- this is the wrapper for the content-->
</div>
<!--st-pusher-->
<!--        </div> st-container -->
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
    
    <script src="../js/sidebarEffects.js"></script>
    <script src="../js/transit.js"></script>
    <script src="../js/sly.js"></script>
    <script src="../js/customSly.js"></script>
    <script src="../js/wow.min.js"></script>
    <!--    <script src="js/res-navtabs.js"></script>-->
    <script src="../js/scripts.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </body>   
</html>