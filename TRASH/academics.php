<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."Github/kjc-website";/*$ROOT is the base URL & should on top of every PAGE */?> 
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
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        
		<!--custom css-->
        <link href="css/custom.css" rel="stylesheet">
        <!-- javascript -->
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script> 
        <script src="js/respond.js"></script>
		<script src="js/modernizr.custom.js"></script>
        <script src="js/spin.min.js"></script>
        <script src="js/mySpin.js"></script>
        <script src="js/custom.js"></script>
        
	</head>
	<body id='foo'>
    <script>$("#foo").spin("custom");</script>
    <div class="container-fluid">
        <div class="row">
                <?php include ('php/academics/navbar.php');  ?>
        </div>
    </div>
		<div id="st-container" class="st-container">
			<?php include('php/academics/offCanvasMenu.php'); ?>
			<!-- content push wrapper -->
			<div class="st-pusher">		

				<div class="st-content"><!-- this is the wrapper for the content -->
					<div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
						
						
							
                            <div class="container-fluid">
                                <!--<div class="row">
                                        <?php /*include ('php/navbar.php');*/  ?>
                                </div>-->
                                <div class="row">                	                    
                                        <?php include ('php/academics/carouselMain.php'); ?>               
                                </div>
                                <?php include('php/academics/footer.php'); ?>
                            </div>
						</div><!-- /main -->
					</div><!-- /st-content-inner -->
				</div><!-- /st-content -->
			</div><!-- /st-pusher -->
		</div><!-- /st-container -->
		<script src="js/classie.js"></script>
		<script src="js/sidebarEffects.js"></script>
        <script src="js/scripts.js"></script>
        
        	</body>
            
            

</html>