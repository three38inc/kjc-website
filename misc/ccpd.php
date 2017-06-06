<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."";/*$ROOT is the base URL & should on top of every PAGE */?> 
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
							<!--        <div class="row">-->
							<div class="row" style="margin-top: 80px; padding-left: 10px; padding-right: 10px;">
								<img class="img-responsive col-lg-12" style="width:100%;padding:0px;" src="../images/researchBanner.jpg" alt="cover-img" />    
							</div>
							<div class="row">
								<div class="col-lg-9">
									<div class="content-left myWelcome wow fadeIn" style="min-height:538px">
										<h4 >
											<i class="fa fa-bookmark" style="color:#2980b9"></i>
											<span>&nbsp;<strong>Centre for Research</strong></span>
										</h4>
										<hr />
										<div class="inner-content">
											<p> 
												<strong>RESEARCH POLICY</strong><br />
												'Aspiring towards global competency by creating a conducive physical and intellectual environment to infuse a culture of research that contribute towards transformation of the society'.<br /><br />

												<strong>CENTRE FOR RESEARCH</strong><br />
												The Centre for Research actively promotes research and inculcates research culture. It is chaired by the Director of Research. Principal and Vice Principal lead as ex-officio members. Deans, Heads of the Department of postgraduate programmes and one faculty representative from the graduate departments are its members.<br /><br />

												<strong>OBJECTIVES OF THE CENTRE FOR RESEARCH</strong><br />
											<ul>
												<li>To inculcate research culture in the institution</li>
												<li>To disseminate information, motivate, guide and monitor research projects</li>
												<li>To undertake feasibility studies for industry</li>
												<li>To motivate the faculty members to undertake research, present papers and publish articles</li>
												<li>To facilitate the faculty members to obtain guide ship from various universities</li>
												<li>To organize training and workshops in research</li>
											</ul> 
											</p>
										<p>
											Although the institution is in its infancy, the thrust given to academics and research is on a strong note. The college has collaborated with industry, social organizations and institutions at national and international levels for academic and research purposes. With its humble foray into research activities the college has also established an institution-neighbourhood network through its extension and outreach programmes.
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="content-right wow fadeIn">
									<h4><strong>Research</strong></h4>
									<div class="innercontent-link" >
										<ul>
											<li><h5><a href="centre_for_research.php">Centre for Research</a></h5></li>
											<li><h5><a href="research_projects.php">Research Projects</a></h5></li>
											<li><h5><a href="patents.php">Patents</a></h5></li>
											<li><h5><a href="publications.php">Publications</a></h5></li>
											<li><h5><a href="consultancy.php">Consultancy</a></h5></li>
											<li><h5><a href="extension.php">Extension</a></h5></li>
											<li><h5><a href="research_centre_in_biotechnology.php">Research centre in Biotechnology</a></h5></li>
											<li><h5><a href="research_centre_in_social_work.php">Research centre in Social Work</a></h5></li>
										</ul>
									</div>
								</div>
								<div class="row" style="margin-left:2px; margin-right: 2px;">
									<div class="content-right wow fadeIn">
										<?php include ('../php/sideMenu.php'); ?>
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



			</div> <!--/st-content-inner--> 
		</div><!-- this is the wrapper for the content--> 
		</div> <!--st-pusher--> 
	</div> <!--st-container--> 

<script src="../js/cbpFWTabs.js"></script>
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