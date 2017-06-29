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

    </style>

</head>


<body>


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
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="subject" value="" placeholder="The Subject Matter of the Alert"/>
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
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
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
            $('.input-daterange-timepicker').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY h:mm A'
                },
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-default',
                cancelClass: 'btn-white'
            });
            $('.test').on('click', function(e) {
                alert($('.note-editable').html());
            });
            $('.input-daterange-timepicker').val("01/01/2015 1:30 PM - 01/01/2015 2:00 PM");

        });

    </script>

</body>


</html>
