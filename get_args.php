<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	function addiere()
	{
		$param = func_get_args();
		$anz = func_num_args();
		echo "<p>Anzahl der Werte: $anz<br/>";
		echo "Werte: ";
		
		$sum = 0;
		for($i=0; $i<$anz; $i++)
		{
			$sum = $sum + $param[$i];
			echo "$param[$i] ";
		}
		echo "<br/> Summe der Werte: $sum</p>";
	}
	addiere(4,5,6);
	addiere(36,24);
	addiere(-13,24,65,5,4.5,70);
?>
</body>
</html>