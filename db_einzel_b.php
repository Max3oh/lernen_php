<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	if(isset($_POST["auswahl"]))
	{
		$con = mysqli_connect("", "root");
		mysqli_select_db($con, "firma");
		$sql = "select * from personen where personalnummer = " . $_POST["auswahl"];
		$res = mysqli_query($con, $sql);
		$dsatz = mysqli_fetch_assoc($res);
		
		echo "Führen Sie die Änderung durch,<br/>";
		echo "betätigen Sie anschließend den Button</p>";
		echo "<form action='db_einzel_c.php' method='post'>";
		
		echo "<p><input name='nn' value='" . $dsatz["name"] . "' />Nachname</p>";
		echo "<p><input name='vn' value='" . $dsatz["vorname"] . "' />Vorname</p>";
		echo "<p><input name='pn' value='" . $dsatz["personalnummer"] . "' />Personalnummer</p>";
		echo "<p><input name='ge' value='" . $dsatz["gehalt"] . "' />Gehalt</p>";
		echo "<p><input name='gt' value='" . $dsatz["geburtstag"] . "' />Geburtstag</p>";
		echo "<p><input type='hidden' name='orpin' value='" . $_POST["auswahl"] . "' />";
		echo "<p><input type='submit' value='Änderung in Datenbank speichern' />";
		echo "<p><input type='reset' /></p>";
		echo "</form>";
		
		mysqli_close($con);
	}
	else
		echo "<p>Es wurde kein Datensatz ausgewählt</p>";
?>
</body>
</html>