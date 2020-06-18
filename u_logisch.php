<html>
<meta charset = "utf-8">
<head>
<title></title>
</head>
<body>
<?php
	if (($_POST["name"] == "Maurer" && $_POST["pw"] == "1234") || ($_POST["name"] == "Prokosch" && $_POST["pw"] == "4321")) 
		echo "Hallo Herr " . $_POST["name"];
	else
		echo "Invalid";
?>
</body>
</html>