<?php 
	$year = $_REQUEST['year'];
	$month = $_REQUEST['month'];
//	include $year."/".$month."/index.php";
	if(!(@include $year."/".$month."/index.php")) echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 event-tab'><div><b>No News To be  Displayed for month ".$month." </b><br/></div></div>";
?>
