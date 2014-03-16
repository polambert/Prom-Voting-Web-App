<?php
	include '../scripts/connection.php';
	
	$connection = mysql_connect($databaseHost,$databaseUser,$databasePassword);
		
	mysql_select_db($databaseName);
	
	function voteNick(){
	
		$pullKingVotesNick = "SELECT * FROM resultsking WHERE name = 'Nick'";
		
		$runPullKingVotesNick = mysql_query($pullKingVotesNick);
		
		$votesNick = mysql_num_rows($runPullKingVotesNick);
		
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
	
	
	function voteLiza(){
	
		$pullKingVotesLiza = "SELECT * FROM resultsqueen WHERE name = 'Liza'";
		
		$runPullKingVotesLiza = mysql_query($pullKingVotesLiza);
		
		$votesLiza = mysql_num_rows($runPullKingVotesLiza);
		
		return $votesLiza;
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
	
	
	function currentKing(){
		
		$votesNick = voteNick();
		$votesClay = voteClay();
		$votesTrevor = voteTrevor();
		$votesKyle = voteKyle();
		
		$kings = array("Nick Headden" => $votesNick, "Clay Pratt" => $votesClay, "Trevor Pickett" => $votesTrevor, "Kyle Brooks" => $votesKyle);
		
		$maxs = array_keys($kings, max($kings));
		
		echo $maxs[0];
	}
	
	function currentQueen(){
		
		$votesLiza = voteLiza();
		$votesJamie = voteJamie();
		$votesChelsea = voteChelsea();
		$votesMeagan = voteMeagan();
		
		$queens = array("Liza Walker" => $votesLiza, "Jamie Davis" => $votesJamie, "Chelsea Helms" => $votesChelsea, "Meagan Savage" => $votesMeagan);
		
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
  <body bgcolor="#22313F">
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
											<div class="circleDefault"></div>
											<br>
											<?php
												echo "<div class='fontRegularWhite'> Nick Headden: ".$votesNick = voteNick()."</div>";
											?>
										</td>
										<td width="50%" align="center">
											<div class="circleDefault"></div>
											<br>
											<?php
												echo "<div class='fontRegularWhite'> Clay Pratt: ".$votesClay = voteClay()."</div>";
											?>
										</td>
									</tr>
									<tr>
										<td width="50%" align="center">
											<div class="circleDefault"></div>
											<br>
											<?php
												echo "<div class='fontRegularWhite'> Trevor Pickett: ".$votesTrevor = voteTrevor()."</div>";
											?>
										</td>
										<td width="50%" align="center">
											<div class="circleDefault"></div>
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
											<a href="../scripts/voteQueen.php?name=Liza"><div class="circleDefault"></div></a>
											<br>
											<?php
												echo "<div class='fontRegularWhite'> Liza Walker: ".$votesLiza = voteLiza()."</div>";
											?>
										</td>
										<td width="50%" align="center">
											<a href="../scripts/voteQueen.php?name=Jamie"><div class="circleDefault"></div></a>
											<br>
											<?php
												echo "<div class='fontRegularWhite'> Jamie Davis: ".$votesJamie = voteJamie()."</div>";
											?>
										</td>
									</tr>
									<tr>
										<td width="50%" align="center">
											<a href="../scripts/voteQueen.php?name=Chelsea"><div class="circleDefault"></div></a>
											<br>
											<?php
												echo "<div class='fontRegularWhite'> Chelsea Helms: ".$votesChelsea = voteChelsea()."</div>";
											?>
										</td>
										<td width="50%" align="center">
											<a href="../scripts/voteQueen.php?name=Meagan"><div class="circleDefault"></div></a>
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
					<div class="fontFooterWhite">Created By David Johnson</div>
					<br>
				</div>
			</div>
		</center>
  </body>
</html>