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
                                        <span>&nbsp;Students <strong> Achievements</strong></span></h4>
									
									<p><b>*</b> A team from Kristu Jayanti School of Management has won the Biggest All Karnataka Online Social Entrepreneurship challenge 2016 – 17,   <b>e-Sahayog, Video Project</b> competition conducted by the Department of Higher Education, Government of Karnataka. They were awarded one lakh cash prize and citation [Feb 17th 2017]</p>
									<p><b>*</b> <b>Mohammed Tayyab [ IV B.A ] and Abdul Hannan Ahmed [II BBA],</b> won the Annual Rotary Debate competition and brought the Yadalam Nanjaih Shetty Rolling Shield. [13/2/2017] </p>
									<p> <b>*</b> <b>196 PG students</b> have presented papers at Conferences and Seminars in this academic year. <b>10 students</b> have received Best Paper Award- at various Inter-Collegiate seminars and Conferences. <br>
										<b>M.Com students:</b> Mr. Shailesh, Mr.Bijin Philip, Mr.Shashi Kumar, Mr. Tittu Thomas<br>
										<b>M.A Journalism and Mass Communication:</b> Mr. Nikhil P Sam<br>
										<b>M.A Psychology</b> – Ms. Swetha Narayanan<br>
										<b>M.C.A-</b> Mr. Jerin John and Ms. Athira Thomas, Ms. Nethra Mathisu and Ms Shruthi </p>
									
									<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Achievements in Literary and Cultural Activities </h3>
  </div>
  <div class="panel-body">
	  <p align=justify><b>*</b> <b>Expert Training and coaching</b> was provided to students to hone their skills and performance in  Skit, Mime, Guitar, Western Vocals and One Act Play<br>
		  <b>*</b> In the academic year 2016-2017, Jayantians have won <b>27 overall Championship Trophies and 4 Runners – Up Trophies</b><br>
Overall championship trophies: - Life Science – 1, MCA –5, Commerce -2,Humanities 5, BBA -2, MBA- 1 Computer Science -6, LCA -4, NSS - 1<br>
	Overall Runners up Trophies:  LCA – 2 Computer Science -1 Management - 1<br>
		  <b>*</b> <b>At the South Zone Inter-University Youth Festival</b> , students of Kristu Jayanti  won prizes for the following <br>
		  <b>II place – Western Vocals Solo</b>  [Vanlal Hlimpuii - Accompanied by Lionel Jude (Keyboard) ]<br>
		  <b>III place - Western Vocals Group - III Place</b> [ Reshma Rockie George, Chennayeta Fiama,    Shruti Manojkumar, Abigail Venkat, Jeraldene Jannette]<br>
		  <b>*</b> 9 students  represented  Bangalore University and South Zone for Western Vocals - Solo and Group  at the <b>National Youth Fest “Shivatsova”</b> held at <b>Shivaji University, Kolhanpur</b> [10th – 14th February] . <b>Vanlal Hlimpuii</b> won IV place at the Western Vocals Solo round.</p>

  </div>
</div>
									
										<div class="inner-content">
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading1">
														<h5 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
																Achievements in Sports:
															</a>
														</h5>
													</div>
													<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
							<div class="panel-body">
								<p><b>*</b>	<b>Mr. Arun Jose - Gold medal – Taekwondo - Bangalore University</b> at SAI Campus, Mysore Road on 27th Jan 2017<br>
									<b>*</b> <b>Chandra Bahadur Tamang  -Gold Medal- Bangalore university</b>- Boxing Champion <br>
									Also won <b>Ultimate Boxing Championship underweight category</b> – super welter category organized by Ramana Boxing club on 25th June 2016<br>

									<b>*</b> <b>Six Jayantians have represented Bangalore University in this academic year</b><br>
Football – Sovnir Pradhan and Gideon<br>
Basket Ball – Jijo P Raju<br>
Boxing - Chandra Bahadur Tamang<br>
Athletics – Varun Kumar<br>
Taekwondo – Arun Jose<br>
									<b>*</b> <b>Winners</b> - Inter Collegiate Throw ball event held at  XLR8 event Bangalore [13/8/2016]<br>
									<b>*</b> <b>Winners</b> - Inter Collegiate Volley ball event held at  XLR8 event Bangalore  [13/8/16]<br>
									<b>*</b> <b>Runners</b>  - Inter Collegiate  Football event held at  XLR8 event Bangalore [13/8/2016]<br>
									<b>*</b> <b>Winners</b> - Bangalore University  Inter Collegiate North zone – Basketball event [19,20/9/2016]<br>
									<b>*</b> <b>Winners</b>- Bangalore University  Inter Collegiate North zone – Foot ball event [11/2/2017]<br>
									<b>*</b> <b>Runners</b> - Bangalore University  Inter Zone  – Basketball event [21/9/2016]<br>
									<b>*</b> <b>Runners</b> - Bangalore University  Inter Zone  – Football event [13/2/2017]<br>
									<b>*</b> <b>R. Santhosh,</b> secured Third position - Long Jump event at the Intercollegiate Dasara Sports Meet organized by Youth Affairs and Sports Development [23/9/16]<br> 
									<b>*</b> <b>Avinash, Manikanta and Naveen</b>  secured Third position in the GENIUS Inter-College Rapid Chess Tournament  held at East Point College [01 & 02 Oct 2016]<br>
									<b>*</b> <b>Runners</b> - Inter Collegiate  Football event - Presidency Challenge Cup 2017  

																
														</div>
													</div>
												</div></div></div>
									
																	<div class="inner-content">
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading2">
														<h5 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
																Bangalore University Athletic Meet:
															</a>
														</h5>
													</div>
													<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
							<div class="panel-body">
								<ul><li>	Ragesh M R – 400 m Hurdles first place</li>
<li>Shreejith P – 110 m Hurdles Second place</li>
<li> Ashlita F.L – Shot put Second place and Discus throw –Third place</li>
<li> Varun Kumar V – 100 m Third place</li>
<li> Manikantan -3000 m Steeplechase – Third place</li>
<li> 4 x 100 m Relay – Third place</li>
<li> 4 x 400 m Relay – Third place</li>
<li> Chandra Bahadur Tamang- Boxing First place</li>
<li> Ramachandran  N- Boxing Second place</li>
<li> Manikantan – Marathon First place</li>
									<li>Costa Britto – Judo – Third Place</li></ul>

																
														</div>
													</div>
												</div></div></div>
									
						<div class="inner-content">
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading3">
														<h5 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
																Outstanding achievements of Alumni :
															</a>
														</h5>
													</div>
													<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
							<div class="panel-body">
								<p><b>Ms. Nileena Atholi,</b> student of BA JPEng (2004-2007) batch received Ramnath Goenka Excellence in Journalism Award. It was awarded by <i>Prime Minister Shri. Narendra Modi</i> </p>

								<p><b>Mr. Pavan Shetty</b> student of MBA (2007 – 2009), Mr. World Winner, 2015, Mr. World Runners up 2016 was awarded with <i>Ekalavya Award 2016 by the Chief Minister of Karnataka</i></p>

																
														</div>
													</div>
												</div></div></div>


									
						<div class="inner-content">
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading4">
														<h5 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
																Inhouse Publications:
															</a>
														</h5>
													</div>
													<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
							<div class="panel-body">
								<p>1.	The Jayantian Glimpses – Bi-Annual publication about activities of the college.</p>
								<p>2.	Technobytes - MCA department newsletter </p>
								<p>3.	Quadrangle – Journalism dept. newsletter</p>
								<p>4.	Expression – a literary magazine</p>
								<p>5.	Interface – Newsletter of Computer Science Students</p>
								<p>6.	Evolve – E-newsletter of BBA students</p>
								<p>7.	Synapse – Life Sciences newsletter</p>
								<p>8.	Commerce Café – Commerce PG</p>
								<p>9.	Pravaha Magazine – 3 volumes published, Psychology Department</p>
								<p>10.	Blog Page of Journalism Department <a href="https://journalismatkristujayanticollege.wordpress.com" target="_blank">(https://journalismatkristujayanticollege.wordpress.com)</a></p>
								<p>11.	Narratives in English Literature and Media</p>
								<p>12.	Campus Courier-MA Journalism students newsletter</p>
								<p>13.	Chanakya – Political Science Newsletter</p>


																
														</div>
													</div>
												</div></div></div>
				

									
									
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp; Academic <strong> Achievements  </strong></span>
                                    </h4>
                                  


                                    <section class="link-arrow">
                    <p><a class="a-link-arrow" href="../achivements/college.php">College Achievements </a></p>
                                    </section>
									
									 <section class="link-arrow">
                    <p><a class="a-link-arrow" href="../achivements/students.php" style="color: #2980b9;font-weight: bold;">Students Achievements </a></p>
                                    </section>
									
									 <section class="link-arrow">
                    <p><a class="a-link-arrow" href="../achivements/faculty.php">Faculty Achievements </a></p>
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
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>
