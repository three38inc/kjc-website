<?php
    if(isset($_REQUEST['flag']))
	{
		if($_REQUEST['flag']==1)
		{
			echo "<script>
			alert('Email Provided is invalid | Please do reconsider the email !');
			</script>";
		}
        else if($_REQUEST['flag']==2)
		{
			echo "<script>
			alert('Message has been succesfully send to the concerned Personel.Thank You !');
			</script>";
		}
        else if($_REQUEST['flag']==3)
		{
			echo "<script>
			alert('Something has happened and your message could not be sent !!');
			</script>";
		}
    }
?>
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
        .form-control,
        input {
            margin-top: 0.2em;
        }
        
        .panel-body>p {
            margin-top: .8em;
            font-size: 1em;
        }
        
        .panel-body>h3 {
            color: #34495e;
        }
        
        .panel-body {
            padding: 0px 15px;
            margin-top: 10px;
        }
        
        .well>p {
            font-size: 1em;
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
                                <div class="content-left myWelcome wow fadeIn" style="min-height:1060px;">
                                    <!--                                    <img src="../images/clg_history.jpg" class="img-responsive" style="margin-bottom:20px;" />-->
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62186.352245210895!2d77.60756996054008!3d13.058126044477483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17578c79da7d%3A0xe96dcd8e2b982f8e!2sKristu+Jayanti+College!5e0!3m2!1sen!2sin!4v1491411672229" width="810" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    <br/>
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp; Please <strong>Contact Us</strong></span>
                                    </h4>

                                    <br/>



                                    <form class="form" action="php/send-mail.php" method="post">
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
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp;How to <strong>Reach us</strong></span>
                                    </h4>
                                    <div class="well">
                                        <p><b><u> Mailing Address</u></b><br>
                                        Kristu Jayanti College (Autonomous)<br>
                                        K. Narayanapura, Kothanur (PO) <br>
                                        Bengaluru 560077
                                        </p>
                                        <br>
                                        <p><b><u>Contact Nos.</u></b><br>
                                        (080)28465611<br>
                                        (080)28465770<br>
                                        (080)28465353
                                        </p>
                                        <p><b><u>Fax No.</u></b><br>(080) 28445161
                                        </p>

                                    </div>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Official Contact Mails &amp; Contact Personnels</h3>
                                        </div>
                                        <div class="panel-body">
                                            <font size=2>
                                            <b>1. Official mail</b>
                                            <br><a href="mailto:info@kristujayanti.com">info@kristujayanti.com</a><br>
                                            <br><b>2. Admission</b>
                                            <br><a href="mailto:admission@kristujayanti.com">admission@kristujayanti.com</a><br>
                                            <br><b>3. Career Purpose</b>
                                            <br><a href="mailto:career@kristujayanti.com">career@kristujayanti.com</a></font>
                                        </div>
                                        <br><br>
                                        <div class="panel-body">
                                            <h3 class="panel-title">Campus Management</h3>
                                            <p><b>Prof. Bino Joseph</b><br> Mob.: 9449451111<br> <a href="mailto:cmshelpdesk@kristujayanti.com">cmshelpdesk@kristujayanti.com</a> <br>
                                                <a href="mailto:binojoseph@kristujayanti.com">binojoseph@kristujayanti.com</a>
                                            </p>
                                        </div>

                                        <div class="panel-body">
                                            <h3 class="panel-title">International Affairs</h3>
                                            <p><b>Fr. Augustine George</b><br>
                                                <a href="mailto:augustine@kristujayanti.com">augustine@kristujayanti.com</a><br>
                                                <a href="mailto:iroffice@kristujayanti.com">iroffice@kristujayanti.com</a>
                                            </p>
                                        </div>
                                        <div class="panel-body">
                                            <h3 class="panel-title">Placement</h3>
                                            <p><b>Prof. Sen B.Mathews</b>Mob.:9632815852<br><a href="mailto:placement@kristujayanti.com">placement@kristujayanti.com</a>
                                            </p>
                                        </div>
                                        <div class="panel-body">
                                            <h3 class="panel-title">CCPD &amp; Life Skill</h3>
                                            <p><b>Dr. Jonas Richard A</b><br>Mob.:9448532577<br><a href="mailto:jonasrichard@kristujayanti.com">jonasrichard@kristujayanti.com</a></p>
                                        </div>
                                        <br>
                                    </div>


                                </div>


                            </div>
                        </div>

                    </div>

                    <!--						                                </div>-->
                    <?php include ('../php/alerts.php');  ?>
                    <?php include('../php/footer.php'); ?>
                    



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
