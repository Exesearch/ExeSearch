//Code to refresh the page if the game progress changes
//Written by: Nell
function refreshPage(currentQuestion) {
	var xhttp;
	var nextQuestion = 1;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if(this.readyState === 4 && this.status === 200) {
			nextQuestion = this.responseText;
		}
	};
	xhttp.open("GET", "next_question.php", true);
	xhttp.send();
	if(currentQuestion != nextQuestion) {
		location.reload(true);
	}
	setTimeout("refreshPage(currentQuestion)", 5000); //Run every 5 seconds.
}
