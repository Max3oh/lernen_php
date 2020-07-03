<html>
<meta charset="utf-8">
<body>
<?php
	$test = $_POST["text"];
	echo "<p>Umwandlungsfunktionen</p>";
	echo "<table border='1'>";
		echo "<tr><td>Funktion</td><td>Erläuterung</td><td>Ergebnis</td></tr>";
		echo "<tr><td>-</td><td>Original</td><td>$test</td></tr>";
		
		$laenge = strlen($test);
		echo "<tr><td>strlen</td><td>Länge</td><td>$laenge</td></tr>";
		
		$klein = strtolower($test);
		echo "<tr><td>strtolower</td><td>Alles klein</td><td>$klein</td></tr>";
		
		$gross = strtoupper($test);
		echo "<tr><td>strtoupper</td><td>Alles groß</td><td>$gross</td></tr>";
		
		$ErstesZeichenGross = ucfirst($test);
		echo "<tr><td>ucfirst</td><td>Erstes Zeichen groß</td><td>$ErstesZeichenGross</td></tr>";
		
		$EZjedesWortesG = ucwords($test);
		echo "<tr><td>ucwords</td><td>Erstes Zeichen jedes Wortes groß</td><td>$EZjedesWortesG</td></tr>";
		
		$umdrehen = strrev($test);
		echo "<tr><td>strrev</td><td>Text umdrehen</td><td>$umdrehen</td></tr>";
		
		$ersetzenBuchstaben = strtr($test,"ao", "AO");
		echo "<tr><td>strtr</td><td>Alle 'a' und 'o' ersetzt durch 'A' und 'O'</td><td>$ersetzenBuchstaben</td></tr>";
		
		$ErsetzenWort = str_replace("hallo","hi",$test);
		echo "<tr><td>str_replace</td><td>Alle 'hallo' ersetzen durch 'hi'</td><td>$ErsetzenWort</td></tr>";
		
	echo "</table>";
?>
</body>
</html>