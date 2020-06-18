<html>
<body>
<?php
	/*Verbindung Herstellen*/
	$con = mysqli_connect("","root");
	
	/*Datenbank Auswählen*/
	mysqli_select_db($con, "firma");
	
	/*SQL-Abfrage ausführen*/
	$res = mysqli_query($con, "select * from personen");
	
	/*Anzahl Datensätze ermitteln und ausgeben*/
	$num = mysqli_num_rows($res);
	echo "$num Datensätze gefunden<br/>";
	
	/*Datensätze aus Ergebniss ermitteln,*/
	/*in Array speichern und ausgeben*/
	echo "<table border='2'>";
	echo "<tr>";
	echo "<td>Name</td>";
	echo "<td>Vorname</td>";
	echo "<td>Personalnummer</td>";
	echo "<td>Gehalt</td>";
	echo "<td>Gerburtstag</td>";
	echo "</tr>";
	while ($dsatz = mysqli_fetch_assoc($res))
	{
		echo "<tr>";
		echo "<td>" . $dsatz["name"] . "</td>";
		echo "<td>" . $dsatz["vorname"] . "</td>";
		echo "<td>" . $dsatz["personalnummer"] . "</td>";
		echo "<td>" . $dsatz["gehalt"] . "</td>";
		echo "<td>" . $dsatz["geburtstag"] . "</td>";
		echo "</tr>";
	}
	echo "</table>";

	/*Verbindung schließen*/
	mysqli_close($con);
?>
</body>
</html>