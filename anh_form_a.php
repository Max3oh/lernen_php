<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<h2> seite 1</h2>
<?php
	echo "<form action='anh_form_b.php?benzwei=" . $_POST["ben"] . "&grzwei=" . $_POST["gr"] . "' method='post'>";
	echo "<p>Name: " . $_POST["ben"] . "<br/>";
	echo "Gruppe: " . $_POST["gr"] . "</p>";
?>
<p><input type="submit" value="weiter"/></p>
</body>
</html>