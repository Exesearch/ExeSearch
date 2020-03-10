<?php
session_start();

//connecting to database
$conn = mysqli_connect("emps-sql.ex.ac.uk","yk326","yk326","yk326","3306");

//setting up variables
$username = $_POST['username'];
$newPassword = md5($_POST['newPassword']);
$repeatnewPassword = md5($_POST['newPassword2']);


if(isset($_POST['submit'])){
	//check two new passwords
	if($newPassword == $repeatnewPassword){
		mysqli_query($conn,"UPDATE Users SET passwd = '$newPassword' WHERE uname= '$username'") or die("change password failed");
		echo("Password Changed");
	}else{
		echo("Passwords dont match!");
	}
}
?>

<!DOCTYPE HTML>
<html>
<link rel="stylesheet" href="style.css">
<head>
    <title>Change Password</title>
    <link rel="stylesheet" href="style.css">

    <!--Metadata-->
    <meta charset="utf-8">
    <meta name="description" content="Change Password Page">
    <meta name="author" content="Ridita Hossain">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <h1>ExeSearch</h1>
</head>
<body>
<h1>Change Password<h1>
 <!--form for Change password-->
<form action='' method='post'>

	<label for= "username">Username:</label>
	<input type="text" name="username" placeholder = "Username" id="username" required>
	<label for= "newPassword">New Password:</label>
	<input type="newPassword" name="newPassword" id="newPassword" required>
	<label for= "newPassword">Repeat New Password:</label>
	<input type="newPassword2" name="newPassword2" id="newPassword2" required>
	<button type="submit" name="submit" value= "Submit">Submit</button>

</form>
</body>
</html>














