<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	$con = mysqli_connect("","root");
	mysqli_select_db($con, "hardware");
	
	$sql = "select * from fp  where hersteller like ";
	
	switch($_POST["her"])
	{
		case 1:
			$sql .= "'Q%'";
			break;
		case 2:
			$sql .= "'S%'";
			break;
		case 3:
			$sql .= "'F%'";
			break;
		case 4:
			$sql .= "'I%'";
			break;
	}
	$res = mysqli_query($con, $sql);
	$num = mysqli_num_rows($res);
	
	if($num == 0)
		echo "Keine Passenden Einträge gefunden";
	else
	{
		echo "<table border='2'>";
		echo "<tr align='center'>";
		echo "<td>Hersteller</td><td>Typ</td><td>S. Kapazität</td><td>Preis</td><td>Artikelnr.</td><td>Datum ...</td></tr>";
		
		while($dsatz = mysqli_fetch_assoc($res))
		{
			echo "<tr align='center'>";
			echo "<td>" . $dsatz['hersteller'] . "</td>";
			echo "<td>" . $dsatz['typ'] . "</td>";
			echo "<td>" . $dsatz['gb'] . "</td>";
			echo "<td>" . $dsatz['preis'] . "</td>";
			echo "<td>" . $dsatz['artnummer'] . "</td>";
			echo "<td>" . $dsatz['prod'] . "</td>";
		}
		echo "</table>";
	}
	mysqli_close($con);
?>
</body>
</html>