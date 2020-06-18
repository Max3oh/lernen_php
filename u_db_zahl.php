<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	$con = mysqli_connect("","root");
	mysqli_select_db($con, "hardware");
	$sql = "select * from fp";
	$sql .= " where gb > 60 and preis < 150";
	$sql .= " order by gb desc";
	$res = mysqli_query($con,$sql);
	$num = mysqli_num_rows($res);
	echo "$num Datensätze gefunden<br/>";
	while($dsatz = mysqli_fetch_assoc($res))
		echo $dsatz["hersteller"] . ", " . $dsatz["typ"] . ", " . $dsatz["gb"] . ", " . $dsatz["preis"] . ", " . $dsatz["prod"] . ", " . $dsatz["artnummer"] . "<br/>";
	
	mysqli_close($con);
?>
</body>
</html>