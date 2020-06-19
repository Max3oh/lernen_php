<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	$con = mysqli_connect("","root");
	mysqli_select_db($con, "firma");
	$sql = "select name, gehalt, vorname from personen where ";
	
	switch($_POST["geh"])
	{
		case 1:
			$sql .= "gehalt <= 1000";
			break;
		case 2:
			$sql .= "gehalt > 1000 and gehalt <= 2000";
			break;
		case 3:
			$sql .= "gehalt > 2000 and gehalt <= 3000";
			break;
		case 4:
			$sql .= "gehalt > 3000";
			break;
	}
	
	$res = mysqli_query($con,$sql);
	$num = mysqli_num_rows($res);
	if($num == 0)
		echo "Keine Passenden Datensätze gefunden";
	
	while($dsatz = mysqli_fetch_assoc($res))
		echo $dsatz["name"] . ", " . $dsatz["vorname"] . ", " . $dsatz["gehalt"] . "<br/>";
	
	mysqli_close($con);
?>
</body>
</html>