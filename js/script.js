
		var min=9999;
			
			//This script is linked to most pages
			//It tracks the accelometer
			
		//Accelerometer Monitoring
		if (window.DeviceMotionEvent != undefined) {
		    window.ondevicemotion = function(e) {
				
				//Gets values for each axis on the accelerometer and storing values in variables
		        document.getElementById("accelerationX").innerHTML = e.accelerationIncludingGravity.x;
		        document.getElementById("accelerationY").innerHTML = e.accelerationIncludingGravity.y;
		        document.getElementById("accelerationZ").innerHTML = e.accelerationIncludingGravity.z;
		        var x = e.accelerationIncludingGravity.x;
		        var y = e.accelerationIncludingGravity.y;
		        var z = e.accelerationIncludingGravity.z;
				
				//Variable overall holds the absolute value for the sum of the axis' (minus numbers would affect monitoring)
		        var overall = Math.sqrt(x * x + y * y + z * z)
		        document.getElementById("overall").innerHTML = overall;

				
				//if the overall is 0 this means there is no monitoring of the accelerometer at all
				//if the overall goes between 1 and above 0 this indicates a fall of the patient or their device
		        if (overall < 1.0 && overall > 0) {
		            //
		            document.getElementById('alarm').play();

		            alert('Email Sent')
		            //here is where i want a sufficient method of notififying to be sent to the carer for the patient
					//return Send('link')

		        }

		        if (overall < min) {
		            min = overall;
		            document.getElementById("overall").innerHTML = min;
		        }
		    }
		} 
