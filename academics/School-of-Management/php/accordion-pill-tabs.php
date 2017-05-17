<style>
    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        border-width: 0;
    }
    
    .nav-tabs>li>a {
        border: none;
        color: #666;
        padding: 5px 10px;
    }
    
    .nav-tabs>li.active>a,
    .nav-tabs>li>a:hover {
        border: none;
        color: #4285F4 !important;
        background: transparent;
    }
    
    .nav-tabs>li>a::after {
        content: "";
        background: #4285F4;
        height: 2px;
        position: absolute;
        width: 100%;
        left: 0px;
        bottom: -1px;
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
        margin-right: 12px;
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
        color: #18bc9c;
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
                <ul class="nav nav-tabs filter-button" role="tablist">
                    <li role="presentation" class="active"><a aria-controls="sample" role="button" data-filter=".myFav"><i class="fa fa-hand-o-right"></i>&nbsp; My Favourites</a></li>
                    <li role="presentation"><a aria-controls="profile" role="button" data-filter=".exam"><i class="fa fa-hand-o-right"></i>&nbsp; Examinations</a></li>
                    <li role="presentation"><a aria-controls="messages" role="button" data-filter=".student"><i class="fa fa-hand-o-right"></i>&nbsp; Student Life</a></li>
                    <li role="presentation"><a aria-controls="settings" role="button" data-filter=".myFav"><i class="fa fa-hand-o-right"></i>&nbsp; Collaborations</a></li>
                    <li role="presentation"><a aria-controls="settings" role="button" data-filter=".spl"><i class="fa fa-hand-o-right"></i>&nbsp; Jayantian Special</a></li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-12 hidden-lg hidden-md">
                <ul class="nav nav-tabs filter-button" role="tablist">
                    <li role="presentation" class="active"><a aria-controls="sample" role="button" style="padding: 5px 12px;" data-filter=".myFav"><i class="fa fa-hand-o-right"></i></a></li>
                    <li role="presentation"><a aria-controls="profile" style="padding: 5px 12px;" role="button" data-filter=".exam"><i class="fa fa-hand-o-right"></i></a></li>
                    <li role="presentation"><a aria-controls="messages" style="padding: 5px 12px;" role="button" data-filter=".student"><i class="fa fa-hand-o-right"></i></a></li>
                    <li role="presentation"><a aria-controls="settings" style="padding: 5px 12px;" role="button" data-filter=".myFav"><i class="fa fa-hand-o-right"></i></a></li>
                    <li role="presentation"><a aria-controls="settings" style="padding: 5px 12px;" role="button" data-filter=".spl"><i class="fa fa-hand-o-right"></i></a></li>
                </ul>
            </div>


            <!-- Tab panes -->
            <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                <div class="tab-content" id="accPillTab">
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <a href="#">
                            <div class="accTabs">
                                <h2><i class="fa fa-calendar"></i>Academic Calender</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-xs-12 myFav">
                        <a href="../../../gallery/index.php">
                        <div class="accTabs">
                            <h2><i class="fa fa-picture-o"></i>Gallery</h2>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-xs-12 myFav">
                        <div class="accTabs">
                            <h2><i class="fa fa-file-text"></i>Notice</h2>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <div class="accTabs">
                            <h2><i class="fa fa-flag"></i>Events</h2>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <div class="accTabs">
                            <h2><i class="fa fa-lightbulb-o"></i>CMS</h2>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <div class="accTabs">
                            <h2><i class="fa fa-envelope"></i>Mail</h2>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <div class="accTabs">
                            <h2><i class="fa fa-phone"></i>Support</h2>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-xs-12 myFav">
                        <div class="accTabs">
                            <h2><i class="fa fa-globe"></i>Campus Connect</h2>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-xs-12 exam">
                        <div class="accTabs">
                            <h2><i class="fa fa-hand-o-right"></i>Examination</h2>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-xs-12 student">
                        <div class="accTabs">
                            <h2><i class="fa fa-hand-o-right"></i>Campus Management System</h2>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-xs-12 spl">
                        <div class="accTabs">
                            <h2><i class="fa fa-hand-o-right"></i>Special</h2>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-xs-12 spl">
                        <div class="accTabs">
                            <h2><i class="fa fa-hand-o-right"></i>Special</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../js/isotope-docs.min.js"></script>
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