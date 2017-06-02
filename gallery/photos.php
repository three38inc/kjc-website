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
        <link rel="shortcut icon" href="../images/icon.png">
        <!-- Bootstrap css -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--additional css-->
        <link rel="stylesheet" type="text/css" href="../css/component.css" />
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/album.css"/>
        <link rel="stylesheet" href="../css/roundIcons.css">
        <link rel="stylesheet" href="../css/morphing.css">
        <link rel="stylesheet" href="../css/fakeLoader.css">
        <link rel="stylesheet" href="assets/lightbox.min.css">





        <!--custom css-->
        <link href="../css/custom.css" rel="stylesheet">
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
                            <div class="row" style="margin-top: 80px; padding-left: 10px; padding-right: 10px;">
                                <!--								<img class="img-responsive col-lg-12" style="width:100%;padding:0px;" src="../images/researchBanner.jpg" alt="cover-img" />    -->
                            </div>

                            <div class="row gallery">
                            
                            
                            
            <?php
                if(!session_id()){
                    session_start();
                }
                                
                if(isset($_SESSION['facebook_access_token'])){
                    // Get access token from session
                    $access_token = $_SESSION['facebook_access_token'];
                }else{
                    // Facebook app id & app secret 
                    $appId = '1885474451740403'; 
                    $appSecret = 'f609f62dac6e0d33b092eab7cb4d93bf';

                    // Generate access token
                    $graphActLink = "https://graph.facebook.com/oauth/access_token?client_id={$appId}&client_secret={$appSecret}&grant_type=client_credentials";

                    // Retrieve access token
                    $accessTokenJson = file_get_contents($graphActLink);
                    $accessTokenObj = json_decode($accessTokenJson);
                    $access_token = $accessTokenObj->access_token;

                    // Store access token in session
                    $_SESSION['facebook_access_token'] = $access_token;
                }
                                

                // Get album id from url
                $link = isset($_GET['link'])?$_GET['link']:header("Location: index.php");
                $album_id = isset($_GET['album_id'])?$_GET['album_id']:header("Location: index.php");
                $album_name = isset($_GET['album_name'])?$_GET['album_name']:header("Location: index.php");
                                
                                echo '
                                <div class="col-lg-12">
                                    <h3 class="mb-50">
                                    <a href="'.$link.'" type="button" class="fb-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="View on Facebook" target="_blank">
                                    <i class="fa fa-facebook-square"></i> 
                                    </a>
                                    '.$album_name.'
                                    <small class="pull-right">
                                    <a href="index.php">
                                    <i class="fa fa-arrow-left"></i> Back</a>
                                    </small>
                                    </h3>
                                    
                                </div>
                                ';

                // Get access token from session
                $access_token = $_SESSION['facebook_access_token'];
                                

                // Get photos of Facebook page album using Facebook Graph API
                $graphPhoLink = "https://graph.facebook.com/v2.9/{$album_id}/photos?fields=source,images,name&access_token={$access_token}&limit=500";
                $jsonData = file_get_contents($graphPhoLink);
                $fbPhotoObj = json_decode($jsonData, true, 512, JSON_BIGINT_AS_STRING);

                // Facebook photos content
                $fbPhotoData = $fbPhotoObj['data'];
                //print_r ($fbPhotoData);
                                
                echo '<div class="fb-album">';    

                foreach($fbPhotoData as $data){
                    $imageDataL = current($data['images']);
                    $imageData = end($data['images']);
                    $imgSource = isset($imageData['source'])?$imageData['source']:'';
                    $imgSourceL = isset($imageDataL['source'])?$imageDataL['source']:'';
                    $name = isset($data['name'])?$data['name']:'';

                    echo "<div class='col-lg-3 col-md-3 col-sm-4 col-xs-6'>";
                    echo "<a href='{$imgSourceL}' data-lightbox='$album_name'>";
                    echo "<div class='fb-item' style='background-image: url({$imgSource})'>";
//                    echo "<img src='{$imgSource}' alt='' class='img-responsive'>";
//                    echo "<h3>{$name}</h3>";
                    echo "</div>";
                    echo "</a>";
                    echo "</div>";
                }
                                
                echo '</div>';
            ?>
                                
                                
                            
                               
                                

                            </div>

                        </div>

                        <?php include ('../php/alerts.php');  ?>
                        <?php include('../php/footer.php'); ?>
                        <?php /*include('../php/morphingSearch.php');*/ ?>




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
<!--        <script src="../js/morphingSearch.js"></script>-->
        <script src="../js/sidebarEffects.js"></script>
        <script src="../js/transit.js"></script>
        <script src="../js/sly.js"></script>
        <script src="../js/customSly.js"></script>
        <script src="../js/wow.min.js"></script>
        <script src="../js/isotope-docs.min.js"></script>
        <script src="assets/lightbox.min.js"></script>
        <script src="assets/imagesloaded.pkgd.min.js"></script>
        <script src="assets/masonry.pkgd.min.js"></script>
        <script src="../js/scripts.js"></script>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
        </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
        <script>
            $(document).ready(function(){
//                $('.fb-album').masonry({
//                  // options
//                  itemSelector: '.fb-item',
//                  gutter: 1
//                });
//                
//                var $album = $('.fb-album').masonry({
//                  // options...
//                    itemSelector: '.fb-item',
//                    columnWidth: 200
//                });
//                // layout Masonry after each image loads
//                $album.imagesLoaded().progress( function() {
//                  $album.masonry('layout');
//                });
            });
        </script>

    </body>   
</html>