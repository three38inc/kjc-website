<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website"; $imgNum = mt_rand(1,11); /*$ROOT is the base URL & should on top of every PAGE */?> 
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Kristu Jayanti College, Bengaluru</title>
		<!--<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />-->
		<meta name="author" content="Three38 inc" />
		<link rel="shortcut icon" href="../../images/icon.png">
		<!-- Bootstrap css -->
		<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!--additional css-->
		<link rel="stylesheet" type="text/css" href="../../css/component.css" />
		<link rel="stylesheet" href="../../css/font-awesome.css">
		<link rel="stylesheet" href="../../css/font-awesome.min.css">
		<link rel="stylesheet" href="../../css/roundIcons.css">
		<link rel="stylesheet" href="../../css/hoverEffect.css">
		
		<link rel="stylesheet" href="../../css/navTabs.css">
		<link rel="stylesheet" href="../../css/animate.css">
		<link rel="stylesheet" href="../../css/fakeLoader.css">
		<!--        <link rel="stylesheet" href="css/res-navtabs.css">-->
        <!--custom css-->
        <link href="../College-Arts-Science-Commerce/css/academics.css" rel="stylesheet">
		<link href="../../css/custom.css" rel="stylesheet">
		<link href="../../css/innerpage.css" rel="stylesheet">
		<link href="css/law.css" rel="stylesheet">
		<!-- javascript -->
		<script src="../../js/jquery-1.11.0.min.js"></script>
		<script src="../../bootstrap/js/bootstrap.min.js"></script> 
		<script src="../../js/respond.js"></script>
		<script src="../../js/custom.js"></script>
		<script src="../../js/fakeLoader.js"></script>

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
				<?php include ('php/navbar.php');  ?>
			</div>
		</div>
		<div id="st-container" class="st-container">
			<?php include('../../php/offCanvasMenu.php'); ?>
			<!-- content push wrapper -->
			<div class="st-pusher">	
				<div class="st-content"><!-- this is the wrapper for the content -->
					<div class="st-content-inner">
                        
                        <div class="row" style="height: 110px;"></div>
                        
                        
                        <div class="container">
                        <!--        <div class="row">-->
                        
                        <div class="row">
                            <div class="marginTopDiv">&nbsp;</div>
                            <div class="col-lg-9">
                                <div class="content-left myWelcome wow fadeIn">
                                 <img src="images/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                 
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
									 <span>&nbsp;Our <strong>Hostel Facilities</strong></span>
                                    </h4>
                                 

                                    <p align="justify"> Well managed hostels are available for both boys and girls. All the hostels for girls are run by Rev. Sisters of various congregations and there is a separate hostel for post graduate students. As an extended home, the hostel facilitates the students to do serious study and go grow spiritually, intellectually, physically and psychology. The college tradition and discipline is also extented to the hostel in fine manner.<br /><br />
                                            </p>
												<p align="justify"> 
													<strong>Hostel Details</strong>
													<br />
												</p>
									
									
									<table border="1" cellpadding="2" cellspacing="2" class="table table-hover table-bordered">
        <tr>
        <td width="200"><b><center>Name of the Hostel</center></b></td>
        <td width="200"><b><center>Managed by</center></b></td>
        <td width="100"><b><center>Contact Nos.</center></b></td>
        </tr>
        <tr>
        <td width="200"><b><u>For Boys:</u></b><br />
<b>St. Aloysious Boys Hostel</b><br />
K. Narayanapura
Kothanur (PO)
Bangalore - 560 077
</td>
        <td width="200"><center>Mr. Sabu Paul</center> </td>
        <td width="100"><center><b>09449031805<br />
08050501291</b></center></td>
        </tr>
        <tr>
        <td width="200"><b><u>For Boys:</u></b><br />
<b>RR Residency</b><br />
K. Narayanapura
Kothanur (PO)
Bangalore - 560 077
</td>
        <td width="200"><center>Mr. Thomas Mathew</center> </td>
        <td width="100"><center><b>09449550771<br /> 
        28443519</b></center></td>
        </tr>
        </table><br />
        
        <table border="1" cellpadding="2" cellspacing="2" class="table table-hover table-bordered">
        <tr>
        <td width="200"><b><center>Name of the Hostel</center></b></td>
        <td width="200"><b><center>Managed by</center></b></td>
        <td width="100"><b><center>Contact Nos.</center></b></td>
        </tr>
        <tr>
        <td width="200"><b><u>For Girls:</u></b><br />
<b>St. Mary's Study House</b><br />
K. Narayanapura
Kothanur (PO)
Bangalore - 560 077
</td>
        <td width="200"><center>Managed by Kristu Jayanti College Run by PHJC Sisters</center> </td>
        <td width="100"><center><b>9632265475<br />
28444134</b></center></td>
        </tr>
        <tr>
        <td width="200"><b><u>For Girls:</u></b><br />
<b>Navajyothi</b><br />
K. Narayanapura
Kothanur (PO)
Bangalore - 560 077
</td>
        <td width="200"><center>Managed and Run by S.H. Sisters</center> </td>
        <td width="100"><center><b>9900759092<br /> 
        28445829</b></center></td>
        </tr>
        <tr>
        <td width="200"><b><u>For Girls:</u></b><br />
<b>Pallotti Study House</b><br />
K. Narayanapura
Kothanur (PO)
Bangalore - 560 077
</td>
        <td width="200"><center>Managed and Run by Pallotti Sisters</center> </td>
        <td width="100"><center><b>9980666752</b>
       </center></td>
        </tr>
        <tr>
        <td width="200"><b><u>For Girls:</u></b><br />
<b>Prajyothi Study House</b><br />
K. Narayanapura
Kothanur (PO)
Bangalore - 560 077
</td>
        <td width="200"><center>Managed and Run by St. Ann's Sisters</center> </td>
        <td width="100"><center><b>8553175572</b>
       </center></td>
        </tr>
         <tr>
        <td width="200"><b><u>For Girls:</u></b><br />
<b>Adrian Nivas (St. Charles convent)</b><br />
Geddalahalli
Kothanur (PO)
Bangalore - 560 077
</td>
        <td width="200"><center>Managed and Run by St. Charles Sisters</center> </td>
        <td width="100"><center><b>09449608879<br />
080-28465328</b>
       </center></td>
        </tr>
									</table><br />
											

                                </div>
                            </div>
                            <div class="col-lg-3">
                           
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Courses <strong>Offered</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="BA-LLB/index.php">B.A., LL.B.</a></p>
                                    </section>
									
									 <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="BCom-LLB/index.php">B.Com LL.B.</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="BBA-LLB/index.php">B.B.A., LL.B.</a></p>
                                    </section>

                                   

                                </div>
                                <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                        </h4>

                                        <?php include ('../../php/sideMenu.php'); ?>
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
							
						<?php include ('../../php/alerts.php');  ?>
						<?php include('../../php/footer.php'); ?>
					</div>   



				</div> <!--/st-content-inner--> 
		  </div> <!--st-pusher--> 
	 <!--st-container--> 

	<script src="../../js/cbpFWTabs.js"></script>
	<script>
		(function() {

			[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
				new CBPFWTabs( el );
			});

		})();
	</script>
	<script src="../../js/modernizr.custom.js"></script>
	<script src="../../js/spin.min.js"></script>
	<script src="../../js/mySpin.js"></script>
	<script src="../../js/swipeview.js"></script>
	<script src="../../js/jquery.bootstrap.newsbox.min.js"></script>
	<script src="../../js/classie.js"></script>
	
	<script src="../../js/sidebarEffects.js"></script>
	<script src="../../js/transit.js"></script>
	<script src="../../js/sly.js"></script>
	<script src="../../js/customSly.js"></script>
	<script src="../../js/wow.min.js"></script>
	<script src="../../js/isotope-docs.min.js"></script>
	<!--    <script src="js/res-navtabs.js"></script>-->
	<script src="../../js/scripts.js"></script>
	<script src="js/law.js"></script>
    
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
		}
	</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	</body>   
</html>