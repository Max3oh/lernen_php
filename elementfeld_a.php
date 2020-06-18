<html>
<meta charset = "utf-8">
<head>
</head>
<body>
	<h1>Kontrolle der Anwesenheit</h1>
	<form action="elementfeld_b.php" method="post">
<?php
	include "elementfeld.inc.php";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td><b>ID</b></td>";
	echo "<td><b>Name</b></td>";
	echo "<td><b>Anwesend</b></td>";
	echo "</tr>";
	
	/* Bearbeitung des ganzen Feldes(Array) */
	foreach($person as $id=>$name)
	{
		echo "<tr>";
		echo "<td>$id</td>";
		echo "<td>$name</td>";
		echo "<td><input type='checkbox' name='pe[$id]'></td>";
		echo "</tr>";
	}
	echo "</table>";
?>
	<p><input type="submit" value="Anwesenheit speichern"/></p>
</body>
</html>