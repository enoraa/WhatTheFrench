<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="page.css">
	<title>Quizes</title>
</head>
<body>
	<?php 
		include("header.php");
	?>
	<div class="maincontent">
		<div class="cadre">
			<div id="firstside">
				<p id="french"></p>
			</div>
			<div id="secondcard">
				<div id="secondside">
					<p id="english"></p>
				</div>
				<div id="shadowbox"></div>
			</div>
			<div id="buttons">
				<button id="btn1" onclick="change()">></button>
				<button onclick="turn()">Answer</button>
			</div>
		</div>
	</div>
	<?php 
		include("footer.php");
	?>
<script src="website.js"></script>
</body>
</html>