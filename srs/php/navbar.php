<style>

.navbar-brand img {
    transition: all ease-in-out 0.5s;
    max-height: 82px;
}
    .navbar-fixed-top{
        min-height: 82px;
    }
</style>
<nav class="big navbar navbar-default navbar-fixed-top yamm" id='top'>
    <!--  <div class="container-fluid">-->
    <div class="container">
        <div class="navbar-header">

            <div  class="navbar-brand">
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
            <a href="contact-us.php" class="link">contact us<i class="fa fa-phone"></i></a>
            <a class="hide" id="search">search<i class="fa fa-search"></i></a>
        </div>

        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a href="<?php echo $ROOT ; ?>/srs/" id="home">S R S</a>
                </li>
                <li>
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a href="<?php echo $ROOT ; ?>/srs/about_college.php" id="home">College</a>
                </li>
                <li>
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a href="<?php echo $ROOT ; ?>/srs/about_department.php" id="home">Department</a>
                </li>
                <li>
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a href="<?php echo $ROOT ; ?>/srs/call_for_papers.php" id="home">Call For Papers</a>
                </li>

                <li>
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a  href="<?php echo $ROOT ; ?>/srs/registration.php" id="contact">Registration</a>
                </li>
                
                <li>
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a  href="<?php echo $ROOT ; ?>/srs/commitee.php" id="contact">Commitee</a>
                </li>

<!--
                <li>
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a  href="http://www.sevugapandian.com/moodle27/login/index.php" target="_blank" id="contact">MyCourse</a>
                </li>
-->

                <li class="hidden-lg">
                    <span class="brick hidden-md hidden-sm hidden-xs">&nbsp;</span>
                    <a  id="search1">Search</a>
                </li>
                <div style="clear:right;"></div>
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
