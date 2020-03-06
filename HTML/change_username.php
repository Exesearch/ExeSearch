<?php
session_start();
// Check user login or not
$conn = mysqli_connect("emps-sql.ex.ac.uk","yk326","yk326","yk326","3306");

if(!isset($_SESSION['username'])){
    header('Location: index.php');
}

if(isset($_POST['save'])) {

    $current_username = $_SESSION["username"];
    $new_username = $_POST['username'];
    $check_username = mysqli_query($conn, "SELECT * FROM Users WHERE uname='$new_username'");

    if (mysqli_num_rows($check_username)>=1 && $new_username != $current_username) {
        header('Location: profile.php');

    } elseif (mysqli_num_rows($query)==0 && $new_username != $current_username) {
        $query = mysqli_query($conn, "UPDATE Users SET uname = '$new_username' 
                                              WHERE uname = '$current_username';");
        $_SESSION["username"] = $new_username;
        header('Location: profile.php');
            }


}
?>