<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	include "db_connect.inc.php";
	
	$sql = "DROP TABLE if exists " . $_GET["tname"];
	echo "<p>$sql</p>";
	mysqli_query($con, $sql);
	
	$sql = "CREATE TABLE " . $_GET["tname"]
	. "(name VARCHAR(30),"
	. " vorname VARCHAR(25),"
	. " personalnummer INT(11),"
	. " gehalt DOUBLE,"
	. " geburtstag DATE,"
	. " PRIMARY KEY personalnummer (personalnummer)"
	. " )";
	echo "<p>$sql</p>";
	mysqli_query($con, $sql);
	
	$sql = "insert " . $_GET["tname"] . " values"
	. " ('Maier', 'Hans', 1234, '3456', '1964-05-13');";
	echo "<p>$sql</p>";
	mysqli_query($con, $sql);
	
	$sql = "insert " . $_GET["tname"] . " values"
	. " ('Müller', 'Peter', 2345, '2850.6', '1993-01-20');";
	echo "<p>$sql</p>";
	mysqli_query($con, $sql);
	
	$sql = "insert " . $_GET["tname"] . " values"
	. " ('Hellerman', 'Lisa', 3456, '2997.1', '1998-11-02');";
	echo "<p>$sql</p>";
	mysqli_query($con, $sql);
	
	mysqli_close($con);
?>
</body>
</html>