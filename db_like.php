<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	$con = mysqli_connect("","root");
	mysqli_select_db($con, "firma");
	
	$sql = "select name, vorname from personen";
	$sql .= " where name like 'M_____' order by name";
	
	$res = mysqli_query($con, $sql);
	$num = mysqli_num_rows($res);
	echo "$num Datensätze gefunden<br/>";
	
	while ($dsatz = mysqli_fetch_assoc($res))
		echo $dsatz["name"] . ", " . $dsatz["vorname"] . "<br/>";
	
	mysqli_close($con);
?>
</body>
</html>