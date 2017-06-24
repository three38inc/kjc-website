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
    <script type="text/javascript">$crisp=[];CRISP_WEBSITE_ID="bfee4615-2d13-4129-a9c2-d7b8095e3d0e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.im/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
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
                                        <span>&nbsp;Pass-World  <strong> Consortium, France</strong></span></h4>
									
									<p align=justify><b>France lies at the heart of Europe</b> and was a founding member of the European Union. The country offers a world of opportunities to students wishing to develop their managerial skills in an international environment. Pass-world is aconsortium of management schools which facilitates admission to any of the management schools under its umbrella. <b>Pass-world offers candidates one admission procedure to make the choice of entering a prestigious Schools of Management in the Pass-world network.</b></p>
The Management Schools under pass-world network are;
									
									<center><img src="images/passworld.jpg"></center>
									
									<p><b>NOS ECOLES / OUR SCHOOLS</b></p>
									
									<table class="table table-bordered">
  <thead>
    <tr>
     
      <td>Burgundy School of Business </td>
      <th>ESC Dijon</th>
		<td><a href="http://www.bsbu.eu" target="_blank">www.bsbu.eu</a></td>
    </tr>
  </thead>
  <tbody>
	  
    <tr>
      <td>Champagne School of Management </td>
      <td>ESC Troyes</td>
		<td><a href="http://www.bsbu.eu" target="_blank">www.groupe-esc-troyes.com</a></td>
    </tr>
	  
	  <tr>
      <td>Clermont Graduate School of Management  </td>
      <td>ESC Clermont</td>
		  <td><a href="http://www.bsbu.eu" target="_blank">www.esc-clermont.fr</a></td>
    </tr>
	  
	  <tr>
      <td>EM Strasbourg Business School</td>
      <td>EM Strasbourg</td>
		  <td><a href="http://www.bsbu.eu" target="_blank">www.em-strasbourg.eu</a></td>
    </tr>
	  
	  <tr>
      <td>Grenoble EM </td>
      <td>ESC Grenoble</td>
		  <td><a href="http://www.bsbu.eu" target="_blank">www.esc-grenoble.com</a></td>
    </tr>
	  
	  <tr>
      <td>La Rochelle Business School</td>
      <td>ESC La Rochelle</td>
		  <td><a href="http://www.bsbu.eu" target="_blank">www.esc-larochelle.fr</a></td>
    </tr>
	  
	  <tr>
      <td>Negocia, Paris</td>
      <td>Negocia Paris</td>
		  <td><a href="http://www.bsbu.eu" target="_blank">www.negocia.fr</a></td>
    </tr>
	  
	  <tr>
      <td>Normandy Business School </td>
      <td>EM Normandie 	</td>
		  <td><a href="http://www.bsbu.eu" target="_blank">www.em-normandie.fr</a></td>
    </tr>
										</tbody></table>
									
									
									
									<p><b>LANGUES DES COURS / COURSES LANGUAGES</b></p>
									
									<table class="table table-bordered">
  <thead>
    <tr>
      <th>Schools</th>
      <th>Ecoles</th>
      <th>Programme in English</th>
      <th>Programme in French</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Burgundy School of Business</td>
      <th>ESC Dijon</th>
		<td><center><img src="images/right.jpg"></center></td>
		<td><center><img src="images/right.jpg"></center></td>
    </tr>
	  <tr>
      <td>Champagne School of Management </td>
      <th>ESC Troyes</th>
		<td><center><img src="images/right.jpg"></center></td>
		<td><center><img src="images/right.jpg"></center></td>
    </tr>
	  <tr>
      <td>Clermont Graduate School of Management </td>
      <th>ESC Clermont </th>
		<td><center><img src="images/right.jpg"></center></td>
		<td><center><img src="images/right.jpg"></center></td>
    </tr>
	  <tr>
      <td>EM Strasbourg Business School </td>
      <th>EM Strasbourg</th>
		<td><center><img src="images/right.jpg"></center></td>
		<td><center><img src="images/right.jpg"></center></td>
    </tr>
	  <tr>
      <td>Grenoble EM </td>
      <th>ESC Grenoble</th>
		<td><center><img src="images/right.jpg"></center></td>
		<td><center><img src="images/right.jpg"></center></td>
    </tr>
	  <tr>
      <td>La Rochelle Business School 	</td>
      <th>ESC La Rochelle</th>
		<td></td>
		<td><center><img src="images/right.jpg"></center></td>
    </tr>
	  <tr>
      <td>Negocia, Paris</td>
      <th>Negocia Paris</th>
		<td><center><img src="images/right.jpg"></center></td>
		<td><center><img src="images/right.jpg"></center></td>
    </tr>
	  <tr>
      <td>Normandy Business School </td>
      <th>EM Normandie</th>
		<td><center><img src="images/right.jpg"></center></td>
		<td><center><img src="images/right.jpg"></center></td>
    </tr>
										</tbody></table>
									
									
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp; <strong>Collaboration</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="collaborations.php"> Introduction</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="appalachian_state_university.php">Appalachian State University , NC, USA</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="fachhochschule_dortmund_university.php">Fachhochschule Dortmund - University, Germany</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="FHDW_fachhochschule_der_wirtschaft.php">FHDW Fachhochschule der Wirtschaft, Germany </a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="em_normandie_normandy_business_school.php"> E M Normandie - Normandy Business School, Caen, France</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="neu_ulm_university.php">Neu-Ulm University of Applied Sciences, Germany</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="pass_world_consortium.php" style="color: #2980b9;font-weight: bold;">Pass-World Consortium, France</a></p>
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
                    <?php include('../php/morphingSearch.php'); ?>
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
