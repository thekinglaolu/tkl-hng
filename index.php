<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello World | HNG</title>
	<link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono" rel="stylesheet"> 
	<style>
		body {
			font-size: 62.5%;
			height: 100vh;
			overflow: hidden;
			display: grid;
			background: #6f3c6f;
		}

		h1 {
			font-family: 'Jua', sans-serif;
			font-size: 10em;
			margin-bottom: 0;
		}

		p {
			font-family: 'IBM Plex Mono', monospace;
			font-size: 3em;
		}

		#center {
			text-align: center;
			margin: auto;
			color: white;
		}
	</style>
</head>
<body>
	
	<div id="center">
		<h1>
			Hello World!
		</h1>
		<?php
			date_default_timezone_set("Africa/Lagos");
			echo '<p> The time is: ' . date("h:i:sa") . '</p>'
		?>
	</div>

</body>
</html>