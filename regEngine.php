<?php
$From ="Starta-Co Registration Form";
  $to ="caipheilunga@gmail.com";
  $subject ="starta-co Company Registration Form";

 // Company details 
  $fmonth = Trim(htmlspecialchars(stripcslashes($_POST["fmonth"])));
  $auth = trim(htmlspecialchars(stripcslashes($_POST["auth"])));
  $companyemail = trim(htmlspecialchars(stripcslashes($_POST["companyemail"])));

  // Company Physical Address
  $physicalAddress1 = trim(htmlspecialchars(stripcslashes($_POST["compphysical1"])));
  $physicalAddress2 = trim(htmlspecialchars(stripcslashes(($_POST["compphysical2"])));
  $physicalAddress3 = trim(htmlspecialchars(stripcslashes($_POST["compPhysical3"])));
  $compphysicalprovince = trim(htmlspecialchars(stripcslashes($_POST["companyphicalprovince"])));
  $companyphysicalcode = trim(htmlspecialchars(stripcslashes($_POST["companyPhysicalCode"])));

  



  // Compnay Postal Details
  $ComppostalAddress1 = trim(htmlspecialchars(stripcslashes($_POST["companyPostal1"])));
  $ComppostalAddress2 = trim(htmlspecialchars(stripcslashes($_POST["companyPostal2"])));
  $ComppostalAddress3 trim(htmlspecialchars(stripcslashes($_POST["companyPostal3"])));
  $postalprovince = trim(htmlspecialchars(stripcslashes($_POST["Comppostalprovince"])));
  $postalcode = trim(htmlspecialchars(stripcslashes($_POST["Comppostalcode"])));

  // Company Names Information
  $compname1 = trim(htmlspecialchars(stripcslashes($_POST["compname1"])));
  $compname2 = trim(htmlspecialchars(stripcslashes($_POST["compname2"])));
  $compname3 = trim(htmlspecialchars(stripcslashes($_POST["compname3"])));
  $compname4 = trim(htmlspecialchars(stripcslashes($_POST["compname4"])));

  // Director 1 Details
  $directorfirstname1 = trim(htmlspecialchars(stripcslashes($_POST["directorfirstname1"])));
  $directorsecondname1 = trim(htmlspecialchars(stripcslashes($_POST["directorsecondname1"])));
  $idnumber1 = trim(htmlspecialchars(stripcslashes($_POST["idnumber1"])));
  $nationality1 = trim(htmlspecialchars(stripcslashes($_POST["nationality1"])));
  $directemail1 = trim(htmlspecialchars(stripcslashes($_POST["directemail1"])));
  $directorcontact1 = trim(htmlspecialchars(stripcslashes($_POST["directorcontact1"])));

  // Diretor 1 Physical Address
  $directaddress11 = trim(htmlspecialchars(stripcslashes($_POST["directaddress11"])));
  $directaddress12 = trim(htmlspecialchars(stripcslashes($_POST["directaddress12"])));
  $directaddress13 = trim(htmlspecialchars(stripcslashes($_POST["directaddress13"])));
  $directorprovince1 = trim(htmlspecialchars(stripcslashes($_POST["directorprovince1"])));
  $directorcode1 = trim(htmlspecialchars(stripcslashes($_POST["directorcode1"])));

  // Director 1 Postal Address
  $drpostaladd11 = trim(htmlspecialchars(stripcslashes($_POST["drpostaladd11"])));
  $drpostaladd12 = trim(htmlspecialchars(stripcslashes($_POST["drpostaladd12"])));
  $drpostaladd13 = trim(htmlspecialchars(stripcslashes($_POST["drpostaladd13"])));
  $drprovince1 = trim(htmlspecialchars(stripcslashes($_POST["drprovince1"])));
  $drcode1 = trim(htmlspecialchars(stripcslashes($_POST["drcode1"])));

  //Director 2 Details
  $directorfirstname2 = trim(htmlspecialchars(stripcslashes($_POST["directorfirstname2"])));
  $directorsecondname2 = trim(htmlspecialchars(stripcslashes($_POST["directorsecondname2"])));
  $idnumber2 = trim(htmlspecialchars(stripcslashes($_POST["idnumber2"])));
  $nationality2 = trim(htmlspecialchars(stripcslashes($_POST["nationality2"])));
  $directemail2 = trim(htmlspecialchars(stripcslashes($_POST["directemail2"])));
  $directorcontact2 = trim(htmlspecialchars(stripcslashes($_POST["directorcontact2"])));

  // Diretor 2 Physical Address
  $directresidential21 = trim(htmlspecialchars(stripcslashes($_POST["directaddress21"])));
  $directaddress22 = trim(htmlspecialchars(stripcslashes($_POST["directaddress22"])));
  $directaddress23 = trim(htmlspecialchars(stripcslashes($_POST["directaddress23"])));
  $directorprovince2 = trim(htmlspecialchars(stripcslashes($_POST["directorprovince2"])));
  $directorcode2 = trim(htmlspecialchars(stripcslashes($_POST["directorcode2"])));

  // Director 2 Postal Address
  $drpostaladd21 = trim(htmlspecialchars(stripcslashes($_POST["drpostaladd21"])));
  $drpostaladd22 = trim(htmlspecialchars(stripcslashes($_POST["drpostaladd22"])));
  $drpostaladd23 = trim(htmlspecialchars(stripcslashes($_POST["drpostaladd23"])));
  $drprovince2 = trim(htmlspecialchars(stripcslashes($_POST["drprovince2"])));
  $drcode2 = trim(htmlspecialchars(stripcslashes($_POST["drcode2"])));

  // Director 3 Details
  $directorfirstname3 = trim(htmlspecialchars(stripcslashes($_POST["directorfirstname3"])));
  $directorsecondname3 = trim(htmlspecialchars(stripcslashes($_POST["directorsecondname3"])));
  $idnumber3 = trim(htmlspecialchars(stripcslashes($_POST["idnumber3"])));
  $nationality3 = trim(htmlspecialchars(stripcslashes($_POST["nationality3"])));
  $directemail3 = trim(htmlspecialchars(stripcslashes($_POST["directemail3"])));
  $directorcontact3 = trim(htmlspecialchars(stripcslashes($_POST["directorcontact3"])));

  // Diretor 3 Physical Address
  $directresidential31 = trim(htmlspecialchars(stripcslashes($_POST["directaddress31"])));
  $directaddress32 = trim(htmlspecialchars(stripcslashes($_POST["directaddress32"])));
  $directaddress33 = trim(htmlspecialchars(stripcslashes($_POST["directaddress33"])));
  $directorprovince3 = trim(htmlspecialchars(stripcslashes($_POST["directorprovince3"])));
  $directorcode3 = trim(htmlspecialchars(stripcslashes($_POST["directorcode3"])));

  // Director 3 Postal Address
  $drpostaladd31 = trim(htmlspecialchars(stripcslashes($_POST["drpostaladd31"])));
  $drpostaladd32 = trim(htmlspecialchars(stripcslashes($_POST["drpostaladd32"])));
  $drpostaladd33 = trim(htmlspecialchars(stripcslashes($_POST["drpostaladd33"])));
  $drprovince3 = trim(htmlspecialchars(stripcslashes($_POST["drprovince3"])));
  $drcode3 = trim(htmlspecialchars(stripcslashes($_POST["drcode3"])));

 


    // Prepare the body of the email
  $Body  = "";
  $Body .= "Financial Year (Month) :";
  $Body .= $fmonth;
  $Body .= "\n";
  $Body .= "Number of Authorised Share :";
  $Body .= $auth;
  $Body .= "\n";
  $Body .= "Company Email :";
  $Body .= $companyemail;
  $Body .= "\n";

  // Company Physical Address
  $Body .= "company Physical Address :";
  $Body .= $physicalAddress1;
  $Body .= "\n";
  $Body .= $physicalAddress2;
  $Body .= "\n";
  $Body .= $physicalAddress3;
  $Body .= "\n";
  $Body .= "Company Physical Province :";
  $Body .= $compphysicalprovince;
  $Body .= "\n";
  $Body .= "Company Physical Code :";
  $Body .= $companyphysicalcode;

   // Company Postal Address
  $Body .= "company Physical Address :";
  $Body .= $ComppostalAddress1;
  $Body .= "\n";
  $Body .= $ComppostalAddress2;
  $Body .= "\n";
  $Body .= $ComppostalAddress3;
  $Body .= "\n";
  $Body .= "Company Postal  Province :";
  $Body .= $postalprovince;
  $Body .= "\n";
  $Body .= "Company Postal Code :";
  $Body .= $postalcode;

  // Company Names Suggestion
  $Body .= "Name one Suggestion  :";
  $Body .= $compname1;
  $Body .= "\n";
  $Body .= "Name two Suggestion  :";
  $Body .= $compname2;
  $Body .= "\n";
  $Body .= "Name three Suggestion  :";
  $Body .= $compname3;
  $Body .= "\n";
  $Body .= "Name four Suggestion  :";
  $Body .= $compname4;
  $Body .= "\n";

   // Director 1 Details
  $Body .= "Director one  Name :";
  $Body .= $directorfirstname1;
  $Body .= "\n";
  $Body .= "Director one Surnames :";
  $Body .= $directorsecondname1;
  $Body .= "\n";
  $Body .= "Director one ID/Passport Number :";
  $Body .= $idnumber1;
  $Body .= "\n";
  $Body .= "Director one Nationality :";
  $Body .= $nationality1;
  $Body .= "\n";
  $Body .= "Director one Email :";
  $Body .= $directemail1;
  $Body .= "\n";
  $Body .= "Director one Contact :";
  $Body .= $directorcontact1;
  $Body .= "\n";

  //Director One Physical Address
  $Body .= "Director one Physical Address :";
  $Body .= $directaddress11;
  $Body .= "\n";
  $Body .= $directaddress12;
  $Body .= "\n";
  $Body .= $directaddress13;
  $Body .= "Director one Physical Province :";
  $Body .= $directorprovince1;
  $Body .= "\n";
  $Body .= "Director one Physical Code :";
  $Body .= $directorcode1;
  $Body .= "\n";

  // Director 1 Postal Address
  $Body .= "Director one Postal Address :";
  $Body .= $drpostaladd11;
  $Body .= "\n";
  $Body .= $drpostaladd12;
  $Body .= "\n";
  $Body .= $drpostaladd13;
  $Body .= "Director one Postal Province :";
  $Body .= $drprovince1;
  $Body .= "\n";
  $Body .= "Director one Postal Code :";
  $Body .= $drcode1;
  $Body .= "\n";

  //Director 2
  $Body .= "Director two  Name :";
  $Body .= $directorfirstname2;
  $Body .= "\n";
  $Body .= "Director two Surnames :";
  $Body .= $directorsecondname2;
  $Body .= "\n";
  $Body .= "Director two ID/Passport Number :";
  $Body .= $idnumber2;
  $Body .= "\n";
  $Body .= "Director two Nationality :";
  $Body .= $nationality2;
  $Body .= "\n";
  $Body .= "Director two Email :";
  $Body .= $directemail2;
  $Body .= "\n";
  $Body .= "Director two Contact :";
  $Body .= $directorcontact2;
  $Body .= "\n";

  //Director two Physical Address
  $Body .= "Director two Physical Address :";
  $Body .= $directaddress21;
  $Body .= "\n";
  $Body .= $directaddress22;
  $Body .= "\n";
  $Body .= $directaddress23;
  $Body .= "Director two Physical Province :";
  $Body .= $directorprovince2;
  $Body .= "\n";
  $Body .= "Director two Physical Code :";
  $Body .= $directorcode2;
  $Body .= "\n";

  // Director 2 Postal Address
  $Body .= "Director two Postal Address :";
  $Body .= $drpostaladd21;
  $Body .= "\n";
  $Body .= $drpostaladd22;
  $Body .= "\n";
  $Body .= $drpostaladd23;
  $Body .= "Director two Postal Province :";
  $Body .= $drprovince2;
  $Body .= "\n";
  $Body .= "Director two Postal Code :";
  $Body .= $drcode2;
  $Body .= "\n";

  // Director 3
  $Body .= "Director three  Name :";
  $Body .= $directorfirstname3;
  $Body .= "\n";
  $Body .= "Director three Surnames :";
  $Body .= $directorsecondname3;
  $Body .= "\n";
  $Body .= "Director three ID/Passport Number :";
  $Body .= $idnumber3;
  $Body .= "\n";
  $Body .= "Director three Nationality :";
  $Body .= $nationality3;
  $Body .= "\n";
  $Body .= "Director three Email :";
  $Body .= $directemail3;
  $Body .= "\n";
  $Body .= "Director three Contact :";
  $Body .= $directorcontact3;
  $Body .= "\n";

  //Director two Physical Address
  $Body .= "Director three Physical Address :";
  $Body .= $directaddress31;
  $Body .= "\n";
  $Body .= $directaddress32;
  $Body .= "\n";
  $Body .= $directaddress33;
  $Body .= "Director three Physical Province :";
  $Body .= $directorprovince3;
  $Body .= "\n";
  $Body .= "Director three Physical Code :";
  $Body .= $directorcode3;
  $Body .= "\n";

  // Director 2 Postal Address
  $Body .= "Director three Postal Address :";
  $Body .= $drpostaladd31;
  $Body .= "\n";
  $Body .= $drpostaladd32;
  $Body .= "\n";
  $Body .= $drpostaladd33;
  $Body .= "Director three Postal Province :";
  $Body .= $drprovince3;
  $Body .= "\n";
  $Body .= "Director three Postal Code :";
  $Body .= $drcode3;
  $Body .= "\n";
 

  // Validation
  $validationOK = true;
  if( !$validationOK)
  {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=regError.php\">";
  exit;
  }

  //Send Email
  $success = mail ($to, $subject, $Body, "From: <$email>");

  if($success)
  {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=regThanks.php\">";
  }
  else
  {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=regError.php\">";
  }

?>