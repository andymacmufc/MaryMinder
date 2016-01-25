<!DOCTYPE html>
<html>
<head>
	<?php include("head.php"); ?>
</head>

<!-- This page is to be edited by jemma to sign up patients -->

<body id="body">			
	<?php include("header.php"); ?>
		<div id="login">

					<h2><span class="fontawesome-lock"></span>Sign Up</h2>

							<form action='' method='post'>
								<fieldset> 
									<p><label for="fname">First Name:</label></p>  
									<p><input type="text" name="fname" size="50" /></p> 
									
									<p><label for="fname">Last Name:</label></p>  
									<p><input type="text" name="lname" size="50" /></p>
									
									<p><label for="email">Email:</label></p>  
									<p><input type="text" name="email" size="50" /></p>
									
									<p><label for="username">Username:</label></p>  
									<p><input type="text" name="userid" size="12" /></p>  
									
									<p><label for="password">Password:</label></p>  
									<p><input type="password" name="password" size="12" /></p>     
									
									<p><input type="submit" name="submit" value="Submit" /></p>  
								</fieldset>
							</form> 

				</div> <!-- end signup -->
		
	<?php include("footer.php"); ?>			
</body>
</html>