<?php
session_start();
// Check user login or not
if(!isset($_SESSION['username'])){
    header('Location: profile.php');
}
?>

<!DOCTYPE html>
<link rel="stylesheet" href="style.css">

<head>
    <!--Metadata-->
    <meta charset="utf-8">
    <meta name="description" content="Profile Page">
    <meta name="author" content="Yashaswi">
    <meta name="contributors" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
</head>

<body>
<h1>ExeSearch</h1>

<!--Yashaswi added this navigation bar-->
<nav>
    <ul>
        <li class="profile-icon"><a href="profile.php">Profile</a></li>
        <li class="quiz-icon"><a href="quiz.php">Quiz</a></li>
        <li class="scoreb-icon"><a href="scoreboard.php">Scoreboard</a></li>
        <li class="faq-icon"><a href="FAQ.html">FAQ</a></li>
    </ul>
</nav>

<h2>Welcome <?php echo $_SESSION["username"]; ?></h2>

<div id="frame001">
    <div id="center001">
        <div id ="color001">

            <form class="profile1" action="change_username.php" method="POST">

                <label for="username">Username</label>
                </br>

                <input type="text" id="username" name="username" placeholder="New Username">
                <input type="submit" name="save" value="Save Changes">



                </br>
                </br>
            </form>

            <form name="frmChange" method="POST" action="change_password.php" onSubmit="return validatePassword()">
                <div style="width:500px;">
                    <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
                    <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
                        <tr class="tableheader">
                            <td colspan="2">Change Password</td>
                        </tr>
                        <tr>
                            <td width="40%"><label>Current Password</label></td>
                            <td width="60%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
                        </tr>
                        <tr>
                            <td><label>New Password</label></td>
                            <td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
                        </tr>
                        <td><label>Confirm Password</label></td>
                        <td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="save2" value="Save Changes" class="btnSubmit"></td>
                        </tr>

                        <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>

                        <script>
                            function validatePassword() {
                                var currentPassword,newPassword,confirmPassword,output = true;

                                currentPassword = document.frmChange.currentPassword;
                                newPassword = document.frmChange.newPassword;
                                confirmPassword = document.frmChange.confirmPassword;

                                if(!currentPassword.value) {
                                    currentPassword.focus();
                                    document.getElementById("currentPassword").innerHTML = "required";
                                    output = false;
                                }
                                else if(!newPassword.value) {
                                    newPassword.focus();
                                    document.getElementById("newPassword").innerHTML = "required";
                                    output = false;
                                }
                                else if(!confirmPassword.value) {
                                    confirmPassword.focus();
                                    document.getElementById("confirmPassword").innerHTML = "required";
                                    output = false;
                                }
                                if(newPassword.value != confirmPassword.value) {
                                    newPassword.value="";
                                    confirmPassword.value="";
                                    newPassword.focus();
                                    document.getElementById("confirmPassword").innerHTML = "not same";
                                    output = false;
                                }
                                return output;
                            }
                        </script>
                    </table>
                </div>
            </form>

            <a href="logout.php">Logout</a>

        </div>
    </div>
</div>



</body>
</html>


