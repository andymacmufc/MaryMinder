<?php
$host="sql209.byethost10.com";
$user="b10_16939691";
$password="";
$dbname="b10_16939691_mary";
$dbconn = new mysqli($host, $user, $password, $dbname);
if ($dbconn->connect_error){
	die("Could Not Connect: ".$conn->connect_error);
}

?>