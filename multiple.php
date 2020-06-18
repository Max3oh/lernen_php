<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	echo "<p>Danke für Ihre Anfrage, wir reservieren:</p>";
	echo "<p>";
	for($i=0;$i<count($_POST["zusatz"]);$i++)
	{
		if (isset($_POST["zusatz"][$i]))
			echo "Zimmer mit " . $_POST["zusatz"][$i] . "<br/>"; 
	}
	echo"</p>";
?>
</body>
</html>