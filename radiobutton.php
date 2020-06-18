<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	echo "Sie möchten also nach " . $_POST["rziel"] . " in ein " . $_POST["htyp"] . "-Sterne-Hotel.<br/>";
	if($_POST["rziel"] == "Gomera")
	{
		if($_POST["htyp"] == "Drei")
			$ang = 7;
		else 
			$ang = 1;
	}
	if($_POST["rziel"] == "Lanzerote")
	{
		if($_POST["htyp"] == "Drei")
			$ang = 3;
		else
			$ang = 12;
	}
	if($_POST["rziel"] == "Fuerteventura")
	{
		if($_POST["htyp"] == "Drei")
			$ang = 17;
		else
			$ang = 2;
	}
	echo "Dazu haben wir $ang Angebote.";
?>
</body>
</html>