<!--
ALL CODE INCLUDED IS WRITTEN UNDER THE OPEN SOURCE SOFTWARE INTIATIVE, PLEASE
USE THE CODE AS YOU WOULD LIKE. ALL CODE, GUI, IMAGES, AND OTHER DATA INCLUDED IN 
THIS WEB APP IS OPEN SOURCE. CREATED BY: DAVID JOHNSON*/
	
//CODE STARTS BELOW HERE//
-->
<?php
  
  //if the student submitted a name then the script will run
  if (isset($_POST['studentName'])){
	
    //The post data is set to a variable for easier handling
    $name = $_POST['studentName'];
		
    //requiring the connection information for the scripts
    require 'scripts/connection.php';
		
    //setting a variable to a a mysql connection command, and running the commnad
    $connection = mysql_connect($databaseHost,$databaseUser,$databasePassword);
		
    //selecting the prom database on the server
    mysql_select_db($databaseName);
		
    /*a mysql command to select the name that is most like the name that the student entered,
    this is sort of like a search function only super basic*/
    $findStudent = "SELECT * FROM promnames WHERE name LIKE '%".$name."%'";
		
    //running the basic search command
    $runFindStudent = mysql_query($findStudent);
		
    //finding the number of rows, or in this case students names that are similar 
    $rowsFound = mysql_num_rows($runFindStudent);
		
  }
?>
<html>
  <head>
    <title> FMHS Prom Voting </title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:700' rel='stylesheet' type='text/css'>
  </head>
  <body bgcolor="#6383fc">
    <center>
      <div id="wrap">
	<div id="header">
	  <img src="img/logo.png" alt="logo" width="25%">
	</div>
	<br>
	<br>
	<br>
	<div id="main">
	  <form method="POST" action="index.php">
	      <br>
	      <br>
	      <br>
	      <br>
	      <bR>
	      <br>
	      <table>
		<tr>
		  <td align="center">
		    <input class="styleSearchBox" type="text" name="studentName">
		  </td>
		</tr>
		<tr>
		  <td align="center">
		    <input type="submit" value="Find Me">
		  </td>
		</tr>
	      </table>
	  </form>
		
	  <br>
	  <br>
	  <br>
	  <br>
	  </div>
	  <?php
            
            //if the student submitted a name then the script will run
	    if (isset($_POST['studentName'])){
              
              /*if there was more then one row found then it will run the block of code that displays all of the 
              names that were found*/
	      if ($rowsFound > 0){
                
                //echoing out the instructions for the user
		echo "<br><div class='fontHeaderWhite'> Press the person button is you find your name.</div></br>";	
                
                /*while the array hasn't been completely been echoed out then the echoing process of all the names
                keep going out and*/
		while ($names = mysql_fetch_array($runFindStudent)){
									
                  //starting the table here so its easier to understand
                  echo "<table><tr><td>";
                  
                  //Then it echos the the name inside the first table column
		  echo "<br><div class='fontRegularWhite'>".$names['name']."</div></br></td>";
									
                  //set a variable to the name data that the student clicked/tapped
                  $id = $names['id'];

                  //echoing the image that is actually linked to a delete script 
		  echo "<td><a href='scripts/removeStudent.php?id=$id'><img src='img/name.png' width='150%' class='styleSearchBoxButton'></a></td></tr><table>";
		}
	      }
	      else{
                //if the students name isnt found then a friendly error message is echoed out
		echo "<br><div class='fontHeaderWhite'> Name not found! </div></br>";	
	      }
	    }
	  ?>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  </div>
	</div>
      </center>
  </body>
</html>
