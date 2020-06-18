<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	$con = mysqli_connect("", "root");
	mysqli_select_db($con, "hardware");
	
	$sql = "select hersteller, typ, prod, artnummer from fp";
	$sql .= " where prod < '2008-07-01'";
	$sql .= " order by prod";
	
	$res = mysqli_query($con, $sql);
	$num = mysqli_num_rows($res);
	echo "$num Datensätze gefunden<br/>";
	
	while($dsatz = mysqli_fetch_assoc($res))
		echo $dsatz["hersteller"] . ", " . $dsatz["typ"] . ", " . $dsatz["prod"] . ", " . $dsatz["artnummer"] . "<br/>";
	
	mysqli_close($con);
?>
</body>
</html>