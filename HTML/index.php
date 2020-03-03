
<?php

$database = "BLUDB";        # Get these database details from
$hostname = "<dashdb-txn-sbox-yp-lon02-01.services.eu-gb.bluemix.net>";  # the web console
$user     = "<lgt71482 >";   #
$password = "<Password>";   #
$port     = 50000;          #
$ssl_port = 50001;          #

# Build the connection string
#
$driver  = "DRIVER={IBM DB2 ODBC DRIVER};";
$dsn     = "DATABASE=$exesearch; " .
           "HOSTNAME=$lgt71482;" .
           "PORT=$50000; " .
           "PROTOCOL=TCPIP; " .
           "UID=$lgt71482;" .
           "PWD=$password;";
$ssl_dsn = "DATABASE=$database; " .
           "HOSTNAME=$hostname;" .
           "PORT=$ssl_port; " .
           "PROTOCOL=TCPIP; " .
           "UID=$user;" .
           "PWD=$password;" .
           "SECURITY=SSL;";
$conn_string = $driver . $dsn;     # Non-SSL
$conn_string = $driver . $ssl_dsn; # SSL

# Connect
#
$conn = odbc_connect( $conn_string, "", "" );
if( $conn )
{
    echo "Connection succeeded.";

    # Disconnect
    #
    odbc_close( $conn );
}
else
{
    echo "Connection failed.";
}
?>


<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" href="style.css">
	
	<!--Metadata-->
	<meta charset="utf-8">
    <meta name="description" content="Login and Registration Page">
    <meta name="author" content="Ridita Hossain">
	<meta name="contributors" content="Yashaswi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<h1>ExeSearch</h1>
<body>

<div class="login-page">
    <div class="form">
      
	  <!--form for registration form-->
        <form class= "register-form">
            <input type="text" placeholder = "Forename"/>
            <input type="text" placeholder = "Surname"/>
            <input type="text" placeholder = "username"/>
            <input type="text" placeholder = "password"/>
            <input type="text" placeholder = "emailID"/>
            
            <!--to account for three different users-->
	    <input type="text" placeholder = "Occupation"/>
		
            <button>Create</button>
	    <!--this will take user to login form if they are already registered-->
            <p class="message">Already Registered? <a href="#">Login</a>
            </p>
        </form>

        <!--form for login form-->
        <form class="login-form">
            <input type="text" placeholder = "username"/>
            <input type="text" placeholder = "password"/>
            <p class="message">Not Registered? <a href="#">Register</a>
        </form>
		
		<!--Yashaswi added this form action-->
		<form action="quiz.html">
			<input type="submit" value="Login" />
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
</body
</html>
