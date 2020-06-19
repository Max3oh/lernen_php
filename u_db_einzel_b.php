<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	if(isset($_POST["auswahl"]))
	{
		$con = mysqli_connect("", "root");
		mysqli_select_db($con, "hardware");
		$sql = "select * from fp where artnummer ='" . $_POST["auswahl"] . "'";
		$res = mysqli_query($con, $sql);
		$dsatz = mysqli_fetch_assoc($res);
		
		echo "Führen Sie die Änderung durch,<br/>";
		echo "betätigen Sie anschließend den Button</p>";
		echo "<form action='u_db_einzel_c.php' method='post'>";


		echo "<p><input name='her' value='" . $dsatz["hersteller"] . "' />Hersteller</p>";
		echo "<p><input name='typ' value='" . $dsatz["typ"] . "' />Typ</p>";
		echo "<p><input name='gb' value='" . $dsatz["gb"] . "' />Speicherkapazität</p>";
		echo "<p><input name='pr' value='" . $dsatz["preis"] . "' />Preis</p>";
		echo "<p><input name='id' value='" . $dsatz["artnummer"] . "' />Artikell ID</p>";
		echo "<p><input name='dat' value='" . $dsatz["prod"] . "' />Herstellungsdatum</p>";
		echo "<p><input type='hidden' name='orart' value='" . $_POST["auswahl"] . "'/></p>";
		echo "<p><input type='submit' value='Änderung in Datenbank speichern'/>";
		echo "<input type='reset'/></p>";
		echo "</form>";
		
		mysqli_close($con);
	}
	else
		echo "Es wurde kein Datensatz ausgewählt</p>";
?>
</body>
</html>