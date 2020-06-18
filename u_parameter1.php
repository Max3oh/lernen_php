<html>
<meta charset = "utf-8">
<head>
<?php
	function vermerk($x)
	{
		echo "<br/>";
		echo "<table border='1'>";
		echo "<tr><td><b>Diese Programm wurde von $x geschrieben</b></td></tr>";
		echo "</table>";
	}
?>
</head>
<body>
<?php
    $y = "Bodo Wartke";
	$z = "Hans Wurst";
	$x = "Maximilian Maurer";
	echo "Dieses Programm wurde";
	vermerk($x);
	echo "von verschiedenen";
	vermerk($y);
	echo "Personen geschrieben!";
	vermerk($z);
?>
</body>
</html>