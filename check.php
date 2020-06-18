<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	echo"<p>Danke für Ihre Anfrage, wir reservieren:</p>";
	if(isset($_POST["cb"]))
		echo "Zimmer mit " . $_POST["cb"] . ", Aufpreis 10 &euro;/Tag<br/>";
	if(isset($_POST["cm"]))
		echo "Zimmer mit " . $_POST["cm"] . ", Aufpreis 15 &euro;/Tag<br/>";
	if(isset($_POST["cz"]))
		echo "Zimmer mit " . $_POST["cz"] . ", Aufpreis 5 &euro;/Tag<br/>";
?>
</body>
</html>