<html>
<head>
<title>Zeichenketten</title>
</head>
<body>
<?php
	$liter = 14;																	//Zahlen ,mit denen gerechnet wird, können ohne jegliche sonderzeichen geschrieben werden. 
	$preis = 1.41;
	$zahlung = $liter * $preis;
	$einheit1 = "Liter";															//Anführungszeichen werden benutzt um Strings=Textausgaben dazustellen.
	$einheit2 = "Euro";
	
	/*
	Html-Code kann in PHP genutz werden.
	Einzelne Variablen und Strings können mit punkten "." verbunden werden
	Leerzeichen müssen mitgeschrieben werden!
	.= zum verlängern html-codes(operator) genutzt
	*/
	$gesamt = "<p>Tankfüllung: " . $liter . " " . $einheit1;
	$gesamt .= " kosten " . $zahlung . " " . $einheit2 . "</p>";
	//Bsp. für versichedene wege Sachen auszugeben
	echo $gesamt;																	//gibt den zugehörigen Wert der definierten Variable aus
	echo "<p>Tankfüllung: $liter $einheit1 kosten $zahlung $einheit2</p>";			//gibt die Werte der Variablen und HTML-Code aus
	echo '<p>Tankfüllung: $liter $einheit1 kosten $zahlung $einheit2</p>';			//gibt die Namen der Variablen und HTML-Code aus
?>
</body>
</html>