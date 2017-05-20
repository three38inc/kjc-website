<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website";/*$ROOT is the base URL & should on top of every PAGE */?> 
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Kristu Jayanti College, Bengaluru</title>
		<!--<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
		<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />-->
		<meta name="author" content="Three38 inc" />
		<link rel="shortcut icon" href="images/icon.png">
        <!-- Bootstrap css -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--additional css-->
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/roundIcons.css">
        <link rel="stylesheet" href="css/hoverEffect.css">
        <link rel="stylesheet" href="css/morphing.css">
        <link rel="stylesheet" href="css/navTabs.css">
		<!--custom css-->
        <link href="css/custom.css" rel="stylesheet">
        <!-- javascript -->
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script> 
        <script src="js/respond.js"></script>
		<script src="js/modernizr.custom.js"></script>
        <script src="js/spin.min.js"></script>
        <script src="js/mySpin.js"></script>
		<script src="js/swipeview.js"></script>
		<script src="js/jquery.bootstrap.newsbox.min.js"></script>
        <script src="js/custom.js"></script>
        
	</head>
	<body id='foo'>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        <script>$("#foo").spin("custom");</script>
    <div class="container-fluid">
        <div class="row">
                <?php include ('php/navbar.php');  ?>
        </div>
    </div>
		<div id="st-container" class="st-container">
			<?php include('php/index/offCanvasMenu.php'); ?>
			<!-- content push wrapper -->
			<div class="st-pusher">	
                <div class="st-content"><!-- this is the wrapper for the content -->
					<div class="st-content-inner">
                            <div class="container" style="background-color: #fff;">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="content-right">
                                            <?php include ('php/index/sideMenu.php'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="content-left myWelcome">
                                            <?php include ('php/index/welcome.php'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="content-right">
                                            <?php include ('php/index/sideMenu.php'); ?>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content-left myNav">
                                            <?php include ('php/index/navTabs.php'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="content-right">
                                            <?php include ('php/index/sideMenu.php'); ?>
                                        </div>
                                    </div>                                        
                                </div>
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content-left">
                                            <?php include('php/index/highLights.php');?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="content-right">
                                            <?php include('php/index/testimonial.php');?>
                                        </div>
                                    </div>
                                </div>
<!--
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content-left">
                                            <?php /*include('php/index/highLights.php');*/?>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="content-right">
                                            <div class="fb-page" data-href="https://www.facebook.com/KristuJayantiCollege" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/KristuJayantiCollege"><a href="https://www.facebook.com/KristuJayantiCollege">Kristu Jayanti College</a></blockquote></div></div>
                                        </div>
                                    </div>
                                </div>
-->
                        </div>
                        
<!--                                </div>-->
        <?php include ('php/index/alerts.php');  ?>
        <?php include('php/index/footer.php'); ?>
        <?php include('php/morphingSearch.php'); ?>
    </div>   
                                    
                                    
                                
                    </div> <!--/st-content-inner--> 
                </div><!-- this is the wrapper for the content--> 
            </div> <!--st-pusher--> 
        </div> <!--st-container--> 

    <script src="js/cbpFWTabs.js"></script>
    <script>
        (function() {

            [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
                new CBPFWTabs( el );
            });

        })();
    </script>   
    <script src="js/classie.js"></script>
        <script src="js/morphingSearch.js"></script>
    <script src="js/sidebarEffects.js"></script>
    <script src="js/sly.js"></script>
    <script src="js/customSly.js"></script>
    <script src="js/scripts.js"></script>
    <script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
		}
	</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>    
    </body>
            

</html>