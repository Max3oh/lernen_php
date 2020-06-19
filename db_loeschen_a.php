<html>
<meta charset = "utf-8">
<head>
</head>
<body>
	<p>Wählen Sie aus welcher Datensatz gelöscht werden soll:</p>
	<form action="db_loeschen_b.php" method="post">
<?php
	$con = mysqli_connect("", "root");
	mysqli_select_db($con, "firma");
	$res = mysqli_query($con, "select * from personen order by gehalt desc");
	
	//Tabellenbeginn
	echo "<table border='1'>";
	
	//Tabelle Kopf
	echo "<tr><td>Auswahl</td><td>Name</td><td>Vorname</td><td>P-Nr.</td><td>Gehalt</td><td>Geburtstag</td></tr>";
	
	while ($dsatz = mysqli_fetch_assoc($res))
	{
		echo "<tr>";
		echo "<td><input type='radio' name='auswahl'";
		echo " value='" . $dsatz["personalnummer"] . "' /></td>";
		echo "<td>" . $dsatz["name"] . "</td>";
		echo "<td>" . $dsatz["vorname"] . "</td>";
		echo "<td>" . $dsatz["personalnummer"] . "</td>";
		echo "<td>" . $dsatz["gehalt"] . "</td>";
		echo "<td>" . $dsatz["geburtstag"] . "</td>";
		echo "</tr>";
	}
	
	//Tabellenende
	echo "</table>";

	mysqli_close($con);
?>
	<p><input type="submit" value="Datensatz löschen" /></p>
	</form>
</body>
</html>