<?php
require("./connection.php");

$sql="SELECT teamName, score FROM team ORDER BY score DESC LIMIT 5;";


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
 <html>
   <head>

    <!--Metadata-->
	  <meta charset="utf-8">
    <meta name="description" content="Scoreboard Page">
    <meta name="author" content="Kenta">
	  <meta name="contributors" content="Sophie, Yashaswi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Icons courtesy of Freepik from www.flaticon.com-->
    <!--Static table example used for this website courtesy of https://colorlib.com/wp/template/fixed-header-table/-->

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
  .leaderBoard table{
    margin-left: 20%;
    height: 200px;
    color:#adde82;
    font-size:20px;
  }

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

    .active {
      background-color: #4CAF50;
    }
  </style>
</head>

<body>
  <h1>ExeSearch</h1>

  <nav id="navigationBar">
    <ul>
      <li class="profile-icon"><a href="profile.html">Profile</a></li>
      <li class="quiz-icon"><a href="quiz.html">Quiz</a></li>
      <li class="scoreb-icon"><a href="scoreboard.php">Scoreboard</a></li>
      <li class="faq-icon"><a href="FAQ.html">FAQ</a></li>
    </ul>
  </nav>

  <h2>SCOREBOARD</h2>

  <div class="limiter">
    <div class="container-table1">
			<div class="wrap-table1">
				<div class="table1 ver1 m-b-110">
					<div class="table1-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Rank</th>
									<th class="cell100 column2">Username</th>
									<th class="cell100 column3">Score</th>
								</tr>
							</thead>
						</table>
					</div>

				<div class="table1-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
                  <?php
                  $num=1;
                  foreach($rows as $row){
                    ?>
                    <tr>
                      <td class="cell100 column1"><?php echo $num; ?></td>
                      <td class="cell100 column2"><?php echo $row['teamName']; ?></td>
                      <td class="cell100 column3"><?php echo htmlspecialchars($row['score']); ?></td>
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

  <script>
  $('.js-pscroll').each(function(){
    var ps = new PerfectScrollbar(this);
  $(window).on('resize', function(){
    ps.update();
    })
  });
  </script>

   </body>
 </html>
