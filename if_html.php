<html>
<meta charset = "utf-8">
<head>
</head>
<body>
<?php
	$preis = 0.99;
	if ($preis < 1):
?>
	Der Preis liegt unter 1 &euro;<br/>
	Das ist günstig!
<?php else: ?>
	Der Preis liegt bei 1 &euro; oder höher<br/>
	Langsam wird es teuer!
<?php endif; ?>
</body>
</html>