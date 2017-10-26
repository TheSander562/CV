<!doctype html>
<html lang="en">
<head>
	<?php
		include 'include/head.php';
		$pagina = "muziek";
	?>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link href="/assets/css/muziek.css" id="switch_style" rel="stylesheet">
</head>
<body>

<div class="container">
	<?php
		include 'include/nav.php';
	?>
</div>

<!--<script>
$(document).ready(function() {
    $.getJSON("https://ws.audioscrobbler.com/2.0/?method=chart.getTopArtists&api_key=53d939f79152211d3ca41edcb615e1c4&limit=10&format=json&callback=?", function(json) {
        var html = '';
        $.each(json.artists.artist, function(i, item) {
            html += "<p><a href=" + item.url + " target='_blank'>" + item.name + " - " + "Play count : " +item.playcount + "</a></p>";
        });
        $('#result').append(html);
    });
});
</script>
<div id="result"></div>
<br>-->
<script>
$(document).ready(function() {
    $.getJSON("https://ws.audioscrobbler.com/2.0/?method=chart.getTopTracks&api_key=53d939f79152211d3ca41edcb615e1c4&limit=10&format=json&callback=?", function(json) {
        var html = '';
        $.each(json.tracks.track, function(i, item) {
            html += "<p><a href=" + item.url + " target='_blank'>" + item.name + " - " + "Play count : " +item.playcount + "</a></p>";
        });
        $('#result1').append(html);
    });
});
</script>
<div id="result1"></div>
<footer>
	<?php
		include 'include/footer.php';
	?>
</footer>
<?php
	include 'include/scripts.php';
?>
<script src="/assets/js/start.js"></script>
</body>
</html>
