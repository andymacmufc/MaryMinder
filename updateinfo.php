<!DOCTYPE html>
<html>
<head>
	<?php include("head.php"); ?>
</head>

<!-- This page is to be edited by jemma to update info on patients in database -->
<body id="body">			
	<?php include("header.php"); ?>
		<div id="login">

					<h2><span class="fontawesome-lock"></span>Update Medical Info</h2>

							<form action='update.php' method='POST'>
								<fieldset> 

									<p><label for="email">Allergies:</label></p>  
									<p><input type="text" name="aller" size="64" /></p>

									<p><label for="username">Conditions:</label></p>  
									<p><input type="text" name="condit" size="64" /></p>  

									<p><label for="password">Medications:</label></p>  
									<p><input type="text" name="Medications" size="12" /></p> 

									<p><label for="fname">Recent Blood Pressure:</label></p>  
									<p><input type="text" name="bp" size="64" /></p> 

									<p><label for="fname">Past Medical History:</label></p>  
									<p><input type="text" name="history" size="64" /></p>  

									<p><label for="fname">Date of Birth:</label></p>  
									<p><input type="text" name="dateofbirth" size="64" /></p> 
									
									<p><label for="fname">Blood Type:</label></p>  
									<p><input type="text" name="bloodtype" size="64" /></p>
									
									<p><label for="fname">Next of Kin:</label></p>  
									<p><input type="text" name="kin" size="64" /></p> 
									  
									<p><label for="fname">Next of Kin eMail:</label></p>  
									<p><input type="text" name="kinemail" size="64" /></p> 
									 
									<p><label for="fname">Next of Kin Phone:</label></p>  
									<p><input type="text" name="kinphone" size="64" /></p> 
									
									<p><label for="fname">GP:</label></p>  
									<p><input type="text" name="gp" size="64" /></p>
									
									<p><label for="fname">GP Phone:</label></p>  
									<p><input type="text" name="gpphone" size="64" /></p>									

									<p><label for="email">Address:</label></p>  
									<p><input type="text" name="address" size="64" /></p>   

									<p><input type="submit" name="submit" value="Submit" /></p>  
								</fieldset>
							</form> 

				</div> 

	<?php include("footer.php"); ?>			
</body>
</html>