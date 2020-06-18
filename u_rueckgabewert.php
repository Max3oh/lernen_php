<html>
<meta charset = "utf-8">
<head>
<?php
	function bigger($x,$y)
	{
		if($x < $y)
			return $y;
		if($x > $y)
			return $x;
		if($x == $y)
			return $x;
	}
?>
</head>
<body>
<?php
	echo "Maximum: " . bigger(6,6) . "<br/>";
	
	$c = bigger(17,17.1);
	echo "Maximum: $c<br/>";
	
	$z1 = 23;
	$z2 = 71;
	echo "Maximum: " . bigger($z1,$z2) . "<br/>";
?>
</body>
</html>