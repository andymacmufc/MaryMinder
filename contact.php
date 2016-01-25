<!DOCTYPE html>
<!-- This page displays the users important contacts -->
<html>
<head>
	<?php include("head.php"); ?>
	</head>

<body id="body">

	<?php include('header.php'); ?>

        		<script src="script.js"></script>

		<div style="padding-top:30px;">
					
			<table style="margin:auto;">
				<tr>
				<td id="med">Patient Address:</td> 
						  <!-- from database -->
						  <td id="med">
						   <p>Main Street,<p> 
						   <p>Maynooth</p>
						  </td>
						</tr>  
				
				<tr>
				<td id="med">GP:</td> 
						  <!-- from database -->
						  <td id="med">
						   <ul>
							<li>Dr. O'Brien, Maynooth</li>
							<li>01 2121212</li>
							</ul>
						  </td>
						</tr>  
				
				<tr>
				
				  <td id="med">Next of Kin:</td> 
						  <!-- from database -->
						  <td id="med">
						   <ul>
							<li>Mary Junior</li>
							</ul>
						  </td>
						</tr>  
				
				<tr>
				
				<tr>
				  <td id="med">Next of Kin eMail:</td> 
						  <!-- from database -->
						  <td id="med">
						   <ul>
							<li>maryjr@gmail.com</li>
							</ul>
						  </td>
						</tr>  
				
				<tr>
				<td id="med">Next of Kin Phone:</td> 
						<!-- from database -->
						<td id="med">
						   <ul>
							<li>08272722772</li>
							</ul>
						</td>
				</tr>
			</table>
		</div>
	<?php include("footer.php"); ?>		


</body>

</html>