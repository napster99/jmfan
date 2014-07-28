<?php 
	$con = mysql_connect("210.83.80.21","sq_jmfan","jmf123");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

		mysql_select_db("sq_jmfan", $con);

		mysql_query("INSERT INTO Persons (FirstName, LastName, Age) 
		VALUES ('Peter', 'Griffin', '35')");

		mysql_query("INSERT INTO Persons (FirstName, LastName, Age) 
		VALUES ('Glenn', 'Quagmire', '33')");

		mysql_close($con);
?>