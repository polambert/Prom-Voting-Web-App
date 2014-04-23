<?php
  
  /*
    ALL CODE INCLUDED IS WRITTEN UNDER THE OPEN SOURCE SOFTWARE INTIATIVE, PLEASE
    USE THE CODE AS YOU WOULD LIKE. ALL CODE, GUI, IMAGES, AND OTHER DATA INCLUDED IN 
    THIS WEB APP IS OPEN SOURCE. CREATED BY: DAVID JOHNSON AND LYNN SMITH.*/
	
    //CODE STARTS BELOW HERE//

  */

  //getting the connection variables 
  include '../scripts/connection.php';
	
  //connecting to the
  $connection = mysql_connect($databaseHost,$databaseUser,$databasePassword);
		
  //selecting the prom database
  mysql_select_db($databaseName);
	
  /*Since the next 8 functions are exactly the same logic, I will only comment one
  of the functions.*/
  function voteNick(){
    
    //setting the variable to the mysql server 
    $pullKingVotesNick = "SELECT * FROM resultsking WHERE name = 'Nick'";
		
    //running the query and then setting it to a variable
    $runPullKingVotesNick = mysql_query($pullKingVotesNick);
		
    //finds the number of votes or rows matching the canidates name 
    $votesNick = mysql_num_rows($runPullKingVotesNick);
		
    //returning the value
    return $votesNick;
  }
	
  function voteClay(){
	
    $pullKingVotesClay = "SELECT * FROM resultsking WHERE name = 'Clay'";
		
    $runPullKingVotesClay = mysql_query($pullKingVotesClay);
		
    $votesClay = mysql_num_rows($runPullKingVotesClay);
		
    return $votesClay;
  }
	
  function voteTrevor(){
	
    $pullKingVotesTrevor = "SELECT * FROM resultsking WHERE name = 'Trevor'";
		
    $runPullKingVotesTrevor = mysql_query($pullKingVotesTrevor);
		
    $votesTrevor = mysql_num_rows($runPullKingVotesTrevor);
		
    return $votesTrevor;
  }
	
  function voteKyle(){
	
    $pullKingVotesKyle = "SELECT * FROM resultsking WHERE name = 'Kyle'";
		
    $runPullKingVotesKyle = mysql_query($pullKingVotesKyle);
		
    $votesKyle = mysql_num_rows($runPullKingVotesKyle);
		
    return $votesKyle;
  }
		
  function voteJamie(){
	
    $pullKingVotesJamie = "SELECT * FROM resultsqueen WHERE name = 'Jamie'";
		
    $runPullKingVotesJamie = mysql_query($pullKingVotesJamie);
		
    $votesJamie = mysql_num_rows($runPullKingVotesJamie);
		
    return $votesJamie;
  }
	
  function voteChelsea(){
	
    $pullKingVotesChelsea = "SELECT * FROM resultsqueen WHERE name = 'Chelsea'";
		
    $runPullKingVotesChelsea = mysql_query($pullKingVotesChelsea);
		
    $votesChelsea = mysql_num_rows($runPullKingVotesChelsea);
		
    return $votesChelsea;
  }
	
  function voteMeagan(){
	
    $pullKingVotesMeagan = "SELECT * FROM resultsqueen WHERE name = 'Meagan'";
		
    $runPullKingVotesMeagan = mysql_query($pullKingVotesMeagan);
		
    $votesMeagan = mysql_num_rows($runPullKingVotesMeagan);
		
    return $votesMeagan;
  }
	
  /*I have the same thing here where the two functions are about the same so I will only comment the 
  first function.*/
  function currentKing(){
		
    //sets all of the functions to a variable to compare the amount of votes
    $votesNick = voteNick();
    $votesClay = voteClay();
    $votesTrevor = voteTrevor();
    $votesKyle = voteKyle();
		
    //setting up the array
    $kings = array("Nick Headden" => $votesNick, "Clay Pratt" => $votesClay, "Trevor Pickett" => $votesTrevor, "Kyle Brooks" => $votesKyle);
		
    //finding the max value
    $maxs = array_keys($kings, max($kings));
		
    //echoing the key from the max function
    echo $maxs[0];
  }
	
  function currentQueen(){
		
    $votesJamie = voteJamie();
    $votesChelsea = voteChelsea();
    $votesMeagan = voteMeagan();
		
    $queens = array("Jamie Davis" => $votesJamie, "Chelsea Helms" => $votesChelsea, "Meagan Savage" => $votesMeagan);
		
    $maxs = array_keys($queens, max($queens));
		
    echo $maxs[0];
  }
	
  function queenkingRows(){
		
    $findRowsKing = "SELECT * FROM resultsking";
		
    $runFindRowsKing = mysql_query($findRowsKing);
		
    $totalRowsKing = mysql_num_rows($runFindRowsKing); 
		
    $findRowsQueen = "SELECT * FROM resultsqueen";
		
    $runFindRowsQueen = mysql_query($findRowsQueen);
		
    $totalRowsQueen = mysql_num_rows($runFindRowsQueen); 
		
    $totalRows = $totalRowsKing + $totalRowsQueen;
    echo $totalRows;
  }
	
?>
<html>
  <head>
    <title> FMHS Prom Voting </title>
    <link rel="stylesheet" type="text/css" href="../stylesheet.css">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:700' rel='stylesheet' type='text/css'>
  </head>
  <body bgcolor="#506dff">
    <center>
      <div id="wrap">
	<div id="header">
	  <div class="fontHeaderPurple">FMHS Prom</div>
	</div>
	<div id="main">
	  <br>
	  <br>
	  <br>
	  <br>
	  <div class='fontRegularWhite'> Total Votes: <?php queenkingRows(); ?></div>
	  <br>
	  <br>
	  <br>
	  <table width="90%">
	    <tr>
	      <td align="center" width="50%">
		<div class='fontRegularWhite'> Current King is <?php currentKing(); ?></div>
		  <table cellspacing="100" lign="center">
		    <tr>
		      <td width="50%" align="center">
			<div class="imgRounded"><img src="../img/NickHeadden.jpg"></div>
			<br>
			<?php
			
			  echo "<div class='fontRegularWhite'> Nick Headden: ".$votesNick = voteNick()."</div>";

			?>
		      </td>
		      <td width="50%" align="center">
			<div class="imgRounded"><img src="../img/ClayPratt.jpg"></div>
			<br>
			<?php
			
			  echo "<div class='fontRegularWhite'> Clay Pratt: ".$votesClay = voteClay()."</div>";

			?>
		      </td>
		    </tr>
		    <tr>
		      <td width="50%" align="center">
			<div class="imgRounded"><img src="../img/TrevorPickett.jpg"></div>
			<br>
			<?php
			  
			  echo "<div class='fontRegularWhite'> Trevor Pickett: ".$votesTrevor = voteTrevor()."</div>";
			
			?>
		      </td>
		      <td width="50%" align="center">
			<div class="imgRounded"><img src="../img/KyleBrooks.jpg"></div>
			<br>
			<?php
			  
			  echo "<div class='fontRegularWhite'> Kyle Brooks: ".$votesKyle = voteKyle()."</div>";
			
			?>
		      </td>
		    </tr>
		  </table>
		</td>
	      </tr>
	      <tr>
		<td align="center"  width="50%">
		  <div class='fontRegularWhite'> Current Queen is <?php currentQueen(); ?></div>
		  <br>
		  <table cellspacing="100" lign="center">
		    <tr>
		      <td width="50%" align="center">
			<div class="imgRounded"><img src="../img/JamieDavis.jpg"></div></a>
			<br>
			<?php
			
			  echo "<div class='fontRegularWhite'> Jamie Davis: ".$votesJamie = voteJamie()."</div>";

			?>
		      </td>
		    </tr>
	    	    <tr>
		      <td width="50%" align="center">
			<div class="imgRounded"><img src="../img/ChelseaHelms.jpg"></div></a>
			<br>
			<?php
			  
			  echo "<div class='fontRegularWhite'> Chelsea Helms: ".$votesChelsea = voteChelsea()."</div>";
			
			?>
		      </td>
		      <td width="50%" align="center">
			<div class="imgRounded"><img src="../img/MeaganSavage.jpg"></div></a>
			<br>
			<?php
										  
			  echo "<div class='fontRegularWhite'> Meagan Savage: ".$votesMeagan = voteMeagan()."</div>";
			
			?>
		      </td>
		    </tr>
		  </table>
		</td>
	      </tr>
	    </table>
	    <br>
	    <br>
	    <br>
	    <br>
	    <div class="fontFooterWhite">Created by David Johnson | Graphics by Lynn Smith</div>
	    <br>
	  </div>
	</div>
    </center>
  </body>
</html>
