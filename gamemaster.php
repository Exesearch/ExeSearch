<!DOCTYPE html>
<html>
  <head>

   <!--Metadata-->
   <meta charset="utf-8">
   <meta name="description" content="Scoreboard Page">
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

   .pc-row {
  width: 110%;
  display: table;
  table-layout: fixed;
}

.pc-col {
  display: table-cell;
  vertical-align: top
}

.location-4,
.location-5,
.location-6
 {
  display: none
}

#add-location,
#rm-location {
  margin: 20px 0;
  width: 160px;
  float: left
}

#rm-location {
  width: auto
}

#add-location a,
#rm-location a {
  text-decoration: none;
  color: #000;
  border: 2px solid #990000;
  font-size: 13px;
  padding: 5px
}
   </style>
 </head>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript" href="quiz.js"></script>
 <body>
   <h1>ExeSearch</h1>

   <nav id="navigationBar">
     <ul>
       <li class="profile-icon"><a href="profile.html">Profile</a></li>
       <li class="quiz-icon"><a href="quiz.html">Quiz</a></li>
       <li class="scoreb-icon"><a href="scoreboard.html">Scoreboard</a></li>
       <li class="faq-icon"><a href="FAQ.html">FAQ</a></li>
     </ul>
   </nav>

   <div class="gamemaster-page">
      <div class="gamemaster-form">
        <h1> GAME MASTER </h1>
            <form class= "game-form" action= "blah.php" method = "POST">

                <!--Locations drop down-->
                <div class="pc-row location-1">
                    <h3>Choose location below</h3>
                    <label for="location_one"><span>Location 1</span>
                      <select name="location_1" class="linked-drop-down" required>
                        <option value="">choose location</option>
                        <option value="Cornwall">Cornwall House</option>
                        <option value="Forum">Forum</option>
                        <option value="Harrisons">Harrisons Building</option>
                        <option value="Northcott">NorthCott Theatre</option>
                        <option value="GreatHall">Great Hall</option>
                        <option value="Amory">Amory Building</option>
                      </select>
                    </label>
                    <div class="locations-colors pc-col quote-sizes"><label for = "question_one"><h4>Set Q&A below</h4><span> Question 1: </span>
                      <input type="text" name ="qns1" placeholder = "Question 1" id= "qns1" required> <input type="text" name = "ans1"  placeholder = "Answer 1" id = "ans1" required>
                    </label>
                      <label for = "point_one"><span> Points for Q1: </span>
                    <input type="number" id="quantity" name="pt1" min="1" max="5" required>
                  </label>
                </div>
                  </div>

                    <div class="pc-row location-2">
                        <label for="location_2"><span>Location 2</span>
                          <select name="location_2" class="linked-drop-down" required>
                            <option value="">choose location</option>
                            <option value="Cornwall">Cornwall House</option>
                            <option value="Forum">Forum</option>
                            <option value="Harrisons">Harrisons Building</option>
                            <option value="Northcott">NorthCott Theatre</option>
                            <option value="GreatHall">Great Hall</option>
                            <option value="Amory">Amory Building</option>
                          </select>
                        </label>
                        <div class="locations-colors pc-col quote-sizes"><label for = "question_two"><span> Question 2: </span>
                          <input type="text" name ="qns2" placeholder = "Question 2" id= "qns2" required > <input type="text" name = "ans2" placeholder = "Answer 2" id = "ans2" required>
                        </label>
                        <label for = "point_two"><span> Points for Q2: </span>
                      <input type="number" id="quantity" name="pt2" min="1" max="5" required>
                    </label>
                  </div>
                        </div>

                        <div class="pc-row location-3">
                            <label for="location_3"><span>Location 3</span>
                              <select name="location_3" class="linked-drop-down" required>
                                <option value="">choose location</option>
                                <option value="Cornwall">Cornwall House</option>
                                <option value="Forum">Forum</option>
                                <option value="Harrisons">Harrisons Building</option>
                                <option value="Northcott">NorthCott Theatre</option>
                                <option value="GreatHall">Great Hall</option>
                                <option value="Amory">Amory Building</option>
                              </select>
                            </label>
                            <div class="locations-colors pc-col quote-sizes"><label for = "question_three"><span> Question 3: </span>
                              <input type="text" name ="qns3" placeholder = "Question 3" id= "qns3" required  > <input type="text" name = "ans3" placeholder = "Answer 3" id = "ans3" required>
                            </label>
                            <label for = "point_three"><span> Points for Q3: </span>
                          <input type="number" id="quantity" name="pt3" min="1" max="5" required>
                        </label>
                      </div>
                            </div>

                            <div class="pc-row location-4">
                                <label for="location_4"><span>Location 4</span>
                                  <select name="location_4" id="location_four" class="linked-drop-down">
                                    <option value="">choose location</option>
                                    <option value="Cornwall">Cornwall House</option>
                                    <option value="Forum">Forum</option>
                                    <option value="Harrisons">Harrisons Building</option>
                                    <option value="Northcott">NorthCott Theatre</option>
                                    <option value="GreatHall">Great Hall</option>
                                    <option value="Amory">Amory Building</option>
                                  </select>
                                </label>
                                <div class="locations-colors pc-col quote-sizes"><label for = "question_four"><span> Question 4: </span>
                                  <input type="text" name ="qns4" placeholder = "Question 4" id= "qns4"  > <input type="text" name = "ans4" placeholder = "Answer 4" id = "ans4">
                                </label>
                                <label for = "point_three"><span> Points for Q4: </span>
                              <input type="number" id="quantity" name="pt4" min="1" max="5">
                            </label>
                          </div>

                                </div>

                                <div class="pc-row location-5">
                                    <label for="location_five"><span>Location 5</span>
                                      <select name="location_5" id="location_five" class="linked-drop-down">
                                        <option value="">choose location</option>
                                        <option value="Cornwall">Cornwall House</option>
                                        <option value="Forum">Forum</option>
                                        <option value="Harrisons">Harrisons Building</option>
                                        <option value="Northcott">NorthCott Theatre</option>
                                        <option value="GreatHall">Great Hall</option>
                                        <option value="Amory">Amory Building</option>
                                      </select>
                                    </label>
                                    <div class="locations-colors pc-col quote-sizes"><label for = "question_five"><span> Question 5: </span>
                                      <input type="text" name ="qns5" placeholder = "Question 5" id= "qns5"  > <input type="text" name = "ans5" placeholder = "Answer 5" id = "ans5">
                                    </label>
                                    <label for = "point_four"><span> Points for Q5: </span>
                                  <input type="number" id="quantity" name="pt5" min="1" max="5">
                                </label>
                              </div>
                                  </div>

                                  <div class="pc-row location-6">
                                      <label for="location_6"><span>Location 6</span>
                                        <select name="location_6" class="linked-drop-down">
                                          <option value="">choose location</option>
                                          <option value="Cornwall">Cornwall House</option>
                                          <option value="Forum">Forum</option>
                                          <option value="Harrisons">Harrisons Building</option>
                                          <option value="Northcott">NorthCott Theatre</option>
                                          <option value="GreatHall">Great Hall</option>
                                          <option value="Amory">Amory Building</option>
                                        </select>
                                      </label>
                                      <div class="locations-colors pc-col quote-sizes"><label for = "question_six"><span> Question 6: </span>
                                        <input type="text" name ="qns6" placeholder = "Question 6" id= "qns6"  > <input type="text" name = "ans6" placeholder = "Answer 6" id = "ans6">
                                      </label>
                                      <label for = "point_five"><span> Points for Q6: </span>
                                    <input type="number" id="quantity" name="pt6" min="1" max="5">
                                  </label>
                                </div>
                                      </div>


<br />

                <div id="add-location"><a href="javascript:void(0);" class="addonemore">Add one more location</a></div>
                <div id="rm-location"><a href="javascript:void(0);" class="rmone">Remove one location</a></div> <br/>

    			<!--button that will enter the credientials into database-->
                <button type="submit" name="submit" value= "Submit"> Submit </button> <button name="reset" value="Reset" onclick="return confirm('Are you sure you would like to reset the game?');" formnovalidate>Reset The Game</button>
            </form>
            </div>
            </div>

          <script>

            var i=3;
var disables = {
  Cornwall: ["Cornwall"],
  Forum:["Forum"],
  Harrisons:["Harrisons"],
  Northcott:["Northcott"],
  GreatHall:["GreatHall"],
  Amory:["Amory"]
}
$(".addonemore").click(function() {
  if (i > 7) {
    alert("You can add only a maximum of 7 locations");
  } else {
    i++;
    $('.location-' + i).css({
      'display': 'table'
    });
  }
});
$(".rmone").click(function() {
  if (i < 4) {
    alert("You need at least three location");
  } else {
    $('.location-' + i).css({
      'display': 'none'
    }).find("option[value='']").attr({
      'selected': 'selected'
    });
    i--;
  }
});
var selects = $('select[name*="location"]')
selects.change(function() {
  selects.find(":disabled").prop("disabled", false)
  selects.each(function() {
    var v = $(this).val()
    var disable = disables[v] || [v]
    console.log(disable)
    disable.forEach(function(val) {
      console.log(val)
      if (val !== "")
        selects.find("[value='" + val + "']").prop("disabled", true)
    })

  })
});
</script>


  </body>
  </html>
