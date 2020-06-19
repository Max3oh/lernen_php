<html>
<meta charset = "utf-8">
<head>
<?php
	if(isset($_POST["gesendet"]))
	{
		$con = mysqli_connect("", "root");
		mysqli_select_db($con, "hardware");
		
		$sql = "insert fp" . "(hersteller, typ, gb, preis, artnummer, prod) values " . "('" . $_POST["her"] . "', '" . $_POST["typ"] . "', " . $_POST["gb"] . ", " . $_POST["prs"] . ", '" . $_POST["art"] . "', '" . $_POST["pro"] . "')";

		mysqli_query($con, $sql);
		$num = mysqli_affected_rows($con);
		if($num>0)
		{
			echo "<p><font color='#00aa00'>";
			echo "1 Datensatz hinzugefügt";
			echo "</font></p>";
		}
		else
		{
			echo "<p><font color='#ff0000'>";
			echo "Es ist ein Fehler aufgetreten, ";
			echo "es wurde kein Datensatz hinzugefügt.";
			echo "</font></p>";
		}
		mysqli_close($con);
	}
?>
</head>
<body>
	<p>Geben Sie bitte ein vollständigen Datensatz ein<br/> und senden sie das Formular ab:</p>
		<form action="u_db_erzeugen.php" method="post">
			<p><input name="her" />Hersteller</p>
			<p><input name="typ" />Typ</p>
			<p><input name="gb" />Speicherkapazität (in GB)</p>
			<p><input name="prs" />Preis (Nachkommastelle mit Punkt)</p>
			<p><input name="art" />Artikelnummer</p>
			<p><input name="pro" />Produktionsdatum (Form JJJJ-MM-TT)</p>
			<p><input type="submit" name="gesendet" />
			<input type="reset" /></p>
		</form>
		
	<p>Alle Datensätze <a href="http://localhost/phpmyadmin/sql.php?db=hardware&table=fp&pos=0"> anzeigen</a></p>
</body>
</html>