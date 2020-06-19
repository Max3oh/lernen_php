<html>
<meta charset = "utf-8">
<head>
<?php
	if (isset($_POST["gesendet"]))
	{
		$con = mysqli_connect("","root");
		mysqli_select_db($con,"firma");
		
		$sql = "insert personen" . "(name, vorname, personalnummer, gehalt, geburtstag) values " . "('" . $_POST["na"] . "', " . "'" . $_POST["vn"] . "', " . $_POST["pn"] . ", " . $_POST["ge"] . ", " . "'" . $_POST["gt"] . "')";
		
		mysqli_query($con, $sql);
		
		$num = mysqli_affected_rows($con);
		if ($num>0)
		{
			echo "<p><font color='#00aa00'>";
			echo "Es wurde 1 Datensatz hinzugefügt";
			echo "</font></p>";
		}
		else
		{
			echo "<p><font color='#ff0000'>";
			echo "Es ist ein Fehler aufgetreten, ";
			echo "es wurde kein Datensatz hinzugefügt";
			echo "</font></p>";
		}
		
		mysqli_close($con);
	}
?>
</head>
<body>
	<p>Geben Sie bitte einen volständigen Datensatz ein<br/> und senden Sie das Formular ab:</p>
		<form action="db_erzeugen.php" method="post">
			<p><input name="na" />Name</p>
			<p><input name="vn" />Vorname</p>
			<p><input name="pn" />Personalnummer (eine Ganze Zahl)</p>
			<p><input name="ge" />Gehalt (Nachkommastelle mit Punkt)</p>
			<p><input name="gt" />Geburtstag (in der Form JJJJ-MM-TT)</p>
			<p><input type="submit" name="gesendet" />
			<input type="reset" /></p>
		</form>
		
		<p>Alle Datensätze <a href="db_tabelle.php"> anzeigen</a></p>
</body>
</html>