
<link rel="stylesheet" href="<?php echo $ROOT ; ?>/css/fonts/flat-icon/flaticon.css" />
<style>
    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        border-width: 0;
    }
    
    .nav-tabs{
        background-color: #34495e;
        border-radius: 0px 0px 5px 5px;
    }
    
    .nav-tabs>li>a {
        border: none;
        color: #fff;
        background: transparent;
        padding: 5px 10px;
        border-radius: 0px 0px 5px 5px;
    }
    
    .myNav li.active a:hover,
    .myNav li.active a:focus,
    .myNav li.active a:active {
        background: #fff;
    }
    
    .nav-tabs>li.active>a,
    .nav-tabs>li>a:hover {
        border: none;
        color: #4285F4 !important;
        background: #fff;
    }
    
    .nav-tabs>li>a::after {
        content: "";
        background: #4285F4;
        height: 2px;
        position: absolute;
        width: 100%;
        left: 0px;
        top: 0px;
        transition: all 250ms ease 0s;
        transform: scale(0);
    }
    
    .nav-tabs>li.active>a::after,
    .nav-tabs>li:hover>a::after {
        transform: scale(1);
    }
    
    .nav-tabs>li {
        width: auto;
        display: inline-block;
        margin-left: 8px;
        margin-bottom: 0px;
    }
    
    .accTabs {
        margin: 5px;
        /*        border: 1px solid #ccc;*/
        box-sizing: border-box;
        padding: 15px 15px;
        text-align: left;
        border-radius: 5px;
        color: #333;
        cursor: pointer;
        transition: all ease-in-out .3s;
    }
    
    .accTabs:hover {
        background-color: #34495e;
        color: #fff;
    }
    
    .accTabs:hover i {
        margin-right: 10px;
        color: #fff;
    }
    
    .accTabs h2 {
        margin: 0;
        font-size: 16px;
        font-weight: bold;
    }
    
    .accTabs i {
/*        color: #428641;*/
        margin-right: 15px;
        transition: all ease-in-out .3s;
    }
    
    #accPillTab a:hover,
    #accPillTab a:visited,
    #accPillTab a:active,
    #accPillTab a:focus {
        text-decoration: none;
    }
    .c1{
    color: #10c45c;
}

.c2{
    color: #24ccc0;
}

.c3{
    color: #fc5f42;
}

.c4{
    color: #45aef4;
}

.c5{
    color: #ad33c6;
}

.c6{
    color: #f8c331;
}

.c7{
    color: #e1001a;
}
    .color-1{
    border-right: 1px solid  #10c45c;
}

.color-1:hover{
    background-color: #10c45c;
    border-right: 5px solid  #0eb053;
    color: #fff;
}

.color-2{
    border-right: 1px solid  #24ccc0;
}

.color-2:hover{
    background-color: #24ccc0;
    border-right: 5px solid  #079d92;
    color: #fff;
}

.color-3{
    border-right: 1px solid  #fc5f42;
}

.color-3:hover{
    background-color: #fc5f42;
    border-right: 5px solid  #fd2a03;
    color: #fff;
}

.color-4{
    border-right: 1px solid  #45aef4;
}

.color-4:hover{
    background-color: #45aef4;
    border-right: 5px solid  #008be7;
    color: #fff;
}

.color-5{
    border-right: 1px solid  #ad33c6;
}

.color-5:hover{
    background-color: #ad33c6;
    border-right: 5px solid  #9000ae;
    color: #fff;
}

.color-6{
    border-right: 1px solid  #f8c331;
}

.color-6:hover{
    background-color: #f8c331;
    border-right: 5px solid  #e1a500;
    color: #fff;
}

.color-7{
    border-right: 1px solid  #e1001a;
}

.color-7:hover{
    background-color: #e1001a;
    border-right: 5px solid  #a1001a;
    color: #fff;
}
</style>


<div class="row">
    <div class="col-lg-12 col-md-12">
        <!-- Nav tabs -->
        <div class="card">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <ul class="nav nav-tabs filter-button" role="tablist" style="padding: 0em 0em;">
                    <li role="presentation" class="active"><a aria-controls="sample" role="button" data-filter=".myFav">&nbsp; My Favourites</a></li>
                    <li role="presentation"><a aria-controls="settings" role="button" data-filter=".spl">&nbsp; Department Special</a></li>
                    <li role="presentation"><a aria-controls="messages" role="button" data-filter=".student">&nbsp; Student Life</a></li>

					 <li role="presentation"><a aria-controls="profile" role="button" data-filter=".ach">&nbsp; Achievements</a></li>
                    <li role="presentation"><a href="faculty.php" aria-controls="settings" role="button" data-filter=".fac">&nbsp; Faculty</a></li>
				  <li role="presentation"><a aria-controls="profile" role="button" data-filter=".exam">&nbsp; Examination</a></li>
                    

                </ul>
            </div>

            <div class="col-xs-12 col-sm-12 hidden-lg hidden-md">
                <ul class="nav nav-tabs filter-button" role="tablist">
                    <li role="presentation" class="active" style="margin: 0px 3%;"><a aria-controls="sample" role="button" style="padding: 5px 12px;color: #428643;" data-filter=".myFav"><i class="flaticon-kjc-favourites"></i></a></li>
                    <li role="presentation" style="margin: 0px 3%;"><a aria-controls="settings" style="padding: 5px 12px;color: #428643;" role="button" data-filter=".spl"><i class="flaticon-kjc-special"></i></a></li>
                    <li role="presentation" style="margin: 0px 3%;"><a aria-controls="messages" style="padding: 5px 12px;color: #428643;" role="button" data-filter=".student"><i class="flaticon-kjc-life"></i></a></li>
                    <li role="presentation" style="margin: 0px 3%;"><a aria-controls="settings" style="padding: 5px 12px;color: #428643;" role="button" data-filter=".ach"><i class="flaticon-kjc-miscellaneous"></i></a></li>
                    <li role="presentation" style="margin: 0px 3%;"><a aria-controls="settings" style="padding: 5px 12px;color: #428643;" role="button" data-filter=".fac"><i class="flaticon-kjc-miscellaneous"></i></a></li>
                    <li role="presentation" style="margin: 0px 3%;"><a aria-controls="profile" style="padding: 5px 12px;color: #428643;" role="button" data-filter=".exam"><i class="flaticon-kjc-exam"></i></a></li>
                    

                </ul>
            </div>


            <!-- Tab panes -->
            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">

                <div class="tab-content" id="accPillTab">
                    <div class="col-lg-4 col-xs-12 myFav">
                        <a href="<?php echo $ROOT ; ?>/home/academic-calendar.php">
                            <div class="accTabs color-1">
                                <h2><i class="flaticon-kjc-calendar c1"></i>Academic Calender</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-xs-12 myFav">
                        <a href="<?php echo $ROOT ; ?>/notice/notice.php">
                            <div class="accTabs color-2">
                                <h2><i class="flaticon-kjc-notice c2"></i>Notice</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <a href="<?php echo $ROOT ; ?>/events/events.php">
                            <div class="accTabs color-3">
                                <h2><i class="flaticon-kjc-events c3"></i>Events</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <a href="https://www.tcsion.com/SelfServices/" target="_blank">
                            <div class="accTabs color-4">
                                <h2><i class="flaticon-kjc-cms c4"></i>TCS iON</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <a href="https://www.google.com/a/kristujayanti.com/ServiceLogin?service=mail&passive=true&rm=false&continue=http://mail.google.com/a/kristujayanti.com/&ltmpl=default&ltmplcache=2" target="_blank">
                            <div class="accTabs color-5">
                                <h2><i class="flaticon-kjc-mail c5"></i>Mail</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <a href="<?php echo $ROOT ; ?>/placements/about_cecr.php">
                        <div class="accTabs color-6">
                            <h2><i class="flaticon-kjc-collaborations c6"></i>Placements</h2>
                        </div>
                        </a>
                    </div>
                    
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <a href="<?php echo $ROOT ; ?>/gallery/index.php">
                        <div class="accTabs color-7">
                            <h2><i class="flaticon-kjc-gallery c7"></i>Gallery</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <a href="http://www.tcsion.com/PVC/" target="_blank">
                            <div class="accTabs color-2">
                                <h2><i class="flaticon-kjc-connect c2"></i>Campus Connect</h2>
                            </div>
                        </a>
                    </div>

                    <div class=" col-lg-4 col-xs-12 myFav">
                        <a href="http://events.kristujayanti.edu.in" target="_blank">
                            <div class="accTabs color-1">
                                <h2><i class="fa fa-calendar-o c1"></i>Enroll for an Event</h2>
                            </div>
                        </a>
                    </div>
                    
                    <div class=" col-lg-4 col-xs-12 exam">
                        <a href="<?php echo $ROOT ; ?>/examination/semester_pattern_ug_pg.php">
                            <div class="accTabs color-3">
                                <h2><i class="flaticon-kjc-programme c3"></i>Programme Pattern</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 exam">
                        <a href="<?php echo $ROOT ; ?>/examination/examination_calendar.php">
                            <div class="accTabs color-4">
                                <h2><i class="flaticon-kjc-examcalendar c4"></i>Examination Calendar</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 exam">
                        <a href="<?php echo $ROOT ; ?>/examination/assessment_norms.php">

                            <div class="accTabs color-5">
                                <h2><i class="flaticon-kjc-regulations c5"></i>Assesment Regulations</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 exam">
                        <a href="<?php echo $ROOT ; ?>/examination/end_semester_trimester_examination_time_table.php">
                            <div class="accTabs color-6">
                                <h2><i class="flaticon-kjc-examtimetable c6"></i>Exam Timetable</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 exam">
                        <a href="<?php echo $ROOT ; ?>/examination/grievance_redressal.php">
                        <div class="accTabs color-7">
                            <h2><i class="flaticon-kjc-postexam c7"></i>POST-EXAM Procedure</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 student">

                        <a href="intra_collegiate_fests.php">
                        <div class="accTabs color-1">
                            <h2><i class="flaticon-kjc-art c1"></i>Management Fests </h2>

                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 student">

                        <a href="B_quiz.php">
                        <div class="accTabs color-2">
                            <h2><i class="flaticon-kjc-sports c2"></i>B-Quiz </h2>

                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 student">

                        <a href="soft_skill_training.php">
                        <div class="accTabs color-3">
                            <h2><i class="flaticon-kjc-celebrations c3"></i>Skill Development </h2>

                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 student">

                        <a href="out_bound_training_programme.php">
                        <div class="accTabs color-4">
                            <h2><i class="flaticon-kjc-services c4"></i>Leadership Through Outbound Training </h2>

                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 student">

                        <a href="current_business_awareness.php">
                        <div class="accTabs color-5">
                            <h2><i class="flaticon-kjc-festivals c5"></i>Current Business Awareness Activities</h2>

                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 student">

                        <a href="#">
                        <div class="accTabs color-6">
                            <h2><i class="flaticon-kjc-association c6"></i>Sports &amp; Cultural Celebrations</h2>

                        </div>
                        </a>
                    </div>
					 
                    <div class=" col-lg-4 col-xs-12 spl">

                        <a href="industry_institute_interface.php">
                        <div class="accTabs color-1">
							<h2><i class="flaticon-kjc-vichaarmanthan c1"></i>Industry Inst Interface (3i) </h2>

                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 spl">

                        <a href="international_exposure.php">
                        <div class="accTabs color-2">
                            <h2><i class="flaticon-kjc-ccpd c2"></i>International Exposure </h2>

                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 spl">

                        <a href="gramasamvedita.php">
                        <div class="accTabs color-3">
							<h2><i class="flaticon-kjc-extension c3"></i>Rural Exposure </h2>
                        </div>
                        </a>
                    </div>
					
					 <div class=" col-lg-4 col-xs-12 spl">
                        <a href="industrial_exposure.php">
                        <div class="accTabs color-3">
							<h2><i class="flaticon-kjc-extension c3"></i>Industrial Exposure  </h2>
                        </div>
                        </a>
                    </div>
					
					 <div class=" col-lg-4 col-xs-12 spl">
                        <a href="six_sigma_certification.php">
                        <div class="accTabs color-3">
							<h2><i class="flaticon-kjc-extension c3"></i>Value Added Courses  </h2>
                        </div>
                        </a>
                    </div>
					
					 <div class=" col-lg-4 col-xs-12 spl">
                        <a href="theatre_fest.php">
                        <div class="accTabs color-3">
							<h2><i class="flaticon-kjc-extension c3"></i>Theatre Fest  </h2>
                        </div>
                        </a>
                    </div>
					
					 <div class=" col-lg-4 col-xs-12 spl">
                        <a href="entrepreneurial_emphasis.php">
                        <div class="accTabs color-3">
							<h2><i class="flaticon-kjc-extension c3"></i>Entrepreneurial Emphasis </h2>

                        </div>
                        </a>
                    </div>
					
					 <div class=" col-lg-4 col-xs-12 ach">
                        <a href="social_enetrepreneurship_challenge.php">
                        <div class="accTabs color-3">
							<h2><i class="flaticon-kjc-extension c3"></i>All Karnataka Online Social Entrepreneurship Challenge </h2>
                        </div>
                        </a>
                    </div>
					
					 <div class=" col-lg-4 col-xs-12 ach">
                        <a href="management_fests.php">
                        <div class="accTabs color-3">
							<h2><i class="flaticon-kjc-extension c3"></i>Management Fests </h2>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo $ROOT ; ?>/js/isotope-docs.min.js"></script>
<script>
    $(function() {
        // init Isotope for Accordian Pill Tabs
        var $acc = $('#accPillTab').isotope({
            filter: '.myFav'
        });
        // filter items on button click
        $('.filter-button').on('click', 'a', function() {
            $('.filter-button li').removeClass('active');
            $(this).parent().addClass('active');
            var filterValue = $(this).attr('data-filter');
            $acc.isotope({
                filter: filterValue
            });
        });
    });

</script>
