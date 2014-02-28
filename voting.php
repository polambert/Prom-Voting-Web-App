<?php
  /*ALL CODE INCLUDED IS WRITTEN UNDER THE OPEN SOURCE SOFTWARE INTIATIVE, PLEASE
	USE THE CODE AS YOU WOULD LIKE. ALL CODE, GUI, IMAGES, AND OTHER DATA INCLUDED IN 
	THIS WEB APP IS OPEN SOURCE. CREATED BY: DAVID JOHNSON AND LYNN SMITH.*/
	
	//CODE STARTS BELOW HERE//
 
  //simply starting the session so I can request data later.
  session_start();

  /*It's Easier to just require the connection file then putting the connection script on every page. All it does is include 
  the database host,user,password,and name. Then it simply connects to the databse. You can add in checking for connection
  errors if you'd like.
  */
  require 'connection_Info';
  
  //I request the name that was sent and set it to a variable, so it can be deleted from the database later.
  $_REQUEST['Name'];
  
  //Waiting on GUI to be finished to continue any more.
?>
<html>
  <head>
    <title>FMHS Prom Voting</title>
  </head>
  <body>
  </body>
</html>
