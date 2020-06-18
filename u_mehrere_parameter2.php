<html>
<meta charset = "utf-8">
<head>
<?php
	function vermerk($vname,$nname,$abt)
	{
	echo "<br/>";
	echo "<table border='1'>";
	echo "<tr><td>Geschrieben von: <b>$nname, $vname</b><br/>Abteilung: <b>$abt</b><br/>Email: <b>$vname.$nname@$abt.phpdevel.de</b></td></tr>";
	echo "</table>";
	}
?>
</head>
<body>
<?php
	echo "Dieses Programm";
	vermerk("Maximilian","Maurer","Entwicklung");
	echo "wurde auch von";
	vermerk("André","Krüger","Azubi");
	echo "mehreren Personen geschrieben";
	vermerk("Hans","Wurst","Bespaßung");
?>
</body>
</html>