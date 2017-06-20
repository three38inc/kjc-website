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
										  <span>&nbsp;Our <strong>Library </strong></span>
                                    </h4>
                                    

                                    <p align="justify"> The College Library is a gateway to a world of information. The staff and students have unlimited access to a wealth of Information found in resources like books, magazines, Journals, statistics, encyclopedias, annual reports and the Internet. In addition, the library offers spacious seating arrangements and a calm ambience for learning.  </p><br/>
												<h4 style="text-decoration:underline;">Opening Hours</h4>
											
												<p align="justify">The Library is available for the use of all members of Kristu Jayanti College. Its working hours are 8.30am to 7.00pm Monday to Friday and 8:30am to 4.00pm Saturday.</p><br/><br/>
											<h4  style="text-decoration:underline;">Facilities</h4>
												<p align="justify">The KJC Library allows access to printed resources such as books, Journals and Magazines as well as Electronic Journals for the use of faculty and students at Kristu Jayanti College.</p>
											<ul>
												<li>Automated library enables easy accessibility and optimum usage.</li>
												<li>Reading room, discussion room and self-study cubicles exclusively for faculty and students
* OPAC facility is installed for easy search</li>
												<li>OPAC facility is installed for easy search</li>
												<li>Wireless router is installed to facilitate internet usage and laptop connectivity</li>
												<li>Reprographic facility</li>
												<li>Display of newspaper clippings on current topics and career / employment  </li>
												<li>Book bank facility for economically backward students</li>
												<li>Notice board for information display and notification</li>
												<li>Continuous power backup facility</li>
												<li>Competitive exam material</li>
												<li>Mass subscription of dailies / journals for students</li>
											</ul>
											<br/>
											<h4 style="text-decoration:underline;">Collection Development</h4>
											
											<p align="justify">Books from vendors on approval will be available in the library from time to time.Faculties are encouraged to purchase the Titles in display and make recommendations. Recommendation forms are available at the library. Selected new books will be a displayed and are reserve for a period of two weeks before being available for general circulation.</p>
<p>Any student may recommend new books & Journal Subscription. The Library Committee will decide based on the input from faculty and the academic need..</p>
											<br/><br/>
											<h4 style="text-decoration:underline;">Circulation of Materials</h4>
											
											<p align="justify">Students may borrow books or Journals during working hours at the library Circulation Counter. A Student may borrow a maximum of three books, two Journals & two CD's to their name. The books are issued for Students maximum Ten days & for faculty maximum ten books for one month and then they may be renewed if no reservations on the items indicated. Journals and CD's may be issued for maximum three days for students and one week for faculty. Books & Journals placed on reserve by the library staff, are not issued out.
											<br/>
											The Library materials in certain advertised categories may not be issued without special permission:</p>
											<ul>
												<li>Un Bound Parts/Current Issues of Journals.</li>
												<li>Encyclopedias.</li>
												<li>Dictionaries</li>
												<li>Reference Books</li>
												<li>Project Reports</li>
											</ul>
											<p align="justify">Fine will be charged on late return of books, periodicals and CD's.
											Books and Periodicals borrowed from the library cannot be taken outstation unless special permission is given. Students should deposit their borrowed materials in the library before they go on leave.Newly Arrived Journals/ Magazines & Newspapers Newly arrived Books and Periodicals cannot be issued out of the Library before a specified period.<br>
                                                
                                                
											<br/>Total Number of Books: 49642+
											<br/>Project Reports: 2700+ 
											<br/>Bound Volumes: 2504+ 
											<br/>Periodicals: 280
											<br/>National: 190, International: 90
											<br/>Case Studies: 03
											<br/>Newspapers: 12
                                              <br/>  Databases: 07 
                                              <br/>  CDs / DVDs and Non-Book, Audio Cassettes & Maps: 2,735+</p>
											<h4 style="text-decoration:underline;">Reference Books</h4>
											
											<p align="justify">Readers may reserve books or Journals for a period of one day by writing the name against the message ("Please leave"/"Don't disturb") and the date. This date may be changed once the reserved material is used, or the reserved material will be replaced on the shelves after the blocked date.</p>
											<br/><h5>Online Journals/Resources</h5>
											<p align="justify">Kristu Jayanti College Library subscribes to online full text Journals & Resources. It regularly adds new Journals & Resources to the Collection for the benefits & easy access to all the users.
Downloading entire issues/volumes of these resources is legally incorrect; as it goes against the license agreement we have entered with the publishers. Thus we would emphasize that these resources have been governed by license agreements and copyright law. Download of entire journal issue or complete volume in a systematic fashion is strictly prohibited. The responsibility for the appropriate use of licensed material lies with the user. The misuse of or unauthorized use of licensed information could result in cancellation of the services. 
All KJC library users must respect the licensed agreements & copyrights and make use of these resources fairly. This service is available to Kristu Jayanti College Network users only.</p>
											<br/><br/>
											<h4 style="text-decoration:underline;">Audio Video Service</h4>
											
											<p align="justify">Audio video Service is available to Post Graduate students only. Management and Faculty of Kristu Jayanti College may recommend the purchase of desired or relevant Audio Video CD's to the Librarian.</p>
											<br/><br/>
											<h4 style="text-decoration:underline;">External Users/Visitors</h4>
                                    <p align="justify">External users from other Institutions or Colleges are allowed to use the Library with a letter of reference from their Institution or College. External users are not permitted to issue Library items.
Other Visitors to the Library may use it provided he gets permission from the Director of Library to use it. Externals users and visitors are allowed to use the Library only during office hours. Role of Library Staff in helping users During Normal Working hours the Librarian & other Library Staff will assist the users. They will also assist in obtaining necessary reference material for individual users. The Library will provide necessary service to obtain personal subscription or book purchases for faculty and students.</p>
											<br/><br/>
											<h4 style="text-decoration:underline;">Code of Conduct</h4>
											
											
											<ol style="list-style-type:decimal;">
												<li>On entering the library, one should enter their name and signature in the registration book.</li>
												<li>Borrowing materials without a valid Identity card number is prohibited.</li>
												<li>The use of another's Identity card is prohibited.</li>
												<li>Do not reshelf Books, Periodicals etc., leave them on the tables properly after use.</li>
												<li>Talking is strictly prohibited in the Library.</li>
												<li>Personal belongings must be left in the provided cupboards. The Library is not responsible for any item left in the Library.</li>
												<li>Food or Drink is not allowed in the Library.</li>
												<li>Laptop if used in the library must have its own power and cable connector.</li>
												<li>Cell phones are to be set in the "OFF" or "VIBRATOR" mode prior to entering the Library</li>
												<li>The use of pen drive is strictly prohibited in the library.</li>
												<li>Students must take care of Library Materials and must not deface them by underlining, writing or drawing in them, tearing any part of them, or in any other way.</li>
												<li>Library is a place of Individual study, Library members should maintain an atmosphere of dignity, peace and silence within the Library.</li>
											</ol>
											<h5>Loss &amp; Defacement of Books, Journals and CD's</h5>
											<p align="justify">The Cost of replacement with double amount will be charged to the person for loss or damage of library materials. If any student intentionally deface or damage any library item, will have his/her Library Privileges revoked for a period of time determined by the Library Committee.
									</p></div>

                            
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