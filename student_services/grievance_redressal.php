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

	</head>
	<body>
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
											<span>&nbsp;Grievance<strong> Redressal</strong></span>
										</h4>
										
										<div class="inner-content">
											<p> The <strong>Grievance Redressal Cell </strong>was constituted in July, 2006 with five members to probe into the student grievances. It redresses the grievances at individual and class level and grievances of common interest. The Cell maintains a conducive and unprejudiced educational environment. Complaints dropped in the 'Suggestion Box' by students and parents and oral complaints are also redressed. All complaints are scrutinized by the management and the grievance redressal cell.</p>
<p><b>The complaint management mechanism is carried out in three levels in the institution:</b><br>
<ul>
<li>The departmental level grievances are attended by the concerned class teachers who are mentors and department heads.</li>
												<li>The student coordinators and staff coordinators of various clubs and associations act as facilitators to communicate and sort out the grievances pertaining to various clubs and associations.</li>
												<li>Unresolved grievances at the departmental level and association level are referred to the Grievance Redressal Cell of the institution. The students can approach the Grievance Redressal Cell of the institution with their complaints of common interest too. They can drop their complaints in the suggestion box or directly communicate them to the Principal.</li>
											</ul>
											
	<p>Depending on the seriousness of the problem, the issues are settled by the Cell or by the Principal in consultation with other members of the management, parents and faculty. The collective efforts of the management, department heads, class teachers, various staff coordinators of clubs and associations and the Grievance Redressal Cell resolve the complaints promptly and efficiently. The effective complaint management mechanism improves better stakeholder relationship and contentment.</p>
									</div>
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
                            <p><a class="a-link-arrow" href="counselling_center.php">Counselling Centre</a></p>
                            </section><section class="link-arrow">
                            <p><a class="a-link-arrow" href="grievance_redressal.php" style="color: #2980b9;font-weight: bold;">Grievance Redressal </a></p>
                            </section><section class="link-arrow">
                            <p><a class="a-link-arrow" href="scholarship.php">Scholarship</a></p>
                            </section>
                            <section class="link-arrow">
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
            <?php include('../php/morphingSearch.php'); ?>
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
		new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
	}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>   
</html>