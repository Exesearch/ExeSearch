//Tests if a column exists in the table
//Written by: Nell
<?php
	$game_name = $_GET['g'];
	$teamid = $_GET['t'];
	$connection = mysqli_connect("emps-sql.ex.ac.uk,"yk326","yk326","yk326","3306");
	$column_query = "SELECT * FROM $game_name WHERE group_id = $teamid;";
	$column_result = mysqli_query($connection, $column_query);
  $column_count = mysqli_num_rows($column_result);
  if($column_count > 0) {
    echo "FALSE";
  } else {
    echo "TRUE";
  }
?>
