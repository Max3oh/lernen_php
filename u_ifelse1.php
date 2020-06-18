<html>
<head>
<title>Übung IF ELSE 1</title>
</head>
<body>
<?php
	$normal = $_POST["benzin"] == "N";
	$super = $_POST["benzin"] == "S";
	$menge = $_POST["menge"];
	$temp = 0; 
	if ($normal)
	{
		$temp = $menge * 1.1;
	}
	if ($super)
	{
		$temp = $menge * 1.4;
	}
	if ($menge >= 100)
	{
		$temp = $temp * 0.98;
	}
	if ($normal)
	{
		echo $_POST["menge"] . " Liter Normal kosten " . $temp . "&euro;";
	}
	if ($super)
	{
		echo $_POST["menge"] . " Liter Super kosten " . $temp . "&euro;";
	}
	
?>
</body>
</html>