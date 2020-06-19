<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	$con = mysqli_connect("", "root");
	mysqli_select_db($con, "firma");
	
	$sql = "update personen set " . " name = '" . $_POST["nn"] . "'," . " vorname ='" . $_POST["vn"] . "'," . " personalnummer = " . $_POST["pn"] . "," . " gehalt = " . $_POST["ge"] . "," . " geburtstag = '" . $_POST["gt"] . "'" . " where personalnummer = " . $_POST["orpin"];
	mysqli_query($con, $sql);
	
	$num = mysqli_affected_rows($con);
	if($num>0)
		echo "<p> Der Datensatz wurde geändert <p/>";
	else
		echo "<p> Der Datensatz wurde nicht geändert</p>";
	
	mysqli_close($con);
?>
<p>Zurück zur <a href="db_einzel_a.php">Auswahl</a></p>
</body>
</html>