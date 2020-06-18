<html>
<meta charset = "utf-8">
<head>
<title>Berechnung von eingegebenen Zahlen durch PHP</title>
</head>
<body>
<?php
	$erg = $_POST["w1"] . $_POST["w3"] . $_POST["w2"];
	echo "Das Ergebniss von " . $_POST["w1"] . $_POST["w3"] . $_POST["w2"] . " ist $erg.";
?>
</body>
</html>