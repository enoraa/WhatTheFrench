<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="page.css">
	<title>What The French</title>
</head>
<body>
	<?php 
		include("header.php");
	?>
	<div class="maincontent">
		<div class="cadre">
			<p id="date"><?php
				include ("date.php");
			?></p>
			<p>Un peu de musique française pour commencer.</p>
			<p class="translation">A bit of French musique to start.</p>
		<iframe id="spotify" src="https://open.spotify.com/embed/playlist/2sk8xNt1IHG9zOgf4mAf2r?utm_source=generator" width="100%" height="430" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
		</div>
	</div>
	<?php 
		include("footer.php");
	?>
<script src="website.js"></script>
</body>
</html>