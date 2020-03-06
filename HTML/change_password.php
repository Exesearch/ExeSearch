<?php
session_start();
$conn = mysqli_connect("emps-sql.ex.ac.uk","yk326","yk326","yk326","3306");

$current_username = $_SESSION['username'];

$password_current = $_POST["currentPassword"];
$password_new_1 = $_POST["newPassword"];
$password_new_2= $_POST["confirmPassword"];

if (isset($_POST['save2'])) {
    $result = mysqli_query($conn, "SELECT * FROM Users WHERE uname='$current_username'");
    $row = mysqli_fetch_array($result);
    if ((md5($password_current) == $row["passwd"]) && ($password_new_1 == $password_new_2)) {
        $hashed_new_password = md5($password_new_1);
        mysqli_query($conn, "UPDATE Users SET passwd = '$hashed_new_password' WHERE uname = '$current_username';");
        $message = "Password Changed";
        header('Location: profile.php');
    } else
        $message = "Current Password is not correct";
        header('Location: profile.php');
}

