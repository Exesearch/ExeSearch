<?php
@author [Ridita Hossain] [<rnh202@exeter.ac.uk>]
session_start();

//establishing connection
$connect = mysqli_connect("127.0.0.1","root","","registration");

//intiliazing error variable 
$errors = array(); 

//REGISTRATION USER
// if submit was clicked then get the credintials and store in variables
if(isset($_POST['submit'])){
	$forename = $_POST['forename'];
	$surname = $_POST['surname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$occupation = $_POST['occupation'];
	
	//form validation ensure that form is correctly filled and array push puts the error in the $erros array
	if (empty($forename)) { array_push($errors, "Forename is required"); }
	if (empty($surname)) { array_push($errors, "Surname is required"); }
	if (empty($username)) { array_push($errors, "Username is required"); }
	if (empty($password)) { array_push($errors, "Password is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($occupation)) { array_push($errors, "Occupation is required"); }
	
	 // first check the database to make sure 
	// a user does not already exist with the same username and/or email
	$user_check_query = "select * from users WHERE username='$username' OR email='$email' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);
  
	if ($user) { // if user exists
		if ($user['username'] === $username) {
		array_push($errors, "Username already exists");
		}

		if ($user['email'] === $email) {
		array_push($errors, "email already exists");
		}
	}
	
	//if there are no errors hash the password for security and then insert data into database
	if(count($errors) == 0){
		//hash password 
		$hashed_password = md5($password);
		//INSERT SQL QUERY
		$query = mysqli_query($connect, "insert into users(forename,surname,username,password,email,occupation) 
										values('$forename','$surname','$username','$hashed_password','$email','$occupation')");
										
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: quiz.html');
	}
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($connect, $_POST['username']);
  $password = mysqli_real_escape_string($connect, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$hashed_password2 = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$hashed_password2'";
  	$results = mysqli_query($connect, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: quiz.html');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}


// Check user login or not
if(!isset($_SESSION['username'])){
    header('Location: indexUpdated.php');
}

//use for profile page
// logout
if(isset($_POST['logout'])){
    session_destroy();
    echo "you have been successfully logged out";
}

?>


<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>


