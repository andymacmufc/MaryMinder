<!DOCTYPE html>

<!-- This page is to display patients medical info from database -->

<html>
<head>
	<?php include("head.php"); ?>
	</head>

<body id="body">

	<?php include('header.php'); ?>

		<script src="script.js"></script>
	
	<?php

	$host="sql209.byethost10.com";
	$user="b10_16939691";
	$password="****";
	$dbname="b10_16939691_mary";
	$dbconn = new mysqli($host, $user, $password, $dbname);
	if ($dbconn->connect_error){
		die("Could Not Connect: ".$conn->connect_error);
	}

		$query = "SELECT * FROM medhub WHERE User_id = 1"; 
		$result = mysqli_query($dbconn, $query);
		$row = mysqli_fetch_assoc($result)

		?>
		<div style="padding-top:30px;">
					
			<table style="margin:auto;">
				<tr>
				<td id="med">D.O.B:</td> 
						  <!-- from database -->

						  <td id="med">
						   <ul>
							<li><?php echo $row['dob']; ?></li>

							</ul>
						  </td>
						</tr>  
				
				<tr>

				
				  <td id="med">Blood Type:</td> 
						  <!-- from database -->
						  <td id="med">
						   <ul>
							<li><?php echo $row['type']; ?></li>
							</ul>
						  </td>
						</tr>  
				
				<tr>
				
				<tr>
				  <td id="med">Allergies:</td> 
						  <!-- from database -->
						  <td id="med">
						   <ul>
							<li><?php echo $row['allergies']; ?></li>
							</ul>
						  </td>
						</tr>  
				
				<tr>
				<td id="med">Conditons:</td> 
						<!-- from database -->
						<td id="med">
						   <ul>
							<li><?php echo $row['conditions'];?></li>
							</ul>
						</td>
				</tr>

				<tr>
				<td id="med">Medications:</td> 
						<!-- from database -->
						<td id="med">
						   <ul>
							<li><?php echo $row['medications']; ?></li>
							</ul>
						</td>
				</tr>
				
				<tr>
				<td id="med">Recent Blood Pressure:</td> 
						<!-- from database -->
						<td id="med">
						<ul>
							<li><?php echo $row['pressure']; ?></li>
							</ul>
						</td>
				</tr>
				
				<td id="med">Past Medical History</td> 
						<!-- from database -->
						<td id="med"><p><?php echo $row['medhist']; ?></p>
						</td>
				</tr>
			</table>
		</div>
		
	<?php include("footer.php"); ?>		


</body>

</html>