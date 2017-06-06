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
                                    <img src="../images/clg_history.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                   
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Library Automated Service: <strong> Electronic Public Access Catalogue (EPAC)</strong></span>
                                    </h4>
                                

                                    <p align="justify"> Kristu Jayanti Library is completely automated. This facilitates easy access to all type of library functions. EPAC is an efficient search engine that can be used to browse/search for an item, its details, its availability and other details in a particular library. Also, information about digital subscriptions, Periodicals/serials can also be browsed and accessed through EPAC.</p><br />
											<h4 style="text-decoration:underline;">EPAC consists of 9 major options in it:</h4>


											<ol style="list-style-type:decimal;">
												<li>Main Search</li>
												<li>Digital Subscription</li>
												<li>Digital Library Search</li>
												<li>Borrowed</li>
												<li>Periodicals </li>
												<li>Digital Subscription List</li>
												<li>Article Search </li>
												<li>Subscription Search and </li>
												<li>Advanced Search.</li>
											</ol>
											<ol style="list-style-type:initial;">
												<li><strong>Loss &amp; Main Search:</strong>This option can be used to search any book, non-book items in the library with the help of 5 entry facilities that can be used for searching. User can search for 'Books' or 'Non-Books' or 'All' by selecting the options present in the screen. 'All' option will be selected by default when the screen is loaded. User can select any particular 'Item Type', which is enabled only when 'Non-book' option is selected. Once the Search for option is selected, user can search for any item by any of the following ways:<br/>1.	Any book/non-book item can be searched by its Title or Author or Subject or Keyword or Editor or with all the 5 options.<br/>2.	Also, any item can be searched by its Title/Author/Keyword/Editor by specifying the word/letter that it begins with.</li>
												<li><strong>Digital Subscription: </strong>Any digital subscription made by the library can be accessed or searched from this option. User can search for the subscription by specifying various search options like Title, Department, Publisher, Vendor, Subscription No., etc. Once the search result is obtained, user can directly open the subscription's URL for more details.</li>
												<li><strong>Digital Library Search: </strong>This option can be used for an Article search. Search options like Article Title, Language, Keyword, Publisher etc., are provided for better and faster search.</li>
												<li><strong>My Account:</strong> Any user of the library with his/her Member ID and Password can check for the items borrowed/reserved from him/her. Also, the user can check his/her due or fine amount, if any, by just signing in with his/her Member ID as user name and password.Also there is an option for canceling.</li>
												<li><strong>Periodicals: </strong>List of all the periodicals in the library is obtained and user can view more details of it by just clicking on a particular periodical.</li>
												<li><strong>Digital Subscription List: </strong>Similar to Periodical list, a list of all the digital subscriptions in the library can be obtained.</li>
												<li><strong>Article Search:</strong> Articles in the library connected can be searched and details can be obtained with the help of various search criteria provided. </li>
												<li><strong>Subscription Search:</strong> Similar to Article Search, all the periodical subscriptions made by the library can be searched and the details of a particular periodical can be obtained with the help of various search criteria provided. </li>
												<li><strong>Advanced Search: </strong> Books/Non-Book items in the library can be searched with various search criteria provided for better result. In the Main Search screen, items can be searched only by its Title, Author, Subject, Keyword and Editor. Whereas, with Advanced Search option/screen, items can be searched with additional criteria like Accn No., Title No., Bill No., Vendor, Category, Department, Location etc.,.</li>
											</ol>
											<br/>
											<h5>Reservation in EPAC </h5>
											<ol style="list-style-type:decimal;">
												<li><strong>Title wise:</strong>
													To reserve an item by Title wise, click 'Title' when a message box showing "Do You Want To Reserve Item by Title Or Copy ...?" is prompted. When an item is reserved through Title wise, the latest copy of an item that is available (not issued/not allotted) will be allotted to the user.User can also reserve the item by Title wise even though all the copies of an item are either Issued/Allotted by clicking 'Title' when a message box showing "All the Copies of this item are Issued/Allotted. Do You Want To Reserve Item by Title Or Copy ...?" is prompted.
												</li>
												<li><strong>Copy wise: </strong>To reserve an item by Copy wise, click 'Copy' when a message box showing " Do You Want To Reserve Item by Title Or Copy ...? " is prompted. This will take you to another screen where the user can see all the copies of a particular item and reserve the copy of his/her choice.
												</li>
											</ol>	
											
								</div>
							</div>
							<div class="col-lg-3">
									<div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Our  <strong>Campus Profile</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="academic_arena.php">Academic Arena</a></p>
                                    </section>
                                        <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="library_info.php">Library</a></p>
                                    </section>
                                     <section class="link-arrow">   
                                        <p><a class="a-link-arrow" href="library.php" style="color: #2980b9;font-weight: bold;">Library EPAC</a></p>
                                    </section><section class="link-arrow">
                                        <p><a class="a-link-arrow" href="labs.php">Labs</a></p>
                                    </section><section class="link-arrow">
                                        <p><a class="a-link-arrow" href="sports_games.php">Sports &amp; Games</a></p>
                                    </section><section class="link-arrow">
                                        <p><a class="a-link-arrow" href="hostel.php">Hostel</a></p>
                                    </section><section class="link-arrow">
                                        <p><a class="a-link-arrow" href="common_facilities.php">Common Facilities</a></p>
                                    </section><section class="link-arrow">
                                        <p><a class="a-link-arrow" href="cafeteria.php">Cafeteria</a></p>
                                    </section>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="atm.php">Atm</a></p>
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

    <!--<script src="../js/cbpFWTabs.js"></script>-->
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