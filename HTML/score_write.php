/*Writes the data sent through the GET request to the database
  and increments the game progress counter.*/
//Written by: Nell
<?php
	$teamid = $_GET['t'];
	$scoreval = $_GET['s'];
	$connection = mysqli_connect('emps-sql.ex.ac.uk','yk326','yk326','yk326','3306');
	$score_query = "UPDATE team SET score = score + $scoreval WHERE group_id = $teamid;";
	$score_result = mysqli_query($connection, $score_query);
	
	$game_name = $_GET['g'];
	$current_question = $_GET['q'];
	$next_question = $current_question + 1;
	$progress_query = "UPDATE $game_name SET completed = FALSE WHERE question_id = $current_question;";
	$progress_result = mysqli_query($connection, $progress_query);
	$progress_query_2 = "UPDATE $game_name SET completed = TRUE WHERE question_id = $next_question;";
	$progress_result_2 = mysqli_query($connection, $progress_query_2);
?>
