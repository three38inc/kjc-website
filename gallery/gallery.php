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
		<style>

			.gallery-tab-thumbs,.album-tab-thumbs		
			{ 
				padding:5px; 
				margin:5px; 
				max-height: 50%;
				min-height: 50%;
				width: 100%;
				display: inline-flex;
				overflow: hidden;


			}


			.gallery-tab-thumbs-img,.album-tab-thumbs-img{
				width:124px;
				height: 79px;
				border:2px solid rgba(34,34,34,.1);
				margin-left: 9px;
				transition: border 1s;
				float:left;


			}
			.gallery-tab-thumbs-img:hover,.album-tab-thumbs-img:hover	
			{ 
				border: 2px solid #fff; 
			}

			.gallery{
				min-height: 200px;
				max-height: 500px;
				max-width: 100%;
				background: url(images/nature/nature_1.jpg);
				background-size: cover;
				margin: 0px 0px 0px 0px;
				border: 2px solid black;
				padding: 0px;
				overflow: hidden;
			}
			@media only screen and (min-width: 600px) {
				.gallery{
					min-height: 200px;
				}
				#option-tab{
					height: 15%;
				}
			}
			
			@media only screen and (min-width: 768px) {
				.gallery{
					min-height: 700px;
				}
				#option-tab{
					height: 10%;
				}
				.myWelcome{
					min-height: 800px;
				}
				
			}
			.gallery-tab{
				display: block;
				max-height: 250px;
				width: 100%;
				margin-top: 175px;
				border: 1px solid black;
				background: rgba(34,34,34,.8);
				overflow: hidden;

			}

			.album-tab{
				height: 180px;
				width: 100%;
				margin-top: 175px;
				border: 1px solid black;
				background: rgba(34,34,34,.8);
				overflow: hidden;
				position: relative;
				display: block;
			}


			.gallery-tab i:nth-child(1),.gallery-tab i:nth-child(7),.gallery-tab i:nth-child(6),.album-tab i:nth-child(1),.album-tab i:nth-child(5),.album-tab i:nth-child(6){
				text-align: center; 
				color: #fefefe; 
				font-size: 18px;
				padding: 10px;

			}
			.gallery-tab i:nth-child(7),.gallery-tab i:nth-child(6),.album-tab i:nth-child(5),.album-tab i:nth-child(6){cursor: pointer;}
			.gallery-tab span,.album-tab span,.album-tab-thumbs-desc{
				color: #fefefe; 
				font-size: 12px;

			}
			.gallery-tab i:nth-child(3),.gallery-tab i:nth-child(4),.album-tab i:nth-child(3){
				font-size:12px;
				text-align: center; 
				color: #fefefe; 
				padding: 10px;
				cursor:pointer;
			}
			#loadingmessage{
				height: 180px;
				width: 100%;
				margin-top: -180px;
				border: 1px solid black;
				background: rgba(255,255,255,.8);
				overflow: hidden;
				position: absolute;
				display: none;
				text-align: center;
			}
			#loadingmessage img{margin-top: 50px;}

			#option-tab i:nth-child(2),#option-tab i:nth-child(3),#option-tab i:nth-child(4){
				margin-left: 4%;
			}
			#option-tab{
				height:10%;
				width:10%;
				float: right;
				margin-top: 40%;
				bottom: 2%;
				margin-left: 100%;
				border: 1px solid black;
				background: rgba(255,255,255,.8);
				position: absolute;
				text-align: center;
				transition: margin-left 1s;
				transition-timing-function: ease;
				display: none;
			}
			#option-tab:hover{
				cursor: pointer;
			}
			@media (min-width:320px) { /* smartphones, iPhone, portrait 480x320 phones */ 
				#option-tab{
					width:40%;
					height: 15%;
				}
			}
			@media (min-width:481px) { /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */ 
				#option-tab{
					width:20%;
				}


			}
			@media (min-width:641px) { /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */ 
			}
			@media (min-width:961px) { /* tablet, landscape iPad, lo-res laptops ands desktops */
				#option-tab{
					width:10%;
					height: 5%;
				}
			}
			@media (min-width:1025px) { /* big landscape tablets, laptops, and desktops */ 



			}
			@media (min-width:1281px) { /* hi-res laptops and desktops */

			}

			/*
			.album-tab-thumbs-desc{
			min-width: 11%;
			position: absolute;
			height: 60px;
			width: 10px;
			background-color: rgba(40,40,40,0);
			margin-top: 35px;
			text-align: center;
			margin-left: -119px;

			}
			.album-tab-thumbs-desc span{
			font-size: 16px;

			}
			*/


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
							<div class="row" style="margin-top: 80px; padding-left: 10px; padding-right: 10px;">
<!--								<img class="img-responsive col-lg-12" style="width:100%;padding:0px;" src="../images/researchBanner.jpg" alt="cover-img" />    -->
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="content-left myWelcome wow fadeIn">
										<h4 >
											<i class="fa fa-bookmark" style="color:#2980b9"></i>
											<span  style="color:#000;">&nbsp;<strong>Gallery </strong></span>
										</h4>
										<hr />
										<div class="inner-content">
											<div class="col-lg-12 gallery">
												<div class="gallery-tab">
													<i class='fa fa-picture-o'></i>	
													<span> </span>

													<i class="fa fa-times pull-right galleryClose">&nbsp;close&nbsp;</i>
													<i class="fa fa-undo pull-right backToAlbum">&nbsp;Back to Albums&nbsp;</i>
													<div class="gallery-tab-thumbs">
														<!--<?php //include('getimages.php') ?>-->
													</div>


													<i class="fa fa-arrow-right pull-right gallery-tab-arrowRight"></i>
													<i class="fa fa-arrow-left pull-right gallery-tab-arrowLeft"></i>
												</div>
												<div class="album-tab">
													<i class="fa fa-bars"></i>	
													<span></span>

													<i class="fa fa-times pull-right albumClose">&nbsp;close&nbsp;</i>

													<div class="album-tab-thumbs">
														<!--<?php //include('getimages.php') ?>-->
													</div>

													<i class="fa fa-arrow-right pull-right album-tab-arrowRight"></i>
													<i class="fa fa-arrow-left pull-right album-tab-arrowLeft"></i>
												</div>
												<div id="loadingmessage">
													<img src="general/ajax-loader_0.gif"/>
												</div>
												<div id="option-tab">
													<i class="fa fa-bars" data-toggle="tooltip" data-placement="top" title="Albums"></i>
													<i class='fa fa-picture-o' data-toggle="tooltip" data-placement="top" title="Galley"></i>	
													<i class="fa fa-arrow-left" data-toggle="tooltip" data-placement="top" title="Left"></i>
													<i class="fa fa-arrow-right" data-toggle="tooltip" data-placement="top" title="Right"></i>

												</div>
											</div>


										</div>


									</div>
								</div>
								<!--
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


</div>
-->

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