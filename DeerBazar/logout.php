<?php
	echo"logged out successfully";
	$seconds = -10 + time();
	setcookie(loggedin, date("F jS - g:i a"), $seconds);	
	header("location: index.html");
	
?>