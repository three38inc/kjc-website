<<<<<<< HEAD
<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST'].""; $imgNum = mt_rand(1,5); /*$ROOT is the base URL & should on top of every PAGE */?> 
=======
<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."";/*$ROOT is the base URL & should on top of every PAGE */?> 
>>>>>>> origin/master
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
    <link rel="stylesheet" href="../css/data-category.css">
      <!-- <link rel="stylesheet" href="../css/socailicons.css">-->
   
     
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
                        <!--<div class="row">-->
                        <div class="row" style="margin-top: 100px; padding-left: 10px; padding-right: 10px;">

                        </div>
                        <div class="row">
                            <div class="marginTopDiv">&nbsp;</div>
                            <div class="col-lg-9">

                                <div class="content-left myWelcome wow fadeIn" style="min-height:820px;">
                                <img src="images/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp;Media <strong>Room</strong></span>
                                    </h4>
                                    
                                    <p align=justify>Welcome to the Media Room. Kristu Jayanti College Media Room acts as a liaison between the college and the public, especially media and other stakeholders. It also provides details of all major activities of the college through press releases and other multimedia formats. </p>
                                    
                                    
                                   

                                 <div class="container">
        <div class="row">
       
       

        
          
            <button class="btn btn-default filter-button fil-1" data-filter="news1">News</button>
            <button class="btn btn-success filter-button" data-filter="inhouse">In-house publications</button>
            <button class="btn btn-info filter-button" data-filter="photographs">Photographs</button>
            <button class="btn btn-warning filter-button" data-filter="press">Press releases</button>
            <button class="btn btn-danger filter-button" data-filter="innews">In the news</button>
            <button class="btn btn-default filter-button" data-filter="social">Social Media</button>
             <button class="btn btn-default filter-button" data-filter="television">KJC Televison</button>
        </div>
    



      <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter news1">
               Regular updates of the activities and events of the college are carried in this section to inform the student community, staffs, parents and other stakeholders. 
            </div>
            
            
             <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter inhouse">
                 <p align=justify>Kristu Jayanti College Media Room also manages in-house multi-media platforms like - The Quadrangle, Glimpses, KJC Television and KJC Radio.</p>

                 <p align=justify><b>The Quadrangle:</b> an in-house annual print newsletter published by the Department of Journalism and Mass Communication to facilitate the undergraduate journalism students in rporting. The Quadrangle covers all major events and other activities of the campus in a journalistic angle. The newsletter also carries a supplement page where it provides the students to showcase their feature writing skills.</p>

                 <p align=justify><b>Glimpses:</b> A weekly published e- newsletter, where news reports of all major events and activities of the college are covered by journalism students.</p>
               
                 
            </div>
            
             <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter photographs">
                 <p align=justify>Our dedicated photographers provide a visual experience about the college infrastructure, campus life, events and other co-curricular and extracurricular activities. Images are available to the interested community members and media upon request.</p>

                 <p align=justify>Filming and Photographing on Campus: Kristu Jayanti College’s primary mission is to support teaching and learning activities. For this reason, the college has put in place a number of restrictions on photographing and filming to ensure that students, faculty, and staff can pursue academic endeavors with as little hindrance as possible. Reporting, photographing, and videotaping are prohibited on campus without prior permission. In accordance with Kristu Jayanti College media policy, photographers and videographers must request for a permission to videograph or photograph the campus. </p>
            </div>
            
             <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter press">
                 <p align=justify>We would like to publish the events and activities beyond the boundaries of our campus to a greater community. We strongly believe that media institutions will share all the major proceedings and other potential news stories about the college. To cater this, all the details of major events, activities and initiatives are provided in the form of press releases.</p>
            </div>
            
             <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter innews">
                 <p align=justify>Kristu Jayanti College activities and other initiatives are carried in various newspapers. This section showcases news and other write ups carried across media platforms. </p>
            </div>
            
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter social">
                <p align=justify>The social media hub of Kristu Jayanti College provides an overview of events and activities happening in the college through its Facebook, twitter, and YouTube platforms. </p></div>
                
                 <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter television">
                 <p align=justify><b>Kristu Jayanti Television:</b> an offline TV programming and production started with an objective to reach out students, staff and visitors by streaming mash-up videos of all major programmes conducted in Kristu Jayanti College. These visuals will provide an opportunity for the students, staff and visitors to know the various programmes that are organized at Kristu Jayanti College. The streaming is done in the main reception TV screen and as a separate YouTube channel. KJC Radio: an offline radio programming and production started with an objective to reach out students, by streaming infotainment programme on events conducted, upcoming events and music tapes. KJC Radio will provide an opportunity for the students and staff to know the various programmes that are organized at Kristu Jayanti College. The programme are infotainment nature it will be played in the college cafeteria.  </p>
                     
         <iframe width="780" height="500" src="https://www.youtube.com/embed/okShnOoHJbI" frameborder="0" allowfullscreen></iframe>
                     
              
                
            <!-- <div class="col-md-12">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>				
				</div>-->
                
                	
                
               
            </div>

          

     
    </div>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                   <div class="list-group">
                                  <a href="#" class="list-group-item active">Media Room</a>
									  
									   <a href="#" class="list-group-item">
                                           <p align=justify>Welcome to the Media Room. Kristu Jayanti College Media Room acts as a liaison between the college and the public, especially media and other stakeholders. It also provides details of all major activities of the college through press releases and other multimedia formats.</p>
                                        </a>
                                       </div>

                                  


                                </div>

                                <div class="content-right new-content-right wow fadeIn" style="margin-left:2px; margin-right: 2px;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                    </h4>
                                    <?php include ('../php/sideMenu.php'); ?>
                                </div>




                                <div class="content-right wow fadeIn" style="padding:10px;padding-bottom: 0px;">
                                    <div class="fb-page" data-href="https://www.facebook.com/KristuJayantiCollege" data-height="870" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                                        <div class="fb-xfbml-parse-ignore">
                                            <blockquote cite="https://www.facebook.com/KristuJayantiCollege"><a href="https://www.facebook.com/KristuJayantiCollege">Facebook</a></blockquote>
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
    <script type="text/javascript" src="../js/jquery.datacategory.js"></script>    
    
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
