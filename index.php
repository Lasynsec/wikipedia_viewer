<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html>
	<head>
		 <meta charset="UTF-8">
		 <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet'>
         <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp2/css/bootstrap.min.css" rel="stylesheet">
		 <link rel="stylesheet" type="text/css" href="viewer.css">
		 <title>Wikipedia Viewer</title>
	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<a id="randomView">Click here for a random Article</a>
					<form id="">
						<input type="text"/>
						<input type="submit" value="Find"/>
					</form>
					<p id="test"></p>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="viewer.js"></script>
	</body>
</html>