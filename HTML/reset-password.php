<?phpsession_start();//establishing connection$conn = mysqli_connect("emps-sql.ex.ac.uk","yk326","yk326","yk326","3306");//getting the username from database//comparing username from database and inputted username from form//if matched send email using email function if(isset($_POST['submit'])){	$username = $_POST['username'];	$result = mysqli_query($conn,"SELECT * FROM Users where uname='" . $_POST['username'] . "'");	$row = mysqli_fetch_assoc($result);		$fetch_username=$row['uname'];		$email=$row['email'];		$password=$row['passwd'];		if($username==$fetch_username){			$to = $email;			$subject = "Password";			$txt = "Your password is : $password.";			$headers = "From: rnh202@exeter.ac.uk" . "\r\n" .			"CC: rnh202@exeter.ac.uk";			mail($to,$subject,$txt,$headers);		}else{			echo 'invalid username';		}			}?><!DOCTYPE HTML><html><head>    <title>Forgot Password</title>    <link rel="stylesheet" href="style.css">    <!--Metadata-->    <meta charset="utf-8">    <meta name="description" content="Forgot Password Page">    <meta name="author" content="Ridita Hossain">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <h1>ExeSearch</h1></head><body><h1>Forgot Password<h1> <!--form for forgot password--><form action='' method='post'>	<input type="text" name="username" placeholder = "Username" id="username" required>	<button type="submit" name="submit" value= "Submit">Submit</button></form></body></html>