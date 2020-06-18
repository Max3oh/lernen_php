<html>
<body>
<?php
	/*Initaliesierung Zufallszahlgenerator*/
	srand((double)microtime()*1000000);
	
	/*Dokumentenbeginn*/
	echo "<p><b>Kopfrechnen</b></p>";
	
	/*Falls kein Name eingetragen*/
	if($_POST["vn"] == "")
	{
		echo "<p>Kein Name, kein Spiel</p>";
		echo "<a href='kopf.html'>Zurück</a>";
		echo "</body>";
		echo "</html>";
		exit;
	}
	
	/*Formularbeginn*/
	echo "<form action='kopf_b.php' method='post'>";
	
	/*Spielername*/
	echo "<p>Hallo <b>" . $_POST["vn"] . "</b>, Ihre Aufgaben</p>";
	echo "<input name='vn' type='hidden' value='" . $_POST["vn"] . "'/>";
	
	/*Tabellenbeginn*/
	echo "<table border='0'>";
	
	/*Aufgaben*/
	for($i=0; $i<5; $i++)
	{
		/*Operatorauswahl*/
		$opzahl = rand(1,5);
		
		/*Operanden Auswahl*/
		switch($opzahl)
		{
			case 1:
				$a = rand(-100,300);
				$b = rand(-100,300);
				$op = "+";
				$c = $a + $b;
				break;
			case 2:
				$a = rand(10,3000);
				$b = rand(10,3000);
				$op = "-";
				$c = $a - $b;
				break;
			case 3:
				$a = rand(1,20);
				$b = rand(1,20);
				$op = "*";
				$c = $a * $b;
				break;
				
			/*Sonderfall Division*/	
			case 4:
				$c = rand(1,20);
				$b = rand(1,20);
				$op = "/";
				$a = $c * $b;
			break;
			case 5:
				$a = rand(1,99);
				$b = rand(1,99);
				$op = "%";
				$c = $a % $b;
				break;
		}
		/*Tabellenzeile*/
		echo "<tr>";
		echo "<td>" . ($i+1) . ". $a $op $b = </td>";
		echo "<td><input name='ein[$i]' size='12'></td>";
		echo "</tr>";
		
		/*Richtiges Ergebniss senden*/
		echo "<input name='erg[$i]' type='hidden' value='$c'>";
	}
?>
</table>
<p><input type="submit" value="Fertig"></p>
</form>
</body>
</html>