//Code to query the database for game progress
//Written by: Nell
<?php
	require_once("configure.php");
	$connection = mysqli_connect(server,user,pass,database,"3306");
	$next_question_query = "SELECT quid FROM Teams WHERE teamid = userteamid LIMIT 1";
	$next_question_result = mysqli_query($connection, $next_question_query);
	$next_question = fetch_assoc($next_question_result);
	echo $next_question;
?>
