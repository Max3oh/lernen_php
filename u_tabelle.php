<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<table border="1">
<?php
	for ($e=1; $e<=10; $e=$e+1)
	{
		echo "<tr>";
		for ($m=1; $m<=10; $m++)
		{
			echo "<td align='left'>" . $e*$m . "</td>";
		}
		echo "</tr>";
	}
?>
</table>
</body>
</html>