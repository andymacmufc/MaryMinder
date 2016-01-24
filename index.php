<!DOCTYPE html>
<html>

<!-- This page is the hompage and sign in -->

<head>
	<?php include("head.php"); ?>
	</head>
<body id="body">
	<?php include('header.php'); ?>	
	<div id="content3" style="padding-top:30px; padding-left:30px; padding-right:30px;">					 
		<p style="font-size: 17px;text-align:justify; text-justify:inter-word;">MaryMinder is a mobile application designed primarily for the elderly or those predisposed to falls.
		<br>The application has the primary function of providing an alert to a pre-selected list of carers in the event of a fall detected by the phones accelerometer.
		<br>There is also a medical database that shows a patients medical information and history, which can be useful in an accident or emergency.					 
		</p>							
	</div>
	<div id="login">					
		<h2><span class="fontawesome-lock"></span>Sign In</h2>					                  
		<form action="login.php" method="post">						
			<fieldset>
				<p>Username</p>							
				<p><input required="" name="user" type="text" size="35" id="username"</p> 							
				<p>Password</p>							
				</p><input required="" size="35" type="password" name="passw"><br>  							
				<p><input type="submit" value="Login" name="login"></p>						
			</fieldset>
		</form>									
	</div> 										
	</div>									
	<?php include("footer.php"); ?>		
</div>
</body>
</html>