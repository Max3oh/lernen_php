<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	$con = mysqli_connect("", "root");
	mysqli_select_db($con, "hardware");
	$res = mysqli_query($con, "select * from fp");
	$num = mysqli_num_rows($res);
	echo "$num Datensätze gefunden<br/>";
	
	while($dsatz = mysqli_fetch_assoc($res))
	{
		echo $dsatz["hersteller"] . ", " . $dsatz["typ"] . ", " . $dsatz["gb"] . ", " . $dsatz["preis"] . ", " . $dsatz["artnummer"] . ", " . $dsatz["prod"] . "<br/>";
	}
	
	mysqli_close($con);
?>
</body>
</html>