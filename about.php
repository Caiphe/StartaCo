<!DOCTYPE html>

<html>
  <head>
    <title>Starta-co</title>
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
     #animatedDIv
     {
        -webkit-animation-duration: 3s;
        -webkit-animation-iteration-count: 1;
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
     <p style="font-size:40px;color: #e61e2c;font-family: 'Cuprum', sans-serif;">About Us</p>
     <div style="background:#e61e2c;height: 1px;"></div>

      <div class="row">
      	<br>
      	<div class="col-md-4 animated bounceInLeft" id="animatedDIv">
      		<div class="Thumbnails">
      			<img src="img/chart.png">
      		</div>
      	</div>
      	<div class="col-md-8 animated bounceInRight" id="animatedDIv">
      		<p style="font-size:30px;color: #e61e2c;font-family: 'Cuprum', sans-serif;">Vision</p>
      		<p style="text-align: justify;font-size: 17px;"><span style="color: #e61e2c;font-weight: bold;font-family: 'Cuprum', sans-serif;">Starta-co</span> Our vision is to assist & partner with our clients. Where clients come for the peace of mind that their interests are being cared for by a team that enjoys working with them. We provide businesses, entrepreneurs and individuals with the highest quality accounting, tax planning and business advisory services delivered in a timely, efficient and innovative manner. 
</p>
     </div>
     </div><br>
     <div class="row">
      	<div class="col-md-4 animated bounceInLeft" id="animatedDIv">
      		<div class="Thumbnails">
      			<img src="img/chart2.png">
      		</div>
      	</div>
      	<div class="col-md-8 animated bounceInRight" id="animatedDIv">
      		<p style="font-size:30px;color: #e61e2c;font-family: 'Cuprum', sans-serif;">Mission</p>
      		<p style="text-align: justify;font-size: 17px;">Our primary purpose as an organization is to deliver high quality services. We will continue to be known as the firm where personal attention will never become obsolete. Our staff offer friendly & efficient service to our valued clients.  </p>
     </div>
     </div>
     <br>
	</div>
	<br>
	<br>
	<div class="container">
		<p style="text-align:center;font-size:30px;color: #e61e2c;font-family: 'Cuprum', sans-serif;">OUR MANAGEMENT TEAM</p>
		<div class="row">
			<div class="col-md-4">
				<p style="text-align: center;"><br>
					<span style="color:#0a0606;font-size:17px;font-weight: bold;">Warren Harman</span><br></p>
					<p style="text-align: justify;"><span style="color:#575757;">Professional Accountant S.A. – CEO & head of Accounting & Tax services. Warren is a SAIPA accredited accountant and a member of the SAIPA Centre of Tax Excellence.</span></p>
			</div>
			<div class="col-md-4">
				<p style="text-align: center;"></a><br>
					<span style="color:#0a0606;font-size:17px;font-weight: bold;">Vuyo Tuntulwana</span><br>
					<span style="color:#575757;">Company registrations & secretarial services.</span></p>
			</div>
			<div class="col-md-4">
				<p style="text-align: center;"><br>
					<span style="color:#0a0606;font-size:17px;font-weight: bold;">Reggie Naidoo</span><br>
					<span style="color:#575757;">SARS liason officer & registrations</span></p>
			</div>
		</div>
	</div>
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