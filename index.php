<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
 #allimage
   { 
   transition: all 1s ease; 
   }
  #allimage:hover
  {
  	transform: scale(1.2);
  	box-shadow: 3px 0 6px 0 #687589;
  	border: solid 3px #fff;
  }
	</style>
</head>
<body>
	<?php include('header.php');?>
    
    <!-- Slide gallery -->
	<div class="">
    <div class="jumbotron" style="margin-left:3%;margin-right: 3%;">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/carousel4.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
           <div class="item">
            <img src="img/carousel6.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="img/carousel1.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="img/carousel3.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
		  <div class="item">
            <img src="img/carousel5.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
	</div>
	<!-- End Slide gallery -->
    <!-- Thumbnails -->	
	<div class="container" style="background:#e61e2c;height: 1px;">
	</div>
	<p style="text-align:center;"><span style="color:#e51519;font-size:50px;font-weight:bold;">STARTA-CO</span>
	<br>
	</p>	
	<p style="text-align:center;">Welcome to STARTACO & thank you for visiting our site. We are SAIPA registered accountants & tax practitioners<br> & business advisers that provide a complete solution including the full range of accounting, tax, advice, <br>company registrations & company secretarial services. Tour partners in business.</p>
	<br><br>
	<div class="container">
	 <div class="container">
	  <div class="container-row ">
	   <div class="col-lg-3 col-md-3 col-sm-3">
	     <a class="thumbnail"><img id="allimage" src="img/im1.jpg"></a>
	   </div>
	   <div class="col-lg-3 col-md-3 col-sm-3 ">
	     <a class="thumbnail"><img id="allimage" src="img/im2.jpg"></a>
	   </div>
	   <div class="col-lg-3 col-md-3 col-sm-3 ">
	     <a class="thumbnail"><img id="allimage" src="img/im3.jpg"></a>
	   </div>
	   <div class="col-lg-3 col-md-3 col-sm-3">
	     <a class="thumbnail"><img id="allimage" src="img/im4.jpg"></a>
	   </div>
	  </div>
	  </div>
	</div>
	<br>
	<div style="background:#e61e2c;height: 1px;">
	</div>
	
	<div style="background:white">
	<br>
	 <br>
	 <br>
	 <div class="container">
	 <div class="row main-low-margin">	 
	 <div class="col-md-8 col-sm-8" >
	 <h3 style="color:red;font-weight:bold;font-family: 'Open Sans', sans-serif;">we specialise in small business start-ups, including;</h3>
	 <p style="text-align:justify;font-family: 'Open Sans', sans-serif;">
	- Accounting & bookkeeping.<br>
  - Company Registration, company changes & company secretarial functions.<br>
  - Business start-up packages.<br>
  - Annual financial statements, management accounts & cost accounting.<br>
  - Income tax, VAT, PAYE & UIF<br>
  - Tax Planning<br>
  - Registrations for VAT, PAYE and importers and exporters licences.<br>
  - Government and other data base registrations.<br>
  - BEE <br>
  - Re-instatement of companies and close corporations.<br>
  - Business advice <br>
  - Outsource your accounting and tax requirement.<br>
  - We will get your set up quickly & efficiently.


	 </div>
	 
	 <div class="col-md-4 col-sm-4 text-center">
    <br><br>
	 <a class="thumbnail"><img src="img/h1.jpg" class="animated flash" id="home1" alt=""></a>
	 </div>
	 
	 </div>
	</div>
	<br><br>  
	</div>

	<div class="wrapper">
     <marquee behavior="alternate"><span class="marquee">STARTA-CO</span></marquee>
    </div>
   
    <?php include('contactform.php'); ?>
    <?php include('scroll.php');?>
    <?php include('footer.php'); ?>
	
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
</body>
</html>