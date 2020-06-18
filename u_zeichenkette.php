<html>
<head>
<title>Übung zu Zeichenketten</title>
</head>
<body>
<?php
	$artikel1 = 22.5;
	$artikel2 = 12.3;
	$artikel3 = 5.2;
	$einheit_a = "€";
	$brutto = 1.19;
	$gesamtnetto = $artikel1 + $artikel2 + $artikel3;
	$gesammtbrutto = ($artikel1 + $artikel2 + $artikel3) * $brutto;
	echo "<p>Artikel 1: $artikel1 $einheit_a </p>";
	echo "<p>Artikel 2: $artikel2 $einheit_a </p>";
	echo "<p>Artikel 3: $artikel3 $einheit_a </p>";
	echo "</br>";
	echo "<p>Nettosumme: $gesamtnetto $einheit_a </p>";
	echo "<p>Umsatzsteuer: 19 % </p>";
	echo "<p>Bruttosumme: $gesammtbrutto $einheit_a </p>";
?>
</body>
</html>