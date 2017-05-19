<?php 

//Get the uploaded file information
$name_of_uploaded_file =
basename($_FILES['uploaded_file']['name']);
//get the file extension of the file
$type_of_uploaded_file =
substr($name_of_uploaded_file,strrpos($name_of_uploaded_file, '.') + 1);
$size_of_uploaded_file =
$_FILES["uploaded_file"]["size"]/1024;//size in KBs


//Settings
$max_allowed_file_size = 100; // size in KB
$allowed_extensions = array("pdf", "docx", "doc", "txt");
//Validations
if($size_of_uploaded_file > $max_allowed_file_size )
{
    $errors .= "\n Size of file should be less than $max_allowed_file_size";
}
//------ Validate the file extension -----
$allowed_ext = false;
for($i=0; $i<sizeof($allowed_extensions); $i++)
{
    if(strcasecmp($allowed_extensions[$i],$type_of_uploaded_file) == 0)
    {
        $allowed_ext = true;
    }
}
if(!$allowed_ext)
{
    $errors .= "\n The uploaded file is not supported file type. ".
    " Only the following file types are supported: ".implode(',',$allowed_extensions);
}
//copy the temp. uploaded file to uploads folder
$path_of_uploaded_file = $upload_folder . $name_of_uploaded_file;
$tmp_path = $_FILES["uploaded_file"]["tmp_name"];
if(is_uploaded_file($tmp_path))
{
    if(!copy($tmp_path,$path_of_uploaded_file))
    {
        $errors .= '\n error while copying the uploaded file';
    }
}

//receive form data
$from = $_POST['name'];
//$phone = $_POST['phone'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$to="career@kristujayanti.com"
//below coe is used to send the file as email attachment | To do so install pear in server
include_once('Mail.php');
include_once('Mail_Mime/mime.php');

$message = new Mail_mime();
$message->setTXTBody($message);
$message->addAttachment($path_of_uploaded_file);
$body = $message->get();
$extraheaders = array("From"=>$from, "Subject"=>$subject,"Reply-To"=>$visitor_email);
$headers = $message->headers($extraheaders);
$mail = Mail::factory("mail");
$mail->send($to, $headers, $body);

header("Location: ../carrer.php?flag=1");
//or give the uploaded path($path_of_uploaded_file) as link and send email. 

?>
