<html>
<meta charset = "utf-8">
<head>
<?php
	function add($z1,$z2)
	{
		$summe = $z1 + $z2;
		return $summe;
	}
?>
</head>
<body>
<?php
	$c = add(3,4);					//aufrufende Stelle -> Variable wird zur Funktion
	echo "Summe: $c<br />";
	
	$x = 5;
	$c = add($x,12);				//aufrufende Stelle
	echo "Summe: $c<br />";
	
	//aufrufende Stelle inerhalb de Ausgabe
	echo "Summe: " . add(13,2) . "<br />";
	
	//Ausgabe in Zeichenkette, FALSCH!!!!
	echo "Summe: add(13,2)";
?>
</body>
</html>