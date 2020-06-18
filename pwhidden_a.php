<html>
<meta charset = "utf-8">
<head>
</head>
<body>
	<h1>Seite 1 </h1>
	<form action="pwhidden_b.php" method="post">
<?php
	echo "<p>Name: " . $_POST["bn"] . "</p>";
	echo "<input type='hidden' name='bnzwei' value='" . $_POST['bn'] . "' />";
	if($_POST["pw"] == "bingo")
		echo "<p>Zugang Erlaubt</p>";
	else
		echo "<p>Zugang eigentlich nicht erlaubt ...</p>";
?>
		<input type="submit" />
	</form>
</body>
</html>