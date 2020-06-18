<html>
<head>
<title>Übung zur Berechnung mit Variablen</title>
</head>
<body>
<?php
	$artikel1 = 22.5;
	$artikel2 = 12.3;
	$artikel3 = 5.2;
	$brutto = 1.19;
	$gesammtbrutto = ($artikel1 + $artikel2 + $artikel3) * $brutto;
	echo $gesammtbrutto;
?>
</body>
</html>