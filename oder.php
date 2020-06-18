<html>
<meta charset = "utf-8">
<head>
<title>PHP/Zugang mit IF ELSE Befehl</title>
</head>
<body>
<?php
	if ($_POST["pw"] == "1234" || $_POST["pw"] == "4321" )
		echo "Zugang gestattet";
	else
		echo "Zugang verweigert";
?>
</body>
</html>