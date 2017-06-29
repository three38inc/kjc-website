<nav class="big navbar navbar-default navbar-fixed-top yamm" id='top'>
    <!--  <div class="container-fluid">-->
    <div class="container">
        <div class="navbar-header">

            <div class="navbar-brand">
                <a href="<?php echo $ROOT ; ?>/home/index.php"><img class="img-responsive" src="<?php echo $ROOT ; ?>/images/kjcFlag.png" id='imgLink'/></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <div class="floating-nav hidden-md hidden-sm hidden-xs">
            <a href="https://www.facebook.com/KristuJayantiCollege" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="http://in.linkedin.com/in/kristujayanti" target="_blank"><i class="fa fa-youtube"></i></a>
            <a href="https://twitter.com/kristujayanti99" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com/user/kristujayanticollege" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="link">contact us<i class="fa fa-phone"></i></a>
            <a class="hide" id="search">search<i class="fa fa-search"></i></a>
        </div>

        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="nav navbar-nav navbar-right" style="clear:right;">
                <li>
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a href="index.php" id="home">MBA/PGDM</a>
                </li>
                
<!--
                <li class="dropdown yamm-fw">
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT US</a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="menu">
                                            <h3>Quick Links</h3>
                                            <ul>
                                                <li><a href="<?php echo $ROOT; ?>/examination/introduction.php" title="Examination">Examination</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/placements/about_cecr.php" title="Placements">Placements</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/career/career.php" title="Our Carrers">Carrer</a></li>
                                                <li><a href="https://www.tcsion.com/SelfServices/" target="_blank" title="Attendance">Attendance</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/events/events.php" title="International">Recent Events</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/notice/notice.php" title="International">Notices &amp; Announcements</a></li>

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/about/management.php">
                                                <h4>Management</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/about/management.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/about/our_journey.php">
                                                <h4>Our Journey</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/about/our_journey.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/about/vision_mission.php">
                                                <h4>Vision &amp; Mission</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/about/vision_mission.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/about/Values.php">
                                                <h4>Values</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/about/values.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/faculty.php">
                                                <h4>Faculty</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/faculty.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/about/b-school-rankings.php">
                                                <h4>B-School Rankings</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/about/b-school-rankings.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown yamm-fw">
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACADEMICS</a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="menu">
                                            <h3>Quick Links</h3>
                                            <ul>
                                                <li><a href="<?php echo $ROOT; ?>/examination/introduction.php" title="Examination">Examination</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/placements/about_cecr.php" title="Placements">Placements</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/career/career.php" title="Our Carrers">Carrer</a></li>
                                                <li><a href="https://www.tcsion.com/SelfServices/" target="_blank" title="Attendance">Attendance</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/events/events.php" title="International">Recent Events</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/notice/notice.php" title="International">Notices &amp; Announcements</a></li><li><a href="<?php echo $ROOT; ?>/#" title="International">Faculty Development Programme</a></li>

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/academics/programmes.php">
                                                <h4>Programmes</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/academics/programmes.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/academics/curriculum.php">
                                                <h4>Curriculum</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/academics/curriculum.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/academics/training.php">
                                                <h4>Training</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/academics/training.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/academics/value-added-courses.php">
                                                <h4>Value Added Courses</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/academics/value-added-courses.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/academics/academic-linkages.php">
                                                <h4>Academic Linkages</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/academics/academic-linkages.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/academics/mdp.php">
                                                <h4>MDP</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/academics/mdp.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    

                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown yamm-fw">
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACTIVITIES</a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="menu">
                                            <h3>Quick Links</h3>
                                            <ul>
                                                <li><a href="<?php echo $ROOT; ?>/#" title="Examination">Attitudinal Workshops</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/#" title="Examination">Life Skills</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/#" title="Examination">Panel Discussions</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/#" title="Examination">Curricullum in Practice</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/#" title="Examination">Student Achievements</a></li>
                                                

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/activites/international_exposure.php">
                                                <h4>International Exposure</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/activites/international_exposure.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/activites/international_conferance.php">
                                                <h4>International Conference</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/activites/international_conferance.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/activites/international_lecture_series.php">
                                                <h4>International Lecture Series</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/activites/international_lecture_series.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/activites/rural-outreach.php">
                                                <h4>Rural Outreach</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/activites/rural-outreach.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/activites/experiential-learning.php">
                                                <h4>Experiential Learning</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/activites/experiential-learning.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/activites/#.php">
                                                <h4>Management Fests</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/activites/#" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    



                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown yamm-fw">
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">CAMPUS</a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="menu">
                                            <h3>Infrastructure</h3>
                                            <ul>
                                                <li><a href="<?php echo $ROOT; ?>/examination/introduction.php" title="Examination">ICT Enabled Class Rooms</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/examination/introduction.php" title="Examination">
Auditorium
</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/examination/introduction.php" title="Examination">Conference Room
</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/examination/introduction.php" title="Examination">
Panel Room
</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/examination/introduction.php" title="Examination">
Computer Lab
</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/examination/introduction.php" title="Examination">
Student Lockers
</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/examination/introduction.php" title="Examination">
Gymnasium
</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/examination/introduction.php" title="Examination">
Cafetaria
</a></li>


                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/campus/#">
                                                <h4>Library</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/campus/#" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/campus/#">
                                                <h4>Wifi Connectivity</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/campus/#" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/campus/#">
                                                <h4>Hostels</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/campus/#" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div><div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/campus/#">
                                                <h4>Play Ground</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/campus/#" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div><div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/campus/#">
                                                <h4>ATM</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/campus/#" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    



                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown yamm-fw">
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">CORPORATE</a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="menu">
                                            <h3>Corporate Profile</h3>
                                            <ul>
                                                <li><a href="<?php echo $ROOT; ?>/#" title="Examination">Our Recruiters</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/#" title="Examination">Recruiter's Feedback</a></li>
                                                <li><a href="<?php echo $ROOT; ?>/#" title="Examination">Corporate Relations Team</a></li>
                                                

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/corporate-relations/#">
                                                <h4>Placement Profile 2017</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/corporate-relations/#" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/corporate-relations/#">
                                                <h4>Placement Report 2016</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/corporate-relations/#" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/corporate-relations/#">
                                                <h4>Placement Process</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/corporate-relations/#" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/corporate-relations/#">
                                                <h4>Training &amp; Development</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/corporate-relations/#" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/corporate-relations/#">
                                                <h4>Industry Institute Interface (3i)</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/corporate-relations/#" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="menu-alt">
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/corporate-relations/#">
                                                <h4>Industry Sposored Projects</h4>
                                            </a>
                                            <p>
                                                Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph Province of the Carmelites of Mary Immaculate (CMI).
                                            </p>
                                            <a href="#<?php echo $ROOT; ?>/academics/School-of-Management/corporate-relations/#" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                    



                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a href="index.php" id="home">ADMISSION</a>
                </li>
-->
                
                <li>
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a href="curriculum.php" id="home">ABOUT US</a>
                </li>
                <li>
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a href="training.php" id="home">Training</a>
                </li>
                <li>
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a href="activities.php" id="home">Activities</a>
                </li>

                <li>
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a href="admission.php" id="contact">Admission</a>
                </li>

                <li>
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a href="pdf/mandatory_2015_mba.pdf" target="_blank" id="contact">Mandatory Annexure</a>
                </li>

               


                <li class="hidden-lg">
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a id="search1">Search</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
<div class='big' id='top1'>
    <div class="nav2 hide">
        <a href="#">Student Services</a>
        <a href="#">Campus</a>
        <a href="#">Admissions</a>
    </div>
</div>
