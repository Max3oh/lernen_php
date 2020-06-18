<html>
<meta charset = "utf-8">
<head>
<link rel="stylesheet" href="formate.css">
<title></title>
</head>
<body>
<div id="test">
<?php
	$erg = $_POST["w1"] * $_POST["w1"];
	echo "Das Quadrat von " . $_POST["w1"] . " ist $erg.";
?>
</div>
</body>
</html>