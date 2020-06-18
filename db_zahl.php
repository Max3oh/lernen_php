<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	$con = mysqli_connect("","root");
	mysqli_select_db($con, "firma");
	
	$sql = "select name, gehalt from personen";
	$sql .= " where gehalt >= 50 and gehalt <= 3000";
	$sql .= " order by gehalt desc";
	$res = mysqli_query($con, $sql);
	$num = mysqli_num_rows($res);
	echo "$num Datensätze gefunden<br/>";
	while($dsatz = mysqli_fetch_assoc($res))
		echo $dsatz["name"] . ", " . $dsatz["gehalt"] . "<br/>";
	
	mysqli_close($con);
?>
</body>
</html>