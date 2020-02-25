<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>EXESEARCH</title>
</head>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript" href="quiz.js"></script>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<body>
    <style>
        #frame001 {
            background-color: white;
            border: 2px solid black;
            border-radius: 10px;
            width: auto;
            height: auto;
            padding: 5px;
        }

        #color001 {
            color: black;
            font-size: large;
            text-align: left;
        }

        #center001 {
            text-align: center;
        }

        .submitbutton {
            background-color: blue;
            color: white;
            border-radius: 10px;
            padding: 5px;
            cursor: pointer;
        }
        .nextbutton {
            background-color: blue;
            color: white;
            border-radius: 10px;
            padding: 5px;
            cursor: pointer;
        }

        .button002 {
            width: 10px;
            height: 10px;
        }
    </style>
    <div id="frame001">
        <div id="color001">
            <div id="center001">
                <h2><strong>EXESEARCH QUIZ</strong></h2>
<div class="questions">Question 1: Which building in the University of Exeter has a tradition of putting a lit Christmas tree on top of it in December?<input id="input001" size="15" /><text class="button002" id="check001"></text><img src="PBtree.png" alt="Physics Building Christmas Tree">
</div><div class="questions">Question 2: To what group does the University of Exeter belong?<input id="input002" size="15" /><text class="button002" id="check002"></text>
</div><div class="questions">Question 3: What is the University of Exeter students' radio station called?<input id="input003" size="15" /> <text class="button002" id="check003"></text>
</div><div class="questions">Question 4: To promote Employability, the University of Exeter promotes something called The _______ Award.<input id="input004" size="15" /><text class="button002" id="check004"></text>
</div><div class="questions">Question 5: In what year did University College of the South West of England receive its Royal Charter and become the University of Exeter?<input id="input005" size="15" /><text class="button002" id="check005"></text>
  </div><div id="center001"><button class="submitbutton" onclick="submitclick()">Submit</button></div><br/>
            <div id="disappear001"><div id="center001"><button class="nextbutton" onclick="submit003()">Next</button></div></div><br/>
            <div id="center001"><p id="message001"></p><p id="reload001"></p></div>
            <div id="center001"><button class= "geoclicker" onclick= "getLocation()">WHERE AM I ?!?! </button></div>
                <br />
                  <p id="locations"></p>
            <br />
            </div>
    </div>


    <script>

    $questions = $('.questions');
    $('.questions').fadeOut();
    $questions.hide();
    var totalQuestions = $('.questions').size();
    var currentQuestion = 0;
    $('.nextbutton').hide();
    $('.geoclicker').hide();
    $('#locations').hide();
    $($questions.get(currentQuestion)).fadeIn();
        var g = 0;
        var h = 0;
        var i = 0;
        var j = 0;
        var k = 0;

        var distance;
        var userLat;
        var userLatRadians;
        var userLong;
        var userLongRadians;
        var targetLatRadians;
        var targetLongRadians;
        var longDifference;

        var radius = 0;
        var targetLat = 0;
        var targetLong = 0;

        var x = document.getElementById("locations");


        function submitclick() {
            b = input001.value;
            c = input002.value;
            d = input003.value;
            e = input004.value;
            f = input005.value;
            if (b == "Physics Building" || b == "physics building" || b == "physics" || b == "Physics") {
                g += 1;
                input001.value = b;
                check001.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input001.value = b;
                check001.innerHTML = "<text class=button002>" + "✖" + "</text>";
                $('.button002').fadeIn();
            }

            if (c == "The Russell Group" || c == "the russell group" || c == "russell group" || c == "Russell Group") {
                h += 1;
                input002.value = c;
                check002.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input002.value = c;
                check002.innerHTML = "<text class=button002>" + "✖" + "</text>";
                $('.button002').fadeIn();
            }

            if (d == "Xpression FM" || d == "Xpression") {
                i += 1;
                input003.value = d;
                check003.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input003.value = d;
                check003.innerHTML = "<text class=button002>" + "✖" + "</text>";
                $('.button002').fadeIn();
            }

            if (e == "Exeter" || e == "exeter") {
                j += 1;
                input004.value = e;
                check004.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input004.value = e;
                check004.innerHTML = "<text class=button002>" + "✖" + "</text>";
                $('.button002').fadeIn();
            }

            if (f == "1955") {
                k += 1;
                input005.value = f;
                check005.innerHTML = "<text class=button002>" + "✔" + "</text>";
            } else {
                input005.value = f;
                check005.innerHTML = "<text class=button002>" + "✖" + "</text>";
                $('.button002').fadeIn();
            }
            if (g == 1)
            {
              message001.innerHTML = "Here is your first location! <br/> Clue 1: I am standing at the bottom of a slope on the University of Exeter Streatham Campus and I am looking up and I can see a silver looking building with 'Students Guild' written on it and as I approach it, there seems to be a club called 'The Lemon Grove' there. Which building am I walking towards?</br> (CLUE IS FOR CORNWALL HOUSE, BUT GPS IS FOR HARRISON BUILDING)"
              $('.button002').fadeIn();
              $('.geoclicker').fadeIn();
              targetLat = 50.737545;
              targetLong = -3.532975;
              radius = 50;

            }

            if (h == 1)
            {
              message001.innerHTML = "Here is your second location! <br/> Clue 2: SOME CLUE I CANT THINK OF RIGHT NOW (FORUM ENTRANCE)"
              $('#message001').fadeIn();
              $('.button002').fadeIn();
              $('.geoclicker').fadeIn();
              targetLat = 50.735437;
              targetLong = -3.534477;
              radius = 70;

            }
            if(i == 1)
            {
              message001.innerHTML = "Here is your third location! <br/> Clue 3: SOME CLUE I CANT THINK OF RIGHT NOW (GREAT HALL)"
              $('#message001').fadeIn();
              $('.button002').fadeIn();
              $('.geoclicker').fadeIn();
              targetLat =50.735793;
              targetLong = -3.535227;
              radius = 70;

            }
            if(j==1)
            {
              message001.innerHTML = "Here is your fourth location! <br/> Clue 4: SOME CLUE I CANT THINK OF RIGHT NOW (NORTHCOTT THEATRE)"
              $('#message001').fadeIn();
              $('.button002').fadeIn();
              $('.geoclicker').fadeIn();
              targetLat = 50.735437;
              targetLong = -3.534477;
              radius = 50;

            }
            if(k==1)
            {
              message001.innerHTML = "Here is your final location! <br/> Clue 5: (NEWMAN BUILDING)"
              $('#message001').fadeIn();
              $('.button002').fadeIn();
              $('.geoclicker').fadeIn();
              targetLat = 50.736367;
              targetLong = -3.535963;
              radius = 50;

            }

            if (g == 5 && h == 4 && i == 3 && j == 2 && k == 1) {
                message001.innerHTML = "Congratulation! You have successfully finished this quiz.";
                disappear001.innerHTML = "";
                alert("YOU WON");
                reload001.innerHTML = "<div id=center001><button class=submitbutton onclick=repeat001()>Repeat</button></div>";
            }
        }

            function repeat001() {
                location.reload();
            }
      $('.nextbutton').click(function submit003() {
      $('.nextbutton').fadeOut();
      $('#message001').fadeOut();
      $('.button002').fadeOut();
      $('.geoclicker').fadeOut();
      $('#locations').fadeOut();
      $($questions.get(currentQuestion)).fadeOut(function () {


        currentQuestion = currentQuestion + 1;

        //if there are no more questions do stuff
        if (currentQuestion == totalQuestions) {

            alert("YOU WON");
            $('#message001').fadeIn();

        } else {

            //otherwise show the next question
            $($questions.get(currentQuestion)).fadeIn();

        }
    });

});



    function checkPermission() {
    	if (navigator.geolocation) {
    		//Ask the user for permission to use location.
    		window.location.href = 'PROFILE PAGE';
    	} else {
    		//If refused, take to another page.
    		window.location.href = 'GPS REFUSAL PAGE';
    	}
    }

    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
      }
    }

    function showPosition(position) {
      userLat = position.coords.latitude;
    	userLong = position.coords.longitude;

      userLatRadians = toRad(userLat);
      targetLatRadians = toRad(targetLat);
      longDifference = toRad(targetLong - userLong);
      earthRadius = 6371000;
      distance = Math.acos( Math.sin(userLatRadians)*Math.sin(targetLatRadians)
    			+ Math.cos(userLatRadians)*Math.cos(targetLatRadians)
    			*Math.cos(longDifference)) * earthRadius;

          if (distance <= radius) {
        		x.innerHTML ="Success!" ;
            $('#locations').fadeIn();
            $('.nextbutton').fadeIn();
        	} else {
        		x.innerHTML ="Failure!";
            $('#locations').fadeIn();
        	}
    }

    function toRad(Value) {
        /** Converts numeric degrees to radians */
        return Value * Math.PI / 180;
    }
    </script>

</body>
</html>
