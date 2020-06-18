<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<table border ="1">
<?php
	/* Würfelspiel */
	srand((double)microtime()*1000000);
	$summe1 = 0;
	$summe2 = 0;
	
	echo "<tr>";
	echo "<td align ='center'>Spieler 1</td>";
	echo "<td align ='center'>Spieler 2</td>";
	echo "</tr>";
	while (($summe1 < 25) && ($summe2 < 25))
	{
		
		$zufallszahl1 = rand(1,6);
		$zufallszahl2 = rand(1,6);
		$summe1 = $summe1 + $zufallszahl1;
		$summe2 = $summe2 + $zufallszahl2;
		echo "<tr>";
		echo "<td align ='center'>$summe1</td>";
		echo "<td align ='center'>$summe2</td>";
		echo "</tr>";
	}
	
?>
</table>
<?php
if (($summe1 >= 25)&&($summe2 >= 25))
	
		echo "<br/>Unentschieden!<br/>Nochmal Würfeln!";
	else
		if ($summe1 >=25)
			echo "<br/>Spieler 1 hat gewonnen!";
	else
		if ($summe2 >= 25)
			echo "<br/>Spieler 2 hat gewonnen!";
?>
</body>
</html>