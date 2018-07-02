<?php
  $From ="Starta-Co Registration Form";
  $to ="caipheilunga@gmail.com";
  $subject ="starta-co Company Registration Form";
  
  $name1  = Trim(htmlspecialchars(stripcslashes($_POST["name1"])));
  $email = Trim(htmlspecialchars(stripcslashes($_POST["email"])));
  $message = Trim(htmlspecialchars(stripcslashes($_POST["message"])));
  // Validation
  $validationOK = true;
  if( !$validationOK)
  {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactError.php\">";
  exit;
  }

  // Prepare the body of the email
  $Body  = "";
  $Body .= "Name :";
  $Body .= $name1;
  $Body .= "\n";
  $Body .= "Email :";
  $Body .= $email;
  $Body .= "\n";
  $Body .= "Message :";
  $Body .= $message;
  
  //Send Email
  $success = mail ($to, $subject, $Body, "From: <$email>");

  if($success)
  {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=regThanks.php\">";
  }
  else
  {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=contactError.php\">";
  }

?>