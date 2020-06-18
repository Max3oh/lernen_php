<html>
<meta charset = "utf-8">
<head>
<title>PHP/Zugang mit IF ELSE Befehl</title>
</head>
<body>
<?php
	if ($_POST["pw"] == "1234")
		echo "Zugang gestattet";
	else
		echo "Zugang verweigert";
?>
</body>
</html>