<?php
	$connection = mysqli_connect("emps-sql.ex.ac.uk,"yk326","yk326","yk326","3306");
	$next_question_query = "SELECT quid FROM Teams WHERE teamid = userteamid LIMIT 1";
	$next_question_result = mysqli_query($connection, $next_question_query);
	$next_question = fetch_assoc($next_question_result);
	eco $next_question;
?>
