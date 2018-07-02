<!DOCTYPE html>

<html>
  <head>
    <title>Contact-us</title>
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
        color: #a6a6a6;
        font-size: 17px;
        font-weight: bold;
        border-radius: 2px;
        padding: 9px 35px 9px 35px;
        border: solid 1px #a6a6a6;
        float: right;
     }
     #submit:hover
    {
      background-color: #e61e2c;
      border: solid 1px #e61e2c;
      color: #ffffff;
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
    .val_error
    {
      color: red;
    }
     
   </style>
    }
  </head>
  <body>
    <!--Header Include-->
   <?php include('header.php');?>
	<!-- End Slide gallery -->
    <!-- Thumbnails -->	
    
    <br><br><br><br>

	<div class="container">
<br><br>
     <div class="row">
      <div class="col-md-5">
       <p id="form">Contact Us</p>
        <br>
        <div style="background:#e61e2c;height: 1px;"></div>
        <br>
        <form method="post" action="contactusEngin.php" onsubmit="return Validate()" name="myform">
                
                 

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-6">
                      <label for="name1">Name <span style="color: red;">*</span></label>
                      <input type="text" name="name1"  placeholder="Name" class="form-control" >
                      <div id="name_err" class="val_error"></div>
                    </div>
                    <div class="col-md-6">
                      <label for="email">Email Address <span style="color: red;">*</span></label>
                      <input type="email" name="email"  placeholder="Address Email" class="form-control" >
                      <div id="email_err" class="val_error animated flash"></div> 
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="message">Message<span style="color: red;">*</span></label>
                  <textarea class="form-control" cols="30" rows="7"  name="message" placeholder="Type your message here..."" id="inputcont"></textarea>
                </div>

                <div id="msg_err" class="val_error"></div>  
                
                <div class="form-group">
                  <button type="submit" name="submit" id="submit" class="">Send <span class="glyphicon glyphicon-send"></span> </button>
                </div>

        </form>
      </div>

       <div class="col-md-2">
            <a class="thumbnails" href=""><img src="img/cont.png"></a>
      </div>

      <div class="col-md-5">
        <p style="font-size: 30px;color: #e61e2c;font-family: 'Cuprum', sans-serif;">Get In Touch</p>  
         <table>
           <tr>
             <td><p style="font-weight: bold;">Email </p></td>
             <td><p>: warren@startaco.co.za</p></td>
           </tr>
           <tr>
             <td><p style="font-weight: bold;">Cell No </p></td>
             <td><p>: 074 898 7445 </p></td>
           </tr>
           <tr>
             <td><p style="font-weight: bold;">Tel No</p></td>
             <td><p>: 031 304 7113</p></td>
           </tr>
           <tr>
             <td><p style="font-weight: bold;">Address</p></td>
             <td><p>: 1st Floor, Maxprop House (Above Waltons),</p></td>
           </tr>
           <tr>
             <td><p> </p></td>
             <td><p> &nbsp;&nbsp; 180 Clark Road Glenwood Durban</p></td>
           </tr>
         </table>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3460.2334729274153!2d30.997540478174848!3d-29.85753992965421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ef7a9efce1d1f2b%3A0x6c8c364b9f1e2389!2s98+Bulwer+Rd%2C+Bulwer%2C+Berea%2C+4083!5e0!3m2!1sen!2sza!4v1507713583786" width="100%" height="300 frameborder="0" style="border:0;" allowfullscreen></iframe>
     </div>
	</div></div>



	<br><br>
  <br>
  <div class="container" style="background:#e61e2c;height: 1px;"></div>
	<br>
	<div class="wrapper">
     <marquee behavior="alternate"><span class="marquee">STARTA-CO</span></marquee>
    </div>
	<div class="container">
          <p style="text-align:center;"><img src="img/flag.jpg">&nbsp;&nbsp;&nbsp;<img src="img/flag2.png">&nbsp;&nbsp;&nbsp;<img src="img/flag1.png">  </p> 
    </div>
	
    <?php include('scroll.php');?>
    <?php include('footer.php');?>
	
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
  </body>
</html>

<script type="text/javascript">
      var name1 = document.forms['myform']['name1'];
      var email = document.forms['myform']['email'];
      var message = document.forms['myform']['message'];

      var name_err = document.getElementById("name_err");
      var email_err = document.getElementById("email_err");
      var msg_err = document.getElementById("msg_err");

      name1.addEventListener("blur", nameVerify, true);
      email.addEventListener("blur", emailVerify, true);
      message.addEventListener("blur", msgVerify, true);

      function Validate(){
        // Name Validation
        if(name1.value == "")
        {
          name1.style.border = "1px solid red";
          name_err.textContent = "Name Required";
          name1.focus();
          return false;
        }

        //Email Validation
        if(email.value == "")
        {
          email.style.border ="1px solid red";
          email_err.textContent = "Valid Email required";
          email.focus();
          return false;
        }

        //Message Validation
        if(message.value == "")
        {
          message.style.border = "1px solid red";
          msg_err.textContent ="Type your message";
          message.focus();
          return false;
        }
      }

     function nameVerify()
      {
        if(name1.value != "")
        {
          name1.style.border = "1px solid #25b139";
          name_err.innerHTML = "";
          return true;
        }
      }

      function emailVerify()
      {
        if(email.value != "")
        {
          email.style.border = "1px solid #25b139";
          email_err.innerHTML = "";
          return true;
        }
      }

      function msgVerify()
      {
        if(message.value != "")
        {
          message.style.border = "1px solid #25b139";
          msg_err.innerHTML = "";
          return true;
        }
      }

    </script>