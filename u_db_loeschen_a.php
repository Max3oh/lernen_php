<html>
<meta charset = "utf-8">
<head>
</head>
<body>
	<p>Wählen Sie einen Datensatz den Sie löschen wollen <br/>und senden Sie das Formular ab:</p>
	<form action="u_db_loeschen_b.php" method="post">
<?php
	$con = mysqli_connect("", "root");
	mysqli_select_db($con, "hardware");
	$res = mysqli_query($con, "select *from fp");
	
	echo "<table border='1'>";
	echo "<tr><td>Auswahl</td><td>Hersteller</td><td>Typ</td><td>Speicherkapazität</td><td>Preis</td><td>Art. NR</td><td>Datum</td></tr>";
	
	while($dsatz = mysqli_fetch_assoc($res))
	{
		echo "<tr><td><input type='radio' name='auswahl' value='" . $dsatz["artnummer"] . "'/></td>";
		echo "<td>" . $dsatz["hersteller"] . "</td>";
		echo "<td>" . $dsatz["typ"] . "</td>";
		echo "<td>" . $dsatz["gb"] . "</td>";
		echo "<td>" . $dsatz["preis"] . "</td>";
		echo "<td>" . $dsatz["artnummer"] . "</td>";
		echo "<td>" . $dsatz["prod"] . "</td></tr>";
	}
	
	mysqli_close($con);
	
	echo "</table>";
	
	echo "<p><input type='submit' name='gesendet' value='Auswahl löschen'/>";
	echo "<input type='reset' /></p>";
?>
</form>
</body>
</html>