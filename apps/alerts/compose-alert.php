<?php
    session_start();
    if(!isset($_SESSION["logged-user"]))
        header("Location: page-login.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured Alert manager for Kristu Jayanti">
    <meta name="author" content="Three38inc">
    <!-- App Favicon icon -->
    <link rel="shortcut icon" href="assets/images/favicon_1.ico">
    <!-- App Title -->
    <title>KJC ALERT</title>

    <!--Summernote CSS -->
    <link rel="stylesheet" href="assets/plugins/summernote/summernote.css">
    <!--Date Range picker-->
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="assets/js/modernizr.min.js"></script>

    <style>
        .wrapper {
            padding-top: 70px;
        }
        
        #topnav .topbar-main {
            background-color: #36404a;
            height: 60px;
        }
        
        .ajax-loader {
            visibility: hidden;
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(assets/images/page-loader.gif) 50% 50% no-repeat rgb(249, 249, 249);
        }

    </style>

</head>


<body>
    <div class="ajax-loader"></div>

    <?php include('snippets/navbar.php');?>


    <div class="wrapper">
        <div class="container">


            <?php include('snippets/page-title.php');?>

            <div class="row">

                <!-- Left sidebar -->
                <div class="col-lg-3 col-md-4">

                    <div class="p-20">
                        <a href="index.php" class="btn btn-danger btn-rounded btn-custom btn-block waves-effect waves-light">Back to Inbox</a>

                        <h3 class="panel-title m-t-40">Labels</h3>

                        <div class="list-group b-0 mail-list">
                            <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-info m-r-10"></span>Web App</a>
                            <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-warning m-r-10"></span>Project 1</a>
                            <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-purple m-r-10"></span>Project 2</a>
                            <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-pink m-r-10"></span>Friends</a>
                            <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-success m-r-10"></span>Family</a>
                        </div>

                    </div>

                </div>
                <!-- End Left sidebar -->

                <!-- Right Sidebar -->
                <div class="col-lg-9 col-md-8">


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <h4 class="m-t-0 m-b-30 header-title"><b>Inline Editor</b></h4>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Visibility Period</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Subject</label>
                                        <div class="col-lg-4" style="display:inline;">
                                            <input type="text" class="form-control" name="subject" value="" placeholder="The Subject Matter of the Alert" id="alert-subject" />
                                        </div>
                                        <label class="col-lg-1 control-label">Label</label>
                                        <div class="col-lg-4" style="display:inline;">
                                            <input type="text" class="form-control" name="label" value="" placeholder="Type of alert" id="alert-label" />
                                        </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-lg-3 control-label" style="padding-top:0px;">Message</label>
                                        <div class="inline-editor">
                                            <p>
                                                Please Type Your Custom alert messages Here [#select text for more options...]
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group text-right m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light btn-submit" type="submit">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                    <!-- End row -->


                </div>
                <!-- end Col-9 -->

            </div>
            <!-- End row -->

            <!-- Footer -->
            <footer class="footer text-right">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">
                            © 2017. All rights reserved.
                        </div>
                        <div class="col-xs-6">
                            <ul class="pull-right list-inline m-b-0">
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Help</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->

        </div>
        <!-- end container -->
    </div>
    <!-- end wrapper -->



    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <!--Summernote js-->
    <script src="assets/plugins/summernote/summernote.min.js"></script>

    <!--Date range picker-->
    <script src="assets/plugins/moment/moment.js"></script>
    <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- App core js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script>
        jQuery(document).ready(function() {

            $('.inline-editor').summernote({
                airMode: true
            });

            var today_start=new Date();today_start.setHours(0,0,0);
            var today_end=new Date();today_end.setHours(28, 88, 119);
            
            var tomorrow_start=new Date(new Date().getTime() + 24 * 60 * 60 * 1000);tomorrow_start.setHours(6,-30,0,0);
            var tomorrow_end=new Date(new Date().getTime() + 24 * 60 * 60 * 1000);tomorrow_end.setHours(28, 88, 119);
            
            var nextweek_start=new Date();nextweek_start.setHours(0,0,0,0);
            var nextweek_end=new Date(new Date().getTime() + 7 * 24 * 60 * 60 * 1000);nextweek_end.setHours(28, 88, 119);
            
            y = today_start.getFullYear(), m = today_start.getMonth();
            var firstDay = new Date(y, m, 1);
            var lastDay = new Date(y, m + 1, 0);
            lastDay.setHours(28, 88, 119);
            console.log(today_start);
            console.log(today_start.toISOString("YYYY-MM-DD"));
            console.log((new Date((new Date()).getTime() + 7 * 24 * 60 * 60 * 1000)));
            
            $('.input-daterange-timepicker').daterangepicker({
                timePicker: true,
                timePickerIncrement: 15,
                locale: {
                    format: 'YYYY-MM-DD hh:mm:ss a'
                },
                "ranges": {
                    "Today": [
                        today_start.toISOString(),
                        today_end.toISOString()
                    ],
                    "Tomorrow": [
                        tomorrow_start.toISOString(),
                        tomorrow_end.toISOString(),
                        
                    ],
                    "Next 7 Days": [
                        nextweek_start.toISOString(),
                        nextweek_end.toISOString()
                    ],
                    "This Month": [
                        firstDay.toISOString(),
                        lastDay.toISOString()
                    ]
                },
                minDate: today_start,
                startDate: today_start,
                endDate: (new Date(today_start.getTime() + (8 * 24 * 60 * 60 * 1000)-1000)),

                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-default',
                cancelClass: 'btn-white',
                "opens": "center",
                "alwaysShowCalendars": true,
            }, function(start, end, label) {
                console.log("Date : " + start.format('YYYY-MM-DD') + " to " + end.format('YYYY-MM-DD') + " (predefined range: " + label);
            });

            $('.test').on('click', function(e) {
                alert($('.note-editable').html());
            });

            //$('.input-daterange-timepicker').val("01/01/2015 1:30 PM - 01/01/2015 2:00 PM");
            $('.input-daterange-timepicker').on('apply.daterangepicker', function(ev, picker) {
                console.log(picker.startDate.format('YYYY-MM-DD hh:mm:ss a'));
                console.log(picker.endDate.format('YYYY-MM-DD hh:mm:ss a'));
            });
            $('.btn-submit').on('click', function(e) {
                if ($("form")[0].checkValidity()) {
                    if (confirm("Are you Sure to save?\nIf you want to review the alert message press Cancel\nOr Click OK to confirm Message.")) {
                        $.ajax({
                            type: 'post',
                            beforeSend: function() {
                                $('.ajax-loader').css("visibility", "visible");
                            },
                            url: "snippets/save_alert_info.php",
                            data: ({
                                visibility_period: $('.input-daterange-timepicker').val(),
                                subject: $('#alert-subject').val(),
                                label: $('#alert-label').val(),
                                message: $('.note-editable').html()

                            }),
                            cache: false,
                            success: function(e) {
                                console.log(e);
                                if (e == "error1") {
                                    if (!alert("Oops ! Multiple Student Entry Found \n Failed to Register :)"))
                                        location.reload();
                                } else {
                                    if (!alert("Oops something went wrong !!! Please do try again \n "))
                                        //location.reload();
                                        ;
                                }
                            },
                            complete: function() {
                                $('.ajax-loader').css("visibility", "hidden");
                            },
                            error: function(e) {}
                        });
                    }
                } else {
                    if (!alert("You are restricted to submit the Alert, due to anyone of the following conditions.\n1).Incorrect formats\n2).You have not filled mandatory fields")) {;
                    }
                }


            });
            $("form").submit(function(e) {
                e.preventDefault();
            });
        });

    </script>

</body>


</html>
