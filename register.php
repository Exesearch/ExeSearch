<?php

$conn = mysqli_connect("emps-sql.ex.ac.uk","yk326","yk326","yk326","3306");
session_start();


//intializing error variable
$errors = array();

//REGISTRATION USER
// if submit was clicked then get the credentials and store in variables
if(isset($_POST['submit'])){
    $forename = $_POST['forename'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $occupation = $_POST['occupation'];
    $private_key = $_POST['private_key'];

    //form validation ensure that form is correctly filled and array push puts the error in the $erros array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($occupation)) { array_push($errors, "Occupation is required"); }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = $conn->prepare"select * from users WHERE username=?";
    $email_check_query = $conn->prepare"select * from users WHERE email=?";
    $user_check_query->bindparam("s", $username);
    $email_check_query->bindparam("s", $email);
    $result = mysqli_query($conn, $user_check_query);
    $usercount = mysqli_num_rows($result);
    $result = mysqli_query($conn, $email_check_query);
    $emailcount = mysqli_num_rows($result);
    if ($usercount > 0) {
        array_push($errors, "Username already exists");
    } elseif ($emailcount > 0) {
        array_push($errors, "Email already exists");
    }

    if($occupation == "Tutor" && $private_key != "secret1"){
        array_push($errors, "Private key is incorrect!");
    } elseif ($occupation == "Gamemaster" && $private_key != "secret2"){
        array_push($errors, "Private key is incorrect!");
    }

    //if there are no errors hash the password for security and then insert data into database
    if(count($errors) == 0){
        //hash password
        $hashed_password = md5($password);
        //INSERT SQL QUERY
        $query = mysqli_query($conn, "insert into Users(uname, passwd, email_id, occupation) 
				values('$username','$hashed_password','$email','$occupation')");

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: quiz.html');
    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $hashed_password2 = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$hashed_password2'";
        $results = mysqli_query($conn, $query);
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
    header('Location: index.html');
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

