<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	$tp = array("Max"=>23, "Paul"=>22, "Andre"=>33, "Steffe"=>48, "Fränze"=>48, "Yue"=>46);

	echo "<table border='1'>";
	echo "<tr><td><b>Name</b></td>";
	echo "<td><b>Alter</b></td></tr>";
	
	foreach($tp as $name =>$alter)
	{
		echo "<tr><td>$name</td>" . "<td>$alter</td></tr>";
	}
	echo "</table>";
	
?>
</body>
</html>