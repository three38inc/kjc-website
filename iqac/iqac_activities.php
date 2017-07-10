<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website"; $imgNum = mt_rand(1,10);/*$ROOT is the base URL & should on top of every PAGE */?> 
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
                                    <img src="../images/<?php echo $imgNum; ?>.jpg" class="img-responsive" style="margin-bottom:20px;" />
                         
                                    <h4 class="mainheading"><i class="fa fa-bookmark"></i>
                                        <span>&nbsp;IQAC <strong> Activities </strong></span></h4>
                                    
                                    <p><b style="color: #cd6e08;font-weight: bold;">MAJOR ACTIVITIES OF THE INTERNAL QUALITY ASSURANCE CELL</b></p>
									
									<table border="0" class="table table-bordered table-hover">
  <tr>
    <td width="243" valign="top"><p><strong>Name of Conferences/ Workshops    Organized</strong></p></td>
    <td width="383" valign="top"><p><strong>Name of the Resource Persons</strong></p></td>
  </tr>
  <tr>
    <td width="243" valign="top"><p><strong>May    4-6, 2017</strong><br />
      National Workshop on Management of    Change for progressive secondary education for the Principals and Faculty    members of high school and higher secondary schools<strong></strong></p></td>
    <td width="383" valign="top"><p><strong>Shri. B C Rao</strong>, Managing Director, Kennametal <br />
      <strong>Mr. Hendrikus&nbsp;van&nbsp;Dord</strong>, Executive&nbsp;Vice President&nbsp;IETO<br />
      <strong>Dr. H.S.    Ganesha Bhatta</strong> Principal, MES Teachers&rsquo; College, Bengaluru<br />
      <strong>Dr Sudha    Bhogle</strong>,    Head, Student Solutions Eduquity Career Technologies<br />
      <strong>Dr. Shakuntala    Katre</strong>,    Former Senior Academic Consultant, NAAC<br />
      <strong>Dr. Aravind    Srinivas</strong>,    Tata Consultancy Services<br />
      <strong>Shri S.    Giridhar</strong>,    Chief Operating Officer, Azim Premji University<br />
      <strong>Dr. A Senthil    Kumaran</strong>,    Chief Confluencer, The Learners Confluence, The Learners Confluence<br />
      <strong>Dr. S    Ravichandra Reddy</strong>,    Former Acting Director, NAAC<br />
      <strong>Dr. Mariamma A    Varghese</strong>,    Former Vice Chancellor, SNDT University, Mumbai<strong></strong></p></td>
  </tr>
  <tr>
    <td width="243" valign="top"><p><strong>Jan    19th  and 20th 2017</strong><br />
      NAAC sponsored - 8th ICON- <br />
      National Conference on Engendering    Technological Excellence in Higher Education Bangalore</p></td>
    <td width="383" valign="top"><p><strong>Shri. Krishna    Byre Gowda</strong>,    Hon. Minister for Agriculture Govt. of Karnataka<br />
      <strong>Dr.Aravind    Sreenivasan</strong>,    Dean iON Academy, Tata Consultancy Services<br />
      <strong>Prof. R. Mahesh, </strong>Dean, Faculty    Affairs, Birla Institute of Technology &amp; Science (BITS), Pilani<br />
      <strong>Prof. Adinarayana    Kalanidhi </strong>Vice-Chairman,    Common Wealth Science and Technology Academy for Research &amp; Former    Vice-Chancellor of Anna University<br />
      <strong>Prof. M.G. Sethuraman</strong><br />
      Director    – IQAC, The Gandhigram Rural Institute, Deemed University, Gandhigram<br />
      <strong>Prof.    Sudhanshu Bhushan</strong> Head, Dept. of Higher &amp; Professional Education, National University of    Education Planning and Administration (NUEPA), New Delhi<br />
      <strong>Dr. Jayaram G,</strong><br />
      Dean,    Academics, VIT University<br />
      <strong>Prof. Geetha    Bali,</strong> Chairperson, Board of Governors, MANIT, Bhopal, MHRD, GoI Chairperson,    Standing Committee of the Council of NITs in India, MHRD, GoI Former    Vice-Chancellor, Karnataka State Women&rsquo;s University</p></td>
  </tr>
  <tr>
    <td width="243" valign="top"><p><strong>Jan 21-22 2016</strong><br />
      7th    ICON National  Conference On Role Of    Higher Educational Institutions In Reinventing Skills For Global Competency</p></td>
    <td width="383" valign="top"><p><strong>Dr.    R.Natarajan</strong>,    Former Director IIT Madras<br />
      <strong>Dr. S.    Maragatham,</strong> Dean, Faculty of Engineering, Avinashilingam University, Coimbatore<br />
      <strong>Shri. T.R. Parasuraman, </strong>Deputy Managing Director &amp; Member of the Board<strong> </strong>Kirloskar    Toyota Textile Machinery Pvt. Ltd<br />
      <strong>Mr.Ashok Paimidi, Regional Director, Nasscom</strong><br />
      <strong>Prof. Suhas    Pednekar, </strong>Principal,    Ramnarain Ruia College, Mumbai<br />
      <strong>Mr.Srikantan Moorthy</strong>, Executive Vice President, Infosys.</p></td>
  </tr>
  <tr>
    <td width="243" valign="top"><p><strong>Jan 22 and 23rd 2015</strong> <strong></strong><br />
      I-CON 6th National IQAC Conference on Relevance of    Interdisciplinary Approach in Higher Education </p></td>
    <td width="383" valign="top"><p><strong>Prof.(Dr.)    V.N. Rajashekaran Pillai</strong>Former    Vice Chairman &amp; Ex- Vice Chancellor<br />
      <strong>Prof. S. Albonse Raj</strong> Vice Principal, Loyola College, Chennai<br />
      <strong>Prof. Chandrakant Kokate</strong> Vice Chancellor - KLE University, Belagavi<br />
      <strong>Prof. Jancy James</strong> Former Vice Chancellor - University of Kerala &amp;    Mahatma Gandhi University<br />
      <strong>Prof. Meenakshi Gopinath</strong> Mentor, Lady Shri Ram College, New Delhi<br />
      <strong>Dr. Sriram Kothapalli</strong> Vice President &amp; Global Head - Quality, ITC    Infotech India Ltd.<br />
      <strong>Prof. M. Prakash</strong> Director of Studies, Seshadripuram Educational Trust,    Bangalore<br />
      <strong>Ms. Libby Sharieef</strong> Journalist</p></td>
  </tr>
  <tr>
    <td width="243" valign="top"><p><strong>08/05/2014 and 09/05/2014 </strong><br />
      National Conference on New Paradigms in Academic    Innovation </p></td>
    <td width="383" valign="top"><p><strong>Dr. Fr.    Thomas C.Mathew, VC,</strong> Christ University<br />
      <strong>Prof. B. R. Muthu Kumar,</strong> IFS, Former Ambassador of India to Tajikistan,    Belarus, Lithuania and Azerbaijan.<br />
      <strong>Prof. Vivien Amonkar,</strong> HoD, Dept of Microbiology and PG Dept. of    Biotechnology, St.Xavier&rsquo;s College, Mumbai<br />
      <strong>Dr. Ravichandra Reddy,</strong> Former Acting Director, NAAC<br />
      <strong>Prof. Rammohan Rao,</strong> Professor Emeritus, ISB Hyderabad<br />
      <strong>Dr.Subramonium Rangaswami,</strong> Former VC, Sri Ramachandra University, Chennai</p></td>
  </tr>
  <tr>
    <td width="243" valign="top"><p><strong>29/11/12 &amp; 30/11/12 </strong><br />
      National Conference on Indian Higher Education in    the 21st Century- Five Decades Ahead: Challenges and Prospects </p></td>
    <td width="383" valign="top"><p><strong>Prof. H.    Ranganath,</strong> Director, NAAC<br />
      <strong>Dr. Gopichand Kattragade,</strong> Director, Research &amp; Technology Centre,    GE<br />
      <strong>Dr. N.N. Prahallada,</strong> Regional Institute of Education (NCERT), Mysore.<br />
      <strong>Dr. H. Vinod Bhat,</strong> Pro - Vice Chancellor, Manipal University<br />
      <strong>Dr. M. S. Shyamasundar</strong> Deputy Adviser, NAAC<br />
      <strong>Dr. Geetha Swaminathan</strong> Coordinator - IQAC &amp; Former Vice Principal,    Stella Maris College, Chennai<br />
      <strong>Prof. R.W. Alexander Jesudasan,</strong> Principal, Madras Christian College<br />
      <strong>Prof.Latha Pillai,</strong> Adviser, NAAC, Former Pro Vice Chancellor, IGNOU </p></td>
  </tr>
  <tr>
    <td width="243" valign="top"><p><strong>17/11/2011 &amp; 18/11/2011</strong><br />
      <strong> </strong>National Conference on    Innovations in Teaching - Learning, Research and Unique Practices in Higher    Education </p></td>
    <td width="383" valign="top"><p><strong>Prof.    Alain Ouvrieu,</strong> Director of International    Development, Normandie Business School, France<br />
      <strong>Rev. Dr. Xavier Alphonse</strong> Member, UGC, New Delhi<br />
      <strong>Prof. Rukshana Shroff,</strong> Lady Shri Ram College, New Delhi<br />
      <strong>Dr. Anand Samuel,</strong> VC, VIT University<br />
      <strong>Rev. Dr. Casimir Raj,</strong> Founder-Director - LIBA, Loyola College, Chennai.<br />
      <strong>Dr. S. Ravichandra Reddy,</strong> Former Acting Director, NAAC<br />
      <strong>Dr. Jagannath Patil,</strong> Deputy Advisor, NAAC, Bangalore.<br />
      <strong>Rev. Dr. Abraham V.M.,</strong> Pro Chancellor, Christ University </p></td>
  </tr>
  <tr>
    <td width="243" valign="top"><p><strong>11/11/2010 &amp; 12/11/2010 </strong><br />
      NAAC    sponsored National Conference on    Quality Management in Higher Education - Role of IQAC</p></td>
    <td width="383" valign="top"><p><strong>Prof.    Pramila Maini,</strong> Director, Institute of Excellence in Higher Education &amp; Executive Council Member, NAAC<br />
      <strong>Dr. Jagannath Patil</strong> Deputy Advisor, NAAC<br />
      <strong>Rev. Dr. B. Jeyaraj SJ</strong> Principal, Loyola College, Chennai<br />
      <strong>Prof. K. Subba Rao,</strong> Director (Quality), K.L. University<br />
      <strong>Dr. Nirmala Prasad</strong> Principal, M.O.P Vaishnav College for Women, Chennai<br />
      <strong>Rev. Dr. Joseph P.P</strong> Principal, B.S.S.S Bhopal<br />
      <strong>Rev. Dr. Abraham V.M.</strong> Pro-Vice Chancellor, Christ University,    Bangalore</p></td>
  </tr>
  <tr>
    <td width="243" valign="top"><p><strong>30/09/2009 &amp; 01/10/ 2009</strong><br />
      National Conference on Dynamics of Indian Higher Education System    and Challenges</p></td>
    <td width="383" valign="top"><p><strong>Prof. N.    R. Shetty,</strong> Former VC, Bangalore University &amp; President, Indian Society for Technical Education<br />
      <strong>Dr. R. S. Deshpande,</strong> Director, ISEC<br />
      <strong>Dr. R. Sudha Rao,</strong> Former VC, KSOU and Professor, NUEPA, New Delhi<br />
      <strong>Dr. Mariamma Varghese,</strong> Former VC, SNDT University, Mumbai &amp; Former    Senior Academic Consultant, NAAC<br />
      <strong>Prof. Thimmiya A.M.</strong> Senior Vice President &amp; Head - Distributed    Learning, Manipal University<br />
      <strong>Rev. Dr. Thomas C. Mathew,</strong> Vice Chancellor, Christ University,    Bangalore<br />
      <strong>Ms. Seethalakshmi</strong> Metro Editor, Times of India<br />
      <strong>Dr. M. Prakash</strong> Principal, Seshadripuram College, Bangalore<br />
      <strong>Dr. Sudhanshu Bhushan,</strong> Professor &amp; Head, Dept. of Higher and    Professional Education, NUEPA, New Delhi<br />
      <strong>Prof. Srikanth</strong> Dean, Tata Institute of Fundamental Research </p></td>
  </tr>
</table>
				
                                    <p><b style="color: #cd6e08;font-weight: bold;">IQAC organizes various programmes to enhance skills of the faculty members</b></p>
                                    <ul><li>Special lecture on “Role of Faculty in Quality Enhancement” by  Prof Sunil Kumar Gupta, Former VC, Himachal University [8/6/2017]</li>
                                        <li>FDP on  Basic Academic Mentoring Skills – Dr. K. Sekar, Registrar, Prof & Head, Department of Psychiatric Social Work, NIMHANS [28-01-2016]</li>
                                        <li>Special lecture on Journey towards becoming ‘College with Potential for Excellence’ [CPE,CE] was delivered by Dr. Ravindra Phadke, Vice Principal, Ramnarain Ruia College, Mumbai [17/6/2015]</li>
                                        <li> Six Sigma Green Belt training in lean management was provided to all faculty members to improve the quality culture in the institution [May 1st- 3rd 2014] * Training session on Moodle to all faculty members [Oct 2014]</li>
                                        <li> A one day workshop on Curriculum Design and Development was organized by Internal Quality Assurance Cell during the year 2013. Prof.V.D Bhat and Dr. U. Laxmi Narayana from the Regional institute of Education, Mysore guided the faculty about the stages of curriculum development</li>
                                        <li>Faculty development programme on Institutional Integration and Enhancing Teaching Effectiveness at Kristu Jayanti College [03.06.13 & 04.06.13]</li>
                                        <li> IQAC extension programme - "Role of teachers in quality enhancement initiatives" offered to teaching faculty of St. Anne’s Degree College, Bangalore on 7th January 2012.</li>
                                        <li> A case study on 'Kristu Jayanti Quality Sustenance and Enhancement' was presented by Prof. Aloysius Edward at Pazzhasi Raju College (PRNSS), Kannur, Kerala on 30th June, 2012</li>
                                        <li> Session on Autonomy Perspectives and Responses (2012)</li>
                                        <li> Workshop on 'Moving Towards Autonomy' Role of Teachers in Autonomy - Dr.S.Ravichandra Reddy(Former Acting Director NAAC, Bangalore) 14/06/2011</li>
                                        <li> 5th -7th April, 2011: Prof. Aloysius Edward, Coordinator of IQAC was deputed to participate and deliberate at the International Network for Quality Assurance Agencies in Higher Education Conference at Madrid, Spain</li>
                                        <li> Workshop on Autonomy - Tasks and Challenges (2010)</li>
                                        <li> One day session on 'Road map to autonomy - Teaching learning methods' at Christ College, Bangalore (July 18, 2009)</li>
                                        <li>IQAC of the college has been invited to organize workshops on quality sustenance and enhancement at various Higher Education Institutions</li></ul>

									
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp; <strong>AQAR</strong></span>
                                    </h4>
                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="iqac_functions.php"> IQAC- Functions</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="iqac_composition.php">IQAC- Composition</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="iqac_activities.php">IQAC- Activities</a></p>
                                    </section>


                                    <section class="link-arrow">
                                        <p><a class="a-link-arrow" href="iqac_aqar.php">IQAC- AQAR</a></p>
                                    </section>


                                 

                                </div>
                                <div class="row" style="margin-left:2px; margin-right: 2px;">
                                    <div class="content-right wow fadeIn">
                                        <h4 style="margin-left:10px;" class="mainheading">
                                            <i class="fa fa-bookmark"></i>
                                            <span>&nbsp;goto <strong>QuickLinks</strong></span>
                                        </h4>

                                        <?php include ('../php/sideMenu.php'); ?>
                                    </div>



                                   <div class="content-right wow fadeIn" style="padding:10px;padding-bottom: 0px;">
                                    <div class="fb-page" data-href="https://www.facebook.com/KristuJayantiCollege" data-height="425" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                                        <div class="fb-xfbml-parse-ignore">
                                            <blockquote cite="https://www.facebook.com/KristuJayantiCollege"><a href="https://www.facebook.com/KristuJayantiCollege">Facebook</a></blockquote>
                                        </div>
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
