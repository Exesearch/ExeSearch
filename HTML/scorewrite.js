//Code to increment the team score - uses a php script
//Written by: Nell
function writeScore(team_id, score_value) {
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {

	}
	xhttp.open("GET", "score_write.php?t="+team_id+"s="+score_value, true);
	xhttp.send();
}
