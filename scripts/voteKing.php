<?php
  /*
    ALL CODE INCLUDED IS WRITTEN UNDER THE OPEN SOURCE SOFTWARE INTIATIVE, PLEASE
    USE THE CODE AS YOU WOULD LIKE. ALL CODE, GUI, IMAGES, AND OTHER DATA INCLUDED IN 
    THIS WEB APP IS OPEN SOURCE. CREATED BY: DAVID JOHNSON AND LYNN SMITH.*/
	
    //CODE STARTS BELOW HERE//

  */

  //this is requesting the name for the king 
  $name = $_REQUEST['name'];
	
  //getting the connection variables 
  require 'connection.php';
	
  /*connection variable is set to the connection command for the mysql datavase and
  the connection is made*/
  $connection = mysql_connect($databaseHost,$databaseUser,$databasePassword);
	
  //the mysql command to insert the potential kings name into the database
  $vote = 'INSERT INTO resultsking '.' (name) '."VALUES('$name') ";
	
  //selecting the correct prom database on the server
  mysql_select_db($databaseName);
	
  //running the inserting command
  mysql_query($vote);
	
  //forwarding the user to the end page
  header("Location: ../sub/thanksNext.php");
?>
