//Code to refresh the page if the game progress changes
//Written by: Nell
function refreshPage(currentQuestion, nextQuestion) {
	if(currentQuestion != nextQuestion) {
		currentQuestion = nextQuestion;
		location.reload(true);
	}
	setTimeout("refreshPage()", 5000); //Run every 5 seconds.
}
