<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."";$imgNum=mt_rand(1,4);/*$ROOT is the base URL & should on top of every PAGE */?> 
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kristu Jayanti College, Bengaluru</title>
    <!--<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />-->
    <meta name="author" content="Three38 inc" />
    <link rel="shortcut icon" href="../../../../images/icon.png">
    <!-- Bootstrap css -->
    <link href="../../../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--additional css-->
    <link rel="stylesheet" type="text/css" href="../../../../css/component.css" />
    <link rel="stylesheet" href="../../../../css/font-awesome.css">
    <link rel="stylesheet" href="../../../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../../css/roundIcons.css">
    <link rel="stylesheet" href="../../../../css/hoverEffect.css">
    <link rel="stylesheet" href="../../../../css/morphing.css">
    <link rel="stylesheet" href="../../../../css/navTabs.css">
    <link rel="stylesheet" href="../../../../css/animate.css">
    <link rel="stylesheet" href="../../../../css/fakeLoader.css">
    <!--        <link rel="stylesheet" href="css/res-navtabs.css">-->
    <!--custom css-->
    <link href="../../../../css/custom.css" rel="stylesheet">
    <link href="../../../../css/innerpage.css" rel="stylesheet">
    <!-- javascript -->
    <script src="../../../../js/jquery-1.11.0.min.js"></script>
    <script src="../../../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../../../js/respond.js"></script>
    <script src="../../../../js/custom.js"></script>
    <script src="../../../../js/fakeLoader.js"></script>
	
	<script language="javascript" type="text/javascript">
var win=null;
function NewWindow(mypage,myname,w,h,scroll,pos){
if(pos=="random"){LeftPosition=(screen.width)?Math.floor(Math.random()*(screen.width-w)):200;TopPosition=(screen.height)?Math.floor(Math.random()*((screen.height-h)-75)):200;}
if(pos=="center"){LeftPosition=(screen.width)?(screen.width-w)/2:100;TopPosition=(screen.height)?(screen.height-h)/2:200;}
else if((pos!="center" && pos!="random") || pos==null){LeftPosition=0;TopPosition=20}
settings='width='+w+',height='+h+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',location=no,directories=no,status=no,menubar=no,toolbar=no,resizable=no,dialog=yes';
win=window.open(mypage,myname,settings);}

</script>
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
            <?php require ("php/navbar.php"); ?>
        </div>
    </div>
    <div id="st-container" class="st-container">
        <?php include("../../../../php/offCanvasMenu.php"); ?>
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
  

								
							


								</div></div>
                            <div class="col-lg-3" style="margin-top:1em;">
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
                                        <br>
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
                                    </div>                        </div>
	 </div></div></div>

                    <?php include ('../../../../php/alerts.php');  ?>
                    <?php include('../../../../php/footer.php'); ?>
                    <?php include('../../../../php/morphingSearch.php'); ?>
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

            [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
                new CBPFWTabs(el);
            });

        })();

    </script>
   <script src="../../../../js/modernizr.custom.js"></script>
    <script src="../../../../js/spin.min.js"></script>
    <script src="../../../../js/mySpin.js"></script>
    <script src="../../../../js/swipeview.js"></script>
    <script src="../../../../js/jquery.bootstrap.newsbox.min.js"></script>
    <script src="../../../../js/classie.js"></script>
    <script src="../../../../js/morphingSearch.js"></script>
    <script src="../../../../js/sidebarEffects.js"></script>
    <script src="../../../../js/transit.js"></script>
    <script src="../../../../js/sly.js"></script>
    <script src="../../../../js/customSly.js"></script>
    <script src="../../../../js/wow.min.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        $("document").ready(function() {
            //below code is for retrieving corresponding pages #START
            var activePage = 'page1';
            $.ajax({
                url: 'snipets/' + activePage + '.php',
                success: function(data) {
                    $('#page').html(data);
                },
                error: function(data) {
                    alert('failed to load data');
                }
            });
            $('.profile-pagination li a').click(function() {
                $(this).parent().siblings().removeClass('active');
                $(this).parent().addClass('active');
            });
            $('.profile-pagination li a').click(function() {
                var activePage = this.getAttribute('data-value');
                $.ajax({
                    url: 'snipets/' + activePage + '.php',
                    success: function(data) {
                        $('#page').html(data);
                    },
                    error: function(data) {
                        alert('failed to load data');
                    }
                });
            });
            //above code is for retrieving corresponding pages #END
        });

    </script>
</body>

</html>
