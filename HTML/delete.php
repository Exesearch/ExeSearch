<?php
/*
 * @author Ridita Hossain 
 */
 
if (!isset($_GET['game_id']))
{
    echo 'No game_id was given...';
    exit;
}

//make connection
//$con = mysqli_connect("emps-sql.ex.ac.uk","yk326","yk326","yk326","3306");
$con = mysqli_connect("127.0.0.1","root","","registration");
if ($con->connect_error)
{
    die('Connect Error (' . $con->connect_errno . ') ' . $con->connect_error);
}


$sql = "DELETE FROM games WHERE game_id = ?";
if (!$result = $con->prepare($sql))
{
    die('Query failed: (' . $con->errno . ') ' . $con->error);
}

if (!$result->bind_param('i', $_GET['game_id']))
{
    die('Binding parameters failed: (' . $result->errno . ') ' . $result->error);
}

if (!$result->execute())
{
    die('Execute failed: (' . $result->errno . ') ' . $result->error);
}

if ($result->affected_rows > 0)
{
    echo "The game_id was deleted with success.";
}
else
{
    echo "Couldn't delete the game_id.";
}
$result->close();
$con->close();

?>