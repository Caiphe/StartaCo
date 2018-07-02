<!DOCTYPE html>

<html>
  <head>
    <title>Registration</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="css/bootstrap.css" rel="stylesheet">
   <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="css/bootshape.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
   <link href="css/animate.css" rel="stylesheet">
  <style type="text/css">
    #send
    {
        background-color: transparent;
        border: solid 2px #e51728;
        padding: 9px 35px 9px 35px;
        color: #e51728;
        font-size: 18px;
        font-weight: bold;

    }
    #send:hover
    {
         background-color: #e51728;
         color: #ffffff;
    }

    #submit
    {
        background-color:#e61e2c;
        color: white;
        font-size: 17px;
        font-weight: bold;
        padding: 9px 35px 9px 35px;
        border: solid 1px ;
    }
    #submit:hover
    {
      background-color:transparent;
      color: #e61e2c;
      font-weight: bold;
      animation-duration: 1s ;
      animation-name: btntrans;
      -webkit-animation-duration : 1s ;
      -webkit-animation-name : btntrans;
      -moz-animation-name: 1s ;
      -moz-animation-duration : btntrans;
      border-radius: 2px;
    }
    
    @-webkit-keyframes btntrans 
    {
        from {background-color: transparent; color: #e61e2c;}
        to {background-color: #e61e2c; color: #ffffff;}
    }

    @-moz-keyframes btntrans 
    {
        from {background-color: transparent; color: #e61e2c;}
        to {background-color: #e61e2c; color: #ffffff;}
    }
    @keyframes btntrans 
    {
        from {background-color: transparent; color: #e61e2c;}
        to {background-color: #e61e2c; color: #ffffff;}
    }
     .form-control
     {
        border:solid 5px red;
     }
   </style>
  </head>
  <body>
    <!--Header Include-->
   <?php include('header.php');?>
	<!-- End Slide gallery -->
    <!-- Thumbnails -->	
    <br><br><br>

	<div class="container">
     <br><br>
     <p style="font-size:30px;color: #e61e2c;font-family: 'Cuprum', sans-serif;font-weight: bold;">ONLINE REGISTRATION FORM</p>
     <div style="background:#e61e2c;height: 1px;">
	</div>   	
     		 <form method="post" action="regEngine.php" >
                 <div class="row">
                   <div class="col-md-8">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="fmonth" id="fmonth" required>
                                    <option>Financial Year (Select Month)</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="number" class="form-control" id="auth" name="auth" placeholder="No of authorised share ..." required >
                            </div>
                        </div>
                    </div>
     				<div class="form-group">
     					<div class="row">
     						<div class="col-md-6">
     							
     							<input type="email" class="form-control" name="companyemail" id="companyemail" placeholder="Company email Address .." required>
     						</div>
     						<div class="col-md-6">

     							
     						</div>
     					</div>
     				</div>
     				<br>
                    <ol class="breadcrumb">
                       <li><a href="#" style="font-size: 13px;color: blue;font-weight: bold;">Company Details</a></li>          
                   </ol>
                   <div class="row">
                       <div class="col-md-6">
                        <p style="font-weight: bold;color: red;">Physical Address</p>
                           <div class="form-group">
                               <input type="text" class="form-control" name="compphysical1" id="compphysical1"  required>
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" name="compphysical2" id="compphysical2"  required>
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" name="compPhysical3" id="compPhysical3" required>
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" name="companyphicalprovince" id="companyphicalprovince" placeholder="Province" required>
                           </div>
                           <div class="form-group">
                               <input type="number" class="form-control" name="companyPhysicalCode" id="companyPhysicalCode" placeholder="Code" required>
                           </div>

                       </div>
                       <div class="col-md-6">
                        <p style="font-weight: bold;color: red;">Postal Address</p>
                           <div class="form-group">
                               <input type="text" class="form-control" name="companyPostal1" id="companyPostal1"  required>
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" name="companyPostal2" id="companyPostal2"  required>
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" name="companyPostal3" id="companyPostal3" required>
                           </div>
                           <div class="form-group">
                               <input type="text" class="form-control" name="Comppostalprovince" id="Comppostalprovince" placeholder="Postal Province" required>
                           </div>
                           <div class="form-group">
                               <input type="number" class="form-control" name="Comppostalcode" id="Comppostalcode" placeholder="Postal Code" required>
                           </div>
                       </div>
                   </div>
                   
                   <!--Company Information-->
                    <ol class="breadcrumb">
                       <li><a href="#" style="font-size: 17px;color: blue;font-weight: bold;">Company Information</a></li>        
                   </ol>
                   <p><strong>New Pty:</strong> Please supply us with 4 possible Company names in your order of preference:</p>
     			     
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" name="compname1" id="compname1" class="form-control" placeholder="Pty Name 1"  required>
                           </div>
                           <div class="form-group">
                              <input type="text" name="compname2" id="compname2" class="form-control" placeholder="Pty Name 2" required>
                          </div>
                          </div>                   
                                             
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" name="compname3" id="compname3" class="form-control" placeholder="Pty Name 3" required >
                          </div>
                          <div class="form-group">
                              <input type="text" name="compname4" id="compname4" class="form-control" placeholder="Pty Name 4" required>
                          </div>
                          </div>                     
                          </div>     

                    
                       <br>
                      <ol class="breadcrumb">
                       <li><a href="#" style="font-size: 17px;color: blue;font-weight: bold;">Director Details</a></li>        
                     </ol>
                     <!--Director 1 Details-->
                     <p style="font-size: 17px;font-weight: bold;color: red;">Director No 1</p>                   
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" name="directorfirstname1" id="directorfirstname1" class="form-control" placeholder="First Names" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" name="directorsecondname1" id="directorsecondname1" class="form-control" placeholder="Surname" required>
                          </div>
                        </div>
                        
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" name="idnumber1" id="idnumber1" class="form-control" placeholder="ID / Passport Number" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" name="nationality1" id="nationality1" class="form-control" placeholder="Nationality">
                          </div>
                        </div>
                    </div>
                   
                        <div class="row">
                          <div class="col-md-6">
                             <div class="form-group">
                              <input type="email" name="directemail1" id="directemail1" class="form-control" placeholder="Email address" required>
                          </div>
                            </div>
                            
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="number" name="directorcontact1" id="directorcontact1" class="form-control" placeholder="Director 1 Contact Number" required>
                          </div>
                        </div>
                        </div><br>
                        <!--DIrector 1 Address-->
                        <div class="row">
                          <div class="col-md-6">
                            <p style="font-weight: bold;font-size: 17px;color: red;">PHYSICAL ADDRESS</p>
                             <div class="form-group">
                              <input type="text" name="directaddress11" id="directaddress11" class="form-control" placeholder="" required>
                             </div>
                             <div class="form-group">
                              <input type="text" name="directaddress12" id="directaddress12" class="form-control" placeholder="" required>
                             </div>
                             <div class="form-group">
                              <input type="text" name="directaddress13" id="directaddress13" class="form-control" placeholder="" required>
                             </div>
                             <div class="form-group">
                              <input type="text" name="directorprovince1" id="directorprovince1" class="form-control" placeholder="Province" required>
                             </div>
                             <div class="form-group">
                              <input type="text" name="directorcode1" id="directorcode1" class="form-control" placeholder="Code" required>
                             </div>

                      </div>
                          <div class="col-md-6">
                             <p style="font-weight: bold;font-size: 17px;color: red;">POSTAL ADDRESS</p>
                            <div class="form-group">
                              <input type="text" name="drpostaladd11" id="drpostaladd11" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                              <input type="text" name="drpostaladd12" id="drpostaladd12" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                              <input type="text" name="drpostaladd13" id="drpostaladd13" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                              <input type="text" name="drprovince1" id="drprovince1" class="form-control" placeholder="Province" required>
                            </div>
                            <div class="form-group">
                              <input type="number" name="drcode1" id="drcode1" class="form-control" placeholder="Code" required>
                            </div>
                        </div>
                        </div> 

                        <br><br>

                        <!--Director 2-->  
                        <p style="font-size: 15px;font-weight: bold;color: red;">Director No 2</p>                   
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" name="directorfirstname2" id="directorfirstname2" class="form-control" placeholder="First Names" required>
                            </div>
                            <div class="form-group">
                              <input type="text" name="directorsecondname2" id="directorsecondname2" class="form-control" placeholder="surnames" required>
                          </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" name="idnumber2" id="idnumber2" class="form-control" placeholder="ID / Passport Number" required>
                            </div>
                            <div class="form-group">
                              <input type="text" name="nationality2" id="nationality2" class="form-control" placeholder="Nationality" required>
                          </div>
                          </div>                      
                        </div>
        
                        <div class="row">
                          <div class="col-md-6">
                             <div class="form-group">
                              <input type="email" name="directemail2" id="directemail2" class="form-control" placeholder="Email address" required>
                          </div>
                      </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="number" name="directorcontact2" id="directorcontact2" class="form-control" placeholder="Director 1 Contact Number" required>
                          </div>
                        </div>
                        </div>

                        <!--Director 2 Physical Addresses-->
                        <br>
                         <div class="row">
                          <div class="col-md-6">
                            <p style="font-weight: bold;font-size: 17px;color: red;">PHYSICAL ADDRESS</p>
                             <div class="form-group">
                              <input type="text" name="directaddress21" id="directaddress21" class="form-control" placeholder="" required>
                             </div>
                             <div class="form-group">
                              <input type="text" name="directaddress22" id="directaddress22" class="form-control" placeholder="" required>
                             </div>
                             <div class="form-group">
                              <input type="text" name="directaddress23" id="directaddress23" class="form-control" placeholder="" required>
                             </div>
                             <div class="form-group">
                              <input type="text" name="directorprovince2" id="directorprovince2" class="form-control" placeholder="Province" required>
                             </div>
                             <div class="form-group">
                              <input type="text" name="directorcode2" id="directorcode2" class="form-control" placeholder="Code" required>
                             </div>
                    <!--Director 2 Postal Addresses-->
                      </div>
                          <div class="col-md-6">
                             <p style="font-weight: bold;font-size: 17px;color: red;">POSTAL ADDRESS</p>
                            <div class="form-group">
                              <input type="text" name="drpostaladd21" id="drpostaladd21" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                              <input type="text" name="drpostaladd22" id="drpostaladd22" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                              <input type="text" name="drpostaladd23" id="drpostaladd23" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                              <input type="text" name="drprovince2" id="drprovince2" class="form-control" placeholder="Province" required>
                            </div>
                            <div class="form-group">
                              <input type="number" name="drcode2" id="drcode2" class="form-control" placeholder="Code" required>
                            </div>
                        </div>
                        </div> 


                         <!--Director 3-->  
                        <p style="font-size: 15px;font-weight: bold;color: red;">Director No 3</p>                   
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" name="directorfirstname3" id="directorfirstname3" class="form-control" placeholder="First Names" required>
                            </div>
                            <div class="form-group">
                              <input type="text" name="directorsecondname3" id="directorsecondname3" class="form-control" placeholder="surnames" required>
                          </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" name="idnumber3" id="idnumber3" class="form-control" placeholder="ID / Passport Number" required>
                            </div>
                            <div class="form-group">
                              <input type="text" name="nationality3" id="nationality3" class="form-control" placeholder="Nationality" required>
                          </div>
                          </div>                      
                        </div>
        
                        <div class="row">
                          <div class="col-md-6">
                             <div class="form-group">
                              <input type="email" name="directemail3" id="directemail3" class="form-control" placeholder="Email address" required>
                          </div>
                      </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="number" name="directorcontact3" id="directorcontact3" class="form-control" placeholder="Director 1 Contact Number" required>
                          </div>
                        </div>
                        </div>

                        <!--Director 3 Physical Address-->
                        <br>
                         <div class="row">
                          <div class="col-md-6">
                            <p style="font-weight: bold;font-size: 17px;color: red;">PHYSICAL ADDRESS</p>
                             <div class="form-group">
                              <input type="text" name="directaddress31" id="directaddress31" class="form-control" placeholder="" required>
                             </div>
                             <div class="form-group">
                              <input type="text" name="directaddress32" id="directaddress32" class="form-control" placeholder="" required>
                             </div>
                             <div class="form-group">
                              <input type="text" name="directaddress33" id="directaddress33" class="form-control" placeholder="" required>
                             </div>
                             <div class="form-group">
                              <input type="text" name="directorprovince3" id="directorprovince3" class="form-control" placeholder="Province" required>
                             </div>
                             <div class="form-group">
                              <input type="text" name="directorcode3" id="directorcode3" class="form-control" placeholder="Code" required>
                            </div>
                     <!--Director 3 Postal Address-->
                      </div>
                          <div class="col-md-6">
                             <p style="font-weight: bold;font-size: 17px;color: red;">POSTAL ADDRESS</p>
                            <div class="form-group">
                              <input type="text" name="drpostaladd31" id="drpostaladd31" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                              <input type="text" name="drpostaladd32" id="drpostaladd32" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                              <input type="text" name="drpostaladd33" id="drpostaladd33" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                              <input type="text" name="drprovince3" id="drprovince3" class="form-control" placeholder="Province" required>
                            </div>
                            <div class="form-group">
                              <input type="number" name="drcode3" id="drcode3" class="form-control" placeholder="Code" required>
                            </div>
                        </div>
                        </div>
                        <br><br>
                        <div class="form-group pull pull-right">
                            <button type="submit" class="btn btn-success" id="send" name="send"><i class="glyphicon glyphicon-ok-sign"></i> SUBMIT</button>
                        </div> 
                        <br><br><br><br>
                        <p style="font-size: 15px;color: #5f5f5f;"><span style="font-weight: bold;color: red;">NB : </span>If ther's more that 3 directors please Contact our Office, we will email you the form.</p>                 
                     </div>

     				
                  </div>
                  </form>
                  <div class="col-md-4">
                <br>
              
            </div>
        </div>	
     	</div>
     </div>
	<br>
	<br>
	
    <br>
  <div class="container" style="background:#e61e2c;height: 1px;"></div>
	<br>
	<div class="wrapper">
     <marquee behavior="alternate"><span class="marquee">STARTA-CO</span></marquee>
    </div>
	
	<?php include('contactform.php');?>
    <?php include('scroll.php');?>
    <?php include('footer.php');?>
	
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
  </body>
</html>