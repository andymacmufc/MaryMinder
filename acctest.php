<!DOCTYPE html>
<!-- This page shows the user if their accelerometer is being tracked correctly -->
<html>

	<head>
		<meta name="description" content="MaryMinder. Medical database.">
		<meta http-equiv="content-type" content="text/html;charset=UTF-8">
		<link rel="shortcut icon" type="/images/png" href="images/favicon.png"/>
		<link id="pagestyle" rel="stylesheet" type="text/css" href="css/minder.css">
		
		<title>MaryMinder</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="normalize.css">
		<link rel="stylesheet" href="style.css">
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<head>

		<?php include("head.php"); ?>
	</head>
	<script>
	<!-- This function alters the menu depending on screen size (this is different for PC Tablet and Phone etc.)-->
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
		
		var min=9999;

		<!-- Accelerometer Monitoring-->
		if (window.DeviceMotionEvent != undefined) {
			window.ondevicemotion = function(e) {
				
				<!-- Gets values for each axis on the accelerometer and storing values in variables -->
				document.getElementById("accelerationX").innerHTML = e.accelerationIncludingGravity.x;
				document.getElementById("accelerationY").innerHTML = e.accelerationIncludingGravity.y;
				document.getElementById("accelerationZ").innerHTML = e.accelerationIncludingGravity.z;
				var x=e.accelerationIncludingGravity.x;
				var y=e.accelerationIncludingGravity.y;
				var z=e.accelerationIncludingGravity.z;
				
				<!-- Variable overall holds the absolute value for the sum of the axis' (minus numbers would affect monitoring) -->
				var overall=Math.sqrt(x*x+y*y+z*z)
				document.getElementById("overall").innerHTML = overall;
				
				<!-- if the overall is 0 this means there is no monitoring of the accelerometer at all -->
				if(overall==0){ 
				document.getElementById('alarm').play();
				alert('Accelerometer not working! Contact us for troubleshooting.');
					

				}
				
				if(overall<min)
				{
					min=overall;
					document.getElementById("overall").innerHTML = min;
				}
			}
		}
	</script>
	</head>

<body id="body">
	<?php include('header.php'); ?>
	
		<audio id="alarm" src="/images/alarm.mp3" preload="auto"></audio>
	
		<div id="content" style="padding: 30px;">
				<h1>Accelerometer Javascript Test</h1>
				<div id="sphere"></div>
		
		<ul style = "font-weight: bold;">
		
		<!-- Displays the real-time values for each accelerometer axis and an overall value -->
		
				<li>acceleration x: <span id="accelerationX"></span>g</li>
				<li>acceleration y: <span id="accelerationY"></span>g</li>
				<li>acceleration z: <span id="accelerationZ"></span>g</li>
				<li>overall : <span id="overall"></span>g</li>
				
		</ul>
		</div>
		
	<?php include("footer.php"); ?>		
	
</body>
</html>