<html>
<meta charset = "utf-8">
<head>
<?php
 function mittel($z1,$z2,$z3)
 {
	$erg = ($z1 + $z2 + $z3)/3;
	echo "Der Mittelwert $z1, $z2 und $z3 ist $erg<br/>";
 }
?>
</head>
<body>
<?php
	$x = 12;
	$y = 37;
	$z = 84;
	mittel(1,2,3);
	mittel(16,34,17);
	mittel($x,$y,$z);
	mittel($x,$y - 1,$z - 12);
	
?>
</body>
</html>