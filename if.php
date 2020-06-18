<html>
<head>
<title>If und Else Befehl</title>
</head>
<body>
<?php
	$preis = 1.8;
	if ($preis < 1) 
	{
		echo "Der Preis liegt unter 1 &euro;.<br/>";
		echo "Das ist Günstig";
	}
	else
	{
		echo "Der Preis liegt bei 1 &euro; oder darüber.<br/>";
		echo "Langsam wird es teuer!";
	}
?>
</body>
</html>