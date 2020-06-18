<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	if ($_POST["ben"] == "Peter")
	{
		if ($_POST["pw1"] == "Hamburg")
			echo "Spezielle Informationen für Peter<br/>und<br/>";
		else
			echo "Falsches Passwort für Peter<br/>nur<br/>";
	}
	else if ($_POST["ben"] == "Julia")
	{
		if ($_POST["pw2"] == "Leipzig")
			echo "Spezielle Informationen für Julia <br/>und<br/>";
		else
			echo "Falsches Passwort für Julia<br/>nur<br/>";
	}
	else if ($_POST["ben"] == "Dirk")
	{
		if ($_POST["pw3"] == "Jena")
			echo "Spezielle Informationen für Dirk<br/>und<br/>";
		else
			echo "Falsches Passwort für Dirk<br/>nur<br/>";
	}

	echo "Allgemeine Informationen für beliebige Benutzer";

?>
</body>
</html>