<?php
$From = "Starta-co New Website" 
$to = "caipheilunga@gmail.com";
$subject  = "Starta-co Contact Form";

$name = Trim(htmlspecialchars(stripcslashes($_POST['name1'])));
$email = Trim(htmlspecialchars(stripcslashes($_POST['email'])));
$message = Trim(htmlspecialchars(stripcslashes($_POST['msg']));

// Validation
$validationOK = true;
if( !$validationOK)
{
	print "<meta http-equiv=\"refresh\" content=\"0;URL=contactusError.php\">";
	exit;
}

// Prepare The Email Body Text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email : ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message ";
$Body .= $message;

//Send Email
$success = mail ($to, $subject, $Body, "From: Mr./Mm <$name>");

// Redirect To Success Page
if($success)
  {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=contactusThanks.php\">"
  }
 else
  {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=contactusError.php\">";
  }

?>