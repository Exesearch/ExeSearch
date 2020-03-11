//Code to refresh the page if the game progress changes
//Written by: Nell
<script>
	function writedata() {
		var xhttp;
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if(this.readyState === 4 && this.status === 200) {
				alert("Request Ready");
			}
		}
		xhttp.open("GET", "data_write.php", true);
		xhttp.send();
		alert("Request Sent");
	}
</script>
