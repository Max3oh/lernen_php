<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	$con = mysqli_connect("", "root");
	mysqli_select_db($con, "hardware");
	$sql = "update fp set" . " hersteller = '" . $_POST["her"] . "', typ ='" . $_POST["typ"] . "', gb=" . $_POST["gb"] . ", preis = " . $_POST["pr"] . ", artnummer = '" . $_POST["id"] . "', prod='" . $_POST["dat"] . "' where artnummer = '" . $_POST["orart"] . "'";
	mysqli_query($con, $sql);
	
	$num = mysqli_affected_rows($con);
	if($num>0)
		echo "<p>Datensatz wurde geändert</p>";
	else
		echo "<p>Datensatz wurde nicht geändert</p>";
?>
<p>Zurück zur <a href="u_db_einzel_a.php">Auswahl</a></p>
</body>
</html>