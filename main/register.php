<?php
// check if fields passed are empty
$accom="";
$date_from=$date_to=$p_title=$pid=$role=$ddno="";



$dd_date=$bank=$amnt=$email="";





	if($_POST['rp']=="form1"){
		$role="Participant";
		if(empty($_POST['name'])||empty($_POST['desg'])||empty($_POST['institn'])||
		    
		   
		   empty($_POST['mobile'])||
		   
		   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
		   {
			echo "No  arguments Provided!";
			return false;
		}
		   
		   if($_POST['rrp']=="yes"){
				if(empty($_POST['dd_date'])||
			    empty($_POST['bank'])||
			    empty($_POST['amnt'])){
				   echo "please provide dd details";
				   return false;
				}
			
				else{
					$ddno = $_POST['ddno'];
					$dd_date=$_POST['dd_date'];
					$bank=$_POST['bank'];
					$amnt=$_POST['amnt'];
				}
			
			}
		   if($_POST['rrp']=="no"){
			   $ddno="on spot registration";
		   }
		   
		   if($_POST['rrq']=="yes"){
			   if(empty($_POST['acc1'])||empty($_POST['datefrom'])||empty($_POST['dateto'])){
				   echo"Please Provide Accomadation Details";
				   return false;
			   }
			   else{
				  $accom=$_POST['acc1'];
				  $date_from=$_POST['datefrom'];
				  $date_to=$_POST['dateto'];				  
			   }
		   }
		   if($_POST['rrq']=="no"){
			   $accom="Not Needed";
			}
	  
	}




	else if($_POST['rp']=="form2")
	{
		$role="Presenter";
		
		if(empty($_POST['name'])||empty($_POST['desg'])||empty($_POST['institn'])||
		   
		   empty($_POST['mobile']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
				echo "No  arguments Provided!";
				return false;
		    }
		   
		   if($_POST['rrp']=="yes"){
				if(empty($_POST['dd_date'])||
			    empty($_POST['bank'])||
			    empty($_POST['amnt'])){
				   echo "please provide dd details";
				   return false;
				}
		    
				else{
					$ddno = $_POST['ddno'];
					$dd_date=$_POST['dd_date'];
					$bank=$_POST['bank'];
					$amnt=$_POST['amnt'];
				}
			}
		    if($_POST['rrp']=="no"){
			   $ddno="on spot registration";
		    }
		   
		   
		   if($_POST['rrq']=="yes"){
			   if(empty($_POST['acc1'])||empty($_POST['datefrom'])||empty($_POST['dateto'])){
				   echo"Please Provide Accomadation Details";
				   return false;
			    }
			   else{
				  $accom=$_POST['acc1'];
				  $date_from=$_POST['datefrom'];
				  $date_to=$_POST['dateto'];				  
			    }
		    }
		   if($_POST['rrq']=="no"){
			   $accom="Not Needed";
		    }
		   	
	}


$pid=$_POST["p_id"];
$p_title=$_POST['p_title'];
$name = $_POST['name'];
$desg = $_POST['desg'];
$institn = $_POST['institn'];
//$address=$_POST['address'];
$phone=$_POST['official'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
echo $email;






	
// create email body and send it               
$to = 'icctac@kristujayanti.com';
$email_subject = "Registration: International Conference on Current Trends in Advanced Computing (ICCTAC) - 2017";
 
$email_body = "You have received a new message from ICCTAC website's registration form.\n\n
"."Here are the details:\n\n
Role:$role\n\n
Name:$name\n\n
Paper id:$pid\n\n
Paper Title:$p_title\n\n
Designation:$desg \n\n
Institution: $institn\n\n

Official Phone:$phone\n\n
Mobile Phone:$mobile\n\n
Email: $email\n\n
Accomadation: $accom\n\n
Date From:$date_from\n\n
Date To:$date_to\n\n
DD No:$ddno\n\n
DD Date:$dd_date\n\n
Bank:$bank";

$headers = "From: $email";
$headers .= "To: ICCTAC - 2017 Registration";




$to1 = $email;
$email_subject1 = "Registration: International Conference on Current Trends in Advanced Computing (ICCTAC) - 2017";
 
$email_body1 = "You have successfully registered for ICCTAC 2017.\n\n
"."Here are the details:\n\n
Role:$role\n\n
Name:$name\n\n
Paper id:$pid\n\n
Paper Title:$p_title\n\n
Designation:$desg \n\n
Institution: $institn\n\n

Official Phone:$phone\n\n
Mobile Phone:$mobile\n\n
Email: $email\n\n
Accomadation: $accom\n\n
Date From:$date_from\n\n
Date To:$date_to\n\n
DD No:$ddno\n\n
DD Date:$dd_date\n\n
Bank:$bank";

$headers1 = "From: ICCTAC - 2017 Registration";
$headers1 .= "To: $email";		


 
if(mail($to,$email_subject,$email_body,$headers)&&
mail($to1,$email_subject1,$email_body1,$headers1)){
	session_start();
	$_SESSION['success']="success";
	if(isset($_SESSION['success'])){
		header("Location:Iccreg.php");
	}
}
return true;
			
?>