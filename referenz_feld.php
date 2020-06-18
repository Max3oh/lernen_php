<html>
<meta charset = "utf-8">
<head>
<?php
	function vtauschen($f)
	{
		$temp = $f[0];
		$f[0] = $f[1];
		$f[1] = $temp;
	}
	function rtauschen(&$f)
	{
		$temp = $f[0];
		$f[0] = $f[1];
		$f[1] = $temp;
	}
?>
</head>
<body>
<?php
	$f[0] = 19;
	$f[1] = 126;
	echo "<p>Methode 1, vorher: $f[0], $f[1]<br/>";
	vtauschen($f);
	echo "Methode 2, nachher: $f[0], $f[1]</p>";
	
	$f[0] = 19;
	$f[1] = 126;
	echo "<p>Methode 2, vorher: $f[0], $f[1]<br/>";
	rtauschen($f);
	echo "Methode 2, nachher: $f[0], $f[1]</p>";
	
?>
</body>
</html>