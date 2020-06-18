<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	$tp = array(17.5, 19.2, 21.8, 21.6, 17.5, 33.1 ,25.6, 37.1, 11.5);		// Werte werden der reihnfolge nach eingetrage
	$tp[9] = 20.2;															// Werte werden zu der zugeteilten nummer eingetragen 
	$tp[10] = 16.6;
	for($i=0; $i<=10; $i = $i+1)											// Gibt die nummer an
	{
		echo "Temperatur $i: $tp[$i]<br/>";
	}
?>
</body>
</html>