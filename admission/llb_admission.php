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
                                   <img src="images/banner05.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                   
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp;LAW<strong> Admission</strong></span>
                                    </h4>
                                    
                                    <!--<p><b><font color="#FF0000"><u>MBA/PGDM: </u></font></b> Counselling result held on <b>18<sup>th</sup> March, 2017</b>
                                        <a href="mba_pgdm_counselling_result_march_18_2017.php"><b><font size=2>[View Result]</font></b>
 </a><br /> Next Counselling will be held on <b>05<sup>th</sup> May, 2017</b></p>-->
                                    
                                    
  <table border="0" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-condensed" style="margin:auto;">
  <tr>
  <td width="200" bgcolor="#dce6f1"><p><b>Programme Name</b></p></td>
  <td width="600" bgcolor="#dce6f1"><p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click the link below to view the respective Details</b></p></td>
  </tr></table>
  
  <table border="0" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-condensed">
  <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-of-Law/BA-LLB/index.php"><u>B.A., LL.B.<br> (Five Year Integrated)</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bsc_bt_admission_status.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/ba_llb_fee.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
	   <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-of-Law/BCom-LLB/index.php"><u>B.Com., LL.B. <br>(Five Year Integrated)</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bsc_bt_admission_status.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/bba_llb_fee.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
   <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/College-of-Law/BBA-LLB/index.php"><u>B.B.A., LL.B.<br> (Five Year Integrated)</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/bsc_bt_admission_status.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/bba_llb_fee.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
	 
  </table><br>
                                    
									<p align=justify>A key instrument to plan and drive the economic means that portray a globalized world is Legislative Law. This has gone under noteworthy weight to change its workings, foundations and elements. Legal education in India is at present experiencing a transformation phase. Law as a profession is going potential again in 21st century because of globalization and this has posed many challenges to legal education in India, but has also brought ample opportunities. The Indian lawful calling is perhaps the largest in the World.</p>

									<p align=justify>The need for principled lawyers, and for the educational institutions to shape them - is especially pressing in India, whose fast economic growth is inseparably connected to its more unpredictable association in the worldwide market. One of the real obstacles the nation needs to overcome on its way to reasonable improvement is unequivocally that of the dearth of talented legitimate experts.</p>

									<p align=justify>The legal education degrees and the curriculum offered at Kristu Jayanti College of Law envisions to facilitate India's need for legal advisors who are able not just at understanding the complexities of Law in this new universal situation, but also at designing novel approaches to change them to meet the regional peculiarities and the country's worldwide interests. Such experts are sure to play a pivotal role in India's venture to set up manageable, comprehensive advancement.</p>

									<p align=justify>Potential legal advisors require legitimate instruction degrees to provide legal counsel. The training way ordinarily takes an aggregate of five to seven years to finish, including three years of undergraduate programme and two years of Legal Education. </p>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                     
                                     <?php include('right-admission.php');?>
                                   
                                           
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
