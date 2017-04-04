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
		<link rel="stylesheet" href="../css/font-awesome.css">
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/roundIcons.css">
		<link rel="stylesheet" href="../css/hoverEffect.css">
		<link rel="stylesheet" href="../css/morphing.css">
		<link rel="stylesheet" href="../css/navTabs.css">
		<link rel="stylesheet" href="../css/animate.css">
		<link rel="stylesheet" href="../css/fakeLoader.css">
		<!--custom css-->
		<link href="event_style.css" rel="stylesheet">
		<link href="../css/custom.css" rel="stylesheet">
		<link href="../css/innerpage.css" rel="stylesheet">
		<!-- javascript -->
		<script src="../js/jquery-1.11.0.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script> 
		<script src="../js/respond.js"></script>
		<script src="../js/custom.js"></script>
		<script src="../js/fakeLoader.js"></script>
		<style>
			.event-year-filter{
				display: inline-flex;
				text-align: left
			}
            .event-year-filter i{
                cursor: pointer;
            }
            
            #event-year{
                margin-left: 5px;
                margin-right: 5px;
            }
            
			.event-year-filter >div:nth-of-type(1){
				margin-top: 5px;
			}
			.event-month-filter {
				margin: 2px 0px 0px -10px;
				text-align: right;

			}
			.event-month-filter >select {
				font-family: 'Carrois Gothic', sans-serif;
				font-size: 16px;
				border-radius: 10px;
                cursor: pointer;
			}
			.event-details{

			}
		</style>
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
							<!--        <div class="row">-->
							<div class="row" style="margin-top: 80px; padding-left: 10px; padding-right: 10px;">
								<img class="img-responsive col-lg-12" style="width:100%;padding:0px;" src="../images/researchBanner.jpg" alt="cover-img" />    
							</div>
							<div class="row">
								<div class="col-lg-9">
									<div class="content-left myWelcome wow fadeIn" style="min-height:875px">
										
                                           <div class="col-lg-2 pull-right event-year-filter">
												<i class="fa fa-caret-left fa-2x yearLeft"></i>&nbsp;
												<div id="event-year"></div>&nbsp;
												<i class="fa fa-caret-right fa-2x yearRight"></i>
											</div>

											<div class="col-lg-2 pull-right event-month-filter">
												<select id="event-month">
													<option value="January">January</option>
													<option value="February">February</option>
													<option value="March">March</option>
													<option value="April">April</option>
													<option value="May">May</option>
													<option value="June">June</option>
													<option value="July">July</option>
													<option value="August">August</option>
													<option value="September">September</option>
													<option value="October">October</option>
													<option value="November">November</option>
													<option value="December">December</option>
												</select>
											</div>
                                            <h4 style="margin-bottom: 0px;">
                                                <i class="fa fa-bookmark" style="color:#2980b9"></i>
                                                <span  style="color:#000;">&nbsp;<strong>Events <span style="color:#2980b9" id="events-head">2016</span></strong></span>
                                            </h4>
                                            <div class="clearfix"></div>
										<hr />
										<div class="inner-content">								
											<div class="row event-details">
                                                    <!-- Ajax Loaded Contents -->
											</div>
										</div>


									</div>
								</div>
								<div class="col-lg-3">
									<div class="content-right wow fadeIn">
										<div class="innercontent-link" >
											<ul style="list-style-type: none;">
												<li style="margin-left:-20px;"><h5 style="color:#2980b9;">Registered Users can <a href="#" style="color:#2980b9;text-decoration:none"><span style="color:red">LOGIN HERE</span></a></h5></li>
												<li style="margin-left:-20px;"><h5 style="color:#2980b9;">For ONLINE APPLICATION FORM<a href="#3" style="color:#2980b9;text-decoration:none"> <span style="color:red">Click HERE</span></a></h5></li>

											</ul>
										</div>
									</div>
									<div class="content-right wow fadeIn">
										<h4><strong>Application &amp; Prospectus Fee</strong></h4>
										<div style="margin-left: 10px;margin-top: -15px;">
											<h5>
												UG course: 200 <br/>
												PG course: 400 <br/>
												MCA Programme: 700 <br/>
												MBA Programme: 700 <br/>
												PGDM Programme: 700 <br/>

											</h5>
										</div>

										<h4><strong><span style="font-size:14px;">Payment options</span></strong></h4>
										<div style="margin-top: -15px;margin-left: 10px;line-height: 12px;"><h5 style="">1. &nbsp;Fee payment in College office<br/>
											2. &nbsp;online payment<br/>
											3. &nbsp;Payment through demand draft<br/> </h5>
										</div>
									</div>
									<div class="content-right wow fadeIn">
										<h4><strong>Counselling Results</strong></h4>
										<div class="innercontent-link" >
											<ul>
												<li><h5><a href="centre_for_research.php" style="color:#2980b9;">MBA/PGDM Counselling result held on 23rd January 2016</a></h5></li>
												<li><h5><a href="research_projects.php" style="color:#2980b9;">MBA/PGDM Counselling result
													held on 30th January 2016 (Delhi)</a></h5></li>
												<li><h5><a href="patents.php" style="color:#2980b9;">All PG Counselling result
													held on 30th January 2016</a></h5></li>

											</ul>
										</div>
									</div>
									<div class="content-right wow fadeIn">
										<h4><strong>Admission</strong></h4>
										<div class="innercontent-link" >
											<ul>
												<li><h5><a href="centre_for_research.php" style="color:#2980b9;">Admission 2016</a></h5></li>
												<li><h5><a href="research_projects.php" style="color:#2980b9;">Why Kristu Jayanti College ?</a></h5></li>
												<li><h5><a href="patents.php" style="color:#2980b9;">MBA/PGDM Admission</a></h5></li>
												<li><h5><a href="publications.php" style="color:#2980b9;">MCA Admission</a></h5></li>
												<li><h5><a href="consultancy.php" style="color:#2980b9;">PG Diploma 
													(For Working Executives)</a></h5></li>
												<li><h5><a href="extension.php" style="color:#2980b9;">PG Admission</a></h5></li>
												<li><h5><a href="research_centre_in_biotechnology.php" style="color:#2980b9;">UG Admission</a></h5></li>
												<li><h5><a href="research_centre_in_social_work.php" style="color:#2980b9;">Admission Enquiry</a></h5></li>
												<li><h5><a href="research_centre_in_social_work.php" style="color:#2980b9;">Admission International Students</a></h5></li>
											</ul>
										</div>
									</div>

									<!--
<div class="row" style="margin-left:2px; margin-right: 2px;">
<div class="content-right wow fadeIn">
<?php include ('../php/sideMenu.php'); ?>
</div>
</div>
-->
								</div>
							</div>

						</div>

						<!--                                </div>-->
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
		<!--    <script src="js/res-navtabs.js"></script>-->
		<script src="../js/scripts.js"></script>
		<script type="text/javascript">
			function googleTranslateElementInit() {
				new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
			}
		</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

		<script>
			var loaderStyle="transform:rotate(15deg);-ms-transform:rotate(15deg);-moz-transform:rotate(15deg);-webkit-transform:rotate(15deg);-o-transform:rotate(15deg);";


//			function load(){
//				for(var  i=15;i<=360;i++)
//				{
//					if(i==360)
//						i=15;
//					else
//						document.getElementById('event-year').innerHTML="<i class='fa fa-spinner' style='transform:rotate('"+i+"'deg);-ms-transform:rotate('"+i+"'deg);-moz-transform:rotate('"+i+"'deg);-webkit-transform:rotate('"+i+"'deg);-o-transform:rotate('"+i+"'deg)></i>";
//				}
//
//			}
			function getNews(year,month){
				var dataString="year="+(year)+"&month="+month;
				$.ajax({
					url:"loadEvent.php",
					data:dataString,
					success: function(data){
						$('.event-details').html(data);

					},
					error:function(data)
					{
					//	alert("data");
					}
				});
			}

			function monthConverter(month)
			{
				if(month=='January') return 0;
				if(month=='February') return 1;
				if(month=='March') return 2;
				if(month=='April') return 3;
				if(month=='May') return 4;
				if(month=='June') return 5;
				if(month=='July') return 6;
				if(month=='August') return 7;
				if(month=='September') return 8;
				if(month=='October') return 9;
				if(month=='November') return 10;
				if(month=='December') return 11;
			}
			$('.event-month-filter > select').on('change', function() {
				var myDate = new Date();

				var nowMonth = myDate.getMonth();
				var monthName=$('.event-month-filter > select :selected').val();

				var nowYear=myDate.getFullYear();
				var year=Number(document.getElementById('event-year').innerHTML);

				var monthVal=monthConverter(monthName);
				//if(year<=nowYear)
					getNews(year,monthName);
				//else if(year == nowYear)
				//	if(monthVal<=nowMonth)
				//		getNews(year,monthName);
				//	else
				//		getNews(2244,22);

			})
			$(".yearLeft").click(function(){
				var year=Number(document.getElementById('event-year').innerHTML);
				var month=$('.event-month-filter > select :selected').val();
				var myDate = new Date();
				var nowMonth = myDate.getMonth();

				//if(year>2012){
					document.getElementById('event-year').innerHTML=year-1;
					document.getElementById('events-head').innerHTML=year-1;
					
					getNews(year-1,month);
				//}


			});
			$(".yearRight").click(function(){
				var year=Number(document.getElementById('event-year').innerHTML);
				var month=$('.event-month-filter > select :selected').val();
				var myDate = new Date();
				var nowMonth = myDate.getMonth();
				//if(year+1<2016){
					document.getElementById('event-year').innerHTML=year+1;
					document.getElementById('events-head').innerHTML=year+1;
					getNews(year+1,month);

				//}
				//else if (year+1==2016){
				//	document.getElementById('event-year').innerHTML=year+1;
				//	document.getElementById('events-head').innerHTML=year+1;
				//	if((nowMonth)>=monthConverter(month))
				//		getNews(year+1,month);
				//	else
				//		getNews(2244,22);
				//}
			});


			$(document).ready(function(){
				var myDate = new Date();
				var year = myDate.getFullYear();
				var month = myDate.getMonth();

				document.getElementById("event-year").innerHTML = year;
				document.getElementById('events-head').innerHTML=year;
				document.getElementById("event-month").selectedIndex=month;

				getNews(year,$('.event-month-filter > select :selected').val());
			});
		</script>
	</body>   
</html>