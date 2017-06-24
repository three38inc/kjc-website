<?php
    if(isset($_REQUEST['flag']))
	{
		if($_REQUEST['flag']==1)
		{
			echo "<script>
			alert('Email Provided is invalid | Please do reconsider the email !');
			</script>";
		}
        
    }
?>
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
            .form-control,
            input {
                margin-top: 0.2em;
            }
            
            .glyphicon {
                margin-right: 4px !important;
            }
            
            .pagination .glyphicon {
                margin-right: 0px !important;
                /*		background-color:#555;*/
            }
            
            .prev,
            .next {
                font-size: 10px;
                padding: 0px;
                /*		background-color:#555;*/
            }
            
            .pagination a {
                color: #555;
            }
            
            .news.panel {
                border-color: white;
                height: 650px;
                overflow-y: hidden;
                box-shadow: none;
                padding: 0px 10px;
            }
            
            .panel ul {
                padding: 0px;
                margin: 0px;
                list-style: none;
            }
            
            .news .panel-body {
                padding: 10px 5px 0px 5px;
            }
            
            .panel-footer {
                float: right;
                padding: 0px;
                /*		background-color:#555;*/
            }
            
            .panel-heading {
                padding-top: 5px;
                padding-bottom: 10px;
            }
            
            .pagination>li>a,
            .pagination>li>span {
                position: relative;
                float: left;
                padding: 3px 15px;
                text-decoration: none;
                color: #777;
                background-color: #eee;
                border: 1px solid transparent;
                margin-left: -1px;
            }
            
            .pagination>li>a:hover,
            .pagination>li>span:hover,
            .pagination>li>a:focus,
            .pagination>li>span:focus {
                background-color: #ccc;
            }
            
            .pagination>li:first-child>a,
            .pagination>li:first-child>span {
                margin-left: 0;
                border-bottom-left-radius: 2px;
                border-top-left-radius: 2px;
            }
            
            .news-item {
                padding: 15px 4px;
                font-size: 13px;
                margin: 0px;
                border-bottom: 1px dotted #555;
            }
            .content-right{
                margin-top: 0px;
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
                            <div class="row" style="margin-top: 100px; padding-left: 10px; padding-right: 10px;">

                            </div>
                            <div class="row">
                                <div class="marginTopDiv">&nbsp;</div>
                                <div class="col-lg-9">
                                    <div class="content-left myWelcome wow fadeIn" style="min-height:1010px;">
                                        <img src="../images/career.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                        <br/>
                                        <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                            <span>&nbsp; Apply for <strong>Career Vacancies</strong></span>
                                        </h4>

                                        <br/>



                                        <form class="form" action="php/send-mail.php" method="post"  enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-lg-2 control-label">Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="inputEmail" placeholder="Name" name="name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-lg-2 control-label">Phone</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="inputEmail" placeholder="Phone" name="phone">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inlineRadioOptions" class="col-lg-2 control-label" style="margin-top:5px">Apllying For</label>
                                                <label class="radio-inline" style="margin-bottom:-10px;">
                                                  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Professor / Lecturers
                                                </label>
                                                <label class="radio-inline" style="margin-bottom:-10px;">
                                                  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Administrative staff
                                                </label>
                                                <label class="radio-inline" style="margin-bottom:-10px;">
                                                  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Support staff
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-lg-2 control-label">Upload CV</label>
                                                <div class="col-lg-10">
                                                    <input type="file"  name="uploaded_file" class="form-control" id="uploaded_file" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="textArea" class="col-lg-2 control-label">Message</label>
                                                <div class="col-lg-10">
                                                    <textarea class="form-control" rows="3" id="textArea" name="message"></textarea>
                                                    <span class="help-block">Please be free to contact us. While you message your query please try to be more specific and give clear details about the matter.</span>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="col-lg-10 col-lg-offset-2">
                                                    <button type="reset" class="btn btn-default">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>


                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">

                                        <div class="news panel panel-default" style="background-color:white;margin-bottom:0;max-height:600px;">
                                            <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                                <span><strong style="font-size:1em;"> Career Vacancies</strong></span>
                                                <ul class="pagination pull-right" style="margin: 0px;">
                                                    <li>
                                                        <a href="#" class="prev" id="prev-high">
                                                            <i class="fa fa-chevron-left"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="next" id="next-high">
                                                            <i class="fa fa-chevron-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </h4>
                                            <div class="panel-body">
                                                <div class="row">

                                                    <ul class="demo1">
                                                        <li class="news-item">
                                                            <table cellpadding="4">
                                                                <tr>
                                                                    <td><img src="../images/megaphone-icon.png" width="50" height="50" class="img-circle" /></td>
                                                                    <td><b>Professor / Lecturers:</b> <b>Candidate Profile</b> : Commitment towards work <br><b>Qualification</b> : As per AICTE Norms <br> <b>Last Date</b> : With in 7 days <a href="#">Apply here</a></td>
                                                                </tr>
                                                            </table>
                                                        </li>
                                                        <li class="news-item">
                                                            <table cellpadding="4">
                                                                <tr>
                                                                    <td><img src="../images/megaphone-icon.png" width="50" height="50" class="img-circle" /></td>
                                                                    <td><b>Professor / Lecturers:</b> <b>Candidate Profile</b> : Commitment towards work <br><b>Qualification</b> : As per AICTE Norms <br> <b>Last Date</b> : With in 7 days <a href="#">Apply here</a></td>
                                                                </tr>
                                                            </table>
                                                        </li>
                                                        <li class="news-item">
                                                            <table cellpadding="4">
                                                                <tr>
                                                                    <td><img src="../images/megaphone-icon.png" width="50" height="50" class="img-circle" /></td>
                                                                    <td><b>Professor / Lecturers:</b> <b>Candidate Profile</b> : Commitment towards work <br><b>Qualification</b> : As per AICTE Norms <br> <b>Last Date</b> : With in 7 days <a href="#">Apply here</a></td>
                                                                </tr>
                                                            </table>
                                                        </li>
                                                        <li class="news-item">
                                                            <table cellpadding="4">
                                                                <tr>
                                                                    <td><img src="../images/megaphone-icon.png" width="50" height="50" class="img-circle" /></td>
                                                                    <td><b>Professor / Lecturers:</b> <b>Candidate Profile</b> : Commitment towards work <br><b>Qualification</b> : As per AICTE Norms <br> <b>Last Date</b> : With in 7 days <a href="#">Apply here</a></td>
                                                                </tr>
                                                            </table>
                                                        </li>


                                                    </ul>
                                                </div>

                                            </div>



                                            <!--
                                            <div class="panel-body">
                                                <h3 class="panel-title">Professor / Lecturers</h3>
                                                <font size=2><b>Candidate Profile</b> : Commitment towards work <br><b>Qualification</b> : As per AICTE Norms <br> <b>Last Date</b> : With in 7 days</font>
                                            </div>

                                            <hr>

                                            <div class="panel-body">
                                                <h3 class="panel-title">Professor / Lecturers</h3>
                                                <font size=2><b>Candidate Profile</b> : Commitment towards work <br><b>Qualification</b> : As per AICTE Norms <br> <b>Last Date</b> : With in 7 days</font>
                                            </div>
                                                <hr>

                                            <div class="panel-body">
                                                <h3 class="panel-title">Professor / Lecturers</h3>
                                                <font size=2><b>Candidate Profile</b> : Commitment towards work <br><b>Qualification</b> : As per AICTE Norms <br> <b>Last Date</b> : With in 7 days</font>
                                            </div>
                                                <hr>

                                            <div class="panel-body">
                                                <h3 class="panel-title">Professor / Lecturers</h3>
                                                <font size=2><b>Candidate Profile</b> : Commitment towards work <br><b>Qualification</b> : As per AICTE Norms <br> <b>Last Date</b> : With in 7 days</font>
                                            </div>
-->

                                        </div>
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;How to <strong>Reach us</strong></span>
                                        </h4>
                                        <div class="well">
                                            <p><b> Mailing Address</b><br>Kristu Jayanti College (Autonomous)<br>K. Narayanapura, Kothanur (PO) <br>Bengaluru 560077
                                            </p>
                                            <p><b> Contact Nos.</b><br>(080)28465611<br>(080)28465770<br>(080)28465353
                                            </p>
                                            <p><b> Fax No.</b><br>(080) 28445161
                                            </p>

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
