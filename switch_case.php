<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	switch($_POST["sorte"])
	{
		case "N":
			$zahlung = $_POST["menge"] * 1.3;
			echo $_POST["menge"] . " Liter Normal kosten " . $zahlung . "&euro;";
			break;
		case "S":
			$zahlung = $_POST["menge"] * 1.5;
			echo $_POST["menge"] . " Liter Super kosten " . $zahlung . "&euro;";
			break;
		case "D":
			$zahlung = $_POST["menge"] * 1.1;
			echo $_POST["menge"] . " Liter Diesel kosten " . $zahlung . "&euro;";
			break;
		default:
			echo "Bitte zwischen S, N oder D auswählen";
	}
?>
</body>
</html>