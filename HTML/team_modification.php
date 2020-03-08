<?php
require("./connection.php");


if (($_POST['team_name']!='')&&($_POST['tutor_ID']!='')&&($_POST['member1']!='')&&($_POST['member2']!='')&&($_POST['member3']!='')&&($_POST['member4']!='')&&
($_POST['member5']!='')&&($_POST['member6']!='')&&($_POST['member7']!='')&&($_POST['member8']!='')&&($_POST['member9']!='')&&($_POST['member10']!='')) {
  $team = $_POST['team_name'];
  $tutor = $_POST['tutor_ID'];
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
  $B=tutor_validation($conn,$tutor);
  if ($B==TRUE){
    new_item($conn, $team, $tutor, $m1, $m2, $m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10);
  }else{
    echo "NO such tutorID";
  }
}else if($_POST['delete_team']!=''){
  $delete=$_POST['delete_team'];
  delete_team($conn,$delete);
}else{
  header("Location:./tutor.php");
}

function tutor_validation($conn,$tutor){
  $sql="SELECT * FROM tutors WHERE tutorID='$tutor';";
  $result =$conn->query($sql);
  if ($result->num_rows>0) {
    return TRUE;
  }else {
    return FALSE;
  }
}

function new_item($conn, $team, $tutor, $m1, $m2, $m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10) {
  //Insert a new product to the stock table by specifying all informtaion
  $sql="INSERT INTO team VALUES(NULL,'$team',0, '$tutor', '$m1', '$m2', '$m3','$m4','$m5','$m6','$m7','$m8','$m9','$m10');";
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

function delete_team($conn,$delete){
  $sql ="DELETE FROM team WHERE teamName='$delete';";
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
