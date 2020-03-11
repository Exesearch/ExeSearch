<?php
session_start();
// Check user login or not
$conn = mysqli_connect("emps-sql.ex.ac.uk","yk326","yk326","yk326","3306");

//Change Username
if(isset($_POST['save'])) {

    $current_username = $_SESSION["username"];
    $new_username = $_POST['username'];
    $check_username = mysqli_query($conn, "SELECT * FROM Users WHERE uname='$new_username'");

    //Username taken
    if (mysqli_num_rows($check_username) >= 1 || $new_username == $current_username) {

        echo "<script type='text/javascript'>alert('Username taken.');</script>";

        //Username not taken
    } elseif (mysqli_num_rows($check_username) == 0 && $new_username != $current_username) {
        $query = mysqli_query($conn, "UPDATE Users SET uname = '$new_username' 
                                              WHERE uname = '$current_username';");
        $_SESSION["username"] = $new_username;
        echo "<script type='text/javascript'>alert('Username changed.');</script>";

    }
}

//Change Password
if (isset($_POST['save2'])) {

    $current_username = $_SESSION['username'];

    $password_current = $_POST["currentPassword"];
    $password_new_1 = $_POST["newPassword"];
    $password_new_2 = $_POST["confirmPassword"];


    $result = mysqli_query($conn, "SELECT * FROM Users WHERE uname='$current_username'");
    $row = mysqli_fetch_array($result);
    if ((md5($password_current) == $row["passwd"]) && ($password_new_1 == $password_new_2)) {
        $hashed_new_password = md5($password_new_1);
        mysqli_query($conn, "UPDATE Users SET passwd = '$hashed_new_password' WHERE uname = '$current_username';");
        echo "<script type='text/javascript'>alert('Password changed.');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Password not changed.');</script>";
    }
}

if (isset($_POST['start'])){

    header('Location: ./quiz.php');

}
