<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	/* Für dieses Programm alle Fehler anzeigen */
	ini_set("error_reporting", 32767);
 
	/* Variable Unbekannt */
	$c = 2* $a;
	echo "<p>$c</p>";
	
	/* Division durch 0*/
	$x = 24;
	for($y=4; $y>-3; $y--)
	{
		$z = $x / $y;
		echo "$x / $y = $z<br/>";
	}
	
	/* Zugriff auf Funktion */
	fkt();
	
	echo "Ende";
 
?>
</body>
</html>