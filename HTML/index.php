<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" href="style.css">
	
	<!--Metadata-->
	<meta charset="utf-8">
    <meta name="description" content="Login and Registration Page">
    <meta name="author" content="Ridita Hossain">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<h1>ExeSearch</h1>
<body>

<div class="login-page">
    <div class="form">
	  <!--form for registration form-->
        <form class= "register-form" action= "register.php" method = "POST">
            <input type="text" name ="forename" placeholder = "Forename" id= "forename" required>
            <input type="text" name="surname" placeholder = "Surname" id="surname" required>
            <input type="text" name="username" placeholder = "Username" id="username" required>
            <input type="password" name="password" placeholder = "Password" id="password" required>
            <input type="email" name="email" placeholder = "Email" id="email" required>
            <!--to account for three different users-->
			<input type="text"  name="occupation" placeholder = "Occupation" id="occupation" required>
			<!--button that will enter the credientials into database-->
            <button type="submit" name="submit" value= "Submit">Submit</button>
			<!--this will take user to login form if they are already registered-->
            <p class="message">Already Registered? <a href="#">Login</a></p>
        </form>

        <!--form for login form-->
        <form class="login-form" action= "register.php" method= "POST">
            <input type="text" name="username" placeholder = "Username" id="username" required>
            <input type="password" name="password" placeholder = "Password" id="password" required>
			<button type="submit" name="login_user" value= "Submit">Login</button>
            <p class="message">Not Registered? <a href="#">Register</a></p>
        </form>

        <!--code to switch between login and registration form, acts like a toggle-->
        <script src='https://code.jquery.com/jquery-3.4.1.min.js'>
        </script>

        <script>
            $('.message a').click(function(){
                $('form').animate({height:"toggle",opacity:"toggle"},"slow");
            });
        </script>

    </div>
</div>
	</body>
</html>
