<!DOCTYPE html>

<html>
  <head>
    <title>services</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="css/bootstrap.css" rel="stylesheet">
   <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="css/bootshape.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
	 <link href="css/animate.css" rel="stylesheet">
   <style type="text/css">
     #submit
     {
        background-color: transparent;
        color: #e61e2c;
        font-size: 17px;
        font-weight: bold;
        border-radius: 22px;
        padding: 9px 35px 9px 35px;
        border: solid 1px ;
        float: right;
     }
     #submit:hover
    {
      background-color: #e61e2c;
      color: #ffffff;
      font-weight: bold;
      animation-duration: 1s ;
      animation-name: btntrans;
      -webkit-animation-duration : 1s ;
      -webkit-animation-name : btntrans;
      -moz-animation-name: 1s ;
      -moz-animation-duration : btntrans;
      border-radius: 22px;
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
    #servDiv
    {
      transition: all 1s ease; 
    }
    #servDiv:hover
    {
      transform: scale(1.2);
      box-shadow: 1px 0 3px 0 #687589;
      color: white;
      background-color: #e61e2c;
      position: relative;
      overflow: hidden;
      z-index: 1;
    }
     
   </style>
  </head>
  <body>
    <!--Header Include-->
   <?php include('header.php');?>
	<!-- End Slide gallery -->
    <!-- Thumbnails -->	
    <br><br>
	<div class="container">
     <br><br>
     <p style="font-size:40px;color: #e61e2c;font-family: 'Cuprum', sans-serif;">Services</p>
     <div style="background:#e61e2c;height: 1px;"></div>

      <div class="row">
      <br>
      <div class="col-md-4" id="servDiv">
        <p style="text-align: center;"><img src="img/icon1.png"><br>
      <span style="font-size: 25px;">Payroll</span><br>
      <span>As a South African resident or a business, taxation affects us every day and with almost every transaction we enter into. We offer one of the most affordable taxation solutions on the market. </span>
         </p>
      </div>
      <div class="col-md-4" id="servDiv">
    <p style="text-align: center;"><img src="img/icon2.png"><br>
      <span style="font-size: 25px;">Tax Compliance</span><br>
      <span>Compliance across all taxes, statutory accounting and tax reporting is becoming increasingly complex. <span style="color: red;font-weight: bold;">Startaco</span> is ready to make it easy for you</span>
    </p>
      </div>
      <div class="col-md-4" id="servDiv">
    <p style="text-align: center;"><img src="img/icon3.png"><br>
      <span style="font-size: 25px;">Importer & Exporter Registration</span><br>
      <span>Register as an Importer or Exporter with customs.</span>
    </p>
      </div>
     </div><br>
     <div class="row">
      <br>
      <div class="col-md-4" id="servDiv">
    <p style="text-align: center;"><img src="img/icon4.png"><br>
      <span style="font-size: 25px;">Vat</span><br>
      <span>It is mandatory for a business to register for VAT if the total value of taxable supplies made in any consecutive twelve month period exceeded or is likely to exceed R1 million. We at Starta-co are there to get it done for you at an affordable price.</span>
    </p>
      </div>
      <div class="col-md-4" id="servDiv">
    <p style="text-align: center;"><img src="img/icon5.png"><br>
      <span style="font-size: 25px;">Bookkeeping</span><br>
      <span>We offer the following: Bookkeeping, month PAYE/UIF & VAT returns. Competitive pricing & great service... </span>
    </p>
      </div>
      <div class="col-md-4" id="servDiv">
    <p style="text-align: center;"><img src="img/icon6.png"><br>
      <span style="font-size: 25px;">Web & Graphic Design</span><br>
      <span>Do you want a web site for your business? Than you are at the right place. We have in-house qualified and experienced team that will take good care of your digital designs and developments.</span>
    </p>
      </div>
     </div>
      <div class="container" style="background:#e61e2c;height: 1px;"></div>
     <br>
     <div class="container-row">
    <div class="col-md-6">
      <p style="text-align: justify;"><span style="font-size: 25px;color: #444547;">Company secretarial</span> <br>
 - Company registrations – fast & efficient.<br>
 -  CIPC annual returns.<br>
 - Changing directors or members<br>
 - Company secretarial, including resolutions, minutes of directors and shareholders meetings<br>
 - Share certificates & issuing of shares.<br>
 - Reinstatement of deregistered CC’s & companies.</p>

    </div>
    <div class="col-md-6"></div>
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