<html>
<head>
<title>Übung zur Auswertung durch PHP</title>
</head>
<body>
<?php
	echo "Guten Tag, " . $_POST["vor"] . " " . $_POST["nach"] . "!<br/>" ;
	echo " <br/>";
	echo "Ihre Adresse lautet:<br/>";
	echo $_POST["strasse"]. "<br/>";
	echo $_POST["ort"] . " " . $_POST["postleitzahl"];
?>
</body>
</html>