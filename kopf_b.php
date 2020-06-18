<html>
<body>
<?php

	/*Dokumentenbeginn*/
	echo "<p><b>Kopfrechnen</b></p>";
	
	/*Spielername*/
	echo "<p>Hallo <b>" . $_POST["vn"] . "</b>, Ihr Ergebnis</p>";
	
	/*Auswertung*/
	$richtig = 0;
	for($i=0; $i<5; $i++)
		if($_POST["ein"][$i] == $_POST["erg"][$i])
			$richtig ++;
			
	/*Ausgabe*/
	echo "<p>$richtig von 5 richtig</p>";
?>
<!--Hyperlink zum Anfang-->
<a href="kopf.html">Start</a></p>
</body>
</html>