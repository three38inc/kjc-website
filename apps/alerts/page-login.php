<?php 
    require('snippets/connect.php');
    if(isset($_POST['log-in']))
    { 
        $user=$_POST["username"];
        $pass=$_POST["password"];
        isset($_POST["checkbox-signin"])?$remember="yes":$remember="no";
        echo $user."-".$pass."-".$remember;
        /* Select queries return a resultset */
        if ($result = $mysqli->query("SELECT * FROM `login` WHERE `user`= '".$user."' and `pass`= '".$pass."' LIMIT 1")) {
            if($result->num_rows){
                $_SESSION["logged-user"]=$user;
                $_SESSION["preserve-session"]=$remember;
            }
            else{
                
            }
            /* free result set */
            $result->close();
        }
    }
    else
    { 
        
    } 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best College, Top Commerce college, Top ranked arts and Science College, autonomous college, B.Com Admission, BCA Admission, BBM Admissions, MBA admission, MCA admission, Psychology admission, Journalism Admission, Biotechnology college</title>
    <meta name="description" content="Kristu Jayanti College,K. Narayanapura, Kothanur (Post) Bangalore ā€“ 560077, Karnataka, Tel. 080-28465611 / 28465770 e-mail : info@kristujayanti.com www.kristujayanti.edu.in " />
    <meta name="keywords" content="Best College, Top Commerce college, Top ranked arts and Science College, autonomous college, B.Com Admission, BCA Admission, BBM Admission,  MBA admission, MCA  admission,  Psychology admission, Journalism Admission,  Biotechnology college etc." />

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>Alerts - Kristu Jayanti</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="assets/js/modernizr.min.js"></script>

</head>

<body>

    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">
        <div class=" card-box">
            <div class="panel-heading">
                <h3 class="text-center"> Sign In to <strong class="text-custom">KJC - Alerts</strong> </h3>
            </div>


            <div class="panel-body">
                <form class="form-horizontal m-t-20" action="page-login.php" method="post">

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Username" name="username">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Password" name="password">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signin" type="checkbox" name="checkbox-signin">
                                <label for="checkbox-signin">
                                Remember me
                            </label>
                            </div>

                        </div>
                    </div>

                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit" name="log-in">Log In</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30 m-b-0">
                        <div class="col-sm-12">
                            <a href="page-recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                            <a class="btn btn-default waves-effect waves-light" href="javascript:;" onclick="$.Notification.notify('custom','top right','Sample Notification', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae orci ut dolor scelerisque aliquam.')">Right</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>


    </div>




    <script>
        var resizefunc = [];

    </script>

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

    <!-- Notification js -->
        <script src="assets/plugins/notifyjs/js/notify.js"></script>
        <script src="assets/plugins/notifications/notify-metro.js"></script>
    <!-- App core js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

</body>


</html>
