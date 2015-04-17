<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta class="foundation-data-attribute-namespace">
	<meta class="foundation-mq-xxlarge">
	<meta class="foundation-mq-xlarge-only">
	<meta class="foundation-mq-xlarge">
	<meta class="foundation-mq-large-only">
	<meta class="foundation-mq-large">
	<meta class="foundation-mq-medium-only">
	<meta class="foundation-mq-medium">
	<meta class="foundation-mq-small-only">
	<meta class="foundation-mq-small">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>RDF-Demo</title>

	<link href='http://fonts.googleapis.com/css?family=Nova+Mono&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href="./css/style.css" rel="stylesheet" type="text/css">
	<link href="./css/foundation.css" rel="stylesheet">
	<link href="./css/normalize.css" rel="stylesheet">
	<script src="./js/foundation.min.js"></script>
	<script src="./js/vendor/jquery.js"></script>


	<link href='http://fonts.googleapis.com/css?family=Nova+Mono&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<link href="../css/foundation.css" rel="stylesheet">
	<link href="../css/normalize.css" rel="stylesheet">
	<script src="../js/foundation.min.js"></script>
	<script src="../js/vendor/jquery.js"></script>

</head>
<body>
	@include("header")
		@yield("content")
	@include("footer")
</body>
</html>