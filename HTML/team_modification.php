<?php
require("./connection.php");


if (($_POST['team_name']!='')&&($_POST['tutor_name']!='')&&($_POST['member1']!='')&&($_POST['member2']!='')&&($_POST['member3']!='')&&($_POST['member4']!='')&&
($_POST['member5']!='')){
  $team = $_POST['team_name'];
  $tutor = $_POST['tutor_name'];
  $m1 = $_POST['member1'];
  $m2 = $_POST['member2'];
  $m3 = $_POST['member3'];
  $m4 = $_POST['member4'];
  $m5 = $_POST['member5'];
  $m6 = $_POST['member6'];
  $m7 = $_POST['member7'];
  $m8 = $_POST['member8'];
  $m9 = $_POST['member9'];
  $m10 = $_POST['member10'];
  $ID = getID($conn,$tutor);
  $B=tutor_validation($conn,$ID);
  if ($B==TRUE){
    new_item($conn, $team,$m1, $m2, $m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10,$ID);
  }else{
    session_start();
    $error="Error: Tutor's name is invalid.";
    $_SESSION['message']=$error;
    header("Location:./tutor.php");
  }
}else if($_POST['delete_team']!=''){
  $delete=$_POST['delete_team'];
  delete_team($conn,$delete);
}else{
  session_start();
  $error="Error: Please enter TeamName, TutorName, and at least 5 students username to add a team. Or enter a valid TeamName to delete.";
  $_SESSION['message']=$error;
  header("Location:./tutor.php");
}

function tutor_validation($conn,$tutor){
  $sql="SELECT * FROM tutors WHERE tutor_id='$tutor';";
  $result =$conn->query($sql);
  if ($result->num_rows>0) {
    return TRUE;
  }else {
    return FALSE;
  }
}

function new_item($conn, $team, $m1, $m2, $m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10,$tutor) {
  //Insert a new product to the stock table by specifying all informtaion
  $sql="INSERT INTO team VALUES(NULL,'$team',0, '$m1', '$m2', '$m3','$m4','$m5','$m6','$m7','$m8','$m9','$m10','$tutor');";
  $result =$conn->query($sql);
  if ($result=== TRUE)
  {
    header("Location:./tutor.php");
  }
  else
  {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br />";
  }
}

function getID($conn,$tutor_id){
  $sql ="SELECT * FROM tutors WHERE tutor_name='$tutor_id';";
  $result =$conn->query($sql);
  if ($result->num_rows>0) {
    while ($row=$result->fetch_assoc()) {
      $rows[] = $row;
    }
    foreach ($rows as $row){
      return $row['tutor_id'];
    }
  }else {
    return none;
  }

}



function delete_team($conn,$delete){
  $sql ="DELETE FROM team WHERE groupName='$delete';";
  $result =$conn->query($sql);
  if ($result=== TRUE)
  {
    header("Location:./tutor.php");
  }
  else
  {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br />";
  }
}




$conn->close();

 ?>
