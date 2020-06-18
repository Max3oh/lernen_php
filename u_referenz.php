<html>
<meta charset = "utf-8">
<head>
<?php
	function rechne($y, $x, &$summe ,&$produkt)
	{
		$summe = $y + $x;
		$produkt = $y * $x;
	}
		function rechne2($y, $x, &$summe)
	{
		$summe = $y + $x;
		return $x * $y;
	}
?>
</head>
<body>
<?php
	$a = 12;
	$b = 4;
	$c = 0;
	$d = 0;
	echo $a . $b . $c . $d . "<br/>";
	rechne($a,$b,$c,$d);
	echo "Die Summe von $a und $b = $c<br/>";
	echo "Das Produkt von $a und $b = $d";
	$d = rechne2($a,$b,$c);
	echo "Die Summe von $a und $b = $c<br/>";
	echo "Das Produkt von $a und $b = $d";
?>
</body>
</html>