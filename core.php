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
		
		//Taking the search data and setting it to a variable
		$nameSearch=$_POST['Name'];
		
		/*This is basically making sure the variables are clean of any malicious code that could harm the server, in this case
		not much security is needed.*/
		htmlentities($nameSearch);
		mysql_real_escape_string($nameSearch);
		
		$searchData="SELECT * FROM Student_Names Where First_Name && Last_Name LIKE '$nameSearch'";
		
		//This line is checking to see how many rows if any have been found from the search query.
		$searchResults=mysql_num_rows($searchData);
		
		/*This block is checking to see if any results did actually come up in the search. If they did it will move into
    a while loop displaying all of the search results, if there are no results for the searched name then it will
    display a message saying no results were found*/
    if($searchResults >= 1){
      while($searchResultsOutput = mysql_fetch_array($searchData)){
				
        /*I give the choice to the user to pick if its there name, obviously this would be on the honor system and 
        an admin will be there to make sure the user votes once. You can simply replace the text and or add an image 
        into the link. I set the search data to a variable, so then I sent the name to the session so I can access 
        it later.*/
        $name = $searchResultsOutput['Name'];
        echo "<a href='voting.php?Name=$Name'><font>I'm this student</font></a>";
				
      }else{
        echo 'Name not found.';
      }
		}
	}
?> 