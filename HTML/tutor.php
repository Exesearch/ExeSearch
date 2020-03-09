<?php
session_start();

if (isset($_SESSION['message'])) {
  $message=$_SESSION['message'];
}

require("./connection.php");

$sql="SELECT * FROM team;";

$result=$conn->query($sql);
if ($result->num_rows>0) {
  while ($row=$result->fetch_assoc()) {
    $rows[] = $row;
  }
}else {
  echo "Empty data" . "<br/>";
}

$conn->close();

 ?>
<!DOCTYPE html>
<html >
  <head>
    <!--Metadata-->
	  <meta charset="utf-8">
    <meta name="description" content="Scoreboard Page">
    <meta name="author" content="Kenta">
	  <meta name="contributors" content="Sophie, Yashaswi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	  <link rel="stylesheet" type="text/css" href="util.css">
	  <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="style.css">

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="js/main.js"></script>

    <style>

    #navigationBar a {
     	    color: #edffee;
     	    text-decoration: none;
     	    padding-right: 60px;

     	}

    #navigationBar ul {
     	    margin: 0px;
     	    padding: 0px;
     	    list-style: none;
           display: block;
     	}

    #navigationBar ul li {
      	    float: left;
      	    width: 25%;
      	    height: 40px;
      	    line-height: 40px;
      	    text-align: center;
      	    background-color: #edffee;
      	    border-top: 2px #edffee solid;
      	    border-bottom: 2px #edffee solid;
      	    border-radius: 15px;
      	    margin-bottom: 1px;
      	}

    #navigationBar ul li a {
           display: block;
           opacity: 0;
     	}

    #navigationBar ul li:hover ul li {
     	    display: block;
     	}

    #navigationBar li.profile-icon {
     	    background-image: url("profile.png");
     	    background-size: contain;
     	    background-repeat: no-repeat;
     	    background-position: center;

     	}

    #navigationBar li.quiz-icon {
     	    background-image: url("quiz.png");
     	    background-size: contain;
     	    background-repeat: no-repeat;
     	    background-position: center;
     	}

    #navigationBar li.scoreb-icon {
     	    background-image: url("scoreboard.png");
     	    background-size: contain;
     	    background-repeat: no-repeat;
     	    background-position: center;
     	}

    #navigationBar li.faq-icon {
     	    background-image: url("faq.png");
     	    background-size: contain;
     	    background-repeat: no-repeat;
     	    background-position: center;
     	}



      .description p {
        font-size: 20px;
        padding-top: 7px;
        margin-bottom: 7px;
        padding-bottom: 7px;
        text-align: center;
        color: white;
      }

      .active {
        background-color: #4CAF50;
      }

      .form_1{
        margin-top: 1%;
        margin-left: 7%;
        /*
        border: solid 2px black;
        */
        width: 90%;
        display: inline-flex;
        padding-bottom: 10px;
      }

      .form_1 p {
        margin-left: 8px;
        font-size: 15px;
        width:10px;
        color: white;
        
      }

      .form_1 input[type=text] {
        width: 75px;
        margin-top: 18px;
        height: 20px;

      }

      .form_1 input[type=submit]{
        margin-top: 18px;
        height: 10px;
        margin-left: 5px;
        font-size: 20px;
      }

      .form_1 input[type=submit]:hover {
        color: #737373;

      }

      .team_making #Adding {
        font-size: 30px;
        margin-bottom: 0%;
        margin-top: 2px;
        padding-left: 7%;
        color: white;
      }

      .team_making #Delete {
        font-size: 30px;
        margin-bottom: 0%;
        margin-top: 2px;
        padding-left: 7%;
        color: white;
      }
    </style>

    <title>Tutor Page</title>
  </head>
  <body>
    <h1>ExeSearch</h1>

    <nav id="navigationBar">
      <ul>
        <li class="profile-icon"><a href="profile.php">Profile</a></li>
        <li class="quiz-icon"><a href="quiz.html">Quiz</a></li>
        <li class="scoreb-icon"><a href="scoreboard.php">Scoreboard</a></li>
        <li class="faq-icon"><a href="FAQ.html">FAQ</a></li>
      </ul>
    </nav>

    <h2>Teams</h2>

    <div class=description>
      <p>You can create a team of your turtorial group by giving a team name, your tutor ID, and at least 5 students university username.</p>
      <p>Please write their username correctly to let them be in your team.</p>
    </div>

    <div class="limiter">
      <div class="container-table1">
  			<div class="wrap-table1">
  				<div class="table1 ver1 m-b-110">
  					<div class="table1-head">
  						<table>
  							<thead>
  								<tr class="row100 head">
  									<th class="cell100 column2">TeamName</th>
  									<th class="cell100 column3">tutorID</th>
                    <th class="cell100 column4">member</th>
                    <th class="cell100 column5">member</th>
                    <th class="cell100 column6">member</th>
                    <th class="cell100 column7">member</th>
                    <th class="cell100 column8">member</th>
                    <th class="cell100 column9">member</th>
                    <th class="cell100 column10">member</th>
                    <th class="cell100 column11">member</th>
                    <th class="cell100 column12">member</th>
                    <th class="cell100 column13">member</th>
  								</tr>
  							</thead>
  						</table>
  					</div>

  				<div class="table1-body js-pscroll">
  						<table>
  							<tbody>
  								<tr class="row100 body">
                    <?php


                    foreach($rows as $row){
                      ?>
                      <tr>
                        <td class="cell100 column2"><?php echo $row['teamName']; ?></td>
                        <td class="cell100 column3"><?php echo ($row['tutorID']); ?></td>
                        <td class="cell100 column4"><?php echo ($row['member1']); ?></td>
                        <td class="cell100 column5"><?php echo ($row['member2']); ?></td>
                        <td class="cell100 column6"><?php echo ($row['member3']); ?></td>
                        <td class="cell100 column7"><?php echo ($row['member4']); ?></td>
                        <td class="cell100 column8"><?php echo ($row['member5']); ?></td>
                        <td class="cell100 column9"><?php echo ($row['member6']); ?></td>
                        <td class="cell100 column10"><?php echo ($row['member7']); ?></td>
                        <td class="cell100 column11"><?php echo ($row['member8']); ?></td>
                        <td class="cell100 column12"><?php echo ($row['member9']); ?></td>
                        <td class="cell100 column13"><?php echo ($row['member10']); ?></td>
                      </tr>
                      <?php
                      $num+=1;
                    }
                    ?>
  								</tr>
  							</tbody>
  						</table>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>


    <?php
    if (isset($message)) {
      echo "<p1>$message</p1>";
      unset($_SESSION['message']);
    };?>


    <div class="team_making">
        <p id="Adding">Add a new team:</p>
        <form class="form_1" name="add" action="team_modification.php" method="post">
        <p>TeamName:</p>
        <input type="text" name="team_name" value="">
        <p>Tutor'sID:</p>
        <input type="text" name="tutor_ID" value="">
        <p>Username:</p>
        <input type="text" name="member1" value="">
        <p>Username:</p>
        <input type="text" name="member2" value="">
        <p>Username:</p>
        <input type="text" name="member3" value="">
        <p>Username:</p>
        <input type="text" name="member4" value="">
        <p>Username:</p>
        <input type="text" name="member5" value="">
        <p>Username:</p>
        <input type="text" name="member6" value="">
        <p>Username:</p>
        <input type="text" name="member7" value="">
        <p>Username:</p>
        <input type="text" name="member8" value="">
        <p>Username:</p>
        <input type="text" name="member9" value="">
        <p>Username:</p>
        <input type="text" name="member10" value="">
        <input name="add" type="submit" value="add">
      </form>
      <p id="Delete">Delete a team:</p>
      <form class="form_1" name="delete" action="team_modification.php" method="post">
        <p>TeamName:</p>
        <input type="text" name="delete_team" value="">
        <input name="delete" type="submit" value="delete">
    </div>

  </body>
</html>
