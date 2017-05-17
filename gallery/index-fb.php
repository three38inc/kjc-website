<!DOCTYPE html>
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
        <link rel="stylesheet" href="../css/roundIcons.css">
        <link rel="stylesheet" href="../css/morphing.css">
        <link rel="stylesheet" href="../css/fakeLoader.css">
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

                            <div class="row">
                               
                               <?php include(''); ?>
                                <div class="jumbotron">
                                    <div class="container">
                                        <h1>[PUT TITLE HERE]</h1>
                                        <p>[INSERT CONTENT HERE ...]</p>
                                        <p>
                                            <a class="btn btn-primary btn-lg">Learn more</a>
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <?php include ('../php/alerts.php');  ?>
                        <?php include('../php/footer.php'); ?>
                        <?php include('../php/morphingSearch.php'); ?>




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
        <script src="../js/scripts.js"></script>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
        </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
        <script>
            var curImagePos,galleryImageNo;
            window.optionTabMargin="85";
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })


            $(document).ready(function(){

                $('.gallery-tab').hide();
                getData('album');


            });
            $('.gallery-tab-arrowRight').click(function() {
                var far = $(window).width();
                var pos = $('.gallery-tab-thumbs').scrollLeft() + far;
                $('.gallery-tab-thumbs').animate( { scrollLeft: pos }, 1000, 'easeOutQuad' );
            });

            $('.gallery-tab-arrowLeft ').click(function() {
                var far = $(window).width();
                var pos = $('.gallery-tab-thumbs').scrollLeft() - far;
                $('.gallery-tab-thumbs').animate( { scrollLeft: pos }, 1000, 'easeOutQuad' );
            });
            $('.album-tab-arrowRight').click(function() {
                var far = $(window).width();
                var pos = $('.album-tab-thumbs').scrollLeft() + far;

                $('.album-tab-thumbs').animate( { scrollLeft: pos }, 1000, 'easeOutQuad' );

                //				var data=($('.album-tab-thumbs-desc').css("margin-left"));
                //				data=data.replace("px","");
                //								console.log($('.album-tab-thumbs').scrollLeft());
                //				
                //					data=(Number(data)-($('.album-tab-thumbs').scrollLeft()-1))+"px";
                //
                //					$('.album-tab-thumbs-desc').css("margin-left",data);

            });

            $('.album-tab-arrowLeft').click(function() {
                var far = $(window).width();
                var pos = $(' .album-tab-thumbs').scrollLeft() - far;
                $('.album-tab-thumbs').animate( { scrollLeft: pos }, 1000, 'easeOutQuad' );

                //				var data=($('.album-tab-thumbs-desc').css("margin-left"));
                //				data=data.replace("px","");
                //				
                //				if($('.album-tab-thumbs').scrollLeft()>0){
                //
                //					data=(Number(data)+($('.album-tab-thumbs').scrollLeft()-1))+"px";
                //
                //					$('.album-tab-thumbs-desc').css("margin-left",data);
                //				}
            });


            $(document).on("click",".album-tab-thumbs-img a,.album-tab-thumbs-desc-a", function(){
                var data=$(this).attr("href");
                //				$('.album-tab').css("display","none");
                $('.album-tab').hide();
                $('.gallery-tab').show();
                getData(data);
            });
            $(document).on("click",".gallery-tab-thumbs-img a", function(){
                var data=$(this).attr("href");
                $('#option-tab').show();

                curImagePos=Number($(this).attr("id"));
                $('.album-tab').hide();
                $('.gallery-tab').hide();


                $('.gallery').css({
                    "background":"url("+data.slice(1,data.length)+") no-repeat",
                    "background-size": "100%"
                });


            });
            $(document).on("click",".backToAlbum", function(){
                $('.album-tab').show();
                $('.gallery-tab').hide();


            });
            $(".gallery").hover(
                function(){
                    if($(window).width()>=961)
                        window.optionTabMargin="90";
                    else if($(window).width()>=641)
                        window.optionTabMargin="85";
                    else if($(window).width()>=481)
                        window.optionTabMargin="80";
                    else if($(window).width()>=320)
                        window.optionTabMargin="60";
                    $('#option-tab').css("margin-left",window.optionTabMargin+"%");
                },
                function(){
                    $('#option-tab').css("margin-left","100%");
                }
            );


            $(document).on("click","#option-tab i:nth-child(1)", function(){
                $("#option-tab").hide();
                $('.album-tab').show();
            });
            $(document).on("click","#option-tab i:nth-child(2)", function(){
                $("#option-tab").hide();
                $('.gallery-tab').show();
            });
            $(document).on("click","#option-tab i:nth-child(3)", function(){
                if(curImagePos>1)curImagePos=Number(curImagePos)-1;
                if(curImagePos<10){curImagePos="0"+curImagePos;}
                var data=$('#'+curImagePos).attr("href");
                $('.gallery').css({
                    "background":"url("+data.slice(1,data.length)+") no-repeat",
                    "background-size": "100%"
                });
            });
            $(document).on("click","#option-tab i:nth-child(4)", function(){
                if(curImagePos<galleryImageNo)curImagePos=Number(curImagePos)+1;
                if(curImagePos<10){curImagePos="0"+curImagePos;}
                var data=$('#'+curImagePos).attr("href");
                $('.gallery').css({
                    "background":"url("+data.slice(1,data.length)+") no-repeat",
                    "background-size": "100%"
                });
            });
            $(document).on("click",".galleryClose", function(){
                $('.gallery-tab').hide();
                $("#option-tab").show();
            });
            $(document).on("click",".albumClose", function(){
                $('.album-tab').hide();
                $("#option-tab").show();
            });

            function getData(s){
                var screen=s;
                var phtml="";
                $('#loadingmessage').show();  // show the loading message.
                $.ajax({
                    url: "getImages.php",
                    type: "POST",
                    cache: false,
                    data: "screen="+ screen,
                    dataType : 'json',
                    success : function(data){

                        if(data['type']=='album'){
                            $(".album-tab-thumbs").html(data['html']);
                            $(".album-tab span:nth-child(2)").html("Albums 1 to "+data['no']+" of "+data['no']);

                            //														$(".album-tab-thumbs-desc span:nth-child(1)").html()
                            //							var arr = data['dirDesc'].split(',');
                            //							for(i=0; i < arr.length; i++){
                            //								phtml=phtml+"<span>"+arr[i]+"</span>" 
                            //							}
                            //							$(".album-tab-thumbs-desc").html(phtml);
                            console.log(data['html']);

                        }
                        else if(data['type']=='image')
                        {
                            $(".gallery-tab-thumbs").html(data['html']);
                            $(".gallery-tab span:nth-child(2)").html("Images 1 to "+data['no']+" of "+data['no']);
                            galleryImageNo=data['no'];
                            console.log(data['html']);
                        }
                        $('#loadingmessage').hide(); // hide the loading message
                    },
                    error: function(data){
                        alert("Error :"+data['no']);
                    }
                });
            }
        </script>

    </body>   
</html>