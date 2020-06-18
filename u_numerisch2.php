<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<table border = "1">
<?php
	echo "<tr>";
	echo "<td>Name</td>";
	echo "<td>Alter</td>";
	echo "</tr>";
	
	$name = array("Max", "Klaus", "Peter", "Mandy", "Steffen", "Paul", "Giesela", "Andre"); 
	$alter = array(22, 34, 12, 14, 27, 54, 66, 32); 
	for ($i=0; $i<8; $i++)
	{
		echo "<tr>";
		echo "<td>$name[$i]</td>";
		echo "<td>$alter[$i]</td>";
		echo "</tr>";
	}
?>
</table>
</body>
</html>