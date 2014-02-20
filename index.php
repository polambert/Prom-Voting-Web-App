<?php
  /*It's Easier to just require the connection file then putting the connection script on every page. All it does is include 
  the database host,user,password,and name. Then it simply connects to the databse. You can add in checking for connection
  errors if you'd like
  */
  require 'connection_Info';
  
  //Taking the search data and setting it to a variable
  $name_Search=$_POST['Name'];
  
  /*This is basically making sure the variables are clean of any malicous code that could harm the server, in this case
  not much security is needed.
  */
  htmlentities($name_Search);
  mysql_real_escape_string($name_Search);
  
  /*This block of code connects to our databse, again if you want to check for errors please do, but I know my server will
  be working. After connecting to our database it runs the search query trying to find the srudents name.*/
  mysql_select_db($db_Name);
  $search_Data="SELECT * FROM Student_Names Where First_Name && Last_Name LIKE '$name_Search'";
  
  //This line is checking to see how many rows if any have been found from the search query.
  $search_Results=mysql_num_rows($search_Data);
?>
<html>
  <head>
    <title> FMHS Prom Voting </title>
  </head>
  <body>
    <?php
      /*This block is checking to see if any results did actually come up in the search. If they did it will move into
      a while loop displaying all of the search results, if there are no results for the searched name then it will
      display a message saying no results were found*/
      if($search_Results>=1){
        while($search_Results_Output){
          echo $search_Results_Output['Name'];
        }
      }else{
        echo 'Name not found.';
      }
    ?>
  </body>
</html>