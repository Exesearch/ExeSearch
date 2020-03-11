<?php
	$connection = mysqli_connect("emps-sql.ex.ac.uk,"yk326","yk326","yk326","3306");
	$next_question_query = "INSERT INTO Users(uname,passwd,email,occupation) VALUES("TESTUSER","rat","rat@hotmail.com","Student");";
	$next_question_result = mysqli_query($connection, $next_question_query);
?>
