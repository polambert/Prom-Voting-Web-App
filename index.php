<!--
ALL CODE INCLUDED IS WRITTEN UNDER THE OPEN SOURCE SOFTWARE INTIATIVE, PLEASE
USE THE CODE AS YOU WOULD LIKE. ALL CODE, GUI, IMAGES, AND OTHER DATA INCLUDED IN 
THIS WEB APP IS OPEN SOURCE. CREATED BY: DAVID JOHNSON AND LYNN SMITH.*/
	
//CODE STARTS BELOW HERE//
-->
<?php
	if (isset($_POST['studentName'])){
	
		$name = $_POST['studentName'];
		
		$databaseHost = "localhost";
		$databaseUser = "root";
		$databasePassword = "";
		$databaseName = "prom";
		
		$connection = mysql_connect($databaseHost,$databaseUser,$databasePassword);
		
		mysql_select_db($databaseName);
		
		$findStudent = "SELECT name FROM promnames WHERE name LIKE '%".$name."%'";
		
		$runFindStudent = mysql_query($findStudent);
		
		$rowsFound = mysql_num_rows($runFindStudent);
		
	}
?>
<html>
  <head>
    <title> FMHS Prom Voting </title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:700' rel='stylesheet' type='text/css'>
  </head>
  <body bgcolor="#9B59B6">
		<center>
			<div id="wrap">
				<div id="header">
					<div class="fontHeaderWhite">FMHS Prom</div>
				</div>
				<div id="main">
					<br>
					<br>
					<div class="fontHeaderWhite">Search your first or last name</div>
					<br>
					<form method="POST" action="index.php">
					<table>
						<tr>
							<td align="center">
								<input class="styleSearchBox" type="text" name="studentName">
							</td>
							<td align="center">
								<input type="image" src="img/search.png" width="150%" class="styleSearchBoxButton">
							</td>
						</tr>
					</table>
					</form>
					<br>
					<br>
					<br>
					<br>
					<?php
						if (isset($_POST['studentName'])){
							if ($rowsFound > 0){
								echo "<br><div class='fontHeaderWhite'> Press the person button is you find your name.</div></br>";								
								while ($names = mysql_fetch_array($runFindStudent)){
									echo "<table><tr><td>";
									echo "<br><div class='fontRegularWhite'>".$names['name']."</div></br></td>";
									$names = $names['name'];
									echo "<td><a href='sub/delete.php?name=$names'><img src='img/name.png' width='150%' class='styleSearchBoxButton'></a></td></tr><table>";
								}
							}
						}
					?>
					<br>
					<br>
					<br>
					<br>
					<div class="fontFooterWhite">Created By David Johnson</div>
				</div>
			</div>
		</center>
  </body>
</html>