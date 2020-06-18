<html>
<meta charset = "utf-8">
<head>
<?php
	function quadrat($zahl)
	{
	$x = $zahl * $zahl;
	echo "<br/>";
	echo "Das Quadrat von " . "$zahl" . " = $x";
	echo "<br/>";
	}
?>
</head>
<body>
<?php
	$a = $_POST['z1'];
	quadrat($a);
	$b = $_POST['z2'];
	quadrat($b);
	$c = $_POST['z3'];
	quadrat($c);
	$d = $_POST['z4'];
	quadrat($d);
?>
</body>
</html>