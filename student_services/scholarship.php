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
                                        <span>&nbsp;Scholarship <strong> </strong></span>
                                    </h4>
										
										
										<div class="inner-content">
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="headingOne">
														<h5 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
																SC / ST
															</a>
														</h5>
													</div>
													<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
		<ul><li> Caste Certificate :- Signed by Tahasildar issued within the last 5 years (Reg no starting with RD)</li>

<li> Income Certificate of the Parents:- Signed by Tahasildar & renewed on or after  July 2014. Income should be below 2.5 Lakh.</li>
<li><b>NB:-</b> Income certificate should mention both the father's & grand father's name </li>
<li> Marks Card: - For 1st Year degree students – 10th & PUC marks card.</li>
<li>For 2nd & 3rd Year students - 10th Mark card, PUC and Degree marks card.</li>
<li> Fee receipt of this Academic Year (2016 – 2017)..</li>
<li> Student Bank Account detail – copy of Pass Book & Aadhaar car</li>
<li> The First year students should register their details in the Web site using the  
following links and attach the copy of the same.</li>
																<br/>

																<a href="http://164.100.80.23/sw3/"><strong>http://164.100.80.23/sw3/</strong></a>
																<br/><br/>
																<a href="http://164.100.80.23/stsmis/"><strong>http://164.100.80.23/stsmis/</strong></a>
																<br/><br/>
																
<li> Students are requested to take the Print out before saving their Data.</li></ul>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="headingTwo">
														<h5 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

																Minorities (Muslims / Christians / Sikhs / Buddhists)
															</a>
														</h5>
													</div>
													<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
														<div class="panel-body">
															<b>ONLINE</b>
															<br/><br/>
						<li><a href="http://scholarships.gov.in" target="_blank">www.scholarships.gov.in</a></li><br>
                        <li><a href="http://gokdom.kar.nic.in" target="_blank">www.gokdom.kar.nic.in</a></li>
															
															
														</div>
													</div>
												</div>
												
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="headingThree">
														<h5 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
																Backward class Category(IIA, IIIA, Cat-I & other Hindus)
															</a>
														</h5>
													</div>
													<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
														<div class="panel-body">
                                                        
 <li>Caste & Income Certificate:- Signed by Tahasildar & issued within the last 5 years & renewed on or after July 2014. Income should be below (Cat-2A, 3A, 3B)1,00,000/- & for (Cat-I) 2.5 Lakh</li>
<li>Marks Card: - For 1st Year degree students – 10th & PUC marks card. For 2nd & 3rd Year students – 10th , PUC & Degree marks card.</li>
<li> Fee receipt of this Academic Year (2016 – 2017)</li>
<li> Student Bank Account detail – copy of Pass Book, Aadhaar. </li>
															<b>Application Form are available in ONLINE
															</b>
															<br/><br/>
															<a href="http://www.karepass.cgg.gov.in
																	 "><strong>www.karepass.cgg.gov.in</strong>
															</a>
														</div>
													</div>
												</div>
                                                
                                                <div class="panel panel-default">
													<div class="panel-heading" role="tab" id="headingFour">
														<h5 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
																Only for PG Students
															</a>
														</h5>
													</div>
													<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
														<div class="panel-body">
                                                        
<li> Post-Graduate Indira Gandhi Scholarship for Single Girl Child For PG Programs</li><br>
															<a href="http://www.ugc.ac.in/sgc/" target="_blank">http://www.ugc.ac.in/sgc/</a>
														</div>
													</div>
												</div>
												
												
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="headingFive">
														<h5 class="panel-title">
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
																Kristu Jayanti Scholarship Scheme(KJSS)&amp;for all First Year UG Programmes
															</a>
														</h5>
													</div>
													<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
														<div class="panel-body">
															<b>For detail check the website
															</b><br/><br/>
															<a href="http://kristujayanti.edu.in/pdf/kjss_scholarship_2015.pdf
																	 "><strong> [CLICK HERE]
																</strong>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<br/><br/><br/><br/><br/><br/>
									</div>
								</div>
								           <div class="col-lg-3">
                        <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                            <h4 style="margin-left:10px;" class="mainheading">
                                <i class="fa fa-bookmark"></i>
                                <span>&nbsp;Student<strong> Services</strong></span>
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
                            <p><a class="a-link-arrow" href="grievance_redressal.php">Grievance Redressal </a></p>
                            </section><section class="link-arrow">
                            <p><a class="a-link-arrow" href="scholarship.php" style="color: #2980b9;font-weight: bold;">Scholarship</a></p>
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