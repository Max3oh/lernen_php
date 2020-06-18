<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	for ($i=1; $i<=15; $i++)
	{
		if($i>=5 && $i<=11)
			continue;
		echo "Zeile $i<br/>";
	}
?>
</body>
</html>