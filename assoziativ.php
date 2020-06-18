<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	$tp = array("Montag"=>17.5, "Dienstag"=>23.4, "Mittwoch"=>18.9);
	$tp["Donnerstag"] = 16.5;
	$tp["Freitag"] = 26.1;
	$tp["Samstag"] = 29.4;
	$tp["Sonntag"] = 33.1;
	
	// Ein bestimmtes Element
	echo "<p>" . $tp["Montag"] . "</p>";
	
	//Tabellenkopf
	echo "<table border='1'>";
	echo "<tr><td><b>Wochentag</b></td>";
	echo "<td><b>Temperatur</b></td></tr>";
	//Alle Keys und Values aus dem Feld
	foreach($tp as $name=>$wert)
	{
		echo "<tr><td>$name</td>" . "<td align='right'>$wert</td></tr>";
	}
	echo "</table>";
	
	//Nur Values aus dem Feld, zum Summieren
	$summe = 0;
	foreach($tp as $wert)
	{
		$summe = $summe + $wert;
	}
	echo "<p> Summe: $summe</p>";
?>
</body>
</html>