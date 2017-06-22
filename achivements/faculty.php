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
    <script type="text/javascript">$crisp=[];CRISP_WEBSITE_ID="bfee4615-2d13-4129-a9c2-d7b8095e3d0e";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.im/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
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
                                        <span>&nbsp;Faculty <strong> Achievements</strong></span></h4>
									

									
									<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Summary </h3>
  </div>
  <div class="panel-body">
	<p>The faculty members of the college facilitate the honing of each student's individual capacities to the optimum level and play a vital role in shaping the students' personality, knowledge and career. They promote and actively participate in various research activities and have many international and national publications, presentations to their credit.<br>
<b>*</b> 2 faculty members  completed Ph.D  in this academic year [Prof.Gita P C- Department of Management Studies and Prof. Vinodha Devi K- Commerce [UG]<br>
<b>*</b> Published 5 books, 2 chapters in book, 55 articles and presented 31 papers. <br>
<b>*</b> 113 National and International conferences were attended <br>
<b>*</b> 24 faculty members served as consultants and resource persons for 34 various academic programmes.<br>
		<b>*</b> <b>Dr. V. Chithra</b> received Best Ph.D. thesis award from the Prestige Institute  of management, Gwalior<br>
		<b>*</b> <b>Dr.Jaishankar pillai</b> received the Dr. A.P .J Distinguished Fellow Award at National Conference on  Natural Sciences organized by Holy Cross College(Autonomous), Tiruchirappali, Tamilnadu for his outstanding services in the field of Biological Sciences, 2016.</p>


  </div>
</div>
									
										<div class="inner-content">
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading1">
														<h5 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
																ACADEMIC DEVELOPMENT PROGRAMMES FOR FACULTY  -16
															</a>
														</h5>
													</div>
													<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
							<div class="panel-body">
								<p align=justify>Academic development programmes are organized to develop understanding in recent advances and competence in research as well as to improve teaching pedagogies. Faculty members are encouraged to participate in international and national conferences and present papers.</p>
								<p>1.	<b>Annual Strategic Plan (ASP):</b> Prof Arun Kumar Grover, VC, Panjab University - special  Talk on Prospects and expectations from HE in contemporary times. [9/6/2016]</p>
								<p>2.	Deanery of Commerce and Management organised a special <b>lecture on Publications in International Journals</b> - Dr. Justin Paul, Professor, University of Puerto Rico, USA [27/06/2016]</p>
								<p>3.	<b>FDP on .Net framework</b> was organized by the Department of Computer Science [23/11/2016 & 24/11/2016]</p>
								<p>4.	Department of Computer Science PG organized a <b>Research Colloquium on “Writing Research proposals for funding agencies”, </b>Resourceperson - Dr. Subhashini.P. Professor, Department of Computer Science, Avinashilingam University, Coimbatore, [26.11.2016]</p>
								<p>5.	An <b>Intercollegiate Faculty Development Programme on Bio-Instrumentation</b> was organized by the Department of Life sciences on  [19/12/2016]</p>
								<p>6.	IQAC organized <b>NAAC sponsored National Conference</b> on Engendering Technological Excellence in Higher Education [January19th and 20th 2017]. It was inaugurated by Shri. Krishna Byre Gowda, Hon. Minister for Agriculture Govt. of Karnataka. </p>
								<p>7.	<b>Interaction with Honourable Justice Kurian Joseph,</b> Judge of Supreme Court of India [23/1/2017] </p>
								<p>8.	Special <b>Interactive programme with Bharat Ratna Prof. C.N.R.Rao,</b> National Research Professor, Honorary president & Linus Pauling Research professor, Jawaharlal Nehru centre for advanced scientific research was organized for all the faculty members [25/1/2017]</p>
								<p>9.	<b>Life Skill Education Training</b> was provided by Centre for Life Skill Education [CLSE] in collaboration with Rajiv Gandhi National Institute of Youth Development June 16 to 21, 2016. 40  faculty members were benefitted in this year</p>
								<p>10.	Women Empowerment Cell of the college organized a National <b>Conference on Women on the move:</b> Resonating Excellence on 23/09/16 where Ms. Aruna Newton Associate Vice-President and head, Global Diversity and Inclusion, sustainability reporting and Governance, Infosys   gave the presidential address</p>
								<p>11.	An MDP was organized by the Department of Management Studies on Data Analytics for Business Decisions on 3/09/2016</p>
								<p>12.	An MDP on Digital Marketing Strategies was organized by the Department of Management Studies on 07/01/2017</p>
								<p>13.	A <b>Workshop on ‘Projective Techniques’</b> was organized by the Department of Psychology with Dr.Kishore Adhikari, Assistant Professor, Christ University as resource person on 10/08/2016</p>
								<p>14.	A <b>session on ‘Qualitative Analysis’</b> was organized by the Department of Psychology on with Fr. Biju Sebastian, Professor in Psychology, Montford College, Bangalore as resource person on 29/08/2016</p>
								<p>15.	International Conference on Accounting Banking and Finance in Emerging markets: Challenges and Opportunities by the Department of Commerce (PG) on 5 & 6/10/2016.</p>
								<p>16.	Department of Commerce organized International Conference on Inclusive Business Growth and Sustainable Development on 22 & 23/02/2017 in collaboration with ACCA, UK</p>
														</div>
													</div>
												</div></div></div>
									
																	<div class="inner-content">
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading2">
														<h5 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
																RESEARCH ACTIVITIES 2016-2017
															</a>
														</h5>
													</div>
													<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
							<div class="panel-body">
								<p><b>Details on research publications 2016-2017</b><br>
									International Journals</p>
								<table border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
  <tr>
    <td width="240" valign="top"><p>&nbsp;</p></td>
    <td width="114" valign="top"><p align="center"><strong>2016-2017</strong></p></td>
  </tr>
  <tr>
    <td width="240" valign="top"><p>Books    Publications[with ISBN]</p></td>
    <td width="114" valign="top"><p align="center">5</p></td>
  </tr>
  <tr>
    <td width="240" valign="top"><p>Chapter    in Book</p></td>
    <td width="114" valign="top"><p align="center">2</p></td>
  </tr>
  <tr>
    <td width="240" valign="top"><p>Articles    in Peer Reviewed Journals</p></td>
    <td width="114" valign="top"><p align="center">55</p></td>
  </tr>
  <tr>
    <td width="240" valign="top"><p>Scopus </p></td>
    <td width="114" valign="top"><p align="center">02</p></td>
  </tr>
  <tr>
    <td width="240" valign="top"><p>Conference    proceedings</p></td>
    <td width="114" valign="top"><p align="center">8</p></td>
  </tr>
  <tr>
    <td width="240" valign="top"><p><strong>Total publications</strong></p></td>
    <td width="114" valign="top"><p align="center"><strong>63</strong></p></td>
  </tr>
								</table>


																
														</div>
													</div>
												</div></div></div>
									
						<div class="inner-content">
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading3">
														<h5 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
																DETAILS OF PUBLICATIONS
															</a>
														</h5>
													</div>
													<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
							<div class="panel-body">
								<p><b><u>BOOKS PUBLISHED : 5</u></b></p>
									<p><b>Dr. Jonas Richard A-Department  of Social Work</b> -Stress Management(SM)Through Life Skills Education(LSE), Shanlax Publications, Madurai,978-93-85977-54-1,June,2016</p>
									<p><b>Dr. Jonas Richard A-Department  of Social Work</b> - Psychosocial Challenges of Senior Citizens, Shanlax Publications, Madurai,93-85977-X,June 2016</p>
									<p><b>Prof.Neeta Dwivedi - Department  of Commerce [PG]</b> -Women Entrepreneurship,ShreeNiwasPublications,Jaipur, India,978-93-5032-174-4, December,2016</p>
									<p><b>Prof.Mohammed  Umair - Department  of Commerce [UG]</b> - Income Tax II,Skyward Publishers, Bangalore,978-93-84494-62-9,January,2017</p>
								<p><b>Prof Chitra,</b> Department  of Commerce [UG]  Employee Relationship Management, MJP Publishers, Chennai ISBN: 978-81-8094-355-3, March 2017</p>
								
								<p><b><u>CHAPTERS IN BOOKS: 2</u></b></p>
								<p><b>Dr. Jonas Richard A-Department  of Social Work</b> - Physical, Mental and Emotional health: Opportunities and Challenges,Course work for the Post Graduate Diploma in Youth Development offered by RGNIYD (Rajiv Gandhi National Institute of Youth Development,Year: 2016, Page No. 65-69, ISBN N0. 978-93-81572-28-3,November,2016</p>
								<p><b>Dr. Emmanuel D- Department  of Social Work</b> - WASH for Kattunayakan children at Gudalur, Western Ghats, De Paul Centre for Research and Development Publication,ISBN 978-81-929671-2-7</p>



																
														</div>
													</div>
												</div></div></div>


									
						<div class="inner-content">
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading4">
														<h5 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
																ARTICLES PUBLISHED -55
															</a>
														</h5>
													</div>
													<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
							<div class="panel-body">
								
								<div class="well">
  <p align=justify><b>Dr. E Eswara Reddy:</b> Empowering women – Fostering women E preneurship,Global Journal for Research Analysis,Nov 2016,Volume – 05,Issue -11,ISSN No-2277-8160,November,2016.</p>
									<p><b>Dr. V Muthukumar and Ms. Madhumalathi R :</b> Women Empowerment Through Micro and Small Enterprises,Pezzottaite Journals- A Series of Indexed and refereed International journals,ISSN-2279-0934,2016.</p>
									<p><b>Mr. K.Kiran Kumar :</b> Shareholder Value Analysis: An Empirical study of EVA, MVA and Stock market Returns with special reference to select cement companies in India, International Journal of Business and Administration Research Review ,ISSN No: 2348 - 0653, October 2016, pp : 162-164,October 2016.</p>
									<p><b>Ms. Neeta Dwivedi:</b> Women In Rural Odisha-Factors That Drive Them To Become Entrepreneurs, Indian Journal of research, August 2016,2250-1991,August,2016.</p>
									<p><b>Ms. Selvi S:</b> A Study on awareness and perception of tax payers on new self-assessment scheme in BBMP Corporation, Pezzottaite Journals, International Journals of applied financial management perspectives, Volume-5, ISSN(print)=2279-0896, ISSN(online)-2279-090x,December 2016.<br>
									Strategic Leadership – Need of an hour, IASMS, Journal of Business Spectrum, ISSN – 0974-8016, Volume  IX, No 2, 2016, 2016.</p>
</div>
								
						<div class="well">
 
								<p><b><i>Department of Commerce [UG]</i></b></p>

								<p align=justify><b>Dr. Ritty Francis:</b> A study of organizational behavior concept through screening of movie “Croods”,Indian Journal of applied Research ,2249-555X,September 2016.</p>
									<p><b>Dr. Ritty Francis  & Ms. Reena R :</b> A study on neuro marketing: A unique bond between consumer’s cognizance and marketing, International journal of commerce and management research, November /2016/2455-1627,November 2016.</p>

									<p><b>Dr. S Hari Hara Puthiran:</b><br>
•	E-commerce and its impact on Indian market,International Journal of Inventive Research in Management, Science and Technology,,June 2016.<br>
•	A study on customer awareness and satisfaction towards handloom products with special reference to Edore district- Tamilnadu,Global Journal for research Analysis ,November /2016/2277-8160,November 2016.</p>

							<p><b>Dr. S Hari Hara Puthiran & Dr.Chitra V:</b> Role of investment banks in mergers and acquisitions  ,ISGSEM,Kolkata,2350-1472,July 2016.</p>
									<p><b>Dr. S Hari Hara Puthiran  and Mr.R.Vijayakumar :</b> A study on impact of foreign direct investment in Indian banking sector ,International journal of commerce and management research,November /2016/2231-4245,November 2016.</p>

									<p><b>Mr. Raghavendra Babu J :</b> A Study on Consumer Behaviour towards Home Appliances in Bangalore Rural Districts.,Indian Journal of Research in Commerce, Management, Engineering and Applied sciences,ISSN 2454-6593 ,October 2016.</p>
									<p><b>Ms. Geetanjali Patel :</b> Is Government Really Sensitive Towards Financing Higher Education in India?, International Journal of Commerce & Management Research,ISSN No. 2455-1627,November 2016.<br>
•	Nexus Between Population, Income, Output and Employment: Econometric Evidence from India,International Journal of Multidisciplinary & Current Research,ISSN No. 2321-3124,January 2017.</p>

							<p><b>Ms. Kalyani  V :</b> An empirical study between personality and effective organisational commitment with specific reference to faculty in management education, International journal of research in organizational behaviour and human resource management, Vol 4,No.3 PP 27-43,ISSN 2320-8724,September 2016.</p>

									<p><b>Ms. Preethi S. J. G. and Ms. Nittymol Antony:</b> Financial Performance of SHG Working Under Micro Finances in Karnataka, South Asian Academic Research Journal, June, 2016 volume 6 issue 6 , ISSN : 2249-7137, June 2016.</p>
									<p><b>Ms. Saranya. S :</b> An Empirical Study on the usage pattern of Social Media Among Youths with reference to Bangalore City  ,The International Journal Research Publications, Singapore ISSN.2251 1571,January 2017.</p>
									<p><b>Ms. Shenbagavalli T</b> 
•	Impact of portfolio trading in secondary market accelerates Indian companies market share- With special reference to Pharmaceutical industry, International Journal of business & administration research review ( Finance),E- ISSN NO.2347-856X    ISSN NO:2348-0653, October 2016.<br>
									•	Impact of B2B and B2C accelerates Indian companies Market share-With special reference to pharmaceutical companies EPS,ARS-Journal of applied research and social sciences, ISSN :2350-1472,February 2017.</p>
</div>		
								
								
<div class="well">
	<p><b><i>Department of Computer Science (PG)</i></b></p>

	<p><b>Ms. Aruna Devi K:</b> Improved Term Weighting Technique for Automatic Web Page Classification, Journal of Intelligent Learning Systems and Applications,27/09/2016,Volume 8, Pages: 63-76,ISSN Online: 2150-8410,ISSN Print: 2150-8402,September 2016.</p>
	<p><b>Ms. Jyothi Manoj</b><br>
•	Modelling the Impact of Government Policies on Import on Domestic Price of Indian Gold Using ARIMA Intervention Method, International Journal of Mathematics and Mathematical Sciences, Hindawi Publishing Corporation, Volume 2016, Article ID 6382926, 6 pages http://dx.doi.org/10.1155/2016/6382926,September 2016.<br>
		•	An Improved Model for Forecasting of value of Gold: A Hybrid Model Approach, Bulletin of Mathematics And Statistics Research,Vol.4.Issue.4.2016 (October -December), ISSN 2348-0580,October 2016.</p>
</div>


<div class="well">
	<p><b><i>Department of Computer Science (UG)</i></b></p>

	<p><b>Dr. Anthony Vincent B :</b> Upgrading Business Intelligence(BI) to elevate International Import  & Export system to sustain in global market: An Empirical E-Business Modelling for Dynamic Growth , International Journal of Innovative Research in Science Engineering and Technology. (An ISSO 3297:2007 Certified Organization), Vol.5, Issue 11,ISSN (online)2319-8753,ISSN(print) 2347-6710,November 2016.</p>
	<p><b>Mr. Saravana Kumar S :</b> Cost Benefit Analysis in Intrusion detection system, International Research Journal in global engineering and sciences ,July 2016,Volume 1 No.2,Issn 2456-172x,July 2016.</p>
	<p><b>Mr. Saravana Kumar S, Mr. Sevuga Pandian & Ms. Dhanamalar:</b> Performance optimization in big data predictive analytics, IJIRMST, Issue No 1,Volume No 1,,July 2016.</p>
	<p><b>Ms. AyshwaryaB :</b><br>
•	A brief overview on data mining: approaches and applications,International Journal of Inventive Research in Management, Science and Technology (IJIRMST),Issue No 1,Volume No 1,,July 2016.<br>
		•	Comparison of classification algorithms for predicting breast cancer,International Journal for scientific research and development,Vol 4,Isuue 12,ISSN 2321 0613,February 2017.</p>

	<p><b>Ms. Gopika S</b><br>
•	Opinion unaware Blind image quality assessment, International Journal of Control Theory and Applications, ISSN:0974-5572,December 2016.<br>
•	Opinion unaware Blind image quality assessment, International Journal of Computer Technology and Applications, ISSN:0974-5572,December 2016.<br>
		•	Opinion Aware Blind Image Quality Assessment – A comparison of three learning approaches, International Journal of Engineering and technology, ISSN: 0975 -4024, December 2016.</p>

	<p><b>Ms. Kalaiselvi K :</b> Enhanced AES Crptosystem by using genetic algorithm and neural network in S-box, IEEEXplore, International conference on current trends in advance computing (ICCTAC),ISBN NO.978-1-5090-1936-6,September 2016.</p>
	<p><b>Ms. Manasa Manjunath M :</b> A Study On Green IT Solutions ,IJIRCCE(International Journal of Innovative Research in Computer and Communication Engineering) ,ISSN(Online): 2320-9801 ISSN (Print): 2320-9798,November 2016.</p>
	<p><b>Ms. Ranjitha  M :</b> Extraction and dimensionality reduction of features for Renal Calculi detection and artifact differentiation from segmented ultrasound kidney images,  IEEE Xplore Digital Library,31/10/2016,ISBN: 978-9-3805-4421-2,October 2016.</p>

	<p><b>Ms. Vinothina V :</b> Machine Learning Tools – An overview,International Journal of Advanced Research in Science and Engineering,Vol.No.6, Issue No. 02,ISSN 2319-8354,February 2017.</p>
</div>
								
<div class="well">
	<p><b><i>Department of Humanities</i></b></p>

	<p><b>Dr. Arpita Ghosh :</b> Homecoming (Short fiction),ISSN No: 0975-1815,Issue: 69 - Sep - Oct 2016,,September 2016.</p>
	<p><b>Ms. Ramya B :</b> Sustainable Heritage Management-Need and challenges, Paripex- Indian Journal of Research Volume 5, Issue 12,ISSN 2250-1991,December 2016.</p>
	<p><b>Mr. Sarvesh B</b><br>
•	Shivarapattana- Graamaadhyayana, International Journal of Kannada Research, AkiNik Publications and Gupta Publications, New Delhi., ISSN: 2454–5813,September 2016.<br>

		•	Shilpakalagrama Shivarapattana, International Journal of Kannada Research, AkiNik Publications and Gupta Publications, New Delhi., ISSN: 2454–5813,September 2016.</p>
</div>


<div class="well">
	<p><b><i>Department of Life Sciences</i></b></p>

	<p><b>Dr. Calistus Jude A L</b><br>
•	Ninjurin 1 gene asp 110 ala genetic variants as a susceptibility factor in nerve damage leprosy patients of India, Meta Gene- Elsevier  Journal, ISSN 2214-5400,December 2016.<br>
		•	Peroxisome Proliferator activated receptor gamma polymorphism Pro 12 Ala in polycystic ovary syndrome(PCOS) South Indian population, Asian  pacific Journal of Reproduction,(ISSN 2305-0519 ),June 2016.</p>

	<p><b>Dr. S Vijayanand :</b> Screening of Micheliachampacca and Muntingiacalabura  extracts for potential Bioactives, International Journal of Pharma Sciences and Research (IJPSR),ISSN : 0975-9492,June 2016.</p>
	<p><b>Dr. Selvam Arjunan</b><br>
•	Relative expression of slow growth suppressor gene(sgs1) under the treatment of herbal formulation on yeast model, International Journal of Current Research,ISSN.-0975-833X,August 2016.<br>
		•	DenHunt-AComprehensiveDatabaseoftheIntricateNetworkofDengue-Human Interactions, International Journal PLOS Neglected Tropical Diseases, DOI- 10.1371,September 2016.</p>
</div>


<div class="well">
	<p><b><i>Department of Management</i></b></p>

	<p><b>Dr. A.J. Excelce</b><br>
•	Reconnoitre of the consumer's knowledge regarding food safety practices of consumers in South Tamil Nadu, Trans Asian Journal, Vol- 5 Issue 7 July 2016,ISSN 2278-4853 ,July 2016.<br>
		•	Cognizance and Accomplishment of Hand washing practices of consumers in south Tamil Nadu, International Journal of Applied Services Marketing perspectives, ISSN 2279-0977,December 2016.</p>

	<p><b>Mr. Naveen Kumar</b><br>
		A study on cooperative bank and practices of corporate social responsibility in cooperative banks in Karnataka, International Journal of recent trends in Management, commerce Accountancy, Economics, Public Administration, politics, Law and Allied Researches ,2348-9413,July 2016.</p>
</div>

<div class="well">
	<p><b><i>Department of Management Studies</i></b></p>

	<p><b>Dr. Vijaya Baskaran :</b> An analysis of inexorable strategic capability factors spearheaded by 
		Indian outsourcing vendors, International Journal Of Information Technology & Computer Sciences Perspectives;(IJITCSP),Volume 5,Number 2, ISSN : 2319-9016(Print),ISSN:2319-9024(Online)</p>

	<p><b>Dr. Justin Nelson Michael:</b> Effectiveness of Greeen Banking Initiatives by Selected Public and Private Sector Banks in Bangalore City, International Journal of Multidisciplinary Research Review,Vol 1, Issue 21,November 2016.</p>
	<p><b><i>Department of Psychology</i></b></p>

	<p><b>Dr. Rema M K :</b> Challenges in networking with industries for research, International Journal of Psychology and education , West wind publishing house, Maharashtra, July 2016,Vol-4. Issue-15,ISSN:2320-0383,July 2016.</p>
	<p><b>Mr. Senthil Kumaran J :</b> Emotional Intelligence, Test Anxiety and Academic Stress of Students, International Journal of Social Sciences and Interdisciplinary Research, April-June 2016, Volume No 5; Issue No 2,ISSN: 2277-677X,June 2016.</p>
	<p><b>Ms. Smitha A G :</b> Perceived Stress and Coping Styles among Smoking and Non Smoking Undergraduates in Bangalore: An Empirical Study, Indian journal of Psychology & Education (IJPE),Volume 6, Number 2, July 2016,ISSN -2231-1432,July 2016.</p>
</div>

<div class="well">
	<p><b><i>Department of Social Work</i></b></p>

	<p><b>Dr. Emmanuel  D</b><br>
•	A study on the sway of Facebook on interpersonal relations of early adolescents, International Journal of Scientific Review and Research in Engineering and Technology, July – August 2016, Pg. No- 44-54, ,ISSN No: 2455-3603,August 2016.<br>
•	Quality Time for Adolescents: A Study among the Paniyans at Nilgiris District, De Paul Journal of Scientific Research, ISSN: 2394-4412,  Nov. 2016,November 2016.
	</p>
	<p><b>Dr. Winnie Joyce :</b> A Study on Emotional Wellbeing among Adolescent Girls in Schools, Asian Journal of Research in Social Sciences and Humanities by Asian Research Consortium ,Vol. 6, No. 12, December 2016, pp. 1283-1297 ISSN 2249-7315 A Journal Indexed in Indian Citation Index DOI NUMBER:10.5958/2249-7315.2016.01368.X 1283,December 2016.</p>

</div>





																
														</div>
													</div>
												</div></div></div>
									
									
								<div class="inner-content">
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading5">
														<h5 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
																FACULTY PAPER PRESENTATION - 31 PAPERS PRESENTED


															</a>
														</h5>
													</div>
													<div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
							<div class="panel-body">
								
								<table border="0" class="table table-bordered table-hover">
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p><strong>S.No</strong></p></td>
    <td width="153" nowrap="nowrap" valign="top"><p><strong>Name of the Faculty</strong></p></td>
    <td width="180" valign="top"><p><strong>Title of Paper Presented</strong></p></td>
    <td width="274" valign="top"><p><strong>Title of the Programme &amp;</strong><br />
      <strong>Venue( State / National / International)</strong></p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>1</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Dr. V Babu</p></td>
    <td width="180" valign="top"><p>Distance Education in India-Past, Present and Future, A Conceptual    analysis</p></td>
    <td width="274" valign="top"><p>National Conference on Distance Education in India, Emerging    Challenges and prospects,Pondicherry University,Pondicherry.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>2</p></td>
    <td width="153" valign="top"><p>Dr. V Babu &amp; Ms. Madhumalathi R</p></td>
    <td width="180" valign="top"><p>Indian Accounting Standards(IND AS)115-Revenue from contract with    customers – Impact on financial statement of telecom sector</p></td>
    <td width="274" valign="top"><p>International Financial Reporting Standards/Indian Accounting    Standards- An Impact Seminar.St.Josephs College of Commerce,  31 August 2016</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>3</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Mr. Katepogu Kiran Kumar</p></td>
    <td width="180" valign="top"><p>Performance Measures: An empirical study on EVA &amp; MVA of Selected    Cement Companies in India</p></td>
    <td width="274" valign="top"><p>International Conference, Corporate Finance, Governance &amp;    Sustainability, Delhi School of Business, VIPS-TC, Delhi.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>4</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Dr. Chitra V</p></td>
    <td width="180" valign="top"><p>Employee Relationship Mgmt. in public sector banks- A study with    reference to  Chennai City</p></td>
    <td width="274" valign="top"><p>Strengthening strategies, shaping policies and Empowering personnel:    Key to organizational competitiveness Prestige Institute  of management, Gwalior.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>5</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Ms. Geetanjali Patel</p></td>
    <td width="180" valign="top"><p>Nexus between population growth, Output and Employment : Econometric    evidence from India</p></td>
    <td width="274" valign="top"><p>7th International conference on Excellence in Research    and,Indian Institute of Management Indore.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>6</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Ms. Geetanjali Patel</p></td>
    <td width="180" valign="top"><p>Inclusion of socially excluded in public expenditure and its impact on    Economic Growth: An Econometrics study</p></td>
    <td width="274" valign="top"><p>2nd International conference on Inclusive Economic growth    and sustainable development,     ShriDharmasthala Manjunateshwara Institute for management  development ,Mysore .</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>7</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Ms. Preethi S. J. G.</p></td>
    <td width="180" valign="top"><p>A Financial analysis of SHG&rsquo;s working under Micro Finances in of India </p></td>
    <td width="274" valign="top"><p>2nd International conference on Inclusive Economic growth    and sustainable development, Shri Dharmasthala Manjunateshwara Institute for    management development, Mysore . Southern region</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>8</p></td>
    <td width="153" valign="top"><p>Ms. Shenbagavalli T</p></td>
    <td width="180" valign="top"><p>Impact of portfolio trading in secondary market accelerates Indian    companies market share- With special reference to Pharmaceutical industry</p></td>
    <td width="274" valign="top"><p>International Journal of business &amp; administration research review    (Finance),E- ISSN NO.2347-856X    ISSN    NO:2348-0653, October 2016.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>9</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Ms. Varsha Madhavan</p></td>
    <td width="180" valign="top"><p>Entrepreneurial  orientation of    BBA students of Bangalore </p></td>
    <td width="274" valign="top"><p>National Conference on Engendering technological Excellence in Higher    Education,KristuJayanti College,Bangalore.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>10</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Mr. Prathap G</p></td>
    <td width="180" valign="top"><p>Impact of Information and communication Technology on challenging    Business Environment &lsquo;A study&rsquo;</p></td>
    <td width="274" valign="top"><p>National Conference on Emerging Trends in Information Technology in    today&rsquo;s Business Scenario ,Koshys Group of Institutions,Bagalur,Bangalore.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>11</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Mr. Ramanathan G</p></td>
    <td width="180" valign="top"><p>Test Case Extraction using Data Mining Classifier Techniques</p></td>
    <td width="274" valign="top"><p>National Conference on challenges in computational research and    application, Department of computer science, application and Technology, Sree    SaraswathiThyagaraja College, Pollachi 642 108.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>12</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Ms. Ayshwarya B</p></td>
    <td width="180" valign="top"><p>Classification of Lung Cancer using weka tool.</p></td>
    <td width="274" valign="top"><p>National Conference on Transforming India through Digital    Innovation,Guru Shree Shantivijai Jain College for Women, Chennai. .</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>13</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Ms. Ayshwarya B</p></td>
    <td width="180" valign="top"><p>Classification of Lung Cancer using weka tool</p></td>
    <td width="274" valign="top"><p>National Conference on Transforming India through Digital    Innovation,Guru Shree Shantivijai Jain College for Women, Chennai..</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>14</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Ms. Ayshwarya B</p></td>
    <td width="180" valign="top"><p>Disseminated Data mining classification algorithm for assessment of    protracted Kidney Disease</p></td>
    <td width="274" valign="top"><p>National Conference on challenges in computational research and    application ,Department of computer science, application and Technology,    SreeSaraswathiThyagaraja College, Pollachi 642 107.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>15</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Ms. Dhanamalar</p></td>
    <td width="180" valign="top"><p>Disseminated Data mining classification algorithm for assessment of    protracted Kidney Disease</p></td>
    <td width="274" valign="top"><p>National Conference on challenges in computational research and    application ,Department of computer science, application and Technology,    SreeSaraswathiThyagaraja College, Pollachi 642 107.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>16</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Ms. Ranjitha  M</p></td>
    <td width="180" valign="top"><p>Ultra Sound Image Analysis and Detection of Kidney Stones Using smart    sensors</p></td>
    <td width="274" valign="top"><p>National Conference on Emerging Sensor Devices, Materials    &amp;Technologies,Department of Physics, Chikkanna Government Arts College    Tiruppur, Tamilnadu.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>17</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Ms. Vinothina V</p></td>
    <td width="180" valign="top"><p>Machine Learning Tools-An overview</p></td>
    <td width="274" valign="top"><p>Intenational conference on recent trends in Engineering Science,    Humanities and Management,Sri S Ramasamy Naidu Memorial College Autonomous, Sattur,    Tamil Nadu.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>18</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Ms. Ramya B</p></td>
    <td width="180" valign="top"><p>Sustainable heritage management </p></td>
    <td width="274" valign="top"><p>Journey Through The Past: Re-Visioning India, JyotiNivas College,    Bengaluru.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>19</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Ms. Sharmin K Thampi</p></td>
    <td width="180" valign="top"><p>Narratives of Disruption, Dislocation and Disjuncture</p></td>
    <td width="274" valign="top"><p>UGC- sponsored National Conference, on Conflict Studies: Spaces,    Writing, Representations, Jyoti  Nivas College,    Bangalore.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>20</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Dr. Challaraj Emmanuel</p></td>
    <td width="180" valign="top"><p>Screening and extraction of Biofilm inhibitors from Actinomycetes  against Vibrio cholera – Awarded Second best paper    award </p></td>
    <td width="274" valign="top"><p>National conference on Emerging trends in Therapeutic enzyme    production, Garden city college, Bangalore.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>21</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Dr. M Sonia Angeline</p></td>
    <td width="180" valign="top"><p>Role of Bioflavonoids in Rotenone induced Model of Parkinson&rsquo;s disease</p></td>
    <td width="274" valign="top"><p>National Conference on Bio-Eessence Integrated Health care, Jyoti Nivas    College(Autonomous), Bangalore.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>22</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Ms. Priya Josson Akkara</p></td>
    <td width="180" valign="top"><p>Multiple Laminin binding proteins in human fetal heart</p></td>
    <td width="274" valign="top"><p>National Conference on Bio-Essence Integrated Health care, Jyoti  Nivas College(Autonomous), Bangalore.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>23</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Mr. Mahesh S B</p></td>
    <td width="180" valign="top"><p>&nbsp;Right    to Speedy Justice </p></td>
    <td width="274" valign="top"><p>National    Conference on Legal Education in the 21st Century: Challenges, Concerns and    Reforms, VIT School of Law, VIT University . </p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>24</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Dr. R Krishnan</p></td>
    <td width="180" valign="top"><p>Trait approach to Emotional Intelligence</p></td>
    <td width="274" valign="top"><p>International conference on Successful mental health and well-being    ,Pondicherry University.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>25</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Mr. Senthil Kumaran J</p></td>
    <td width="180" valign="top"><p>Academic excellence as within, along and beyond curriculum</p></td>
    <td width="274" valign="top"><p>51st National &amp; 20th International    Conference of the Indian Academy of Applied Psychology (IAAP), Held at    Bangalore University,Bangalore University.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>26</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Dr. Emmanuel  D</p></td>
    <td width="180" valign="top"><p>Quality Time for Adolescents: A Study among the Paniyans at Nilgris    District</p></td>
    <td width="274" valign="top"><p>International Social Work Conference and Student&rsquo;s Meet,De Paul    Institute of Science &amp; Technology, Kerala.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>27</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Dr. Emmanuel  D</p></td>
    <td width="180" valign="top"><p>WASH for Kattunayakan children at Gudalur, Western Ghats</p></td>
    <td width="274" valign="top"><p>International Social Work Conference and Student&rsquo;s Meet,De Paul    Institute of Science &amp; Technology, Kerala.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>28</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Dr. Emmanuel  D</p></td>
    <td width="180" valign="top"><p>Old age is second childhood</p></td>
    <td width="274" valign="top"><p>International Conference on Successful Ageing: A New Horizon on Social    Gerontology, Marian College, Kuttikkanam, Kerala.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>29</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Dr. Jonas Richard A</p></td>
    <td width="180" valign="top"><p>Youth Social Work : Life Skills Perspective</p></td>
    <td width="274" valign="top"><p>National Conference on Professional Social Work for Youth    Development,Rajiv Gandhi National &nbsp; Institute of Youth Development,    Sriperambudur.</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>30</p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Dr. Jonas Richard A</p></td>
    <td width="180" valign="top"><p>Information Literacy Competency Standards for Higher Education</p></td>
    <td width="274" valign="top"><p>Two day International Seminar on Digital Literacy, information    security and trending Media in Academic Cubicles, St.Justin&rsquo;s College of    Education, Madurai</p></td>
  </tr>
  <tr>
    <td width="47" nowrap="nowrap" valign="top"><p>31 </p></td>
    <td width="153" nowrap="nowrap" valign="top"><p>Aruna Devi</p></td>
    <td width="180" valign="top"><p>&nbsp;</p></td>
    <td width="274" valign="top"><p>&nbsp;</p></td>
  </tr>
</table>





																
														</div>
													</div>
												</div></div></div>
							<div class="inner-content">
											<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
												<div class="panel panel-default">
													<div class="panel-heading" role="tab" id="heading6">
														<h5 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
																RESEARCH AWARDS/ RECOGNITIONS FOR FACULTY MEMBERS


															</a>
														</h5>
													</div>
													<div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
							<div class="panel-body">
								
								<p><b>Dr. Jonas Richard</b><br>
•	Appointed as a Co- Guide for Ph.D guidance in Bharathidasan University, Tiruchirappalli<br>
									•	Appointed as an External Examiner of Ph. D Doctoral Committee in the Department of Psychiatric Social Work , NIMHANS, Bangalore</p>
								<p><b>Dr.Calistus Jude</b><br>
•	Reviewed manuscript entitled”Amelioration of antioxidant potential, toxicity  and antihyperglycemic activity of Hippophaesalicifolia D. Don leaf extracts in alloxan  induced diabetic rats, Journal of Food Science and Technology(JFST-D-16-01166).    <br>
•	Appointed as Board of examiner Ph.D.  Thesis evaluation, Bharathiayar  University, Coimbatore     <br>
									•	Invited as External examiner for Ph.D Viva voce held at Bharathiyar University, Coimbatore, Tamilnadu on 21st October 2016.</p>
								<p><b>Dr.S.Vijayanand</b><br>
•	Reviewed the Manuscript entitled “Study Factors Influencing  Accessibility of Pregnant Women to Antenatal Care Services” Palgo journal of  Medicine and Medical sciences (PJMMS).<br>
•	Submitted Project Proposal entitled” Isolation and Characterization of  Phytochemicals from Michelia Champaca and Thespesia Populnea for Evaluation of Therapeutic potential” to VGST under  K-FIST scheme.<br>
•	Appointed as Board member for international Journal of integrative sciences, innovation and technology (ijiit.net)<br>
•	Reviewed the Manuscript entitled “Synthesis and Antitumor activity of a    Porphyrin derivative in Photo dynamic therapy” Palgo journal of Medicine and    Medical sciences (PJMMS)<br>
•	Appointed as Board of examiner -Ph.D.  Thesis evaluation, Periyar  University, Salem, Tamilnadu<br>
•	Appointed  as Editorial board member for Journal of Chemical, Biological and Physical sciences (www.Jcbsc.org)<br>
•	Reviewed the Manuscript ID ( 7301241) entitled “Comparison of RNA extraction methods of breast and gastric cancer tissues” Journal of Advances in Bioscience and Biotechnology (ABB).”<br>
									•	Reviewed the Manuscript ID (28981) entitled “Comparativeantidiabetic potentials of leaf extracts of salacialehmbachii, tetracarpidiumconophorum, artocarpusheterophyllus and glibenclamide in alloxan induced diabetic rats” Journal of Advances in Medical and Pharmaceutical Sciences (JAMPS).”</p>

								<p><b>CONSULTANCY/ RESOURCE PERSON: </b></p>
								<p><b>Dr. Ambika P</b><br>
									Served as Resource person for Guest Lecture on Clustering and Classification on R at CMRIMS, Bangalore</p>
								<p><b>Dr. Calistus Jude A L</b><br>
Served as Resource person for<br>
•	Chair person of a session - National conference on Science and Technology for National Development-Health, Environment and Agriculture,Jain University, Bangalore.<br>
									•	Judged the poster competition as part of the National conference on Science and Technology for National Development-Health, Environment and Agriculture, Jain University, Bangalore</p>

								<p><b>Dr. Challaraj Emmanuel</b><br>
									National Conference on Role of Biosciences in Societal Developments organised by Palanisamy College of Arts, Perundurai, Erode, Tamilnadu on Biofilm Technology</p>

								<p><b>Dr. Elcey C D</b><br>
•	Chair person of a session - National conference on Science and Technology for National Development-Health, Environment and Agriculture, Jain University, Bangalore.<br>
									•	Judged the poster competition as part of the National conference on Science and Technology for National Development-Health, Environment and Agriculture, Jain University, Bangalore</p>
								<p><b>Dr. G. Bala Sendhil Kumar</b><br>
									Served as Resource person for the workshop  on Data Analysis for MBA Projects organized by Mailam Engineering College, Mailam, Tindivanam (TK), Tamilnadu– 604304.</p>


								<p><b>Dr. JaishankarPillai</b><br>
									Served as Resource person for the National Conference on Natural Sciences organized by Holy Cross College(Autonomous), Tiruchirappali, Tamilnadu</p>
								<p><b>Dr. Jonas Richard A</b><br>
Served as Resource person for <br>
•	Consultant for Action Research & Functional Vocational Training and Research Society, Bangalore<br>
•	Meet organized on International Youth Day 2016 by Pondicherry University<br>
•	Inculcating Life Skills in Education in the Conference organized by Social Leaders Convention &Telangana Social Welfare  Residential Educational Institutions Society, Hyderabad<br>
•	National Skill Conference 2016 organised by FVTRS & Christ University, Bengaluru on Networking<br>
•	Seminar on National Seminar on Positive Intentions for Psychological Evolvement Organized by Dept. Psychology, University College, Thiruvananthapuram on the topic Positive Intentions for Man Power Enhancement<br>
									•	Four Days Workshop on Life Skills Development for College Students in Puducherry Region by Pondicherry University on Interpersonal Relationships & Stress Management</p>
 
								<p><b>Chairperson for the conference</b><br>
•	National Conference on Engendering technological Excellence in Higher Education organized by IQAC of Kristu Jayanti College,Bangalore<br>
									•	International Conference on Emerging Trends in Youth Development (Best Practices & Sustainable Models) organized by Sacred Heart College, Tirupattur</p>
								<p><b>Dr. Justin Nelson Michael</b><br>
•	Served as Interview Panel member and Subject Expert in Commerce and Management for selection of faculty members. St. Paul's College, Bangalore<br>
•	Served as Resource person for the<br>
									NAAC Sponsored National Conference on Academic and Administrative Audit for Quality Enhancement organized by St. Joseph's College, Autonomous, Irinjalakuda on the topic Academic Audit - A Scaffolding of Quality Assurance</p>
								<p><b>Dr. M Sonia Angeline</b><br>
Served as Resource person for the<br>
									National Lecture Workshop on Analytical methods in immunology and molecular biology organised by DKM College, Vellore, Tamilnadu on Analytical methods in immunology and molecular biology </p>
								<p><b>Dr. Molly Joy</b><br>
Served as Resource person for the<br>
									Seminar on Internet Addiction organized by St.Claret College,  Bangalore. </p>

								<p><b>Dr. S Vijayanand</b><br>
Served as Resource person for the<br>
									Seminar on Scientific Advancement in Genetically Modified Organisms organized by St Joseph College of Arts & Science, Hosur, Tamilnadu on the topic Challenges & Opportunities in GMOs</p>
								<p><b>Dr. V Muthukumar</b><br>
Served as Resource person for the<br>
									Workshop on CBSE, NET, SLET Examinations organized by Manonmaniam Sundaranar University Tirunelum.</p>
								<p><b>Mr. Jeo Joy </b><br>
Served as Resource person for the<br>
									Orientation Program - The effective functioning of examination system in the autonomous college organized at Indian Academy Degree College, Bangalore</p>
								<p><b>Mr. SevugaPandian</b><br>
Served as Resource person for the<br>
									Orientation Program on Creative pursuit of sciences organized at Kendriya Vidyalaya AFS Jalahalli, Bangalore.</p>
								<p><b>Mr. Surendranath Reddy</b><br>
Served as Resource person for the<br>
									Academic audit of Department of Business Administration of Justice Basheer Ahmed Sayeed College for Women, Chennai</p>
								<p><b>Ms. Aruna Devi K</b><br>
•	Served as Resource person for the<br>
Workshop on Research Tools for Data Mining organized by  SDNB Vaishnav College for Women, Chennai. <br>
									•	Served as Resource person for theIn-house FDP on.Net Framework</p>

								<p><b>Ms. Juby Thomas</b><br>
Served as Resource person for the<br>
•	National Media Meet organized at Christ University, Bengaluru<br>
•	Seminar on Changing Media Scenario organized by St. Joseph College Moolamattam, Kerala ,on the topic How to make use of various media platform for promoting science.<br>
•	Workshop on ICT for development organized by Madras Christian College, Chennai<br>
									•	National level media seminar organised by Jyothi Nivas College, Bangalore </p>
								<p><b>Ms. Ramya B</b><br>
									Served as Resource person for the National Conference Women on the Move – Resonating Excellence organized by Women Empowerment Cell, Kristu Jayanti College, Bangalore on the topic Psychological Barriers for Women</p>
								<p><b>Ms. Susan Sanny</b><br>
Served as Resource person<br>
									Judge of  TATA Building India School level essay competition</p>
								<p><b>Ms. Varsha Madhavan</b><br>
									Served as Resource person for the seminar on Significance of merchandise management organized by Department of BBA,St. Joseph’s  Evening college, Bangalore.</p>

								<p><b>Other Achievements</b></p>

								<p><b>Dr.Challaraj Emmanuel</b> won the best second paper award at National conference on Emerging trends in Therapeutic enzyme production organized by Garden city college, Bangalore for the paper Screening and extraction of Biofilm inhibitors from Actinomycetes  against Vibrio choleraea</p>
								<p><b>Prof. R Kumar and Prof. Muruganantham A</b> participated and successfully completed certificate courses for conduct of conference IEEE conference and earned certificates</p>

																
														</div>
													</div>
												</div></div></div>

				

									
									
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-right wow fadeIn" style="background-color: transparent;box-shadow: none;">
                                    <h4 style="margin-left:10px;" class="mainheading">
                                        <i class="fa fa-bookmark"></i>
                                        <span>&nbsp; Academic <strong> Achievements  </strong></span>
                                    </h4>
                                  

              <section class="link-arrow">
                    <p><a class="a-link-arrow" href="../achivements/college.php">College Achievements </a></p>
                                    </section>
									
									 <section class="link-arrow">
                    <p><a class="a-link-arrow" href="../achivements/students.php">Students Achievements </a></p>
                                    </section>
									
									 <section class="link-arrow">
                    <p><a class="a-link-arrow" href="../achivements/faculty.php" style="color: #2980b9;font-weight: bold;">Faculty Achievements </a></p>
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
                    <?php include('../php/morphingSearch.php'); ?>
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
