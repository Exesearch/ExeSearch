//Writes the data sent through the GET request to the database
//Written by: Nell
<?php
	$teamid = $_GET['t'];
	$scoreval = $_GET['s'];
	$connection = mysqli_connect("emps-sql.ex.ac.uk,"yk326","yk326","yk326","3306");
	$score_query = "UPDATE team SET score = score + $scoreval WHERE group_id = $teamid;";
	$score_result = mysqli_query($connection, $score_query);
?>
