
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/animate.css">
	<style type="text/css">
	#inputcont
	{
       border-radius: 30px;
       border: solid 1px #e61e2c;
       background-color: transparent;
	}
	#submit
	{
			float: right;
			background: transparent;
			border: solid 1px #e61e2c;
			color: #e61e2c;
			font-weight: bold;
			border-radius: 20px;
			padding: 6px 23px 6px 23px;
			
	}
		#submit:hover
		{
			background-color: #e61e2c;
			color: #ffffff;
			font-weight: bold;
			animation-duration: 2s ;
			animation-name: btntrans;
			-webkit-animation-duration : 2s ;
			-webkit-animation-name : btntrans;
			-moz-animation-name: 2s ;
			-moz-animation-duration : btntrans;
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
		#name_err
		{
			color: red;
		}


		


	</style>
</head>
<body>
    <div class="container">
          <p style="text-align:center;"><img src="img/flag.jpg">&nbsp;&nbsp;&nbsp;<img src="img/flag2.png">&nbsp;&nbsp;&nbsp;<img src="img/flag1.png">  </p> 
    </div>
	<div style="background: #c8c4c4;">
    	<br><br>
            <div class="container" style="width: 90%;">
            	<div class="row">
            	<div class="col-md-6">
            	 <p style="font-size:20px;">Get In Touch</p>
                <form method="post" action="contactsend.php" onsubmit="return Validate()" name="myform">
            		<div class="form-group">
            			<input type="text" name="name1"  placeholder="Name" class="form-control" id="inputcont">
            		</div>
            		<div id="name_err" class="val_error animated flash"></div>	

            		<div class="form-group">
            			<input type="email" name="email"  placeholder="Address Email" class="form-control" id="inputcont">
            		</div>
            		<div id="email_err" class="val_error"></div>	

            		<div class="form-group">
            			<textarea class="form-control" cols="30" rows="7"  name="msg" placeholder="Type your message here..."" id="inputcont"></textarea>
            		</div>

            		<div id="msg_err" class="val_error"></div>	
            		
            		<div class="form-group">
            			<button type="submit" name="submit" id="submit" class="">Send <span class="glyphicon glyphicon-send"></span> </button>
            		</div>
                </form>
            		</div>
            		<div class="col-md-6 col-xs-12">
            			<table>
	            				<tr>
	            					<td><p style="font-weight: bold;">Email</p></td>
	            					<td><p style="color:#6491f6;"> : warren@startaco.co.za</p></td>
	            				</tr>

	            				<tr>
	            					<td><p style="font-weight: bold;">Cell No</p></td>
	            					<td><p > : 074 898 7445 </p></td>
	            				</tr>
                                <tr>
                                    <td><p style="font-weight: bold;">Tel No</p></td>
                                    <td><p > : 031 304 7113</p></td>
                                </tr>
	            				<tr>
	            					<td><p style="font-weight: bold;">Address </p></td>
                                    <td><p > : 1st Floor, Maxprop House(Waltons), 98 Bulwer Rd, Bulwer, Berea, 4083</p></td>
	            				</tr>
	            			</table>
                            <br>
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3460.2334729274153!2d30.997540478174848!3d-29.85753992965421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ef7a9efce1d1f2b%3A0x6c8c364b9f1e2389!2s98+Bulwer+Rd%2C+Bulwer%2C+Berea%2C+4083!5e0!3m2!1sen!2sza!4v1507713583786" width="100%" height="180" frameborder="0" style="border-radius:10px;border:solid 1px red;" allowfullscreen></iframe>
            		</div>
            	</div>      	
            </div>
    	<br><br>
    </div></body>
    </html>

    <script type="text/javascript">
    	var name1 = document.forms['myform']['name1'];
    	var email = document.forms['myform']['email'];
    	var msg = document.forms['myform']['msg'];

    	var name_err = document.getElementById("name_err");
    	var email_err = document.getElementById("email_err");
    	var msg_err = document.getElementById("msg_err");

    	name1.addEventListener("blur", nameVerify, true);
    	email.addEventListener("blur", emailVerify, true);
    	msg.addEventListener("blur", msgVerify, true);

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
    		if(msg.value == "")
    		{
    			msg.style.border = "1px solid red";
    			msg_err.textContent ="Type your message";
    			msg.focus();
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
    		if(msg.value != "")
    		{
    			msg.style.border = "1px solid #25b139";
    			msg_err.innerHTML = "";
    			return true;
    		}
    	}

    </script>