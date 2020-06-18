<html>
<head>
<title>Übung IF ELSE 1</title>
</head>
<body>
<?php
	$normal = $_POST["sorte"] == "N";
	$super = $_POST["sorte"] == "S";
	$diesel = $_POST["sorte"] == "D";
	if ($normal)
		echo $_POST["menge"] . " Liter Normal kosten " . $_POST["menge"] * 1.3 . "&euro;";
	else
		if ($super)
			echo $_POST["menge"] . " Liter Super kosten " . $_POST["menge"] * 1.5 . "&euro;";
	else
		if ($diesel)
			echo $_POST["menge"] . " Liter Diesel kosten " . $_POST["menge"] * 1.1 . "&euro;";
	else
		echo "Invalid"
?>
</body>
</html>