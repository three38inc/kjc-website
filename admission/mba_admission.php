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
                               <img src="images/banner02.jpg" class="img-responsive" style="margin-bottom:20px;" />
                                   
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp;MBA/PGDM<strong> Admission</strong></span>
                                    </h4>
                                    
									<p><b><font color="#FF0000"><u>PGDM Programme</u>:</font></b> <b>Aspiring Candidates can apply online and walk-in for an interview with the admission officer in the college campus.</b></p><br>
                                    
                                    
  <table border="0" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-condensed" style="margin:auto;">
  <tr>
  <td width="200" bgcolor="#dce6f1"><p><b>Programme Name</b></p></td>
  <td width="600" bgcolor="#dce6f1"><p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click the link below to view the respective Details</b></p></td>
  </tr></table>
  
  <table border="0" cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-condensed">
  <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/School-of-Management/mba.php"><u>MBA/PGDM</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/mba_admission_status.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/mba_fee.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
   <tr>
  <td width="200" bgcolor="#dce6f1"><p><b><a href="../academics/School-of-Management/mba.php"><u>MBA/PGDM <br />International<br /> Finance</u></a></b></p></td>
  <td width="200"><p><a href="pop_up_admission/mba_admission_status.htm" onclick="NewWindow(this.href,'fee structure','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Admission process<br /> & Status</u></center></a></p></td>
  <td width="200"><p><a href="pop_up_admission/mba_international_finance_fee.htm" onclick="NewWindow(this.href,'fee srtucture','700','400','yes','random');return false" onfocus="this.blur()"><center><u>Eligibility Criteria<br /> & Fee Structure</u></center></a></p></td>
  <td width="200"><p><a href="../admission/admission_guidelines.php"><center><u>Application Form</u></center></a></p></td>
  </tr>
  </table><br>
                                    
 <div class="well">
<div align="center"><font size="3" color="#006699"><b><u>Why MBA at Kristu Jayanti College?</u></b></font></div>
                                    <li> Holistic pedagogy based on attitude, skill, value and knowledge.</li>
                                    <li> Faculty diaspora from industry and academia.</li>
                                    <li> Option of dual specialization from Finance, Human Resource, Marketing, Systems and General Management.</li>
                                    <li> Flexibility of choosing elective papers for specialization.</li>
                                    <li> Appositive international exposure.</li>
                                    <li> International student exchange programmes.</li>
                                    <li> Interactive insights from global and national business leaders.</li>
                                    <li> Domain skill reengineering through certificate programs, seminars, conferences,MDP's.</li>
                                    <li> Value added courses based on industry certifications, life skills, and aptitude.</li>
                                    <li> Reinvigorating expert lectures.</li>
                                    <li> Industry savvy tech talks.</li>
                                    <li> Activity learning methodology based on planning, coordination and execution.</li>
                                    <li> Exquisite infrastructure including conference rooms, panel rooms, discussion rooms, auditorium and amphitheater.</li>
                                    <li> Excellent learning and leisure facilities.</li>
                                    <li> Spacious library with 24/7 access to e resources.</li>
                                    <li> Dedicated department for career grooming - CPCR.</li>
                                    <li> Focus on employability skill development.</li>
                                    <li> Vibrant Alumni network.</li>
</div>
  

                                    <p>Candidates who have explored our website, browsed through the details regarding our courses and are desirous of joining Kristu Jayanti College are requested to review our admission procedure, selection process, eligibility, guidelines and fee structure for the particular course. Candidates can either apply online (details are given on this page) or collect application form from the college office. All relevant information regarding admission will be published on this site and on college notice board.</p>

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
