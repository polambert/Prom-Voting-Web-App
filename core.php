<?php
	
	/*ALL CODE INCLUDED IS WRITTEN UNDER THE OPEN SOURCE SOFTWARE INTIATIVE, PLEASE
	USE THE CODE AS YOU WOULD LIKE. ALL CODE, GUI, IMAGES, AND OTHER DATA INCLUDED IN 
	THIS WEB APP IS OPEN SOURCE. CREATED BY: DAVID JOHNSON AND LYNN SMITH.*/
	
	//CODE STARTS BELOW HERE//
	
	//simply starting the session data can be requested later.
  session_start();

	/*This function is used for connecting to the mysql database that is desired.
	After connecting it selects the database on that server*/
	function connection(){
	
		//Creating the connection variables 
		$dbHost='';
		$dbUser='';
		$dbPassword='';
		$dbName='';
		
		/*This line basically just connections to the mysql server, pretty
		basic protocol*/
		$connection=mysql_connection($dbHost,$dbUser,$dbPassword);
		
		/*selecting the database on the server that was set in the variable 
		"$dbName".*/
		mysql_select_db($dbName);
	}
	
	function nameSubmission(){
		
		
	}
?> 