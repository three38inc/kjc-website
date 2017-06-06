
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
        color: #428641;
        margin-right: 15px;
        transition: all ease-in-out .3s;
    }
    
    #accPillTab a:hover,
    #accPillTab a:visited,
    #accPillTab a:active,
    #accPillTab a:focus {
        text-decoration: none;
    }

</style>


<div class="row">
    <div class="col-lg-12 col-md-12">
        <!-- Nav tabs -->
        <div class="card">
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <ul class="nav nav-tabs filter-button" role="tablist" style="padding: 0em 0em;">
                    <li role="presentation" class="active"><a aria-controls="sample" role="button" data-filter=".myFav">&nbsp; My Favourites</a></li>
                    <li role="presentation"><a aria-controls="settings" role="button" data-filter=".spl">&nbsp; Jayantian Special</a></li>
                    <li role="presentation"><a aria-controls="messages" role="button" data-filter=".student">&nbsp; Student Life</a></li>
                    <li role="presentation"><a aria-controls="profile" role="button" data-filter=".exam">&nbsp;Examinations</a></li>
                    <li role="presentation"><a aria-controls="settings" role="button" data-filter=".mis">&nbsp; Miscellaneous</a></li>

                </ul>
            </div>

            <div class="col-xs-12 col-sm-12 hidden-lg hidden-md">
                <ul class="nav nav-tabs filter-button" role="tablist">
                    <li role="presentation" class="active" style="margin: 0px 3%;"><a aria-controls="sample" role="button" style="padding: 5px 12px;color: #428643;" data-filter=".myFav"><i class="flaticon-kjc-favourites"></i></a></li>
                    <li role="presentation" style="margin: 0px 3%;"><a aria-controls="settings" style="padding: 5px 12px;color: #428643;" role="button" data-filter=".spl"><i class="flaticon-kjc-special"></i></a></li>
                    <li role="presentation" style="margin: 0px 3%;"><a aria-controls="messages" style="padding: 5px 12px;color: #428643;" role="button" data-filter=".student"><i class="flaticon-kjc-life"></i></a></li>
                    <li role="presentation" style="margin: 0px 3%;"><a aria-controls="profile" style="padding: 5px 12px;color: #428643;" role="button" data-filter=".exam"><i class="flaticon-kjc-exam"></i></a></li>
                    <li role="presentation" style="margin: 0px 3%;"><a aria-controls="settings" style="padding: 5px 12px;color: #428643;" role="button" data-filter=".mis"><i class="flaticon-kjc-miscellaneous"></i></a></li>

                </ul>
            </div>


            <!-- Tab panes -->
            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">

                <div class="tab-content" id="accPillTab">
                    <div class="col-lg-4 col-xs-12 myFav">
                        <a href="<?php echo $ROOT ; ?>/home/academic-calendar.php">
                            <div class="accTabs">
                                <h2><i class="flaticon-kjc-calendar"></i>Academic Calender</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-xs-12 myFav">
                        <a href="<?php echo $ROOT ; ?>/notice/notice.php">
                            <div class="accTabs">
                                <h2><i class="flaticon-kjc-notice"></i>Circulars</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <a href="<?php echo $ROOT ; ?>/events/events.php">
                            <div class="accTabs">
                                <h2><i class="flaticon-kjc-events"></i>Events</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <a href="https://www.tcsion.com/SelfServices/" target="_blank">
                            <div class="accTabs">
                                <h2><i class="flaticon-kjc-cms"></i>TCS iON</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <a href="https://www.google.com/a/kristujayanti.com/ServiceLogin?service=mail&passive=true&rm=false&continue=http://mail.google.com/a/kristujayanti.com/&ltmpl=default&ltmplcache=2" target="_blank">
                            <div class="accTabs">
                                <h2><i class="flaticon-kjc-mail"></i>Mail</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <a href="<?php echo $ROOT ; ?>/home/contact-us.php">
                            <div class="accTabs">
                                <h2><i class="flaticon-kjc-contact"></i>Support</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <a href="http://www.tcsion.com/PVC/" target="_blank">
                            <div class="accTabs">
                                <h2><i class="flaticon-kjc-connect"></i>Campus Connect</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <a href="http://events.kristujayanti.edu.in" target="_blank">
                            <div class="accTabs">
                                <h2><i class="fa fa-calendar-o"></i>Enroll for an Event</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 exam">
                        <a href="<?php echo $ROOT ; ?>/examination/semester_pattern_ug_pg.php">
                            <div class="accTabs">
                                <h2><i class="flaticon-kjc-programme"></i>Programme Pattern</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 exam">
                        <a href="<?php echo $ROOT ; ?>/examination/examination_calendar.php">
                            <div class="accTabs">
                                <h2><i class="flaticon-kjc-examcalendar"></i>Examination Calendar</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 exam">
                        <a href="<?php echo $ROOT ; ?>/examination/assessment_norms.php">

                            <div class="accTabs">
                                <h2><i class="flaticon-kjc-regulations"></i>Assesment Regulations</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 exam">
                        <a href="<?php echo $ROOT ; ?>/examination/end_semester_trimester_examination_time_table.php">
                            <div class="accTabs">
                                <h2><i class="flaticon-kjc-examtimetable"></i>Exam Timetable</h2>
                            </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 exam">
                        <a href="<?php echo $ROOT ; ?>/examination/grievance_redressal.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-postexam"></i>POST-EXAM Procedure</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 student">
                        <a href="<?php echo $ROOT ; ?>/studentlife/art_culture.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-art"></i>Art &amp; Culture</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 student">
                        <a href="<?php echo $ROOT ; ?>/studentlife/sports_games.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-sports"></i>Sports &amp; Games</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 student">
                        <a href="<?php echo $ROOT ; ?>/studentlife/ethinic_day.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-celebrations"></i>Celebrations</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 student">
                        <a href="<?php echo $ROOT ; ?>/studentlife/public_ncc.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-services"></i>Public Services</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 student">
                        <a href="<?php echo $ROOT ; ?>/studentlife/inter_intra_festivals.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-festivals"></i>Academic / Co-curricular &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fests</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 student">
                        <a href="<?php echo $ROOT ; ?>/studentlife/computer_academy.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-association"></i>Academic Clubs and &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Associations</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 spl">
                        <a href="<?php echo $ROOT ; ?>/jayantian_special/vichaarmanthan.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-vichaarmanthan"></i>Vichaarmanthan</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 spl">
                        <a href="<?php echo $ROOT ; ?>/beyond_curriculum/ccpd.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-ccpd"></i>Centre for Continuing &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Professional Education</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 spl">
                        <a href="<?php echo $ROOT ; ?>/beyond_curriculum/jayantian_extension_services.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-extension"></i>Extension Services</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 spl">
                        <a href="<?php echo $ROOT ; ?>/beyond_curriculum/entrepreneurship_development.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-entrepreneurship"></i>Entrepreneurship</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 spl">
                        <a href="<?php echo $ROOT ; ?>/beyond_curriculum/language_learning_centre.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-language"></i>Jayantian Language
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Learning Centre</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 spl">
                        <a href="<?php echo $ROOT ; ?>/beyond_curriculum/nss.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-nss"></i>National Service Scheme</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 spl">
                        <a href="<?php echo $ROOT ; ?>/beyond_curriculum/ncc.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-ncc"></i>National Cadet Corps</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 spl">
                        <a href="<?php echo $ROOT ; ?>/beyond_curriculum/centre_life_skills.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-lifeskills"></i>Centre for Life Skills &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Education</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 spl">
                        <a href="<?php echo $ROOT ; ?>/iqac/iqac_functions.php">
                            <div class="accTabs">
                                <h2><i class="flaticon-kjc-entrepreneurship"></i>IQAC</h2>
                            </div>
                        </a>
                    </div>

                    <div class=" col-lg-4 col-xs-12 mis">
                        <a href="<?php echo $ROOT ; ?>/collaborations/collaborations.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-collaborations"></i>Collaborations</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 mis">
                        <a href="<?php echo $ROOT ; ?>/iqac/iqac_functions.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-iqac"></i>IQAC</h2>
                        </div>
                        </a>
                    </div>
                    <div class=" col-lg-4 col-xs-12 mis">
                        <a href="<?php echo $ROOT ; ?>/gallery/index.php">
                        <div class="accTabs">
                            <h2><i class="flaticon-kjc-gallery"></i>Gallery</h2>
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
