<!DOCTYPE html> <?php  $ROOT="http://".$_SERVER['HTTP_HOST']."/Github/kjc-website";/*$ROOT is the base URL & should on top of every PAGE */?> 
<?php
session_start();
?>
<html lang="en">
  <head>
	<link rel="shortcut icon" type="image/x-icon" href="images/icon.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ICCTAC 2017</title>
	<link href="css/homestyle.css" rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-1.12.0.js"></script>
	<script src="js/jquery-1.12.0.min.js"></script>
	
	
	<link rel="stylesheet" href="jquery-ui.css">
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/jquery-ui.js"></script>
  
  
 <script>
  $(function() {
  
	
	
    $( ".fdate" ).datepicker({minDate: (new Date(2016, 3 - 1, 9)), maxDate: (new Date(2016, 3 - 1, 12))});
	
  });
  </script>
   
  



  </head>
  <body>
	
	<nav id="navv1" class="navbar navbar-default">
	<div class="container">
	<div class="top1">
		<div class="row">
			<div id="kjc1" class="col-sm-4"><img src="images/college_logo1.png" width="90%" height="90%"></div>
			<div class="col-sm-6"></div>
			<!--<div id="ieee1" class="col-sm-2"><img src="images/ieeelogo.png" width="90%" height="90%"></div>-->
		</div>
		<div class="top1">
		<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8" id="ieee_head">International Conference on Current Trends in Advanced Computing (ICCTAC)</div>
		<div class="col-sm-2"></div>
		</div>
		<!--<div id="conno" class="row"><font color="#e94444"><center><div id="chumma"> &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp</div> Conference Record Number: 40700</center></font></div>
		--></div>
	</div>
	</div>
        <div class="container">
		
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
					<li><a class="page-scroll" href="index.php">Home</a></li>
                    <li>
                        <a class="page-scroll" href="About_ICCTAC.html">About ICCTAC</a>
                    </li>
					<li>
                        <a href="call_for_papers.html">Call for Papers <span class="sr-only">Home</span></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="important_dates.html">Important Dates</a>
                    </li>
					<li>
                        <a class="page-scroll" href="Registration.html">Registration</a>
                    </li>
					<li>
                        <a class="page-scroll" href="programme_schedule.html">Programme Schedule</a>
                    </li>
					<li>
                        <a class="page-scroll" href="Committee.html">Committe</a>
                    </li>
					<li>
                        <a class="page-scroll" href="Contact.html">Contact Us</a>
                    </li>
					

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        </div>
    </nav>
	<div class="container">
	<div id="alert" class="alert alert-success" style="display:none;">Registration successfull. A confirmation has been send to your registered email id.
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>
	
	
	<div class="row">
	<div class="col-sm-6">
	    <form action="register.php" method="post" >
		<legend><font id="label2">I am a</font></legend>
		
		<div class="radio-inline">
  <label><input type="radio" name="rp" value="form1">Participant</label>
</div>
<div class="radio-inline">
  <label><input type="radio" name="rp" value="form2">Presenter</label>
</div>
		
		<div id="form2" style="display:none;"><br>
		<legend id="label2">Paper Details</legend>
		
		
		<div class="col-sm-12">
          <form class="form-horizontal">
			<div class="form-group"><div class="row">
              <label id="label1" class="col-sm-3">Paper ID <font color="red">*</font></label><div class="col-sm-9"><input placeholder="Enter paper ID" type="text" id="txtbx" class="form-control" name="p_id" /></div></div>
            </div>
			
			<div class="form-group"><div class="row">
              <label id="label1" class="col-sm-3">Paper Title <font color="red">*</font></label><div class="col-sm-9"><input placeholder="Enter your paper title" type="text" id="txtbx" class="form-control" name="p_title" /></div></div>
            </div>
</div>
		
		</div>
		
		<div id="form1" style="display:none;">
		<legend id="label2"><font id="label2">Personal Details</font></legend>
		
        <div class="col-sm-12">
          
			<div class="form-group"><div class="row">
              <label id="label1" class="col-sm-3">Name <font color="red">*</font></label><div class="col-sm-9"><input type="text" placeholder="eg. John" id="txtbx" class="form-control" name="name" pattern="[[a-zA-Z\s]+" required data-validation-required-message="*Please enter your name."/></div></div>
            </div>
			
			<div class="form-group"><div class="row">
              <label id="label1" class="col-sm-3">Designtion <font color="red">*</font></label><div class="col-sm-9"><input type="text" placeholder="eg. Student" id="txtbx" class="form-control" name="desg" pattern="[[a-zA-Z\s]+" required data-validation-required-message="*Please enter your Designation."/></div></div>
            </div>
			
			<div class="form-group"><div class="row">
              <label id="label1" class="col-sm-3">Institution <font color="red">*</font></label><div class="col-sm-9"><input placeholder="eg. Kristu Jayanti College"  type="text" id="txtbx" class="form-control" name="institn" pattern="[[a-zA-Z\s]+" required data-validation-required-message="*Please enter your institution name."/></div></div>
            </div>
			
			<div class="form-group"><div class="row">
              <label id="label1" class="col-sm-3">Office Phone </label><div class="col-sm-9"><input type="text" placeholder="eg. 08025441931" id="txtbx" class="form-control" name="official" pattern="[789][0-9]{9}"/></div></div>
            </div>
			
			<div class="form-group"><div class="row">
              <label id="label1" class="col-sm-3">Mobile <font color="red">*</font></label><div class="col-sm-9"><input type="text" id="txtbx" class="form-control" name="mobile" placeholder="eg.+918892275735" pattern="^([0|\+[0-9]{1,5})?([1-9][0-9]{9})$" required data-validation-required-message="*Please enter your mobile number." /></div></div>
            </div>
			
			<div class="form-group"><div class="row">
              <label id="label1" class="col-sm-3">Email <font color="red">*</font></label><div class="col-sm-9"><input type="text" id="txtbx" placeholder="eg. icctac@kristujayanti.com" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required data-validation-required-message="*Please enter your email ID."/></div></div>
            </div>
			</div>
		
            
			
			
<!--			

<legend><font id="label2">Accomodation Details</font></legend>
<div class="col-sm-12">
<div class="form-group"><div class="row">
              <label id="label1" class="col-sm-3">Required <font color="red">*</font></label><div class="col-sm-9"><label><input type="radio" name="rrq" value="yes"  required data-validation-required-message="*Please select."> <font id="label1"> &nbsp Yes</font></label > &nbsp &nbsp &nbsp <label><input type="radio" name="rrq" value="no" required data-validation-required-message="*Please select"><font id="label1"> &nbsp No</font></label></div></div>
            </div>
			<div id="yes" style="display:none;">
<div class="form-group"><div class="row">
			
              <label id="label1" class="col-sm-3">Room Type <font color="red">*</font></label><div class="col-sm-3"><label><input type="radio" name="acc1" value="Non-A/C"> <font id="label1"> &nbsp Non-A/C</font></label> &nbsp <label><input type="radio" name="acc1" value="A/C"><font id="label1"> &nbsp A/C</font></label></div><div class="col-sm-1"><button type="button" id="bbtn" class="btn btn-default" data-toggle="modal" data-target="#myModal">Room Rates >></button></div></div>
            </div>

		<div class="form-group"><div class="row">
              <label id="label1" class="col-sm-3">Date From <font color="red">*</font></label><div class="col-sm-6"><input type="text" id="fdate" class="fdate form-control" name="datefrom"/></div></div>
			
			</div>
			
			
			     </script> 
			
			
			
			 
		<div class="form-group"><div class="row">
              <label id="label1" class="col-sm-3">Date To <font color="red">*</font></label><div class="col-sm-6"><input type="text" id="date" class="fdate form-control" name="dateto"/></div></div>
            </div>
			</div>
            </div>
			-->
			
<legend><font id="label2">Payment Details</font></legend>
<div class="form-group"><div class="row">
              <label id="label1" class="col-sm-3">Payment <font color="red">*</font></label><div class="col-sm-9"><label><input type="radio" name="rrp" value="yes" checked="checked" required data-validation-required-message="*Please select."> <font id="label1"> &nbsp; DD</font></label > &nbsp; &nbsp; &nbsp; <label><input type="radio" name="rrp" value="no" required data-validation-required-message="*Please select"><font id="label1"> &nbsp; On Spot</font></label></div></div>
            </div>
<div id="pay" class="row" >
        <div class="col-sm-12">
          
			<div class="form-group"><div class="row">
              <label id="label1" class="col-sm-3">DD No <font color="red"></font></label><div class="col-sm-5"><input type="text" id="txtbx" class="form-control" name="ddno" /></div><div class="col-sm-4"><font color="red"></font></div></div>
            </div>
			
			<div class="form-group"><div class="row">
              <label id="label1" class="col-sm-3">Date <font color="red"></font></label><div class="col-sm-5"><input type="text" id="d_date" class="d_date form-control" name="dd_date" /></div><div class="col-sm-4"><font color="red"></font></div></div>
            </div>
			
			<div class="form-group"><div class="row">
              <label id="label1" class="col-sm-3">Bank Name <font color="red"></font></label><div class="col-sm-5"><input type="text" placeholder="eg. State Bank of India" id="txtbx" class="form-control" name="bank"   /></div><div class="col-sm-4"><font color="red"></font></div></div>
            </div>
			
			<div class="form-group"><div class="row">
              <label id="label1" class="col-sm-3">Amount <font color="red"></font> </label><div class="col-sm-5"><input type="text" id="amt" class="form-control" name="amnt"  maxlength="5" /></div><div class="col-sm-4"><font color="red"><p id="p_txt"></p></font></div></div>
            </div>
			
			
            </div>
			
</div>
<div class="row"><div class="col-sm-5"></div><div class="col-sm-3"><button class="btn btn-default" >Register >></button></div><div class="col-sm-3"></div>
</div>
<script>
  $(function() {
    $("#d_date" ).datepicker({minDate: (new Date(2016, 2 - 1, 1)), maxDate: (new Date(2016, 3 - 1, 15))});
  });
  </script>
  
  

			
			
			
			 <script>  $(document).ready(function () {

    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    var calendar = $('#date').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title'
        },
        selectable: true,
        selectHelper: true,
        editable: true
    });

  });
            </script>



</form>
</form>
</div>
</div>
</div>
<div class="container">	
<div class="footer1"></div>   
<footer>
	
        <p class="pull-right"><a href="#"><a href="#"><span height="" class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a></p>
        <p>&copy; 2017 <a href="http://www.kristujayanti.edu.in/ICCTAC">ICCTAC</a> | Designed By <a href="http://www.clixior.com/">Clixior Technologies</a> &middot; <a href="https://web.facebook.com/pages/International-Conference-on-Current-Trends-in-Advanced-Computing/162955283894923"><img src="images/fb.png" width="20" height="20" /></a> &middot; <a href="https://twitter.com/icctac"> <img src="images/twitter.png" width="20" height="20" /></a></p>
      </footer></div>

    </div>
    </div>

  </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/dis.js"></script>
	

	<?php


if(isset($_SESSION['success'])){
	$success=$_SESSION['success'];

	if($success=="success"){
		
			 ?> 
			 <script>
			 document.getElementById("alert").style.display="block";
			 </script>

			 <?php
			session_destroy();
	}
}

?>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" id="modhead">
        <button type="button" class="close" data-dismiss="modal"></button>
        <h4 class="modal-title">Room Rates</h4>
      </div>
      <div class="modal-body">
        <table border="1" class="table table-bordered">

<tr>
<th bgcolor="#fbfbfd"><center><b>Room Type</b></center></th>
<th bgcolor="#fbfbfd"><center><b>Amount</b></center></th>
</tr>
<tr>
<td>Double Room (A/C)</td>
<td>₹2500</td>
</tr>
<tr>
<td>Double Room (Twin Sharing)</td>
<td>₹800</td>
</tr>
<tr>
<td>Single Room</td>
<td>₹1000</td>
</tr>

</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  </body>

  
  
</html>