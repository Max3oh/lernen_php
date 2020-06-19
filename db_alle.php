<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	$con = mysqli_connect("", "root");
	mysqli_select_db($con, "firma");
	$sql = "update personen set gehalt = gehalt * 0.95";
	mysqli_query($con, $sql);
	
	$num = mysqli_affected_rows($con);
	echo "<p>Es wurden $num Datensätze geändert</p>";
	
	mysqli_close($con);
?>
<p>Alle Datensätze <a href="db_tabelle.php">anzeigen</a></p>
</body>
</html>