<?php
  /*This block of code is just the required values being set to the variables being set to the database then it is making
  a connection without checking for any connection errors. This is mostly used by the require() function throughout the 
  web app.*/
	$db_Host='';
	$db_User='';
	$db_Password='';
	$db_Name='';
	$connection_data=mysql_connection($db_Host,$db_User,$db_Password);
?>