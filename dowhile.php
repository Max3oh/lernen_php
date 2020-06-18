<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	srand((double)microtime()*1000000);
	$summe = 26;
	do																		// Schleife wird mindesten 1 mal ausgeführt auch wenn der Wert($summe) am anfang den "while" -wert übertrifft
	{
		$zufallszahl = rand(1,6);
		$summe = $summe + $zufallszahl;
		echo "Zahl $zufallszahl, Summe $summe<br/>";
	}
	while ($summe < 25);
?>
</body>
</html>