<?php 
	$con = mysql_connect("localhost","root","");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	if (mysql_query("CREATE DATABASE my_db",$con))
	  {
	  echo "Database created";
	  mysql_select_db("my_db", $con);
		$sql = "CREATE TABLE Persons 
		(
			FirstName varchar(15),
			LastName varchar(15),
			Age int
		)";
		mysql_query($sql,$con);
	  }
	else
	  {
	  echo "Error creating database: " . mysql_error();
	  }




	mysql_close($con);
?>