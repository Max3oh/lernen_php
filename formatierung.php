<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	echo "<p><b>Zahlenformatierung:</b></p>";
	$d = 12.3 * 3098.55397 * 445.2;
	echo "<p>Variable d: $d</p>";
	echo "<p>Mit Tausendereinteilung (englisch), ohne Dezimalstelen:<br/>" . number_format($d) . "</p>";
	echo "<p>Mit Tausendereinteilung, auf drei Dezimalstellen gerundet (englisch):<br/>" . number_format($d,3) . "</p>";
	echo "<p>Mit Tausendereinteilung, auf drei Dezimalstellen gerundet (deutsch):<br/>" . number_format($d,3,",",".") . "</p>";
?>
</body>
</html>