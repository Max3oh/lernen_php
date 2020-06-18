<html>
<meta charset = "utf-8">
<head>
</head>
<body>
	<h1>Kontrolle der Anwesenheit</h1>
<?php
	include "elementfeld.inc.php";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td><b>ID</b></td>";
	echo "<td><b>Name</b></td>";
	echo "<td><b>Aktion</b></td>";
	
	/* Bearbeitung des ganzen Feldes(Array) */
	foreach($person as $id=>$name)
	{
		echo "<tr>";
		echo "<td>$id</td>";
		echo "<td>$name</td>";
		if (isset($_POST["pe"][$id]))
		{
			echo "<td>wurde gespeichert</td>";
			echo "</tr>";
		}
		else
		{
			echo "<td>&nbsp;</td>";
			echo "</tr>";
		}
	}
	echo "</table>";
?>
</body>
</html>