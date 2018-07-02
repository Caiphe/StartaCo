<?php
$From = "Starta-co New Website" 
$destinataire = 'marcdesign1@gmail.com';
$subject  = "Starta-co Contact Form";
$name = htmlspecialchars(stripcslashes($_POST['name1']));
$email = htmlspecialchars(stripcslashes($_POST['email']));
$message = htmlspecialchars(stripcslashes($_POST['msg']));


// Validation
$validationOK = true;
if( !$validationOK){
	print "<meta http-equiv=\"refresh\" content=\"0;URL.contactError.php\">";
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
$success = mail ($destinataire, $subject, $Body, "From: Mr/Mm <$name>");

// Redirect To Success Page
if($success)
{
    print "<meta http-equiv=\"refresh\" content=\"0;URL=contactThanks.php\">";
}
else
{
	print "<meta http-equiv=\"refresh\" content=\"0;URL=contactError.php\">";
}

?>