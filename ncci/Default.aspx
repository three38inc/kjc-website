<%@ page language="C#" autoeventwireup="true" inherits="_Default, App_Web_irrpwskg" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home | NCCI 2K17</title>
    <%-- ------ CSS ------ --%>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" /> 
    
     <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>
<body>
    <form id="form1" runat="server">
    <header id="header">
    <div class="top-bar">
    <div class="container">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <div class="social">
     <ul class="social-share">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>        
        <li><a href="#"><i class="fa fa-skype"></i></a></li>
     </ul>     
       
    </div>
    </div>
    </div>
      </div><%--container--%>
        </div><%--/top-bar--%>
      <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="Default.aspx"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="Default.aspx">Home</a></li>
                        <li><a href="conference.aspx">Conference</a></li>  
                        <li><a href="services.aspx">Organizing Committee</a></li>        
                        <li><a href="contactus.aspx">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
 
    </header>
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">NATIONAL CONFERENCE ON</h2>
                                    <h1 class="animation animated-item-2" style="font-size:xx-large"><b>COMPUTATIONAL INTELLIGENCE</b></h1>
                                    <h2 class="animation animated-item-3">SEPTEMBER 15, 2017</h2>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img1.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">Organized by</h2>
                                    <h1 class="animation animated-item-2">Department of Computer Science (UG)</h1>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img2.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">In Association With</h2>
                                    <h1 class="animation animated-item-2">ICT Academy</h1>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>

            <!--/#main-slider-->
      </section>
    <!--/#feature-->
    <section id="Section2" style="background-color:#595959">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown">
                    <div class="skill">
                        <h2>ABOUT THE COLLEGE</h2>
                        <p style="text-align:justify;color:#dbd6d6"><b>&nbsp;&nbsp;&nbsp;&nbsp;Kristu Jayanti College</b>, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI). The college is affiliated to Bangalore University and is reaccredited with highest grade 'A' by NAAC in second cycle of accreditation. The college is recognized by UGC under the category 2(f) & 12(b). The college was accorded autonomous status in the year 2013 by the University Grants Commission, Government of Karnataka & the Bangalore University. In India Today - Nielsen survey 2017 the college is ranked 2nd Best BCA College, 9th Best Commerce College, 17th Best Science College & 14th Best Arts College in India and 2nd,3rd,4th positions in Arts, Commerce & Science among Top 10 Colleges in Bangalore.</style="text-align:justify">	                    <p style="text-align:justify;color:#dbd6d6">&nbsp;&nbsp;&nbsp;&nbsp;The institution strives to fulfill its mission to provide educational opportunities to all aspiring youth to excel in life by developing academic excellence, fostering values, creating civic responsibility and building global competencies in a dynamic environment.</p>
                   <br />
                             </div>

                </div><!--/.col-sm-6-->

                <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <div class="skill">
                        <h2>ABOUT THE DEPARTMENT</h2>
                        <p style="text-align:justify;color:#dbd6d6">&nbsp;&nbsp;&nbsp;&nbsp;The Computer Science Department was started in 1999 as the first Department in the          institution. The Department offers Bachelor of Computer Applications (BCA) and Bachelor of Science in Computer Science, Mathematics, Electronics (CSME) and Statistics (CSMS). In India Today - Nielsen Survey-2017, the college is ranked 2nd Best BCA College in India. The Department believes in continuous knowledge enhancement by means of paper publications, regular participation in National and International seminars and workshops.</p>	                   </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section>

            </div><!--/.row-->
        </div><!--/.container-->
    </section>

            <!--/#main-slider-->
    <section id="Section1">
        <div class="container">
            <div class="row wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="skill">
                        <h2><p style="color:black">CONFERENCE PREAMBLE</p></h2>
                        <p style="color:black" style="text-align:justify"><b>&nbsp;&nbsp;&nbsp;&nbsp;National Conference on Computational Intelligence (NCCI-2017) will bring together leading researchers, engineers and scientists in the domain of interest around the country by providing a platform to present new advances and research results in the field of Computational Intelligence.</p><br />
                    </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section>
    <!--/#middle-->

    <!--/#main-slider-->
    <section id="middle">
        <div class="container">
            <div class="row">
                        <h2><p style="color:white">CALL FOR PAPERS</p></h2><br />
                        <p style="color:white" style="text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;Topics for the Conference include, but are not limited to :</p ><br />
                <div class="col-sm-6 wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="skill">
                        <ul>
                            <li><p>Cloud Computing</p></li>
                            <li><p>Grid Computing</p></li>
                            <li><p>Big data</p></li>
                            <li><p>Machine Learning</p></li>
                            <li><p>Neural Networks</p></li>
                            <li><p>Fuzzy Logic</p></li>
                            <li><p>Fuzzy Systems</p></li>
                            <li><p>Evolutionary Computation</p></li>
                            <li><p>Evolutionary Algorithms</p></li>
                            <li><p>Genetic Algorithms</p></li>
                        </ul>
                    </div>

                </div><!--/.col-sm-6-->

                <div class="col-sm-6 wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="800ms">
                    <div class="skill">
                        <ul>
                            <li><p>Swarm Intelligence</p></li>
                            <li><p>Artificial Intelligence</p></li>
                            <li><p>Mobile Computing</p></li>
                            <li><p>Expert System</p></li>
                            <li><p>Pattern Recognition</p></li>
                            <li><p>Optimization</p></li>
                            <li><p>Knowledge Discovery</p></li>
                            <li><p>Digital Image Processing</p></li>
                            <li><p>Internet Of Things</p></li>
                            <li><p>Network Security</p></li>
                        </ul>
                </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section>
    <!--/#middle-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 <a target="_blank" href="http://kristujayanti.edu.in/" title="Kristu Jayanti College">Kristu Jayanti College</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="contactus.aspx">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="#" class="back-to-top"><i class="fa fa-2x fa-angle-up"></i></a>
    </footer>
    <!--/#footer-->
    <!-- Back To Top -->
    <script type="text/javascript">
        jQuery(document).ready(function () {
            var offset = 300;
            var duration = 500;
            jQuery(window).scroll(function () {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.back-to-top').fadeIn(duration);
                } else {
                    jQuery('.back-to-top').fadeOut(duration);
                }
            });

            jQuery('.back-to-top').click(function (event) {
                event.preventDefault();
                jQuery('html, body').animate({ scrollTop: 0 }, duration);
                return false;
            })
        });
    </script>
    <!-- /top-link-block -->
    <!-- Jscript -->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="js/jquery.isotope.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/wow.min.js" type="text/javascript"></script>
    </form>
</body>
</html>
