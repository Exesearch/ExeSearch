//Code to create the column in game table
//Written by: Nell
function writeScore(team_id, game_name) {
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	}
	xhttp.open("GET", "create_progress.php?t="+team_id+"g="+game_name, true);
	xhttp.send();
}
