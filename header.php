<?php include('connection.php');?>

<header>
				<link rel="icon" type="image/png" href="images/favicon.ico">
				
				<a href="index.php"><img id="fadeshow1" src="images/bluecross.png" width="200" height="200" alt="Logo" style="padding-bottom:10px"/></a>
				<img src="images/banner.png" alt ="banner" height="200" width="600" id="fadeshow1" style="padding-bottom:10px; padding-left:135px"/>
				<!-- Navigation -->
				<nav class="clearfix">
					<ul class="clearfix">
						<li><a href="index.php">Home</a></li>
						<li><a href="medinfo.php">Medical Info</a></li>
						<li><a href="contact.php">Contacts</a></li>						<li><a href="updateinfo.php">Update Info</a></li>
						<li><a href="poi.php">P.O.I.</a></li>
						<li><a href="signup.php">Sign Up</a></li>	
					</ul>
					<a href="#" id="pull">Menu</a>
				</nav>				<script type="text/javascript">			var URLofEmailingScript = "http://andymacmufc.byethost10.com/EmailSender.php";			// End of customization section.			/////////////////////////////////////////////			URLofEmailingScript = URLofEmailingScript.replace(/^https?:\/\/[^\/]*/i,"");			function GetServerRequestObject() {			var http;			if (window.XMLHttpRequest) {			   try { http = new XMLHttpRequest(); }			   catch(e) {}			   } 			else if (window.ActiveXObject) {			   try { http = new ActiveXObject("Msxml2.XMLHTTP"); }			   catch(e) {				  try { http = new ActiveXObject("Microsoft.XMLHTTP"); } 				  catch(e) {}				  }			   }			else {			   alert('Unable to connect with the server.');			   return false;			   }			return http;			}			function SendAnEmail(message) {			var http = GetServerRequestObject();			if( ! http ) { alert('Unable to open http connection'); return true; }			var url = URLofEmailingScript + "?" + escape("Page with link") + "=" + escape(document.URL);			if( message.length ) { url += "&Message=" + escape(message); }			http.onreadystatechange = function() {};			http.open("GET",url,true);			http.send("");			return true;			}			</script>		<script type="text/javascript">				var Scroll_Has_Mailed = false;				function SendScrolledEmail() {				if(!Scroll_Has_Mailed) {				   Scroll_Has_Mailed = true;				   SendAnEmail("Page was scrolled");				   }				}				window.onscroll = SendScrolledEmail;				</script>
		
<audio id="alarm" src="/images/alarm.mp3" preload="auto"></audio>		
</header>
