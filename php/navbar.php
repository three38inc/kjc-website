<?php 

    $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website";
?>
<nav class="big navbar navbar-default navbar-fixed-top yamm" id='top'>
<!--  <div class="container-fluid">-->
  <div class="container">
    <div class="navbar-header">

        <div  class="navbar-brand">
        <a href="<?php echo $ROOT; ?>/home/index.php"><img class="img-responsive" src="<?php echo $ROOT; ?>/images/kjcFlag.png" id='imgLink'/></a>
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
        <a href="<?php echo $ROOT; ?>/home/contact-us.php" class="link">contact us<i class="fa fa-phone"></i></a>
        <a class="hide" id="search">search<i class="fa fa-search"></i></a>
    </div>

    <div class="collapse navbar-collapse" id="main-navbar">
      <ul class="nav navbar-nav navbar-right">
        <li>
            <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
            <a href="<?php echo $ROOT; ?>/home/index.php" id="home">Home</a>
        </li>

        <li class="dropdown yamm-fw">
          <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us</a>
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
                       <li><a href="<?php echo $ROOT; ?>/carrer/carrer.php" title="Our Carrers">Carrer</a></li>
                       <li><a href="https://www.tcsion.com/SelfServices/" target="_blank" title="Attendance">Attendance</a></li>
                       <li><a href="<?php echo $ROOT; ?>/events/events.php" title="International">Recent Events</a></li>
                       <li><a href="<?php echo $ROOT; ?>/notice/notice.php" title="International">Notices &amp; Announcements</a></li>
<!--
                       <li><a href="#" title="Beyond Curriculum">Beyond Curriculum</a></li>
                       <li><a href="#" title="Achivements">Achivements</a></li>
                       <li><a href="#" title="Jayantian Special">Jayantian Special</a></li>
-->
                    </ul>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="menu-alt">
                          <a href="<?php echo $ROOT; ?>/about/founder.php" ><h4>Founder</h4></a>
                        <p>
                          Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph's Province..
                        </p>
                        <a href="<?php echo $ROOT; ?>/about/founder.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/about/history.php"><h4>History</h4></a>
                        <p>
                          Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph's Province..
                        </p>
                        <a href="<?php echo $ROOT; ?>/about/history.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/about/milestones.php"><h4>Milestones</h4></a>
                        <p>
                          The college has accomplished many milestones within a short span of its existence..
                        </p>
                        <a href="<?php echo $ROOT; ?>/about/milestones.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/about/vision_mission_goals.php"><h4>Vision, Mission &amp; Goals</h4></a>
                        <p>
                          Light and Prosperity': To provide intellectual and moral leadership by igniting the minds of youth to realize..
                        </p>
                        <a href="<?php echo $ROOT; ?>/about/vision_mission_goals.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/about/core_values.php"><h4>Core Values</h4></a>
                        <p>
                          We believe that faith in God is the beginning of true wisdom and the anchor of life. Human life would be meaningless..
                        </p>
                        <a href="<?php echo $ROOT; ?>/about/core_values.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/about/educational_philosophy.php"><h4>Educational Philosophy</h4></a>
                        <p>
                          Kristu Jayanti College, the place where an educational legacy of more than a century meets modernity..
                        </p>
                        <a href="<?php echo $ROOT; ?>/about/educational_philosophy.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/about/profile.php"><h4>Profile</h4></a>
                        <p>
                          Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph's Province..
                        </p>
                        <a href="<?php echo $ROOT; ?>/about/profile.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/about/autonomous.php"><h4>Autonomous</h4></a>
                        <p>
                          Kristu Jayanti College, founded in 1999, is run by "BODHI NIKETAN TRUST", formed by the members of St. Joseph's Province..
                        </p>
                        <a href="<?php echo $ROOT; ?>/about/autonomous.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/about/management.php"><h4>Management</h4></a>
                        <p>
                          Kristu Jayanti College, the place where an educational legacy of more than a century meets modernity..
                        </p>
                        <a href="<?php echo $ROOT; ?>/about/management.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/about/message.php"><h4>Principal's Message</h4></a>
                        <p>
                          A few years ago, there was an attempt to encapsulate and treasure down in the burrows of the earth,..
                        </p>
                        <a href="<?php echo $ROOT; ?>/about/message.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                      </div>
                    </div>

                  </div>
                </div>
           </li>
         </ul>
       </li>

       <li class="dropdown yamm-fw">
         <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academics</a>
         <ul class="dropdown-menu">
          <li>
              <div class="yamm-content">
                 <div class="row">
                   <!-- <div class="col-lg-3">
                     <div class="menu">
                       <h3>Quick Links</h3>
                       <ul>
                        <li><a href="#" title="Examination">Examination</a></li>
                        <li><a href="#" title="Placements">Placements</a></li>
                        <li><a href="#" title="Student Life">Student Life</a></li>
                        <li><a href="https://www.tcsion.com/SelfServices/" target="_blank" title="Attendance">Attendance</a></li>
                        <li><a href="#" title="International">International</a></li>
                        <li><a href="#" title="Beyond Curriculum">Beyond Curriculum</a></li>
                        <li><a href="#" title="Achivements">Achivements</a></li>
                        <li><a href="#" title="Jayantian Special">Jayantian Special</a></li>
                     </ul>
                     </div>
                   </div> -->

                   <div class="col-lg-4">
                     <div class="menu-alt">
                       <a href="<?php echo $ROOT; ?>/academics/School-of-Management/"><h4>School of Management</h4></a>
                       <p>
                         Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                       </p>
                       <a href="<?php echo $ROOT; ?>/academics/School-of-Management/" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                     </div>
                   </div>

                   <div class="col-lg-4">
                     <div class="menu-alt">
                       <a href="<?php echo $ROOT; ?>/academics/College-Arts-Science-Commerce/"><h4>School of Arts, Science &amp; Commerce</h4></a>
                       <p>
                         Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                       </p>
                       <a href="<?php echo $ROOT; ?>/academics/College-Arts-Science-Commerce/" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                     </div>
                   </div>

                   <div class="col-lg-4">
                     <div class="menu-alt">
                       <a href="<?php echo $ROOT; ?>/academics/College-of-Law/"><h4>College of Law</h4></a>
                       <p>
                         Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                       </p>
                       <a href="<?php echo $ROOT; ?>/academics/College-of-Law/" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                     </div>
                   </div>

                 </div>
               </div>
          </li>
        </ul>
      </li>

      <li class="dropdown yamm-fw">
        <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Research</a>
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
                       <li><a href="<?php echo $ROOT; ?>/carrer/carrer.php" title="Our Carrers">Carrer</a></li>
                       <li><a href="https://www.tcsion.com/SelfServices/" target="_blank" title="Attendance">Attendance</a></li>
                       <li><a href="<?php echo $ROOT; ?>/events/events.php" title="International">Recent Events</a></li>
                       <li><a href="<?php echo $ROOT; ?>/notice/notice.php" title="International">Notices &amp; Announcements</a></li>
<!--
                       <li><a href="#" title="Beyond Curriculum">Beyond Curriculum</a></li>
                       <li><a href="#" title="Achivements">Achivements</a></li>
                       <li><a href="#" title="Jayantian Special">Jayantian Special</a></li>
-->
                    </ul>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="menu-alt">
                      <a href="<?php echo $ROOT; ?>/research/centre_for_research.php"><h4>Center for Research</h4></a>
                      <p>
                       The Centre for Research actively promotes research and inculcates research culture. It is chaired by the ...
                      </p>
                      <a href="<?php echo $ROOT; ?>/research/centre_for_research.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="menu-alt">
                      <a href="<?php echo $ROOT; ?>/research/research_projects.php" ><h4>Research Projects</h4></a>
                      <p>
                        The Centre for Research has initiated a number of research projects both minor and major in order to create ...
                      </p>
                      <a href="<?php echo $ROOT; ?>/research/research_projects.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="menu-alt">
                      <a href="<?php echo $ROOT; ?>/research/patents.php"><h4>Patents</h4></a>
                      <p>
                        Although the institution is in its infancy, the thrust given to academics and research is on ....
                      </p>
                      <a href="<?php echo $ROOT; ?>/research/patents.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="menu-alt">
                      <a href="<?php echo $ROOT; ?>/research/publications.php"><h4>Publications</h4></a>
                      <p>
                        The college has collaborated with industry, social organizations and institutions at national and ....
                      </p>
                      <a href="<?php echo $ROOT; ?>/research/publications.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="menu-alt">
                      <a href="<?php echo $ROOT; ?>/research/consultancy.php"><h4>Consultancy</h4></a>
                      <p>
                        The institute shall open its services and share its knowledge resources for the mutual benefit of ...
                      </p>
                      <a href="<?php echo $ROOT; ?>/research/consultancy.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/research/extension.php"><h4>Extension</h4></a>
                      <p>
                        Jayantian Extension Services (JES) was instituted by the college to coordinate extension activities ...
                      </p>
                      <a href="<?php echo $ROOT; ?>/research/extension.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-lg-offset-3">
                    <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/research/research_centre_in_biotechnology.php"><h4>Research Center in Biotechnology</h4></a>
                      <p>
                        The Department has been endowed the status of a Research Centre in Biotechnology of Bangalore University ...
                      </p>
                      <a href="<?php echo $ROOT; ?>/research/research_centre_in_biotechnology.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/research/research_centre_in_social_work.php"><h4>Research Center in Social Work</h4></a>
                      <p>
                        The mission of the research centre of Department of Social Work is to provide scholarly leadership...
                      </p>
                      <a href="<?php echo $ROOT; ?>/research/research_centre_in_social_work.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="menu-alt">
                      <a href="<?php echo $ROOT; ?>/chavara/index.php"><h4>Chavara Journal</h4></a>
                      <p>
                        It is a peer reviewd, bi-annual research journal with an international scope published by the School of Management...
                      </p>
                      <a href="<?php echo $ROOT; ?>/chavara/index.php" class="read-more" target="_blank">Read More <i class='fa fa-angle-double-right'></i></a>
                    </div>
                  </div>

                </div>
              </div>
         </li>
       </ul>
     </li>

     <li class="dropdown yamm-fw">
         <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Campus</a>
         <ul class="dropdown-menu">
          <li>
              <div class="yamm-content">
                <div class="row">
                  <div class="col-lg-7">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/V_1WHJzer5M" frameborder="0" allowfullscreen></iframe>
                  </div>
                  <div class="col-lg-5">
                    <div class="menu-alt full">
                      <a href="<?php echo $ROOT; ?>/campus/academic_arena.php"><h4>Kristu Jayanti College</h4></a>
                      <p>
                        The institution's infrastructure is at pace with the changing needs of the student population. To be on par with the scientific and technological advancements, parallel expansion of infrastructure in the form of laboratories, library and other learning resources such as computers, e-resources and Wi-Fi facility are initiated.
                        <br><br>
                        Physical facilities have been expanded to create an ambience conducive for academic excellence and holistic development. Various departments and administrative sections are housed in the Main Block. The MBA and MCA programmes function in a separate block. The college has spacious class rooms, auditoria, laboratories, conference halls, panel rooms and sports facilities.
                      </p>
                      <a href="<?php echo $ROOT; ?>/campus/academic_arena.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                    </div>
                  </div>
                </div>
                <!-- <hr> -->
                 <div class="row">

                   <div class="col-lg-2">
                     <div class="menu-alt">
                       <a href="<?php echo $ROOT; ?>/campus/library_info.php"><h4>Library</h4></a>
                       <p>
                         The College Library is a gateway to a world of information. The staff and students have unlimited access to a wealth of Information...
                       </p>
                       <a href="<?php echo $ROOT; ?>/campus/library_info.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                     </div>
                   </div>

                   <div class="col-lg-2">
                     <div class="menu-alt">
                       <a href="<?php echo $ROOT; ?>/campus/labs.php"><h4>Labs</h4></a>
                       <p>
                         Well equipped and state-of-the-art labs with updated technology is one of strongest assets of the college. Practical sessions provide.
                       </p>
                       <a href="<?php echo $ROOT; ?>/campus/labs.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                     </div>
                   </div>

                   <div class="col-lg-2">
                     <div class="menu-alt">
                       <a href="<?php echo $ROOT; ?>/campus/sports_games.php"><h4>Sports &amp; Games</h4></a>
                       <p>
                         The Sports department coordinates the events which help students to perform well in all sports and game events at University, State and National Level.
                       </p>
                       <a href="<?php echo $ROOT; ?>/campus/sports_games.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                     </div>
                   </div>

                   <div class="col-lg-2">
                     <div class="menu-alt">
                       <a href="<?php echo $ROOT; ?>/campus/hostel.php"><h4>Hostel</h4></a>
                       <p>
                         Well managed hostels are available for both boys and girls. All the hostels for girls are run by Rev. Sisters ..
                       </p>
                       <a href="<?php echo $ROOT; ?>/campus/hostel.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                     </div>
                   </div>

                   <div class="col-lg-2">
                     <div class="menu-alt">
                       <a href="<?php echo $ROOT; ?>/campus/cafeteria.php"><h4>Cafeteria</h4></a>
                       <p>
                         It is a spacious area that provides a wide range of hygienic food at affordable price. It is a popular hub on.
                       </p>
                       <a href="<?php echo $ROOT; ?>/campus/cafeteria.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                     </div>
                   </div>

                   <div class="col-lg-2">
                     <div class="menu-alt">
                       <a href="<?php echo $ROOT; ?>/campus/atm.php"><h4>ATM</h4></a>
                       <p>
                         SIB ATM provides 24 hr service. It facilitates easy access for students to carry out quick bank transactions..
                       </p>
                       <a href="<?php echo $ROOT; ?>/campus/atm.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                     </div>
                   </div>

                 </div>
               </div>
          </li>
        </ul>
      </li>

      <li class="dropdown yamm-fw">
        <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Student Services</a>
        <ul class="dropdown-menu">
         <li>
             <div class="yamm-content">
                <div class="row">
                  <div class="col-lg-3">
                    <div class="menu">
                      <h3>More Links</h3>
                      <ul>
                        <li><a href="https://kristujayanti.directverify.in/myeasydocs_directverify/directverify/dv_trn_verification.aspx" target="_blank" title="Online Document Verification">Online Document Verification</a></li>
                        <li><a href="<?php echo $ROOT; ?>/student_services/eic.php" title="EIC">Entrepreneurship and Innovation Centre(EIC)</a></li>
                        <li><a href="<?php echo $ROOT; ?>/student_services/luminary.php" title="Luminary E-CELL ">Luminary E-CELL</a></li>
                        <li><a href="<?php echo $ROOT; ?>/student_services/jayantian_entrepreneurs.php" title="Jayantian Entrepreneurs">Jayantian Entrepreneurs</a></li>
                        <li><a href="<?php echo $ROOT; ?>/student_services/bank_loan.php" title="Bank Loan">Bank Loan</a></li>
                        <li><a href="<?php echo $ROOT; ?>/student_services/schlorship_loan_facilities.php" title="Scholorship &amp; Loan Facilities">Scholorship &amp; Loan Facilities</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/student_services/counselling_center.php"><h4>Counselling Center</h4></a>
                      <p>
                        The youth of today are on the fast track to compete with one another to excel in every field. As a flipside..
                      </p>
                      <a href="<?php echo $ROOT; ?>/student_services/counselling_center.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/student_services/grievance_redressal.php"><h4>Grievance Redressal</h4></a>
                      <p>
                        The Grievance Redressal Cell was constituted in July, 2006 with five members to probe into the student..
                      </p>
                      <a href="<?php echo $ROOT; ?>/student_services/grievance_redressal.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/student_services/scholarship.php"><h4>Scholarship</h4></a>
                      <p>
                        Scholarship, student welfare in terms of health, financial support and safety..
                      </p>
                      <a href="<?php echo $ROOT; ?>/student_services/scholarship.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/student_services/health_care.php"><h4>Health Care</h4></a>
                      <p>
                        The physical and mental well-being of the student and staff are given prime importance..
                      </p>
                      <a href="<?php echo $ROOT; ?>/student_services/health_care.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/student_services/international_student_forum.php"><h4>International Student Forum</h4></a>
                      <p>
                        There is an incremental growth in the number of International students. Students from Bangladesh, Iran, Ivory coast,..
                      </p>
                      <a href="<?php echo $ROOT; ?>/student_services/international_student_forum.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="menu-alt">
                        <a href="<?php echo $ROOT; ?>/student_services/counselling_center.php"><h4>Coaching Center</h4></a>
                      <p>
                        The competitive examinations require scrupulous coaching and preparation. The college offers coaching classes..
                      </p>
                      <a href="<?php echo $ROOT; ?>/student_services/counselling_center.php" class="read-more">Read More <i class='fa fa-angle-double-right'></i></a>
                    </div>
                  </div>

                </div>
              </div>
         </li>
       </ul>
     </li>

    <li>
        <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
        <a  href="<?php echo $ROOT; ?>/admission/admission.php" id="contact">Admission</a>
    </li>

    <li class="hidden-lg">
        <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
        <a  id="search1">Search</a>
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
