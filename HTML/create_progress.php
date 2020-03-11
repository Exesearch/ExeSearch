//Creates a new column for the team on a game table when they start the game
//Written by: Nell
<?php
	$game_name = $_GET['g'];
	$teamid = $_GET['t'];
	$connection = mysqli_connect("emps-sql.ex.ac.uk,"yk326","yk326","yk326","3306");
	$team_query = "ALTER TABLE $game_name" ADD $teamid VARCHAR(50);
	$team_result = mysqli_query($connection, $team_query);
	$team_query_2 = "UPDATE $game_name SET $teamid = TRUE WHERE question_id = 1";
	$team_result_2 = mysqli_query($connection, $team_query_2);
?>
