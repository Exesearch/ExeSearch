<?php
/*
 * @author Ridita Hossain 
 */

session_start();
$conn = mysqli_connect("emps-sql.ex.ac.uk","yk326","yk326","yk326","3306");

//intiliazing error variable
$errors = array();

//REGISTRATION USER
// if submit was clicked then get the credintials and store in variables
if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $occupation = $_POST['occupation'];
    $email = $_POST['email'];


    //form validation ensure that form is correctly filled and array push puts the error in the $erros array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
    if (empty($occupation)) { array_push($errors, "Occupation is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email

    $user_check_query = "SELECT * FROM Users WHERE uname='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['uname'] === $username) {
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
        $query = mysqli_query($conn, "INSERT INTO Users(uname,passwd,email,occupation) 
										VALUES('$username','$hashed_password','$email','$occupation')");

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: profile.php');
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
        $query = "SELECT * FROM Users WHERE uname='$username' AND passwd='$hashed_password2'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: profile.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}


// Check user login or not
if(!isset($_SESSION['username'])){
    header('Location: index.php');
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

