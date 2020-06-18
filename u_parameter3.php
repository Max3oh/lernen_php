<html>
<meta charset = "utf-8">
<head>
<?php
	function quadrat($zahl)
	{
	$x = $zahl * $zahl;
	return $x;
	}
?>
</head>
<body>
<?php
	$a = $_POST['z1'];
	$b = $_POST['z2'];
	$c = $_POST['z3'];
	$d = $_POST['z4'];
	echo "Das Quadrat von " . $_POST['z1'] . "=" . quadrat($a);
	echo "<br/>";
	echo "Das Quadrat von " . $_POST['z2'] . "=" . quadrat($b);
	echo "<br/>";
	echo "Das Quadrat von " . $_POST['z3'] . "=" . quadrat($c);
	echo "<br/>";
	echo "Das Quadrat von " . $_POST['z4'] . "=" . quadrat($d);
	echo "<br/>";
	echo "Die Summe von " . quadrat($a) . "+" . quadrat($b) . "+" . quadrat($c) . "+" . quadrat($d) . "=";  
	echo quadrat($a) + quadrat($b) + quadrat($c) + quadrat($d);
?>
</body>
</html>