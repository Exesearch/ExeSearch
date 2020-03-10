//Code to refresh the page if the game progress changes
//Written by: Nell
function refreshPage() {
	var currentQuestion = 1;
	var nextQuestion = 1;
	if(currentQuestion != nextQuestion) {
		currentQuestion = nextQuestion;
		location.reload(true);
	}
	setTimeout("refreshPage()", 5000); //Run every 5 seconds.
}
